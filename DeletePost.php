<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "hchaudhry", "hellion", "hchaudhry");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "DELETE FROM Posts WHERE ";

foreach($_POST as $key => $value) {
    $query = $query."post_id='$key' OR ";

}

$query = chop($query, " OR ");

if($mysqli->query($query)) {
    foreach($_POST as $key => $value) {
        echo("Post number ".$key." deleted<br/>");
    }
}

echo($query);
?>