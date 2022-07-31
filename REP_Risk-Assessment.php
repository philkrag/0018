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
// PAGE CREATED DATE: 2021-03-24

// DATE   		|| NAME 					|| MODIFICATION
// 2021-03-24 	|| Phillip Kraguljac 		|| v1.5 (Created)
// 2022-07-28 	|| Phillip Kraguljac 		|| v1.8

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>

<html>

<div id="Main_Body">

<head>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Header_Basic.php';?>

<title>Risk Assessment</title>
</head>
<body>


<?php

$Item_Index = 1;
$Risk_Assessment_Item_Data = array(array());

?>


<?php // EXTRACT DETAIL DATA

//echo "<BR>***DETAILS***<BR>";

$Display_Array['MySQL_Action']="SELECT * ";
$Display_Array['MySQL_Table']="FROM `reg_risk-assessment-points` ";
$Display_Array['MySQL_Filter']="";
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

$Index_Row = 0;
while($row = mysqli_fetch_assoc($result)) {	
	
	for ($x = 0; $x < count($Columns); $x++) {
		$Risk_Assessment_Item_Data[$Index_Row][$Columns[$x]] = $row[$Columns[$x]];
	}
	$Index_Row++;
}

?>

For all items within the following list, which has been ticked as '<b>Yes</b>', then create a <b>Gap / Hazard</b> item within the associated <b>Device / Equipment</b> (<a href="REC-LST_Equipment.php">Equipment List Page</a>).



<br>
<h3 class="Heading_3_Report">Systematic Risk(s)</h3>

<table class="Details_Table_Report" style="width:100%">

<col width="50px">
<col width="*">
<col width="25px">
<col width="25px">
<col width="120px">

  <tr>
    <th class="Details_Column_Heading_Report">#</th>
    <th class="Details_Column_Heading_Report">Detail</th>
	<th class="Details_Column_Heading_Report">Yes</th>
	<th class="Details_Column_Heading_Report">No</th>
	<th class="Details_Column_Heading_Report">Gap / Hazard ID</th>
  </tr>
  
<?php
for ($x = 0; $x < Count($Risk_Assessment_Item_Data); $x++) {
	if($Risk_Assessment_Item_Data[$x]['Category'] == "Systematic Risk" ){
		echo "<tr>";		
		echo "<td class=\"Details_Value_Cell_Report\">".$Item_Index."</td>"; $Item_Index++;
		echo "<td class=\"Details_Value_Cell_Report\">".$Risk_Assessment_Item_Data[$x]['Details']."</td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\">.......................</td>";
		echo "</tr>";
	}
}
?>
  
</table>


<!-- NEXT SECTION -->
<br>
<h3 class="Heading_3_Report">Unsystematic Risk(s)</h3>

<table class="Details_Table_Report" style="width:100%">

<col width="50px">
<col width="*">
<col width="25px">
<col width="25px">
<col width="120px">

  <tr>
    <th class="Details_Column_Heading_Report">#</th>
    <th class="Details_Column_Heading_Report">Detail</th>
	<th class="Details_Column_Heading_Report">Yes</th>
	<th class="Details_Column_Heading_Report">No</th>
	<th class="Details_Column_Heading_Report">Gap / Hazard ID</th>
  </tr>

<?php
for ($x = 0; $x < Count($Risk_Assessment_Item_Data); $x++) {
	if($Risk_Assessment_Item_Data[$x]['Category'] == "Unsystematic Risk" ){
		echo "<tr>";
		echo "<td class=\"Details_Value_Cell_Report\">".$Item_Index."</td>"; $Item_Index++;
		echo "<td class=\"Details_Value_Cell_Report\">".$Risk_Assessment_Item_Data[$x]['Details']."</td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\">.......................</td>";
		echo "</tr>";
	}
}
?>

</table>


<!-- NEXT SECTION -->
<br>
<h3 class="Heading_3_Report">Political / Regulatory Risk(s)</h3>

