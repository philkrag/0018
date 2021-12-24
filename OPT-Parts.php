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
// PAGE CREATED DATE: 2021-04-15

// DATE   		|| NAME 					|| MODIFICATION
// 2021-09-15 	|| Phillip Kraguljac 		|| v1.6. (Created)

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Part(s) Page</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">
<br>

<?php $Week = Date("W", strtotime("now"))-1; ?>


<h2 class="Heading_2" id="Conducting_Root_Causes_Analysis" style="">General</h2>

<h3 class="Heading_3" id="Conducting_Root_Causes_Analysis" style="">List(s)</h3>
<table style="width:100%">
<col width="50px">
<col width="*">
<tr><th class="Details_Column_Heading">Action</th><th class="Details_Column_Heading">Description</th></tr>
<tr><td class="Details_Label_Cell"><a href="REC-LST_Parts-Critical.php">OPEN</a></td><td class="Details_Value_Cell">Critical Part(s)</td></tr>
<tr><td class="Details_Label_Cell"><a href="REC-LST_Parts-Controlled.php">OPEN</a></td><td class="Details_Value_Cell">Controlled Part(s)</td></tr>
</table>


</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
