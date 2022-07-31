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
// 2020-09-21 	|| Phillip Kraguljac 		|| v1.0
// 2020-04-13 	|| Phillip Kraguljac 		|| v1.5
// 2021-04-15	|| Phillip Kraguljac 		|| v1.5
// 2021-04-19	|| Phillip Kraguljac 		|| v1.5
// 2021-09-06	|| Phillip Kraguljac 		|| v1.6
// 2021-12-29	|| Phillip Kraguljac 		|| v1.7
// 2022-01-19	|| Phillip Kraguljac 		|| v1.7
// 2022-02-07	|| Phillip Kraguljac 		|| v1.7
// 2022-06-16	|| Phillip Kraguljac 		|| v1.8
// 2022-06-29 	|| Phillip Kraguljac 		|| v1.8
// 2022-07-06 	|| Phillip Kraguljac 		|| v1.8
// 2022-07-28 	|| Phillip Kraguljac 		|| v1.8

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php include $_SERVER['DOCUMENT_ROOT'].'../Formats/Header_Basic.php';?>


<?php



$Method = ""; if(isset($_POST['Method'])){$Method=$_POST['Method'];}
$Submission_Button = ""; if(isset($_POST['Submission_Button'])){$Submission_Button=$_POST['Submission_Button'];}
//$Data['New_Link_Reference'] = ""; if(isset($_POST['New_Link_Reference'])){$Data['New_Link_Reference']=$_POST['New_Link_Reference'];}
//$Data['Linking_Value'] = ""; if(isset($_POST['Linking_Value'])){$Data['Linking_Value']=$_POST['Linking_Value'];}
echo "<br>".$Submission_Button."<";

if($Submission_Button=="Save"){Save_To_Database($Database_Connection);}
//if($Submission_Button=="New"){New_To_Database($Database_Connection, $Data);}
if($Submission_Button=="New"){New_To_Database($Database_Connection);}
if($Submission_Button=="Delete"){Delete_From_Database($Database_Connection);}
if($Submission_Button=="Upload"){Upload_Document($Database_Connection);}
//if($Submission_Button=="Upload_Photo"){Upload_Document($Database_Connection);}

?>

<?php

