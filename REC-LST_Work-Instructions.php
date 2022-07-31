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
// PAGE CREATED DATE: 2020-10-06

// DATE   		|| NAME 					|| MODIFICATION
// 2021-12-24 	|| Phillip Kraguljac 		|| v1.7
// 2022-01-25 	|| Phillip Kraguljac 		|| v1.7
// 2022-03-10 	|| Phillip Kraguljac 		|| v1.7
// 2022-05-14 	|| Phillip Kraguljac 		|| v1.8

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Work Instructions</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">

<?php if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;} ?>


<?php // UPPER PAGE OPTIONS

$Data['Options_Description'] = "Functions";
$Data['Total_Items'] = 1;
$Data['Item_Prefix'] = array("ID");
$Data['Item_Suffix'] = array($Item_ID);
$Data['Page'] = array(
"WID_Work-Instruction-Duplicate"
);
$Data['Label'] = array(
"Copy WMS"
);

Upper_Options_0003($Data);

?>


<?php // SEARCH WIDGET

$Display_Array['Search_Items'] = array("ID", "Title", "Type", "Tags", "Repair Level", "Status");
$Search_Description = Search_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = null;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "WORK INSTRUCTION(S)";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array(
"ID",
//"Title",
"(M):Title:Tags",
"Type",
"(E):Product ID:reg_equipment_types:Manufacturer Range",
"Repair Level",
"Status"
);
$Display_Array['Column_Width'] = array("50px", "*", "200px", "150px", "150px", "200px");
$Display_Array['Item_Links'] = "REC-DTL_Work-Instructions.php";
$Display_Array['New_Link_Reference'] = "Title";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_work-instructions` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') {$Search_Description} ";
$Display_Array['MySQL_Order'] = "ORDER BY `Product ID` ASC , `Type` ASC, `Title` ASC";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 