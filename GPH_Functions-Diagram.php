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
// PAGE CREATED DATE: 2022-06-30

// DATE   		|| NAME 					|| MODIFICATION
// 2022-06-30 	|| Phillip Kraguljac 		|| v1.8 (Created)
// 2022-07-11 	|| Phillip Kraguljac 		|| v1.8

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<html>

<div id="Main_Body" style="zoom:1.00;">

<head>

<?php

include $_SERVER['DOCUMENT_ROOT'].'/Functions/Database_Connections.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Filter_Tools.php';

?>

</head>

<?php if(isset($_GET['ID'])){$Item_ID = Basic_Filter_Input($_GET['ID']);}else{$Item_ID = null;} ?>



<?php

$Data_Array_Primary;
$Data_Array_Secondary;

$Data_Array_Input = array(array());
$Data_Array_Internal = array(array());
$Data_Array_Output = array(array());



?>



<?php

//echo "<BR>***PRIMARY DATA EXTRACTION***<BR>";

$Indexer = 0;
$Display_Array['MySQL_Action']="SELECT * ";
$Display_Array['MySQL_Table']="FROM `reg_design-functionality` ";
$Display_Array['MySQL_Filter']="WHERE `ID` = {$Item_ID} ";
$Display_Array['MySQL_Order']="";
$Display_Array['MySQL_Limit']="";
$Display_Array['MySQL_Offset']="";
$Internal_Data['Table_Name']=$Table_Name = str_replace(array("FROM ", "`", " "), "", $Display_Array['MySQL_Table']);

$Columns = array();
$Columns = Get_Column_Names($Database_Connection, $Table_Name);

$sql = $Display_Array['MySQL_Action'].$Display_Array['MySQL_Table'].$Display_Array['MySQL_Filter'].$Display_Array['MySQL_Order'].$Display_Array['MySQL_Limit'].$Display_Array['MySQL_Offset'];
//echo "SQL(2) => ".$sql."<br>";

$result = mysqli_query($Database_Connection, $sql);
//var_dump($Columns);

while($row = mysqli_fetch_assoc($result)) {	
	
	for ($x = 0; $x < count($Columns); $x++) {
		//echo "<br>READ => ".$Columns[$x]." : ".$row[$Columns[$x]];	
		$Data_Array_Primary[$Columns[$x]] = $row[$Columns[$x]];
	}	
	$Indexer++;	
}

//var_dump($Data_Array_Primary);

?>


<?php

//echo "<BR>***SECONDARY DATA EXTRACTION***<BR>";

$Input_Item_Counter = 1;
$Internal_Item_Counter = 1;
$Output_Item_Counter = 1;

$Display_Array['MySQL_Action']="SELECT * ";
$Display_Array['MySQL_Table']="FROM `rec_functions` ";
$Display_Array['MySQL_Filter']="WHERE `Design Functionality ID` = {$Item_ID} ";
$Display_Array['MySQL_Order']="";
$Display_Array['MySQL_Limit']="";
$Display_Array['MySQL_Offset']="";
$Internal_Data['Table_Name']=$Table_Name = str_replace(array("FROM ", "`", " "), "", $Display_Array['MySQL_Table']);

$Columns = array();
$Columns = Get_Column_Names($Database_Connection, $Table_Name);

$sql = $Display_Array['MySQL_Action'].$Display_Array['MySQL_Table'].$Display_Array['MySQL_Filter'].$Display_Array['MySQL_Order'].$Display_Array['MySQL_Limit'].$Display_Array['MySQL_Offset'];
//echo "SQL(2) => ".$sql."<br>";

$result = mysqli_query($Database_Connection, $sql);
//var_dump($Columns);


