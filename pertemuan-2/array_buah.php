<?php
    $arraybuah = ["Pepaya", "Mangga", "Pisang", "Jambu",];
    // Menampilkan buah index ke 1
    echo $arraybuah[1];
    // Menampilkan jumlah buah
    echo "<br/>Jumlah buah : " . count($arraybuah);
    // Menampilkan semua buah
    echo "<ol>";
    foreach ($arraybuah as $buah) {
        echo "<li>" . $buah . "</li>";
    } echo "</ol>";

    // Menambahkan buah
    $arraybuah[] = "Apel";

    // menghapus buah index ke 1
    unset($arraybuah[1]);

    // mengubah buah index ke 1 menjadi "Manggis"
    $arraybuah[2] = "Manggis";

    // Menampilkan semua buah dengan index nya
    echo "<ul>";
    foreach ($arraybuah as $buah => $w) {
        echo "<li> Buah index ke " . $buah . " : " . $w . "</li>";
    } echo "</ul>";

    echo "<ul>";
    sort($arraybuah);
    foreach ($arraybuah as $buah => $w) {
        echo "<li> Buah index ke " . $buah . " : " . $w . "</li>";
    } echo "</ul>";

    
?>