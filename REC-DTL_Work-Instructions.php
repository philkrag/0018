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
// PAGE CREATED DATE: 2020-10-06

// DATE   		|| NAME 					|| MODIFICATION
// 2021-12-24 	|| Phillip Kraguljac 		|| v1.7
// 2022-01-20 	|| Phillip Kraguljac 		|| v1.7
// 2022-01-25 	|| Phillip Kraguljac 		|| v1.7
// 2022-02-08 	|| Phillip Kraguljac 		|| v1.7
// 2022-02-21 	|| Phillip Kraguljac 		|| v1.7
// 2022-06-14 	|| Phillip Kraguljac 		|| v1.8

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Work Instruction</title>
</head>
<body>

<?php if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;} ?>


<?php // QR QUICK LINK

$Display_Array['ID'] = $Item_ID;

Display_Quick_Reference($Database_Connection, $Display_Array);

?>


<?php // UPPER PAGE OPTIONS

$Data['Options_Description'] = "Reports";
$Data['Total_Items'] = 2;
$Data['Item_Prefix'] = array("ID", "ID");
$Data['Item_Suffix'] = array($Item_ID, $Item_ID);
$Data['Page'] = array(
"REP_Work-Instructions",
"REC-DTL_Work-Instructions"
);
$Data['Label'] = array(
"Printable (Images)",
"Approve / Release"
);

Upper_Options_0003($Data);

?>


<?php // UPPER PAGE OPTIONS

$Data['Options_Description'] = "Functions";
$Data['Total_Items'] = 1;
$Data['Item_Prefix'] = array("WMS_ReOrder");
$Data['Item_Suffix'] = array($Item_ID);
$Data['Page'] = array(
"WID_Work-Instruction-Reorder"
);
$Data['Label'] = array(
"Clean Step(s)"
);

Upper_Options_0003($Data);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "WORK INSTRUCTION";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array("ID",
"Title",
"Type",
"Tags",
"Description",
"Repair Level",
"Status",
"",
"Modified Date",
"Modified By"

);

$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_work-instructions` ";
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
$Display_Array['Table_Minor_Heading'] = "Associated Link(s)";
$Display_Array['Display_Items'] = array(
"(L):Equipment ID:REC-DTL_Equipment",
"(L):Product ID:REC-DTL_Equipment_Type",
);

$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_work-instructions` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = ".$Display_Array['ID']." ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";

Dispaly_Details_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "VERSION CONTROL(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"Identifier",
"Change Description (Short)",
"Modified Date",
"Modified By",
"Status"
);
$Display_Array['Column_Width'] = array("50px", "100px", "*", "200px", "200px", "200px");
$Display_Array['Item_Links'] = "REC-DTL_Version-Controls.php";
$Display_Array['New_Link_Reference'] = "Work Instruction ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_version-control` ";
$Display_Array['MySQL_Filter'] = "WHERE `Work Instruction ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Modified Date` DESC, `ID` DESC "; 
$Display_Array['MySQL_Limit'] = "LIMIT 5 ";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "ASSOCIATED DOCUMENT(S)";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array(
"ID",
"(E):Associated Document ID:reg_documents:Document Title",
"(E):Associated Document ID:reg_documents:Type"
);
$Display_Array['Column_Width'] = array("50px", "*", "200px");
$Display_Array['Item_Links'] = "REC-DTL_Instruction-Document.php";
$Display_Array['New_Link_Reference'] = "Work Instructions ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_instruction-documents` ";
$Display_Array['MySQL_Filter'] = "WHERE `Work Instructions ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = ""; 
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "INSTRUCTION(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"Sequence",
"(P):Instruction_Step_Photos",
"(M):Components:Inspect:Action:Measure:Important Point:Additional Information:Associated Work Instructions ID",
"Utilization",
"Status");
$Display_Array['Column_Width'] = array("50px", "100px", "100px", "*", "250px", "250px");
$Display_Array['Item_Links'] = "REC-DTL_Instruction-Step.php";
$Display_Array['New_Link_Reference'] = "Work Instructions ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_instruction-steps` ";
$Display_Array['MySQL_Filter'] = "WHERE `Work Instructions ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Sequence` ASC "; 
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "TOOL(S) REQUIRED";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(E):Associated Tool ID:reg_tools:Description"
);
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Instruction-Tools.php";
$Display_Array['New_Link_Reference'] = "Work Instructions ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_instruction-tools` ";
$Display_Array['MySQL_Filter'] = "WHERE `Work Instructions ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = " "; 
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 