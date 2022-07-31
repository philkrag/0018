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
// 2020-12-17 	|| Phillip Kraguljac 		|| v1.4
// 2021-01-12 	|| Phillip Kraguljac 		|| v1.7
// 2022-02-24 	|| Phillip Kraguljac 		|| v1.7
// 2022-03-07 	|| Phillip Kraguljac 		|| v1.7
// 2022-06-01 	|| Phillip Kraguljac 		|| v1.8

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php session_start();

if(!isset($_SESSION["Logged_In"]) || $_SESSION["Logged_In"] !== true){
    header("location: Login.php");
    exit;
}

?>

<!-- <link rel="stylesheet" type="text/css" href="Site_Style.css"> -->
<script src="/Functions/Side_Menu.js"></script>
<?php $Menu_Peference = "openNav()"; ?>


<?php 

include $_SERVER['DOCUMENT_ROOT'].'/Site_Style.php';

include $_SERVER['DOCUMENT_ROOT'].'/Functions/Database_Connections.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Database_Checks.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Access_Options.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Filter_Tools.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Menu_Basic.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Display_Details.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Report_Details.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Display_List.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Display_Search.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Display_Sticker.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Display_Chart.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Display_Quick_Reference.php'; //
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Display_QRCode.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Display_Graphics.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Capture_Content.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Combobox_Tools.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Help_Tools.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Auto_Inputs.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Upload_Files.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Download_Files.php';
include $_SERVER['DOCUMENT_ROOT'].'/Side_Menu.php';

?>


<?php 

if(substr(basename($_SERVER['PHP_SELF']),0,3) == "REP"){
echo "<div id=\"Watermark_Div\">";
echo "<img id=\"Watermark_Image\" src=\"Images/Logo.png\">";
echo "</div>";

echo "<div id=\"Print_Stamp_Div\">";
echo "Machine User: ".get_current_user()."<br>";
echo "Machine ID: ".gethostname()."<br>";
echo "Server User: ".$_SESSION["User_Name"]."<br>";
date_default_timezone_set("Etc/UTC");
echo "Date: ".date("Y-m-d h:i:sa")."<br>";
echo "</div>";

echo "<div id=\"Print_Mark_Upper_Left\">";
echo "+";
echo "</div>";

echo "<div id=\"Print_Mark_Lower_Right\">";
echo "+";
echo "</div>";




?>

<script> if (confirm("Would you like to print this report? \n Alternatively, press the CRTL + P when your ready to print.") == true) { window.print(); } </script>

<?php } ?>


<?php

?>


<div style="background-color: rgb(255,255,255); min-height:30px; text-align:center;">

<table style="width:100%;">
<col width="60px">
<col width="*">
<col width="200px">

<tr>
<td><img src="Images/Logo.png" alt="" width="60px"></td> <!-- ORIGINAL 60PX -->
<td style="text-align:left;padding-left:20px;"><h1>FIELD SUPPORT ORGANISER</h1></td>
<td><span class="Menu_Icon_Format" onclick="openNav()">MENU &#9776;</span></td>
</tr>

</table>

</div>
