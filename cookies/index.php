<?php

    setcookie("fruit", "apple", time()+(60));

    if (isset($_COOKIE["fruit"])) {
        # code...
        echo "cookies is set";
    } else {
        echo "cookies is not set";
    }

?>