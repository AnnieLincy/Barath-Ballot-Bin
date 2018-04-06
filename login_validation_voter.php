<?php
ob_start();
$host="127.0.0.1"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="b3"; // Database name 
$tbl_name="voter_aadhar_details"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die(mysql_error());
//echo "Connected to MySQL<br />";
mysql_select_db("$db_name") or die(mysql_error());
//echo "Connected to Database<br />";
// Check $username and $password 
if(empty($_POST['aadhar_no']))
{
    $msg= "Enter Aadhar_no/Name !!";
	echo "<script type='text/javascript'>alert('$msg'); window.location.href='login_voter.html'</script>";
   
   return false;
  
}
if(empty($_POST['name']))
{
    $msg= "Enter aadhar_no/Name !!";
	echo "<script type='text/javascript'>alert('$msg'); window.location.href='login_voter.html'</script>";
  return false;
  
}


// Define $username and $password 
$aadhar_no=$_POST['aadhar_no']; 
$name=$_POST['name'];

// To protect MySQL injection (more detail about MySQL injection)
//$aadhar_no = stripslashes($aadhar_no);
//$name = stripslashes($name);
//$aadhar_no = mysql_real_escape_string($aadhar_no);
//$name = mysql_real_escape_string($name);
$query=mysql_query("SELECT status FROM voter_aadhar_details WHERE name= '$name' ")or die(mysql_error());
$row=mysql_fetch_array($query);
$status=$row['status'];
if($status=="Not voted"){
$sql="SELECT * FROM voter_aadhar_details WHERE aadhar_no='$aadhar_no' and name='$name'";
$result=mysql_query($sql);
mysql_query("UPDATE voter_aadhar_details set status='voted' WHERE name= '$name' ");
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) {
    //echo "Successfully loged in!!!";
	header("Location: Candidates.html");
} else {
	$msg= "login incorrect!!!";
	echo "<script type='text/javascript'>alert('$msg');window.location.href='login_voter.html'</script>";
   
}
}
else{
	$msg= "You have voted already !!";
	echo "<script type='text/javascript'>alert('$msg'); window.location.href='login_voter.html'</script>";
}

ob_end_flush();
?>