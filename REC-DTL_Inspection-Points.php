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
// 2021-03-31 	|| Phillip Kraguljac 		|| v1.5. 
// 2021-06-01 	|| Phillip Kraguljac 		|| v1.5.

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Inspection Point Record</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">

<?php if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;} ?>


<?php // QR QUICK LINK

$Display_Array['ID'] = $Item_ID;

Display_Quick_Reference($Database_Connection, $Display_Array);

?>


<?php // UPPER PAGE OPTIONS

$Data['Item_ID'] = $Item_ID;
$Data['Page'] = "REP_Inspection-Points";
Upper_Options_0001($Data);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "INSPECTION POINT";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array("ID",
"(L):Project ID:REC-DTL_Projects",
"",
"Category",
"Sub Category",
"What to Review",
"Status",
"",
"MOI - Data Inspection",
"MOI - Process Review",
"MOI - Review Technical Data",
"MOI - Comms Review",
"MOI - Email",
"MOI - Phone Call",
"MOI - Survey",
"",
"Modified Date",
"Modified By"
);
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_inspection-points` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = ".$Display_Array['ID']." ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";

Dispaly_Details_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "NOTE(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Details");
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Notes.php";
$Display_Array['New_Link_Reference'] = "Inspection Point ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_notes` ";
$Display_Array['MySQL_Filter'] = "WHERE `Inspection Point ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Project_ID = Retrieve_Database_Entry_0001($Database_Connection, "rec_inspection-points", $Item_ID, "Project ID");

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "GAP(S) / HAZARD(S)";
$Display_Array['Table_Minor_Heading'] = "Open Identified Gaps.";
$Display_Array['Display_Items'] = array("ID", "Responsible Entity", 
"(D):ID:reg_risk-assessment:Gap ID:Health Risk",
"(D):ID:reg_risk-assessment:Gap ID:Commercial Risk",
"Attention Required",
"Gap Point"
);
$Display_Array['Column_Width'] = array("50px", "150px", "100px", "100px", "150px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Gaps.php";
$Display_Array['New_Link_Reference'] = "Inspection Point ID";
$Display_Array['Additional_Data'] = array(
"Project ID:{$Project_ID}"
);

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_gaps` ";
$Display_Array['MySQL_Filter'] = "WHERE `Inspection Point ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
