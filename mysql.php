<?php
session_start();
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'b3');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die ("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$name=$_SESSION['name'];
$No=$_SESSION['id'];
$query=mysql_query("SELECT * from vote_count WHERE candidate_name= '$name' ")or die(mysql_error());
$row=mysql_fetch_array($query);
$update="UPDATE vote_count set count=count+1 WHERE id= '$No' ";
$result = mysql_query($update);
if ($result) {
    echo "<script type='text/javascript'> 
	window.location.href = 'voted_tq.html';
	</script>";
} else {
    die("Database query failed. " . mysqli_error($connection));
}
?>