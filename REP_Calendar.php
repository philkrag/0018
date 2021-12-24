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
// 2021-04-23 	|| Phillip Kraguljac 		|| v1.5.

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Dev Page</title>
</head>
<body onload="">

<?php

if(isset($_GET['Month'])){$Review_Month = Basic_Filter_Input($_GET['Month']);}else{$Review_Month = "01";}
if(isset($_GET['Year'])){$Review_Year = Basic_Filter_Input($_GET['Year']);}else{$Review_Year = "2021";}

?>


<?php

// Report_Details_0001($Database_Connection, $Report_Array);

?>


<?php

$Indexer = 1;
$Start_Flag = false;
$Report_CSS_Insert = "_Report";

echo "<br>";

$Display_Date = date("F Y", mktime(0, 0, 0, $Review_Month, 1, $Review_Year));


$Month_Before = date("m", strtotime($Display_Date. " -1 months"));
$Year_Before = date("Y", strtotime($Display_Date. " -1 months"));
$Month_After = date("m", strtotime($Display_Date. " +1 months"));
$Year_After = date("Y", strtotime($Display_Date. " +1 months"));


echo "<table class=\"List_Table\" style=\"width:100%\">";
echo "<col width=\"*\">";
echo "<col width=\"*\">";

echo "<col width=\"110px\">";
echo "<col width=\"200px\">";
echo "<col width=\"110px\">";
echo "<col width=\"110px\">";

echo "<tr>";
echo "<td style=\"text-align:Left;\"><h1>Scheduling (Tasks)</h1></td>";

echo "<td></td>";

echo "<td style=\"text-align:center;\">";
echo "<form action=\"REP_Calendar.php\">";
echo "<input type=\"hidden\" id=\"\" name=\"Month\" value=\"".$Month_Before."\">";
echo "<input type=\"hidden\" id=\"\" name=\"Year\" value=\"".$Year_Before."\">";
echo "<button style=\"width:100px;\"  type=\"submit\" value=\"Submit\">Previous<br>Month</button>";
echo "</form>";
echo "</td>";

echo "<td style=\"text-align:center;\"><h1>".$Display_Date."</h1></td>";

echo "<td style=\"text-align:center;\">";
echo "<form action=\"REP_Calendar.php\">";
echo "<input type=\"hidden\" id=\"\" name=\"Month\" value=\"".$Month_After."\">";
echo "<input type=\"hidden\" id=\"\" name=\"Year\" value=\"".$Year_After."\">";
echo "<button style=\"width:100px;\" type=\"submit\" value=\"Submit\">Next<br>Month</button>";
echo "</form>";
echo "</td>";

echo "<td style=\"text-align:center;\">";
echo "<form action=\"REC_Calendar.php\">";
echo "<input type=\"hidden\" id=\"\" name=\"Month\" value=\"".$Review_Month."\">";
echo "<input type=\"hidden\" id=\"\" name=\"Year\" value=\"".$Review_Year."\">";
echo "<button style=\"width:100px;\"  type=\"submit\" value=\"Submit\">Report<br>View</button>";
echo "</form>";
echo "</td>";

echo "</tr>";

echo "</table>";

echo "<br>";


echo "<table class=\"Details_Table{$Report_CSS_Insert}\" style=\"width:100%\">";


echo "<col width=\"14%\">";
echo "<col width=\"14%\">";
echo "<col width=\"14%\">";
echo "<col width=\"14%\">";
echo "<col width=\"14%\">";
echo "<col width=\"14%\">";
echo "<col width=\"14%\">";


$Week_Indexer = 1;
$Day_Indexer = 1;
$Enable_Flag = false;
$Day_Counter = 1;

echo "<tr>";
echo "<th class=\"List_Label_Cell{$Report_CSS_Insert}\">Monday</th>";
echo "<th class=\"List_Label_Cell{$Report_CSS_Insert}\">Tuesday</th>";
echo "<th class=\"List_Label_Cell{$Report_CSS_Insert}\">Wednesday</th>";
echo "<th class=\"List_Label_Cell{$Report_CSS_Insert}\">Thursday</th>";
echo "<th class=\"List_Label_Cell{$Report_CSS_Insert}\">Friday</th>";
echo "<th class=\"List_Label_Cell{$Report_CSS_Insert}\">Saturday</th>";
echo "<th class=\"List_Label_Cell{$Report_CSS_Insert}\">Sunday</th>";
echo "</tr>";


