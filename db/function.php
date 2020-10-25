<?php 
class database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "db_latihansoal";
    var $koneksi = "";
    // connect ke database
    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host,$this->username,$this->password,$this->database);
        if(mysqli_connect_error()){
            echo "koneksi gagal" . mysqli_connect_error();
        }
    }

    function tampil_user(){
        $data = mysqli_query($this->koneksi,"SELECT * FROM rekapitulasi");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    function tampil_soal(){
        $data = mysqli_query($this->koneksi,"SELECT * FROM soal_latihan");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    function insert_user($nama_user,$kelas_user,$skor){
        $insert = mysqli_query($this->koneksi,"INSERT INTO rekapitulasi VALUES('','$nama_user','$kelas_user','$skor')");
        $query = mysqli_query($this->koneksi,"SELECT * FROM rekapitulasi WHERE nama_user='$nama_user'");
        $data_user = $query->fetch_array();
        $_SESSION['nama_user'] = $data_user['nama_user'];
        $_SESSION['nama_kelas'] = $data_user['kelas_user'];
        $_SESSION['login'] = TRUE;
        echo "<script>document.location.href ='../index.php'</script>";    
    }
    function inset_score($nama_user,$score){
        mysqli_query($this->koneksi,"UPDATE rekapitulasi SET skor='$score' WHERE nama_user='$nama_user' ");
    }
}
?>
