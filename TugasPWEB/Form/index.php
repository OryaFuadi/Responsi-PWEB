<!DOCTYPE html>
<html lang="en">
<head>
   <title>FORM</title>
   <style>
        .formback{
            margin: 100px auto;
            width: 40%;
            border: 1px solid goldenrod;
            padding: 10px;
            background-color: antiquewhite;    
        }
        body{
            background-image: url("stars.jpg");
        }
   </style>
</head>
<body >
    <div class="formback">
        <form action="io.php" align="center" method="post" name="formaja">
            <h1>Data Diri</h1>
            <input type="text" placeholder="Nama" name="nama" id="nama"><br>
            <br>
            <input type="text" placeholder="Tempat/Tanggal Lahir" name="ttl" id="ttl"><br>
            <br>
            <input type="text" placeholder="Pekerjaan" name="pkj" id="pkj"><br>
            <br>
            <input type="text" placeholder="Alamat" name="alamat" id="alamat"><br>
            <br>
            <input type="text" placeholder="No. Handphone" name="nohp" id="nohp"><br>    
            <br>
            kelamin: 
            <input type="radio" id="laki" name="kelamin" value="laki" id="kelamin">
            <label for="laki">Laki-Laki</label>
            <input type="radio" id="perempuan" name="kelamin" value="perempuan" id="kelamin">
            <label for="perempuan">Perempuan</label><br>
            <br>
            <input type="submit" value="kirim">
        </form>
    </div>
</body>
</html>