for ($Week_Indexer = 1; $Week_Indexer <= 5; $Week_Indexer++) {

echo "<tr>";

for ($Day_Indexer = 1; $Day_Indexer <= 7; $Day_Indexer++) {


//$Display_Date = date("j F Y", mktime(0, 0, 0, $Review_Month, $Day_Counter, $Review_Year));
$Display_Date = date("j", mktime(0, 0, 0, $Review_Month, $Day_Counter, $Review_Year));


// START THE CALENDAR ENTRIES
if(date("N", mktime(0, 0, 0, $Review_Month, $Day_Counter, $Review_Year)) == $Day_Indexer){
	$Enable_Flag = true;
}

//FINISH THE ENTRIES AT THE COMMENCEMENT OF THE NEXT MONTH
if(date("n", mktime(0, 0, 0, $Review_Month, $Day_Counter, $Review_Year)) > $Review_Month){
	$Enable_Flag = false;
}


if($Enable_Flag == false){$Background_color = "background-color:white;";}else{$Background_color = "";}


echo "<td style=\"height:150px;{$Background_color}\" class=\"List_Content_Cell{$Report_CSS_Insert}\">";
echo "<div>";


	
		
if($Enable_Flag){
echo "<b>(".$Display_Date.")</b><br><br>";
?>


<?php

$Display_Array['Display_Items'] = array("ID", "Description", "Task Status");
$Display_Array['Item_Label'] = "Task Due";
$Display_Array['Item_Links'] = "REC-DTL_Tasks";
$Display_Array['Text_Highlight'] = "Red";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE `Required Completion Date` = '".date("Y-m-d ", mktime(0, 0, 0, $Review_Month, $Day_Counter, $Review_Year))."' ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Display_Calendar_Entries_0001($Database_Connection, $Display_Array);

?>


<?php //EQUIPMENT (DUE)

$Display_Array['Display_Items'] = array("ID", "Manufacturer", "Manufacturer Part No", "Serial No");
$Display_Array['Item_Label'] = "Equipment Due";
$Display_Array['Item_Links'] = "REC-DTL_Equipment-Change";
$Display_Array['Text_Highlight'] = "Red";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_equipment-change` ";
$Display_Array['MySQL_Filter'] = "WHERE `Required Decommission Date` = '".date("Y-m-d ", mktime(0, 0, 0, $Review_Month, $Day_Counter, $Review_Year))."' ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Display_Calendar_Entries_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array['Display_Items'] = array("ID", "Description", "Task Status");
$Display_Array['Item_Label'] = "Task Identified";
$Display_Array['Item_Links'] = "REC-DTL_Tasks";
$Display_Array['Text_Highlight'] = "Orange";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE `Identified Date` = '".date("Y-m-d ", mktime(0, 0, 0, $Review_Month, $Day_Counter, $Review_Year))."' ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Display_Calendar_Entries_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array['Display_Items'] = array("ID", "Description", "Task Status");
$Display_Array['Item_Label'] = "Task Planned";
$Display_Array['Item_Links'] = "REC-DTL_Tasks";
$Display_Array['Text_Highlight'] = "Blue";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE `Planned Work Date` = '".date("Y-m-d ", mktime(0, 0, 0, $Review_Month, $Day_Counter, $Review_Year))."' ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Display_Calendar_Entries_0001($Database_Connection, $Display_Array);

?>


<?php //EQUIPMENT (PLANNED)

$Display_Array['Display_Items'] = array("ID", "Manufacturer", "Manufacturer Part No", "Serial No");
$Display_Array['Item_Label'] = "Equipment Planned";
$Display_Array['Item_Links'] = "REC-DTL_Equipment-Change";
$Display_Array['Text_Highlight'] = "Blue";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_equipment-change` ";
$Display_Array['MySQL_Filter'] = "WHERE `Planned Decommission Date` = '".date("Y-m-d ", mktime(0, 0, 0, $Review_Month, $Day_Counter, $Review_Year))."' ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Display_Calendar_Entries_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array['Display_Items'] = array("ID", "Description", "Task Status");
$Display_Array['Item_Label'] = "Task Completed";
$Display_Array['Item_Links'] = "REC-DTL_Tasks";
$Display_Array['Text_Highlight'] = "#00cc00";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE `Actual Completed Date` = '".date("Y-m-d ", mktime(0, 0, 0, $Review_Month, $Day_Counter, $Review_Year))."' ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Display_Calendar_Entries_0001($Database_Connection, $Display_Array);

?>


<?php //EQUIPMENT (PLANNED)

$Display_Array['Display_Items'] = array("ID", "Manufacturer", "Manufacturer Part No", "Serial No");
$Display_Array['Item_Label'] = "Equipment Completed";
$Display_Array['Item_Links'] = "REC-DTL_Equipment-Change";
$Display_Array['Text_Highlight'] = "#00cc00";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_equipment-change` ";
$Display_Array['MySQL_Filter'] = "WHERE `Actual Commission Date` = '".date("Y-m-d ", mktime(0, 0, 0, $Review_Month, $Day_Counter, $Review_Year))."' ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Display_Calendar_Entries_0001($Database_Connection, $Display_Array);

?>


<?php
$Day_Counter++;
}

echo "</div>";
echo "</td>";
}

echo "</tr>";
}

echo "</table>";


?>


</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 