<?php
    // mendefinisikan konstanta
    define ("PHI", 3.14);
    define ("DBNAME", "Inventori");
    define ("DBSERVER", "Localhost");

    $jari = 8;
    $luas = PHI * $jari * $jari;
    $keliling = 2 * PHI * $jari;

    echo "Luas Lingkaran dengan jari " . $jari . " adalah : " . $luas;
    echo "<br/>dan Keliling Lingkaran : " . $keliling;

?>
<hr>
<?php
    echo "Nama Database : " . DBNAME;
    echo "<br/>Server Database : " . DBSERVER;
?>