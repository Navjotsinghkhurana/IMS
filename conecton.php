<?php 
// error_reporting(0);
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ims";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
session_start();
if (!$conn) {
	echo '<script>alert("No Internet Connectioin"); window.location="http://gndpc.in"</script>';
}


// Time Related
date_default_timezone_set("Asia/Kolkata");
// echo "The time is " . date("h:i:sa");
$t=time();
//extracting day out of timestamp
$timestamp = strtotime($t);
$day = date('l');
$month=date('m');
$year=date('Y');
//extracting date out of timestamp
$date=date("Y-m-d",$t);
$time=date("h:i:s A");


// function table($tablename,$where,$attribute,$conn)
// {
// 	$sql="SELECT * from $tablename WHERE $where='$attribute'";
// 	$query=mysqli_query($conn,$sql);
// 	$fetch=mysqli_fetch_array($query);
// 	return $fetch;
	
// }
 ?>