function Upload_Document($Database_Connection){

$Report_CSS_Insert= false;

if(!isset($_POST['ID']))($_POST['ID']="");
if(!isset($_POST['File_Folder']))($_POST['File_Folder']="");

switch ($_POST['File_Folder']) {
  case "Equipment_Photos": $File_Name = $_POST['ID'].".jpg"; break;
  case "Equipment_Type_Photos": $File_Name = $_POST['ID'].".jpg"; break;
  case "Gap_Photos": $File_Name = $_POST['ID'].".jpg"; break;
  case "Instruction_Step_Photos": $File_Name = $_POST['ID'].".jpg"; break;  
  case "Library_Documents": $File_Name = $_POST['ID'].".pdf"; break;  
  case "Map_Photos": $File_Name = $_POST['ID'].".jpg"; break;
  case "Note_Photos": $File_Name = $_POST['ID'].".jpg"; break;
  case "Part_Controlled_Photos": $File_Name = $_POST['ID'].".jpg"; break;
  case "Project_Photos": $File_Name = $_POST['ID'].".jpg"; break;
  case "Purchase_Quotes": $File_Name = $_POST['ID'].".pdf"; break;  
  case "Purchase_Requests": $File_Name = $_POST['ID'].".pdf"; break;  
  case "Purchase_Orders": $File_Name = $_POST['ID'].".pdf"; break;  
  case "Storage_Photos": $File_Name = $_POST['ID'].".jpg"; break;    
  case "Tasks_Documents": $File_Name = $_POST['ID'].".pdf"; break;
  case "Tasks_Photos": $File_Name = $_POST['ID'].".jpg"; break;
  case "Tool_Photos": $File_Name = $_POST['ID'].".jpg"; break; 
  
  default:
    echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\">Upload PDF Copy</td>";
}

//$Folder_Directory = '..\\'.$_POST['File_Folder']; // NOTE: Sometime triggers premission errors.
$Folder_Directory = $_SERVER['DOCUMENT_ROOT'].'/'.$_POST['File_Folder']; // NOTE: Sometime triggers premission errors.
echo $Folder_Directory."<br>";

$uploadFileCheckSuitable = true;

echo "<br>Check if folder exists: ";
if(is_dir($Folder_Directory)!=false){echo "[OK] Folder Exists [".$Folder_Directory."].";}else{echo "[X] Folder Does Not Exist [".$Folder_Directory."]."; $uploadFileCheckSuitable = false;}

echo "<br>Check if already uploaded: ";
//if(file_exists($Folder_Directory."\\".$File_Name)!=false){echo "[X] File Exists [".$File_Name."]."; $uploadFileCheckSuitable = false; }else{echo "[OK] File Does Not Exist [".$Folder_Directory."\\".$File_Name."]."; }
if(file_exists($Folder_Directory."/".$File_Name)!=false){echo "[X] File Exists [".$File_Name."]."; $uploadFileCheckSuitable = false; }else{echo "[OK] File Does Not Exist [".$Folder_Directory."/".$File_Name."]."; }

echo "<br>Check if file supplied: ";
if(!file_exists($_FILES['File_To_Upload']['tmp_name']) || !is_uploaded_file($_FILES['File_To_Upload']['tmp_name'])) {echo "[X] File Not Supplied."; $uploadFileCheckSuitable = false; }else{ echo "[OK] File Supplied."; }

if($uploadFileCheckSuitable==true){	
$File_Extension = pathinfo($_FILES['File_To_Upload']['name'], PATHINFO_EXTENSION);
echo "<br>Check if file extension: ";

switch ($_POST['File_Folder']) {
  case "Equipment_Photos": if($File_Extension=="jpg" || $File_Extension=="JPG"){echo "[OK] File Extension Correct [".$File_Extension."].";}else{echo "[X] File Extension Incorrect [".$File_Extension."]."; $uploadFileCheckSuitable = false;} break;
  case "Gap_Photos": if($File_Extension=="jpg" || $File_Extension=="JPG"){echo "[OK] File Extension Correct [".$File_Extension."].";}else{echo "[X] File Extension Incorrect [".$File_Extension."]."; $uploadFileCheckSuitable = false;} break;  
  case "Tasks_Photos": if($File_Extension=="jpg" || $File_Extension=="JPG"){echo "[OK] File Extension Correct [".$File_Extension."].";}else{echo "[X] File Extension Incorrect [".$File_Extension."]."; $uploadFileCheckSuitable = false;} break;
  case "Tasks_Photos": if($File_Extension=="jpg" || $File_Extension=="JPG"){echo "[OK] File Extension Correct [".$File_Extension."].";}else{echo "[X] File Extension Incorrect [".$File_Extension."]."; $uploadFileCheckSuitable = false;} break;
  case "Library": if($File_Extension=="pdf"){echo "[OK] File Extension Correct [".$File_Extension."].";}else{echo "[X] File Extension Incorrect [".$File_Extension."]."; $uploadFileCheckSuitable = false;} break;  
  default:
    echo "<td class=\"Details_Label_Cell{$Report_CSS_Insert}\">Upload PDF Copy</td>";
}

}

if($uploadFileCheckSuitable==true){
	echo "<br>File being uploaded: ";
	//move_uploaded_file($_FILES['File_To_Upload']['tmp_name'], $Folder_Directory."\\".$File_Name);	
	move_uploaded_file($_FILES['File_To_Upload']['tmp_name'], $Folder_Directory."/".$File_Name);	
	//if(file_exists($Folder_Directory."\\".$File_Name)!=false){echo "[OK] File Loaded [".$File_Name."].";}else{echo "[X] File Failed To Load [".$Folder_Directory."\\".$File_Name."]."; }
	if(file_exists($Folder_Directory."/".$File_Name)!=false){echo "[OK] File Loaded [".$File_Name."].";}else{echo "[X] File Failed To Load [".$Folder_Directory."/".$File_Name."]."; }
	}else{
	echo "<br>[X] File Was Not Uploaded.";
}

header('Location: '.$_POST['Previous_Page']);

}
?>


