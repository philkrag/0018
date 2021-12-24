<!DOCTYPE html>
<?php
// /////////////////////////////////////////////////////////////////////// COPYRIGHT NOTICE

// This file is part of OS-Management-Portal.

// OS-Management-Portal is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

// OS-Management-Portal is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.

// You should have received a copy of the GNU General Public License
// along with OS-Management-Portal.  If not, see <http://www.gnu.org/licenses/>.

// /////////////////////////////////////////////////////////////////////// COPYRIGHT NOTICE

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL

// PAGE CREATED BY: Phillip Kraguljac
// PAGE CREATED DATE: 2020-09-21

// DATE   		|| NAME 					|| MODIFICATION
// 2021-04-24 	|| Phillip Kraguljac 		|| v1.5. (created)

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>

<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Background Thread</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">

<br><button onclick="history.go(-1);">Back</button><br><br>


<?php

$SQL_Prefix = "";
if(isset($_GET['Equipment_ID'])){ $Equipment_ID = Basic_Filter_Input( $_GET['Equipment_ID']); $SQL_Prefix = "WHERE "; }else{ $Equipment_ID = null; }

?>


<?php

if($Equipment_ID != null){$Equipment_ID_Inset = "`Equipment ID` = '{$Equipment_ID}' "; }else{ $Equipment_ID_Inset = ""; }
$SQL_Search_Script = $SQL_Prefix.$Equipment_ID_Inset;

?>


<?php

echo  "Equipment ID: ".$Equipment_ID."<br>";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_monitoring-points` ";
$Display_Array['MySQL_Filter'] = $SQL_Search_Script;
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

$sql = $Display_Array['MySQL_Action'].$Display_Array['MySQL_Table'].$Display_Array['MySQL_Filter'].$Display_Array['MySQL_Order'].$Display_Array['MySQL_Limit'].$Display_Array['MySQL_Offset'];
$result = mysqli_query($Database_Connection, $sql);

$Central_Values['ID'] = "";
$Central_Values['Equipment ID'] = "";
$Central_Values['Inspection Point'] = "";
$Central_Values['Method of Measure'] = "";
$Central_Values['Date Status'] = "";
$Central_Values['Measurement Status'] = "";
$Central_Values['Last Inspection Completed'] = "";
$Central_Values['Modified Date'] = "";
$Central_Values['Modified By'] = "";

while($row = mysqli_fetch_assoc($result)) {

$Central_Values['ID'] = $row['ID'];
$Central_Values['Equipment ID'] = $row['Equipment ID'];
$Central_Values['Inspection Point'] = $row['Inspection Point'];
$Central_Values['Method of Measure'] = $row['Method of Measure'];
$Central_Values['Date Status'] = $row['Date Status'];
$Central_Values['Measurement Status'] = $row['Measurement Status'];
$Central_Values['Last Inspection Completed'] = $row['Last Inspection Completed'];
$Central_Values['Modified Date'] = $row['Modified Date'];
$Central_Values['Modified By'] = $row['Modified By'];

echo  "Checking Point: ".$row['ID']."...";

// echo "=> CENTRAL VALUES<br>";
// echo "RECORD ID...[{$Central_Values['ID']}]<br>";
// echo "Equipment ID...[{$Central_Values['Equipment ID']}]<br>";
// echo "Inspection Point...[{$Central_Values['Inspection Point']}]<br>";
// echo "Method of Measure...[{$Central_Values['Method of Measure']}]<br>";
// echo "Inspection Current...[{$Central_Values['Inspection Status']}]<br>";
// echo "Date Status...[{$Central_Values['Date Status']}]<br>";
// echo "Measurement Status...[{$Central_Values['Measurement Status']}]<br>";

// echo "Last Inspection Completed...[{$Central_Values['Last Inspection Completed']}]<br>";
// echo "Modified Date...[{$Central_Values['Modified Date']}]<br>";
// echo "Modified By...[{$Central_Values['Modified By']}]<br>";
// echo "<br>";

// echo "==> INSPECTION VALUES<br>";
$Inspected_Values = Retreive_Inspection($Database_Connection, $Central_Values['ID']);
// echo "<br>....Modified By...[{$Inspected_Values['ID']}]<br>";
// echo "<br>....Measured Amount...[{$Inspected_Values['Measured Amount']}]";
// echo "<br>....Unit of Measure...[{$Inspected_Values['Unit of Measure']}]";
// echo "<br>....Measured Date...[{$Inspected_Values['Measured Date']}]";
// echo "<br>....Measure By...[{$Inspected_Values['Measure By']}]<br>";
// echo "<br>";
Update_Measurement_Stats($Database_Connection, $Central_Values['ID'], $Inspected_Values);





// echo "==> SPECIFICATION VALUES<br>";
$Specification_Values = Specifications_Review($Database_Connection, $Central_Values['ID'], $Inspected_Values);
Update_Review_Stats($Database_Connection, $Central_Values['ID'], $Specification_Values);


// THE FOLLOWING MAY BE CRITICAL - NEED TO REMOVE FOR FAULT FINDING
//$Specification_Values['Last Measured Amount'] = $Inspect_Values['Measured Amount'];
//$Specification_Values['Last Unit of Measure'] = $Inspect_Values['Unit of Measure'];
//$Specification_Values['Last Measured Date'] = $Inspect_Values['Measured Date'];







//Update_Status($Database_Connection, $Central_Values['ID'], $Inspected_Values);

// echo "<br>";
}

// echo "Updating System Log...";



?>


<?php

function Retreive_Inspection($Database_Connection, $ID){
	
$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_monitoring-points-inspections` ";
$Display_Array['MySQL_Filter'] = "WHERE `Monitoring Point ID` = ".$ID."  AND `Deleted Date` IS NULL ";
$Display_Array['MySQL_Order'] = "ORDER BY `Measured Date` DESC ";
$Display_Array['MySQL_Limit'] = "LIMIT 1 ";
$Display_Array['MySQL_Offset'] = "";

