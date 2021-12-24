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
// 2021-05-20 	|| Phillip Kraguljac 		|| v1.5.
// 2021-08-23 	|| Phillip Kraguljac 		|| v1.5.
// 2021-09-06 	|| Phillip Kraguljac 		|| v1.6.
// 2021-12-01 	|| Phillip Kraguljac 		|| v1.6.

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Equipment Records</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">

<?php if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;} ?>


<?php // SEARCH WIDGET

$Display_Array['Search_Items'] = array("ID", "Principal System", "Equipment", "Part", "Component ID");
$Search_Description = Search_0001($Database_Connection, $Display_Array);

?>


<?php // UPPER PAGE OPTIONS

$Data['Total_Items'] = 2;
$Data['Item_ID'] = array($Item_ID, $Item_ID);
$Data['Page'] = array("REC-LST_Specifications", "REC-LST_Equipment_Types");
$Data['Label'] = array("Specifications", "Equipment Types");
Upper_Options_0002($Data);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = null;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "EQUIPMENT";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array(
"ID",
"(P):Equipment_Photos",
"Equipment",
"Part",
"Serial Number",
"Comments"
);
$Display_Array['Column_Width'] = array("50px", "150px", "150px", "150px", "150px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Equipment.php";
$Display_Array['New_Link_Reference'] = "Primary System";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM reg_equipment ";
$Display_Array['MySQL_Filter'] = "WHERE  (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') {$Search_Description} ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
