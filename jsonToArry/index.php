<?php

// $sheraz = ["name"=>"sheraz","friend"=>"ali"];     // arry to json
// $convert = json_encode($sheraz);

// print_r($convert);

// $jsonn = '{"name":"sheraz","friend":"ali"}';     // json to object

// $convert = json_decode($jsonn);

// print_r($convert);


$jsonn = '{"name":"sheraz","friend":"ali"}';     // json to arry

$convert = json_decode($jsonn,true);

print_r($convert);

?>