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
// 2021-03-26 	|| Phillip Kraguljac 		|| v1.5 (created)
// 2022-03-07 	|| Phillip Kraguljac 		|| v1.7
// 2022-06-01 	|| Phillip Kraguljac 		|| v1.8

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
<h2 class="Heading_2{$Report_CSS_Insert}" id="Contacts" style="">[<?php echo $Heading_Index; $Heading_Index++; ?>] Contact(s)</h2>
<br><p>
Contacts include details about a person associated with a particular maintenance activity and or project.<br>
There is a master contact register which is used as a single point of reference for all records.
</p>
<br></div>

<br>
<div class="List_Div"><br>
<h2 class="Heading_2{$Report_CSS_Insert}" id="Controlled_Parts" style="">[<?php echo $Heading_Index; $Heading_Index++; ?>] Controlled Part(s)</h2>
<br><p>
A Controlled Part is a part in which is required for the operation of a peice of equipment.<br>
This can include;<br>
- Parts which are used for the equipments stand operation (tubing, cabling etc),<br>
- Critical Parts which are used in the event of breakdown maintenance,<br>
- Spare parts which are used in the event of breakdown maintenance, and<br>
- Consumable stock which is used for maintenance and normal operations.
</p><p>
Controlled parts are those parts which are currently on hand.<br>
This can include parts which are listed within the Critical Part section.<br>
</p>

<br></div>


<br>
<div class="List_Div"><br>
<h2 class="Heading_2{$Report_CSS_Insert}" id="Critical_Parts" style="">[<?php echo $Heading_Index; $Heading_Index++; ?>] Critical Part(s)</h2>
<br><p>
A Critical Part is a component and or assembly identified from an equipment criticality analysis that can cause unacceptable business risk should those parts fail.<br>
The parts End-Of-Life (EOL) dates are investigated and recorded within the CMMS.<br>
When the parts are no longer available, then the CMMS will provide an action notification.<br>
These parts are can be installed in equipment or can be sitting within a store area.<br>
The purpose for tracking these parts (whether in operation on out of operation) is to ensure that critical parts serviceability is being monitored.
</p><p>
Critical Part records are those highlighting the life cycle of those associated parts.<br>
These records do not represent any stock quantaties.<br>
</p>
<br></div>


<br>
<div class="List_Div"><br>
<h2 class="Heading_2{$Report_CSS_Insert}" id="Risk_Assessment_Process" style="">[<?php echo $Heading_Index; $Heading_Index++; ?>] Risk Assessment Process</h2>
<br><img style="max-height: 400px; display: block; margin-left: auto; margin-right: auto;" src="Help_Images\Risk_Assessment_Process.png" alt="">
<br><p>
...
</p>
<br></div>


<br>
<div class="List_Div"><br>
<h2 class="Heading_2{$Report_CSS_Insert}" id="Conducting_Root_Causes_Analysis" style="">[<?php echo $Heading_Index; $Heading_Index++; ?>] Root Causes Analysis (RCAs) Process</h2>
<br><img style="max-height: 400px; display: block; margin-left: auto; margin-right: auto;" src="Help_Images\RCA_Process.png" alt="">
<br><p>
...
</p>
<br></div>


<br>
<div class="List_Div"><br>
<h2 class="Heading_2{$Report_CSS_Insert}" id="Store_Locations" style="">[<?php echo $Heading_Index; $Heading_Index++; ?>] Store Location(s)</h2>
<br><p>
Storage location is a place where stock, tools, spare parts and or equipment is kept physically.
</p>
<br></div>


<br>
<div class="List_Div"><br>
<h2 class="Heading_2{$Report_CSS_Insert}" id="Tools" style="">[<?php echo $Heading_Index; $Heading_Index++; ?>] Tool(s)</h2>
<br><p>
Tools are devices or implements, especially one held in the hand, used to carry out a particular function.<br>
They are typically allcoated to a storage area (toolkit).
</p>
<br></div>




</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 