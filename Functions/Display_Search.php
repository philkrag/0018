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
// 2021-03-26 	|| Phillip Kraguljac 		|| v1.5.

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php // ////////////////////////////// ...

function Search_0001($Database_Connection, $Display_Array){

// NOTE: The variable '{$Search_Description}' needs to be added to the end of the '$Display_Array['MySQL_Filter']' variable.

// $Display_Array['Search_Items'] = array();

$Search_Description = "";

// ////////////////////////////// SEARCH WIDGET CONSTRUCTION

if(isset($Display_Array['Search_Items'])){

echo "<div style=\"background-color: rgb(250,250,250);\"><br>";

echo "<h2 class=\"Heading_2\" id=\"\">SEARCH</h2>";

echo "<form action=\"".$_SERVER['REQUEST_URI']."\"  method=\"get\">";

echo "<table class=\"Details_Table\" style=\"width:100%\">";
echo "<col width=\"300px\">";
echo "<col width=\"*\">";

echo "<tr>";
echo "<th class=\"Search_Column_Heading\">Field</th>";
echo "<th class=\"Search_Column_Heading\">Search Value</th>";
echo "</tr>";

for ($x = 0; $x < count($Display_Array['Search_Items']); $x++) {
$Search_Value_Inset = "";
$Formatted_Search_Item = str_replace(" ", "_", $Display_Array['Search_Items'][$x]);
if(isset($_GET[$Formatted_Search_Item])){	
if($_GET[$Formatted_Search_Item]!=""){
$Search_Value_Inset = $_GET[$Formatted_Search_Item];
}
}
$Highlight_CSS_Insert = "";
if($Search_Value_Inset!=""){$Highlight_CSS_Insert = "_Highlight";}
echo "<tr>";
echo "<td class=\"Search_Label_Cell\">".$Display_Array['Search_Items'][$x]."</td>";
echo "<td class=\"Search_Label_Cell{$Highlight_CSS_Insert}\"><input class=\"Input_Text_Format\" style=\"width:99%;\" type=\"text\"  id=\"".$Formatted_Search_Item."\" name=\"".$Formatted_Search_Item."\" value=\"".$Search_Value_Inset."\"></td>";
echo "</tr>";
}

echo "</table>";

echo "<table style=\"width:100%\">";
echo "<col width=\"*\">";
echo "<col width=\"80\">";
echo "<td></td>";
echo "<td><input class=\"Submission_Button_Format\" type=\"submit\" name=\"Search\" value=\"Search\"></td>";
echo "</table>";

echo "</form>";

// ////////////////////////////// MYSQL SEARCH STRING CONSTRUCTION

for ($x = 0; $x < count($Display_Array['Search_Items']); $x++) {
$Formatted_Search_Item = str_replace(" ", "_", Basic_Filter_Input($Display_Array['Search_Items'][$x]));
if(isset($_GET[$Formatted_Search_Item])){	
if($_GET[$Formatted_Search_Item]!=""&&$_GET[$Formatted_Search_Item]!=null){
$Original_Search_Item = str_replace("_", " ", Basic_Filter_Input($Display_Array['Search_Items'][$x]));
$Search_Description = $Search_Description." AND `".$Original_Search_Item."` LIKE '%".$_GET[$Formatted_Search_Item]."%'";
}
}else{}
}

echo "</div>";
echo "<br>";
}

return $Search_Description;

}

?>


<?php function Hidden_Search_0001($Database_Connection, $Display_Array){

// ////////////////////////////// MYSQL SEARCH STRING CONSTRUCTION

$Search_Description = ""; // test

for ($x = 0; $x < count($Display_Array['Search_Items']); $x++) {
$Formatted_Search_Item = str_replace(" ", "_", Basic_Filter_Input($Display_Array['Search_Items'][$x]));
if(isset($_GET[$Formatted_Search_Item])){	
if($_GET[$Formatted_Search_Item]!=""&&$_GET[$Formatted_Search_Item]!=null){
$Original_Search_Item = str_replace("_", " ", Basic_Filter_Input($Display_Array['Search_Items'][$x]));
$Search_Description = $Search_Description." AND `".$Original_Search_Item."` = '".$_GET[$Formatted_Search_Item]."'";
}
}else{}
}

return $Search_Description;

}

?>





