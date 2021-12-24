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
// 2020-11-25 	|| Phillip Kraguljac 		|| v1.4.
// 2021-03-24 	|| Phillip Kraguljac 		|| v1.5.
// 2021-04-11 	|| Phillip Kraguljac 		|| v1.5.
// 2021-04-15 	|| Phillip Kraguljac 		|| v1.5.
// 2021-04-24 	|| Phillip Kraguljac 		|| v1.5.
// 2021-09-08 	|| Phillip Kraguljac 		|| v1.6.
// 2021-12-01 	|| Phillip Kraguljac 		|| v1.6.

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>



<div id="mySidenav" class="sidenav">

<table style="width:100%; height:100%">
<tr><td style="vertical-align:top;">

<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="MAP-Master.php">Map(s)</a>
<?php if(Allow_Access_0001($Database_Connection, "Equipment Management;")){ ?><a href="REC-LST_Documents.php">Document(s)</a><?php }; ?>
<?php if(Allow_Access_0001($Database_Connection, "Product Management;")){ ?><a href="REC-LST_Equipment_Types.php">Equipment Type(s)</a><?php }; ?>
<?php if(Allow_Access_0001($Database_Connection, "Equipment Management;")){ ?><a href="REC-LST_Equipment.php">Equipment</a><?php }; ?>
<?php if(Allow_Access_0001($Database_Connection, "Equipment Management; Project Management;")){ ?><a href="REC-LST_Tasks.php">Task(s)</a><?php }; ?>
<?php if(Allow_Access_0001($Database_Connection, "Equipment Management;")){ ?><a href="OPT-Parts.php">Part(s)</a><?php }; ?>
<?php if(Allow_Access_0001($Database_Connection, "Equipment Management;")){ ?><a href="REC-LST_Parts-Order.php">Order(s)</a><?php }; ?>
<?php if(Allow_Access_0001($Database_Connection, "Store Management;")){ ?><a href="REC-LST_Storage.php">Storage</a><?php }; ?>
<?php if(Allow_Access_0001($Database_Connection, "Project Management;")){ ?><a href="REC-LST_Projects.php">Project(s)</a><?php }; ?>
<?php if(Allow_Access_0001($Database_Connection, "Equipment Management;")){ ?><a href="REC-LST_Controls.php">Control(s)</a><?php }; ?>
<?php if(Allow_Access_0001($Database_Connection, "Project Management;")){ ?><a href="REC-LST_Contacts.php">Contact(s)</a><?php }; ?>
<?php if(Allow_Access_0001($Database_Connection, "All")){ ?><a href="OPT-Activities.php">Activities</a><?php }; ?>
<a href="REC_Calendar.php?Year=<?php echo date("Y"); ?>&Month=<?php echo date("m"); ?>">Calendar</a>

<!--<a href="">Moodle</a>-->
<!--<a href="Development_Page.php">Dev</a>-->
<a href="Help.php">Help</a>
<a href="About.php">About</a>
<br>  

</td></tr>
<tr><td style="vertical-align:bottom; padding-bottom:60px;">

<table style="padding:0px 30px 0px 30px; background-color:rgb(49, 88, 147); border: 1px solid white;; width:100%;">
<tr style="color:rgb(255, 255, 255);"><td><b>Logged In User:</b></td></tr>
<tr><td style="color:rgb(255, 255, 255);"><?php echo htmlspecialchars($_SESSION['User_Name']); ?></td></tr>
<tr style="color:rgb(255, 255, 255);"><td><b>Access Enabled:</b></td></tr>
<tr><td style="color:rgb(255, 255, 255);">
<?php
$User_Access_Options = array_filter(explode(";", $_SESSION["Access_Tags"]));
for ($x = 0; $x < count($User_Access_Options); $x++) {
echo ($x+1).".) ".$User_Access_Options[$x]."<br>";
}
?>
</td></tr>
<tr><td style="color:rgb(255, 255, 255);"><form action="Logout.php"><input style="width:80px;" class="" type="submit" name="" value="Sign Out"></form></td></tr>
</table>

</tr></td>
</table>

</div>
