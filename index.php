<?php
    session_start();
    if(! isset($_SESSION['login']))
    {
        header('location:php/login.php');
    }
    include('db/function.php');
    $db = new database();
    $user = $db->tampil_user();
    $soal = $db->tampil_soal();
    $no = 1;
    $score = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <div class="identify">
            <div class="box">
                <p>ulangan harian</p>
            </div>
            <table>
                <tr>
                    <td><p>NAMA</p></td>
                    <td>: <?php echo $_SESSION['nama_user'] ?></td>
                </tr>
                <tr>
                    <td><p>KELAS</p></td>
                    <td>: <?php echo $_SESSION['nama_kelas'] ?></td>
                </tr>
                <tr>
                    <td><p>MAPEL</p></td>
                    <td>: Pemrograman</td>
                </tr>
            </table>
        </div>
    <div class="container">
        <div class="soal-box">
    <form action="php/hasil.php" method="post">
    <?php foreach($soal as $sl) { ?>
    <div class="soal">
    <p class="list-soal"><span><?php echo $no ?>. </span><?php echo $sl['soal_latihan'] ?></p>
    <input type="radio" id="jawaban_A<?php echo $no ?>" name="jawaban<?php echo $no ?>" value="A">
    <label for="jawaban_A<?php echo $no ?>"><?php echo $sl['jawaban_a'] ?></label><br>
    <input type="radio" id="jawaban_B<?php echo $no ?>" name="jawaban<?php echo $no ?>" value="B">
    <label for="jawaban_B<?php echo $no ?>"><?php echo $sl['jawaban_b'] ?></label><br>
    <input type="radio" id="jawaban_C<?php echo $no ?>" name="jawaban<?php echo $no ?>" value="C">
    <label for="jawaban_C<?php echo $no ?>"><?php echo $sl['jawaban_c'] ?></label><br>
    <input type="radio" id="jawaban_D<?php echo $no ?>" name="jawaban<?php echo $no ?>" value="D">
    <label for="jawaban_D<?php echo $no ?>"><?php echo $sl['jawaban_d'] ?></label><br>
    </div>
    <?php $no++; ?>
    <?php } ?>
    <button type="submit" name="kirim" class="kirim">Selesai</button>
    </form>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
