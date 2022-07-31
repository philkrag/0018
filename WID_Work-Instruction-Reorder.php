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
// 2022-06-14 	|| Phillip Kraguljac 		|| v1.8 (Created)

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>

<?php 

//include $_SERVER['DOCUMENT_ROOT'].'/Functions/Filter_Tools.php';

?>

<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Copy Work Instruction</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">


<?php

$WMS_ReOrder = null;
if(isset($_POST['WMS_ReOrder'])){$WMS_ReOrder = $_POST['WMS_ReOrder'];}
if(isset($_GET['WMS_ReOrder'])){$WMS_ReOrder = $_GET['WMS_ReOrder'];}

if(isset($_POST['Confirmation'])){$Confirmation = $_POST['Confirmation'];}else{$Confirmation = "No";}

if($Confirmation=="Yes" && ($WMS_ReOrder != "" || $WMS_ReOrder == NULL)){
	$Authroity_To_Process = "Yes";
}else{
	$Authroity_To_Process = "No";
}


?>


<?php

echo "<form action=\"".$_SERVER['REQUEST_URI']."\"  method=\"POST\">";
echo "<table class=\"Details_Table\" style=\"width:100%\">";
echo "<col width=\"300px\">";
echo "<col width=\"*\">";

echo "<tr>";
echo "<th class=\"Search_Column_Heading\">Field</th>";
echo "<th class=\"Search_Column_Heading\">Work Instruction ID</th>";
echo "</tr>";

echo "<tr>";
echo "<td class=\"Search_Label_Cell\">Work Instruction to RE-ORDER Steps</td>";
echo "<td class=\"Search_Label_Cell\"><input class=\"Input_Text_Format\" style=\"width:99%;\" type=\"text\"  id=\"WMS_ReOrder\" name=\"WMS_ReOrder\" value=\"".$WMS_ReOrder."\"></td>";
echo "</tr>";

echo "<tr>";
echo "<td class=\"Search_Label_Cell\">Confirmation</td>";
echo "<td class=\"Search_Label_Cell\"><select class=\"Input_Text_Format\" style=\"width:99%;\" type=\"text\"  id=\"Confirmation\" name=\"Confirmation\"><option value=\"No\">No</option><option value=\"Yes\">Yes</option></td>";
echo "</tr>";

echo "</table>";

echo "<table style=\"width:100%\">";
echo "<col width=\"*\">";
echo "<col width=\"80\">";
echo "<td></td>";
echo "<td><input class=\"Submission_Button_Format\" type=\"submit\" name=\"Re-Order\" value=\"Re-Order\"></td>";
echo "</table>";

echo "</form>";


?>


<?php // DISPLAY USER INPUT

echo "Work Instruction to RE-ORDER: ".$WMS_ReOrder."<br>";
echo "<br>";
if($Authroity_To_Process=="Yes"){echo "Completed";}
else{echo "Failed";}


?>


<?php // EXTRACT + INSERT WMS DETAIL DATA

$i = 1;

if($Authroity_To_Process=="Yes"){

//echo "<BR>***DETAILS***<BR>";

$Display_Array['MySQL_Action']="SELECT * ";
$Display_Array['MySQL_Table']="FROM `rec_instruction-steps` ";
$Display_Array['MySQL_Filter']="WHERE `Work Instructions ID` = {$WMS_ReOrder} ";
$Display_Array['MySQL_Order']="ORDER BY Sequence ASC";
$Display_Array['MySQL_Limit']="";
$Display_Array['MySQL_Offset']="";
$Internal_Data['Table_Name']=$Table_Name = str_replace(array("FROM ", "`", " "), "", $Display_Array['MySQL_Table']);

$Columns = array();
$Columns = Get_Column_Names($Database_Connection, $Table_Name);

$sql = $Display_Array['MySQL_Action'].$Display_Array['MySQL_Table'].$Display_Array['MySQL_Filter'].$Display_Array['MySQL_Order'].$Display_Array['MySQL_Limit'].$Display_Array['MySQL_Offset'];
//echo "SQL(2) => ".$sql."<br>";

$result = mysqli_query($Database_Connection, $sql);
//var_dump($Columns);

while($row = mysqli_fetch_assoc($result)) {	
	
	for ($x = 0; $x < count($Columns); $x++) {
		//echo "<br>READ => ".$Columns[$x]." : ".$row[$Columns[$x]];				
	}
		
	
	$Counter_Inset = "";
	
	if($row["Sequence"]!=""){
		$Counter_Inset = $i;				
		// echo "<br>ANALYSIS: ***Change Required.";
		// echo "<br>ANALYSIS: Item Under Review: Sequence Column";
		// echo "<br>ANALYSIS: Current Value:".$row["Sequence"];
		// echo "<br>ANALYSIS: Propose Value:".$Counter_Inset;		
		// echo "<br>ANALYSIS: Table Source:".$Table_Name;
		// echo "<br>ANALYSIS: Row [Name]:".$row["ID"];		
		Update_Single_Item($Database_Connection, $Table_Name, $row["ID"], "Sequence", $Counter_Inset);		
		$i++;
	}else{		
		//echo "<br>ANALYSIS: ***No Change Required.";
	}
	
	//echo "<br>";
	
}
}

