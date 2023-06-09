<?php

include "../../databases/koneksi.php";

$sql = "select * from karyawan";
$result = mysqli_query($conn, $sql);

?>


<div id="karyawan">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          </form>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
              <div class="input-group-append">
                <button class="btn btn-success" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="row p-3 flex justify-content-between">
            <h1 class="h3 mb-2 text-gray-800">Karyawan</h1>
            <button type="button" class="btn addKaryawan btn-success px-3 my-2" data-toggle="modal" data-target="#modalAddKaryawan">
              <i class="fas fa-plus fa-sm"></i>
            </button>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>Jabatan</th>
                      <th>Telepon</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <!-- <tfoot>
                      <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Satuan</th>
                        <th>Harga</th>
                        <th>Action</th>
                      </tr>
                    </tfoot> -->
                  <tbody id="tbodyTabelKaryawan">
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["kode_karyawan"] . "</td>";
                        echo "<td>" . $row["nama_karyawan"] . "</td>";
                        echo "<td>" . $row["jabatan"] . "</td>";
                        echo "<td>" . $row["telepon"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["password"] . "</td>";
                        echo "<td>";
                        echo "<button id='updateKaryawan' class='btn btn-outline-primary' data-toggle='modal' data-target='#modalAddKaryawan' > <i class='fas fa-pen fa-sm'></i></i> </button>";
                        echo "<div style='display:inline-block; width:10px;'></div>";
                        echo "</td>";
                        echo "</tr>";
                      }
                    } else {
                      echo "<tr>";
                      echo "<td colspan='6' class='text-center'>Data Kosong</td>";
                      echo "</tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- modal add -->
  <div class="modal fade" id="modalAddKaryawan" tabindex="-1" role="dialog" aria-labelledby="modalAddKaryawanLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h5 class="modal-title" id="modalLabelKarayawan">Karyawan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form>
          <div class="modal-body">
            <input type="hidden" name="_token" value="x69ZyrUU0dB2R3MQup1nPSO2BmKoNvtymxYQWPAN" />
            <input type="hidden" id="editId" value="" />
            <div class="form-group">
              <label for="kodeKaryawan">Kode</label>
              <input type="text" class="form-control" id="kodeKaryawan" placeholder="K001" name="kodeKaryawan" />
            </div>
            <div class="form-group">
              <label for="namaKaryawan">Nama</label>
              <input type="text" class="form-control" id="namaKaryawan" placeholder="Batu" />
            </div>
            <div class="form-group">
              <label for="jabatanKaryawan">Jabatan</label>
              <input type="text" class="form-control" id="jabatanKaryawan" placeholder="Admin" />
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label for="telpKaryawan">Telepon</label>
                  <input type="tel" class="form-control" id="telpKaryawan" placeholder="124567854" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label for="emailKaryawan">Email</label>
                  <input type="email" class="form-control" id="emailKaryawan" placeholder="hab2gmail.com" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label for="passwordKaryawan">Password</label>
                  <input type="password" class="form-control" id="passwordKaryawan" placeholder="12345678" />
                </div>
              </div>
            </div>
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Close
          </button>
          <button type="button" class="btn btn-success" id="addKaryawan" data-dismiss="modal">
            Add
          </button>
          <button type="button" id="uptdKaryawan" class="btn btn-success" data-dismiss="modal">
            Update
          </button>
          <button type="button" id="hapusKaryawan" class="btn btnHps btn-danger" data-dismiss="modal">
            Delete
          </button>
          <!-- <button
            type="button"
            class="btn updt btn-success"
            id="saveModalButton"
            data-dismiss="modal"
            style="display: none"
          >
            Update
          </button> -->
        </div>
      </div>
    </div>
  </div>

  <!-- modal view barang -->
  <div class="modal fade" id="modalViewBarang" tabindex="-1" role="dialog" aria-labelledby="modalViewLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalViewLabel">Detail Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card text-center">
            <ul class="list-group list-group-flush">
              <li class="list-group-item detKode">M002</li>
              <li class="list-group-item detNama">CPU</li>
              <li class="list-group-item detSatuan">Pcs</li>
              <li class="list-group-item detHarga">1000</li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">
            Update
          </button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">
            Delete
          </button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Select "Logout" below if you are ready to end your current session.
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Cancel
          </button>
          <a class="btn btn-success" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>


  <script>
    $(document).ready(function() {
      $("#uptdKaryawan").hide();
      $(".btnHps").hide();
      $("#addKaryawan").show();

      $(".addKaryawan").click(function() {
        $("#kodeKaryawan").val("");
        $("#namaKaryawan").val("");
        $("#jabatanKaryawan").val("");
        $("#telpKaryawan").val("");
        $("#emailKaryawan").val("");
        $("#passwordKaryawan").val("");
        $('#kodeKaryawan').prop('readonly', false);
      })

      $("#addKaryawan").click(function() {


        $("#uptdKaryawan").hide();
        $(".btnHps").hide();
        $("#addKaryawan").show();
        var kode = $("#kodeKaryawan").val();
        var nama = $("#namaKaryawan").val();
        var jabatanKaryawan = $("#jabatanKaryawan").val();
        var telpKaryawan = $("#telpKaryawan").val();
        var emailKaryawan = $("#emailKaryawan").val();
        var passwordKaryawan = $("#passwordKaryawan").val();

        console.log(kode, nama, jabatanKaryawan, telpKaryawan, emailKaryawan, passwordKaryawan);
        $.ajax({
          url: "php/karyawan/simpanKaryawan.php",
          type: "POST",
          data: {
            kode: kode,
            nama: nama,
            jabatanKaryawan: jabatanKaryawan,
            telpKaryawan: telpKaryawan,
            emailKaryawan: emailKaryawan,
            passwordKaryawan: passwordKaryawan
          },
          success: function(data) {
            console.log(data);
            // alert("Data Berhasil Ditambahkan");
            $("#content").load("php/karyawan/tambahKaryawan.php");

            // location.reload();
          },
          error: function(data) {
            console.log(data);
            alert("Data Gagal Ditambahkan");
          },
        });

        $(".modal-backdrop .fade .show").remove();
      });

      $("#uptdKaryawan").click(function() {
        var kode = $("#kodeKaryawan").val();
        var nama = $("#namaKaryawan").val();
        var jabatanKaryawan = $("#jabatanKaryawan").val();
        var telpKaryawan = $("#telpKaryawan").val();
        var emailKaryawan = $("#emailKaryawan").val();
        var passwordKaryawan = $("#passwordKaryawan").val();

        console.log(kode, nama, jabatanKaryawan, telpKaryawan, emailKaryawan, passwordKaryawan);
        $.ajax({
          url: "php/karyawan/updateKaryawan.php",
          type: "POST",
          data: {
            kode: kode,
            nama: nama,
            jabatanKaryawan: jabatanKaryawan,
            telpKaryawan: telpKaryawan,
            emailKaryawan: emailKaryawan,
            passwordKaryawan: passwordKaryawan,
          },
          success: function(data) {
            console.log(data);
            // alert("Data Berhasil Ditambahkan");
            $("#content").load("php/karyawan/tambahKaryawan.php");

            // location.reload();
          },
          error: function(data) {
            console.log(data);
            alert("Data Gagal Ditambahkan");
          },
        });
        $(".modal-backdrop .fade .show").remove();

      });

      $("#hapusKaryawan").click(function() {
        var kode = $("#kodeKaryawan").val();
        var nama = $("#namaBarang").val();
        var jabatanKaryawan = $("#jabatanKaryawan").val();
        var telpKaryawan = $("#telpKaryawan").val();
        var emailKaryawan = $("#emailKaryawan").val();
        var passwordKaryawan = $("#passwordKaryawan").val();

        console.log(kode, nama, jabatanKaryawan, telpKaryawan, emailKaryawan, passwordKaryawan);
        $.ajax({
          url: "php/karyawan/hapusKaryawan.php",
          type: "POST",
          data: {
            kode: kode,
            nama: nama,
            jabatanKaryawan: jabatanKaryawan,
            telpKaryawan: telpKaryawan,
            emailKaryawan: emailKaryawan,
            passwordKaryawan: passwordKaryawan,
          },
          success: function(data) {
            console.log(data);
            // alert("Data Berhasil Ditambahkan");
            $("#content").load("php/karyawan/tambahKaryawan.php");

            // location.reload();
          },
          error: function(data) {
            console.log(data);
            alert("Data Gagal Ditambahkan");
          },
        });
        $(".modal-backdrop .fade .show").remove();
      });



      $(".table").on("click", "#updateKaryawan", function() {
        $("#uptdKaryawan").show();
        $(".btnHps").show();
        $("#addKaryawan").hide();

        // ("#kodeKaryawan").attr('readonly', true);
        var currentRow = $(this).closest("tr");

        var col1 = currentRow.find("td:eq(0)").text(); // get current row 1st TD value
        var col2 = currentRow.find("td:eq(1)").text(); // get current row 2nd TD
        var col3 = currentRow.find("td:eq(2)").text();
        var col4 = currentRow.find("td:eq(3)").text();
        var col5 = currentRow.find("td:eq(4)").text();
        var col6 = currentRow.find("td:eq(5)").text();
        console.log(col1, col2, col3, col4, col5, col6);

        $("#kodeKaryawan").val(col1);
        $("#namaKaryawan").val(col2);
        $("#jabatanKaryawan").val(col3);
        $("#telpKaryawan").val(col4);
        $("#emailKaryawan").val(col5);
        $("#passwordKaryawan").val(col6);
        $('#kodeKaryawan').prop('readonly', true);
      });
    });
  </script>
</div>