while($row = mysqli_fetch_assoc($result)) {	
	
	if($row['Type']=="Input"){
		for ($x = 0; $x < count($Columns); $x++) {
			//echo "<br>READ (INPUT) => ".$Columns[$x]." : ".$row[$Columns[$x]];	
				$Data_Array_Input[$Input_Item_Counter][$Columns[$x]] = $row[$Columns[$x]]; 
			}
		$Input_Item_Counter++;
	}
	
	if($row['Type']=="Internal Process"){		
		for ($x = 0; $x < count($Columns); $x++) {
			//echo "<br>READ (INTERNAL) => ".$Columns[$x]." : ".$row[$Columns[$x]];	
				$Data_Array_Internal[$Internal_Item_Counter][$Columns[$x]] = $row[$Columns[$x]];
			}
		$Internal_Item_Counter++;
	}
	
	
	
	if($row['Type']=="Output"){
		for ($x = 0; $x < count($Columns); $x++) {
			//echo "<br>READ (OUTPUT) => ".$Columns[$x]." : ".$row[$Columns[$x]];	
				$Data_Array_Output[$Output_Item_Counter][$Columns[$x]] = $row[$Columns[$x]]; 
			}
		$Output_Item_Counter++;
	}
}

?>







<?php

$Function_Description = "...";

?>


<canvas id="myCanvas" width="1000" height="5000"
style="border:1px solid #c3c3c3;">
Your browser does not support the canvas element.
</canvas>


<script>
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");


<?php

echo "ctx.fillStyle = \"#FFFFFF\";";
echo "ctx.fillRect(0, 0, 1000, 5000);";
echo "ctx.stroke();";


?>


<?php

$Function_Block_Height = 0;
$Function_Block_Low_Position_Y = 340;

$FB_Body_Start_Position_X = 300;
$FB_Body_Start_Position_Y = 200;
$FB_Body_Width = 400;

?>


var Main_Body_X = 300;
var Main_Body_Y = 150;
var Main_Body_Width = 400;


<?php // THE FOLLOWING IS FOR INPUT FUNCTION BLOCKS


$Input_Indexer = 0;

$Output_Indexer = 0;
$Padding_Upper_Y = 40;
$Point_Start_Position_X = 290;
$Point_Start_Position_Y = 160;
$Point_Height = 80;

echo "ctx.font = \"20px Arial\";";
echo "ctx.fillStyle = \"#000000\";";
echo "ctx.fillText(\"INPUTS\", 120, 100);";

for ($x = 1; $x < (sizeof($Data_Array_Input)); $x++) {

$Point_2_Position_X = 25;
$Point_3_Position_X = 250;
$Point_4_Position_X = 225;
$Point_5_Position_X = 250;
$Point_6_Position_X = 25;
$Point_7_Position_X = 25;

$Point_1_Position_Y = $Point_Start_Position_Y + ($Input_Indexer * $Point_Height) + $Padding_Upper_Y + ($Point_Height / 2);
$Point_2_Position_Y = $Point_1_Position_Y + ($Point_Height / 2) - 5;
$Point_3_Position_Y = $Point_1_Position_Y + ($Point_Height / 2) - 5;
$Point_4_Position_Y = $Point_1_Position_Y;
$Point_5_Position_Y = $Point_1_Position_Y - ($Point_Height / 2) + 5;
$Point_6_Position_Y = $Point_1_Position_Y - ($Point_Height / 2) + 5;
$Point_7_Position_Y = $Point_1_Position_Y - ($Point_Height / 2) + 5;

if($Function_Block_Low_Position_Y < $Point_1_Position_Y + ($Point_Height + 20)){$Function_Block_Low_Position_Y = $Point_1_Position_Y + $Point_Height + 20;}
	
echo "ctx.moveTo({$Point_Start_Position_X}, {$Point_1_Position_Y});";
echo "ctx.lineTo(({$Point_Start_Position_X} - {$Point_2_Position_X}), ({$Point_2_Position_Y}));";
echo "ctx.lineTo(({$Point_Start_Position_X} - {$Point_3_Position_X}), ({$Point_3_Position_Y}));";
echo "ctx.lineTo(({$Point_Start_Position_X} - {$Point_4_Position_X}), ({$Point_4_Position_Y}));";
echo "ctx.lineTo(({$Point_Start_Position_X} - {$Point_5_Position_X}), ({$Point_5_Position_Y}));";
echo "ctx.lineTo(({$Point_Start_Position_X} - {$Point_6_Position_X}), ({$Point_6_Position_Y}));";
echo "ctx.lineTo({$Point_Start_Position_X}, {$Point_1_Position_Y});";
echo "ctx.stroke();";

$Text_Start_Position_Y = $Point_1_Position_Y - 20;


echo "ctx.font = \"10px Arial\";";
echo "ctx.fillStyle = \"#000000\";";

echo "ctx.fillText(\"ID:\", ({$Point_Start_Position_X} - 220), {$Text_Start_Position_Y});";
echo "ctx.fillText(\"".$Data_Array_Input[$x]['ID']."\", ({$Point_Start_Position_X} - 160), {$Text_Start_Position_Y});";

echo "ctx.fillText(\"Status:\", ({$Point_Start_Position_X} - 220), {$Text_Start_Position_Y} + 10);";
echo "ctx.fillText(\"".$Data_Array_Input[$x]['Mode']."\", ({$Point_Start_Position_X} - 160), {$Text_Start_Position_Y} + 10);";


$Original_Description_String = wordwrap($Data_Array_Input[$x]['Description'], 25, "\n");
$Lines = preg_split("/\r\n|\r|\n/", $Original_Description_String);

echo "ctx.fillText(\"Description:\", ({$Point_Start_Position_X} - 220), {$Text_Start_Position_Y} + 20);";
if(isset($Lines[0])){echo "ctx.fillText(\"".$Lines[0]."\", ({$Point_Start_Position_X} - 160), {$Text_Start_Position_Y} + 20);";}
if(isset($Lines[1])){echo "ctx.fillText(\"".$Lines[1]."\", ({$Point_Start_Position_X} - 160), {$Text_Start_Position_Y} + 30);";}
if(isset($Lines[2])){echo "ctx.fillText(\"".$Lines[2]."\", ({$Point_Start_Position_X} - 160), {$Text_Start_Position_Y} + 40);";}
if(isset($Lines[3])){echo "ctx.fillText(\"".$Lines[3]."\", ({$Point_Start_Position_X} - 160), {$Text_Start_Position_Y} + 50);";}


$Input_Indexer++;

}

