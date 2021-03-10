


<DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="syle.css">
    </head>


    <body>
        <a href="index.php">Lihat Semua Data Pendaftaran</a>
    </br>


        <h3>Input Data Baru</h3>
    
        <form action="input-aksi.php" method="post">

        <table>
            <tr>
                <td><b>Nik</b></td>
                <td>: <input type="number" name="nik"></td>

            </tr>

            <tr>
                <td><b>Nama</b></td>
                <td>: <input type="text" name="nama"></td>
                
            </tr>

            <tr>
                <td><b>Tanggal Lahir</b></td>
                <td>: <input type="date" name="tgl_lahir"></td>
                
            </tr>

            <tr>
                <td><b>Umur</b></td>
                <td>: <input type="number" name="umur"></td>
                
            </tr>

            <tr>
                <td><b>Alamat</b></td>
                <td>: <input type="text" name="alamat"></td>
                
            </tr>

            <tr>
                <td><b>Asal Sekolah</b></td>
                <td>: <input type="text" name="asal_sekolah"></td>
                
            </tr>

            <tr>
                <td><b>Minat Jurusan</b></td>
                <td>: <input type="text" name="minat_jurusan"></td>
                
            </tr>

            <tr>
                <td><b>No HP</b></td>
               <td>: <input type="number" name="no_hp"></td>
                
</tr>

        </table>

        <br>
        <button type="submit" style="width:253px; height:50px;"><h2>KIRIM</h2></button>
        </br>

        </form>
    </body>
</html>