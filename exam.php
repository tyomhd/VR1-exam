<?php
require_once('func.php');
session_start();
connect_db();
/*
if(!empty($_GET)){
    $page=$_GET['page'];
} else {
    $page="main";
}

switch($page) {
    case "vote":
        likeit();
        break;
    case "main":
    header("Location: exam.php");
        break;    
    default:
    header("Location: exam.php");
    break;    
     }
*/



include_once('head.html');


echo '<p>Loo leheküljele "like" nupp. Kuva välja "like"-ide arvu. Andmed salvesta andmebaasi.<br/>
Lahendust mõeldes eelda, et kasutaja brauseris on lubatud nii Javascript kui ka küpsised.</p>
';


$selecttable = "SELECT * FROM alikhach_exam";
$result = mysqli_query($connection, $selecttable);
if ($result->num_rows > 0) {
    echo "<table border='1'><tr>";
    echo "<th>id</th>";
    echo "<th>likes</th></tr>";
 
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['postid']."</td>";
        echo "<td>".$row['likescount']."</td>";
        echo "</tr>";
     }
    echo "</table>";
} else {
    echo "Table is empty";
}

echo '<form method="post" action="like.php">
<button type="submit" formaction="like.php">like it</button>
</form>';

echo '<form method="post" action="destroysession.php">
<p>Want to destroy session? </p>
<input type="submit" value="Destroy session"/>
</form>';

include_once('foot.html');










?>