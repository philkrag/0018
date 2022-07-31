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
// 2022-03-07 	|| Phillip Kraguljac 		|| v1.7 (Created)

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php

function Basic_Help_Insert($Book_Mark){
	echo " ";
	echo "<font style=\"font-size:75%;\">";
	echo "(";
	echo "<a href=\"Help.php#{$Book_Mark}\">";	
	echo "More Info";	
	echo "</a>";
	echo ")";
	echo "</font>";	
}




?>