<?php
include "header.php"; ?>

<div class="container-fluid py-4">
<h3>Mata Kuliah</h3>
<div class="row justify-content-between">
    <div class="col-6 mt-2">
    <a href="tambah_matakuliah.php" class="btn btn-info">Tambah data</a>
    <a target="_blank" class="btn btn-danger" href="export_to_excel.php">PDF</a>
    </div>
   </div>
   <div class="row">
        <div class="col">
          <div class="card mt-3">
            <div class="card-header">
        <table class="table table-striped" id="tabel-data">
        <thead>
            <tr>
                        <th scope="col"> NO.</th>
                        <th scope="col">No. Matkul</th>
                        <th scope="col">Nama Dosen</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">Jumlah SKS</th>
                        <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php
                include "../function.php";
                $no = 1;
                $data = mysqli_query(
                    $koneksi,
                    "SELECT * FROM matkul ORDER BY id DESC"
                );
                while ($d = mysqli_fetch_array($data)) { ?> 
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d["id_matkul"]; ?></td>
                        <td><?php echo $d["nama_dosen"]; ?></td>
                        <td><?php echo $d["mata_kuliah"]; ?></td>
                        <td><?php echo $d["jumlah_sks"]; ?></td>
                         <td>
                            <a href="edit_penduduk.php?hal=edit&id_penduduk=<?= $d[
                                "id_penduduk"
                            ] ?>" class="btn btn-primary btn-icon btn-round"> <i class="fa fas-fw fa-user"></i></a>
                        <form action="hapus_penduduk.php" method="post" class="d-inline">
                            <button type="submit" name="delete_data" value="<?= $d[
                                "id_penduduk"
                            ] ?>" class="btn btn-danger btn-icon btn-round"> O </i>
                            </button>
                        </form>
                        </td>
                    </tr>
                    <?php } ?>

          </tbody>
          <script type="text/javascript">
          $(document).ready(function(){
            $('#tabel-data').DataTable();
          });
        </script>
          </table>
        </div>

<?php include "footer.php";
?>
