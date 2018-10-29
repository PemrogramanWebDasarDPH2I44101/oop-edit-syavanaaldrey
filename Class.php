<?php
class Data{
    private $conn;
    public function Data(){
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $db         = "pwd";
        $this->conn = mysqli_connect($servername, $username, $password, $db);
    }
    public function tambah(){
        $nim = $_POST['input1'];
        $nama = $_POST['input2'];
        $sql    = "INSERT INTO mahasiswa(nim, nama) VALUES ('$nim','$nama')";
        if (mysqli_query($this->conn, $sql)) {
            echo "berhasil";
        }else {
            echo mysqli_error($this->conn);
        }
    }
    public function kurang(){
        $nim = $_GET["nim"];
        $sql    = "DELETE FROM mahasiswa WHERE nim=$nim";
        if (mysqli_query($this->conn, $sql)) {
            echo "berhasil";
        }else {
            echo mysqli_error($this->conn);
        }
    }
    public function bagi(){
        $sql    = "SELECT * FROM mahasiswa";
        return mysqli_query($this->conn, $sql);
    }
    public function update()
    {
        $nim = $_POST['input1'];
        $nama = $_POST['input2'];
        $sql    = "UPDATE mahasiswa SET nama='$nama' WHERE nim='$nim'";
        if (mysqli_query($this->conn, $sql)) {
            echo "berhasil";
        }else {
            echo mysqli_error($this->conn);
        }
    }
}
$operasi = isset($_POST["operasi"]) ? $_POST["operasi"] : "";
$kalkulator = new Data();
if($operasi == "+")
    $kalkulator->tambah();
if(isset($_GET["nim"]))
    $kalkulator->kurang();
if($operasi == "/"){
    $result = $kalkulator->bagi();
    require_once("data.php");
}
if(isset($_POST["edit"])) {
    $kalkulator->update();
}
