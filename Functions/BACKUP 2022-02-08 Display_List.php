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
// 2021-05-05 	|| Phillip Kraguljac 		|| v1.5
// 2021-05-31 	|| Phillip Kraguljac 		|| v1.5
// 2021-06-01 	|| Phillip Kraguljac 		|| v1.5
// 2021-08-23 	|| Phillip Kraguljac 		|| v1.5
// 2021-12-01 	|| Phillip Kraguljac 		|| v1.6
// 2022-01-10 	|| Phillip Kraguljac 		|| v1.7
// 2022-01-20 	|| Phillip Kraguljac 		|| v1.7
// 2022-02-03 	|| Phillip Kraguljac 		|| v1.7

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php // ////////////////////////////////////////// STANDARD DASHBOARD

function Dispaly_List_0001($Database_Connection, $Display_Array) {

if(!isset($Display_Array['ID'])){$Display_Array['ID']="";}
if(!isset($Display_Array['IS_Report'])){$Display_Array['IS_Report']=false;}
if(!isset($Display_Array['New_Page_At_Print'])){$Display_Array['New_Page_At_Print']=false;}
if(!isset($Display_Array['Table_Major_Heading'])){$Display_Array['Table_Major_Heading']="";}
if(!isset($Display_Array['Table_Minor_Heading'])){$Display_Array['Table_Minor_Heading']="";}
if(!isset($Display_Array['New_Link_Reference'])){$Display_Array['New_Link_Reference']="";}
if(!isset($Display_Array['Display_Items'])){$Display_Array['Display_Items']="";}
if(!isset($Display_Array['Column_Width'])){$Display_Array['Column_Width']="";}
if(!isset($Display_Array['Item_Links'])){$Display_Array['Item_Links']="";}
if(!isset($Display_Array['Item_Link_Data'])){$Display_Array['Item_Link_Data']="";}
if(!isset($Display_Array['MySQL_Action'])){$Display_Array['MySQL_Action']="";}
if(!isset($Display_Array['MySQL_Table'])){$Display_Array['MySQL_Table']="";}
if(!isset($Display_Array['MySQL_Filter'])){$Display_Array['MySQL_Filter']="";}
if(!isset($Display_Array['MySQL_Order'])){$Display_Array['MySQL_Order']="";}
if(!isset($Display_Array['MySQL_Limit'])){$Display_Array['MySQL_Limit']="";}
if(!isset($Display_Array['MySQL_Offset'])){$Display_Array['MySQL_Offset']="";}
if(!isset($Display_Array['Additional_Data'])){$Display_Array['Additional_Data']="";} // Temp

$Report_CSS_Insert = "";if($Display_Array['IS_Report']==true){$Report_CSS_Insert = "_Report";}

echo "<div class=\"List_Div{$Report_CSS_Insert}\">";

// OPEN MYSQL TABLE
$sql = $Display_Array['MySQL_Action'].$Display_Array['MySQL_Table'].$Display_Array['MySQL_Filter'].$Display_Array['MySQL_Order'].$Display_Array['MySQL_Limit'].$Display_Array['MySQL_Offset'];
$result = mysqli_query($Database_Connection, $sql);
echo "<br>";

// DISPLAY HEADERS
$New_Page_Inset = ""; if($Display_Array['New_Page_At_Print']){$New_Page_Inset = "page-break-before: always";}else{};
echo "<h2 class=\"Heading_2{$Report_CSS_Insert}\" id=\"".str_replace(" ", "_",$Display_Array['Table_Major_Heading'])."\" style=\"{$New_Page_Inset}\">".$Display_Array['Table_Major_Heading']."</h1>";
if($Display_Array['Table_Minor_Heading']!="..."){echo "<h3 class=\"Heading_3{$Report_CSS_Insert}\">".$Display_Array['Table_Minor_Heading']."</h2>";}

// SUBMISSION TOOLS
if(!$Display_Array['IS_Report']){
echo "<form action=\"Functions\Database_Modify.php\"  method=\"post\">";
echo "<input type=\"hidden\" name=\"Table\" value=\"".str_replace("FROM ", "", $Display_Array['MySQL_Table'])."\">";
echo "<input type=\"hidden\" name=\"ID\" value=\"".$Display_Array['ID']."\">";
echo "<input type=\"hidden\" name=\"Previous_Page\" value=\"".$_SERVER['REQUEST_URI']."\">";
echo "<input type=\"hidden\" name=\"New_Link_Reference\" value=\"".$Display_Array['New_Link_Reference']."\">";
echo "<input type=\"hidden\" name=\"Linking_Value\" value=\"".$Display_Array['ID']."\">";
Additional_Items_Formatting($Display_Array['Additional_Data']);
echo "<input type=\"hidden\" name=\"Table_Major_Heading\" value=\"".str_replace(" ", "_",$Display_Array['Table_Major_Heading'])."\">";
echo "<table style=\"width:100%\">";
echo "<col width=\"80\">";
echo "<col width=\"80\">";
echo "<col width=\"*\">";




echo "<td><input class=\"New_Button_Format{$Report_CSS_Insert}\" type=\"submit\"  name=\"Submission_Button\" value=\"New\"></td>";




// ////////////////////////////////////////////////////////////////////////////////////////// TEMP

echo "<td><button class=\"New_Button_Format{$Report_CSS_Insert}\" onclick=\"window.location.href='REC-LST_Tasks.php';\">Review All</button></td>";



// ////////////////////////////////////////////////////////////////////////////////////////// TEMP

echo "<td></td>";
echo "</table>";
echo "</form>";
}

// ESTABLISH TABLE
echo "<table class=\"List_Table{$Report_CSS_Insert}\" style=\"width:100%\">";
echo "<col width=\"50\">";
for ($x = 0; $x < count($Display_Array['Column_Width']); $x++) {
echo "<col width=\"".$Display_Array['Column_Width'][$x]."\">";
}

// DISPLAY HEADERS
echo "<tr>";
echo "<th class=\"List_Label_Cell{$Report_CSS_Insert}\">...</th>";
for ($x = 0; $x < count($Display_Array['Display_Items']); $x++) {
	
// DETERMINE WHETHER PREFIX HAS BEEN USED
$Prefix_Indicator = false;
$Prefix_Value = substr($Display_Array['Display_Items'][$x], 0,3);
if($Prefix_Indicator="(E)" || $Prefix_Indicator="(D)"){$Prefix_Indicator = true;}

// CYCLE THROUGH POTENTIAL PREFIX OPTIONS
if($Prefix_Indicator){
switch ($Prefix_Value) {
	
case "(E)":
$Refined_Data = explode(":", $Display_Array['Display_Items'][$x]);
echo "<th class=\"List_Label_Cell{$Report_CSS_Insert}\">".$Refined_Data[3]."*</th>";break;

case "(D)":
$Refined_Data = explode(":", $Display_Array['Display_Items'][$x]);
echo "<th class=\"List_Label_Cell{$Report_CSS_Insert}\">".$Refined_Data[4]."*</th>";break;	

case "(M)":
$Refined_Data = explode(":", $Display_Array['Display_Items'][$x]);
echo "<th class=\"List_Label_Cell{$Report_CSS_Insert}\">Details*</th>";break;	

case "(P)":
$Refined_Data = explode(":", $Display_Array['Display_Items'][$x]);
echo "<th class=\"List_Label_Cell{$Report_CSS_Insert}\">Photo</th>";break;	

case "(B)":
$Refined_Data = explode(":", $Display_Array['Display_Items'][$x]);
echo "<th class=\"List_Label_Cell{$Report_CSS_Insert}\">".$Refined_Data[1]."</th>";break;


default:	
echo "<th class=\"List_Label_Cell{$Report_CSS_Insert}\">".$Display_Array['Display_Items'][$x]."</th>";
}}}
echo "</tr>";

// DISPLAY ITEMS
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo "<tr class=\"List_Label_Row{$Report_CSS_Insert}\">";

echo "<th class=\"List_Open_Cell{$Report_CSS_Insert}\">";
if(!$Display_Array['IS_Report']){
echo "<a href=\"".$Display_Array['Item_Links']."?ID=";
echo Basic_Filter_Input($row['ID']);
echo Basic_Filter_Input($Display_Array['Item_Link_Data']);
echo "\">OPEN</a>";
}
echo "</th>";

for ($b = 0; $b < count($Display_Array['Display_Items']); $b++) {
	
// CHECK IF PREFIX IS ATTACHED
$Prefix_Indicator = false;
$Prefix_Value = substr($Display_Array['Display_Items'][$b], 0,3);
if($Prefix_Indicator="(E)"){$Prefix_Indicator = true;}

// CYCLE THROUGH POTENTIAL PREFIX OPTIONS
if($Display_Array['Display_Items'][$b]!="" || $Prefix_Indicator){
//$CSS_Format = "List_Content_Cell";	
if(Basic_Filter_Input($row['Deleted Date']==date("Y-m-d"))){$CSS_Format = "List_Content_Cell_Red";}else{$CSS_Format = "List_Content_Cell";}
$Input_Data_Value = "";

// CYCLE THROUGH POTENTIAL PREFIX OPTIONS
switch ($Prefix_Value) {
	
	
case "(E)":			
$Refined_Data = explode(":", $Display_Array['Display_Items'][$b]);
$Input_Data_Value = Get_Item_Details($Database_Connection, Basic_Filter_Input($row[$Refined_Data[1]]), $Refined_Data[2], $Refined_Data[3]);
if(Basic_Filter_Input($row['Deleted Date'])==date("Y-m-d")){$CSS_Format = "List_Content_Cell_Purple";}
break;


case "(D)":			
$Refined_Data = explode(":", $Display_Array['Display_Items'][$b]);
$Input_Data_Value = Get_Item_Details_0001($Database_Connection, Basic_Filter_Input($row[$Refined_Data[1]]), $Refined_Data[2], $Refined_Data[3], $Refined_Data[4]);
if(Basic_Filter_Input($row['Deleted Date'])==date("Y-m-d")){$CSS_Format = "List_Content_Cell_Purple";}
break; //Parent_ID, $Table, $Child_Parent_Column, $Extract_Column


case "(M)":			
$Input_Data_Value = "";
$Link_Insert_Prefix = "";
$Link_Insert_Suffix = "";
$Refined_Data = explode(":", $Display_Array['Display_Items'][$b]);
for ($c = 1; $c < count($Refined_Data); $c++) {	
if(Basic_Filter_Input($Refined_Data[$c])==""){$Input_Data_Value=$Input_Data_Value."<br>";}else{	
if($row[Basic_Filter_Input($Refined_Data[$c])]!=null){	
$Heading_Inset = str_replace("Gap Point", "Hazard", Basic_Filter_Input($Refined_Data[$c]));

$Icon_Flag = false;
if(Basic_Filter_Input($Refined_Data[$c])=="PPE Required - Hearing Protection"){$Input_Data_Value=$Input_Data_Value."<img src=\"Images\PPE Ears.jpg\" height=\"50\">";$Icon_Flag = true;}
if(Basic_Filter_Input($Refined_Data[$c])=="PPE Required - Eye Protection"){$Input_Data_Value=$Input_Data_Value."<img src=\"Images\PPE Eyes.jpg\" height=\"50\">";$Icon_Flag = true;}
if(Basic_Filter_Input($Refined_Data[$c])=="PPE Required - Hand Protection"){$Input_Data_Value=$Input_Data_Value."<img src=\"Images\PPE Hands.jpg\" height=\"50\">";$Icon_Flag = true;}
if(Basic_Filter_Input($Refined_Data[$c])=="PPE Required - Feet Protection"){$Input_Data_Value=$Input_Data_Value."<img src=\"Images\PPE Feet.jpg\" height=\"50\">";$Icon_Flag = true;}
if(Basic_Filter_Input($Refined_Data[$c])=="PPE Required - Head Protection"){$Input_Data_Value=$Input_Data_Value."<img src=\"Images\PPE Head.jpg\" height=\"50\">";$Icon_Flag = true;}
if(Basic_Filter_Input($Refined_Data[$c])=="PPE Required - Hi Vis Protection"){$Input_Data_Value=$Input_Data_Value."<img src=\"Images\PPE Hi Vis.jpg\" height=\"50\">";$Icon_Flag = true;}

if(Basic_Filter_Input($Refined_Data[$c])=="Associated Work Instructions ID"){$Link_Insert_Prefix = "<a href=\"REP_Work-Instructions.php?ID=".Basic_Filter_Input($row[$Refined_Data[$c]])."\">"; $Link_Insert_Suffix="</a>";}

if($Icon_Flag == false){	
$Input_Data_Value = $Input_Data_Value."<b>".$Heading_Inset.":</b> ".$Link_Insert_Prefix.Basic_Filter_Input($row[$Refined_Data[$c]]).$Link_Insert_Suffix."<br>";
}
}
}
}
break; //Parent_ID, $Extract_Column, $Extract_Column, $Extract_Column


case "(P)":	//(P):Folder:Image Width (inc form)	
$Refined_Data = explode(":", $Display_Array['Display_Items'][$b]);
if(file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$Refined_Data[1].'/'.$row['ID'].'.jpg')){
$Image_Size = "100px";
if(isset($Refined_Data[2])){$Image_Size=$Refined_Data[2];}	
$Input_Data_Value = "<img src=\"".Basic_Filter_Input($Refined_Data[1])."\\".Basic_Filter_Input($row['ID']).".jpg\" width=\"".$Image_Size."\"";
}else{$Input_Data_Value = "<div style=\"color:#cccccc\">No Photo</div>";}
break; 


case "(B)":	//(B):Heading:Cell Content (Basic)
$Refined_Data = explode(":", $Display_Array['Display_Items'][$b]);
$Input_Data_Value = "<div>".$Refined_Data[2]."</div>";
break; 


default:
if(isset($row[$Display_Array['Display_Items'][$b]])){
if(Basic_Filter_Input($row[$Display_Array['Display_Items'][$b]])=="No Further Actions Required"){$CSS_Format = "List_Content_Cell_Green";}
//if(Basic_Filter_Input($row['Deleted Date']==date("Y-m-d"))){$CSS_Format = "List_Content_Cell_Red";}
$Input_Data_Value = $row[$Display_Array['Display_Items'][$b]]; // <<< === ITEM ENTRY


// THE FOLLOWING FORMATS ARE FOR THE MATRIX
if(strpos($Display_Array['Display_Items'][$b], 'MOI -') !== false && $Input_Data_Value=="Possible"){$CSS_Format = "List_Content_Cell_Orange";}
if(strpos($Display_Array['Display_Items'][$b], 'MOI -') !== false && $Input_Data_Value=="Required"){$CSS_Format = "List_Content_Cell_Green";}
if(strpos($Display_Array['Display_Items'][$b], 'MOI -') !== false && $Input_Data_Value=="Not Required"){$CSS_Format = "List_Content_Cell";}
if(strpos($Display_Array['Display_Items'][$b], 'MOI -') !== false && $Input_Data_Value=="Suggested"){$CSS_Format = "List_Content_Cell_Yellow";}

if(strpos($Display_Array['Display_Items'][$b], 'Status') !== false && $Input_Data_Value=="Investigating Implementation"){$CSS_Format = "List_Content_Cell_Yellow";}
if(strpos($Display_Array['Display_Items'][$b], 'Status') !== false && $Input_Data_Value=="Currently Implemented"){$CSS_Format = "List_Content_Cell_Green";}
if(strpos($Display_Array['Display_Items'][$b], 'Status') !== false && $Input_Data_Value=="Completed"){$CSS_Format = "List_Content_Cell_Green";}
if(strpos($Display_Array['Display_Items'][$b], 'Status') !== false && $Input_Data_Value=="Waiting for Management Approval"){$CSS_Format = "List_Content_Cell_Blue";}
if(strpos($Display_Array['Display_Items'][$b], 'Status') !== false && $Input_Data_Value=="Waiting for Implementation"){$CSS_Format = "List_Content_Cell_Green_Stripes";}
if(strpos($Display_Array['Display_Items'][$b], 'Status') !== false && $Input_Data_Value=="On Hold"){$CSS_Format = "List_Content_Cell_Blue";}
if(strpos($Display_Array['Display_Items'][$b], 'Status') !== false && $Input_Data_Value=="Cancelled"){$CSS_Format = "List_Content_Cell_Dark_Grey";}
if(strpos($Display_Array['Display_Items'][$b], 'Status') !== false && $Input_Data_Value=="Re-Occurring Fault"){$CSS_Format = "List_Content_Cell_Orange";}

if(strpos($Display_Array['Display_Items'][$b], 'Proto-Type Status') !== false && $Input_Data_Value=="Developing"){$CSS_Format = "List_Content_Cell_Yellow";}
if(strpos($Display_Array['Display_Items'][$b], 'Proto-Type Status') !== false && $Input_Data_Value=="Developed"){$CSS_Format = "List_Content_Cell_Blue";}
if(strpos($Display_Array['Display_Items'][$b], 'Proto-Type Status') !== false && $Input_Data_Value=="Approved"){$CSS_Format = "List_Content_Cell_Green";}

if(strpos($Display_Array['Display_Items'][$b], 'Attention Required') !== false && $Input_Data_Value=="Pending Management Review"){$CSS_Format = "List_Content_Cell_Yellow";}
if(strpos($Display_Array['Display_Items'][$b], 'Status') !== false && $Input_Data_Value=="Under Development"){$CSS_Format = "List_Content_Cell_Yellow";}
if(strpos($Display_Array['Display_Items'][$b], 'Task Type') !== false && $Input_Data_Value=="BD Activity"){$CSS_Format = "List_Content_Cell_Red";}
if(strpos($Display_Array['Display_Items'][$b], 'Task Type') !== false && $Input_Data_Value=="PM Activity"){$CSS_Format = "List_Content_Cell_Blue";}



}}	

echo "<td class=\"".Background_Format($Input_Data_Value, $CSS_Format).$Report_CSS_Insert."\">".$Input_Data_Value."</td>";

}else{
echo "<td></td>";
}}
echo "</tr>";
}}

