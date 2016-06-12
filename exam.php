<?php
require_once('func.php');
session_start();
connect_db();

include_once('head.html');

echo '<p>Loo leheküljele "like" nupp. Kuva välja "like"-ide arvu. Andmed salvesta andmebaasi.<br/>
Lahendust mõeldes eelda, et kasutaja brauseris on lubatud nii Javascript kui ka küpsised.</p>';


include_once('foot.html');





?>