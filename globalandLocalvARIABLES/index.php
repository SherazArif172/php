<?php

$name = "sheraz";    // global variable

function test(){
    global $name;  // accessing global variable inside function
    echo $name;
}

function main(){
    $name = "tayyab";
    echo $name;

    function child(){

        global $name;     // will get global variablw outside his parent function
        echo $name;

    }
}


echo $name;
echo "<br>";
test();
echo "<br>";
main();
echo "<br>";
child();

?>