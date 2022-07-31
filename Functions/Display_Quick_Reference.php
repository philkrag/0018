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
// PAGE CREATED DATE: 2022-07-18

// DATE   		|| NAME 					|| MODIFICATION
// 2022-07-18 	|| Phillip Kraguljac 		|| v1.8 (created)
// 2022-07-19 	|| Phillip Kraguljac 		|| v1.8
// 2022-07-25 	|| Phillip Kraguljac 		|| v1.8

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php // ////////////////////////////////////////// STANDARD DASHBOARD

function Display_Quick_Reference($Database_Connection, $Display_Array) {

	if(!isset($Display_Array['IS_Report'])){$Display_Array['IS_Report']="";}

	$Forward_Page = "MOB-".ltrim($_SERVER['PHP_SELF'], '/');

	$Page_Exists = FALSE;
	if(Check_If_Page_Exists($Forward_Page)){$Page_Exists = TRUE;}


	if($Page_Exists){

		$Report_CSS_Insert = "";if($Display_Array['IS_Report']==true){$Report_CSS_Insert = "_Report";}

		echo "<table class=\"Details_Table{$Report_CSS_Insert}\" style=\"width:100%\">";
		echo "<col width=\"*\">";
		echo "<col width=\"100px\">";

		echo "<tr>";
		echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\"></td>";
		echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\">";
		Add_QR($Forward_Page, $Display_Array);
		Add_Button($Forward_Page, $Display_Array);
		echo "</td>";
		echo "</tr>";  

		echo "</table>";

	}
}

?>


<?php // ADD A QUICK ACCESS QR CODE

function Add_QR($Forward_Page, $Display_Array){

$QR_Code_Image_Directory = Create_QRCode_0001(pathinfo($Forward_Page, PATHINFO_FILENAME), $Display_Array['ID']);
echo "<img style=\"padding-top: 0px;\" width=\"100\" src=\"".$QR_Code_Image_Directory."\" alt=\"\">";
	
}

?>


<?php // ADD A QUICK ACCESS BUTTON

function Add_Button($Forward_Page, $Display_Array){

if(isset($Display_Array['ID'])){$ID_Insert = "?ID=".$Display_Array['ID'];} else {$ID_Insert = "";}
echo "<form action=\"".$Forward_Page."\" method=\"get\" id=\"form1\">";
echo "<input type=\"hidden\" id=\"ID\" name=\"ID\" value=\"".$Display_Array['ID']."\">";
echo "</form>";
echo "<button type=\"submit\" form=\"form1\" value=\"Submit\" style=\"width:100px;\">Mobile</button>";	
	
}

?>


<?php // CHECK IF PAGE EXISTS

function Check_If_Page_Exists(string $Page_To_Check) {
$Page_Exists = FALSE;
if (file_exists($Page_To_Check)) {
    $Page_Exists = TRUE;
	} else {
		$Page_Exists = FALSE;
	}
return $Page_Exists;
}

?>