?>


<?php // THE FOLLOWING IS FOR THE INTERNAL FUNCTION BLOCKS

$Internal_Indexer = 0;

$Padding_Upper_Y = 40;
$Point_Start_Position_X = 320;
$Point_Start_Position_Y = 160;
$Point_Height = 80;

echo "ctx.font = \"20px Arial\";";
echo "ctx.fillStyle = \"#000000\";";
echo "ctx.fillText(\"INTERNAL PROCESSES\", 380, 100);";

for ($x = 1; $x < (sizeof($Data_Array_Internal)); $x++) {

$Point_1_Position_Y = $Point_Start_Position_Y + ($Internal_Indexer * $Point_Height) + $Padding_Upper_Y + 10;

if($Function_Block_Low_Position_Y < $Point_1_Position_Y + ($Point_Height + 20)){$Function_Block_Low_Position_Y = $Point_1_Position_Y + $Point_Height + 10 + $Padding_Upper_Y;}

echo "ctx.fillStyle = \"#000000\";";
echo "ctx.rect({$Point_Start_Position_X}, {$Point_1_Position_Y}, 360, {$Point_Height} - 10);";
echo "ctx.stroke();";

echo "ctx.font = \"10px Arial\";";
echo "ctx.fillStyle = \"#000000\";";
echo "ctx.fillText(\"ID:\", ({$Point_Start_Position_X} + 10), {$Point_1_Position_Y} + 15);";
echo "ctx.fillText(\"".$Data_Array_Internal[$x]['ID']."\", ({$Point_Start_Position_X} + 65), {$Point_1_Position_Y} + 15);";

echo "ctx.fillText(\"Status:\", ({$Point_Start_Position_X} + 10), {$Point_1_Position_Y} + 25);";
echo "ctx.fillText(\"".$Data_Array_Internal[$x]['Mode']."\", ({$Point_Start_Position_X} + 65), {$Point_1_Position_Y} + 25);";

$Original_Description_String = wordwrap($Data_Array_Internal[$x]['Description'], 60, "\n");
$Lines = preg_split("/\r\n|\r|\n/", $Original_Description_String);

echo "ctx.fillText(\"Description:\", ({$Point_Start_Position_X} + 10), {$Point_1_Position_Y} + 35);";
if(isset($Lines[0])){echo "ctx.fillText(\"".$Lines[0]."\", ({$Point_Start_Position_X} + 65), {$Point_1_Position_Y} + 35);";}
if(isset($Lines[1])){echo "ctx.fillText(\"".$Lines[1]."\", ({$Point_Start_Position_X} + 65), {$Point_1_Position_Y} + 45);";}
if(isset($Lines[2])){echo "ctx.fillText(\"".$Lines[2]."\", ({$Point_Start_Position_X} + 65), {$Point_1_Position_Y} + 55);";}
if(isset($Lines[3])){echo "ctx.fillText(\"".$Lines[3]."\", ({$Point_Start_Position_X} + 65), {$Point_1_Position_Y} + 65);";}


$Internal_Indexer++;

}

