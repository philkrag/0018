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
// PAGE CREATED DATE: 2020-10-07

// DATE   		|| NAME 					|| MODIFICATION
// 2022-03-23 	|| Phillip Kraguljac 		|| v1.7(created)
// 2022-07-29 	|| Phillip Kraguljac 		|| v1.8

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>

<?php $Heading_Index = "15"; ?>

<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title><?php echo "[".$_GET['ID']."]"; ?> Equipment Serviceability Report <?php echo date("Y-m-d"); ?></title>

</head>
<body onload="">

<?php if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;} ?>


<?php

$Report_Array['Display_Week']="";
$Report_Array['Display_Week_Start_Date']="";
$Report_Array['Display_Week_Finish_Date']="";
$Report_Array['Print_Date']="";

Report_Details_0001($Database_Connection, $Report_Array);

?>


<?php // UPLOAD IMAGE

$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['File_Folder'] = "Equipment_Photos";
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['IS_Report'] = false;
$Display_Array['File_Type'] = "Photo";

Upload_Dialog($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "EQUIPMENT";
$Display_Array['Table_Minor_Heading'] = "Details";
$Display_Array['Display_Items'] = array("ID",
"Principal System",
"Equipment Name",
"Part",
"Component",
"Serial Number",
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
$Display_Array['IS_Report'] = true;
$Display_Array['Value_Font_Size'] = "30px";
$Display_Array['Table_Major_Heading'] = "";
$Display_Array['Table_Minor_Heading'] = "State";
$Display_Array['Display_Items'] = array(
"Serviceability Rating"
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
$Display_Array['Full_Table_Option'] = true;
$Display_Array['Table_Major_Heading'] = "TASK(S)";
$Display_Array['Table_Minor_Heading'] = "Outstanding";
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
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<br>
<!-- <div style="text-align: right;"><button onclick="window.print()">Print</button></div> -->

</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 