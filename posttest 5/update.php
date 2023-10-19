<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <?php

    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_peserta
    if (isset($_GET['id_peserta'])) {
        $id_peserta=input($_GET["id_peserta"]);

        $sql="select * from peserta where id_peserta=$id_peserta";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);


    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_peserta=htmlspecialchars($_POST["id_peserta"]);
        $nama=input($_POST["nama"]);
        $nim=input($_POST["nim"]);
        $jenis_kelamin=input($_POST["jenis_kelamin"]);
        $alamat=input($_POST["alamat"]);
        $email=input($_POST["email"]);
        $notelp=input($_POST["notelp"]);

        //Query update data pada tabel anggota
        $sql="update peserta set
		    nama='$nama',
			nim='$nim',
			jenis_kelamin='$jenis_kelamin',
			alamat='$alamat',
			email='$email'
			notelp='$notelp'
			where id_peserta=$id_peserta";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:indexlibrary.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>

        </div>

        <div class="form-group">
            <label>Nim:</label>
            <input type="text" name="nim" class="form-control" placeholder="Masukan Nim" required>
        </div>
       <div class="form-group">
            <label>Jenis Kelamin :</label>
            <input type="text" name="jenis_kelamin" class="form-control" placeholder="Masukan Jenis Kelamin" required>
        </div>
                </p>
        <div class="form-group">
            <label>Alamat:</label>
            <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input name="email" class="form-control" rows="5"placeholder="Masukan Email" required>
        </div>  
        <div class="form-group">
            <label>No Telpon:</label>
            <input name="notelp" class="form-control" rows="5"placeholder="Masukan No Telpon" required>
        </div>       

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>