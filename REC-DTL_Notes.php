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
// 2020-10-06 	|| Phillip Kraguljac 		|| v1.1.
// 2021-03-31 	|| Phillip Kraguljac 		|| v1.5. 
// 2021-05-06 	|| Phillip Kraguljac 		|| v1.5. 
// 2021-05-07 	|| Phillip Kraguljac 		|| v1.5. 
// 2021-05-13 	|| Phillip Kraguljac 		|| v1.5.
// 2021-05-31 	|| Phillip Kraguljac 		|| v1.5.

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Notes</title>
</head>
<body onload="<?php echo $Menu_Peference; ?>">

<?php if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;} ?>


<?php

$Display_Array = null;
$Display_Array['ID'] = $Item_ID;
$Display_Array['Table_Major_Heading'] = "NOTE";
$Display_Array['Table_Minor_Heading'] = "General Details";
$Display_Array['Display_Items'] = array("ID",
"(L):Task ID:REC-DTL_Tasks",
"(L):Gap ID:REC-DTL_Gaps",
"(L):Gap Control ID:REC-DTL_Gaps-Controls",
"(L):Inspection Point ID:REC-DTL_Inspection-Points",
"(L):Part ID:REC-DTL_Parts-Project",
"(L):Control ID:REC-DTL_Controls",
"",
"Details",
"Identified Date",
"Identified By",
"",
"Modified Date",
"Modified By"
);
$Display_Array['Column_Width'] = array("300px", "*" );
$Display_Array['Item_Links'] = "";

$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `rec_notes` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = ".$Display_Array['ID']." ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";

Dispaly_Details_0001($Database_Connection, $Display_Array);

?>


<?php

echo "Quick Inputs [INSPECTIONS] =>";

$Function_Id = "001";
$Input_Id = array("Details");
$Button_Description = array(
"Questions (Interview)"
);
$Requested_Value = array(
"Questions added to questionnaire sheet; "
);
$IsComboBox = false;
Quick_Input_Multiple_0001($Function_Id, $Input_Id, $Button_Description, $Requested_Value, $IsComboBox);

echo "<br><br>";

?>


<?php

echo "Quick Inputs [BMS MAINTENANCE] =>";

$Function_Id = "002";
$Input_Id = array("Details", "Details", "Details", "Details", "Details");
$Button_Description = array(
"QFM Reference",
"BMS Daily Checklist",
"Pressure Check",
"Temperature Check",
"Humidity Check"
);
$Requested_Value = array(
"QFM#: [DATA]; ",
"Identified as point within daily BMS check; ",
"Rm Pressure @ [DATA] Pa; Rm SP Pressure @ [DATA] Pa; Rm Pressure Range (while Running) @ [DATA] - [DATA] Pa; Rm Pressure Trend: [DESC]; Proposed Actions: [DESC]; ",
"SA Temperature @ [DATA] C; SA SP Temperature @ [DATA] C; SA Temperature Range (while Running) @ [DATA] - [DATA] C; SA Temperature Trend: [DESC]; Proposed Actions: [DESC]; ",
"SA Humidity @ [DATA] %RH; SA SP Humidity @ [DATA] %RH; SA Humidity Range (while Running) @ [DATA] - [DATA] %RH; SA Humidity Trend: [DESC]; Proposed Actions: [DESC]; "

);
$IsComboBox = false;
Quick_Input_Multiple_0001($Function_Id, $Input_Id, $Button_Description, $Requested_Value, $IsComboBox);

echo "<br><br>";

?>


<?php

echo "Quick Inputs [BMS INSPECTION] =>";

$Function_Id = "003";
$Input_Id = array("Details");
$Button_Description = array(
"Internal Parameter OK"
);
$Requested_Value = array(
"Reviewed operation. No Issues Found. Adjusting parameter set. "
);
$IsComboBox = false;
Quick_Input_Multiple_0001($Function_Id, $Input_Id, $Button_Description, $Requested_Value, $IsComboBox);

echo "<br><br>";

?>


<?php

echo "Quick Inputs [TECHNICAL SUPPORT] =>";

$Function_Id = "004";
$Input_Id = array("Details");
$Button_Description = array(
"Initial Questions"
);
$Requested_Value = array(
"New/Old Install: [Data]&#13;&#10;Installation Date (if known): [Data]&#13;&#10;Time of Call: [Data]&#13;&#10;Required Callback Timeframe: [Data]"
);
$IsComboBox = false;
Quick_Input_Multiple_0001($Function_Id, $Input_Id, $Button_Description, $Requested_Value, $IsComboBox);

echo "<br><br>";

?>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 