<table class="Details_Table_Report" style="width:100%">

<col width="50px">
<col width="*">
<col width="25px">
<col width="25px">
<col width="120px">

  <tr>
    <th class="Details_Column_Heading_Report">#</th>
    <th class="Details_Column_Heading_Report">Detail</th>
	<th class="Details_Column_Heading_Report">Yes</th>
	<th class="Details_Column_Heading_Report">No</th>
	<th class="Details_Column_Heading_Report">Gap / Hazard ID</th>
  </tr>

<?php
for ($x = 0; $x < Count($Risk_Assessment_Item_Data); $x++) {
	if($Risk_Assessment_Item_Data[$x]['Category'] == "Political / Regulatory Risk" ){
		echo "<tr>";
		echo "<td class=\"Details_Value_Cell_Report\">".$Item_Index."</td>"; $Item_Index++;
		echo "<td class=\"Details_Value_Cell_Report\">".$Risk_Assessment_Item_Data[$x]['Details']."</td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\">.......................</td>";
		echo "</tr>";
	}
}
?>

</table>


<!-- NEXT SECTION -->
<br>
<h3 class="Heading_3_Report">Financial Risk(s)</h3>

<table class="Details_Table_Report" style="width:100%">

<col width="50px">
<col width="*">
<col width="25px">
<col width="25px">
<col width="120px">

  <tr>
    <th class="Details_Column_Heading_Report">#</th>
    <th class="Details_Column_Heading_Report">Detail</th>
	<th class="Details_Column_Heading_Report">Yes</th>
	<th class="Details_Column_Heading_Report">No</th>
	<th class="Details_Column_Heading_Report">Gap / Hazard ID</th>
  </tr>

<?php
for ($x = 0; $x < Count($Risk_Assessment_Item_Data); $x++) {
	if($Risk_Assessment_Item_Data[$x]['Category'] == "Financial Risk" ){
		echo "<tr>";
		echo "<td class=\"Details_Value_Cell_Report\">".$Item_Index."</td>"; $Item_Index++;
		echo "<td class=\"Details_Value_Cell_Report\">".$Risk_Assessment_Item_Data[$x]['Details']."</td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\">.......................</td>";
		echo "</tr>";
	}
}
?>

</table>


<!-- NEXT SECTION -->
<br>
<h3 class="Heading_3_Report">Environmental Risk(s)</h3>

<table class="Details_Table_Report" style="width:100%">

<col width="50px">
<col width="*">
<col width="25px">
<col width="25px">
<col width="120px">

  <tr>
    <th class="Details_Column_Heading_Report">#</th>
    <th class="Details_Column_Heading_Report">Detail</th>
	<th class="Details_Column_Heading_Report">Yes</th>
	<th class="Details_Column_Heading_Report">No</th>
	<th class="Details_Column_Heading_Report">Gap / Hazard ID</th>
  </tr>

<?php
for ($x = 0; $x < Count($Risk_Assessment_Item_Data); $x++) {
	if($Risk_Assessment_Item_Data[$x]['Category'] == "Environmental Risk" ){
		echo "<tr>";
		echo "<td class=\"Details_Value_Cell_Report\">".$Item_Index."</td>"; $Item_Index++;
		echo "<td class=\"Details_Value_Cell_Report\">".$Risk_Assessment_Item_Data[$x]['Details']."</td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\">.......................</td>";
		echo "</tr>";
	}
}
?>

</table>


<!-- NEXT SECTION -->
<br>
<h3 class="Heading_3_Report">Energy Source Risk(s)</h3>

<table class="Details_Table_Report" style="width:100%">

<col width="50px">
<col width="*">
<col width="25px">
<col width="25px">
<col width="120px">

  <tr>
    <th class="Details_Column_Heading_Report">#</th>
    <th class="Details_Column_Heading_Report">Detail</th>
	<th class="Details_Column_Heading_Report">Yes</th>
	<th class="Details_Column_Heading_Report">No</th>
	<th class="Details_Column_Heading_Report">Gap / Hazard ID</th>
  </tr>

