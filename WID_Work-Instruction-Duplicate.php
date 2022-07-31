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
// 2022-02-24 	|| Phillip Kraguljac 		|| v1.7 (Created)

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

if(isset($_POST['WMS_Copy_From'])){$WMS_Copy_From = $_POST['WMS_Copy_From'];}else{$WMS_Copy_From = null;}
if(isset($_POST['WMS_Copy_To'])){$WMS_Copy_To = $_POST['WMS_Copy_To'];}else{$WMS_Copy_To = null;}
if(isset($_POST['Confirmation'])){$Confirmation = $_POST['Confirmation'];}else{$Confirmation = "No";}


if($Confirmation=="Yes" && ($WMS_Copy_From != "" || $WMS_Copy_From == NULL) && ($WMS_Copy_To != "" || $WMS_Copy_To == NULL)){
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
echo "<td class=\"Search_Label_Cell\">Work Instruction to Copy FROM</td>";
echo "<td class=\"Search_Label_Cell\"><input class=\"Input_Text_Format\" style=\"width:99%;\" type=\"text\"  id=\"WMS_Copy_From\" name=\"WMS_Copy_From\" value=\"\"></td>";
echo "</tr>";

echo "<tr>";
echo "<td class=\"Search_Label_Cell\">Work Instruction to Copy TO</td>";
echo "<td class=\"Search_Label_Cell\"><input class=\"Input_Text_Format\" style=\"width:99%;\" type=\"text\"  id=\"WMS_Copy_To\" name=\"WMS_Copy_To\" value=\"\"></td>";
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
echo "<td><input class=\"Submission_Button_Format\" type=\"submit\" name=\"Copy\" value=\"Copy\"></td>";
echo "</table>";

echo "</form>";


?>


<?php // DISPLAY USER INPUT

echo "Work Instruction to Copy FROM: ".$WMS_Copy_From."<br>";
echo "Work Instruction to Copy TO: ".$WMS_Copy_To."<br>";
echo "<br>";
if($Authroity_To_Process=="Yes"){echo "Completed";}
else{echo "Failed";}


?>


<?php // EXTRACT + INSERT WMS DETAIL DATA

if($Authroity_To_Process=="Yes"){

//echo "<BR>***DETAILS***<BR>";

$Display_Array['MySQL_Action']="SELECT * ";
$Display_Array['MySQL_Table']="FROM `reg_work-instructions` ";
$Display_Array['MySQL_Filter']="WHERE `ID` = {$WMS_Copy_From}";
$Display_Array['MySQL_Order']="";
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
		Insert_Single_Item($Database_Connection, $Table_Name, $WMS_Copy_To, $Columns[$x], $row[$Columns[$x]]);
		//echo "<br>";
	}	
}
}

?>


<?php // EXTRACT + INSERT WMS LIST DATA

if($Authroity_To_Process=="Yes"){
//echo "<br>***LIST***<BR>";

$Display_Array['MySQL_Action']="SELECT * ";
$Display_Array['MySQL_Table']="FROM `rec_instruction-steps` ";
$Display_Array['MySQL_Filter']="WHERE `Work Instructions ID` = {$WMS_Copy_From}";
$Display_Array['MySQL_Order']="";
$Display_Array['MySQL_Limit']="";
$Display_Array['MySQL_Offset']="";

Extract_List_Data_0001($Database_Connection, $Display_Array, $WMS_Copy_To);
}

?>


<?php // EXTRACT + INSERT WMS LIST DATA

if($Authroity_To_Process=="Yes"){
//echo "<br>***LIST***<BR>";

$Display_Array['MySQL_Action']="SELECT * ";
$Display_Array['MySQL_Table']="FROM `rec_instruction-tools` ";
$Display_Array['MySQL_Filter']="WHERE `Work Instructions ID` = {$WMS_Copy_From}";
$Display_Array['MySQL_Order']="";
$Display_Array['MySQL_Limit']="";
$Display_Array['MySQL_Offset']="";

Extract_List_Data_0001($Database_Connection, $Display_Array, $WMS_Copy_To);
}

?>


<?php // UPDATE VERSION CONTROL

if($Authroity_To_Process=="Yes"){

$Table_Name = "rec_version-control";
$SQL_Column = "`Work Instruction ID`, `Change Description`, `Change Description (Short)`, `Modified Date`, `Modified By`";
$SQL_Value = "'".$WMS_Copy_To."', 'Copied Contents from ".$WMS_Copy_From."', 'Content Copied', '".date("Y-m-d")."', '".$_SESSION['User_Name']."'";

Insert_Row_Item($Database_Connection, $Table_Name, $SQL_Column, $SQL_Value);

}

