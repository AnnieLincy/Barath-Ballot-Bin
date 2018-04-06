<?php
ob_start();
$host="127.0.0.1"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="b3"; // Database name 
$tbl_name="admin_details"; // Table name
mysql_connect("$host", "$username", "$password") or die(mysql_error());
mysql_select_db("$db_name") or die(mysql_error());
if(empty($_POST['username']))
{
    $msg= "Enter Username/Password !!";
	echo "<script type='text/javascript'>alert('$msg'); window.location.href='login_admin.html'</script>";
   return false;
}
if(empty($_POST['password']))
{
    $msg= "Enter Username/Password !!";
	echo "<script type='text/javascript'>alert('$msg'); window.location.href='login_admin.html'</script>";
  return false;
  
}
$username=$_POST['username']; 
$password=$_POST['password'];
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM admin_details WHERE aadhar_no='$aadhar_no' and name='$name'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if ($count==1) {
	header("Location: admin_succ_logged_in.html");
} else {
	$msg= "login incorrect!!!";
	echo "<script type='text/javascript'>alert('$msg');window.location.href='login_admin.html'</script>";
}
ob_end_flush();
?>