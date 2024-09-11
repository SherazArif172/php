<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="name"><br><br>
        <button name="button" value="create">create</button> <br><br>
        <button name="button" value="display">display</button> <br><br>
        <button name="button" value="delete">delete</button>
    </form>
</body>
</html>



<?php

if (isset($_POST["button"])) {
    # code...
    if ($_POST["button"]=="create") {
        # code...
        $val= $_POST["name"];
        setcookie("user", $val, time()+2000);
        // echo "is set";
    }
}

if ($_POST["button"]=="display") {
    # code...
    if (isset($_COOKIE["name"])) {
        # code...
        echo  $_COOKIE["name"]; 
    }
}


?>