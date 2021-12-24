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
// 2021-09-15 	|| Phillip Kraguljac 		|| v1.6. (created)

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Part (Controlled) Record</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">

<?php $Item_ID = Basic_Filter_Input($_GET['ID']); ?>


<?php

$Report_Array['Display_Week']="";
$Report_Array['Display_Week_Start_Date']="";
$Report_Array['Display_Week_Finish_Date']="";
$Report_Array['Print_Date']="";
Report_Details_0001($Database_Connection, $Report_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = null;
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "CONTROLLED PART(S)";
$Display_Array['Table_Minor_Heading'] = "";
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
$Display_Array['Column_Width'] = array("50px", "150px", "150px", "300px", "150px", "150px",  "150px", "150px", "150px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Parts-Controlled.php";
$Display_Array['New_Link_Reference'] = "Manufacturer";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_parts-controlled` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Manufacturer Part #` ASC";
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