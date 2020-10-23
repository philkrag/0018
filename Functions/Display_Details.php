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
// 2020-09-21 	|| Phillip Kraguljac 		|| v1.0.

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php


function Dispaly_Details_0001($Database_Connection, $Display_Array) {


$Display_Array = Basic_Array_Filter_Input($Display_Array);

if(!isset($Display_Array['ID']))($Display_Array['ID']="");
if(!isset($Display_Array['IS_Report'])){$Display_Array['IS_Report']=false;}
if(!isset($Display_Array['New_Page_At_Print'])){$Display_Array['New_Page_At_Print']=false;}
if(!isset($Display_Array['Table_Major_Heading']))($Display_Array['Table_Major_Heading']="");
if(!isset($Display_Array['Table_Minor_Heading']))($Display_Array['Table_Minor_Heading']="");
if(!isset($Display_Array['Display_Items']))($Display_Array['Display_Items']="");
if(!isset($Display_Array['Column_Width']))($Display_Array['Column_Width']="");
if(!isset($Display_Array['Item_Links']))($Display_Array['Item_Links']="");
if(!isset($Display_Array['MySQL_Action']))($Display_Array['MySQL_Action']="");
if(!isset($Display_Array['MySQL_Table']))($Display_Array['MySQL_Table']="");
if(!isset($Display_Array['MySQL_Filter']))($Display_Array['MySQL_Filter']="");
if(!isset($Display_Array['MySQL_Order']))($Display_Array['MySQL_Order']="");
if(!isset($Display_Array['MySQL_Limit']))($Display_Array['MySQL_Limit']="");
if(!isset($Display_Array['MySQL_Offset']))($Display_Array['MySQL_Offset']="");

$Internal_Data['Table_Name']=$Table_Name = str_replace(array("FROM ", "`", " "), "", $Display_Array['MySQL_Table']);

$Report_CSS_Insert = "";if($Display_Array['IS_Report']==true){$Report_CSS_Insert = "_Report";}

echo "<div class=\"Details_Div{$Report_CSS_Insert}\">";

// ------------- BELOW IS THE DATABASE TABLE PROPERTIES EXTRACTION FUNCTION

$i = 0;
$MySQL_Command_Script = "SELECT COLUMN_NAME, DATA_TYPE 
FROM INFORMATION_SCHEMA.COLUMNS
WHERE `TABLE_SCHEMA`='main_database' 
AND `TABLE_NAME`='{$Table_Name}';";
$result = $Database_Connection->query($MySQL_Command_Script);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
$Column_Type[$row['COLUMN_NAME']] = $row['DATA_TYPE'];
$i = $i + 1;
}} else {}

// ------------- ABOVE IS THE DATABASE TABLE PROPERTIES EXTRACTION FUNCTION


$sql = $Display_Array['MySQL_Action'].$Display_Array['MySQL_Table'].$Display_Array['MySQL_Filter'].$Display_Array['MySQL_Order'].$Display_Array['MySQL_Limit'].$Display_Array['MySQL_Offset'];

$result = mysqli_query($Database_Connection, $sql);

echo "<form action=\"\Functions\Database_Modify.php\"  method=\"post\">";
//echo "<input type=\"hidden\" name=\"Method\" value=\"Save\">";
echo "<input type=\"hidden\" name=\"Table\" value=\"".str_replace("FROM ", "", $Display_Array['MySQL_Table'])."\">";
echo "<input type=\"hidden\" name=\"ID\" value=\"".$Display_Array['ID']."\">";
echo "<input type=\"hidden\" name=\"Previous_Page\" value=\"".$_SERVER['REQUEST_URI']."\">";
echo "<input type=\"hidden\" name=\"Table_Major_Heading\" value=\"".$Display_Array['Table_Major_Heading']."\">";

// DISPLAY HEADERS
$New_Page_Inset = ""; if($Display_Array['New_Page_At_Print']){$New_Page_Inset = "page-break-before: always";};
echo "<h2 class=\"Heading_2{$Report_CSS_Insert}\" id=\"#".$Display_Array['Table_Major_Heading']."\" style=\"{$New_Page_Inset}\">".$Display_Array['Table_Major_Heading']."</h1>";
if($Display_Array['Table_Minor_Heading']!="..."){echo "<h3 class=\"Heading_3{$Report_CSS_Insert}\" >".$Display_Array['Table_Minor_Heading']."</h2>";}

// DISPLAY DATABASE INFORMATION
if(!$Display_Array['IS_Report']){
echo "<table style=\"width:100%\";>";
echo "<col width=\"150px\">";
echo "<col width=\"*\">";
echo "<tr><td class=\"List_SQL_Script_Cell{$Report_CSS_Insert}\"><b>Table</b></td><td class=\"List_SQL_Script_Cell{$Report_CSS_Insert}\">".$Internal_Data['Table_Name']."</td></tr>";
echo "</table>";
}

// ESTABLISH TABLE
echo "<table class=\"Details_Table{$Report_CSS_Insert}\" style=\"width:100%\">";
for ($x = 0; $x < count($Display_Array['Column_Width']); $x++) {
echo "<col width=\"".$Display_Array['Column_Width'][$x]."\">";
}