<?php

function Delete_From_Database($Database_Connection){

$Input_Array['MySQL_Action'] = "UPDATE ";
$Input_Array['MySQL_Table'] = $_POST['Table']." ";
$Input_Array['MySQL_Set'] = "SET ";
$Input_Array['MySQL_Filter'] = "WHERE `ID` = ".$_POST['ID']." ";
$Input_Array['MySQL_Order'] = "";
$Input_Array['MySQL_Limit'] = "";
$Input_Array['MySQL_Offset'] = "";

$Comma_Insert = "";

$Input_Array['MySQL_Set'] = $Input_Array['MySQL_Set']."`Deleted Date` = '".date("Y-m-d")."'";
$Comma_Insert = ",";

$Input_Array['MySQL_Set'] = $Input_Array['MySQL_Set']." ";

$MySQL_Command_Script = 
$Input_Array['MySQL_Action'].
$Input_Array['MySQL_Table'].
$Input_Array['MySQL_Set'].
$Input_Array['MySQL_Filter'].
$Input_Array['MySQL_Order'].
$Input_Array['MySQL_Limit'].
$Input_Array['MySQL_Offset'];

echo $MySQL_Command_Script; //TECHNICAL SUPPORT PURPOSES

if ($Database_Connection->query($MySQL_Command_Script) === TRUE) {
echo "<br>Record updated successfully";
} else {
echo "<br>Error updating record: " . $Database_Connection->error;
}



// //////////////////////////////////// VERSION CONTROL UPDATE SECTION
$Remove_Chars = array("`", " ");
$Table_Being_Modified = str_replace($Remove_Chars, '', $_POST['Table']);

echo "<br>";

if($Table_Being_Modified == "rec_instruction-steps"){	
$SQL_Column = "`Work Instruction ID`, `Change Description (Short)`, `Change Description`, `Modified Date`, `Modified By`";
$SQL_Value = "'".Basic_Filter_Input($_POST['Work_Instructions_ID'])."', 'Step Deleted', '[Auto Update] Step ID#: ".Basic_Filter_Input($_POST['ID'])." Deleted by ".Basic_Filter_Input($_SESSION['User_Name'])."', '".date("Y-m-d")."', '".Basic_Filter_Input($_SESSION['User_Name'])."'";	
Update_Version($Database_Connection, "rec_version-control", $SQL_Column, $SQL_Value);
}

if($Table_Being_Modified == "rec_instruction-documents"){	
$SQL_Column = "`Work Instruction ID`, `Change Description (Short)`, `Change Description`, `Modified Date`, `Modified By`";
$SQL_Value = "'".Basic_Filter_Input($_POST['Work_Instructions_ID'])."', 'Document Deleted', '[Auto Update] Document ID#: ".Basic_Filter_Input($_POST['ID'])." Deleted by ".Basic_Filter_Input($_SESSION['User_Name'])."', '".date("Y-m-d")."', '".Basic_Filter_Input($_SESSION['User_Name'])."'";	
Update_Version($Database_Connection, "rec_version-control", $SQL_Column, $SQL_Value);
}




echo "<br>";
echo "<br>";
echo "<form action=\"".$_POST['Previous_Page']."\"  method=\"post\">";
echo "<input class=\"Back\" type=\"submit\" value=\"Back\">";
echo "</form>";

header('Location: '.$_POST['Previous_Page']);

}

?>


<?php

