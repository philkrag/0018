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
// PAGE CREATED DATE: 2021-03-24

// DATE   		|| NAME 					|| MODIFICATION
// 2021-03-24 	|| Phillip Kraguljac 		|| v1.5 (Created)
// 2021-03-31 	|| Phillip Kraguljac 		|| v1.5
// 2021-04-24 	|| Phillip Kraguljac 		|| v1.5
// 2021-04-27 	|| Phillip Kraguljac 		|| v1.5
// 2021-06-01 	|| Phillip Kraguljac 		|| v1.5
// 2021-08-23 	|| Phillip Kraguljac 		|| v1.5
// 2021-01-10 	|| Phillip Kraguljac 		|| v1.7
// 2021-01-11	|| Phillip Kraguljac 		|| v1.7
// 2022-02-10	|| Phillip Kraguljac 		|| v1.7
// 2022-02-11	|| Phillip Kraguljac 		|| v1.7
// 2022-03-23	|| Phillip Kraguljac 		|| v1.7
// 2022-06-02	|| Phillip Kraguljac 		|| v1.8
// 2022-06-03 	|| Phillip Kraguljac 		|| v1.8

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


<?php // UPLOAD IMAGE

$Display_Array['ID'] = $Item_ID;
$Display_Array['File_Folder'] = "Equipment_Photos";
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['IS_Report'] = false;
$Display_Array['File_Type'] = "Photo";

Upload_Dialog($Database_Connection, $Display_Array);

?>


<?php // UPPER PAGE OPTIONS

$Data['Options_Description'] = "Reports";
$Data['Total_Items'] = 3;
$Data['Item_Prefix'] = array("Equipment_ID", "ID", "ID");
$Data['Item_Suffix'] = array($Item_ID, $Item_ID, $Item_ID);
$Data['Page'] = array(
"REP_Inspection-Points",
"REP_Equipment-Inspection-Points",
"REP_Equipment-Serviciability"
);
$Data['Label'] = array(
"Hazard(s) Report",
"Inspection(s) Report",
"Serviciability Report"
);
Upper_Options_0003($Data);

?>


<?php // UPPER PAGE OPTIONS

$Data['Options_Description'] = "Labels";
$Data['Total_Items'] = 2;
$Data['Item_Prefix'] = array("ID", "ID");
$Data['Item_Suffix'] = array($Item_ID, $Item_ID);
$Data['Page'] = array(
"",
"LBL_QR-Equipment"
);
$Data['Label'] = array(
"Serviceability Stickers",
"QR Stickers"
);
Upper_Options_0003($Data);

?>


<?php // UPPER PAGE OPTIONS

$Data['Options_Description'] = "Functions";
$Data['Total_Items'] = 1;
$Data['Item_Prefix'] = array("ID");
$Data['Item_Suffix'] = array($Item_ID);
$Data['Page'] = array(
"BKG_Inspection-Schedule"
);
$Data['Label'] = array(
"Check Inspection"
);
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
"Equipment Name",
"Part",
"Component",
"Serial Number",
"",
"Serviceability Rating",
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
$Display_Array['Table_Major_Heading'] = "";
$Display_Array['Table_Minor_Heading'] = "Associated Link(s)";
$Display_Array['Display_Items'] = array(
"(L):Parent Equipment ID:REC-DTL_Equipment",
"(L):Site ID:REC-LST_Sites",
"(L):Storage ID:REC-DTL_Storage"
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
$Display_Array['Table_Major_Heading'] = "SUB EQUIPMENT";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array(
"ID",
"(P):Equipment_Photos",
"Equipment Name",
"Part",
"Serial Number",
"Comments"
);
$Display_Array['Column_Width'] = array("50px", "150px", "150px", "150px", "150px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Equipment.php";
$Display_Array['New_Link_Reference'] = "Parent Equipment ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM reg_equipment ";
$Display_Array['MySQL_Filter'] = "WHERE `Parent Equipment ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "LICENSE(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID",
"License Title",
"License Provider"
);
$Display_Array['Column_Width'] = array("50px", "*", "200px");
$Display_Array['Item_Links'] = "REC-DTL_Licenses.php";
$Display_Array['New_Link_Reference'] = "Equipment ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_licenses` ";
$Display_Array['MySQL_Filter'] = "WHERE `Equipment ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "WMS(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID",
"(E):Work Instruction ID:reg_work-instructions:Type",
"(E):Work Instruction ID:reg_work-instructions:Title",
"(E):Work Instruction ID:reg_work-instructions:Status",
);
$Display_Array['Column_Width'] = array("50px", "200x", "*", "200px");
$Display_Array['Item_Links'] = "REC-DTL_Equipment-Work-Instructions.php";
$Display_Array['New_Link_Reference'] = "Equipment ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_equipment-work-instructions` ";
$Display_Array['MySQL_Filter'] = "WHERE `Equipment ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

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
$Display_Array['New_Link_Reference'] = "Equipment ID";

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
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "PROJECT(S)";
$Display_Array['Table_Minor_Heading'] = "Currently Being Undertaken";
$Display_Array['Display_Items'] = array(
"ID",
"(P):Project_Photos",
"Type",
"Description",
"Internal Priority",
"Stage",
"Status");
$Display_Array['Column_Width'] = array("50px", "150px", "100px", "*",  "150px", "150px", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Projects.php";
$Display_Array['New_Link_Reference'] = "Equipment ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM reg_projects ";
$Display_Array['MySQL_Filter'] = "WHERE `Equipment ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY FIELD(`Internal Priority`, 'IMMEDIATE', 'HIGH', 'MODERATE', 'LOW', 'NIL', '', 'WAITING APPROVAL'), `Type` ASC ";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Full_Table_Option'] = true;
$Display_Array['Table_Major_Heading'] = "TASK(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(P):Tasks_Photos",
"(E):Phase ID:rec_phases:Description",
"Task Status",
"Description",
"Task Type"
);
$Display_Array['Column_Width'] = array("50px", "100px", "150px", "150px", "*", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Tasks.php";
$Display_Array['New_Link_Reference'] = "Equipment ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE `Equipment ID` = ".$Item_ID." AND `Service ID` IS NULL AND ((`Task Status` != 'Completed' AND `Task Status` != 'Cancelled') OR `Task Status` IS NULL) AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Task Status` ASC ";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "NOTE(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Details", "Identified Date");
$Display_Array['Column_Width'] = array("50px", "*", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Notes.php";
$Display_Array['New_Link_Reference'] = "Equipment ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_notes` ";
$Display_Array['MySQL_Filter'] = "WHERE `Equipment ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Identified Date` ASC, `Details` ASC "; 
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
