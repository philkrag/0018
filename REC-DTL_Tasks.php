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
// 2020-09-21 	|| Phillip Kraguljac 		|| v1.0.
// 2020-10-07 	|| Phillip Kraguljac 		|| v1.1.
// 2020-10-23 	|| Phillip Kraguljac 		|| v1.2.
// 2021-03-25 	|| Phillip Kraguljac 		|| v1.5.
// 2021-03-31 	|| Phillip Kraguljac 		|| v1.5. 
// 2021-04-29 	|| Phillip Kraguljac 		|| v1.5. 
// 2021-05-07 	|| Phillip Kraguljac 		|| v1.5.
// 2021-05-21 	|| Phillip Kraguljac 		|| v1.5.
// 2021-05-31 	|| Phillip Kraguljac 		|| v1.5.
// 2021-08-23 	|| Phillip Kraguljac 		|| v1.5.
// 2021-09-08 	|| Phillip Kraguljac 		|| v1.6.
// 2021-09-10 	|| Phillip Kraguljac 		|| v1.6.
// 2021-09-20 	|| Phillip Kraguljac 		|| v1.6.

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Task Record</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">

<?php if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;} ?>


<?php // UPPER PAGE OPTIONS

$Data['Total_Items'] = 2;
$Data['Item_ID'] = array($Item_ID, $Item_ID);
$Data['Page'] = array(
"REP_Task_Internal",
"REP_Task_Parts"
);
$Data['Label'] = array("Internal Report", "Part(s) Report");
Upper_Options_0002($Data);

?>


<?php // UPLOAD PDF

$Display_Array['ID'] = $Item_ID;
$Display_Array['File_Folder'] = "Tasks_Documents";
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['IS_Report'] = false;
$Display_Array['File_Type'] = "Document";

Upload_Dialog($Database_Connection, $Display_Array);

?>


<?php // UPLOAD IMAGE

$Display_Array['ID'] = $Item_ID;
$Display_Array['File_Folder'] = "Tasks_Photos";
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['IS_Report'] = false;
$Display_Array['File_Type'] = "Photo";

Upload_Dialog($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "TASK";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array("ID",
"(L):Equipment ID:REC-DTL_Equipment",
"(L):Specification ID:REC-DTL_Specifications",
"(L):Project ID:REC-DTL_Projects",
"(L):Service ID:REC-DTL_Services",
"(L):Phase ID:REC-DTL_Phases",
"(L):Part Controlled ID:REC-DTL_Parts-Controlled",
"",
"Description",
"Task Status",
"Commerical Priority",
"Health & Safety Priority",
"Task Type",
"(L):Client ID:REC-DTL_Contacts",
"Identified Date",
"(L):Technician ID:REC-DTL_Contacts",
"Required Completion Date",
"Planned Completion Date",
"Planned Work Date",
"Actual Completed Date",
"",
//"Deleted Date",
"Modified Date",
"Modified By"
);
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = ".$Display_Array['ID']." ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";

Dispaly_Details_0001($Database_Connection, $Display_Array);

?>


<?php

echo "Quick Inputs [BMS POINT INSPECTION] =>";

$Function_Id = "001";
$Input_Id = array("Description");
$Button_Description = array(
"Parameter Exceeded"
);
$Requested_Value = array(
"[UNIT ID] Operational Parameter Exceeded Specification / Internal Monitoring Point and requires review. "
);
$IsComboBox = false;
Quick_Input_Multiple_0001($Function_Id, $Input_Id, $Button_Description, $Requested_Value, $IsComboBox);

echo "<br><br>";

?>


<?php

echo "Quick Inputs [TECHNICAL SUPPORT] =>";

$Function_Id = "002";
$Input_Id = array(
"Description",
"Description",
"Description"
);
$Button_Description = array(
"Warranty Claim",
"Technical Support",
"Sales Support"
);
$Requested_Value = array(
"WARRANTY CLAIM; Customer: [FIRST_NAME] [LAST_NAME];",
"TECHNICAL SUPPORT;&#13;&#10;     Part #: [Data]&#13;&#10;     Fault Description: [Data]",
"SALES SUPPORT;&#13;&#10;     Part #: [Data]&#13;&#10;     Order Description: [Data]"
);
$IsComboBox = false;
Quick_Input_Multiple_0001($Function_Id, $Input_Id, $Button_Description, $Requested_Value, $IsComboBox);

echo "<br><br>";

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "NOTE(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID", "Details", "Identified Date");
$Display_Array['Column_Width'] = array("50px", "*", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Notes.php";
$Display_Array['New_Link_Reference'] = "Task ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_notes` ";
$Display_Array['MySQL_Filter'] = "WHERE `Task ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Identified Date` ASC, `Details` ASC "; 
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "PART(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID",
"Description",
"Supplier",
"Supplier Part #",
"Unit Price (exc GST)",
"Quantity Required",
"Total Price (exc GST)",
"Status"
);
$Display_Array['Column_Width'] = array("50px", "*", "150px", "150px", "150px", "150px", "150px", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Parts-Order.php";
$Display_Array['New_Link_Reference'] = "Task ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_parts-order` ";
$Display_Array['MySQL_Filter'] = "WHERE `Task ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
