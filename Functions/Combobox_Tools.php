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

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php  /////////////////////////////////////////////////////////

// PURPOSE: CHECKING AND EXTRACTING COMBOBOX DATA FROM DATABASE
// AUTHOR: PHILLIP KRAGULJAC
// CREATED: 2020-08-14

function Get_Combobox_Data_If_Available($Database_Connection, $Table_Name, $Input_Name){
$Combobox_Data = null;
if ($Database_Connection->connect_error) {die("Connection failed: " . $Database_Connection->connect_error);} 
$i = 0;
$MySQL_Command_Script = "SELECT * FROM fnc_options WHERE `Table_Name` = '{$Table_Name}' AND `Element` = '{$Input_Name}'";
$result = $Database_Connection->query($MySQL_Command_Script);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$Combobox_Data[$i]['Option_Name'] = $row['Option_Name'];
$Combobox_Data[$i]['Description'] = $row['Description'];
$i = $i + 1;
}	
}else{}
return $Combobox_Data;
}

?>


<?php  /////////////////////////////////////////////////////////

// PURPOSE: CREATING THE COMBOBOX ITEM
// AUTHOR: PHILLIP KRAGULJAC
// CREATED: 2020-08-14

function Display_Combobox($Combobox_Data, $Input_Name, $Current_Value){

?><select class="Input_Combobox_Format" id="<?php echo $Input_Name; ?>" name="<?php echo $Input_Name; ?>"><?php 
for ($x = 0; $x < count($Combobox_Data); $x++) { 
$Selectable_Inset = ""; if($Combobox_Data[$x]['Option_Name']==$Current_Value){$Selectable_Inset = "Selected";}
$More_Information_Inset = "";  if($Combobox_Data[$x]['Description']!=Null){$More_Information_Inset = " - ".$Combobox_Data[$x]['Description'];}
?><option value="<?php echo str_replace(" ", "_", $Combobox_Data[$x]['Option_Name']); ?>" id="<?php echo $Input_Name.":".$Combobox_Data[$x]['Option_Name']; ?>" <?php echo $Selectable_Inset; ?>><?php echo "[".strtoupper($Combobox_Data[$x]['Option_Name'])."]".$More_Information_Inset; ?></option><?php
}
?></select><?php

}

?>