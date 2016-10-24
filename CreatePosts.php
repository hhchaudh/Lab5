<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "hchaudhry", "hellion", "hchaudhry");
$userName = $mysqli->real_escape_string($_POST["userName"]);
//$userPost = $_POST["userPost"];
$userPost = $mysqli->real_escape_string($_POST["userPost"]);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "INSERT INTO Posts (content, author_id )
VALUES ('".$userPost."','".$userName."')";

if ($mysqli->query($query)) {
    echo("User <strong>".$userName."</strong> added.<br/>");
    echo("Message <strong>".$userPost."</strong> was added.<br />");
} else {
    echo("User <strong>".$userName."</strong> was not added.<br />");
    echo("Message <strong>".$userPost."</strong> was not added.<br />");
}

/* close connection */
$mysqli->close();
?>