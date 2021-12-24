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
// 2020-12-17 	|| Phillip Kraguljac 		|| v1.4.

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php session_start();

if(!isset($_SESSION["Logged_In"]) || $_SESSION["Logged_In"] !== true){
    header("location: Login.php");
    exit;
}

?>

<link rel="stylesheet" type="text/css" href="Site_Style.css">
<script src="/Functions/Side_Menu.js"></script>
<?php //$Menu_Peference = "openNav()"; ?>

<?php 
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Database_Connections.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Database_Checks.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Access_Options.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Filter_Tools.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Menu_Basic.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Display_Details.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Report_Details.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Display_List.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Display_Search.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Display_Chart.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Combobox_Tools.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Auto_Inputs.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Upload_Files.php';
include $_SERVER['DOCUMENT_ROOT'].'/Side_Menu.php';
?>

<div style="background-color: rgb(255,255,255); min-height:30px; text-align:center;">

<table style="width:100%;">
<col width="60px">
<col width="*">
<col width="200px">

<tr>
<td><img src="Images/Logo.png" alt="" width="60px"></td> <!-- ORIGINAL 60PX -->
<td style="text-align:left;padding-left:10px;"><h1>TOOLBOX</h1></td>
<td><span class="Menu_Icon_Format" onclick="openNav()">MENU &#9776;</span></td>
</tr>

</table>

</div>
