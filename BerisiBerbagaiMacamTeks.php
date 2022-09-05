<?php
    echo ("a. Ini teks yang ada di dalam teks PHP, jadi akan muncul di tampilan ketika menggunakan perintah echo.");
    print " Jadi, file PHP pasti bisa menampung teks PHP itu sendiri. (kita juga bisa menggunakan perintah print)";
?>
<br>
b. Ini teks biasa yang ada di luar tag PHP, jadi file PHP bisa menampung teks biasa.
<html>
    <head>
        <link rel="stylesheet" href="IniHTML_CSSeksternal.css">
    </head>
    <body>
        <br>
        <p id="IniHTML_CSSinternal">
            c. Kalau yang ini teks HTML, karena ada di dalam tag HTML. Jadi file PHP bisa menampung teks HTML.
        </p>
        <p id="IniHTML_CSSinline" style="font-weight: bold; font-family: Arial;">
            d. Untuk teks HTML dalam sebuah file PHP juga bisa menampung jenis teks CSS (memperindah suatu tulisan).
        </p>
        <p id="IniHTML_CSSeksternal" >
            e. Untuk penulisan CSS terdapat 3 metode penulisan yaitu internal, inline, dan eksternal.
        </p>
        <h4>f. Button ini menggunakan JavaScript, jadi file PHP bisa menampung teks JS.</h4>
        <button type="button" onclick="document.getElementById('tampil').innerHTML = Date()">
            Tampilkan Tanggal dan Waktu Saat Ini.</button>
        <p id="tampil"></p>
    </body>
</html>

<style>
    #IniHTML_CSSinternal {
        font-size: 24pt;
        font-style: italic;
    }
</style>