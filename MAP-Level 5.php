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
// 2021-03-24 	|| Phillip Kraguljac 		|| v1.5. (Created)

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Dev Page</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">
<br>

<h2 class="Heading_2" id="Conducting_Root_Causes_Analysis" style="">Level 5</h2>

<div style="text-align: center;">
<a href="MAP-Master.php">Master</a>
<a href="MAP-Level 1.php">Level 1</a>
<a href="MAP-Level 2.php">Level 2</a>
<a href="MAP-Level 3.php">Level 3 (Ground)</a>
<a href="MAP-Level 4.php">Level 4</a>
<a href="MAP-Level 5.php">Level 5</a>
<a href="MAP-Level 6.php">Level 6</a>
<a href="MAP-Level 7.php">Level 7</a>
<a href="MAP-Level 8.php">Level 8</a>
<a href="MAP-Level 9.php">Level 9</a>
</div>

<div style="text-align: center; background-color: rgb(250,250,250);">
.<br>

<?php // /////////////////////////////////////////////////////////////////////// ENTER IMAGE CODE BELOW ?>

<img src="Site_Maps\Master.JPG" width="1202" height="820" border="0" usemap="#map" />

<map name="map">
<area shape="poly" coords="323,304,330,409,563,391,551,289" href="http://Section 1" />
</map>


<?php // /////////////////////////////////////////////////////////////////////// ENTER IMAGE CODE ABOVE ?>

<br>.
</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 