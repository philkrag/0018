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
// 2020-09-21 	|| Phillip Kraguljac 		|| v1.0
// 2020-10-06 	|| Phillip Kraguljac 		|| v1.1
// 2020-10-21 	|| Phillip Kraguljac 		|| v1.1
// 2020-10-23 	|| Phillip Kraguljac 		|| v1.2
// 2020-10-23 	|| Phillip Kraguljac 		|| v1.3
// 2021-03-30 	|| Phillip Kraguljac 		|| v1.5
// 2021-04-24 	|| Phillip Kraguljac 		|| v1.5
// 2021-05-04 	|| Phillip Kraguljac 		|| v1.5
// 2021-05-07 	|| Phillip Kraguljac 		|| v1.5
// 2021-05-27 	|| Phillip Kraguljac 		|| v1.5
// 2021-10-11 	|| Phillip Kraguljac 		|| v1.6
// 2022-06-17 	|| Phillip Kraguljac 		|| v1.8
// 2022-07-06 	|| Phillip Kraguljac 		|| v1.88
// 2022-07-14 	|| Phillip Kraguljac 		|| v1.8

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


<?php // QR QUICK LINK

$Display_Array['ID'] = $Item_ID;

Display_Quick_Reference($Database_Connection, $Display_Array);

?>


<?php // UPLOAD IMAGE

$Display_Array['ID'] = $Item_ID;
$Display_Array['File_Folder'] = "Project_Photos";
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['IS_Report'] = false;
$Display_Array['File_Type'] = "Photo";

Upload_Dialog($Database_Connection, $Display_Array);

?>


<?php // UPPER PAGE OPTIONS

$Data['Options_Description'] = "Reports";
$Data['Total_Items'] = 10;
$Data['Item_Prefix'] = array("Project_ID", "Project_ID", "Project_ID", "Project_ID", "Project_ID", "Project_ID", "Project_ID", "Project_ID", "Project_ID", "Project_ID");
$Data['Item_Suffix'] = array($Item_ID, $Item_ID, $Item_ID, $Item_ID, $Item_ID, $Item_ID, $Item_ID, $Item_ID, $Item_ID, $Item_ID);
$Data['Page'] = array("REP_Project", "REP_Project-Overview", "REP_Project-Scope-Proforma", "REP_Project-Authorisation", "REP_Project-Scope-Management", "REP_Project-Tasks", "REP_Project-Parts", "REP_Inspection-Points", "REP_Project-Risks", "REP_Project-Contingencies");
$Data['Label'] = array("General", "Overview", "Scope", "Authorisation", "Scope Mgt", "WBS", "Parts", "Inspection Point", "Risks", "Contingencies");
Upper_Options_0003($Data);

?>


<?php // UPPER PAGE OPTIONS