//function New_To_Database($Database_Connection, $Data){
function New_To_Database($Database_Connection){



$Data['New_Link_Reference'] = ""; if(isset($_POST['New_Link_Reference'])){$Data['New_Link_Reference']=$_POST['New_Link_Reference'];}
$Data['Linking_Value'] = ""; if(isset($_POST['Linking_Value'])){$Data['Linking_Value']=$_POST['Linking_Value'];}
$Data['Additional_Data'] = ""; if(isset($_POST['Additional_Data'])){$Data['Additional_Data']=$_POST['Additional_Data'];}


echo "<br>";
echo "<br>";
echo "Test";

echo "<br>";
echo "<br>";
echo "Sent=>".$Data['Additional_Data']."<br>";

if($Data['Additional_Data']!=""){
$Additional_Data = explode(";", $Data['Additional_Data']);
$Additional_Data_Heading_Insert = ",`".str_replace(":","`,`", $Additional_Data[0])."`";
$Additional_Data_Values_Insert = ",'".str_replace(":","','", $Additional_Data[1])."'";
}else{
$Additional_Data_Heading_Insert = "";
$Additional_Data_Values_Insert = "";
}




$Input_Array['MySQL_Action'] = "INSERT INTO ";
$Input_Array['MySQL_Table'] = $_POST['Table']." ";
//$Input_Array['MySQL_Set'] = "SET ";
$Input_Array['MySQL_Set'] = "(`".$Data['New_Link_Reference']."`".$Additional_Data_Heading_Insert.") VALUES ('".$Data['Linking_Value']."'".$Additional_Data_Values_Insert.") ";
$Input_Array['MySQL_Filter'] = "";
$Input_Array['MySQL_Order'] = "";
$Input_Array['MySQL_Limit'] = "";
$Input_Array['MySQL_Offset'] = "";

$MySQL_Command_Script = 
$Input_Array['MySQL_Action'].
$Input_Array['MySQL_Table'].
$Input_Array['MySQL_Set'].
$Input_Array['MySQL_Filter'].
$Input_Array['MySQL_Order'].
$Input_Array['MySQL_Limit'].
$Input_Array['MySQL_Offset'];

echo "<br>";
echo "<br>";
echo $MySQL_Command_Script;

if ($Database_Connection->query($MySQL_Command_Script) === TRUE) {
echo "<br>Record updated successfully";
} else {
echo "<br>Error updating record: " . $Database_Connection->error;
}




// //////////////////////////////////// VERSION CONTROL UPDATE SECTION
$Remove_Chars = array("`", " ");
$Table_Being_Modified = str_replace($Remove_Chars, '', $_POST['Table']);

echo "<br>";
echo "Table: ".$Table_Being_Modified."<br>";

if($Table_Being_Modified == "rec_instruction-steps"){	
$SQL_Column = "`Work Instruction ID`, `Change Description (Short)`, `Change Description`, `Modified Date`, `Modified By`";
$SQL_Value = "'".Basic_Filter_Input($Data['Linking_Value'])."', 'Step Added', '[Auto Update] Step Added by ".Basic_Filter_Input($_SESSION['User_Name'])."', '".date("Y-m-d")."', '".Basic_Filter_Input($_SESSION['User_Name'])."'";	
Update_Version($Database_Connection, "rec_version-control", $SQL_Column, $SQL_Value);
}

if($Table_Being_Modified == "rec_instruction-documents"){	
$SQL_Column = "`Work Instruction ID`, `Change Description (Short)`, `Change Description`, `Modified Date`, `Modified By`";
$SQL_Value = "'".Basic_Filter_Input($Data['Linking_Value'])."', 'Document Added', '[Auto Update] Document Added by ".Basic_Filter_Input($_SESSION['User_Name'])."', '".date("Y-m-d")."', '".Basic_Filter_Input($_SESSION['User_Name'])."'";	
Update_Version($Database_Connection, "rec_version-control", $SQL_Column, $SQL_Value);
}





echo "<br>";
echo "<br>";
echo "<form action=\"".$_POST['Previous_Page']."\"  method=\"post\">";
echo "<input class=\"Back\" type=\"submit\" value=\"Back\">";
echo "</form>";


$Return_Address = $_POST['Previous_Page']."#".$_POST['Table_Major_Heading'];
//echo "Return Address: ".$Return_Address;
//header('Location: '.$Return_Address);
echo "<script> window.location.replace(\"".$Return_Address."\"); </script>";

}

