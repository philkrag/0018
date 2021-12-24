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


<?php function Check_Database_Exists_0001($Database_Connection) { } ?>



<?php function Retrieve_Database_Entry_0001($Database_Connection, $Table, $Parent_ID, $Extract_Column) { 
	
$Return_Value = "";
$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `{$Table}` ";
$Display_Array['MySQL_Filter'] = "WHERE `ID` = {$Parent_ID} ";
$Display_Array['MySQL_Order'] = "";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";
$sql = $Display_Array['MySQL_Action'].$Display_Array['MySQL_Table'].$Display_Array['MySQL_Filter'].$Display_Array['MySQL_Order'].$Display_Array['MySQL_Limit'].$Display_Array['MySQL_Offset'];
$result = mysqli_query($Database_Connection, $sql);
if($result){
while($row = mysqli_fetch_assoc($result)) {	
$Return_Value = $row[$Extract_Column];	
}}
return $Return_Value;	
}

?>


<?php function Retrieve_Database_Last_Entry_0001($Database_Connection, $Table, $Parent_ID, $Date_Column, $Extract_Column) { 
	
$Return_Value = "";
$Display_Array['MySQL_Action'] = "SELECT * ";
$Display_Array['MySQL_Table'] = "FROM `{$Table}` ";
$Display_Array['MySQL_Filter'] = "WHERE `Document ID` = {$Parent_ID} ";
$Display_Array['MySQL_Order'] = "ORDER BY `{$Date_Column}` DESC ";
$Display_Array['MySQL_Limit'] = "LIMIT 1";
$Display_Array['MySQL_Offset'] = "";
$sql = $Display_Array['MySQL_Action'].$Display_Array['MySQL_Table'].$Display_Array['MySQL_Filter'].$Display_Array['MySQL_Order'].$Display_Array['MySQL_Limit'].$Display_Array['MySQL_Offset'];
$result = mysqli_query($Database_Connection, $sql);
if($result){
while($row = mysqli_fetch_assoc($result)) {	
$Return_Value = $row[$Extract_Column];	
}}
return $Return_Value;	
}

?>



