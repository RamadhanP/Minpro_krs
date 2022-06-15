<!-- FUNCTION -->
<?php
require "../function.php";

// Menampilkan Mahasiswa
$mahasiswa = query("SELECT * FROM admin WHERE level = 2");
?>
<!-- HEADER -->
<?php require "header.php"; ?>

<!-- Begin Page Content --><title>primary</title>

<div class="container-fluid">

    <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"></h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between py-3">
            <h6 class="m-0 font-weight-bold text-dark">Pembayaran Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-striped" id="tabel-data">
                    <thead>
                        <tr>
                            <th width="20">No.</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Program Studi</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($mahasiswa as $mhs) : 
                            if($mhs["confirm"] == 1){
                                $confirm = "Sudah diverifikasi";
                            } 
                            else {
                                $confirm = "Belum diverifikasi";
                            }
                        ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $mhs["nama"]; ?></td>
                                <td><?= $mhs["nim"]; ?></td>
                                <td><?= $mhs["program_studi"]; ?></td>
                                <td><?= $confirm ?>  <i class="fas fa-fw <?= $mhs["icon_confirm"]; ?>"></i></td>
                                <td>
                                    <a href="wisudawan_edit.php?id=<?= $mhs["id"]; ?>" class="btn btn-dark btn-circle btn-sm"><i class="fas fa-fw fa-edit"></i></a>
                                    <a href="mhs_pembayaran.php?id=<?= $mhs["id"]; ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-fw fa-check"></i></a>
                                    <a href="wisudawan_delete.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Yakin akan menghapus data atas nama <?= $mhs["nama"]; ?>?');" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-fw fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    <script type="text/javascript">
          $(document).ready(function(){
            $('#tabel-data').DataTable();
          });
        </script>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require "footer.php"; ?>