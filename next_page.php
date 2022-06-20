<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    session_start();
    echo "<html>";

    $queryString = $_SERVER["QUERY_STRING"];
    echo "Query string of the incoming URL: ".$queryString."<br>";

    echo "Cookies received:<br>";
    foreach ($_COOKIE as $name => $value){
        echo " $name = $value<br>";
    }

    $sid = session_id();
    echo "Session ID returned by session_id(): ".$sid."<br>";
    $sid = SID;
    echo "Session ID returned by SID: ".$sid."<br>";

    $myLogin = $_SESSION["myLogin"];
    echo "Value of myLogin has been retrieved: ".$myLogin."<br>";
    $myColor = $_SESSION["myColor"];
    echo "Value of myColor has been retrieved: ".$myColor."<br>";

    echo "</html>\n";
    ?>

</body>
</html>