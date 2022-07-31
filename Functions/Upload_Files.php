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
// 2020-12-17 	|| Phillip Kraguljac 		|| v1.4
// 2020-12-13	|| Phillip Kraguljac 		|| v1.5
// 2021-04-15	|| Phillip Kraguljac 		|| v1.5
// 2021-05-07	|| Phillip Kraguljac 		|| v1.5
// 2021-05-19	|| Phillip Kraguljac 		|| v1.5
// 2021-09-06	|| Phillip Kraguljac 		|| v1.5
// 2022-06-29 	|| Phillip Kraguljac 		|| v1.8

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php // ////////////////////////////// UPLOAD FILE FUNCTION

function Upload_Dialog($Database_Connection, $Display_Array){
	
$File_Folder = "Library_Documents";
$Report_CSS_Insert = "";if($Display_Array['IS_Report']==true){$Report_CSS_Insert = "_Report";}

//$Folder_Prefix_Inset = "../"; <<< TEST FUNCTION
if(!isset($Display_Array['File_Folder'])){$Display_Array['File_Folder']="";}
if(!isset($Display_Array['File_Type'])){$Display_Array['File_Type']="";}
if(!isset($Display_Array['IS_Shortcut'])){$Display_Array['IS_Shortcut']=false;}
if(!isset($Display_Array['Image_Size'])){$Display_Array['Image_Size']="500px";}

echo "<br>";
echo "<br>";

echo "<form action=\"\Functions\Database_Modify.php\" method=\"post\" enctype=\"multipart/form-data\">";
echo "<input type=\"hidden\" name=\"ID\" value=\"".$Display_Array['ID']."\">";
echo "<input type=\"hidden\" name=\"Previous_Page\" value=\"".$_SERVER['REQUEST_URI']."\">";
echo "<input type=\"hidden\" name=\"File_Folder\" value=\"".$Display_Array['File_Folder']."\">";

echo "<div class=\"Details_Div{$Report_CSS_Insert}\">";

echo "<table class=\"Details_Table{$Report_CSS_Insert}\" style=\"width:100%\">";
for ($x = 0; $x < count($Display_Array['Column_Width']); $x++) {
echo "<col width=\"".$Display_Array['Column_Width'][$x]."\">";
}


switch ($Display_Array['File_Type']) {
  case "Document": $File_Name = $Display_Array['ID'].".pdf"; break;
  case "Photo": $File_Name = $Display_Array['ID'].".jpg"; break;  
  default:
    $File_Name = $Display_Array['ID'].".pdf";
}

$Folder_Directory = $Display_Array['File_Folder'];

if(file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$Folder_Directory.'/'.$File_Name)){


switch ($Display_Array['File_Type']) {
  case "Document":  
  echo "<tr>";
echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\"><a href=\"".$Folder_Directory."\\".$File_Name."\">OPEN</a></td>";
echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\"><iframe src=\"".$Folder_Directory."\\".$File_Name."\" title=\"test\" width=\"100%\"></iframe></td>";
echo "</tr>";  
   break;
   case "Photo":
  echo "<tr>";
echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\"></td>";
echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\"><img src=\"".$Folder_Directory."\\".$File_Name."\" width=\"".$Display_Array['Image_Size']."\"></td>";
echo "</tr>";   
  default:
}

}else{
echo "<tr>";

switch ($Display_Array['File_Type']) {
  case "Document": echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\">Upload Document (PDF)</td>"; break;
  case "Photo": echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\">Upload Photo (JPG)</td>"; break;  
  default:
    echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\">Upload PDF Copy</td>";
}

echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\">";
if(!$Display_Array['IS_Shortcut']){
echo "<input type=\"file\" name=\"File_To_Upload\" id=\"File_To_Upload\">";
}
echo "</td>";
echo "</tr>";
}

echo "</table>";

// SUBMISSION TOOLS
if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$Folder_Directory.'/'.$File_Name)){
if(!$Display_Array['IS_Report']&&!$Display_Array['IS_Shortcut']){
echo "<table style=\"width:100%\">";
echo "<col width=\"*\">";
echo "<col width=\"80\">";
echo "<td></td>";
echo "<td><input class=\"Submission_Button_Format{$Report_CSS_Insert}\" type=\"submit\" name=\"Submission_Button\" value=\"Upload\"></td>";
echo "</table>";

}
}


echo "</div>";
echo "</form>";
echo "<br>";

}

?>


<?php // ////////////////////////////// UPLOAD SCHEMATIC FUNCTION

