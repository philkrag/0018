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
// 2020-10-06 	|| Phillip Kraguljac 		|| v1.1.
// 2020-10-23 	|| Phillip Kraguljac 		|| v1.3.
// 2021-03-31 	|| Phillip Kraguljac 		|| v1.5. 

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Change Control Record</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">

<?php if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;} ?>


<?php // QR QUICK LINK

$Display_Array['ID'] = $Item_ID;

Display_Quick_Reference($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "CHANGE CONTROL";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array("ID",
"(L):Project ID:REC-DTL_Projects",
"",
"Description",
"Timeline Impact",
"Budget Impact",
"Workplan Impact",
"Client Feedback",
"Management Feedback",
"Approval",
"Document",
"",
"Modified Date",
"Modified By"
);

$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_change_control` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = ".$Display_Array['ID']." ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";

Dispaly_Details_0001($Database_Connection, $Display_Array);

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 