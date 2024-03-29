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
// 2021-05-06 	|| Phillip Kraguljac 		|| v1.5.
// 2021-05-20 	|| Phillip Kraguljac 		|| v1.5.

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php function Quick_Input($Input_Id, $Button_Description, $Requested_Value){

echo "<script>";
echo "function myFunction() {";
echo "  document.getElementById(\"{$Input_Id}\").value = \"{$Requested_Value}\";";
echo "}";
echo "</script>";
echo " <button style=\"padding: 2px 2px 2px 2px;\" onclick=\"myFunction()\">{$Button_Description}</button>";

} ?>



<?php function Quick_Input_Multiple($Input_Id, $Button_Description, $Requested_Value, $IsComboBox){

for ($x = 0; $x < count($Input_Id); $x++){
echo "<script>";
echo "function myFunction_{$x}() {";
echo "  document.getElementById(\"{$Input_Id[$x]}\").value = \"{$Requested_Value[$x]}\";";
echo "}";
echo "</script>";
echo " <button style=\"padding: 2px 2px 2px 2px;\" onclick=\"myFunction_{$x}()\">{$Button_Description[$x]}</button>";
}
}

?>


<?php // function Quick_Input_Multiple_0001($Function_Id, $Input_Id, $Button_Description, $Requested_Value, $IsComboBox){

// for ($x = 0; $x < count($Input_Id); $x++){
// echo "<script>";
// echo "function myFunction_{$Function_Id}_{$x}() {";
// echo "  document.getElementById(\"{$Input_Id[$x]}\").value = \"{$Requested_Value[$x]}\";";
// echo "}";
// echo "</script>";
// echo " <button style=\"padding: 2px 2px 2px 2px;\" onclick=\"myFunction_{$Function_Id}_{$x}()\">{$Button_Description[$x]}</button>";
// }
// }

?>


<?php function Quick_Input_Multiple_0001($Function_Id, $Input_Id, $Button_Description, $Requested_Value, $IsComboBox){

for ($x = 0; $x < count($Input_Id); $x++){
echo "<script>";
echo "function myFunction_{$Function_Id}_{$x}() {";
echo "  document.getElementById(\"{$Input_Id[$x]}\").value = \"{$Requested_Value[$x]}\" + \"\\n\" + document.getElementById(\"{$Input_Id[$x]}\").value";
echo "}";
echo "</script>";
echo " <button style=\"padding: 2px 2px 2px 2px;\" onclick=\"myFunction_{$Function_Id}_{$x}()\">{$Button_Description[$x]}</button>";
}
}

?>

