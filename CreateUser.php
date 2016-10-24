<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "hchaudhry", "hellion", "hchaudhry");
$userName = $_POST["userName"];

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "INSERT INTO Users (user_id)
VALUES ('".$userName."')";

if ($mysqli->query($query)) {
    echo("User ".$userName." added.");
} else {
    echo("User ".$userName." was not added.");
}

/* close connection */
$mysqli->close();
?>