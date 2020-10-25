<?php 
    session_start();
    include('../db/function.php');
    $db = new database();
    $user = $db->tampil_user();
    $soal = $db->tampil_soal();
    $no = 1;
    $score = 0;
    $nama = $_SESSION['nama_user'];

    foreach($soal as $sl){

        if(isset($_POST['kirim'])){
            if(!empty($_POST['jawaban'.$no])){
                if ($sl['jawaban_benar'] == $_POST['jawaban'.$no]) {
                    $score += 1;
                }
                else{
                    $score += 0;
                }
            }
        }
        $no++;
    }
    $db->inset_score($nama,$score);
    unset($_SESSION['login']);
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
    <h4>Nama :<?php echo $_SESSION['nama_user'] ?></h4>
    <h4>Kelas :<?php echo $_SESSION['nama_kelas'] ?></h4>
    <h5>Skor Benar : <?php echo $score ?> </h5>
    <h5>Nilai : <?php echo $score*10; ?></h5>
    <a href="leaderboard.php">Lihat leaderboard</a>
</body>
</html>