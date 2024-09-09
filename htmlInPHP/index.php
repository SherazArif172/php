<?php
$name_color = "pink"; // Added semicolon
echo "<h1 style='color:red;'>sheraz</h1>"; // Fixed HTML tag and added quotes for the style attribute
echo "<h2 style='color:red;'>sheraz</h2>"; // Corrected tag name from h1 to h2
$tayyab = "tayyab";
?>

<h1>
    <?php
    echo "<h2 style='color:blue;'>sheraz .. $tayyab</h2>"; // Fixed HTML tag
    ?>
</h1>

<h2 style="color:<?php echo $name_color; ?>">  <!-- Added quotes and semicolon -->
    <?php
    echo "sheraz"; // Added semicolon
    ?>
</h2>

<h2 style="color:<?php echo $name_color; ?>">
    <?php
    echo "sheraz"; // Added semicolon
    ?>
</h2>

<h2 style="color:<?php echo $name_color; ?>">
    <?php
    echo "sheraz"; // Added semicolon
    ?>
</h2>