<?php
for ($x = 0; $x < Count($Risk_Assessment_Item_Data); $x++) {
	if($Risk_Assessment_Item_Data[$x]['Category'] == "Energy Source Risk" ){
		echo "<tr>";
		echo "<td class=\"Details_Value_Cell_Report\">".$Item_Index."</td>"; $Item_Index++;
		echo "<td class=\"Details_Value_Cell_Report\">".$Risk_Assessment_Item_Data[$x]['Details']."</td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\">.......................</td>";
		echo "</tr>";
	}
}
?>

</table>


<!-- NEXT SECTION -->
<br>
<h3 class="Heading_3_Report">Operational Risk(s)</h3>

<table class="Details_Table_Report" style="width:100%">

<col width="50px">
<col width="*">
<col width="25px">
<col width="25px">
<col width="120px">

  <tr>
    <th class="Details_Column_Heading_Report">#</th>
    <th class="Details_Column_Heading_Report">Detail</th>
	<th class="Details_Column_Heading_Report">Yes</th>
	<th class="Details_Column_Heading_Report">No</th>
	<th class="Details_Column_Heading_Report">Gap / Hazard ID</th>
  </tr>

<?php
for ($x = 0; $x < Count($Risk_Assessment_Item_Data); $x++) {
	if($Risk_Assessment_Item_Data[$x]['Category'] == "Operational Risk" ){
		echo "<tr>";
		echo "<td class=\"Details_Value_Cell_Report\">".$Item_Index."</td>"; $Item_Index++;
		echo "<td class=\"Details_Value_Cell_Report\">".$Risk_Assessment_Item_Data[$x]['Details']."</td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\">.......................</td>";
		echo "</tr>";
	}
}
?>

</table>


<!-- NEXT SECTION -->
<br>
<h3 class="Heading_3_Report">Security Risk(s)</h3>

<table class="Details_Table_Report" style="width:100%">

<col width="50px">
<col width="*">
<col width="25px">
<col width="25px">
<col width="120px">

  <tr>
    <th class="Details_Column_Heading_Report">#</th>
    <th class="Details_Column_Heading_Report">Detail</th>
	<th class="Details_Column_Heading_Report">Yes</th>
	<th class="Details_Column_Heading_Report">No</th>
	<th class="Details_Column_Heading_Report">Gap / Hazard ID</th>
  </tr>

<?php
for ($x = 0; $x < Count($Risk_Assessment_Item_Data); $x++) {
	if($Risk_Assessment_Item_Data[$x]['Category'] == "Security Risk" ){
		echo "<tr>";
		echo "<td class=\"Details_Value_Cell_Report\">".$Item_Index."</td>"; $Item_Index++;
		echo "<td class=\"Details_Value_Cell_Report\">".$Risk_Assessment_Item_Data[$x]['Details']."</td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\">.......................</td>";
		echo "</tr>";
	}
}
?>

</table>


<!-- NEXT SECTION -->
<br>
<h3 class="Heading_3_Report">Management Risk(s)</h3>

<table class="Details_Table_Report" style="width:100%">

<col width="50px">
<col width="*">
<col width="25px">
<col width="25px">
<col width="120px">

  <tr>
    <th class="Details_Column_Heading_Report">#</th>
    <th class="Details_Column_Heading_Report">Detail</th>
	<th class="Details_Column_Heading_Report">Yes</th>
	<th class="Details_Column_Heading_Report">No</th>
	<th class="Details_Column_Heading_Report">Gap / Hazard ID</th>
  </tr>

<?php
for ($x = 0; $x < Count($Risk_Assessment_Item_Data); $x++) {
	if($Risk_Assessment_Item_Data[$x]['Category'] == "Management Risk" ){
		echo "<tr>";
		echo "<td class=\"Details_Value_Cell_Report\">".$Item_Index."</td>"; $Item_Index++;
		echo "<td class=\"Details_Value_Cell_Report\">".$Risk_Assessment_Item_Data[$x]['Details']."</td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\">.......................</td>";
		echo "</tr>";
	}
}
?>

