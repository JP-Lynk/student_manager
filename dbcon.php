<?php
        define("HOSTNAME","localhost");
        define("USERNAME","root");
        define("PASSWORD","");
        define("DATABASE","crud_student");
    $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    if (!$connection) {
        die("Connection Failed");
    }
?>
<button type="submit"></button>