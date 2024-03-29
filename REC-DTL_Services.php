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
// 2021-05-27 	|| Phillip Kraguljac 		|| v1.5. (created)
// 2021-05-31 	|| Phillip Kraguljac 		|| v1.5. (created)

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Task Record</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">

<?php

if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;}
if(isset($_GET['Equipment_ID'])){$Equipment_ID = Basic_Filter_Input($_GET['Equipment_ID']);}else{$Equipment_ID = null;}

?>


<?php // QR QUICK LINK

$Display_Array['ID'] = $Item_ID;

Display_Quick_Reference($Database_Connection, $Display_Array);

?>


<?php // UPLOAD PDF

$Document_ID = Retrieve_Database_Entry_0001($Database_Connection, "rec_services", $Item_ID, "Document ID");
$Release_ID = Retrieve_Database_Last_Entry_0001($Database_Connection, "rec_documents-release", $Document_ID, "Published Date", "ID");

$Display_Array['ID'] = $Release_ID;
$Display_Array['File_Folder'] = "Library";
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['IS_Report'] = false;
$Display_Array['IS_Shortcut'] = true;
$Display_Array['File_Type'] = "Document";

Upload_Dialog($Database_Connection, $Display_Array);

?>


<?php // UPPER PAGE OPTIONS

$Data['Total_Items'] = 1;
$Data['Item_ID'] = array($Item_ID);
$Data['Page'] = array(
"REP_Service_Internal"
);
$Data['Label'] = array("Internal Report");
Upper_Options_0002($Data);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "SERVICE";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array("ID",
"(L):Equipment ID:REC-Equipment",
"(L):Document ID:REC-DTL_Documents-Release",
"",
"Description",
"",
"Modified Date",
"Modified By"
);
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_services` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = ".$Display_Array['ID']." ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";

Dispaly_Details_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "INSPECTION(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(E):Service ID:rec_phases:Description",
"Task Status",
"Planned Work Date",
"Description"
);
$Display_Array['Column_Width'] = array("50px", "150px", "150px", "150px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Tasks.php";
$Display_Array['New_Link_Reference'] = "Service ID";
$Display_Array['Additional_Data'] = array(
"Equipment ID:{$Equipment_ID}"
);

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE `Service ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "ORDER BY `Task Status` ASC, `Planned Work Date` DESC ";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "TASK(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(E):Phase ID:rec_phases:Description",
"Task Status",
"Description"
);
$Display_Array['Column_Width'] = array("50px", "150px", "150px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Tasks.php";
$Display_Array['New_Link_Reference'] = "Service ID";
$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_tasks` ";
$Display_Array['MySQL_Filter'] = "WHERE `Service ID` = ".$Item_ID."  AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>








</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
