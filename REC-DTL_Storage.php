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
// PAGE CREATED DATE: 2021-09-16

// DATE   		|| NAME 					|| MODIFICATION
// 2021-09-16 	|| Phillip Kraguljac 		|| v1.6 (created)
// 2022-01-10 	|| Phillip Kraguljac 		|| v1.7
// 2022-02-28 	|| Phillip Kraguljac 		|| v1.7
// 2022-03-07	|| Phillip Kraguljac 		|| v1.7
// 2022-06-02 	|| Phillip Kraguljac 		|| v1.8
// 2022-06-16 	|| Phillip Kraguljac 		|| v1.8
// 2022-07-25 	|| Phillip Kraguljac 		|| v1.8

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


<?php // QR QUICK LINK

$Display_Array['ID'] = $Item_ID;

Display_Quick_Reference($Database_Connection, $Display_Array);

?>


<?php // QR QUICK LINK

$Display_Array['ID'] = $Item_ID;

Display_Quick_Reference($Database_Connection, $Display_Array);

?>


<?php // UPLOAD IMAGE

$Display_Array['ID'] = $Item_ID;
$Display_Array['File_Folder'] = "Storage_Photos";
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['IS_Report'] = false;
$Display_Array['File_Type'] = "Photo";

Upload_Dialog($Database_Connection, $Display_Array);

?>


<?php // UPPER PAGE OPTIONS

$Data['Options_Description'] = "Reports";
$Data['Total_Items'] = 5;
$Data['Item_ID'] = array($Item_ID, $Item_ID, $Item_ID, $Item_ID, $Item_ID, $Item_ID);
$Data['Item_Indexer_Specific'] = array("ID", "ID", "ID", "ID", "ID", "ID", "ID", "ID", "ID", "ID");
$Data['Page'] = array(
"REP_Storage-Contents",
"REP_Storage-Audit",
"REP_Storage-Audit",
"REP_Storage-Cost",
"REP_Storage-Cost"
);
$Data['Label'] = array(
"Contents Report",
"Audit (Images)",
"Audit (No Images)",
"Cost (Images)",
"Cost (No Images)"
);
$Data['Item_Suffix'] = array(
"",
"",
"Hide_Images=Yes",
"",
"Hide_Images=Yes"
);
Upper_Options_0003($Data);

?>


<?php // UPPER PAGE OPTIONS

$Data['Options_Description'] = "Labels";
$Data['Total_Items'] = 3;
$Data['Item_ID'] = array($Item_ID, $Item_ID, $Item_ID);
$Data['Item_Indexer_Specific'] = array("ID", "ID", "ID");
$Data['Page'] = array(
"REP_Storage-Label",
"LBL_Quick-Reference-Shipping",
"LBL_Quick-Reference-Storage",
"LBL_QR-Storage"
);
$Data['Label'] = array(
"Detailed Shipping",
"Quick Shipping",
"Quick Reference",
"QR Stickers"
);
$Data['Item_Prefix'] = array("","","");
$Data['Item_Suffix'] = array("","","");
Upper_Options_0003($Data);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "STORAGE";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array(
"ID",
"Storage Name",
"Short Description",
"Long Description",
"",
//"Deleted Date",
"Modified Date",
"Modified By"
);
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_storage` ";
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
$Display_Array['Table_Minor_Heading'] = "Internal Location";
$Display_Array['Display_Items'] = array(
"Rack",
"Shelf",
"Bin"
);
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_storage` ";
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
$Display_Array['Table_Minor_Heading'] = "Shipping Information";
$Display_Array['Display_Items'] = array(
"Height (mm)",
"Width (mm)",
"Depth (mm)",
"Weight (kg) Loaded",
"Weight (kg) Unloaded"
);
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_storage` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = ".$Display_Array['ID']." ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";

Dispaly_Details_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "EQUIPMENT(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(P):Equipment_Photos",
"Equipment Name",
"Part",
"Serial Number",
"Serviceability Rating"
);
$Display_Array['Column_Width'] = array("50px", "100px", "*", "150px", "150px", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Equipment.php";
$Display_Array['New_Link_Reference'] = "Storage ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_equipment` ";
$Display_Array['MySQL_Filter'] = "WHERE `Storage ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY 'Equipment Name' ASC "; 
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "TOOL(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(P):Tool_Photos",
"Description",
"OEM",
"OEM Part #",
"Supplier",
"Supplier Part #",
"Estimated Cost ($)",
"Serial #"
);
$Display_Array['Column_Width'] = array("50px", "100px", "*", "150px", "150px", "150px", "150px", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Tools.php";
$Display_Array['New_Link_Reference'] = "Storage ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_tools` ";
$Display_Array['MySQL_Filter'] = "WHERE `Storage ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY Description ASC "; 
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "CONTROLLED PART(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(P):Part_Controlled_Photos",
"Status",
"Manufacturer",
"Manufacturer Part #",
"Serial #"
);
$Display_Array['Column_Width'] = array("50px", "100px", "*", "150px");
$Display_Array['Item_Links'] = "REC-DTL_Parts-Controlled.php";
$Display_Array['New_Link_Reference'] = "Storage ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_parts-controlled` ";
$Display_Array['MySQL_Filter'] = "WHERE `Storage ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = ""; 
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
