<html>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/tether/1.3.7/tether.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"
          integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"
            integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU"
            crossorigin="anonymous"></script>
    <script src="formChecker.js"></script>
</head>
<body>
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "hchaudhry", "hellion", "hchaudhry");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT user_id FROM Users ORDER by user_id ASC";

echo("<table class='table table-striped'>");
echo("<thead>");
echo("<tr>");
echo("<th>User Name</th>");
echo("</tr>");
echo("</thead>");

if ($result = $mysqli->query($query)) {

    while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>");
        echo($row["user_id"]);
        echo("</td>");
        echo("</tr>");
    }


    $result->free();
} else {
    echo("Something broke...");
}
echo("</table>");
/* close connection */
$mysqli->close();
?>
</body>
</html>
