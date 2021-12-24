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

// $Data['Total_Items'] = 0;
// $Data['Item_ID'] = array();
// $Data['Item_ID_Prefix'] = "";
// $Data['Page'] = array();
// $Data['Bookmark'] = array();
// $Data['Label'] = array();

echo "<br>";
echo "<table style=\"width:100%\">";

for ($x = 0; $x < $Data['Total_Items']; $x++) {echo "<col width=\"80\">";}
echo "<col width=\"*\">";

for ($x = 0; $x < $Data['Total_Items']; $x++) {
if(isset($Data['Bookmark'])){if($Data['Bookmark'][$x]!=null){$Bookmark_Inset = "#".$Data['Bookmark'][$x];}else{$Bookmark_Inset = "";}}else{$Bookmark_Inset = "";}

echo "<td><form action=\"{$Data['Page'][$x]}.php?{$Data['Item_ID_Prefix']}={$Data['Item_ID'][$x]}{$Bookmark_Inset}\"  method=\"post\"><input class=\"New_Button_Format\" type=\"submit\"  name=\"Submission_Button\" value=\"{$Data['Label'][$x]}\"></form></td>";
}

echo "<td></td>";
echo "</table>";

}
?>
