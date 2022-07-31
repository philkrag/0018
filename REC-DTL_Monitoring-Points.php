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
// PAGE CREATED DATE: 2021-04-27

// DATE   		|| NAME 					|| MODIFICATION
// 2021-04-27 	|| Phillip Kraguljac 		|| v1.5. (Created)
// 2021-05-10 	|| Phillip Kraguljac 		|| v1.5.

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>

<?php $Heading_Index = 1; ?>

<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Project Record</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">

<?php if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;} ?>


<?php // QR QUICK LINK

$Display_Array['ID'] = $Item_ID;

Display_Quick_Reference($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "MONITORING POINT";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array("ID",
"Equipment ID",
"",
"Inspection Point",
"Method of Measure",
"Where to Measure",
"",
"Measuring Point Available",
"Date Status",
"Measurement Status",
"",
"Last Measured Amount",
"Last Unit of Measure",
"Last Measured Date",
"",
"Modified Date",
"Modified By"
);
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_monitoring-points` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = ".$Display_Array['ID']." ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";

Dispaly_Details_0001($Database_Connection, $Display_Array);

?>



<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "SPECIFICATION(S)";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array("ID", "Source", "Minimum Allowable", "Maximum Allowable", "Unit of Measure", "Inspection Monitoring");
$Display_Array['Column_Width'] = array("50px", "*", "150px", "150px", "150px", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Specifications.php";
$Display_Array['New_Link_Reference'] = "Monitoring Point ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_specifications` ";
$Display_Array['MySQL_Filter'] = "WHERE `Monitoring Point ID` = '{$Item_ID}' AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['New_Page_At_Print'] = false;
$Display_Array['Table_Major_Heading'] = "INSPECTION(S)";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array("ID",
"Measured Amount",
"Unit of Measure",
"Measured Date",
"Measure By"
);
$Display_Array['Column_Width'] = array("50px", "150px", "150px",  "150px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Monitoring-Inspection.php";
$Display_Array['New_Link_Reference'] = "Monitoring Point ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_monitoring-points-inspections` ";
$Display_Array['MySQL_Filter'] = "WHERE `Monitoring Point ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
