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
// 2020-10-21 	|| Phillip Kraguljac 		|| v1.1.
// 2021-04-23 	|| Phillip Kraguljac 		|| v1.5.
// 2021-06-01 	|| Phillip Kraguljac 		|| v1.5.


// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>

<?php $Heading_Index = "14-1"; ?>

<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title><?php echo "[".$Heading_Index."]"; ?> <?php echo date("Y-m-d"); ?> Gap / Hazard Report <?php echo "ID:".$_GET['ID']; ?></title>
</head>
<body onload="">

<?php if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;} ?>


<?php

Report_Details_0001($Database_Connection, $Report_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = "oooo";
$Display_Array['Table_Major_Heading'] = "GAP";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array("ID",
"Inspection Point ID",
"Project ID",
"Stakeholder",
"Responsible Entity",
"Threat / Opportunity",
"Attention Required",
"Gap Point"
);
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_gaps` ";
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
$Display_Array['Table_Major_Heading'] = "RISK(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Health Risk", "Commercial Risk", "Completed Date", "Completed By", "");
$Display_Array['Column_Width'] = array("50px", "100px", "100px", "100px", "200px", "*");
$Display_Array['Item_Links'] = "REC_Risk.php";
$Display_Array['New_Link_Reference'] = "Gap ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_risk-assessment` ";
$Display_Array['MySQL_Filter'] = "WHERE `Gap ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "NOTE(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Details");
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC_Notes.php";
$Display_Array['New_Link_Reference'] = "Gap ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_notes` ";
$Display_Array['MySQL_Filter'] = "WHERE `Gap ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "CONTROL(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID",
"Control ID",
"(E):Control ID:rec_controls:Associated Document",
"(E):Control ID:rec_controls:Change Description",
"(E):Control ID:rec_controls:Status",
);
$Display_Array['Column_Width'] = array("50px", "50px", "200px", "*", "200px");
$Display_Array['Item_Links'] = "REC_Gaps-Controls.php";
$Display_Array['New_Link_Reference'] = "Gap ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_gap-controls` ";
$Display_Array['MySQL_Filter'] = "WHERE `Gap ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
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