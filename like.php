<?php


global $connection;
mysqli_query($connection, "UPDATE alikhach_exam SET likescount=likescount+1");
mysqli_close($connection);
header("Refresh:0; url=exam.php");


?>