<?php
error_reporting(1);
echo "<br>Please DELETE the alpha table and file from server, this is for TEST ONLY<br><br>";

/*
echo "<br>MYSQL-I connection check Start <br><br>";

var_dump(mysqli_connect('localhost','root','eX@m$u!T!6DB','examsuit'));
var_dump($con);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

var_dump($con);

echo "<br><br>MYSQL-I connection check End <br>";
echo "<br><br><br>";

*/



echo "<br>MYSQL connection check Start<br><br><br>";

//$link = mysql_connect("localhost","root","eX@m$u!T!6DB");
$link = mysql_connect('clematis.c5cn1z65rooe.us-west-2.rds.amazonaws.com', 'quikgrab', 'Passw0rd');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
var_dump($link);
echo "<br>";
var_dump(mysql_select_db("diversity",$link));
echo "<br>";

echo "<br>MYSQL connection check end<br>";

echo "<br>";
echo "<br>Record from alpha table. Please DELETE this table and file from server, this is for TEST ONLY";


//var_dump(mail("satyen.rudra@clematistech.com","Out going mail test for Taxt-Taxt","If you receive this mail that mean outgoing mail is active on your hosting."));
/*
echo "<br><br>";
*/

$sql = "SELECT * FROM alpha LIMIT 0,10";
$res = mysql_query($sql);
$num = mysql_num_rows($res);
echo "<br><br>NUM = ".$num;
echo "<br><br>";
if($num > 0) {
	while($row = mysql_fetch_array($res)) {
		echo "<br>ID = ".$row['id'];
		echo "<br>Name = ".$row['name'];
	}
}

/*
$sql = "SELECT * FROM taxi_user_master LIMIT 0,10";
$res = mysql_query($sql);
$num = mysql_num_rows($res);
echo "<br><br>NUM = ".$num;
echo "<br><br>";
if($num > 0) {
	while($row = mysql_fetch_array($res)) {
		echo "<br>Email = ".$row['email'];
		echo "<br>Mobile = ".$row['mobile'];
	}
}
*/

?>