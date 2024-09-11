<?php

// include("./test.php");    // can be called many times 

// for ($i=0; $i <5 ; $i++) { 
//     # code...
//     include("./test.php");    // can be called many times 

// }


// include once


// include_once("./test.php");  //can be called only once gives warning on wrong path

// for ($i=0; $i <3 ; $i++) { 
//     # code...
//     include_once("./test.php");  //can be called only once give warning on wrong path

// }



// require


require('./test.php');      // gives error on wrong path

require_once('./test.php')  // same as include once but give fatel error path

?>