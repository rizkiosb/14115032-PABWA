<HTML>

<HEAD>
    <title>Koneksi Database MySQL</title>
</HEAD>

<BODY>
    <h1>Koneksi database dengan mysql_fetch_assoc</h1>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "negara") or die("koneksi gagal");
    $hasil = mysqli_query($conn, "select * from liga");
    while ($row = mysqli_fetch_row($hasil)) {
        echo "Liga " . $row[1];
        echo " mempunyai " . $row[2];
        echo " wakil di liga champion <br>";
    }
    ?>
</BODY>

</HTML>