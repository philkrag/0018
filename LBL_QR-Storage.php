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
// 2021-09-17 	|| Phillip Kraguljac 		|| v1.6 (created)
// 2022-01-12 	|| Phillip Kraguljac 		|| v1.7
// 2022-05-19 	|| Phillip Kraguljac 		|| v1.7
// 2022-06-03 	|| Phillip Kraguljac 		|| v1.8

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

$Display_Array['ID'] = $Item_ID;
$Display_Array['Heading'] = "STORAGE ID";
$Display_Array['Page'] = "QRY-Search_Options";
$Display_Array['Icon'] = "Icon_Add_Item";

Display_Sticker_0001($Display_Array);

?>


<?php

$Display_Array['ID'] = $Item_ID;
$Display_Array['Heading'] = "STORAGE ID";
$Display_Array['Page'] = "QRY-Search_Options";
$Display_Array['Icon'] = "Icon_Remove_Item";

Display_Sticker_0001($Display_Array);

?>


<?php

$Display_Array['ID'] = $Item_ID;
$Display_Array['Heading'] = "STORAGE ID";
$Display_Array['Page'] = "REP_Storage-Audit";
$Display_Array['Icon'] = "Icon_Storage_Audit";

Display_Sticker_0001($Display_Array);

?>




<?php //Display_QRCode_0001("Test"); ?>




</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 