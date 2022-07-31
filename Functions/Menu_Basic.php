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
// 2022-02-21 	|| Phillip Kraguljac 		|| v1.7
// 2022-06-03 	|| Phillip Kraguljac 		|| v1.8
// 2022-06-16 	|| Phillip Kraguljac 		|| v1.8

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php function Display_Menu_0001($Menu_Link, $Menu_Desciption) {

echo "<table style=\"width:100%\">";
echo "<col width=\"50\">";
echo "<col width=\"100\">";
echo "<col width=\"*\">";

for ($x = 0; $x <= 1; $x++) {
echo "<tr>";
echo "<th><a href=\"".$Menu_Link[$x]."\">OPEN</a></th>";
echo "<th>".$Menu_Desciption[$x]."</th>";
echo "<th>...</th>";
echo "</tr>";
} 

echo "</table>";
}
?>


<?php

function Upper_Options_0001($Data) {

echo "<br>";
echo "<table style=\"width:100%\">";
echo "<col width=\"80\">";
echo "<col width=\"*\">";
echo "<td><form action=\"{$Data['Page']}.php?ID={$Data['Item_ID']}\"  method=\"post\"><input class=\"New_Button_Format\" type=\"submit\"  name=\"Submission_Button\" value=\"Report\"></form></td>";
echo "<td></td>";
echo "</table>";
}

?>


<?php

function Upper_Options_0002($Data) {

// $Data['Total_Items'] = 0;
// $Data['Item_ID'] = array();
// $Data['Page'] = array();
// $Data['Bookmark'] = array();
// $Data['Label'] = array();

echo "<br>";
echo "<table style=\"width:100%\">";

for ($x = 0; $x < $Data['Total_Items']; $x++) {echo "<col width=\"80\">";}
echo "<col width=\"*\">";

for ($x = 0; $x < $Data['Total_Items']; $x++) {
if(isset($Data['Bookmark'])){if($Data['Bookmark'][$x]!=null){$Bookmark_Inset = "#".$Data['Bookmark'][$x];}else{$Bookmark_Inset = "";}}else{$Bookmark_Inset = "";}

echo "<td><form action=\"{$Data['Page'][$x]}.php?ID={$Data['Item_ID'][$x]}{$Bookmark_Inset}\"  method=\"post\"><input class=\"New_Button_Format\" type=\"submit\"  name=\"Submission_Button\" value=\"{$Data['Label'][$x]}\"></form></td>";
}

echo "<td></td>";
echo "</table>";

}
?>


<?php

function Upper_Options_0003($Data) {

if(!isset($Data['Options_Description'])){$Data['Options_Description'] = "";}
if(!isset($Data['Item_Indexer_Master'])){$Data['Item_Indexer_Master'] = "";}
if(!isset($Data['Item_Indexer_Specific'])){for ($x = 0; $x < $Data['Total_Items']; $x++) {$Data['Item_Indexer_Specific'][$x]="";}}
if(!isset($Data['Item_Prefix'])){for ($x = 0; $x < $Data['Total_Items']; $x++) {$Data['Item_Prefix'][$x]="";}}
if(!isset($Data['Item_Suffix'])){for ($x = 0; $x < $Data['Total_Items']; $x++) {$Data['Item_Suffix'][$x]="";}}
if(!isset($Data['Item_Description'])){for ($x = 0; $x < $Data['Total_Items']; $x++) {$Data['Item_Description'][$x]="";}}

echo "<br>";
echo "<table style=\"width:100%\">";

if($Data['Options_Description']!=""){
echo "<col width=\"300px\">";
}

echo "<col width=\"*\">";

echo "<tr>";

if($Data['Options_Description']!=""){
echo "<td class=\"Details_Options_Heading\">".$Data['Options_Description']." ► </td>";
}

echo "<td>";

$Linking_Character = "";

for ($x = 0; $x < $Data['Total_Items']; $x++) {
$Indexer_Inset = "";
if($Data['Item_Indexer_Master']!=""){$Indexer_Inset = $Data['Item_Indexer_Master']."=".$Data['Item_ID'][$x];$Linking_Character="&";}
if($Data['Item_Indexer_Specific'][$x]!=""){$Indexer_Inset = $Data['Item_Indexer_Specific'][$x]."=".$Data['Item_ID'][$x];$Linking_Character="&";}
if($Data['Item_Suffix'][$x]!=""){$Suffix_Inset = $Linking_Character.$Data['Item_Suffix'][$x];}else{$Suffix_Inset = "";}
if(isset($Data['Bookmark'])){if($Data['Bookmark'][$x]!=null){$Bookmark_Inset = "#".$Data['Bookmark'][$x];}else{$Bookmark_Inset = "";}}else{$Bookmark_Inset = "";}

if($Data['Item_Prefix'][$x]==""){
	$Get_Data = "";
}else{
	$Get_Data = $Data['Item_Prefix'][$x]."=".$Data['Item_Suffix'][$x];
}

echo "<form style=\"display: inline-block; padding-bottom: 5px; padding-right: 5px;\" action=\"{$Data['Page'][$x]}.php?{$Indexer_Inset}{$Get_Data}{$Bookmark_Inset}\" method=\"post\"><input class=\"New_Button_Format\" style=\"width:150px;\" type=\"submit\"  name=\"Submission_Button\" value=\"{$Data['Label'][$x]}\"></form>";
}

echo "</td>";

echo "</tr>";
echo "</table>";

}
?>
