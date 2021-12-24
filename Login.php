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


<?php

//echo "Password: ".password_hash("", PASSWORD_DEFAULT);

session_start();
include $_SERVER['DOCUMENT_ROOT'].'/Functions/Database_Connections.php';

if(isset($_SESSION["Logged_In"]) && $_SESSION["Logged_In"] === true){
    header("location: welcome.php");
    exit;
}

$User_Name = $Password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["User_Name"]))){
        $username_err = "Please enter username.";
    } else{
        $User_Name = trim($_POST["User_Name"]);
    }
    if(empty(trim($_POST["Password"]))){
        $password_err = "Please enter your password.";
    } else{
        $Password = trim($_POST["Password"]);
    }
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT ID, `User Name`, `Password` FROM `users` WHERE `User Name` = ?";        
        if($stmt = mysqli_prepare($Database_Connection, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $User_Name;
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $id, $User_Name, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($Password, $hashed_password)){
                            session_start();
                            $_SESSION["Logged_In"] = true;
                            $_SESSION["ID"] = $id;
                            $_SESSION["User_Name"] = $User_Name;
							
							$sql = "SELECT * FROM `users` WHERE `User Name` = '".$User_Name."'";
							$result = mysqli_query($Database_Connection, $sql);
							while($row = mysqli_fetch_assoc($result)) {
                            $_SESSION["Access_Tags"] = $row['Access Tags'];
							}
							
                            header("location: index.php");
                        } else{
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
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
<title>Login</title>	
<link rel="stylesheet" type="text/css" href="Site_Style.css">
</head>

<div style="background-color: rgb(255,255,255); min-height:30px; text-align:center;">
<table style="width:100%;">
<col width="60px">
<col width="*">
<col width="30px">
<tr>
<td><img src="Images/DPTI_Logo.png" alt="" width="60px"></td>
<td style="text-align:left;padding-left:10px;"><h1>Project Management Portal</h1></td>
<td></td>
</tr>
</table>
</div>
<body>

<h2>Login</h2>
<p>Please fill in your credentials to login.</p>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

<table>
<col width="150px">
<col width="100px">
<col width="200px">
<col width="200px">

<tr>
<td>User Name</td>
<td colspan="2"><input type="text" name="User_Name" class="Input_Text_Format" value="<?php echo $User_Name; ?>"></td>
<td><span class="help-block"><?php echo $username_err; ?></span></td>
</tr>

<tr>
<td>Password</td>
<td colspan="2"><input type="Password" name="Password" class="Input_Text_Format"></td>
<td><span class="help-block"><?php echo $password_err; ?></span></td>
</tr>

<tr>
<td></td>
<td><input type="submit" class="Submission_Button_Format" value="Login"></td>
<td></td>
<td></td>
</tr>

</table>

<p>Don't have an account? <a href="Registration.php">Sign up now</a>.</p>

</form>
 
</body>
</html>

<?php https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php ?>