// DISPLAY HEADERS
echo "<tr>";
echo "<th class=\"Details_Column_Heading{$Report_CSS_Insert}\">Field</th>";
echo "<th class=\"Details_Column_Heading{$Report_CSS_Insert}\">Value</th>";
echo "</tr>";

// DISPLAY ITEMS
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
for ($x = 0; $x < count($Display_Array['Display_Items']); $x++) {
echo "<tr>";
if($Display_Array['Display_Items'][$x]!=""){	
echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\">".$Display_Array['Display_Items'][$x]."</td>";
//echo "<td><input class=\"Input_Text_Format\" type=\"text\" id=\"\" name=\"".$Display_Array['Display_Items'][$x]."\" value=\"".$row[$Display_Array['Display_Items'][$x]]."\"></label></td>";


// ------------- BELOW IS THE INPUT ITEM SELECTION AND INSERTION
echo "<td class=\"Details_Value_Cell{$Report_CSS_Insert}\">";
$Combobox_Data = Get_Combobox_Data_If_Available($Database_Connection, $Internal_Data['Table_Name'], $Display_Array['Display_Items'][$x]);



if(!$Display_Array['IS_Report']){

if($Display_Array['Display_Items'][$x]!="Modified Date" && $Display_Array['Display_Items'][$x]!="Modified By"){

if($Combobox_Data != NULL){
Display_Combobox($Combobox_Data, $Display_Array['Display_Items'][$x], Basic_Filter_Input($row[$Display_Array['Display_Items'][$x]]));	
}else{	
$Enabled_Insert = ""; if($Display_Array['Display_Items'][$x]=="Health Risk" || $Display_Array['Display_Items'][$x]=="Commercial Risk"){$Enabled_Insert = "Disabled";}
switch ($Column_Type[$Display_Array['Display_Items'][$x]]) {
case "int": echo "<input class=\"Input_Number_Format{$Report_CSS_Insert}\" type=\"number\"  id=\"".$Display_Array['Display_Items'][$x]."\" name=\"".$Display_Array['Display_Items'][$x]."\" value=\"".Basic_Filter_Input($row[$Display_Array['Display_Items'][$x]])."\" {$Enabled_Insert}>"; break;
case "date": echo "<input class=\"Input_Date_Format\" type=\"date\"  id=\"".$Display_Array['Display_Items'][$x]."\" name=\"".$Display_Array['Display_Items'][$x]."\" value=\"".Basic_Filter_Input($row[$Display_Array['Display_Items'][$x]])."\" {$Enabled_Insert}></input>"; break;
case "mediumtext": echo "<textarea class=\"Input_Medium_Text_Format{$Report_CSS_Insert}\" id=\"".$Display_Array['Display_Items'][$x]."\" name=\"".$Display_Array['Display_Items'][$x]."\" >".Basic_Filter_Input($row[$Display_Array['Display_Items'][$x]])."</textarea>"; break;
default: echo "<input class=\"Input_Text_Format{$Report_CSS_Insert}\" type=\"text\"  id=\"".$Display_Array['Display_Items'][$x]."\" name=\"".$Display_Array['Display_Items'][$x]."\" value=\"".Basic_Filter_Input($row[$Display_Array['Display_Items'][$x]])."\" {$Enabled_Insert}>";
}}
}else{
echo "<input class=\"Input_Date_Format\" type=\"hidden\" name=\"".$Display_Array['Display_Items'][$x]."\" value=\"".Basic_Filter_Input($row[$Display_Array['Display_Items'][$x]])."\" {$Enabled_Insert}></input>";
echo Basic_Filter_Input($row[$Display_Array['Display_Items'][$x]]);
}
}else{
	echo Basic_Filter_Input($row[$Display_Array['Display_Items'][$x]]);
}
echo "</td>";
// ------------- ABOVE IS THE INPUT ITEM SELECTION AND INSERTION

}else{
echo "<td></td><td></td>";
}
echo "</tr>";
}
}
}

echo "</table>";

// DATABASE ENQUIRY DETAILS
if(!$Display_Array['IS_Report']){
echo "<table style=\"width:100%\">";
echo "<tr><td class=\"List_SQL_Script_Cell{$Report_CSS_Insert}\">".$sql."</td></tr>";
echo "</table>";
}

// SUBMISSION TOOLS
if(!$Display_Array['IS_Report']){
echo "<table style=\"width:100%\">";
echo "<col width=\"*\">";
echo "<col width=\"80\">";
echo "<col width=\"80\">";
echo "<col width=\"80\">";
echo "<td></td>";
echo "<td><input class=\"Submission_Button_Format{$Report_CSS_Insert}\" type=\"submit\" name=\"Submission_Button\" value=\"Save\"></td>";
echo "<td><input class=\"Submission_Button_Format{$Report_CSS_Insert}\" type=\"submit\" value=\"Cancel\"></td>";
echo "<td><input class=\"Submission_Button_Format{$Report_CSS_Insert}\" type=\"submit\" name=\"Submission_Button\" value=\"Delete\"></td>";
echo "</table>";
echo "</form>";
}

echo "</div>";
echo "<br>";

}



?>

