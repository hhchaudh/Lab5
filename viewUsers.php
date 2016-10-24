<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "hchaudhry", "hellion", "hchaudhry");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT user_id FROM Users ORDER by user_id ASC";

if ($result = $mysqli->query($query)) {
    while($row = $result->fetch_assoc()) {
        echo($row["user_id"]."<br/>");
    }

    $result->free();
} else {
    echo("Something broke...");
}

/* close connection */
$mysqli->close();
?>