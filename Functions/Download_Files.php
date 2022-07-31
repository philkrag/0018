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

<?php // ////////////////////////////// DOWNLOAD FILE FUNCTION


function Download_File_0001($File_Directory, $File_Index, $File_Type, $File_Name){
	
echo "<form target=\"_blank\" action=\"../WID_Save-File.php\" method=\"post\" id=\"TestForm_{$File_Index}\">";
echo "<input name=\"Directory\" type=\"hidden\" value=\"{$File_Directory}\">";
echo "<input name=\"File_Index\" type=\"hidden\" value=\"{$File_Index}\">";
echo "<input name=\"File_Type\" type=\"hidden\" value=\"{$File_Type}\">";
echo "<input name=\"File_Name\" type=\"hidden\" value=\"{$File_Name}\">";

echo "<input style=\"display:none\" type=\"submit\">";
//echo "<input type=\"submit\">";
echo "</form>";
	
echo "<script type=\"text/javascript\">";
echo "function Test_Function_{$File_Index}(){";
echo "document.getElementById('TestForm_{$File_Index}').submit();";
echo "}";

echo "Test_Function_{$File_Index}();";

echo "</script>";

}

?>

