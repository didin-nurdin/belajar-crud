<?php
    //Koneksi Database
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "belajar_crud";

    $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

//jika tombol simpan di klik maka
if(isset($_POST['bsimpan']))
{
    $simpan = mysqli_query($koneksi, "INSERT INTO tcrud (no_kar, nama, jabatan, aktifitas, keterangan)
    VALUES ('$_POST[tnomor]', '$_POST[tnama]', '$_POST[tjabatan]', '$_POST[taktifitas]', '$_POST[tketerangan]')");

    if($simpan) 
    {
        echo "<script>
        alert ('Data kamu sukses disimpan!');
        document.location='index.php';
        </script>";
    }

    else
    {
    echo "<script>
        alert ('Data kamu gagal disimpan!');
        document.location='index.php';
        </script>";
    }

}


?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktifitas Harian Karyawan</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <!-- Judul -->
    <div class="container text-center">
        <h1>Aktifitas Harian Karyawan</h1>
</br>
       
    </div>
    <!-- Akhir Judul -->
    <!-- Awal form card -->
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Aktivitas harian karyawan
            </div>
            <div class="card-body">
                <form method="post" action="">
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label>No. Karyawan</label>
                        <input type="text" name="tnomor" class="form-control" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Nama</label>
                        <input type="text" name="tnama" class="form-control" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Posisi jabatan</label>
                        <input type="text" name="tjabatan" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Status kehadiran</label>
                        <select class="form-control" name="tketerangan">
                            <option></option>
                            <option value="WFO">WFO</option>
                            <option value="WFH">WFH</option>
                        </select>
                    </div>
                </div>
                    <div class="form-group">
                        <label>Aktivitas hari ini</label>
                        <textarea type="text" name="taktifitas" class="form-control" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
                    <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Akhir form card -->


    <!-- Awal form card -->
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-success text-white">
                Report harian seluruh karyawan
            </div>
           <div class="card-body">


           <table class="table table-bordered table-striped">
<tr class="text-center">
    <th>No</th>
    <th>No. Karyawan</th>
    <th>Nama</th>
    <th>Jabatan</th>
    <th>Tanggal</th>
    <th>Aktifitas</th>
    <th>Status</th>
</tr>

<?php
$no =1;
$tampil = mysqli_query($koneksi,"SELECT * from tcrud order by id_kar desc");
while($data = mysqli_fetch_array($tampil)) :

?>

<tr>
    <td class="text-center"><?=$no++;?></td>
    <td class="text-center"><?=$data['no_kar']?></td>
    <td><?=$data['nama']?></td>
    <td><?=$data['jabatan']?></td>
    <td><?=$data['created']?></td>
    <td><?=$data['aktifitas']?></td>
    <td class="text-center"><?=$data['keterangan']?></td>
</tr>

<?php endwhile; // penutup perulangan while ?>

           </table>
           </div>
           
        </div>
    </div>
    <!-- Akhir form card -->




    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>