?>







<?php // FUNCTIONS ?>

<?php

function Extract_List_Data_0001($Database_Connection, $Display_Array, $WMS_Copy_To){

$MySQL_Command_Script = "";

$Internal_Data['Table_Name']=$Table_Name = str_replace(array("FROM ", "`", " "), "", $Display_Array['MySQL_Table']);
$MySQL_Command_Script = $Display_Array['MySQL_Action'].$Display_Array['MySQL_Table'].$Display_Array['MySQL_Filter'].$Display_Array['MySQL_Order'].$Display_Array['MySQL_Limit'].$Display_Array['MySQL_Offset'];
//echo "SQL(1) => ".$MySQL_Command_Script."<br>";

$List_Table_Name = "";

$Columns = array();
$Columns = Get_Column_Names($Database_Connection, $Table_Name);

$result = mysqli_query($Database_Connection, $MySQL_Command_Script);

while($row = mysqli_fetch_assoc($result)) {	

$SQL_Prefix = "INSERT INTO `{$Table_Name}` (";
$SQL_Column = "";
$SQL_Join = ") VALUES (";
$SQL_Value = "";
$SQL_Suffix = ");";

for ($x = 0; $x < count($Columns); $x++) {
		//echo "<br>READ => ".$Columns[$x]." : ".$row[$Columns[$x]];
				
		if($x>0){$SQL_Column = $SQL_Column.", ";}
		$SQL_Column = $SQL_Column."`".$Columns[$x]."`";
						
		if($x>0){$SQL_Value = $SQL_Value.", ";}
		
		switch ($Columns[$x]){		
		case 'ID':
			$SQL_Value = $SQL_Value."NULL";	
			break;
		
		case 'Work Instructions ID':
			$SQL_Value = $SQL_Value."'".$WMS_Copy_To."'";	
			break;
		
		case 'Modified By':
			$SQL_Value = $SQL_Value."'".$_SESSION['User_Name']."'";	
			break;
			
		case 'Modified Date':
			$SQL_Value = $SQL_Value."'".date("Y-m-d")."'";	
			break;
			
			default:		
			$Insert_String = "";
			if($row[$Columns[$x]]==""){$Insert_String = "NULL";}
			else{$Insert_String = "'".$row[$Columns[$x]]."'";}			
			$SQL_Value = $SQL_Value.$Insert_String;
			}
		}
		
Insert_Row_Item($Database_Connection, $Table_Name, $SQL_Column, $SQL_Value);

}
	
}

?>


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

function Insert_Single_Item($Database_Connection, $Table, $Row, $Column, $Value){

$MySQL_Command_Script = "";
$Data_Entered = false;
$Columns_Not_Included = array("ID", "Deleted Date", "Modified Date", "Modified By");

if(in_array($Column, $Columns_Not_Included)){	
}else{
$MySQL_Command_Script = "UPDATE `{$Table}` SET `{$Column}` = '{$Value}' WHERE `{$Table}`.`ID` = {$Row};";
$Data_Entered = true;
}

if($Column=="Modified By"){
	$MySQL_Command_Script = "UPDATE `{$Table}` SET `{$Column}` = '".$_SESSION['User_Name']."' WHERE `{$Table}`.`ID` = {$Row}";
	$Data_Entered = true;
}

if($Column=="Modified Date"){
	$MySQL_Command_Script = "UPDATE `{$Table}` SET `{$Column}` = '".date("Y-m-d")."' WHERE `{$Table}`.`ID` = {$Row};";
 $Data_Entered = true;	
}

if(!$Data_Entered){
	//echo "<BR>INSERT => IGNORED";
}

if($MySQL_Command_Script!=null){
if ($Database_Connection->query($MySQL_Command_Script) === TRUE) {
//echo "<BR>INSERT => ".$MySQL_Command_Script." ";
//echo "Successful";
} else {
//echo "<BR>INSERT => ".$MySQL_Command_Script." ";
//echo "Error " . $Database_Connection->error;
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
//echo "<BR>INSERT => ".$MySQL_Command_Script." ";
//echo "Successful";
} else {
//echo "<BR>INSERT => ".$MySQL_Command_Script." ";
//echo "Error " . $Database_Connection->error;
}
}

}

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 

