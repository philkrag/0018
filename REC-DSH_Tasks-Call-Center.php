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
// PAGE CREATED DATE: 2021-08-23

// DATE   		|| NAME 					|| MODIFICATION
// 2021-08-23 	|| Phillip Kraguljac 		|| v1.5. (created)

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Project Records</title>
<meta http-equiv="refresh" content="60">
</head>
<body onload="<?php echo $Menu_Peference; ?>">

<?php if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;} ?>



<table style="width:100%;">
<col width="20%">
<col width="20%">
<col width="20%">
<col width="20%">
<col width="20%">
<col width="20%">

<tr>

<td style="align:center;">
<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['New_Page_At_Print'] = false;
$Display_Array['Table_Major_Heading'] = "TASK(S) - Status";
$Display_Array['Table_Minor_Heading'] = "Open Points of Interest.";
$Display_Array['Display_Items'] = array();
$Display_Array['Column_Width'] = array();
$Display_Array['Item_Links'] = "";
$Display_Array['New_Link_Reference'] = "";
$Display_Array['Chart_Column'] = "Task Status";
$Display_Array['Chart_Alignment'] = "right";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Chart_Data_0003($Database_Connection, $Display_Array);

?>
</td>

<td style="align:center;">
<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['New_Page_At_Print'] = false;
$Display_Array['Table_Major_Heading'] = "TASK(S) - Task Type";
$Display_Array['Table_Minor_Heading'] = "Open Points of Interest.";
$Display_Array['Display_Items'] = array();
$Display_Array['Column_Width'] = array();
$Display_Array['Item_Links'] = "";
$Display_Array['New_Link_Reference'] = "";
$Display_Array['Chart_Column'] = "Task Type";
$Display_Array['Chart_Alignment'] = "right";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Chart_Data_0003($Database_Connection, $Display_Array);

?>
</td>


<td style="align:center;">
<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['New_Page_At_Print'] = false;
$Display_Array['Table_Major_Heading'] = "TASK(S) - Commerical Priority";
$Display_Array['Table_Minor_Heading'] = "Open Points of Interest.";
$Display_Array['Display_Items'] = array();
$Display_Array['Column_Width'] = array();
$Display_Array['Item_Links'] = "";
$Display_Array['New_Link_Reference'] = "";
$Display_Array['Chart_Column'] = "Commerical Priority";
$Display_Array['Chart_Alignment'] = "right";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Chart_Data_0003($Database_Connection, $Display_Array);

?>
</td>


<td style="align:center;">
<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['New_Page_At_Print'] = false;
$Display_Array['Table_Major_Heading'] = "TASK(S) - Health & Safety Priority";
$Display_Array['Table_Minor_Heading'] = "Open Points of Interest.";
$Display_Array['Display_Items'] = array();
$Display_Array['Column_Width'] = array();
$Display_Array['Item_Links'] = "";
$Display_Array['New_Link_Reference'] = "";
$Display_Array['Chart_Column'] = "Health & Safety Priority";
$Display_Array['Chart_Alignment'] = "right";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Chart_Data_0003($Database_Connection, $Display_Array);

?>
</td>
	
<td style="align:center;"></td>

</tr>
</table>



<table style="width:100%;">
<col width="20%">
<col width="20%">
<col width="20%">
<col width="20%">
<col width="20%">
<col width="20%">

<tr>

<td style="align:center;">
<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['New_Page_At_Print'] = false;
$Display_Array['Table_Major_Heading'] = "TASK(S) - Identified Date";
$Display_Array['Table_Minor_Heading'] = "Open Points of Interest.";
$Display_Array['Display_Items'] = array();
$Display_Array['Column_Width'] = array();
$Display_Array['Item_Links'] = "";
$Display_Array['New_Link_Reference'] = "";
$Display_Array['Chart_Column'] = "Identified Date";
$Display_Array['Chart_Alignment'] = "right";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Identified Date` ASC ";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Chart_Data_0002($Database_Connection, $Display_Array);

?>
</td>
	
<td style="align:center;">
<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['New_Page_At_Print'] = false;
$Display_Array['Table_Major_Heading'] = "TASK(S) - Completed Date";
$Display_Array['Table_Minor_Heading'] = "Open Points of Interest.";
$Display_Array['Display_Items'] = array();
$Display_Array['Column_Width'] = array();
$Display_Array['Item_Links'] = "";
$Display_Array['New_Link_Reference'] = "";
$Display_Array['Chart_Column'] = "Actual Completed Date";
$Display_Array['Chart_Alignment'] = "right";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE `Actual Completed Date` <> '0000-00-00' AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Actual Completed Date` ASC ";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Chart_Data_0002($Database_Connection, $Display_Array);

?>
</td>

<td style="align:center;"></td>

<td style="align:center;"></td>

<td style="align:center;"></td>

</tr>
</table>



<?php

$Display_Array = null;
$Display_Array['ID'] = null;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "TASK(S)";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array("ID",
"Description",
"Task Type",
"Task Status",
"Commerical Priority",
"Health & Safety Priority",
"Identified Date",
"Planned Work Date",
"Actual Completed Date"
);
$Display_Array['Column_Width'] = array("50px", "*", "150px", "150px", "150px", "150px", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Tasks.php";
$Display_Array['New_Link_Reference'] = "Description";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Identified Date` DESC ";
//$Display_Array['MySQL_Order'] = "ORDER BY FIELD(`Health & Safety Priority`, 'Immediate Attention', 'Standard Response', 'Non-Specified', '') ";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
