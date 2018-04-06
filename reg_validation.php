<?php
  define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'b3');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

  if(isset($_POST['submit'])!="")
  {
  $firstname=mysql_real_escape_string($_POST['firstname']);
  $lastname=mysql_real_escape_string($_POST['lastname']);
  $bday=mysql_real_escape_string($_POST['bday']);
  $gender=mysql_real_escape_string($_POST['gender']);
  $mstatus=mysql_real_escape_string($_POST['mstatus']);
  $username=mysql_real_escape_string($_POST['username']);
  $password=mysql_real_escape_string($_POST['password']);
  $fathername=mysql_real_escape_string($_POST['fathername']);
  $address=mysql_real_escape_string($_POST['address']);
  $district=mysql_real_escape_string($_POST['district']);
  $state=mysql_real_escape_string($_POST['state']);
$pincode=mysql_real_escape_string($_POST['pincode']);
$phone=mysql_real_escape_string($_POST['phone']);
$alternatephone=mysql_real_escape_string($_POST['alternatephone']);
$email=mysql_real_escape_string($_POST['email']);

  $update=mysql_query("INSERT INTO reg(firstname,lastname,bday,gender,mstatus,username,password,fathername,address,district,state,pincode,phone,alternatephone,email)VALUES
                                      ('$firstname','$lastname','$bday','$gender','$mstatus','$username','$password','$fathername','$address','$district','$state','$pincode','$phone','$alternatephone','$email')");
 
  if($update)
  {
      $msg = "Successfully Updated...";
      echo "<script type='text/javascript'>alert('$msg');window.location.href='home_page.html'</script>";     
  }
  else
  {
     $errormsg = "Not updated!!!";
      echo "<script type='text/javascript'>alert('$errormsg');</script>";
  }
  }
?>