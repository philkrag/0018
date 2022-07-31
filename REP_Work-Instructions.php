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
// 2021-01-10 	|| Phillip Kraguljac 		|| v1.7
// 2022-01-20 	|| Phillip Kraguljac 		|| v1.7
// 2022-01-25 	|| Phillip Kraguljac 		|| v1.7
// 2022-02-02 	|| Phillip Kraguljac 		|| v1.7
// 2022-02-07 	|| Phillip Kraguljac 		|| v1.7
// 2022-02-21 	|| Phillip Kraguljac 		|| v1.7
// 2022-03-01 	|| Phillip Kraguljac 		|| v1.7
// 2022-07-07 	|| Phillip Kraguljac 		|| v1.8

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>

<?php $Heading_Index = "13"; ?>

<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title><?php echo "[".$_GET['ID']."]"; ?> Work Instruction <?php echo date("Y-m-d"); ?></title>
</head>
<body onload="">

<?php

if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;}
if(isset($_GET['Task_ID'])){$Task_ID = Basic_Filter_Input($_GET['Task_ID']);}else{$Task_ID = null;}
if(isset($_GET['Hide_Images'])){$Hide_Images = Basic_Filter_Input($_GET['Hide_Images']);}else{$Hide_Images = "No";}

?>


<?php

$Report_Array['Display_Week']="";
$Report_Array['Display_Week_Start_Date']="";
$Report_Array['Display_Week_Finish_Date']="";
$Report_Array['Task_ID']=$Task_ID;
$Report_Array['Print_Date']="";

Report_Details_0001($Database_Connection, $Report_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "WORK INSTRUCTION";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array("ID",
"Title",
"Description",
"Repair Level",
"Status",
"Modified Date",
"Modified By");
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
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "";
$Display_Array['Table_Minor_Heading'] = "Associated Equipment";
$Display_Array['Display_Items'] = array(
"Equipment ID",
"(E):Equipment ID:reg_equipment:ID:Equipment Name",
"(E):Equipment ID:reg_equipment:ID:Serial Number");
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
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "";
$Display_Array['Table_Minor_Heading'] = "Associated Product";
$Display_Array['Display_Items'] = array(
"Product ID",
"(E):Product ID:reg_equipment_types:ID:Manufacturer",
"(E):Product ID:reg_equipment_types:ID:Manufacturer Range",
"(E):Product ID:reg_equipment_types:ID:Manufacturer Part No"
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
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "VERSION CONTROL(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"Identifier",
"Change Description (Short)",
"Modified Date",
"Modified By",
"Status"
);
$Display_Array['Column_Width'] = array("100px", "*", "250px", "250px", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Version-Controls.php";
$Display_Array['New_Link_Reference'] = "Work Instruction ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_version-control` ";
$Display_Array['MySQL_Filter'] = "WHERE `Work Instruction ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Identifier` ASC "; 
$Display_Array['MySQL_Limit'] = "LIMIT 5 ";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "ASSOCIATED DOCUMENT(S)";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array(
"ID",
"(E):Associated Document ID:reg_documents:Document Title",
"(E):Associated Document ID:reg_documents:Type"
);
$Display_Array['Column_Width'] = array("100px", "*", "200px");
$Display_Array['Item_Links'] = "REC-DTL_Instruction-Document.php";
$Display_Array['New_Link_Reference'] = "Work Instruction ID";

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
$Display_Array['IS_Report'] = true;
$Display_Array['Hide_Images'] = $Hide_Images;
$Display_Array['Table_Major_Heading'] = "STEP(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
//"(E):Symptom ID:rec_rcas-symptoms:Description",
"Sequence",
"(M):Components:Inspect:Action:Measure:Important Point:Additional Information:Associated Work Instructions ID::Utilization::PPE Required - Hearing Protection:PPE Required - Eye Protection:PPE Required - Eye Protection Laser:PPE Required - Hand Protection:PPE Required - Feet Protection",
"(P):Instruction_Step_Photos:100%",
"(B)::  &#11036; Completed <br> &#11036; Not Completed <br> &#11036; Fault Found (#) ........  "
);
$Display_Array['Column_Width'] = array("100px", "*", "300px", "150px");
$Display_Array['Item_Links'] = "";
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
$Display_Array['IS_Report'] = true;
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


<?php

Report_Details_0004();

?>


<?php

$Display_Array['Technician_Signature'] = True;
$Display_Array['Table_Major_Heading'] = "Test";
Report_Details_0003($Database_Connection, $Display_Array);

?>


<br>
<!-- <div style="text-align: right;"><button onclick="window.print()">Print</button></div> -->

</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
