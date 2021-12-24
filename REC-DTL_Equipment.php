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
// 2021-03-31 	|| Phillip Kraguljac 		|| v1.5.
// 2021-04-24 	|| Phillip Kraguljac 		|| v1.5.
// 2021-04-27 	|| Phillip Kraguljac 		|| v1.5.
// 2021-06-01 	|| Phillip Kraguljac 		|| v1.5.
// 2021-08-23 	|| Phillip Kraguljac 		|| v1.5.

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


<?php // UPLOAD IMAGE

$Display_Array['ID'] = $Item_ID;
$Display_Array['File_Folder'] = "Equipment_Photos";
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['IS_Report'] = false;
$Display_Array['File_Type'] = "Photo";

Upload_Dialog($Database_Connection, $Display_Array);

?>


<?php // UPPER PAGE OPTIONS

$Data['Total_Items'] = 3;
$Data['Item_ID'] = array($Item_ID, $Item_ID, $Item_ID);
$Data['Item_ID_Prefix'] = "ID";
$Data['Page'] = array("REP_Inspection-Points", "REP_Equipment-Inspection-Points", "BKG_Inspection-Schedule");
$Data['Bookmark'] = array(null, null, null);
$Data['Label'] = array("Hazard(s) Report", "Inspection(s) Report", "Check Inspection");
Upper_Options_0003($Data);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "EQUIPMENT";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array("ID",
"Principal System",
"Equipment",
"Part",
"Component",
"Serial Number",
"",
"Owner ID",
"",
"Comments",
"",
"Modified Date",
"Modified By"
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
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "CONTROL(S)";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array("ID", "Description", "IP Address", "IO Type", "IO Address", "Current Value");
$Display_Array['Column_Width'] = array("50px", "*", "150px", "150px", "150px", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Equipment-Controls.php";
$Display_Array['New_Link_Reference'] = "Equipment ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_control-nodes` ";
$Display_Array['MySQL_Filter'] = "WHERE `Equipment ID` = '{$Item_ID}' AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>



<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "CHANGE(S)";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array("ID", "Actual Install Date", "Actual Program Date", "Actual Commission Date", "Comments");
$Display_Array['Column_Width'] = array("50px", "150px", "150px", "150px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Equipment-Change.php";
$Display_Array['New_Link_Reference'] = "Equipment ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_equipment-change` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "SERVICE(S)";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array("ID", "Description");
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Services.php";
$Display_Array['Item_Link_Data'] = "&Equipment ID={$Item_ID}";
$Display_Array['New_Link_Reference'] = "Equipment ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_services` ";
$Display_Array['MySQL_Filter'] = "WHERE `Equipment ID` = '{$Item_ID}' AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "MONITORING POINT(S)";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array("ID", "Inspection Point", "Method of Measure", "Where to Measure", "Measuring Point Available", "Date Status", "Measurement Status");
$Display_Array['Column_Width'] = array("50px", "300px", "*", "150px", "150px", "150px", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Monitoring-Points.php";
$Display_Array['New_Link_Reference'] = "Equipment ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_monitoring-points` ";
$Display_Array['MySQL_Filter'] = "WHERE `Equipment ID` = '{$Item_ID}' AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Measuring Point Available` DESC, `Where to Measure` DESC, `Inspection Point` DESC ";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "GAP(S) / HAZARD(S)";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array(
"ID",
"(P):Gap_Photos",
"Inspection Point ID",
"(M):Gap Point:Stakeholder:Responsible Entity:Threat / Opportunity",
"(D):ID:reg_risk-assessment:Gap ID:Health Risk",
"(D):ID:reg_risk-assessment:Gap ID:Commercial Risk",
"Attention Required"
);
$Display_Array['Column_Width'] = array("50px", "100px", "50px", "*", "150px", "150px", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Gaps.php";
$Display_Array['New_Link_Reference'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_gaps` ";
$Display_Array['MySQL_Filter'] = "WHERE `Equipment ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "TASK(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(P):Tasks_Photos",
"(E):Phase ID:rec_phases:Description",
"Task Status",
"Description"
);
$Display_Array['Column_Width'] = array("50px", "100px", "150px", "150px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Tasks.php";
$Display_Array['New_Link_Reference'] = "Equipment ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE `Equipment ID` = ".$Item_ID." AND `Service ID` IS NULL AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "PROJECT PART(S)";
$Display_Array['Table_Minor_Heading'] = "Ordered";
$Display_Array['Display_Items'] = array("ID", "Description", "Order Status");
$Display_Array['Column_Width'] = array("80px", "*", "300px");
$Display_Array['Item_Links'] = "REC-DTL_Parts-Project.php";
$Display_Array['New_Link_Reference'] = "Equipment ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_parts-project` ";
$Display_Array['MySQL_Filter'] = "WHERE `Equipment ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
