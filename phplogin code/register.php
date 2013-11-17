<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "vova_database";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) 
or die("Opps some thing went wrong");

mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
header('Content-type: application/json');
if($_POST)
{
// username and password sent from Form 


$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$select="SELECT * FROM user WHERE user_name='$username''";

$result=mysql_query($select);

$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1)
          {
                 echo '{"success":0,"error_message":"Username is existed."}';
           }else
          {
		$insert="INSERT INTO user (user_name, password) VALUES ('$username', '$password')";
		mysql_query($insert);
		echo '{"success":1}';
	}

}else {
	'{"success":0,"error_message":"php fails"}';
}
