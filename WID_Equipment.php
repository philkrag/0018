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
// 2021-06-01 	|| Phillip Kraguljac 		|| v1.5. (Created)

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

<?php if(isset($_GET['Equipment_ID'])){$Item_ID = Basic_Filter_Input($_GET['Equipment_ID']);}else{$Item_ID = null;} ?>


<?php // UPLOAD IMAGE

$Display_Array['ID'] = $Item_ID;
$Display_Array['File_Folder'] = "Equipment_Photos";
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['IS_Report'] = true;
$Display_Array['File_Type'] = "Photo";

Upload_Dialog($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "EQUIPMENT";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array("ID",
"Principal System",
"Principal Equipment",
"Part",
"Component",
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
$Display_Array['Table_Major_Heading'] = "TASK(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(E):Phase ID:rec_phases:Description",
"Task Status",
"Description"
);
$Display_Array['Column_Width'] = array("50px", "150px", "150px", "*");
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


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
