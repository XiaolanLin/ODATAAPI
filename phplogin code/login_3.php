<?php
$mysql_hostname = "localhost";
$mysql_user = "voya";
$mysql_password = "VOYAvoya2013@";
$mysql_database = "voya";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) 
or die("Opps some thing went wrong");

mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
header('Content-type: application/json');
if($_POST)
{
// username and password sent from Form 
//$myusername=addslashes($_POST['username']); 
//$mypassword=addslashes($_POST['password']); 

$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$select="SELECT * FROM user WHERE user_name='$username' and password='$password'";

$result=mysql_query($select);

$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
		$insert="INSERT INTO login (user_name, password) VALUES ('$username', '$password')";
		mysql_query($insert);
		echo '{"success":1}';
	}else {
		echo '{"success":0,"error_message":"Username and/or password is invalid."}';
	}

}else {
	'{"success":0,"error_message":"php fails"}';
}


?>
