<?php 
    $NilaiMK_A = $_POST['MK_Pertama'];
    $NilaiMK_B = $_POST['MK_Kedua'];
    $JumlahNilai = $NilaiMK_A + $NilaiMK_B;

    if(isset($_POST['Submit_Nilai'])){
        echo 'Nilai Total = ' . $NilaiMK_A . ' + ' . $NilaiMK_B . '<br>';
        echo 'Nilai Total = ' . $JumlahNilai;
    }

    session_start();
    echo '<br>' . $_SESSION['Cetak_Pesan'];
?>