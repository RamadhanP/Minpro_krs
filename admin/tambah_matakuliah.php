<?php require '../function.php'; ?>

<?php
include 'header.php';
?>

             <!-- Begin Page Content -->
      <div class="container-fluid">
      <div class="container-fluid">

        <div class="card card-success">
	    <div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data </h3>
	    </div>
	    <form class="user" action="" method="POST">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Dosen</label>
				<div class="col-sm-6">
                <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" placeholder="Nama Dosen" required>
				</div>
			</div>

			<div class="form-group row">
			<label class="col-sm-2 col-form-label">Mata Kuliah</label>
			<div class="col-sm-6">
            <input type="text" class="form-control" id="mata_kuliah" name="mata_kuliah" placeholder="Mata Kuliah" required>
             </div>
            </div>
        
			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">ID Mata Kuliah</label>
				<div class="col-sm-6">
                <input type="text" class="form-control" id="id_matkul" name="id_matkul" placeholder="ID Mata Kuliah" required>
				</div>
			</div>
            <div class="form-group row">
				<label  class="col-sm-2 col-form-label">Jumlah SKS</label>
				<div class="col-sm-6">
                <input type="text" class="form-control" id="jumlah_sks" name="jumlah_sks" placeholder="Jumlah SKS" required>
				</div>
			</div>
            <br>
		<div class="col-sm-10">
        <button type="submit" name="tambah_matakuliah" class="btn btn-primary">Tambah</button>
		<a href="matakuliah.php" class="btn btn-warning">Kembali</a>
        </div>
		<br>
	   </form>
       </div>

	
<?php
include 'footer.php';
?>
