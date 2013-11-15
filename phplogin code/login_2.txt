<?php
// version 1.1
if (isset($_POST['password'])) // if the password is set then the  form has been submitted on login.php page
{
 include("config.php");
 $username =  mysql_real_escape_string($_POST['username']);
 $password = mysql_real_escape_string($_POST['password']);
 $qstr = "SELECT * from members where username ='$username' and password ='$password'";

 $result = mysql_query($qstr);
 if (mysql_num_rows($result))  echo "<font color=#008000><Center><b>**Successful Login**</b></Center></font>";
 else echo "<font color=#ff0000><Center><b>**Failed Login**</b></Center></font>";
 mysql_close();
}
else echo "<font color=#ff8000><Center><b>**No login attempted**</b></Center></font>";
?>