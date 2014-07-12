<?php

// Connecting to the database
mysql_connect("sql.njit.edu","ako6","Headset1");
mysql_select_db("ako6");

ob_start();
$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="ako6"; // Database name 
$table_name="490project"; // Table name 

// Define $myusername and $mypassword 
$myusername=$_POST['user']; 
$mypassword=$_POST['pass']; 

// To protect MySQL injection (more detail about MySQL injection)
$user = stripslashes($user);
$pass = stripslashes($pass);
$user = mysql_real_escape_string($user);
$pass = mysql_real_escape_string($pass);
$sql="SELECT * FROM $table_name WHERE username='$user' and password='$pass'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("user");
session_register("pass"); 
header("location:login.php");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();

?>