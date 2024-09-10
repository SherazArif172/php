
       


    <?php
    $parent=[
        [1, "sheraz", "sheraz@gmail.com"],
        [2, "tayyab", "tayyab@gmail.com"],
        [3, "ahad", "ahad@gmail.com"]
    ];

    echo "<table border=1>";

    for ($i=0; $i <count($parent) ; $i++) { 
        # code...
        echo "<tr>";
      for ($j=0; $j <count($parent[$i]) ; $j++) { 
        # code...
        echo "<td>".$parent[$i][$j]."</td>";
        // echo $parent[$i][$j];
      }
      echo " </tr>";
    }


    echo "    </table>";
    ?>