<?php
class Conn
{
    protected $conn;
    private $db = "tugas2_pweb2";
    private $username = "root";
    private $pass = "";
    private $host = "localhost";

    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->username, $this->pass, $this->db);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }

    public function tampilData(){}

}

class Tampiltugas extends Conn
{
    public function tampilData()
    {
        $data = mysqli_query($this->conn, "select * from surat_tugas");
            while ($row = mysqli_fetch_array($data)) {
                $hasil[] = $row; }
                
        return $hasil;
    }
    
}

class Tampilizin extends Conn
{
    public function tampilData()
    {
        $data = mysqli_query($this->conn, "select * from permohonan_izin");
            while ($row = mysqli_fetch_array($data)) {
                $hasil[] = $row; }
                
        return $hasil;
    }
    
}

$tugas = new Tampiltugas();
$izin = new Tampilizin();