echo "</table>";

// DATABASE ENQUIRY DETAILS
if(!$Display_Array['IS_Report'] && $_SESSION["User_Name"] == "Administrator"){
echo "<table style=\"width:100%\">";
echo "<tr><td class=\"List_SQL_Script_Cell{$Report_CSS_Insert}\">".$sql."</td></tr>";
echo "</table>";
}

echo "</div>";
echo "<br>";

}

?>


<?php function Background_Format($Cell_Value, $Original_CSS_Format){

switch ($Cell_Value) {	
	case "Medium":$Return_CSS_Format = "List_Content_Cell_Yellow";break;
	case "High":$Return_CSS_Format = "List_Content_Cell_Orange";break;
	case "Very High":$Return_CSS_Format = "List_Content_Cell_Red";break;
	case "Immediate":$Return_CSS_Format = "List_Content_Cell_Red";break;
	default:$Return_CSS_Format = $Original_CSS_Format;	
}
return $Return_CSS_Format;
}

?>

<?php // ADDING ADDITIONAL DATA TO NEW ITEM
// ARRAY([COLUMN 1]:[VALUE 1], [COLUMN 2]:[VALUE 2])

function Additional_Items_Formatting($Additional_Data){

if($Additional_Data!=null){
// var_dump($Additional_Data);
$Additional_Data_Array;
$Additional_Data_Headings = "";
$Additional_Data_Values = "";
for ($a = 0; $a < count($Additional_Data); $a++) {
$Additional_Data_Array = explode(":", $Additional_Data[$a]);
if($a == 0){
$Additional_Data_Headings = $Additional_Data_Array[0];
$Additional_Data_Values = $Additional_Data_Array[1];
}else{
$Additional_Data_Headings = $Additional_Data_Headings.":".$Additional_Data_Array[0];
$Additional_Data_Values = $Additional_Data_Values.":".$Additional_Data_Array[1];
}
}
echo "<input type=\"hidden\" name=\"Additional_Data\" value=\"".$Additional_Data_Headings.";".$Additional_Data_Values."\">";
}
}

