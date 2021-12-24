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
// PAGE CREATED DATE: 2021-04-15

// DATE   		|| NAME 					|| MODIFICATION
// 2021-04-15 	|| Phillip Kraguljac 		|| v1.5.
// 2021-04-23 	|| Phillip Kraguljac 		|| v1.5.
// 2021-05-03 	|| Phillip Kraguljac 		|| v1.5.
// 2021-05-14 	|| Phillip Kraguljac 		|| v1.5.

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>

<?php $Heading_Index = "13"; ?>

<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title><?php echo date("Y-m-d"); ?> Weekly Maintenace Report <?php if(isset($_GET['Week'])){ echo " Week ".Basic_Filter_Input($_GET['Week']);} ?></title>
</head>
<body onload="">

<?php

if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;}
if(isset($_GET['Week'])){$Week = Basic_Filter_Input($_GET['Week']);}else{$Week = Date("W", strtotime("now"))+1;}

?>


<?php

$Current_Year =  Date("Y", strtotime("now"));

$Week_1 = $Week;
$Week_2 = str_pad((intval($Week)+1),2,"0", STR_PAD_LEFT);
$Week_3 = str_pad((intval($Week)+2),2,"0", STR_PAD_LEFT);

$Date_1 = Date("Y-m-d", strtotime($Current_Year."W".$Week_1));
$Date_2 = Date("Y-m-d", strtotime($Current_Year."W".$Week_2));
$Date_3 = Date("Y-m-d", strtotime($Current_Year."W".$Week_3));

?>


<?php

$Report_Array['Display_Week'] = $Week_1;
$Report_Array['Display_Week_Start_Date'] = $Date_1;
$Report_Array['Display_Week_Finish_Date'] = $Date_2;
Report_Details_0001($Database_Connection, $Report_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "TASK(S)";
$Display_Array['Table_Minor_Heading'] = "Completed within the week.";
$Display_Array['Display_Items'] = array(
"ID",
"Description",
"Person Responsible",
"Actual Completed Date"
);
$Display_Array['Column_Width'] = array("50px", "*", "150px", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Tasks.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Actual Completed Date` >= '{$Date_1}' AND `Actual Completed Date` <= '{$Date_2}') AND (`Deleted Date` IS NULL OR `Deleted Date` > '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "";
$Display_Array['Table_Minor_Heading'] = "Indentified within the week.";
$Display_Array['Display_Items'] = array(
"ID",
"Description",
"Person Responsible",
"Identified Date"
);
$Display_Array['Column_Width'] = array("50px", "*", "150px", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Tasks.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Identified Date` >= '{$Date_1}' AND `Identified Date` <= '{$Date_2}') AND (`Deleted Date` IS NULL OR `Deleted Date` > '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "";
$Display_Array['Table_Minor_Heading'] = "Planned for following week.";
$Display_Array['Display_Items'] = array(
"ID",
"Description",
"Person Responsible",
"Planned Work Date"
);
$Display_Array['Column_Width'] = array("50px", "*", "150px", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Tasks.php";
$Display_Array['New_Link_Reference'] = "Project ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE (`Planned Work Date` >= '{$Date_2}' AND `Planned Work Date` <= '{$Date_3}') AND (`Deleted Date` IS NULL OR `Deleted Date` > '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Report_Array['Technician Signature'] = true;


Report_Details_0002($Database_Connection, $Report_Array)

?>


<br>
<div style="text-align: right;"><button onclick="window.print()">Print</button></div>

</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
