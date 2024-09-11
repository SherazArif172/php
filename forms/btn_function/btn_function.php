<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <button name="btn">button</button>
    </form>
</body>
</html>



<?php

if (isset($_POST["btn"])) {
    // echo "button clicked";
    sheraz();
}

function sheraz(){
    echo "sheraz";
}

?>