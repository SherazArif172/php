<?php

$sheraz = ["ali", "tayyab", "sheraz", "bazura"];

foreach ($sheraz as $ali) {
    # code...

    // if ($ali=="sheraz") {
    //     # code...
    //     break;
    // }

    if ($ali=="sheraz") {
        # code...
        continue;
    }

    echo $ali;
    echo "<br>";


}
?>