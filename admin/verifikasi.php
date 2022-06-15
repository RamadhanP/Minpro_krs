<!-- FUNCTION -->
<?php
require '../function.php';

$id = $_GET["id"];

// Query data pekerjaan berdasarkan id pekerjaan di atas

$admin = query("SELECT * FROM admin WHERE id = $id")[0];
?>

<!-- HEADER -->
<?php require "header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="mb-4">
        <h1 class="h4 mb-0 text-gray-800">Dokumen Verifikasi Data Atas Nama <?= $admin["nama"] ?></h1>
    </div>

    <div class="row">
        <!-- Akta Kelahiran -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Akta Kelahiran</div>
                            <img src="../assets/img/akta/<?= $admin["foto_akta"] ?>" class="img-thumbnail" width="300">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between py-3">
            <h6 class="m-0 font-weight-bold text-dark">Tombol Verifikasi</h6>
        </div>
        <div class="card-body">
            <form class="user" action="" method="post">

                <input type="hidden" name="id" value="<?= $admin["id"] ?>">

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="checkSudah" name="verify" value="1" required>
                    <label class="form-check-label" for="checkSudah">Ceklis Jika Mahasiswa Sudah Mengupload File Verifikasi</label>
                </div>

                <button type="submit" name="user_verify_edit" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-save fa-sm text-white-50 mr-2"></i>Simpan Perubahan Data</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php require "footer.php"; ?>