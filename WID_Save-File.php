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
// 2022-02-24 	|| Phillip Kraguljac 		|| v1.7 (Created)

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>

<?php 

//include $_SERVER['DOCUMENT_ROOT'].'/Functions/Filter_Tools.php';

?>


<?php

if(isset($_POST['Directory'])){$Directory = $_POST['Directory'];}else{$Directory = null;}
if(isset($_POST['File_Index'])){$File_Index = $_POST['File_Index'];}else{$File_Index = null;}
if(isset($_POST['File_Type'])){$File_Type = $_POST['File_Type'];}else{$File_Type = null;}
if(isset($_POST['File_Name'])){$File_Name = $_POST['File_Name'];}else{$File_Name = null;}

?>


<?php

$Directory_Of_File_To_Transfer = $Directory."/".$File_Index.".".$File_Type;
echo $Directory_Of_File_To_Transfer."<br>";
echo basename($Directory_Of_File_To_Transfer)."<br>";
echo filesize($Directory_Of_File_To_Transfer)."<br>";

if (file_exists($Directory_Of_File_To_Transfer)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="'.basename("[".$File_Index."] ".$File_Name.".".$File_Type).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($Directory_Of_File_To_Transfer));
    
	while (ob_get_level()) {
    ob_end_clean();
}
	
	readfile($Directory_Of_File_To_Transfer);
    exit;
}

?>

