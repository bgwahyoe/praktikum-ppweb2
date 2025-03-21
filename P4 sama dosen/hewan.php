<?php

class hewan {
    public $nama;
    public $spesies;
    public $habitat;
    public $jumlah_kaki;
    public $makanan;

}

class mamalia extends hewan {
    public $melahirkan;
    public $berbulu;
}

class reptil extends hewan {
    public $bertelur;
    public $berdarahdingin;
}

$kucing = new mamalia();
$kucing -> nama = "Kucing";
$kucing -> spesies = "Felis catus";
$kucing -> habitat = "Hutan";
$kucing -> jumlah_kaki = 4;
$kucing -> makanan = "Ikan";
$kucing -> melahirkan = true;
$kucing -> berbulu = true;

$ular = new reptil();
$ular -> nama = "Ular";
$ular -> spesies = "Urosaurus Raptor";
$ular -> habitat = "Desa";
$ular -> jumlah_kaki = 0;
$ular -> makanan = "Daging";
$ular -> bertelur = true;
$ular -> berdarahdingin = true;

echo $kucing -> nama ;


?>