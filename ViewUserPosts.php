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
</head>
<body>
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "hchaudhry", "hellion", "hchaudhry");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$userName = $_POST["userName"];

echo("<h1>Posts by ".$userName."</h1>");
echo("<table class='table'>");
echo("<thead>");
echo("<tr>");
echo("<th>Post ID</th>");
echo("<th>Content</th>");
echo("</tr>");

$query = "SELECT * FROM Posts WHERE author_id=('".$userName."')";

if($result = $mysqli->query($query)) {


    while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['post_id']."</td>");
        echo("<td>".$row['content']."</td>");
        echo("</tr>");
    }
} else {
    echo('Something went wrong with the query');
}
?>
</body>
</html>
