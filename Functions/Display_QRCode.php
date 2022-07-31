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
// 2022-06-01 	|| Phillip Kraguljac 		|| v1.8 (Created

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>

<?php // ////////////////////////////// RADAR TABLE

include($_SERVER['DOCUMENT_ROOT'].'/Support/QRCode/qrlib.php');


function Display_QRCode_0001($Desired_Page){

$Time_Date_String = date("YmdHmsu", strtotime("now"));
$Image_Storage_Directory = "QRCode_Images\\".$Time_Date_String.".png";
QRcode::png($Desired_Page, $Image_Storage_Directory);
echo '<img src="'.$Image_Storage_Directory.'" />';
}


// function Create_QRCode_0001($Desired_Page){
// $File_Directory = "";
// $Time_Date_String = date("YmdHmsu", strtotime("now"));
// $Image_Storage_Directory = "QRCode_Images/".$Time_Date_String.".png";
// QRcode::png($Desired_Page, $Image_Storage_Directory);
// $File_Directory = $Image_Storage_Directory;
// return $File_Directory;
// }


function Create_QRCode_0001($Page, $ID){
$File_Directory = "";
$Time_Date_String = date("YmdHmsu", strtotime("now"));
$Image_Storage_Directory = "QRCode_Images/".$Page." ".$ID.".png";

$Page_Exists = False;

if (file_exists($Image_Storage_Directory)) {
    $Page_Exists = True;
} else {
    $Page_Exists = False;
}

if($Page_Exists==False){
QRcode::png($_SERVER['SERVER_ADDR']."/".$Page.".php?ID=".$ID, $Image_Storage_Directory);
}

$File_Directory = $Image_Storage_Directory;
return $File_Directory;
}






?>
