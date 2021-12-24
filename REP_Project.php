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
// 2020-09-21 	|| Phillip Kraguljac 		|| v1.0.
// 2020-10-07 	|| Phillip Kraguljac 		|| v1.1.
// 2020-10-21 	|| Phillip Kraguljac 		|| v1.1.
// 2021-04-23 	|| Phillip Kraguljac 		|| v1.5.

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>

<?php $Heading_Index = "1-0"; ?>

<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title><?php echo "[".$Heading_Index."]"; ?> <?php echo date("Y-m-d"); ?> Project Report <?php echo "ID:".$_GET['ID']; ?></title>
</head>
<body onload="">

<?php if(isset($_GET['Project_ID'])){$Item_ID = Basic_Filter_Input($_GET['Project_ID']);}else{$Item_ID = null;} ?>


<?php // SEARCH WIDGET

$Display_Array['Search_Items'] = array("Project_ID");
$Search_Description = Hidden_Search_0001($Database_Connection, $Display_Array);

?>


<?php

$Report_Array['Display_Week']="";
$Report_Array['Display_Week_Start_Date']="";
$Report_Array['Display_Week_Finish_Date']="";
$Report_Array['Print_Date']="";
Report_Details_0001($Database_Connection, $Report_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['New_Page_At_Print'] = false;
$Display_Array['Table_Major_Heading'] = "PROJECT";
$Display_Array['Table_Minor_Heading'] = "Details";
$Display_Array['Display_Items'] = array("ID",
"Started Date",
"Project Owner",
"Description",
"Internal Priority",
"Scope",
"Stage",
"Status",
"Completed Date"
);
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "REC_Projects.php";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_projects` ";
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
$Display_Array['New_Page_At_Print'] = false;
$Display_Array['Table_Major_Heading'] = "MILESTONE(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Required Finish Date", "Details", "Status");
$Display_Array['Column_Width'] = array("50px", "150px", "*", "150px");
$Display_Array['Item_Links'] = "REC_Milestones.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_milestones` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') {$Search_Description} ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['New_Page_At_Print'] = false;
$Display_Array['Table_Major_Heading'] = "RCA(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Issue Definition");
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC_RCAs.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_rcas` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') {$Search_Description} ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['New_Page_At_Print'] = true;
$Display_Array['Table_Major_Heading'] = "INSPECTION POINT(S)";
$Display_Array['Table_Minor_Heading'] = "Open Points of Interest.";
$Display_Array['Display_Items'] = array("ID", "Category", "What to Review");
$Display_Array['Column_Width'] = array("50px", "150px", "*");
$Display_Array['Item_Links'] = "REC_Inspection-Points.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_inspection-points` ";
$Display_Array['MySQL_Filter'] = "WHERE AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') {$Search_Description} ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<table style="width:100%;">
<col width="50%">
<col width="50%">
<tr><td style="align:center;">
<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['New_Page_At_Print'] = false;
$Display_Array['Table_Major_Heading'] = "INSPECTION POINT(S) - CATEGORIES";
$Display_Array['Table_Minor_Heading'] = "Open Points of Interest.";
$Display_Array['Display_Items'] = array("ID", "Category", "What to Review");
$Display_Array['Column_Width'] = array("50px", "150px", "*");
$Display_Array['Item_Links'] = "REC_Inspection-Points.php";
$Display_Array['New_Link_Reference'] = "Project ID";
$Display_Array['Chart_Column'] = "Category";
$Display_Array['Chart_Alignment'] = "left";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_inspection-points` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') {$Search_Description} ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Chart_Data_0001($Database_Connection, $Display_Array);

?>
</td><td style="align:center;">
<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['New_Page_At_Print'] = false;
$Display_Array['Table_Major_Heading'] = "INSPECTION POINT(S) - STATUS";
$Display_Array['Table_Minor_Heading'] = "Open Points of Interest.";
$Display_Array['Display_Items'] = array("ID", "Category", "What to Review");
$Display_Array['Column_Width'] = array("50px", "150px", "*");
$Display_Array['Item_Links'] = "REC_Inspection-Points.php";
$Display_Array['New_Link_Reference'] = "Project ID";
$Display_Array['Chart_Column'] = "Status";
$Display_Array['Chart_Alignment'] = "right";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_inspection-points` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') {$Search_Description} ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Chart_Data_0003($Database_Connection, $Display_Array);

?>
</td></tr>
</table>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['New_Page_At_Print'] = true;
$Display_Array['Table_Major_Heading'] = "TASK(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(E):Phase ID:rec_phases:Description",
"Task Status",
"Description"
);
$Display_Array['Column_Width'] = array("50px", "150px", "150px", "*");
$Display_Array['Item_Links'] = "REC_Tasks.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') {$Search_Description} ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>

<br>
<div style="text-align: right;"><button onclick="window.print()">Print</button></div>

</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 