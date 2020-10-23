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


<?php function Basic_Filter_Input($String_To_Be_Filtered){
$Filtered_Item = "";
$Filtered_Item = filter_var($String_To_Be_Filtered, FILTER_SANITIZE_STRING); //FILTER_SANITIZE_SPECIAL_CHARS FILTER_SANITIZE_STRING
return $Filtered_Item ;
}


function Basic_Array_Filter_Input($String_To_Be_Filtered){
$Filtered_Item = "";
$Filtered_Item = filter_var_array($String_To_Be_Filtered, FILTER_SANITIZE_STRING);
return $Filtered_Item ;
}

?>