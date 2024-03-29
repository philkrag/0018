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
// 2021-09-15 	|| Phillip Kraguljac 		|| v1.6
// 2021-10-11 	|| Phillip Kraguljac 		|| v1.6
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


<?php // QR QUICK LINK

$Display_Array['ID'] = $Item_ID;

Display_Quick_Reference($Database_Connection, $Display_Array);

?>


<?php // UPLOAD IMAGE

$Display_Array['ID'] = $Item_ID;
$Display_Array['File_Folder'] = "Part_Controlled_Photos";
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['IS_Report'] = false;
$Display_Array['File_Type'] = "Photo";

Upload_Dialog($Database_Connection, $Display_Array);

?>


<?php // UPPER PAGE OPTIONS

$Data['Options_Description'] = "Reports";
$Data['Total_Items'] = 1;
$Data['Item_Prefix'] = array("ID");
$Data['Item_Suffix'] = array($Item_ID);
$Data['Page'] = array(
"REP_Parts-Controlled"
);
$Data['Label'] = array(
"Report"
);
Upper_Options_0003($Data);

?>




<?php
// TEST FUNCTION //////////////

// NEED TO FIND A WAY TO EXACT DATA FROM CURRENT VALUES

$Display_Array['MySQL_Table'] = "rec_parts-order";
$Display_Array['ID'] = "";
$Display_Array['New_Link_Reference'] = "";
$Display_Array['Additional_Data'] = ""; // THIS IS WHERE THE VALUE NEED TO BE ENTER
$Display_Array['Table_Major_Heading'] = "";


echo "<form action=\"Functions\Database_Modify.php\"  method=\"post\">";
echo "<input type=\"hidden\" name=\"Table\" value=\"".str_replace("FROM ", "", $Display_Array['MySQL_Table'])."\">";
echo "<input type=\"hidden\" name=\"ID\" value=\"".$Display_Array['ID']."\">";
echo "<input type=\"hidden\" name=\"Previous_Page\" value=\"".$_SERVER['REQUEST_URI']."\">";
echo "<input type=\"hidden\" name=\"New_Link_Reference\" value=\"".$Display_Array['New_Link_Reference']."\">";
echo "<input type=\"hidden\" name=\"Linking_Value\" value=\"".$Display_Array['ID']."\">";
Additional_Items_Formatting($Display_Array['Additional_Data']);
echo "<input type=\"hidden\" name=\"Table_Major_Heading\" value=\"".str_replace(" ", "_",$Display_Array['Table_Major_Heading'])."\">";
echo "<input class=\"\" type=\"submit\"  name=\"Submission_Button\" value=\"New (TEST)\">";
echo "</form>";

// TEST FUNCTION //////////////
?> 





<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "CONTROLLED PART";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array("ID",
"Project ID",
"",
"Status",
"Label Applied",
"",
"Manufacturer",
"Manufacturer Part #",
"Serial #",
"",
"Received Date",
"Received # Boxes",
"",
"(L):Storage ID:REC-DTL_Storage",
"",

"",
"Modified Date",
"Modified By"
);

$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_parts-controlled` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = ".$Display_Array['ID']." ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";

Dispaly_Details_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "";
$Display_Array['Table_Minor_Heading'] = "Inspection Details";
$Display_Array['Display_Items'] = array(
"Performance Tested",
"Performance Test Outcome",
"Performance Test Date",
"(L):Performance Tester ID:REC-DTL_Contacts"
);

$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_parts-controlled` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = ".$Display_Array['ID']." ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";

Dispaly_Details_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "";
$Display_Array['Table_Minor_Heading'] = "Warranty Details";
$Display_Array['Display_Items'] = array(
"Performance Tested",
"Performance Test Outcome",
"Performance Test Date",
"(L):Performance Tester ID:REC-DTL_Contacts",
"",
"RMA #",
"SO #",
"",
"Warranty Claim",
"Warranty Claim Status",
"Warranty Claim Reference",
"",
"Tax Invoice Provided",
"Purchase Date",
"Purchase Type",
"",
"Warranty Approval"
);

$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_parts-controlled` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = ".$Display_Array['ID']." ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";

Dispaly_Details_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "";
$Display_Array['Table_Minor_Heading'] = "Dispatch Details";
$Display_Array['Display_Items'] = array(
"(L):Dispatch Contact:REC-DTL_Contacts",
"Dispatch # Boxes",
"Dispatch Organization",
"Dispatch Tracking #",
"Dispatch Date"
);

$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_parts-controlled` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = ".$Display_Array['ID']." ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";

Dispaly_Details_0001($Database_Connection, $Display_Array);

?>


<?php

echo "Quick Inputs [TECHNICAL SUPPORT] =>";

$Function_Id = "002";
$Input_Id = array(
"Performance Test Outcome"
);
$Button_Description = array(
"Performance Testing"
);
$Requested_Value = array(
"-Commissioning Function Test: PASS / FAILED / NOT APPLICABLE &#13;&#10;-BlueBus Function Test: PASS / FAILED / NOT APPLICABLE &#13;&#10;   *All Faults found are details within the Task Section."
);
$IsComboBox = false;
Quick_Input_Multiple_0001($Function_Id, $Input_Id, $Button_Description, $Requested_Value, $IsComboBox);

echo "<br><br>";

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "TASK(S) / FAULT(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(E):Phase ID:rec_phases:Description",
"Task Status",
"Planned Work Date",
"Description"
);
$Display_Array['Column_Width'] = array("50px", "150px", "150px", "150px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Tasks.php";
$Display_Array['New_Link_Reference'] = "Part Controlled ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE `Part Controlled ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Task Status` ASC, `Planned Work Date` DESC ";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "NOTE(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Details");
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Notes.php";
$Display_Array['New_Link_Reference'] = "Part Controlled ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_notes` ";
$Display_Array['MySQL_Filter'] = "WHERE `Part Controlled ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 