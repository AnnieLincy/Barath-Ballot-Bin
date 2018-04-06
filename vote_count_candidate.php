<?php
session_start();
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'b3');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die ("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
if(isset($_POST['candidate1']))
{
$_SESSION["name"] = $_POST['candidate1'];
$_SESSION["id"]=1;
echo "<script type='text/javascript'>
var answer = confirm('Confirm your selection')
if (answer==1){
window.location.href='mysql.php?';
alert('Thank you for voting')}
else{
window.location.href = 'candidates.html';
alert ('Choose your candidate')}
</script>";
}
if(isset($_POST['candidate2']))
{
$_SESSION["name"] = $_POST['candidate2'];
$_SESSION["id"]=2;
echo "<script type='text/javascript'>
var answer = confirm('Confirm your selection')
if (answer==1){
window.location.href='mysql.php?';
alert('Thank you for voting')}
else{
window.location.href = 'candidates.html';
alert ('Choose your candidate')}
</script>";
}
if(isset($_POST['candidate3']))
{
$_SESSION["name"] = $_POST['candidate3'];
$_SESSION["id"]=3;
echo "<script type='text/javascript'>
var answer = confirm('Confirm your selection')
if (answer==1){
window.location.href='mysql.php?';
alert('Thank you for voting')}
else{
window.location.href = 'candidates.html';
alert ('Choose your candidate')}
</script>";
}
if(isset($_POST['candidate4']))
{
$_SESSION["name"] = $_POST['candidate4'];
$_SESSION["id"]=4;
echo "<script type='text/javascript'>
var answer = confirm('Confirm your selection')
if (answer==1){
window.location.href='mysql.php?';
alert('Thank you for voting')}
else{
window.location.href = 'candidates.html';
alert ('Choose your candidate')}
</script>";
}
if(isset($_POST['candidate5']))
{
$_SESSION["name"] = $_POST['candidate5'];
$_SESSION["id"]=5;
echo "<script type='text/javascript'>
var answer = confirm('Confirm your selection')
if (answer==1){
window.location.href='mysql.php?';
alert('Thank you for voting')}
else{
window.location.href = 'candidates.html';
alert ('Choose your candidate')}
</script>";
}
?>
