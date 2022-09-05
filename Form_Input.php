<!DOCTYPE>
<html>
    <body>
        <h3>Nilai Total Mata Kuliah</h3>
        <form action="Form_Output.php" method="POST" name="FormNilai">
            <label for="MK_Pertama">Nilai Mata Kuliah 1 = </label> 
            <input type="text" name="MK_Pertama"> <br>
            <label for="MK_Kedua">Nilai Mata Kuliah 2 = </label>
            <input type="text" name="MK_Kedua"> <br>
            <input type="submit" name="Submit_Nilai" value="Jumlah">
        </form>

        <h3>Data Mahasiswa</h3>
        <form action="" method="GET" name="FormMahasiswa">
            <label for="Nama_Depan">Nama Depan = </label>
            <input type="text" name="Nama_Depan"> <br>
            <label for="Nama_Belakang">Nama Belakang = </label>
            <input type="text" name="Nama_Belakang"> <br>
            <label for="Program_Studi">Program Studi = </label>
            <input type="text" name="Program_Studi"> <br>
            <input type="submit" name="Submit_Data" value="Kirim">
        </form>
    </body>
</html>

<?php 
    if(isset($_GET['Submit_Data'])) {
        $NamaDepan    = $_GET['Nama_Depan'];
        $NamaBelakang = $_GET['Nama_Belakang'];
        $ProgramStudi = $_GET['Program_Studi'];
        echo 'Mahasiswa dengan nama lengkap ' . $NamaDepan . $NamaBelakang . ' dari program studi ' . $ProgramStudi . ' fakultas teknik, Universitas Trunojoyo Madura.';
    }

    session_start();
    $Pesan = 'Berapapun nilai yang didapat tetap semangat ya, kuliahnya :)';
    $_SESSION['Cetak_Pesan'] = $Pesan;
?>