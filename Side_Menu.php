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
// 2020-10-06 	|| Phillip Kraguljac 		|| v1.1.

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>



<div id="mySidenav" class="sidenav">

<table style="width:100%; height:100%">
<tr><td style="vertical-align:top;">

<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="REC-LST_Projects.php">Project(s)</a>
<a href="REC-LST_Controls.php">Control(s)</a>
<a href="REC-LST_Contacts.php">Contact(s)</a>
<a href="moodle/">Moodle</a>
<a href="Dev.php">Dev</a>
<br>  

</td></tr>
<tr><td style="vertical-align:bottom; padding-bottom:60px;">

<table style="padding:0px 30px 0px 30px; background-color:rgb(49, 88, 147); border: 1px solid white;; width:100%;">
<tr style="color:rgb(255, 255, 255);"><td><b>Logged In User:</b></td></tr>
<tr><td style="color:rgb(255, 255, 255);"><?php echo htmlspecialchars($_SESSION['User_Name']); ?></td></tr>
<tr><td style="color:rgb(255, 255, 255);"><form action="Logout.php"><input style="width:80px;" class="" type="submit" name="" value="Sign Out"></form></td></tr>
</table>

</tr></td>
</table>

</div>