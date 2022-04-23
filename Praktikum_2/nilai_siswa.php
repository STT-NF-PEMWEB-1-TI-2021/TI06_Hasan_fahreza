<?php
if (isset($_POST["proses"])) {
    $nama = $_POST["name"];
    $matkul = $_POST["matkul"];
    $nilai_uts = $_POST["nilai_uts"];
    $nilai_uas = $_POST["nilai_uas"];
    $nilai_tugas = $_POST["nilai_tugas"];
    $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
    echo "Nama Lengkap : " . $nama . "<br>";
    echo "Mata Kuliah : " . $matkul . "<br>";
    echo "Nilai UTS : " . $nilai_uts . "<br>";
    echo "Nilai UAS : " . $nilai_uas . "<br>";
    echo "Nilai Tugas : " . $nilai_tugas . "<br>";
    echo "Nilai Akhir : " . $nilai_akhir . "<br>";
    if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        echo "Total Nilai : " .
            number_format($nilai_akhir, 2, ",", ",") .
            " <br> Grade : A.  <br> Keterangan : Sangat Memuaskan. ";
    } elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
        echo "Total Nilai : " .
            number_format($nilai_akhir, 2, ",", ",") .
            " <br> Grade : B.  <br> Keterangan : Memuaskan. ";
    } elseif ($nilai_akhir >= 56 && $nilai_akhir <= 69) {
        echo "Total Nilai : " .
            number_format($nilai_akhir, 2, ",", ",") .
            " <br> Grade : C.  <br> Keterangan : Cukup. ";
    } elseif ($nilai_akhir >= 36 && $nilai_akhir <= 55) {
        echo "Total Nilai : " .
            number_format($nilai_akhir, 2, ",", ",") .
            " <br> Grade : D.  <br> Keterangan : Kurang. ";
    } elseif ($nilai_akhir >= 1 && $nilai_akhir <= 35) {
        echo "Total Nilai : " .
            number_format($nilai_akhir, 2, ",", ",") .
            ' <br> Grade : E.  <br> Keterangan : Sangat Kurang. ';
    } elseif ($nilai_akhir <= 0 && $nilai_akhir <= 100) {
        echo "Total Nilai : " .
            number_format($nilai_akhir, 2, ",", ",") .
            ' <br> Grade : .  <br> Keterangan : Tidak ada. ';
    }
}
?>
