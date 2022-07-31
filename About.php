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
// 2021-03-26 	|| Phillip Kraguljac 		|| v1.5 (created)
// 2021-09-06	|| Phillip Kraguljac 		|| v1.6 
// 2021-12-29 	|| Phillip Kraguljac 		|| v1.7 
// 2022-06-03 	|| Phillip Kraguljac 		|| v1.8 

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>

<?php 

$Heading_Index = 1;
$Report_CSS_Insert = "";

?>

<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Help</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">



<br>
<div class="List_Div"><br>
<h2 class="Heading_2" id="Conducting_Root_Causes_Analysis" style="">About</h2>
<p>This file is part of OS-Management-Portal.</p>
<p>OS-Management-Portal is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.</p>
<p>OS-Management-Portal is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.</p>
<p>You should have received a copy of the GNU General Public License along with OS-Management-Portal.  If not, see <http://www.gnu.org/licenses/>.</p>
<br></div>

<br>
<div class="List_Div"><br>
<h2 class="Heading_2" id="Conducting_Root_Causes_Analysis" style="">Version Control</h2>
<p>Currently Installed Version: 1.8</p>
<br></div>

<br><br><br>
<br>
<div style="text-align:right; display: block;">
<a href="https://www.gnu.org/licenses/gpl-3.0.en.html"><img style="max-height: 50px; padding-right:10px;" src="Images\GPLv3_Logo.png" alt=""></a>
<a href="https://opensource.org/"><img style="max-height: 50px; padding-right:10px;" src="Images\OSI_Logo.png" alt=""></a>
</div>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 