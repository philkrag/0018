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
// 2022-06-03 	|| Phillip Kraguljac 		|| v1.8 (Created)

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Part Search</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">
<br>


<script>

function toggle_visibility(Checkbox, Div) {
	
var Div_Object = document.getElementById(Div);
var Checkbox_Object = document.getElementById(Checkbox);

if(Checkbox_Object.checked == true)
	Div_Object.style.display = 'block';
	else
	Div_Object.style.display = 'none';
	}

</script>


<h2 class="Heading_2" id="">ASSISTANCE</h2>


<table style="width:100%">
<col width="20px">
<col width="60px">
<col width="*">


<tr><td colspan="3" class="Search_Column_Heading">Checklist</td></tr>

<tr><td colspan="3"><div style="height:10px"></div></td></tr>


<tr valign="top">
<td align="middle" class="List_Content_Cell">1</td>
<td align="middle" class="List_Content_Cell"><img src="Images/Example_Serial_Number.png" height="50" alt=""></td>
<td align="left" class="List_Content_Cell">Please answer the following;<br>
<input type="checkbox" id="Serial_Number_Yes_Checkbox" onclick ="toggle_visibility('Serial_Number_Yes_Checkbox', 'Serial_Number_Yes')" id="" name="" value=""> The part <b><u>does</b></u> have a serial number.
</td>
</tr>

<tr><td colspan="3"><div style="height:10px"></div></td></tr>


<tr valign="top">
<td align="middle" class="List_Content_Cell">3</td>
<td align="middle" class="List_Content_Cell"><img src="Images/Example_Store.png" height="50" alt=""></td>
<td align="left" class="List_Content_Cell">Please answer the following;<br>
<input type="checkbox" id="Availability_Yes_Checkbox" onclick ="toggle_visibility('Availability_Yes_Checkbox', 'Availability_Yes')" id="" name="" value=""> The part <b><u>used</b></u> to LADs equipment.
</td>
</tr>

<tr><td colspan="3"><div style="height:10px"></div></td></tr>


<tr valign="top">
<td align="middle" class="List_Content_Cell">4</td>
<td align="middle" class="List_Content_Cell"><img src="Images/Example_Tools.png" height="50" alt=""></td>
<td align="left" class="List_Content_Cell">Please answer the following;<br>
<input type="checkbox" id="Tool_Yes_Checkbox" onclick ="toggle_visibility('Tool_Yes_Checkbox', 'Tool_Yes')" id="" name="" value=""> The item is a tools which whould be on-site.
</td>
</tr>

<tr><td colspan="3"><div style="height:10px"></div></td></tr>


<tr><td colspan="3" class="Search_Column_Heading">Recommendations</td></tr>

<tr>
<td align="left" colspan="3" class="List_Content_Cell_Yellow">
<div id="Serial_Number_Yes" style="display:none;">● Go to the Equipment register and complete a search. <a href="REC-LST_Equipment.php">Go To Page ►</a></div>
<div id="Service_Life_Yes" style="display:none;">● Go to the Critical Part register and complete a search. <a href="REC-LST_Parts-Critical.php">Go To Page ►</a></div>
<div id="Availability_Yes" style="display:none;">● Go to the Controlled Part register and complete a search. <a href="REC-LST_Parts-Controlled.php">Go To Page ►</a></div>
<div id="Tool_Yes" style="display:none;">● Go to the Tools register and complete a search. <a href="REC-LST_Tools.php">Go To Page ►</a></div>


</td>
</tr>


</table>



</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
