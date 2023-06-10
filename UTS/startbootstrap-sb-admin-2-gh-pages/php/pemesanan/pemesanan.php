<?php

include "../../databases/koneksi.php";


$sql = "SELECT * FROM `pemesanan` ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);


?>


<div id="permintaan">
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
            <h1 class="h3 mb-2 text-gray-800">Pemesanan</h1>
            <button type="button" class="btn addPemesanan btn-success px-3 my-2">
              <i class="fas fa-plus fa-sm"></i>
            </button>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table tableMasterPemesanan table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode</th>
                      <th>Kode Karyawan</th>
                      <th>Kode Supplier</th>
                      <th>Tanggal</th>
                      <th>Telepon</th>
                      <th>Alamat</th>
                      <th>Keterangan</th>
                      <th>Total Harga</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody id="tbodyTabelPemesanan">

                    <?php
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["kode_pem"] . "</td>";
                        echo "<td>" . $row["kode_karyawan"] . "</td>";
                        echo "<td>" . $row["kode_supp"] . "</td>";
                        echo "<td>" . $row["tanggal"] . "</td>";
                        echo "<td>" . $row["telepon"] . "</td>";
                        echo "<td>" . $row["alamat"] . "</td>";
                        echo "<td>" . $row["keterangan"] . "</td>";
                        echo "<td>" . $row["total_hrg"] . "</td>";
                        echo "<td>";
                        echo "<button id='viewPemesanan' class='btn btn-outline-primary' data-toggle='modal' data-target='#modalViewPemesanan' > <i class='fas fa-eye fa-sm'></i></i> </button>";
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
                  <tfoot>
                    <tr>
                      <th colspan="7">Total</th>
                      <!-- <th id="totalItem">Item</th> -->
                      <th id="totalPermintaan">Total</th>
                      <th></th>
                    </tr>
                  </tfoot>
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
  <div class="modal fade" id="modalAddBarang" tabindex="-1" role="dialog" aria-labelledby="modalAddBarangLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h5 class="modal-title" id="modalLabelBarang">Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form>
          <div class="modal-body">
            <input type="hidden" name="_token" value="x69ZyrUU0dB2R3MQup1nPSO2BmKoNvtymxYQWPAN" />
            <input type="hidden" id="editId" value="" />
            <div class="form-group">
              <label for="kodeBarang">Kode</label>
              <input type="text" class="form-control" id="kodeBarang" placeholder="M001" name="kodeBarang" />
            </div>
            <div class="form-group">
              <label for="namaBarang">Nama</label>
              <input type="text" class="form-control" id="namaBarang" placeholder="Batu" />
            </div>
            <div class="form-group">
              <label for="satuanBarang">Satuan</label>
              <input type="text" class="form-control" id="satuanBarang" placeholder="Pcs" />
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label for="hargaBeli">Harga Beli</label>
                  <input type="number" class="form-control" id="hargaBeli" placeholder="10000" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label for="hargaJual">Harga Beli</label>
                  <input type="number" class="form-control" id="hargaJual" placeholder="15000" />
                </div>
              </div>
            </div>
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Close
          </button>
          <button type="button" class="btn btn-success" id="addBarang" data-dismiss="modal">
            Add
          </button>
          <button type="button" id="uptdBarang" class="btn btn-success" data-dismiss="modal">
            Update
          </button>
          <button type="button" id="hapusBarang" class="btn btnHps btn-danger" data-dismiss="modal">
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

  <!-- Modal View Permintaan -->
  <div class="modal  fade" id="modalViewPemesanan" tabindex="-1" role="dialog" aria-labelledby="modalViewLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRekapViewLabel">View Pemesanan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card text-center mb-5">
            <ul class="list-group list-group-flush">
              <li class="list-group-item detKode">Kode : J001</li>
              <li class="list-group-item detTanggal">Tanggal : 2023-4-8</li>
              <li class="list-group-item detKaryawan">Karyawan : Budi M</li>
              <li class="list-group-item detSupplier">Supplier : Agus</li>
              <li class="list-group-item detKeterangan">Keterangan : OK</li>
            </ul>
          </div>

          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table tableViewPemesanan table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>Satuan</th>
                      <th>Jumlah</th>
                      <th>Harga</th>
                    </tr>
                  </thead>
                  <tbody id="tbodyViewPemesanan">
                  </tbody>
                  <tfoot id="tfootViewPemesanan">

                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>


  <!-- Logout Modal-->
  <div class="modal  fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      var grandTotal = 0;
      var totalItem = 0;
      $("#tbodyTabelPemesanan tr").each(function() {
        var currentRow = $(this);
        // console.log(currentRow.find("td:eq(5)").text());
        grandTotal += Number(currentRow.find("td:eq(7)").text());
        // totalItem += Number(currentRow.find("td:eq(4)").text());
        // console.log(grandTotal);
      });

      $("#totalPermintaan").text(grandTotal);

      $(".addPemesanan").click(function() {
        $("#content").load("php/pemesanan/addPemesanan.php");
      });

      $(".tableMasterPemesanan").on("click", "#viewPemesanan", function() {
        var currentRow = $(this).closest("tr");

        var col1 = currentRow.find("td:eq(0)").text(); // get current row 1st TD value
        var col2 = currentRow.find("td:eq(3)").text(); // get current row 2nd TD
        var col3 = currentRow.find("td:eq(1)").text();
        var col4 = currentRow.find("td:eq(2)").text();
        var col5 = currentRow.find("td:eq(6)").text();
        // console.log(col1, col2, col3);


        $(".detKode").text("Kode : " + col1);
        $(".detTanggal").text("Tanggal : " + col2);
        $(".detKaryawan").text("Karyawan : " + col3);
        $(".detSupplier").text("Supplier : " + col4);
        $(".detKeterangan").text("Keterangan : " + col5);



        $.ajax({
          url: "php/transaksi/detailKaryawan.php",
          type: "POST",
          dataType: "json",
          data: {
            kodeKar: col3,
          },
          success: function(data, response) {
            $(".detKaryawan").text("Karyawan : " + data[0].nama_karyawan);
          },
          error: function(data) {
            alert("Gagal Kar");
          },
        });


        $.ajax({
          url: "php/pemesanan/detaiLSupplier.php",
          type: "POST",
          dataType: "json",
          data: {
            kodeSup: col4,
          },
          success: function(data, response) {
            $(".detSupplier").text("Supplier : " + data[0].nama_sales);
          },
          error: function(data) {
            alert("Gagal Sup");
          },
        });

        $.ajax({
          url: "php/pemesanan/kodePemesanan.php",
          type: "POST",
          dataType: "json",
          data: {
            kodePem: col1,
          },
          success: function(data, response) {
            let jumlahItem = 0;
            $("#tbodyViewPemesanan tr").remove();
            $("#tfootViewPemesanan tr").remove();

            let i = 0;
            for (const d of data) {
              jumlahItem += Number(d.jumlah);
              $('#tbodyViewPemesanan').append(`
                <tr>
                  <td>${d.kode_barang}</td>
                  <td>${d.nama_barang}</td>
                  <td>${d.satuan}</td>
                  <td>${d.jumlah}</td>
                  <td>${d.harga_beli}</td>
                </tr>
            `);
              i++;
            }

            $('#tfootViewPemesanan').append(` 
                    <tr>
                      <th colspan="3">Total</th>
                      <th id="totalItem">${data[0].total_item}</th>
                      <th id="totalPermintaan">${data[0].total_hrg}</th>
                    </tr>`);

            $(".tableViewPemesanan").DataTable();
          },
          error: function(data) {
            alert("Data Gagal Ditambahkan");
          },
        });

      });
    });
  </script>
</div>