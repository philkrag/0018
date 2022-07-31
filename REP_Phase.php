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
// PAGE CREATED DATE: 2022-07-29

// DATE   		|| NAME 					|| MODIFICATION
// 2022-07-29 	|| Phillip Kraguljac 		|| v1.8 (created)

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>

<?php $Heading_Index = "1-0"; ?>

<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title><?php echo "[".$_GET['Phase_ID']."]"; ?> Phase Report <?php echo date("Y-m-d"); ?></title>
</head>
<body onload="">

<?php if(isset($_GET['Phase_ID'])){$Item_ID = Basic_Filter_Input($_GET['Phase_ID']);}else{$Item_ID = null;} ?>


<?php // SEARCH WIDGET

$Display_Array['Search_Items'] = array("Phase_ID");
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
$Display_Array['Table_Major_Heading'] = "PHASE";
$Display_Array['Table_Minor_Heading'] = "Details";
$Display_Array['Display_Items'] = array(
"ID",
"Step",
"Description",
"Status",
"Modified Date",
"Modified By"
);
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_phases` ";
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
$Display_Array['Table_Major_Heading'] = "";
$Display_Array['Table_Minor_Heading'] = "Associated Links";
$Display_Array['Display_Items'] = array(
"Project ID"
);
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_phases` ";
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
$Display_Array['Table_Major_Heading'] = "TASK(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(P):Tasks_Photos:100px",
"Task Status",
"Description"
);
$Display_Array['Column_Width'] = array("50px", "100px", "150px", "*");
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










</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
