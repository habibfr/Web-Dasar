<?php

include "../../databases/koneksi.php";

$sql = "select * from supplier";
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
            <h1 class="h3 mb-2 text-gray-800">Supplier</h1>
            <button type="button" class="btn tambahSupplier btn-success px-3 my-2" data-toggle="modal" data-target="#modalAddSupplier">
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
                      <th>Perusahaan</th>
                      <th>Telepon Sales</th>
                      <th>Telepon Kantor</th>
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="tbodyTabelSupplier">
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["kode_supp"] . "</td>";
                        echo "<td>" . $row["nama_sales"] . "</td>";
                        echo "<td>" . $row["perusahaan"] . "</td>";
                        echo "<td>" . $row["telepon_sales"] . "</td>";
                        echo "<td>" . $row["telepon_kantor"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["alamat"] . "</td>";
                        echo "<td>";
                        echo "<button id='updateSupplier' class='btn btn-outline-primary' data-toggle='modal' data-target='#modalAddSupplier' > <i class='fas fa-pen fa-sm'></i></i> </button>";
                        echo "<div style='display:inline-block; width:10px;'></div>";
                        echo "</td>";
                        echo "</tr>";
                      }
                    } else {
                      echo "<tr>";
                      echo "<td colspan='7' class='text-center'>Data Kosong</td>";
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
  <div class="modal fade" id="modalAddSupplier" tabindex="-1" role="dialog" aria-labelledby="modalAddSupplierLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h5 class="modal-title" id="modalLabelKarayawan">Supplier</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form>
          <div class="modal-body">
            <input type="hidden" name="_token" value="x69ZyrUU0dB2R3MQup1nPSO2BmKoNvtymxYQWPAN" />
            <input type="hidden" id="editId" value="" />
            <div class="form-group">
              <label for="kodeSup">Kode</label>
              <input type="text" class="form-control" id="kodeSup" placeholder="K001" name="kodeSup" />
            </div>
            <div class="form-group">
              <label for="namaSalesSup">Nama Sales</label>
              <input type="text" class="form-control" id="namaSalesSup" placeholder="Batu" />
            </div>

            <div class="form-group">
              <label for="perusahaanSup">Nama Sales</label>
              <input type="text" class="form-control" id="perusahaanSup" placeholder="APA YA" />
            </div>


            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label for="telpSalesSup">Telp Sales</label>
                  <input type="tel" class="form-control" id="telpSalesSup" placeholder="Admin" />
                </div>
                <div class="col">
                  <label for="telpKantorSup">Telepon Kantor</label>
                  <input type="tel" class="form-control" id="telpKantorSup" placeholder="124567854" />
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label for="emailSup">Email</label>
                  <input type="email" class="form-control" id="emailSup" placeholder="hab2gmail.com" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label for="alamatSup">Alamat</label>
                  <input type="text" class="form-control" id="alamatSup" placeholder="12345678" />
                </div>
              </div>
            </div>
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="closeModalSup" data-dismiss="modal">
            Close
          </button>
          <button type="button" class="btn btn-success" id="addSupplier" data-dismiss="modal">
            Add
          </button>
          <button type="button" id="uptdSupplier" class="btn btn-success" data-dismiss="modal">
            Update
          </button>
          <button type="button" id="hapusSupplier" class="btn btnHps btn-danger" data-dismiss="modal">
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

      function hideBtn() {
        $("#kodeSup").attr('readonly', false);
        $("#uptdSupplier").hide();
        $(".btnHps").hide();
        $("#addSupplier").show();
      }

      function showBtn() {
        $("#kodeSup").attr('readonly', true);
        // $("#kodeSup").prop("readonly", false);
        $("#uptdSupplier").show();
        $(".btnHps").show();
        $("#addSupplier").hide();
      }

      hideBtn();

      $(".tambahSupplier").click(function() {
        hideBtn();
        $("#kodeSup").val("");
        $("#namaSalesSup").val("");
        $("#perusahaanSup").val("");
        $("#telpSalesSup").val("");
        $("#telpKantorSup").val("");
        $("#emailSup").val("");
        $("#alamatSup").val("");
        // $("#kodeSup").prop("readonly", false);
      });

      $("#addSupplier").click(function() {
        var kode = $("#kodeSup").val();
        var nama = $("#namaSalesSup").val();
        var perusahaanSup = $("#perusahaanSup").val();
        var telpSalesSup = $("#telpSalesSup").val();
        var telpKantorSup = $("#telpKantorSup").val();
        var emailSup = $("#emailSup").val();
        var alamatSup = $("#alamatSup").val();

        // console.log(
        //   kode,
        //   nama,
        //   perusahaanSup,
        //   telpSalesSup,
        //   telpKantorSup,
        //   emailSup,
        //   alamatSup
        // );
        $.ajax({
          url: "php/supplier/simpanSupplier.php",
          type: "POST",
          data: {
            kode: kode,
            nama: nama,
            perusahaanSup: perusahaanSup,
            telpSalesSup: telpSalesSup,
            telpKantorSup: telpKantorSup,
            emailSup: emailSup,
            alamatSup: alamatSup
          },
          success: function(data) {
            console.log(data);
            alert("Data Berhasil Ditambahkan");
            $("#content").load("php/supplier/tambahSupplier.php");

            // location.reload();
          },
          error: function(data) {
            console.log(data);
            alert("Data Sup Gagal Ditambahkan");
          },
        });

        $(".modal-backdrop .fade .show").remove();
      });

      $("#uptdSupplier").click(function() {
        $(".modal-backdrop").remove();

        var kode = $("#kodeSup").val();
        var nama = $("#namaSalesSup").val();
        var perusahaanSup = $("#perusahaanSup").val();
        var telpSalesSup = $("#telpSalesSup").val();
        var telpKantorSup = $("#telpKantorSup").val();
        var emailSup = $("#emailSup").val();
        var alamatSup = $("#alamatSup").val();

        console.log(kode, nama, telpSalesSup, telpKantorSup, emailSup, alamatSup);
        $.ajax({
          url: "php/supplier/ubahSupplier.php",
          type: "POST",
          data: {
            kode: kode,
            nama: nama,
            perusahaanSup: perusahaanSup,
            telpSalesSup: telpSalesSup,
            telpKantorSup: telpKantorSup,
            emailSup: emailSup,
            alamatSup: alamatSup
          },
          success: function(data) {
            console.log(data);
            alert("Data Berhasil Diupdate");
            $("#content").load("php/supplier/tambahSupplier.php");

            // location.reload();
          },
          error: function(data) {
            // console.log(data);
            alert("Data Gagal Diupdate");
          },
        });

        $(".modal-backdrop .fade .show").remove();
      });

      $("#hapusSupplier").click(function() {
        var kode = $("#kodeSup").val();
        var nama = $("#namaSalesSup").val();
        var perusahaanSup = $("#perusahaanSup").val();
        var telpSalesSup = $("#telpSalesSup").val();
        var telpKantorSup = $("#telpKantorSup").val();
        var emailSup = $("#emailSup").val();
        var alamatSup = $("#alamatSup").val();

        // console.log(kode, nama, telpSalesSup, telpKantorSup, emailSup, alamatSup);
        $.ajax({
          url: "php/supplier/hapusSupplier.php",
          type: "POST",
          data: {
            kode: kode,
          },
          success: function(data) {
            console.log(data);
            alert("Data Berhasil Dihapus");
            $("#content").load("php/supplier/tambahSupplier.php");

            // location.reload();
          },
          error: function(data) {
            // console.log(data);
            alert("Data Gagal Dihapus");
          },
        });
        $(".modal-backdrop .fade .show").remove();
      });

      $(".table").on("click", "#updateSupplier", function() {
        showBtn();

        // ("#kodeSup").attr('readonly', true);
        var currentRow = $(this).closest("tr");

        var col1 = currentRow.find("td:eq(0)").text(); // get current row 1st TD value
        var col2 = currentRow.find("td:eq(1)").text(); // get current row 2nd TD
        var col3 = currentRow.find("td:eq(2)").text();
        var col4 = currentRow.find("td:eq(3)").text();
        var col5 = currentRow.find("td:eq(4)").text();
        var col6 = currentRow.find("td:eq(5)").text();
        var col7 = currentRow.find("td:eq(6)").text();
        console.log(col1, col2, col3, col4, col5, col6);

        $("#kodeSup").val(col1);
        $("#namaSalesSup").val(col2);
        $("#perusahaanSup").val(col3);
        $("#telpSalesSup").val(col4);
        $("#telpKantorSup").val(col5);
        $("#emailSup").val(col6);
        $("#alamatSup").val(col7);
        // $("#kodeSup").prop("readonly", true);
      });

    });
  </script>
</div>