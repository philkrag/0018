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
// PAGE CREATED DATE: 2021-12-01

// DATE   		|| NAME 					|| MODIFICATION
// 2021-12-01 	|| Phillip Kraguljac 		|| v1.6

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php function Allow_Access_0001($Database_Connection, $Allowed_Tags) {
	
	// Equipment Management
	// Project Management
	// Product Management
	// Store Management
		
	$Return_Value = false;
	
	$User_Access_Options = array_filter(explode(";", $_SESSION["Access_Tags"]));
	$Function_Access_Options = array_filter(explode(";", $Allowed_Tags));	
	

	//echo "User".print_r($User_Access_Options)."<br>";
	//echo "Func".print_r($Function_Access_Options)."<br>";

	
	for ($x = 0; $x < count($Function_Access_Options); $x++) {
	for ($y = 0; $y < count($User_Access_Options); $y++) {
	if($Function_Access_Options[$x] == $User_Access_Options[$y] || $User_Access_Options[$y] == "All"){		
		$Return_Value = true;
	}
	}
	}
	return $Return_Value;	
}
?>





