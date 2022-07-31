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
// 2020-09-21 	|| Phillip Kraguljac 		|| v1.0
// 2021-03-29 	|| Phillip Kraguljac 		|| v1.5
// 2021-03-31 	|| Phillip Kraguljac 		|| v1.5
// 2021-08-23 	|| Phillip Kraguljac 		|| v1.5
// 2021-09-06 	|| Phillip Kraguljac 		|| v1.6
// 2021-12-01 	|| Phillip Kraguljac 		|| v1.6
// 2022-01-20 	|| Phillip Kraguljac 		|| v1.7
// 2022-03-23 	|| Phillip Kraguljac 		|| v1.7
// 2022-03-25 	|| Phillip Kraguljac 		|| v1.7

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php

function Dispaly_Details_0001($Database_Connection, $Display_Array) {

// FUNCTION INFORMATION:
// - Current used as base function for all DTL pages.

$Display_Array = Basic_Array_Filter_Input($Display_Array);

if(!isset($Display_Array['ID']))($Display_Array['ID']="");
if(!isset($Display_Array['IS_Report'])){$Display_Array['IS_Report']=false;}
if(!isset($Display_Array['Hide_Images'])){$Display_Array['Hide_Images']=false;} // not properly deployed in this yet...
if(!isset($Display_Array['Value_Font_Size'])){$Display_Array['Value_Font_Size']=false;}
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
//echo $sql."<br>";
$result = mysqli_query($Database_Connection, $sql);


echo "<form action=\"\Functions\Database_Modify.php\"  method=\"post\">";
//echo "<input type=\"hidden\" name=\"Method\" value=\"Save\">";
echo "<input type=\"hidden\" name=\"Table\" value=\"".str_replace("FROM ", "", $Display_Array['MySQL_Table'])."\">";
echo "<input type=\"hidden\" name=\"ID\" value=\"".$Display_Array['ID']."\">";
echo "<input type=\"hidden\" name=\"Previous_Page\" value=\"".$_SERVER['REQUEST_URI']."\">";
echo "<input type=\"hidden\" name=\"Table_Major_Heading\" value=\"".$Display_Array['Table_Major_Heading']."\">";

// DISPLAY HEADERS
$New_Page_Inset = ""; if($Display_Array['New_Page_At_Print']){$New_Page_Inset = "page-break-before: always";};
echo "<h2 class=\"Heading_2{$Report_CSS_Insert}\" id=\"#".$Display_Array['Table_Major_Heading']."\" style=\"{$New_Page_Inset}\">".$Display_Array['Table_Major_Heading']."</h2>";
if($Display_Array['Table_Minor_Heading']!="..."){echo "<h3 class=\"Heading_3{$Report_CSS_Insert}\" >".$Display_Array['Table_Minor_Heading']."</h3>";}

// DISPLAY DATABASE INFORMATION
if(!$Display_Array['IS_Report'] && $_SESSION["User_Name"] == "Administrator"){
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
		
	
// -------------	DEVELOPING LINKS OPTIONS - BELOW
		
// DETERMINE WHETHER PREFIX HAS BEEN USED <<<<<<< NOT TO IMPROVE THIS FOR ALL (DUPLICATE TO LIST FUNCTION)
$Prefix_Indicator = false;
$Prefix_Value = substr($Display_Array['Display_Items'][$x], 0,3);
if($Prefix_Value=="(L)" || $Prefix_Value=="(E)"){ $Prefix_Indicator = true; }
$Label_String = "";
$Link_String = "";
$Lookup_String = "";

// CYCLE THROUGH POTENTIAL PREFIX OPTIONS

switch ($Prefix_Value) {
	

case "(L)":	// [Indexer]:[Label/Column]:[Page]:[Look-up Page]
$Refined_Data = explode(":", $Display_Array['Display_Items'][$x]);
$Label_String = $Refined_Data[1];

$Sub_Link_String_Insert = "";
if(strpos($Display_Array['MySQL_Table'], "rec_tasks") !== false){$Sub_Link_String_Insert = "&Task_ID=".$Display_Array['ID'];}

$Link_String = "<font style=\"font-size:75%;\">(<a href=\"".$Refined_Data[2].".php?ID=".$row[$Label_String].$Sub_Link_String_Insert."\">Link</a>) </font>";
if(isset($Refined_Data[3])){$Lookup_String = "<font style=\"font-size:75%;\">(<a href=\"".$Refined_Data[3].".php\">Look-up</a>) </font>";}

break;


case "(E)":	// [Indexer]:[Column]:[]
$Refined_Data = explode(":", $Display_Array['Display_Items'][$x]);
if(isset($Refined_Data[5])){$Sub_Prefix = $Refined_Data[5];} else {$Sub_Prefix = "";}
$Label_String = $Sub_Prefix." ".$Refined_Data[4];
break;


default:	
$Label_String = $Display_Array['Display_Items'][$x];
}

// -------------DEVELOPING LINKS OPTIONS - ABOVE
		
echo "<tr>";

if($Label_String!=""){	
//echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\">".$Display_Array['Display_Items'][$x];   // /////////////////// TEST
echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\">".$Label_String." ".$Link_String.$Lookup_String."</td>";
//echo "<td><input class=\"Input_Text_Format\" type=\"text\" id=\"\" name=\"".$Display_Array['Display_Items'][$x]."\" value=\"".$row[$Display_Array['Display_Items'][$x]]."\"></label></td>";


// ------------- BELOW IS THE SPECIAL ITEM SELECTION
$CSS_Format = "Details_Value_Cell";
if(Basic_Filter_Input($Label_String == 'Serviceability Rating' && $row[$Label_String] == "Fully Functional") ){$CSS_Format = "List_Content_Cell_Green";}
if(Basic_Filter_Input($Label_String == 'Serviceability Rating' && $row[$Label_String] == "Prepared For Transport") ){$CSS_Format = "List_Content_Cell_Orange";}
if(Basic_Filter_Input($Label_String == 'Serviceability Rating' && $row[$Label_String] == "Restricted Operation") ){$CSS_Format = "List_Content_Cell_Yellow";}


// ------------- BELOW IS THE INPUT ITEM SELECTION AND INSERTION
echo "<td class=\"".$CSS_Format.$Report_CSS_Insert."\">";
$Combobox_Data = Get_Combobox_Data_If_Available($Database_Connection, $Internal_Data['Table_Name'], $Label_String);


// ENLARGE VALUES FORMATTING
$Enlarge_Font_Inset_1 = "";
$Enlarge_Font_Inset_2 = "";
if($Display_Array['Value_Font_Size']!=""){
$Enlarge_Font_Inset_1 = "<div style=\"font-size: ".$Display_Array['Value_Font_Size'].";\">";
$Enlarge_Font_Inset_2 = "</div>";
}


if(!$Display_Array['IS_Report']){
if($Label_String!="Modified Date" && $Label_String!="Modified By"){


if($Combobox_Data != NULL){
Display_Combobox($Combobox_Data, $Label_String, Basic_Filter_Input($row[$Label_String]));	
}else{	
$Enabled_Insert = ""; if($Label_String=="Health Risk" || $Label_String=="Commercial Risk"){$Enabled_Insert = "Disabled";}
switch ($Column_Type[$Label_String]) {
case "int": echo "<input class=\"Input_Number_Format{$Report_CSS_Insert}\" type=\"number\"  id=\"".$Label_String."\" name=\"".$Label_String."\" value=\"".Basic_Filter_Input($row[$Label_String])."\" {$Enabled_Insert}>"; break;
case "date": echo "<input class=\"Input_Date_Format\" type=\"date\"  id=\"".$Label_String."\" name=\"".$Label_String."\" value=\"".Basic_Filter_Input($row[$Label_String])."\" {$Enabled_Insert}></input>"; break;
case "mediumtext": echo "<textarea class=\"Input_Medium_Text_Format{$Report_CSS_Insert}\" id=\"".$Label_String."\" name=\"".$Label_String."\" >".Basic_Filter_Input($row[$Label_String])."</textarea>"; break;
default: echo "<input class=\"Input_Text_Format{$Report_CSS_Insert}\" type=\"text\"  id=\"".$Label_String."\" name=\"".$Label_String."\" value=\"".Basic_Filter_Input($row[$Label_String])."\" {$Enabled_Insert}>";

}}
}else{
echo "<input class=\"Input_Date_Format\" type=\"hidden\" name=\"".$Label_String."\" value=\"".Basic_Filter_Input($row[$Label_String])."\" {$Enabled_Insert}></input>";

echo Basic_Filter_Input($row[$Label_String]);
}
}else{


// MAIN CELL WITH EXTRA FUNCTIONS

if($Prefix_Indicator){
	
switch ($Prefix_Value) {
	
case "(E)": // [Current Indexer]:[Extended Table]:[Extended Indexer]:[Extended Extract Coloum]:[Heading Prefix]
$Refined_Data = explode(":", $Display_Array['Display_Items'][$x]);
$Input_Data_Value = Get_Item_Details_0002($Database_Connection, $row[$Refined_Data[1]], $Refined_Data[2], $Refined_Data[3], $Refined_Data[4]);
echo $Input_Data_Value; break;

}


}else{

// MAIN CELL ENTRY NO SPECIAL FORMATTING

echo $Enlarge_Font_Inset_1.Basic_Filter_Input($row[$Label_String]).$Enlarge_Font_Inset_2;

}

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
if(!$Display_Array['IS_Report'] && $_SESSION["User_Name"] == "Administrator"){
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


<?php

function Dispaly_Special_0001($Database_Connection, $Display_Array) {

// FUNCTION INFORMATION:
// - ...

if(!isset($Display_Array['IS_Report'])){$Display_Array['IS_Report']=false;}
if(!isset($Display_Array['Display_Items']))($Display_Array['Display_Items']="");

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
//echo $sql."<br>";
$result = mysqli_query($Database_Connection, $sql);



// DISPLAY ITEMS
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
for ($x = 0; $x < count($Display_Array['Display_Items']); $x++) {
	
echo $Display_Array['Display_Items'][$x]."<br>";
	
	
	
// $Refined_Data = explode(":", $Display_Array['Display_Items'][$x]);
// $Label_String = $Refined_Data[1];

// echo "<td>";
// echo Basic_Filter_Input($row[$Label_String]);
// echo "</td>";

}
}
}





}
?>















<?php

function Display_Calendar_Entries_0001 ($Database_Connection, $Display_Array){

// FUNCTION INFORMATION:
// - Currently jsut being used as part of the Calendar Report and Dashbaord. 

// $Display_Array['Display_Items'] = array();
// $Display_Array['Item_Label'] = "";
// $Display_Array['Item_Links'] = "";
// $Display_Array['Text_Highlight'] = "";

// $Display_Array['MySQL_Action'] = "SELECT * ";
// $Display_Array['MySQL_Table'] = "FROM `` ";
// $Display_Array['MySQL_Filter'] = "WHERE `Identified Date` = '' ";
// $Display_Array['MySQL_Order'] = "";
// $Display_Array['MySQL_Limit'] = "";
// $Display_Array['MySQL_Offset'] = "";


$Internal_Data['Table_Name'] = $Table_Name = str_replace(array("FROM ", "`", " "), "", $Display_Array['MySQL_Table']);

	
	
	
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
//echo $sql."<br><br>";

$result = mysqli_query($Database_Connection, $sql);

while($row = mysqli_fetch_assoc($result)) {
for ($x = 0; $x < count($Display_Array['Display_Items']); $x++) {	

$Label_String = $Display_Array['Display_Items'][$x];

switch($Label_String) {
	
case "ID":
echo "<a href=\"".$Display_Array['Item_Links'].".php?ID=".Basic_Filter_Input($row[$Label_String])."\">";
echo "[".Basic_Filter_Input($row[$Label_String])."] ";
echo "</a>";
echo " <b><font style=\"background-color:".$Display_Array['Text_Highlight'].";color:white;\">[".$Display_Array['Item_Label']."]</font></b>";
break;

case "Task Status":
echo " (".Basic_Filter_Input($row[$Label_String]).")";
break;

default:	
echo " ".Basic_Filter_Input($row[$Label_String]);


}
}
echo "<br>";	
echo "<br>";
}
}
	
?>



<?php function Get_Item_Details_0002($Database_Connection, $Parent_ID, $Table, $Child_Parent_Column, $Extract_Column){
	
// FUNCTION INFORMATION:
// - Currently being used in the extended details function within the Display Function.
	
$Sorting_Insert = "";
if($Parent_ID != ""){
if($Extract_Column == "Health Risk" || $Extract_Column == "Commercial Risk"){$Sorting_Insert = "ORDER BY `reg_risk-assessment`.`Completed Date` DESC ";}
$Return_Value = "";
$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `{$Table}` ";
$Display_Array['MySQL_Filter'] = "WHERE `{$Child_Parent_Column}` = {$Parent_ID} ";
$Display_Array['MySQL_Order'] = "{$Sorting_Insert}";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";
$sql = $Display_Array['MySQL_Action'].$Display_Array['MySQL_Table'].$Display_Array['MySQL_Filter'].$Display_Array['MySQL_Order'].$Display_Array['MySQL_Limit'].$Display_Array['MySQL_Offset'];
//echo $sql."<br>";
$result = mysqli_query($Database_Connection, $sql);
if($result){
while($row = mysqli_fetch_assoc($result)) {	
$Return_Value = $row[$Extract_Column];	
}}
}else{
$Return_Value = "No Equipment Linked";	
}
return $Return_Value;	
}

?>

















