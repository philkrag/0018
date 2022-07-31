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
// 2022-06-02 	|| Phillip Kraguljac 		|| v1.8
// 2022-07-25 	|| Phillip Kraguljac 		|| v1.8

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php

function Display_Sticker_0001($Display_Array) {

$Display_Array = Basic_Array_Filter_Input($Display_Array);

if(!isset($Display_Array['ID']))($Display_Array['ID']="");
if(!isset($Display_Array['Heading'])){$Display_Array['Heading']="";}
if(!isset($Display_Array['Page'])){$Display_Array['Page']="";}
if(!isset($Display_Array['Icon'])){$Display_Array['Icon']="";}


echo "<br>";
echo "<br>";

//$QR_Code_Image_Directory = Create_QRCode_0001($Display_Array['Page']."?ID=".$Display_Array['ID']);
$QR_Code_Image_Directory = Create_QRCode_0001($Display_Array['Page'], $Display_Array['ID']);

echo "<table>";
echo "<tr>";
echo "<td rowspan=\"10\">";

// ////////////////////////////////// STICKER TABLE ˅˅˅

$Div_Identify = rand(10,100);
echo "<div id=\"Orignal_HTML_Source_".$Div_Identify."\">";

echo "<table style=\"border: 1px solid black; border-collapse: collapse;\">";
echo "<tr>";
echo "<td style=\"padding: 5px;\" colspan=\"2\"><font size=\"5\">".$Display_Array['Heading'].": <b>".$Display_Array['ID']."</b></text></td>";
echo "</tr>";

echo "<tr>";
echo "<td style=\"padding: 5px;\" ><img height=\"120\" src=\"".$QR_Code_Image_Directory."\" alt=\"\"></td>";
echo "<td style=\"padding: 5px;\" ><img height=\"120\" src=\"Images\\".$Display_Array['Icon'].".png\" alt=\"\"></td>";
echo "</tr>";

echo "</table>";

echo "</div>";

echo "<div id=\"Image_Construction_".$Div_Identify."\"></div>";

echo "<script>";
echo "html2canvas(document.querySelector(\"#Orignal_HTML_Source_".$Div_Identify."\")).then(canvas => {document.getElementById(\"Image_Construction_".$Div_Identify."\").appendChild(canvas)});";
echo "var element = document.getElementById(\"Orignal_HTML_Source_".$Div_Identify."\");";
echo "element.style.display = \"none\";";
echo "</script>";


// ////////////////////////////////// STICKER TABLE ˄˄˄

echo "</td>";

echo "<td></td>";

echo "</tr>";

echo "<tr>";
echo "<td style=\"padding-left:10px;\"><button style=\"width:120px;\" type=\"button\" onclick=\"window.location.href='".$Display_Array['Page'].".php?ID=".$Display_Array['ID']."';\">Go To Page</button></td>";
echo "<tr>";

echo "<tr>";
echo "<td style=\"padding-left:10px;\"><button style=\"width:120px;\" type=\"button\">...</button></td>";
echo "<tr>";

echo "<tr>";
echo "<td style=\"padding-left:10px;\"><button style=\"width:120px;\" type=\"button\">...</button></td>";
echo "<tr>";

echo "<tr>";
echo "<td style=\"padding-left:10px;\"><button style=\"width:120px;\" type=\"button\">...</button></td>";
echo "<tr>";

echo "<tr>";
echo "<td style=\"padding-left:10px;\"><button style=\"width:120px;\" type=\"button\">...</button></td>";
echo "<tr>";

echo "</table>";

}

?>



<?php

function Display_Sticker_0002($Database_Connection, $Display_Array) {

$Display_Array = Basic_Array_Filter_Input($Display_Array);

if(!isset($Display_Array['ID']))($Display_Array['ID']="");
if(!isset($Display_Array['Heading'])){$Display_Array['Heading']="";}
if(!isset($Display_Array['Page'])){$Display_Array['Page']="";}
if(!isset($Display_Array['Icon'])){$Display_Array['Icon']="";}

if(!isset($Display_Array['MySQL_Action']))($Display_Array['MySQL_Action']="");
if(!isset($Display_Array['MySQL_Table']))($Display_Array['MySQL_Table']="");
if(!isset($Display_Array['MySQL_Filter']))($Display_Array['MySQL_Filter']="");
if(!isset($Display_Array['MySQL_Order']))($Display_Array['MySQL_Order']="");
if(!isset($Display_Array['MySQL_Limit']))($Display_Array['MySQL_Limit']="");
if(!isset($Display_Array['MySQL_Offset']))($Display_Array['MySQL_Offset']="");

$Internal_Data['Table_Name']=$Table_Name = str_replace(array("FROM ", "`", " "), "", $Display_Array['MySQL_Table']);

// ------------- BELOW IS THE DATABASE TABLE PROPERTIES EXTRACTION FUNCTION

$i = 0;
$MySQL_Command_Script = "SELECT COLUMN_NAME, DATA_TYPE 
FROM INFORMATION_SCHEMA.COLUMNS
WHERE `TABLE_SCHEMA`='main_database' 
AND `TABLE_NAME`='{$Table_Name}';";
$result = $Database_Connection->query($MySQL_Command_Script);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
$Column_Type[$row['COLUMN_NAME']] = $row['DATA_TYPE'];
$i = $i + 1;
}} else {}