?>


<?php // THE FOLLOWING IS FOR THE OUTPUT BLOCKS

$Output_Indexer = 0;

$Padding_Upper_Y = 40;
$Point_Start_Position_X = 960;
$Point_Start_Position_Y = 160;
$Point_Height = 80;

echo "ctx.font = \"20px Arial\";";
echo "ctx.fillStyle = \"#000000\";";
echo "ctx.fillText(\"OUTPUTS\", 780, 100);";

for ($x = 1; $x < (sizeof($Data_Array_Output)); $x++) {

$Point_2_Position_X = 25;
$Point_3_Position_X = 250;
$Point_4_Position_X = 225;
$Point_5_Position_X = 250;
$Point_6_Position_X = 25;
$Point_7_Position_X = 25;

$Point_1_Position_Y = $Point_Start_Position_Y + ($Output_Indexer * $Point_Height) + $Padding_Upper_Y + ($Point_Height / 2);
$Point_2_Position_Y = $Point_1_Position_Y + ($Point_Height / 2) - 5;
$Point_3_Position_Y = $Point_1_Position_Y + ($Point_Height / 2) - 5;
$Point_4_Position_Y = $Point_1_Position_Y;
$Point_5_Position_Y = $Point_1_Position_Y - ($Point_Height / 2) + 5;
$Point_6_Position_Y = $Point_1_Position_Y - ($Point_Height / 2) + 5;
$Point_7_Position_Y = $Point_1_Position_Y - ($Point_Height / 2) + 5;

if($Function_Block_Low_Position_Y < $Point_1_Position_Y + ($Point_Height + 20)){$Function_Block_Low_Position_Y = $Point_1_Position_Y + $Point_Height + 20;}

echo "ctx.moveTo({$Point_Start_Position_X}, {$Point_1_Position_Y});";
echo "ctx.lineTo(({$Point_Start_Position_X} - {$Point_2_Position_X}), ({$Point_2_Position_Y}));";
echo "ctx.lineTo(({$Point_Start_Position_X} - {$Point_3_Position_X}), ({$Point_3_Position_Y}));";
echo "ctx.lineTo(({$Point_Start_Position_X} - {$Point_4_Position_X}), ({$Point_4_Position_Y}));";
echo "ctx.lineTo(({$Point_Start_Position_X} - {$Point_5_Position_X}), ({$Point_5_Position_Y}));";
echo "ctx.lineTo(({$Point_Start_Position_X} - {$Point_6_Position_X}), ({$Point_6_Position_Y}));";
echo "ctx.lineTo({$Point_Start_Position_X}, {$Point_1_Position_Y});";
echo "ctx.stroke();";

$Text_Start_Position_Y = $Point_1_Position_Y - 20;


echo "ctx.font = \"10px Arial\";";
echo "ctx.fillStyle = \"#000000\";";

echo "ctx.fillText(\"ID:\", ({$Point_Start_Position_X} - 220), {$Text_Start_Position_Y});";
echo "ctx.fillText(\"".$Data_Array_Output[$x]['ID']."\", ({$Point_Start_Position_X} - 160), {$Text_Start_Position_Y});";

echo "ctx.fillText(\"Status:\", ({$Point_Start_Position_X} - 220), {$Text_Start_Position_Y} + 10);";
echo "ctx.fillText(\"".$Data_Array_Output[$x]['Mode']."\", ({$Point_Start_Position_X} - 160), {$Text_Start_Position_Y} + 10);";


$Original_Description_String = wordwrap($Data_Array_Output[$x]['Description'], 25, "\n");
$Lines = preg_split("/\r\n|\r|\n/", $Original_Description_String);

echo "ctx.fillText(\"Description:\", ({$Point_Start_Position_X} - 220), {$Text_Start_Position_Y} + 20);";
if(isset($Lines[0])){echo "ctx.fillText(\"".$Lines[0]."\", ({$Point_Start_Position_X} - 160), {$Text_Start_Position_Y} + 20);";}
if(isset($Lines[1])){echo "ctx.fillText(\"".$Lines[1]."\", ({$Point_Start_Position_X} - 160), {$Text_Start_Position_Y} + 30);";}
if(isset($Lines[2])){echo "ctx.fillText(\"".$Lines[2]."\", ({$Point_Start_Position_X} - 160), {$Text_Start_Position_Y} + 40);";}
if(isset($Lines[3])){echo "ctx.fillText(\"".$Lines[3]."\", ({$Point_Start_Position_X} - 160), {$Text_Start_Position_Y} + 50);";}
 



//wordwrap($description, 40, "<br>\n")

$Output_Indexer++;

}

