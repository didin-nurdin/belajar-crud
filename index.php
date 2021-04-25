<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CRUD dengan PHP, MYSQL dan BOOTSTRAP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <!-- Judul -->
    <div class="container text-center">
        <h1>CRUD PHP, MYSQL & BOOTSTRAP</h1>
        <h2>INPUT DATA KARYAWAN</h2>
    </div>
    <!-- Akhir Judul -->
    <!-- Awal form card -->
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel aktivitas harian
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label>No. Karyawan</label>
                        <input type="text" name="tnomor" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="tnama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Posisi jabatan</label>
                        <input type="text" name="tjabatan" class="form-control" required>
                    </div>
                    <div class="form-group mt-3">
                        <label>Aktivitas hari ini</label>
                        <textarea type="text" name="taktifitas" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Status kehadiran</label>
                        <select class="form-control" name="tkehadiran">
                            <option></option>
                            <option value="WFO">WFO</option>
                            <option value="WFH">WFH</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
                    <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Akhir form card -->


    <!-- Awal form card -->
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                Form input data karyawan
            </div>
           <div class="card-body">


           <table class="table table-bordered table-striped">
<tr class="text-center">
    <th>No</th>
    <th>No. Karyawan</th>
    <th>Nama</th>
    <th>Jabatan</th>
    <th>Aktifitas</th>
    <th>Status</th>
</tr>

<tr>
    <td class="text-center">1</td>
    <td class="text-center">11751</td>
    <td>Jahida Kalinda Nurdin</td>
    <td>Supervisor</td>
    <td>Membuat laporan data order yang masuk per hari ini</td>
    <td class="text-center">WFO</td>
</tr>

           </table>
           </div>
           
        </div>
    </div>
    <!-- Akhir form card -->




    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>