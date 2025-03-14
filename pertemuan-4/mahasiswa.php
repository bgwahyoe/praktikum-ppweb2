<?php

class mahasiswa {
    private $nama;
    public $nim;
    public $semester;

    public function __construct($nama) {
        $this->nama = $nama;
        echo "Mahasiswa baru telah di buat ! <br>";
    }

    public function sayang ($nama) {
        echo $nama . " sayang deh <br>";
    }

    public function getNama () {
        return $this->nama;
    }

}

$salman = new mahasiswa("Salman");
$varel = new mahasiswa("Mahardika");

echo $salman -> getNama() . "<br>";
echo $varel -> getNama() . "<br>";