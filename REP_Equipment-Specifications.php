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
// PAGE CREATED DATE: 2021-04-24

// DATE   		|| NAME 					|| MODIFICATION
// 2021-05-18 	|| Phillip Kraguljac 		|| v1.5.(created)

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>

<?php $Heading_Index = "15"; ?>

<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title><?php echo "[".$Heading_Index."]"; ?> <?php echo date("Y-m-d"); ?> Equipment Inspection Point Report <?php echo "ID:".$_GET['ID']; ?></title>
</head>
<body onload="">

<?php if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;} ?>


<?php

Report_Details_0001($Database_Connection, $Report_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "SPECIFICATION LIST";
$Display_Array['Table_Minor_Heading'] = "Details";
$Display_Array['Display_Items'] = array("ID",
"Principal System",
"Equipment",
"Part ID",
"Component ID",
"Comments"
);
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_equipment` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = ".$Display_Array['ID']." ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";

Dispaly_Details_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "SPECIFICATION LIST";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array("ID",
"(E):Monitoring Point ID:reg_monitoring-points:Equipment ID",
"(E):Monitoring Point ID:reg_monitoring-points:Inspection Point",
"Source",
"Comments",
"Minimum Allowable",
"Maximum Allowable",
"Unit of Measure",
"Inspection Monitoring",
"Inspection Interval (Days)");
$Display_Array['Column_Width'] = array("50px", "50px", "", "", "", "", "", "", "");
$Display_Array['Item_Links'] = "";
$Display_Array['New_Link_Reference'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_specifications` ";
$Display_Array['MySQL_Filter'] = "WHERE `Monitoring Point ID` IS NOT NULL AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Monitoring Point ID` ASC ";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Report_Array['Technician Signature'] = true;

Report_Details_0002($Database_Connection, $Report_Array)

?>


<br>
<div style="text-align: right;"><button onclick="window.print()">Print</button></div>

</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
