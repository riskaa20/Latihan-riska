<?php

$nama = ["Adellia", "tia", "Riska", "Fitri", "Zeni"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping for Array</title>
</head>
<body>
    <?php
        for ($i = 0; $i < count($nama); $i++){
            echo "<li>$nama[$i]</li>";
        }
    ?>
</body>
</html>