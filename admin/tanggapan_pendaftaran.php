<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tanggapan Pendaftaran</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div class="card shadow">
        <div class="card-header">
            Tanggapan Pendaftaran
        </div>

        <div class="card-body">
            <div class="col-sm-6">
                <a href="?url=verifikasi_pendaftaran" class="btn btn-success btn-sm"><i class="fas fa-arrow-left"></i>Kembali</a>
            </div>
        </div>



        <div class="card-body">
            <form action="simpan_tanggapan_pendaftaran.php" method="post" class="form-horizontal" enctype="multipart/form-data">

                <div class="form-group col-sm-6">
                    <label>Id Pendaftaran</label>
                    <input type="text" name="id_pendaftaran" value="<?= $_GET['id'] ?>" class="form-control" readonly="">
                </div>

                <div class="form-group col-sm-6">
                    <label>Tanggal Tanggapan</label>
                    <input type="text" name="tgl_tanggapan" value="<?= date('Y/m/d') ?>" class="form-control" readonly="">
                </div>
                <div class="form-group col-sm-6">
                    <label>Tulis Tanggapan</label>
                    <textarea type="text" name="tanggapan" rows="7" class="form-control"></textarea>
                </div>
                <div class="form-group col-sm-6">
                    <label>Nama Petugas</label>
                    <input type="text" name="nama_petugas" value="<?= $_SESSION['nama'] ?>" class="form-control" readonly>
                </div>
                <input type="submit" class="btn btn-warning" value="Simpan">
            </form>
        </div>
    </div>








    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>