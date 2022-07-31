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
// PAGE CREATED DATE: 2022-07-14

// DATE   		|| NAME 					|| MODIFICATION
// 2022-07-14 	|| Phillip Kraguljac 		|| v1.8 (created)

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Quick Reference Project Label</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">


<?php $Item_ID = Basic_Filter_Input($_GET['ID']); ?>



<?php

$Display_Array['ID'] = $Item_ID;
$Display_Array['Heading'] = "PROEJCT ID";
$Display_Array['Page'] = "REC-DTL_Projects";
$Display_Array['Icon'] = "Icon_Add_Item";

$Display_Array['Display_Items'] = array(
"ID",
"Description",
"Internal Priority",
"Status",
"Stage"
);
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_projects` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = ".$Display_Array['ID']." ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";


Display_Sticker_0002($Database_Connection, $Display_Array);

?>






<?php //Display_QRCode_0001("Test"); ?>




</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 