?>


<?php function Get_Item_Details($Database_Connection, $Parent_ID, $Table, $Extract_Column){
	
$Return_Value = "";
$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `{$Table}` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = {$Parent_ID} ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";

$sql = $Display_Array['MySQL_Action'].$Display_Array['MySQL_Table'].$Display_Array['MySQL_Filter'].$Display_Array['MySQL_Order'].$Display_Array['MySQL_Limit'].$Display_Array['MySQL_Offset'];

//echo $sql;

if($Parent_ID!=null){

$result = mysqli_query($Database_Connection, $sql);

if($result){
while($row = mysqli_fetch_assoc($result)) {	
$Return_Value = $row[$Extract_Column];	

}}}else{
	
$Return_Value = "N/A";

}

return $Return_Value;	

}

?>


<?php function Get_Item_Details_0001($Database_Connection, $Parent_ID, $Table, $Child_Parent_Column, $Extract_Column){
$Sorting_Insert = "";
if($Extract_Column == "Health Risk" || $Extract_Column == "Commercial Risk"){$Sorting_Insert = "ORDER BY `reg_risk-assessment`.`Completed Date` DESC ";}
$Return_Value = "";
$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `{$Table}` ";
$Display_Array['MySQL_Filter'] = "WHERE `{$Child_Parent_Column}` = {$Parent_ID} ";
$Display_Array['MySQL_Order'] = "{$Sorting_Insert}";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";
$sql = $Display_Array['MySQL_Action'].$Display_Array['MySQL_Table'].$Display_Array['MySQL_Filter'].$Display_Array['MySQL_Order'].$Display_Array['MySQL_Limit'].$Display_Array['MySQL_Offset'];
$result = mysqli_query($Database_Connection, $sql);
if($result){
while($row = mysqli_fetch_assoc($result)) {	
$Return_Value = $row[$Extract_Column];	
}}
return $Return_Value;	
}

?>