?>


<?php // THE FOLLOWING IS FOR THE MAIN BODY


$Function_Block_Height = $Function_Block_Low_Position_Y -($FB_Body_Start_Position_Y + 50);

echo "ctx.fillStyle = \"#F8F8F8\";";
echo "ctx.fillRect(Main_Body_X, Main_Body_Y, Main_Body_Width, 50);";
echo "ctx.stroke();";

echo "ctx.fillStyle = \"#000000\";";
echo "ctx.rect(Main_Body_X, Main_Body_Y, Main_Body_Width, 50);";
echo "ctx.stroke();";

echo "ctx.fillText(\"Status:\", (Main_Body_X + 10), Main_Body_Y + 15);";
echo "ctx.fillText(\"".$Data_Array_Primary['ID']."\", (Main_Body_X + 80), Main_Body_Y + 15);";

$Original_Description_String = $Data_Array_Primary['Description'];
$Lines = str_split($Original_Description_String, 25);

echo "ctx.fillText(\"Description:\", (Main_Body_X + 10), Main_Body_Y + 25);";
if(isset($Lines[0])){echo "ctx.fillText(\"".$Lines[0]."\", (Main_Body_X + 80), Main_Body_Y + 25);";}
if(isset($Lines[1])){echo "ctx.fillText(\"".$Lines[1]."\", (Main_Body_X + 80), Main_Body_Y + 35);";}
if(isset($Lines[2])){echo "ctx.fillText(\"".$Lines[2]."\", (Main_Body_X + 80), Main_Body_Y + 45);";}
if(isset($Lines[3])){echo "ctx.fillText(\"".$Lines[3]."\", (Main_Body_X + 80), Main_Body_Y + 55);";}


echo "ctx.fillStyle = \"#000000\";";
echo "ctx.rect({$FB_Body_Start_Position_X}, ({$FB_Body_Start_Position_Y}), {$FB_Body_Width}, {$Function_Block_Height});";
echo "ctx.stroke();";




?>


</script>


</div>
</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 


<?php // FUNCTIONS ?>


<?php

function Get_Column_Names($Database_Connection, $Table){

//echo "<BR>>>>COLUMN DATA<BR>";

$Column_Names = array();

//echo "COLUMNS = > ";

$i = 0;
$MySQL_Command_Script = "SELECT COLUMN_NAME, DATA_TYPE 
FROM INFORMATION_SCHEMA.COLUMNS
WHERE `TABLE_SCHEMA`='main_database' 
AND `TABLE_NAME`='{$Table}';";
$result = $Database_Connection->query($MySQL_Command_Script);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
$Column_Types[$row['COLUMN_NAME']] = $row['DATA_TYPE'];
$Column_Names[$i] = $row['COLUMN_NAME'];
//echo $Column_Names[$i].", ";

if($i < mysqli_num_rows($result)){$i = $i + 1;}

}} else {}

//echo "<br>";

return $Column_Names;

}

?>
