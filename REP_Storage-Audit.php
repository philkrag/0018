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
// 2022-01-10 	|| Phillip Kraguljac 		|| v1.7 (created)
// 2022-01-12 	|| Phillip Kraguljac 		|| v1.7
// 2022-02-28 	|| Phillip Kraguljac 		|| v1.7
// 2022-06-02 	|| Phillip Kraguljac 		|| v1.8

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title><?php echo "[".$_GET['ID']."]"; ?> Storage Content Audit <?php echo date("Y-m-d"); ?></title>

</head>
<body onload="">


<?php

$Item_ID = Basic_Filter_Input($_GET['ID']);
if(isset($_GET['Hide_Images'])){$Hide_Images = Basic_Filter_Input($_GET['Hide_Images']);}else{$Hide_Images = "No";}

?>


<?php

$Report_Array['Display_Week']="";
$Report_Array['Display_Week_Start_Date']="";
$Report_Array['Display_Week_Finish_Date']="";
$Report_Array['Print_Date']="";

Report_Details_0001($Database_Connection, $Report_Array);

?>

<?php // UPLOAD IMAGE

$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['File_Folder'] = "Storage_Photos";
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['IS_Report'] = false;
$Display_Array['File_Type'] = "Photo";

Upload_Dialog($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "STORAGE";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array("ID",
"Storage Name",
"Short Description",
"Long Description",
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
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "EQUIPMENT(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(P):Equipment_Photos",
"Equipment Name",
"Part",
"Serial Number",
"Serviceability Rating",
"(B)::  &#11036; Serviceable <br> &#11036; Not Serviceable <br> &#11036; Missing "
);
$Display_Array['Column_Width'] = array("50px", "100px", "*", "150px", "150px", "150px", "250px");
$Display_Array['Item_Links'] = "REC-LST_Equipment.php";
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
$Display_Array['IS_Report'] = true;
$Display_Array['Hide_Images'] = $Hide_Images;
$Display_Array['Table_Major_Heading'] = "TOOL(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(P):Tool_Photos:100px",
"Description",
"(M):OEM:OEM Part #",
"Serial #",
"(B)::  &#11036; Serviceable <br> &#11036; Not Serviceable <br> &#11036; Missing "
);
$Display_Array['Column_Width'] = array("50px", "100px", "*", "150px", "150px", "250px");
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
$Display_Array['IS_Report'] = true;
$Display_Array['Table_Major_Heading'] = "CONTROLLED PART(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array(
"ID",
"(P):Part_Controlled_Photos:100px",
"",
"Status",
"Manufacturer",
"Manufacturer Part #",
"Serial #", 
"(B)::  &#11036; Serviceable <br> &#11036; Not Serviceable <br> &#11036; Missing "
);
$Display_Array['Column_Width'] = array("50px", "100px", "*", "150px", "250px", "150px", "250px", "150px");
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



<?php

$Display_Array['Technician_Signature'] = true;
$Display_Array['Table_Major_Heading'] = "Test";
Report_Details_0002($Database_Connection, $Display_Array);

?>


<br>
<!-- <div style="text-align: right;"><button onclick="window.print()">Print</button></div> -->


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 