<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>
<body>
    <?php
    $mahasiswa = [
        "001" => "Adellia",
        "002" => "tia",
        "003" => "Riska",
        "004" => "Fitri",
        "005" => "Zeni"];
    ?>
    
    <?php foreach ($mahasiswa as $nrp => $nama) : ?>
        <li><?php echo "$nrp : $nama" ?></li>
    <?php endforeach ?>
</body>
</html>