?>


<?php // UPDATE VERSION CONTROL

if($Authroity_To_Process=="Yes"){

$Table_Name = "rec_version-control";
$SQL_Column = "`Work Instruction ID`, `Change Description`, `Change Description (Short)`, `Modified Date`, `Modified By`";
$SQL_Value = "'".$WMS_ReOrder."', 'Cleaned All Steps', 'Re-ordered Steps', '".date("Y-m-d")."', '".$_SESSION['User_Name']."'";

Insert_Row_Item($Database_Connection, $Table_Name, $SQL_Column, $SQL_Value);

}

?>


<?php // FUNCTIONS ?>

<?php

function Get_Column_Names($Database_Connection, $Table){

//echo "<BR>>>>COLUMN DATA<BR>";

$Column_Names = array();

//echo "COLUMNS = > ";

$i = 0;
$MySQL_Command_Script = "SELECT COLUMN_NAME, DATA_TYPE 
FROM INFORMATION_SCHEMA.COLUMNS
WHERE `TABLE_SCHEMA`='main_database' 
AND `TABLE_NAME`='{$Table}';";
$result = $Database_Connection->query($MySQL_Command_Script);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
$Column_Types[$row['COLUMN_NAME']] = $row['DATA_TYPE'];
$Column_Names[$i] = $row['COLUMN_NAME'];
//echo $Column_Names[$i].", ";

if($i < mysqli_num_rows($result)){$i = $i + 1;}

}} else {}

//echo "<br>";

return $Column_Names;

}

?>


<?php // INSERT SINGLE ITEM

function Update_Single_Item($Database_Connection, $Table, $Row, $Column, $Value){

$MySQL_Command_Script = "UPDATE `{$Table}` SET `{$Column}` = '{$Value}' WHERE `{$Table}`.`ID` = {$Row};";

if($MySQL_Command_Script!=null){
	if ($Database_Connection->query($MySQL_Command_Script) === TRUE) {
		// echo "<BR>INSERT => ".$MySQL_Command_Script." ";
		// echo "Successful";
		} else {
		// echo "<BR>INSERT => ".$MySQL_Command_Script." ";
		// echo "Error " . $Database_Connection->error;
		}
	}
}

?>


<?php // INSERT ROW ITEM

function Insert_Row_Item($Database_Connection, $Table, $SQL_Column, $SQL_Value){

$MySQL_Command_Script = "";

$SQL_Prefix = "INSERT INTO `{$Table}` (";
//$SQL_Column = "";
$SQL_Join = ") VALUES (";
//$SQL_Value = "";
$SQL_Suffix = ");";

$MySQL_Command_Script = $SQL_Prefix.$SQL_Column.$SQL_Join.$SQL_Value.$SQL_Suffix;
//echo "SQL(3) => ".$MySQL_Command_Script."<br>";

if($MySQL_Command_Script!=null){
if ($Database_Connection->query($MySQL_Command_Script) === TRUE) {
// echo "<BR>INSERT => ".$MySQL_Command_Script." ";
// echo "Successful";
} else {
// echo "<BR>INSERT => ".$MySQL_Command_Script." ";
// echo "Error " . $Database_Connection->error;
}
}

}

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 

