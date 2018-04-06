<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'b3');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die ("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$result = mysql_query('SELECT MAX(count) AS value_max FROM vote_count'); 
$row = mysql_fetch_assoc($result); 
$max = $row['value_max'];
$val=mysql_query("SELECT * FROM vote_count WHERE count='$max'");
$num=mysql_num_rows($val);
?>

<br><br>
<p align="center"> <b> RESULT OF THE VOTING PROCESS!!! </b> </p><br><br><br>
<table align="center"  border-color="2px solid blue" cellspacing="2" cellpadding="12px 20px" >
<tr>
<td>
<font face="Arial, Helvetica, sans-serif"><b>ID</b></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><b>Candidate_name</b></font>
</td>
</tr>
<p align="center"> THE BELOW CANDIDATE(S) HAS WON THE ELECTION... </p>
<br><br>
<?php
$i=0;
while ($i < $num) {
$f1=mysql_result($val,$i,"id");
$f2=mysql_result($val,$i,"candidate_name");

?>
<tr>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font>
</td>
</tr>

<?php
$i++;
}?>
</body>
</html>