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
// PAGE CREATED DATE: 2021-04-24

// DATE   		|| NAME 					|| MODIFICATION
// 2021-04-24 	|| Phillip Kraguljac 		|| v1.5. (created)
// 2021-05-03 	|| Phillip Kraguljac 		|| v1.5.


// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php // GENERAL DETAILS AT BEGINNING OF REPORT

function Report_Details_0001($Database_Connection, $Report_Array) {

$Report_Array = Basic_Array_Filter_Input($Report_Array);

//$Report_Array['Default'] = false; // USE THIS IS NOTHING BEING ENTERED.
if(!isset($Report_Array['Display_Week'])){$Report_Array['Display_Week']="";}
if(!isset($Report_Array['Display_Week_Start_Date'])){$Report_Array['Display_Week_Start_Date']="";}
if(!isset($Report_Array['Display_Week_Finish_Date'])){$Report_Array['Display_Week_Finish_Date']="";}
if(!isset($Report_Array['Print_Date'])){$Report_Array['Print_Date']="";}

// ------------- BELOW IS THE STRING INSET

echo "<br>";

if($Report_Array['Display_Week']!=""){echo "Report Week: <b>".$Report_Array['Display_Week']."</b><br>";}
if($Report_Array['Display_Week_Start_Date']!=""){echo "Report Start Date: <b>".$Report_Array['Display_Week_Start_Date']."</b><br>";}
if($Report_Array['Display_Week_Start_Date']!=""){echo "Report Finish Date: <b>".$Report_Array['Display_Week_Finish_Date']."</b><br>";}

echo "<br>";
echo "Report Printed Date: <b>".Date("Y-m-d", strtotime("now"))."</b><br>";
echo "Report Print By: <b>".$_SESSION["User_Name"]."</b><br>";

}

?>


<?php // SIGNATURE SECTIONS

function Report_Details_0002($Database_Connection, $Report_Array) {

$Report_Array = Basic_Array_Filter_Input($Report_Array);
if(!isset($Report_Array['Technician Signature'])){$Report_Array['Technician Signature']=false;}



if(
$Report_Array['Technician Signature'] != false
){

echo "<br>";
$Report_CSS_Insert = "_Report";
echo "<h2 class=\"Heading_2{$Report_CSS_Insert}\" id=\"#".$Display_Array['Table_Major_Heading']."\" style=\"{$New_Page_Inset}\">AUTHORISATION</h2>";
echo "<table class=\"Details_Table{$Report_CSS_Insert}\" style=\"width:100%\">";
echo "<col width=\"40%\">";
echo "<col width=\"20%\">";
echo "<col width=\"20%\">";
echo "<col width=\"20%\">";

echo "<tr>";
echo "<td class=\"Details_Value_Cell{$Report_CSS_Insert}\" colspan=4>";
echo "The material in this report is provided for internal management purposes for when it has been printed. ";
echo "While every care has been taken in the preperation of this material, those signing the report cannot accept responsibility for any errors including those caused by negligence. ";
echo "No warranties are made about the accuracy or completeness of the information therefore should not be relied on. ";
echo "You are advised to make your own independent inquiries regarding the accuracy of any information provided on this report. ";
echo "This report may contain third party content which is subject to third party terms and conditions. ";
echo "Nothing on this report should construed as granting any licence or right for you to use that content. ";
echo "You should consult the third party's terms and conditions of use in relation to any third party content. ";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<th class=\"Details_Column_Heading{$Report_CSS_Insert}\">Signature</th>";
echo "<th class=\"Details_Column_Heading{$Report_CSS_Insert}\">Name</th>";
echo "<th class=\"Details_Column_Heading{$Report_CSS_Insert}\">Position</th>";
echo "<th class=\"Details_Column_Heading{$Report_CSS_Insert}\">Date</th>";
echo "</tr>";

if($Report_Array['Technician Signature']==true){
echo "<tr>";
echo "<td class=\"Details_Value_Cell{$Report_CSS_Insert}\"><div style=\"min-height:50px;\"></div></td>";
echo "<td class=\"Details_Value_Cell{$Report_CSS_Insert}\"></td>";
echo "<td class=\"Details_Value_Cell{$Report_CSS_Insert}\">BMS Technician</td>";
echo "<td class=\"Details_Value_Cell{$Report_CSS_Insert}\"></td>";
echo "</tr>";	
}

echo "</table>";

}

}

?>