// ------------- ABOVE IS THE DATABASE TABLE PROPERTIES EXTRACTION FUNCTION

$sql = $Display_Array['MySQL_Action'].$Display_Array['MySQL_Table'].$Display_Array['MySQL_Filter'].$Display_Array['MySQL_Order'].$Display_Array['MySQL_Limit'].$Display_Array['MySQL_Offset'];
//echo $sql."<br>";
$result = mysqli_query($Database_Connection, $sql);


echo "<br>";
echo "<br>";

//$QR_Code_Image_Directory = Create_QRCode_0001($Display_Array['Page']."?ID=".$Display_Array['ID']);
$QR_Code_Image_Directory = Create_QRCode_0001($Display_Array['Page'], $Display_Array['ID']);

echo "<table>";
echo "<tr>";
echo "<td rowspan=\"10\">";


// ////////////////////////////////// STICKER TABLE ˅˅˅

$Div_Identify = rand(10,100);
echo "<div id=\"Orignal_HTML_Source_".$Div_Identify."\">";

echo "<table style=\"border: 1px solid black; border-collapse: collapse;\">";

echo "<col style=\"width:120px\">";
echo "<col style=\"width:160px\">";
echo "<col style=\"width:400px\">";

echo "<tr>";
echo "<td colspan=\"3\" style=\"vertical-align:top;\" ></td>";
echo "</tr>";


// THIS NEEDS TO BE ADJUSTED FOR VARIATIONS IN THE NUMBER OF FIELDS...

echo "<tr>";
echo "<td align=\"center\" style=\"text-align:\"center\"; vertical-align:top;\" rowspan=\"7\">";
echo "<img style=\"padding-top: 0px;\" width=\"100\" src=\"".$QR_Code_Image_Directory."\" alt=\"\"><br>";
echo "<div><img style=\"padding-top: 0px;\" width=\"60\" src=\"Images/Logo.png\" alt=\"\"></div>";
echo "</td>";

echo "<td style=\"vertical-align:top;\"></td>";
echo "<td style=\"vertical-align:top;\"></td>";
echo "</tr>";



// DISPLAY ITEMS
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
for ($x = 0; $x < count($Display_Array['Display_Items']); $x++) {

if($x != 0){
	echo "<tr style=\height:25px;\">";
}

if($x>5){echo "<td style=\"vertical-align:top;\" ></td>";}


echo "<td style=\"vertical-align:top;\" ><font size=\"4\">".Basic_Filter_Input($Display_Array['Display_Items'][$x])."</text></td>";
echo "<td style=\"vertical-align:top;\" ><font size=\"5\"><b>".Basic_Filter_Input($row[$Display_Array['Display_Items'][$x]])."</b></text></td>";
echo "</tr>";

}
}
}

echo "<tr>";
echo "<td style=\"vertical-align:top;\">...</td>";
echo "<td style=\"vertical-align:top;\">...</td>";
echo "</tr>";


echo "<tr>";
echo "<td colspan=\"3\" style=\"align:left; text-align:center; padding: 0px 10px 10px 10px;\"><font size=\"2\">";
echo "<b>IMPORTANT:</b> When removing items from this storage container, ensure that the stock levels are adjusted to accurately reflect current quantities. ";
echo "Ensure that you are connected to the corporate network before using the QR code.<br><br>";
echo "<b>For further information regarding this please contact either the local IT support team and or Engineering Management.</b>";
echo "</font></td>";
echo "</tr>";

echo "<tr align=\"middle\">";
echo "<td colspan=\"3\" style=\"padding: 0px 10px 10px 10px;\"><font size=\"3\">";
echo "Scan the QR code and follow the prompts. ";
echo "</font></td>";
echo "</tr>";

echo "</table>";

echo "</div>";

echo "<div id=\"Image_Construction_".$Div_Identify."\"></div>";
echo "";

echo "<script>";
echo "html2canvas(document.querySelector(\"#Orignal_HTML_Source_".$Div_Identify."\")).then(canvas => {document.getElementById(\"Image_Construction_".$Div_Identify."\").appendChild(canvas)});";
echo "var element = document.getElementById(\"Orignal_HTML_Source_".$Div_Identify."\");";
echo "element.style.display = \"none\";";
echo "</script>";


// ////////////////////////////////// STICKER TABLE ˄˄˄

echo "</td>";

echo "<td></td>";

echo "</tr>";

echo "<tr>";
echo "<td style=\"padding-left:10px;\"><button style=\"width:120px;\" type=\"button\">...</button></td>";
echo "<tr>";

echo "<tr>";
echo "<td style=\"padding-left:10px;\"><button style=\"width:120px;\" type=\"button\">...</button></td>";
echo "<tr>";

echo "<tr>";
echo "<td style=\"padding-left:10px;\"><button style=\"width:120px;\" type=\"button\">...</button></td>";
echo "<tr>";

echo "<tr>";
echo "<td style=\"padding-left:10px;\"><button style=\"width:120px;\" type=\"button\">...</button></td>";
echo "<tr>";

echo "<tr>";
echo "<td style=\"padding-left:10px;\"><button style=\"width:120px;\" type=\"button\">...</button></td>";
echo "<tr>";

echo "</table>";

}


?>