function Upload_Dialog_0002($Database_Connection, $Display_Array){
	
$File_Folder = "_Documents";
$Report_CSS_Insert = "";if($Display_Array['IS_Report']==true){$Report_CSS_Insert = "_Report";}

//$Folder_Prefix_Inset = "../"; <<< TEST FUNCTION
if(!isset($Display_Array['File_Folder'])){$Display_Array['File_Folder']="";}
if(!isset($Display_Array['File_Type'])){$Display_Array['File_Type']="";}
if(!isset($Display_Array['IS_Shortcut'])){$Display_Array['IS_Shortcut']=false;}
if(!isset($Display_Array['Image_Size'])){$Display_Array['Image_Size']="500px";}

echo "<br>";
echo "<br>";

echo "<form action=\"\Functions\Database_Modify.php\" method=\"post\" enctype=\"multipart/form-data\">";
echo "<input type=\"hidden\" name=\"ID\" value=\"".$Display_Array['ID']."\">";
echo "<input type=\"hidden\" name=\"Previous_Page\" value=\"".$_SERVER['REQUEST_URI']."\">";
echo "<input type=\"hidden\" name=\"File_Folder\" value=\"".$Display_Array['File_Folder']."\">";

echo "<div class=\"Details_Div{$Report_CSS_Insert}\">";

echo "<table class=\"Details_Table{$Report_CSS_Insert}\" style=\"width:100%\">";
for ($x = 0; $x < count($Display_Array['Column_Width']); $x++) {
echo "<col width=\"".$Display_Array['Column_Width'][$x]."\">";
}


switch ($Display_Array['File_Type']) {
  case "Document": $File_Name = $Display_Array['ID'].".pdf"; break;
  case "Schematic": $File_Name = $Display_Array['ID'].".dwg"; break;
  case "Photo": $File_Name = $Display_Array['ID'].".jpg"; break;  
  default:
    $File_Name = $Display_Array['ID'].".pdf";
}

$Folder_Directory = $Display_Array['File_Folder'];

if(file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$Folder_Directory.'/'.$File_Name)){


switch ($Display_Array['File_Type']) {
  case "Document":  
  echo "<tr>";
echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\"><a href=\"".$Folder_Directory."\\".$File_Name."\">OPEN</a></td>";
echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\"><iframe src=\"".$Folder_Directory."\\".$File_Name."\" title=\"test\" width=\"100%\"></iframe></td>";
echo "</tr>";  
   break;
   
   case "Schematic":
  echo "<tr>";
echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\"></td>";
echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\"><img src=\"".$Folder_Directory."\\".$File_Name."\" width=\"".$Display_Array['Image_Size']."\"></td>";
echo "</tr>";   
  break;
   
   case "Photo":
  echo "<tr>";
echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\"></td>";
echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\"><img src=\"".$Folder_Directory."\\".$File_Name."\" width=\"".$Display_Array['Image_Size']."\"></td>";
echo "</tr>";   
  default:
}

}else{
echo "<tr>";

switch ($Display_Array['File_Type']) {
  case "Document": echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\">Upload Document (PDF)</td>"; break;
  case "Schematic": echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\">Upload Schematic (DWG)</td>"; break;
  case "Photo": echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\">Upload Photo (JPG)</td>"; break;  
  default:
    echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\">Upload PDF Copy</td>";
}

echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\">";
if(!$Display_Array['IS_Shortcut']){
echo "<input type=\"file\" name=\"File_To_Upload\" id=\"File_To_Upload\">";
}
echo "</td>";
echo "</tr>";
}

echo "</table>";

// SUBMISSION TOOLS
if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$Folder_Directory.'/'.$File_Name)){
if(!$Display_Array['IS_Report']&&!$Display_Array['IS_Shortcut']){
echo "<table style=\"width:100%\">";
echo "<col width=\"*\">";
echo "<col width=\"80\">";
echo "<td></td>";
echo "<td><input class=\"Submission_Button_Format{$Report_CSS_Insert}\" type=\"submit\" name=\"Submission_Button\" value=\"Upload\"></td>";
echo "</table>";

}
}


echo "</div>";
echo "</form>";
echo "<br>";

}

?>


<?php // ////////////////////////////// UPLOAD PHOTO FUNCTION

// NOTES:
// - (2022-06-29) Maybe redundant and need to check.

function Upload_Photo_Dialog($Database_Connection, $Display_Array){
	
$File_Folder = "";
$Report_CSS_Insert = "";if($Display_Array['IS_Report']==true){$Report_CSS_Insert = "_Report";}
if(!isset($Display_Array['File_Folder']))($Display_Array['File_Folder']="");
if(!isset($Display_Array['IS_Photo']))($Display_Array['IS_Photo']="");

echo "<br>";
echo "<br>";

echo "<form action=\"\Functions\Database_Modify.php\" method=\"post\" enctype=\"multipart/form-data\">";
echo "<input type=\"hidden\" name=\"ID\" value=\"".$Display_Array['ID']."\">";
echo "<input type=\"hidden\" name=\"Previous_Page\" value=\"".$_SERVER['REQUEST_URI']."\">";
echo "<input type=\"hidden\" name=\"File_Folder\" value=\"".$Display_Array['File_Folder']."\">";

echo "<div class=\"Details_Div{$Report_CSS_Insert}\">";

echo "<table class=\"Details_Table{$Report_CSS_Insert}\" style=\"width:100%\">";
for ($x = 0; $x < count($Display_Array['Column_Width']); $x++) {
echo "<col width=\"".$Display_Array['Column_Width'][$x]."\">";
}

$File_Name = $Display_Array['ID'].".pdf";
$Folder_Directory = $Display_Array['File_Folder'];

if(file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$Folder_Directory.'/'.$File_Name)){
	echo "<tr>";
	echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\"></td>";
	echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\"><iframe src=\"".$Folder_Directory."/".$File_Name."\" title=\"test\" width=\"100%\"></iframe></td>";
	echo "</tr>";
}else{	
	echo "<tr>";
	echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\">Upload Photo</td>";
	echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\"><input type=\"file\" name=\"File_To_Upload\" id=\"File_To_Upload\"></td>";
	echo "</tr>";
}

echo "</table>";

// SUBMISSION TOOLS
if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$Folder_Directory.'/'.$File_Name)){
if(!$Display_Array['IS_Report']){
echo "<table style=\"width:100%\">";
echo "<col width=\"*\">";
echo "<col width=\"80\">";
echo "<td></td>";
echo "<td><input class=\"Submission_Button_Format{$Report_CSS_Insert}\" type=\"submit\" name=\"Submission_Button\" value=\"Upload\"></td>";
echo "</table>";
echo "</form>";
}
}

echo "</div>";
echo "<br>";

}

?>
