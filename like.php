<?php
global $connection;
	$host="localhost";
	$user="test";
	$password="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $password, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
if(!isset($_SESSION['LAST_ACTIVITY'])){
		$_SESSION['LAST_ACTIVITY'] = time();
}
if(isset($_SESSION['LAST_ACTIVITY']) && ($_SESSION['LAST_ACTIVITY'] + 30 * 60 > time())){
mysqli_query($connection, "UPDATE alikhach_exam SET likescount=likescount+1");
mysqli_close($connection);
header("Refresh:0; url=exam.php");
} else{
	header("Refresh:0; url=exam.php");
}

?>