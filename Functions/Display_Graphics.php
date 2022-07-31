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
// PAGE CREATED DATE: 2022-06-30

// DATE   		|| NAME 					|| MODIFICATION
// 2022-06-30 	|| Phillip Kraguljac 		|| v1.8 (created)

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php // ////////////////////////////// UPLOAD FILE FUNCTION

function Display_Graphics_0001($Database_Connection, $Display_Array){

if(!isset($Display_Array['URL'])){$Display_Array['URL']="";}

echo "<br>";
echo "<br>";

echo "<div class=\"Details_Div\">";

echo "<table class=\"Details_Table\" style=\"width:100%\">";
echo "<col width=\"300px\">";
echo "<col width=\"*\">";

echo "<tr>";

echo "<td class=\"Details_Label_Cell\"><a href=\"".$Display_Array['URL']."\">OPEN</a></td>";

echo "<td class=\"Details_Label_Cell\"><iframe src=\"{$Display_Array['URL']}\" style=\"height:150px;width:100%;background-color:#FFFFFF\"></iframe></td>";


echo "</tr>";
echo "</table>";

echo "</div>";

}

?>
