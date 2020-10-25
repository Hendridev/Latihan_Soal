<?php
    include('../db/function.php');
    $db = new database();
    $user = $db->tampil_user();
    $no = 1;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('css.php') ?>
</head>
<body>
    <h4>leaderboard</h4>
    <?php foreach($user as $us) { ?>
        <p><?php echo $us['nama_user'] ?>|<span>Kelas: <?php echo $us['kelas_user'] ?></span>||<span>Score : <?php echo $us['skor'] ?></span>|</p>
    <?php } ?>
</body>
</html>