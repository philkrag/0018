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
// 2021-03-26 	|| Phillip Kraguljac 		|| v1.5.
// 2021-03-31 	|| Phillip Kraguljac 		|| v1.5. 

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Risk Record</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">

<?php if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;} ?>


<?php // QR QUICK LINK

$Display_Array['ID'] = $Item_ID;

Display_Quick_Reference($Database_Connection, $Display_Array);

?>


<?php // UPPER PAGE OPTIONS

$Data['Total_Items'] = 2;
$Data['Item_ID'] = array(null, null);
$Data['Page'] = array("FRM_Risk-Assessment", "Help");
$Data['Bookmark'] = array(null,"Conducting_Root_Causes_Analysis");
$Data['Label'] = array("Form", "Help");
Upper_Options_0002($Data);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "RISK";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array("ID",
"(L):Gap ID:REC-DTL_Gaps",
"(L):Contingency ID:REC-DTL_Contingencies",
"(L):Project ID:REC-DTL_Projects",
"(L):Equipment ID:REC-DTL_Equipment",
"",
"Risk Group",
"Completed Date",
"Completed By",
"",
"Impact of Compliance",
"Potential for Injury",
"Potential Repair Loss",
"Potential Revenue Loss",
"Potential Customer Loss",
"Potential Dispute Duration",
"Likelihood of Occurrence",
"Frequency of Occurrence",
"Exposure of Occurrence",
"Health Risk",
"Commercial Risk",
"",
"Modified Date",
"Modified By"
);

$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `reg_risk-assessment` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = ".$Display_Array['ID']." ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";

Dispaly_Details_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "STAKEHOLDER(S)";
$Display_Array['Table_Minor_Heading'] = "...";
$Display_Array['Display_Items'] = array("ID",
"Contact ID",
"(E):Contact ID:reg_contacts:First Name",
"(E):Contact ID:reg_contacts:Last Name",
"(E):Contact ID:reg_contacts:Position"
);
$Display_Array['Column_Width'] = array("80px", "*");
$Display_Array['Item_Links'] = "REC-DTL_Stakeholders.php";
$Display_Array['New_Link_Reference'] = "Risk Assessment ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_stakeholders` ";
$Display_Array['MySQL_Filter'] = "WHERE `Risk Assessment ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "IDENTIFIER(S)";
$Display_Array['Table_Minor_Heading'] = "Used for grouping issues.";
$Display_Array['Display_Items'] = array("ID", "Risk Assessment ID");
$Display_Array['Column_Width'] = array("80px", "*");
$Display_Array['Item_Links'] = ".php";
$Display_Array['New_Link_Reference'] = "Risk Assessment ID";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_risk-identification` ";
$Display_Array['MySQL_Filter'] = "WHERE `Risk Assessment ID` = ".$Item_ID." AND (`Deleted Date` IS NULL OR `Deleted Date` = '".date("Y-m-d")."') ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "";
$Display_Array['MySQL_Offset'] = "";

Dispaly_List_0001($Database_Connection, $Display_Array);

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 