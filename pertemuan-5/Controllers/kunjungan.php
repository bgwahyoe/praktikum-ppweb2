<?php
require_once 'Config/MYSQL.php';

class Kunjungan
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function index()
    {
        $query = "SELECT * FROM kunjungan";
        $result = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $row;
    }

    public function show($id)
    {
        
    }

    public function create($data)
    {
        
    }

    public function update($id, $data)
    {
        
    }

    public function delete($id)
    {
        
    }
}

$Kunjungan = new Kunjungan($conn);
