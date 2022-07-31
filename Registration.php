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
// 2021-07-27 	|| Phillip Kraguljac 		|| v1.8

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<?php

include $_SERVER['DOCUMENT_ROOT'].'/Functions/Database_Connections.php';
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Filter_Tools.php';

?>


<style type="text/css">
body  {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.Input_Text_Format { width: 98.9%; } 
.Submission_Button_Format { width: 99%; } 
</style>


<?php
$User_Name = $Password = $Confirm_Password = "";
$username_err = $password_err = $confirm_password_err = "";
$key_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
if($_POST["Key"]!="DIT" && $_POST["Key"]!="ABC987"){		
$key_err = "A key is needed to create a profile.";		
}	
$Inspected_Items = array("<script>");
for ($x = 0; $x < count($Inspected_Items); $x++) {
if (
strpos($_POST["User_Name"], $Inspected_Items[$x]) !== FALSE ||
strpos($_POST["Key"], $Inspected_Items[$x]) !== FALSE
)
{
$key_err = "Do not try and inject script.";	
}
}
if(empty(trim($_POST["User_Name"]))){
$username_err = "Please enter a username.";
} else{
$sql = "SELECT ID FROM `users` WHERE `User Name` = ?";        
if($stmt = mysqli_prepare($Database_Connection, $sql)){
mysqli_stmt_bind_param($stmt, "s", $param_username); 
$param_username = trim($_POST["User_Name"]);    
if(mysqli_stmt_execute($stmt)){
mysqli_stmt_store_result($stmt);                
if(mysqli_stmt_num_rows($stmt) == 1){
$username_err = "This user name is already taken.";
} else{
$User_Name = trim(Basic_Filter_Input($_POST["User_Name"]));
}
} else{
echo "Oops! Something went wrong. Please try again later.";
}
mysqli_stmt_close($stmt);
}	
}


if(empty(trim($_POST["Password"]))){
$password_err = "Please enter a password.";     
} elseif(strlen(trim($_POST["Password"])) < 6){
$password_err = "Password must have at least 6 characters.";
} else{
$Password = trim($_POST["Password"]);
}
if(empty(trim($_POST["Confirm_Password"]))){
$confirm_password_err = "Please confirm password.";     
} else{
$Confirm_Password = trim($_POST["Confirm_Password"]);
if(empty($password_err) && ($Password != $Confirm_Password)){
$confirm_password_err = "Password did not match.";
}
}
if(empty($username_err) && empty($key_err) && empty($password_err) && empty($confirm_password_err)){
$sql = "INSERT INTO `users` (`User Name`, `Password`) VALUES (?, ?)";
echo "point 1<br>";		
if($stmt = mysqli_prepare($Database_Connection, $sql)){
mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);            
echo "point 2<br>";		
$param_username = $User_Name;
$param_password = password_hash($Password, PASSWORD_DEFAULT);
if(mysqli_stmt_execute($stmt)){
header("location: login.php");
} else{
echo "Something went wrong. Please try again later.";
}
mysqli_stmt_close($stmt);
}
}    
mysqli_close($Database_Connection);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign-up</title>	
<!--<link rel="stylesheet" type="text/css" href="Site_Style.css">-->
</head>

<div style="background-color: rgb(255,255,255); min-height:30px; text-align:center;">
<table style="width:100%;">
<col width="60px">
<col width="*">
<col width="30px">
<tr>
<td><!--<img src="Images/Logo.png" alt="" width="60px">--></td>
<td style="text-align:left;padding-left:10px;"><h1>Project Management Portal</h1></td>
<td></td>
</tr>
</table>
</div>

<body>

<h2>Sign Up</h2>
<p>Please fill this form to create an account.</p>

<table>
<col width="150px">
<col width="100px">
<col width="200px">
<col width="200px">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

<tr>
<td>Key</td>
<td colspan="2"><input type="text" name="Key" class="Input_Text_Format" value=""></td>
<td><span class="help-block"><?php echo $key_err; ?></td>
</tr>

<tr>
<td>User Name</td>
<td colspan="2"><input type="text" name="User_Name" class="Input_Text_Format" value="<?php echo $User_Name; ?>"></td>
<td><span class="help-block"><?php echo $username_err; ?></span></td>
</tr>

<tr>
<td>Password</td>
<td colspan="2"><input type="password" name="Password" class="Input_Text_Format" value="<?php echo $Password; ?>"></td>
<td><span class="help-block"><?php echo $password_err; ?></span></td>
</tr>

<tr>
<td>Confirm Password</td>
<td colspan="2"><input type="password" name="Confirm_Password" class="Input_Text_Format" value="<?php echo $Confirm_Password; ?>"></td>
<td><span class="help-block"><?php echo $confirm_password_err; ?></span></td>
</tr>

<tr>
<td></td>
<td><input type="submit" class="Submission_Button_Format" value="Submit"></td>
<td></td>
<td></td>
</tr>

<tr>
<td></td>
<td><input type="reset" class="Submission_Button_Format" value="Reset"></td>
<td></td>
<td></td>
</tr>

</table>
<p>Already have an account? <a href="login.php">Login here</a>.</p>

<div class="wrapper">        

</body>
</html>