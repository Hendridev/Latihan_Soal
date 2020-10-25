<?php 
    session_start(); 
    include('../db/function.php');
    $db = new database();
    if(isset($_POST['login'])){
        $nama_user = $_POST['nama_user'];
        $kelas_user = $_POST['kelas_user'];
        $skor = 0;
        $db->insert_user($nama_user,$kelas_user,$skor);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="container">
        <div class="social">
        </div>
        <div class="sidebar">
            <p>Ulangan harian</p>
        </div>
        <div class="login">
            <div class="title">
                <p>PEMROGRAMAN</p>
            </div>
            <div class="wrapper">
                <form action="" class="wrap" method="post">
                    <input required type="text" name="nama_user" placeholder="Nama" id="nama">
                    <select name="kelas_user" style="padding: 2px;" id="password">
                        <option value="Penambang">Penambang</option>
                        <option value="Petani">Petani</option>
                        <option value="Pandai Besi">Pandai Besi</option>
                        <option value="Paladin">Paladin</option>
                        <option value="Programmer">Programmer</option>
                        <option value="Pelajar">Pelajar</option>
                    </select>
                    <button type="submit" name="login">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>