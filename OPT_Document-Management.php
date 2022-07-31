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
// 2021-12-29 	|| Phillip Kraguljac 		|| v1.7 (Created)
// 2022-06-03 	|| Phillip Kraguljac 		|| v1.8
// 2022-06-29 	|| Phillip Kraguljac 		|| v1.8

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Document Options</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">
<br>

<?php $Week = Date("W", strtotime("now"))-1; ?>

<h2 class="Heading_1" id="" style="">DOCUMENT MANAGEMENT</h2>


<h2 class="Heading_2" id="" style="">Daily</h2>


<!--<h3 class="Heading_3" id="" style="">Assistance</h3>
<table style="width:100%">
<col width="50px">
<col width="*">
<tr><th class="Details_Column_Heading">Action</th><th class="Details_Column_Heading">Description</th></tr>
</table>-->


<!--<h3 class="Heading_3" id="" style="">Function(s)</h3>-->
<!--<table style="width:100%">
<col width="50px">
<col width="*">
<tr><th class="Details_Column_Heading">Action</th><th class="Details_Column_Heading">Description</th></tr>
</table>-->


<h3 class="Heading_3" id="" style="">List(s)</h3>
<table style="width:100%">
<col width="50px">
<col width="*">
<tr><th class="Details_Column_Heading">Action</th><th class="Details_Column_Heading">Description</th></tr>
<tr><td class="Details_Label_Cell"><a href="REC-LST_Documents.php">OPEN</a></td><td class="Details_Value_Cell">Document(s) </td></tr>
<tr><td class="Details_Label_Cell"><a href="REC-LST_Schematics.php">OPEN</a></td><td class="Details_Value_Cell">Schematic(s) </td></tr>
<tr><td class="Details_Label_Cell"><a href="REC-LST_Work-Instructions.php">OPEN</a></td><td class="Details_Value_Cell">WMS(s) </td></tr>
</table>


<!--<h3 class="Heading_3" id="" style="">Report(s)</h3>-->
<!--<table style="width:100%">
<col width="50px">
<col width="*">
<tr><th class="Details_Column_Heading">Action</th><th class="Details_Column_Heading">Description</th></tr>
</table>-->


<!--<h3 class="Heading_3" id="" style="">Dashboard(s)</h3>
<table style="width:100%">
<col width="50px">
<col width="*">
<tr><th class="Details_Column_Heading">Action</th><th class="Details_Column_Heading">Description</th></tr>

</table>-->


<br>
<!--<h2 class="Heading_2" id="" style="">Weekly</h2>-->
<!--<h3 class="Heading_3" id="" style="">Report(s)</h3>-->
<!--<table style="width:100%">
<col width="50px">
<col width="*">
<tr><th class="Details_Column_Heading">Action</th><th class="Details_Column_Heading">Description</th></tr>
</table>-->


<br>
<!--<h2 class="Heading_2" id="" style="">Development</h2>-->
<!--<h3 class="Heading_3" id="" style="">...</h3>
<table style="width:100%">
<col width="50px">
<col width="*">
<tr><th class="Details_Column_Heading">Action</th><th class="Details_Column_Heading">...</th></tr>
</table>-->


</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