$Data['Options_Description'] = "Labels";
$Data['Total_Items'] = 1;
$Data['Item_ID'] = array($Item_ID);
$Data['Item_Indexer_Specific'] = array("ID");
$Data['Page'] = array(
"LBL_Quick-Reference-Project"
);
$Data['Label'] = array(
"Quick Reference"
);
$Data['Item_Prefix'] = array("");
$Data['Item_Suffix'] = array("");
Upper_Options_0003($Data);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "[{$Heading_Index}] PROJECT";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array("ID",
"Project Owner",
"Project Sponsor",
"Project Manager",
"Project Director",
"Description",
"Internal Priority",
"Scope",
"Status",
"Type",
"Stage",
"Planned Start Date",
"Planned Completed Date",
"Started Date",
"Completed Date",
"",
"Detailed Budget Status",
"Stakeholder Analysis Status",
"Scope Review Status",
"Work Breakdown Status",
"Risk Analysis Status",
"",
"Modified Date",
"Modified By"
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
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "";
$Display_Array['Table_Minor_Heading'] = "Associated Links";
$Display_Array['Display_Items'] = array(
"Equipment ID"
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
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] CHANGE CONTROL(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Description", "Timeline Impact", "Budget Impact", "Workplan Impact", "Approval");
$Display_Array['Column_Width'] = array("50px", "*", "150px", "150px", "150px", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Change-Control.php";
$Display_Array['New_Link_Reference'] = "Project ID";
$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_change_control` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>




<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] OBJECTIVE(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Description");
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Objectives.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_objectives` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] PHASE(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Step", "Description", "Status");
$Display_Array['Column_Width'] = array("50px", "50px", "*", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Phases.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_phases` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Step` ASC";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] BUDGET(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Description");
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Budgets.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_budgets` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] TIME FRAME(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Description");
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Time-Frames.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_time-frames` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] DELIVERABLE(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Description");
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Deliverables.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_deliverables` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] OBSTACLE(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Description");
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Obstacles.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_obstacles` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] KEY SUCCESS CRITERIA(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Description");
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Key-Success-Criteria.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_key-success-criteria` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] ASSUMPTION(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Description");
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Assumptions.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_assumptions` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] CONSTRAINT(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Description");
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Constraints.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_constraints` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] MILESTONE(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Required Finish Date", "Details", "Status");
$Display_Array['Column_Width'] = array("50px", "150px", "*", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Milestones.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_milestones` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] RCA(S)";
$Display_Array['Table_Minor_Heading'] = "Issue Description";
$Display_Array['Display_Items'] = array("ID", "Issue Definition");
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC-DTL_RCAs.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_rcas` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] INSPECTION POINT(S)";
$Display_Array['Table_Minor_Heading'] = "High Level Points of Inspection (contain the GAPs)";
$Display_Array['Display_Items'] = array("ID",
"Category",
"Status",
"What to Review");
$Display_Array['Column_Width'] = array("50px", "150px", "150px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Inspection-Points.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_inspection-points` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `rec_inspection-points`.`Category` ASC";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] RISK(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(E):Contingency ID:rec_contingency:Cause",
"Health Risk",
"Commercial Risk",
"Completed Date",
"Completed By"
);
$Display_Array['Column_Width'] = array("50px", "*", "100px", "100px", "100px", "200px");
$Display_Array['Item_Links'] = "REC-DTL_Risk.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_risk-assessment` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] PERFORMANCE REPORTING";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID",
"Contact ID",
"(E):Contact ID:reg_contacts:First Name",
"(E):Contact ID:reg_contacts:Last Name",
"(E):Contact ID:reg_contacts:Position",
"Report Timeline Issues",
"Report Budget Issues",
"Report Quality Issues",
"Report Integration Issues",
"Report Integration Issues",
"Report Risk Issues",
"Description"
);
$Display_Array['Column_Width'] = array("50px", "50px", "200px", "200px", "200px", "100px", "100px", "100px", "100px", "100px", "100px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Performance-Reporting.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_performance-reporting` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] ESCULATION(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Description");
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Escalations.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_escalation` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] CONTINGENCY(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Deliverable ID", "Cause", "Proposed Solution");
$Display_Array['Column_Width'] = array("50px", "50px", "300px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Contingencies.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_contingency` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] STAKEHOLDER(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID",
"Contact ID",
"(E):Contact ID:reg_contacts:First Name",
"(E):Contact ID:reg_contacts:Last Name",
"(E):Contact ID:reg_contacts:Position",
"Description"
);
$Display_Array['Column_Width'] = array("50px", "50px", "200px", "200px", "200px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Stakeholders.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_stakeholders` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] DESIGN FUNCTION(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"Description"
);
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Functionality.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_design-functionality` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] TASK(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(E):Phase ID:rec_phases:Description",
"(P):Tasks_Photos",
"Task Status",
"Planned Work Date",
"Description"
);
$Display_Array['Column_Width'] = array("50px", "200px", "100px", "150px", "150px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Tasks.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Task Status` ASC, `Planned Work Date` DESC ";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "[".($Heading_Index=$Heading_Index+1)."] BUDGET / EXPENDITURE";
$Display_Array['Table_Minor_Heading'] = "Totals";
$Display_Array['Display_Items'] = array(
"Staffing Budget ($) exc GST",
"Materials Budget ($) exc GST",
"Consultancy Costs ($) exc GST",
"Other Costs ($) exc GST",
"Total Budget ($) exc GST"
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

// $Display_Array = null;
// $Display_Array['ID'] = $Item_ID;
// $Display_Array['Table_Major_Heading'] = "Parts";
// $Display_Array['Table_Minor_Heading'] = "General";
// $Display_Array['Display_Items'] = array("ID", "Description", "Estimated Total Cost ($) exc GST");
// $Display_Array['Column_Width'] = array("80px", "*", "150px");
// $Display_Array['Item_Links'] = "REC-DTL_Parts-Project.php";
// $Display_Array['New_Link_Reference'] = "Project ID";

// $Display_Array['MySQL_Action'] = "SELECT * ";
// $Display_Array['MySQL_Table'] = "FROM `rec_parts-project` ";
// $Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
// $Display_Array['MySQL_Order'] = "";
// $Display_Array['MySQL_Limit'] = "";
// $Display_Array['MySQL_Offset'] = "";

// Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "Parts";
$Display_Array['Table_Minor_Heading'] = "General";
$Display_Array['Display_Items'] = array("ID", "Description", "Manufacturer", "Manufacturer Part #", "Total Price (exc GST)");
$Display_Array['Column_Width'] = array("80px", "*", "150px", "150px", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Parts-Project.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_parts-order` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "";
$Display_Array['Table_Minor_Heading'] = "Controlled";
$Display_Array['Display_Items'] = array( 
"ID",
"Manufacturer",
"Manufacturer Part #",
"Serial #",
"Status",
"Performance Tested",
"Warranty Claim Status",
"RMA #",
"SO #",
"(E):Storage ID:reg_storage:Location Name"
);
$Display_Array['Column_Width'] = array("80px", "*", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Parts-Project.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_parts-controlled` ";
$Display_Array['MySQL_Filter'] = "WHERE `Project ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