</table>


<!-- NEXT SECTION -->
<br>
<h3 class="Heading_3_Report">Legal Risk(s)</h3>

<table class="Details_Table_Report" style="width:100%">

<col width="50px">
<col width="*">
<col width="25px">
<col width="25px">
<col width="120px">

  <tr>  
    <th class="Details_Column_Heading_Report">#</th>
    <th class="Details_Column_Heading_Report">Detail</th>
	<th class="Details_Column_Heading_Report">Yes</th>
	<th class="Details_Column_Heading_Report">No</th>
	<th class="Details_Column_Heading_Report">Gap / Hazard ID</th>
  </tr>

<?php
for ($x = 0; $x < Count($Risk_Assessment_Item_Data); $x++) {
	if($Risk_Assessment_Item_Data[$x]['Category'] == "Legal Risk" ){
		echo "<tr>";
		echo "<td class=\"Details_Value_Cell_Report\">".$Item_Index."</td>"; $Item_Index++;
		echo "<td class=\"Details_Value_Cell_Report\">".$Risk_Assessment_Item_Data[$x]['Details']."</td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\"><input type=\"checkbox\" id=\"\" name=\"\" value=\"\"></td>";
		echo "<td class=\"Details_Value_Cell_Report\">.......................</td>";
		echo "</tr>";
	}
}
?>

</table>


<?php

Report_Details_0004();

?>


<br>
<h1 class="Heading_2_Report">Participants</h1>

<table class="Details_Table_Report" style="width:100%">
<col width="15px">
<col width="300px">
<col width="*">
<col width="300px">
<col width="150px">
  <tr>
	<th class="Details_Column_Heading_Report"></th>
    <th class="Details_Column_Heading_Report">Name</th>
    <th class="Details_Column_Heading_Report">Position</th>
	<th class="Details_Column_Heading_Report">Signature</th>
	<th class="Details_Column_Heading_Report">Date</th>
  </tr>
  
  <tr>
	<td class="Details_Value_Cell_Report" style="height:40px;">1</td>
    <td class="Details_Value_Cell_Report"><input type="text" style="border: 0px solid #FFFFFF; width:100%;" id="" name=""></td>
    <td class="Details_Value_Cell_Report"><input type="text" style="border: 0px solid #FFFFFF; width:100%;" id="" name=""></td>
	<td class="Details_Value_Cell_Report"></td>
	<td class="Details_Value_Cell_Report">............/............/............</td>	
  </tr>
  
  <tr>
	<td class="Details_Value_Cell_Report" style="height:40px;">2</td>
    <td class="Details_Value_Cell_Report"><input type="text" style="border: 0px solid #FFFFFF; width:100%;" id="" name=""></td>
    <td class="Details_Value_Cell_Report"><input type="text" style="border: 0px solid #FFFFFF; width:100%;" id="" name=""></td>
	<td class="Details_Value_Cell_Report"></td>
	<td class="Details_Value_Cell_Report">............/............/............</td>	
  </tr>
  
  <tr>
	<td class="Details_Value_Cell_Report" style="height:40px;">3</td>
    <td class="Details_Value_Cell_Report"><input type="text" style="border: 0px solid #FFFFFF; width:100%;" id="" name=""></td>
    <td class="Details_Value_Cell_Report"><input type="text" style="border: 0px solid #FFFFFF; width:100%;" id="" name=""></td>
	<td class="Details_Value_Cell_Report"></td>
	<td class="Details_Value_Cell_Report">............/............/............</td>	
  </tr>
  
</table>

<br>
<div style="text-align: right;"><button onclick="window.print()">Print</button></div>





</div>


</body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/Formats/Footer_Basic.php';?>

</html> 



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