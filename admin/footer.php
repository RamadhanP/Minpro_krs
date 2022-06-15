<!-- End Navbar -->
<footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                DESA CISALAK
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/Contoh/assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
  <script src="/Contoh/assets/js/plugins/sweetalert.min.js"></script>


  <?php
// Edit verifikasi mahasiswa
if (isset($_POST["user_verify_edit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (wisudawan_verify_edit($_POST) > 0) {
        echo "<script>
             ('berhasil')
				);
            </script>";
    } else {
        echo "<script>
        ('berhasil')
            </script>";
    }
}
?>

<?php
// Tambah Mahasiswa
if (isset($_POST["tambah_matakuliah"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah_matakuliah($_POST) > 0) {
        echo "<script>
                Swal.fire(
				    'Berhasil!',
				    'Data Wisudawan Berhasil Ditambahkan',
				    'success'
				);
            </script>";
    } else {
        echo "<script>
                Swal.fire(
				    'Gagal!',
				    'Data Wisudawan Gagal Ditambahkan',
				    'error'
				);
            </script>";
    }
}
?>
</body>

</html>