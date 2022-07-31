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
// 2021-09-06 	|| Phillip Kraguljac 		|| v1.6 (Created)
// 2022-03-01 	|| Phillip Kraguljac 		|| v1.7
// 2022-07-17 	|| Phillip Kraguljac 		|| v1.8

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>

<?php $Heading_Index = 1; ?>

<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Equipment Type</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">

<?php if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;} ?>


<?php // QR QUICK LINK

$Display_Array['ID'] = $Item_ID;

Display_Quick_Reference($Database_Connection, $Display_Array);

?>


<?php // UPLOAD IMAGE

$Display_Array['ID'] = $Item_ID;
$Display_Array['File_Folder'] = "Equipment_Type_Photos";
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['IS_Report'] = false;
$Display_Array['File_Type'] = "Photo";
$Display_Array['Image_Size'] = "200px";

Upload_Dialog($Database_Connection, $Display_Array);

?>


<?php // UPPER PAGE OPTIONS

$Data['Options_Description'] = "Reports";
$Data['Total_Items'] = 1;
$Data['Item_Prefix'] = array("ID");
$Data['Item_Suffix'] = array($Item_ID);
$Data['Page'] = array("REP_Equipment-Type");
$Data['Label'] = array("General");
Upper_Options_0003($Data);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "EQUIPMENT TYPE";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array("ID",
"Manufacturer",
"Manufacturer Range",
"Manufacturer Part No",
"Division",
"Description",
"",
"Modified Date",
"Modified By"
);
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_equipment_types` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = ".$Display_Array['ID']." ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";

Dispaly_Details_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "DESIGN FUNCTION(S)";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array(
"ID",
"Description"
);
$Display_Array['Column_Width'] = array("50px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Functionality.php";
$Display_Array['New_Link_Reference'] = "Equipment Type ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_design-functionality` ";
$Display_Array['MySQL_Filter'] = "WHERE `Equipment Type ID` = '{$Item_ID}' AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "KNOWN ISSUE(S) [DESIGN / PRODUCTION ONLY]";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array("ID",
"Production Start Date",
"Production Finish Date",
"Issue Description"
);
$Display_Array['Column_Width'] = array("50px", "150px", "150px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Equipment-Type-Known-Issues.php";
$Display_Array['New_Link_Reference'] = "Equipment Type ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_equipment-type-known-issues` ";
$Display_Array['MySQL_Filter'] = "WHERE `Equipment Type ID` = '{$Item_ID}' AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "DOCUMENT(S)";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array("ID",
"(E):Document ID:reg_documents:ID",
"(E):Document ID:reg_documents:Document Title"
);
$Display_Array['Column_Width'] = array("50px", "150px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Equipment-Type-Documents.php";
$Display_Array['New_Link_Reference'] = "Equipment Type ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_equipment-type-documents` ";
$Display_Array['MySQL_Filter'] = "WHERE `Equipment Type ID` = '{$Item_ID}' AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = false;
$Display_Array['Table_Major_Heading'] = "WORK INSTRUCTION(S)";
$Display_Array['Table_Minor_Heading'] = "";
$Display_Array['Display_Items'] = array(
"ID",
"(M):Title:Tags",
"Type",
"(E):Product ID:reg_equipment_types:Manufacturer Range",
"Repair Level",
"Status"
);
$Display_Array['Column_Width'] = array("50px", "*", "200px", "150px", "150px", "200px");
$Display_Array['Item_Links'] = "REC-DTL_Work-Instructions.php";
$Display_Array['New_Link_Reference'] = "Product ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_work-instructions` ";
$Display_Array['MySQL_Filter'] = "WHERE `Product ID` = {$Item_ID} AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Product ID` ASC , `Type` ASC, `Title` ASC";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