$sql = $Display_Array['MySQL_Action'].$Display_Array['MySQL_Table'].$Display_Array['MySQL_Filter'].$Display_Array['MySQL_Order'].$Display_Array['MySQL_Limit'].$Display_Array['MySQL_Offset'];
$result = mysqli_query($Database_Connection, $sql);
while($row = mysqli_fetch_assoc($result)) {
	
$Inspected_Values['ID'] = $row['ID'];
$Inspected_Values['Measured Amount'] = $row['Measured Amount'];
$Inspected_Values['Unit of Measure'] = $row['Unit of Measure'];
$Inspected_Values['Measured Date'] = $row['Measured Date'];
$Inspected_Values['Measure By'] = $row['Measure By'];
}
	
return $Inspected_Values;
}

?>









<?php

function Specifications_Review($Database_Connection, $ID, $Inspected_Values){

$Return_Values['Date Status'] = "OK";
$Return_Values['Measurement Status'] = "OK";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_specifications` ";
$Display_Array['MySQL_Filter'] = "WHERE `Monitoring Point ID` = ".$ID." AND `Deleted Date` IS NULL ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

$sql = $Display_Array['MySQL_Action'].$Display_Array['MySQL_Table'].$Display_Array['MySQL_Filter'].$Display_Array['MySQL_Order'].$Display_Array['MySQL_Limit'].$Display_Array['MySQL_Offset'];
$result = mysqli_query($Database_Connection, $sql);
while($row = mysqli_fetch_assoc($result)) {


if($row['Inspection Interval (Days)'] != null && $row['Inspection Interval (Days)'] != ""){
$Date_Due = date("Y-m-d", strtotime($Inspected_Values['Measured Date']. " +".$row['Inspection Interval (Days)']." day"));
}else{ $Date_Due = ""; }

// echo "<br>....Inspection Monitoring...[{$row['Inspection Monitoring']}]";
// echo "<br>....Measured Amount...[{$Inspected_Values['Measured Amount']}]";
// echo "<br>....UOM...[{$Inspected_Values['Unit of Measure']}]";
// echo "<br>....Minimum Allowable...[{$row['Minimum Allowable']}]";
// echo "<br>....Maximum Allowable...[{$row['Maximum Allowable']}]";
// echo "<br>....Inspection Interval (Days)...[{$row['Inspection Interval (Days)']}]";
// echo "<br>....Current Date...[".date("Y-m-d", strtotime("now"))."]";
// echo "<br>....Date Due...[".$Date_Due."]";

if($row['Inspection Monitoring'] == "Auto" && $Date_Due != ""){
if(date("Y-m-d", strtotime("now")) > $Date_Due){ $Return_Values['Date Status'] = "Attention";}
}

if($row['Inspection Monitoring'] == "Auto"){
if($Inspected_Values['Measured Amount']<$row['Minimum Allowable'] && ($row['Minimum Allowable']<>"" && $row['Minimum Allowable'] <> NULL)){ $Return_Values['Measurement Status'] = "Attention"; }
if($Inspected_Values['Measured Amount']>$row['Maximum Allowable'] && ($row['Maximum Allowable']<>"" && $row['Maximum Allowable'] <> NULL)){ $Return_Values['Measurement Status'] = "Attention"; }
}

// echo "....Date Status...[".$Return_Values['Date Status']."]<br>";
}

return $Return_Values;
}

?>


<?php

function Update_Measurement_Stats($Database_Connection, $ID, $Inspected_Values){

if($Inspected_Values['Measured Amount'] != ""){$Last_Measured_Amount_Inset = ", `Last Measured Amount` = '".$Inspected_Values['Measured Amount']."'"; }else{ $Last_Measured_Amount_Inset = ""; }
if($Inspected_Values['Unit of Measure'] != ""){$Last_Unit_of_Measure_Inset = ", `Last Unit of Measure` = '".$Inspected_Values['Unit of Measure']."'"; }else{ $Last_Unit_of_Measure_Inset = ""; }
if($Inspected_Values['Measured Date'] != ""){$Last_Measured_Date_Inset = ", `Last Measured Date` = '".$Inspected_Values['Measured Date']."'"; }else{ $Last_Measured_Date_Inset = ""; }

$Input_Array['MySQL_Action'] = "UPDATE ";
$Input_Array['MySQL_Table'] = "`reg_monitoring-points` ";
$Input_Array['MySQL_Set'] = "SET 
`Date Status` = '".$Inspected_Values['Date Status']."', 
`Measurement Status` = '".$Inspected_Values['Measurement Status']."'
{$Last_Measured_Amount_Inset}
{$Last_Unit_of_Measure_Inset}
{$Last_Measured_Date_Inset}
";
$Input_Array['MySQL_Filter'] = "WHERE `ID` = '".$ID."' ";
$Input_Array['MySQL_Order'] = "";
$Input_Array['MySQL_Limit'] = "";
$Input_Array['MySQL_Offset'] = "";

$MySQL_Command_Script = 
$Input_Array['MySQL_Action'].
$Input_Array['MySQL_Table'].
$Input_Array['MySQL_Set'].
$Input_Array['MySQL_Filter'].
$Input_Array['MySQL_Order'].
$Input_Array['MySQL_Limit'].
$Input_Array['MySQL_Offset'];

// echo "<br>".$MySQL_Command_Script; //TECHNICAL SUPPORT PURPOSES
if ($Database_Connection->query($MySQL_Command_Script) === TRUE) {
//echo "[OK]<br>";
} else {
//echo "[FAILED]<br>";
}
}

?>


<?php

function Update_Review_Stats($Database_Connection, $ID, $Specification_Values){

$Input_Array['MySQL_Action'] = "UPDATE ";
$Input_Array['MySQL_Table'] = "`reg_monitoring-points` ";
$Input_Array['MySQL_Set'] = "SET 
`Date Status` = '".$Specification_Values['Date Status']."', 
`Measurement Status` = '".$Specification_Values['Measurement Status']."'
";
$Input_Array['MySQL_Filter'] = "WHERE `ID` = '".$ID."' ";
$Input_Array['MySQL_Order'] = "";
$Input_Array['MySQL_Limit'] = "";
$Input_Array['MySQL_Offset'] = "";

$MySQL_Command_Script = 
$Input_Array['MySQL_Action'].
$Input_Array['MySQL_Table'].
$Input_Array['MySQL_Set'].
$Input_Array['MySQL_Filter'].
$Input_Array['MySQL_Order'].
$Input_Array['MySQL_Limit'].
$Input_Array['MySQL_Offset'];

//echo "<br>".$MySQL_Command_Script; //TECHNICAL SUPPORT PURPOSES
if ($Database_Connection->query($MySQL_Command_Script) === TRUE) {
echo "[OK]<br>";
} else {
echo "[FAILED]<br>";
}
}

?>


<?php

function Update_System_Log($Database_Connection){

$Input_Array['MySQL_Action'] = "INSERT INTO ";
$Input_Array['MySQL_Table'] = "`rec_system-log` ";
$Input_Array['MySQL_Set'] = "(`Date`, `Time`, `Description`, `Modified Date`, `Modified By`) VALUES ('".date("Y-m-d")."', '".date("h:i:s")."', 'Specification Inspection Check.', '".date("Y-m-d")."', 'System') ";
$Input_Array['MySQL_Filter'] = "";
$Input_Array['MySQL_Order'] = "";
$Input_Array['MySQL_Limit'] = "";
$Input_Array['MySQL_Offset'] = "";

$MySQL_Command_Script = 
$Input_Array['MySQL_Action'].
$Input_Array['MySQL_Table'].
$Input_Array['MySQL_Set'].
$Input_Array['MySQL_Filter'].
$Input_Array['MySQL_Order'].
$Input_Array['MySQL_Limit'].
$Input_Array['MySQL_Offset'];

//echo $MySQL_Command_Script; //TECHNICAL SUPPORT PURPOSES
if ($Database_Connection->query($MySQL_Command_Script) === TRUE) { 
//echo "[OK]<br>"; 
} else { 
//echo "[FAILED]<br>"; 
}

}

?>

</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
