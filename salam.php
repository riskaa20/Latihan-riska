<?php 
$nama_presiden = $_GET['nama']??"";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salam, Pak <?php echo $nama_presiden; ?></title>
</head>
<body>
    <h1><php echo $nama_presiden; ?>Ir Soekarno adalah salah satu mantan presiden indonesia.</h1>
</body>
</html>