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
// 2021-04-15 	|| Phillip Kraguljac 		|| v1.5 (Created)
// 2021-04-24 	|| Phillip Kraguljac 		|| v1.5
// 2021-08-23 	|| Phillip Kraguljac 		|| v1.5
// 2021-12-17 	|| Phillip Kraguljac 		|| v1.6
// 2022-06-01 	|| Phillip Kraguljac 		|| v1.8
// 2022-06-03 	|| Phillip Kraguljac 		|| v1.8
// 2022-06-14 	|| Phillip Kraguljac 		|| v1.8

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

<?php $Week = Date("W", strtotime("now"))-1; ?>




<h2 class="Heading_2" id="Conducting_Root_Causes_Analysis" style="">Daily</h2>


<!--<h3 class="Heading_3" id="" style="">Assistance</h3>
<table style="width:100%">
<col width="50px">
<col width="*">
<tr><th class="Details_Column_Heading">Action</th><th class="Details_Column_Heading">Description</th></tr>
</table>-->


<h3 class="Heading_3" id="" style="">Function(s)</h3>
<table style="width:100%">
<col width="50px">
<col width="*">
<tr><th class="Details_Column_Heading">Action</th><th class="Details_Column_Heading">Description</th></tr>
<tr><td class="Details_Label_Cell"><a href="BKG_Inspection-Schedule.php">RUN</a></td><td class="Details_Value_Cell">Inspection Schedule(s)</td></tr>
<tr><td class="Details_Label_Cell"><a href="BKG_Controller-Status.php">RUN</a></td><td class="Details_Value_Cell">Controller Status</td></tr>
</table>


<h3 class="Heading_3" id="Conducting_Root_Causes_Analysis" style="">List(s)</h3>
<table style="width:100%">
<col width="50px">
<col width="*">
<tr><th class="Details_Column_Heading">Action</th><th class="Details_Column_Heading">Description</th></tr>
<tr><td class="Details_Label_Cell"><a href="REC-LST_Specifications.php?Inspection_Status=Attention">OPEN</a></td><td class="Details_Value_Cell">[DEV] Overdue Specification Inspection(s)</td></tr>
</table>


<h3 class="Heading_3" id="Conducting_Root_Causes_Analysis" style="">Report(s)</h3>
<table style="width:100%">
<col width="50px">
<col width="*">
<tr><th class="Details_Column_Heading">Action</th><th class="Details_Column_Heading">Description</th></tr>
<tr><td class="Details_Label_Cell"><a href="REP_Daily-Monitoring.php">OPEN</a></td><td class="Details_Value_Cell">[DEV] Specification Monitoring Report</td></tr>
</table>


<h3 class="Heading_3" id="Conducting_Root_Causes_Analysis" style="">Dashboard(s)</h3>
<table style="width:100%">
<col width="50px">
<col width="*">
<tr><th class="Details_Column_Heading">Action</th><th class="Details_Column_Heading">Description</th></tr>
<tr><td class="Details_Label_Cell"><a href="REC-DSH_Tasks-Call-Center.php">OPEN</a></td><td class="Details_Value_Cell">[DEV] Call Center Dashboard</td></tr>
</table>


<br>
<h2 class="Heading_2" id="Conducting_Root_Causes_Analysis" style="">Weekly</h2>
<h3 class="Heading_3" id="Conducting_Root_Causes_Analysis" style="">Report(s)</h3>
<table style="width:100%">
<col width="50px">
<col width="*">
<tr><th class="Details_Column_Heading">Action</th><th class="Details_Column_Heading">Description</th></tr>
<tr><td class="Details_Label_Cell"><a href="REP_Weekly-Maintenance.php?Week=<?php echo $Week; ?>">OPEN</a></td><td class="Details_Value_Cell">Maintenance Report</td></tr>
<tr><td class="Details_Label_Cell"><a href="REP_Weekly-Monitoring.php?Week=<?php echo $Week; ?>">OPEN</a></td><td class="Details_Value_Cell">Monitoring Report</td></tr>
<tr><td class="Details_Label_Cell"><a href="REP_Equipment-Specifications.php">OPEN</a></td><td class="Details_Value_Cell">[DEV] Specifications Report</td></tr>
</table>





<br>
<h2 class="Heading_2" id="Conducting_Root_Causes_Analysis" style="">Development</h2>
<h3 class="Heading_3" id="Conducting_Root_Causes_Analysis" style="">...</h3>
<table style="width:100%">
<col width="50px">
<col width="*">
<tr><th class="Details_Column_Heading">Action</th><th class="Details_Column_Heading">...</th></tr>
<tr><td class="Details_Label_Cell"><a href="WID_Equipment.php?Equipment_ID=2">OPEN</a></td><td class="Details_Value_Cell">[DEV] Test Form</td></tr>
<tr><td class="Details_Label_Cell"><a href="REP_Test.php?ID=1">OPEN</a></td><td class="Details_Value_Cell">[DEV] Test Report</td></tr>
</table>







</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
