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
// 2021-03-26 	|| Phillip Kraguljac 		|| v1.5. (created)

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
<h2 class="Heading_2{$Report_CSS_Insert}" id="Conducting_Root_Causes_Analysis" style="">[<?php echo $Heading_Index; $Heading_Index++; ?>] Conducting Root Causes Analysis (RCAs)</h2>
<br><img style="max-height: 400px; display: block; margin-left: auto; margin-right: auto;" src="Help_Images\RCA_Process.png" alt="">
<br><p>This is a test paragraph.</p>
<br></div>

<br>
<div class="List_Div"><br>
<h2 class="Heading_2{$Report_CSS_Insert}" id="Risk_Assessment_Process" style="">[<?php echo $Heading_Index; $Heading_Index++; ?>] Conducting a Risk Assessment</h2>
<br><img style="max-height: 400px; display: block; margin-left: auto; margin-right: auto;" src="Help_Images\Risk_Assessment_Process.png" alt="">
<br><p>This is a test paragraph.</p>
<br></div>

</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 