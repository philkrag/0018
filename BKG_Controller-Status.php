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
// PAGE CREATED DATE: 2021-12-17

// DATE   		|| NAME 					|| MODIFICATION
// 2021-12-17 	|| Phillip Kraguljac 		|| v1.6. (created)

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>

<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Background Thread</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">

<br><button onclick="history.go(-1);">Back</button><br><br>


<?php


//$Test = "nput 1</td><td class=\"Value_Column\"><INPUT_1_VALUE>-</INPUT_1_VALUE></td><td class=\"Value_Column\">N/A</td><";

$Test = file_get_contents("http://192.168.4.10");




echo "---<br>";


echo "Original String: ".$Test."<br>";
 get_string_between($Test);


function get_string_between($string){
	
	
	$Start_Pos = strpos($string, "<INPUT_1_VALUE>");
	echo "Start: ".$Start_Pos."<br>";
	
	$End_Pos = strpos($string, "</INPUT_1_VALUE>");
	echo "End: ".$End_Pos."<br>";
	
	
	$String_Length = $End_Pos - $Start_Pos;
	$Extract_String = substr($string, $Start_Pos, $String_Length);
	echo "String: ".$Extract_String."<br>";
	
}
 




?>





</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