?>


<?php

function Save_To_Database($Database_Connection){

$Input_Array['MySQL_Action'] = "UPDATE ";
$Input_Array['MySQL_Table'] = $_POST['Table']." ";
$Input_Array['MySQL_Set'] = "SET ";
$Input_Array['MySQL_Filter'] = "WHERE `ID` = ".$_POST['ID']." ";
$Input_Array['MySQL_Order'] = "";
$Input_Array['MySQL_Limit'] = "";
$Input_Array['MySQL_Offset'] = "";

$Comma_Insert = "";

//print_r($_POST);

foreach ($_POST as $key => $value) {

if($key!="ID" && $key!="Table_Major_Heading" && $key!="Previous_Page" && $key!="Submission_Button" && $key!="Table" && $key!="Last_Modified_Date"&& $key!="Last_Modified_by_User" && $key!="Last_Modified_Time" && $key!="Deleted_Date" && $key!="File_Folder"){

if($value!=""){$Value_Inset = "='".Basic_Filter_Input(str_replace("_", " ", $value))."'";}
else{$Value_Inset = "=NULL";}

$Input_Array['MySQL_Set'] = $Input_Array['MySQL_Set'].$Comma_Insert." `".Basic_Filter_Input(str_replace("_", " ", $key))."`".$Value_Inset;
$Comma_Insert = ",";
}

// if($key=="Deleted_Date"){
// if($value!=""){$Input_Array['MySQL_Set'] = $Input_Array['MySQL_Set'].$Comma_Insert." `".str_replace("_", " ", $key)."`='".str_replace("_", " ", Basic_Filter_Input($value))."'";}
// }

// if($key=="Last_Modified_Date"){
// $Input_Array['MySQL_Set'] = $Input_Array['MySQL_Set'].", `Last Modified Date`='".date("Y-m-d")."'";
// }

if($key=="Modified_Date"){
$Input_Array['MySQL_Set'] = $Input_Array['MySQL_Set'].", `Modified Date`='".date("Y-m-d")."'";
}

if($key=="Modified_By"){
$Input_Array['MySQL_Set'] = $Input_Array['MySQL_Set'].", `Modified By`='".$_SESSION['User_Name']."'";
}
}


$Input_Array['MySQL_Set'] = $Input_Array['MySQL_Set']." ";

$MySQL_Command_Script = 
$Input_Array['MySQL_Action'].
$Input_Array['MySQL_Table'].
$Input_Array['MySQL_Set'].
$Input_Array['MySQL_Filter'].
$Input_Array['MySQL_Order'].
$Input_Array['MySQL_Limit'].
$Input_Array['MySQL_Offset'];

//var_dump($_POST);

echo "<br>".$MySQL_Command_Script; //TECHNICAL SUPPORT PURPOSES
echo "<br>Basic Data Upload: ";

if ($Database_Connection->query($MySQL_Command_Script) === TRUE) {
echo "<b>Successful</b>";
} else {
echo "<b>Error</b> " . $Database_Connection->error;
}


if(isset($_POST['Impact_of_Compliance'])) {

$Matrix[0] = array(null, null,     null,     null,     null,     null,     null,     null,     null,     null,        null);
$Matrix[1] = array(null, "Low",    "Low",    "Low",    "Low",    "Low",    "Low",    "Low",    "Low",    "Medium",    "Medium");
$Matrix[2] = array(null, "Low",    "Low",    "Low",    "Low",    "Low",    "Low",    "Low",    "Low",    "Medium",    "Medium");
$Matrix[3] = array(null, "Low",    "Low",    "Low",    "Low",    "Medium", "Medium", "Medium", "Medium", "Medium",    "Medium");
$Matrix[4] = array(null, "Low",    "Low",    "Low",    "Low",    "Medium", "Medium", "Medium", "Medium", "Medium",    "Medium");
$Matrix[5] = array(null, "Low",    "Low",    "Low",    "Low",    "Medium", "Medium", "Medium", "Medium", "Medium",    "Medium");
$Matrix[6] = array(null, "Low",    "Low",    "Low",    "Low",    "Medium", "Medium", "Medium", "Medium", "Medium",    "Medium");
$Matrix[7] = array(null, "Low",    "Low",    "Medium", "Medium", "Medium", "Medium", "High",   "High",   "High",      "High");
$Matrix[8] = array(null, "Low",    "Low",    "Medium", "Medium", "Medium", "Medium", "High",   "High",   "High",      "High");
$Matrix[9] = array(null, "Medium", "Medium", "Medium", "Medium", "High",   "High",   "High",   "High",   "Very High", "Very High");
$Matrix[10] = array(null, "Medium", "Medium", "Medium", "Medium", "High",   "High",   "High",   "High",   "Very High", "Very High");

$Personnel_Safety_Sum = 0;
$Commerical_Risk_Sum = 0;
$Time_Factor_Sum = 0;

switch (str_replace("_", " ", $_POST['Impact_of_Compliance'])) {
    case "Compliant": $Personnel_Safety_Sum = $Personnel_Safety_Sum + 1; break;
    case "Minor Non-Compliance": $Personnel_Safety_Sum = $Personnel_Safety_Sum + 2; break;
	case "Exchange of Correspondence": $Personnel_Safety_Sum = $Personnel_Safety_Sum + 3; break;
	case "Unlawful Activity": $Personnel_Safety_Sum = $Personnel_Safety_Sum + 4; break;
	case "Prosecution": $Personnel_Safety_Sum = $Personnel_Safety_Sum + 5; break;
}	

switch (str_replace("_", " ", $_POST['Potential_for_Injury'])) {
    case "No Injury": $Personnel_Safety_Sum = $Personnel_Safety_Sum + 1; break;
    case "Self Administered On-Site Medical": $Personnel_Safety_Sum = $Personnel_Safety_Sum + 2; break;
	case "Assisted On-Site Medical": $Personnel_Safety_Sum = $Personnel_Safety_Sum + 3; break;
	case "Off-Site Medical": $Personnel_Safety_Sum = $Personnel_Safety_Sum + 4; break;
	case "Death": $Personnel_Safety_Sum = $Personnel_Safety_Sum + 5; break;
}	

switch (str_replace("_", " ", $_POST['Impact_of_Compliance'])) {
    case "Compliant": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 1; break;
    case "Minor Non-Compliance": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 2; break;
	case "Exchange of Correspondence": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 3; break;
	case "Unlawful Activity": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 4; break;
	case "Prosecution": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 5; break;
}	

switch (str_replace("_", " ", $_POST['Potential_Repair_Loss'])) {
    case "less than $1,000": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 1; break;
    case "less than $5,000": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 2; break;
	case "less than $20,000": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 3; break;
	case "less than $100,000": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 4; break;
	case "greater than $100,000": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 5; break;
}

switch (str_replace("_", " ", $_POST['Potential_Revenue_Loss'])) {
    case "less than $1,000": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 1; break;
    case "$1,000 - $10,000": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 2; break;
	case "$10,000 - $100,000": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 3; break;
	case "$100,000 - $1,000,00": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 4; break;
	case "greater than $1,000,000": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 5; break;
}

switch (str_replace("_", " ", $_POST['Potential_Customer_Loss'])) {
    case "less than $50,000": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 1; break;
    case "$50,000 - $200,000": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 2; break;
	case "$200,000 - $1,000,000": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 3; break;
	case "$1,000,000 - $10,000,000": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 4; break;
	case "greater than $10,000,000": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 5; break;
}

switch (str_replace("_", " ", $_POST['Potential_Dispute_Duration'])) {
    case "less than 2 Hours Loss of Service": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 1; break;
    case "2 - 4 Hours Loss of Service": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 2; break;
	case "greater than 4 Hours Loss of Service": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 3; break;
	case "greater than 24 Hours Part of Building OR 12 - 4 Hours Entire Building  Loss of Service": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 4; break;
	case "greater than 12 Hours Entire Building  Loss of Service": $Commerical_Risk_Sum = $Commerical_Risk_Sum + 5; break;
}

switch (str_replace("_", " ", $_POST['Likelihood_of_Occurrence'])) {
    case "Will Not Occur": $Time_Factor_Sum = $Time_Factor_Sum + 1; break;
    case "Not Likely to Occur": $Time_Factor_Sum = $Time_Factor_Sum + 2; break;
	case "Chances of Occurring Equal": $Time_Factor_Sum = $Time_Factor_Sum + 3; break;
	case "Likely to Occur": $Time_Factor_Sum = $Time_Factor_Sum + 4; break;
	case "Will Occur": $Time_Factor_Sum = $Time_Factor_Sum + 5; break;
}

switch (str_replace("_", " ", $_POST['Frequency_of_Occurrence'])) {
    case "Annually": $Time_Factor_Sum = $Time_Factor_Sum + 1; break;
    case "Monthly": $Time_Factor_Sum = $Time_Factor_Sum + 2; break;
	case "Fortnightly": $Time_Factor_Sum = $Time_Factor_Sum + 3; break;
	case "Weekly": $Time_Factor_Sum = $Time_Factor_Sum + 4; break;
	case "Daily": $Time_Factor_Sum = $Time_Factor_Sum + 5; break;
}

switch (str_replace("_", " ", $_POST['Exposure_of_Occurrence'])) {
    case "Minutes": $Time_Factor_Sum = $Time_Factor_Sum + 1; break;
    case "Hours": $Time_Factor_Sum = $Time_Factor_Sum + 2; break;
	case "Days": $Time_Factor_Sum = $Time_Factor_Sum + 3; break;
	case "Weeks": $Time_Factor_Sum = $Time_Factor_Sum + 4; break;
	case "Constant": $Time_Factor_Sum = $Time_Factor_Sum + 5; break;
}

$Personnel_Safety_Factor = ceil($Personnel_Safety_Sum);
$Commerical_Risk_Factor = ceil($Commerical_Risk_Sum / 2.5);
$Time_Factor_Factor = ceil($Time_Factor_Sum / 1.5);

// echo "<br>Personnel_Safety_Factor: ".$Personnel_Safety_Factor;
// echo "<br>Commerical_Risk_Factor: ".$Commerical_Risk_Factor;
// echo "<br>Time_Factor_Factor: ".$Time_Factor_Factor;
	
$Input_Array['MySQL_Set'] = "SET ";
$Input_Array['MySQL_Set'] = $Input_Array['MySQL_Set']."`Health Risk` = '".$Matrix[$Personnel_Safety_Factor][$Time_Factor_Factor]."', ";
$Input_Array['MySQL_Set'] = $Input_Array['MySQL_Set']. "`Commercial Risk` = '".$Matrix[$Commerical_Risk_Factor][$Time_Factor_Factor]."'";
$Input_Array['MySQL_Set'] = $Input_Array['MySQL_Set']. " ";

$MySQL_Command_Script = 
$Input_Array['MySQL_Action'].
$Input_Array['MySQL_Table'].
$Input_Array['MySQL_Set'].
$Input_Array['MySQL_Filter'].
$Input_Array['MySQL_Order'].
$Input_Array['MySQL_Limit'].
$Input_Array['MySQL_Offset'];

//echo "<br>".$MySQL_Command_Script; //TECHNICAL SUPPORT PURPOSES
echo "<br>Original Safety Data Upload: ";		
if ($Database_Connection->query($MySQL_Command_Script) === TRUE) {
echo "<b>Successful</b>";
} else {
echo "<b>Error</b> " . $Database_Connection->error;
}	
}



// //////////////////////////////////// VERSION CONTROL UPDATE SECTION
$Remove_Chars = array("`", " ");
$Table_Being_Modified = str_replace($Remove_Chars, '', $_POST['Table']);

echo "<br>";

if($Table_Being_Modified == "rec_instruction-steps"){	
$SQL_Column = "`Work Instruction ID`, `Change Description (Short)`, `Change Description`, `Modified Date`, `Modified By`";
$SQL_Value = "'".Basic_Filter_Input($_POST['Work_Instructions_ID'])."', 'Step Modified', '[Auto Update] Step ID#: ".Basic_Filter_Input($_POST['ID'])." Modified by ".Basic_Filter_Input($_SESSION['User_Name'])."', '".date("Y-m-d")."', '".Basic_Filter_Input($_SESSION['User_Name'])."'";	
Update_Version($Database_Connection, "rec_version-control", $SQL_Column, $SQL_Value);
}

if($Table_Being_Modified == "rec_instruction-documents"){	
$SQL_Column = "`Work Instruction ID`, `Change Description (Short)`, `Change Description`, `Modified Date`, `Modified By`";
$SQL_Value = "'".Basic_Filter_Input($_POST['Work_Instructions_ID'])."', 'Document Modified', '[Auto Update] Document ID#: ".Basic_Filter_Input($_POST['ID'])." Modified by ".Basic_Filter_Input($_SESSION['User_Name'])."', '".date("Y-m-d")."', '".Basic_Filter_Input($_SESSION['User_Name'])."'";	
Update_Version($Database_Connection, "rec_version-control", $SQL_Column, $SQL_Value);
}

if($Table_Being_Modified == "reg_work-instructions"){	
$SQL_Column = "`Work Instruction ID`, `Change Description (Short)`, `Change Description`, `Modified Date`, `Modified By`";
$SQL_Value = "'".Basic_Filter_Input($_POST['ID'])."', 'Details Modified', '[Auto Update] Main Description Modified by ".Basic_Filter_Input($_SESSION['User_Name'])."', '".date("Y-m-d")."', '".Basic_Filter_Input($_SESSION['User_Name'])."'";	
Update_Version($Database_Connection, "rec_version-control", $SQL_Column, $SQL_Value);
}





echo "<br>";
echo "<br>";
echo "<form action=\"".$_POST['Previous_Page']."\"  method=\"post\">";
echo "<input class=\"Back\" type=\"submit\" value=\"Back\">";
echo "</form>";

$Return_Address = $_POST['Previous_Page']."#".$_POST['Table_Major_Heading'];
//echo "Return Address: ".$Return_Address;
//header('Location: '.$_POST['Previous_Page']);
echo "<script> window.location.replace(\"".$Return_Address."\"); </script>";



}

?>




<?php // INSERT ROW ITEM

function Update_Version($Database_Connection, $Table, $SQL_Column, $SQL_Value){

$MySQL_Command_Script = "";

$SQL_Prefix = "INSERT INTO `{$Table}` (";
//$SQL_Column = "";
$SQL_Join = ") VALUES (";
//$SQL_Value = "";
$SQL_Suffix = ");";

$MySQL_Command_Script = $SQL_Prefix.$SQL_Column.$SQL_Join.$SQL_Value.$SQL_Suffix;
echo "SQL(3) => ".$MySQL_Command_Script."<br>";

if($MySQL_Command_Script!=null){
if ($Database_Connection->query($MySQL_Command_Script) === TRUE) {
echo "<BR>INSERT => ".$MySQL_Command_Script." ";
echo "Successful";
} else {
echo "<BR>INSERT => ".$MySQL_Command_Script." ";
echo "Error " . $Database_Connection->error;
}
}

}

?>



