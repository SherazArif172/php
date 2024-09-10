<?php


// for ($i=0; $i <=10 ; $i++) {    // break
//     if ($i== 5) {
//         break;
//     }
//    echo $i;
//    echo "<br>";
// }

for ($i=0; $i <=10 ; $i++) {    // continue
    if ($i== 5 || $i==7) {
        continue;
    }
   echo $i;
   echo "<br>";
}


?>