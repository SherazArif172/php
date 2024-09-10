<?php


$parent=[
    ["sheraz", 21],
    ["tayyab", 22],
    ["ahad", 23]
];

for ($i=0; $i < count($parent) ; $i++) { 
    # code...
    // print_r($parent[$i]);
    // echo "<br>";

    for ($j=0; $j < count($parent[$i]); $j++) { 
        # code...
        echo  $parent[$i][$j]."<br>";

    }
}

?>