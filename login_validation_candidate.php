<?php
ob_start();
$host="127.0.0.1"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="b3"; // Database name 
$tbl_name="candidate_details"; // Table name
mysql_connect("$host", "$username", "$password") or die(mysql_error());
mysql_select_db("$db_name") or die(mysql_error());
if(empty($_POST['username']))
{
    $msg= "Username/Password is empty!!!";
	echo "<script type='text/javascript'>alert('$msg'); window.location.href='login_candidate.html'</script>";
    return false;
}
if(empty($_POST['password']))
{
    $msg= "Username/Password is empty!!!";
	echo "<script type='text/javascript'>alert('$msg'); window.location.href='login_candidate.html'</script>";
    return false;
}
$username=$_POST['username']; 
$password=$_POST['password'];
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM candidate_details WHERE username='$username' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if ($count==1) {
header("Location: can_succ_logged_in.html");
} else {
    $msg= "Username/Password is invalid!!!";
	echo "<script type='text/javascript'>alert('$msg'); window.location.href='login_candidate.html'</script>";
}
ob_end_flush();
?>