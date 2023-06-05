<?php

include "../../databases/koneksi.php";


$sql = "SELECT * FROM `master_permintaan`";
$result = mysqli_query($conn, $sql);

// echo $kodePer;

// $result1 = mysqli_query($conn, $sql);



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
            <h1 class="h3 mb-2 text-gray-800">Permintaan</h1>
            <button type="button" class="btn addPermintaan btn-success px-3 my-2">
              <i class="fas fa-plus fa-sm"></i>
            </button>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table tableMasterPermintaan table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode</th>
                      <th>Tanggal</th>
                      <th>Konsumen</th>
                      <th>Telepon</th>
                      <th>Alamat</th>
                      <th>Keterangan</th>
                      <th>Kode Karyawan</th>
                      <th>Total</th>
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
                  <tbody id="tbodyTabelPermintaan">

                    <?php
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["kode_permintaan"] . "</td>";
                        echo "<td>" . $row["tanggal"] . "</td>";
                        echo "<td>" . $row["konsumen"] . "</td>";
                        echo "<td>" . $row["telp"] . "</td>";
                        echo "<td>" . $row["alamat"] . "</td>";
                        echo "<td>" . $row["keterangan"] . "</td>";
                        echo "<td>" . $row["kode_karyawan"] . "</td>";
                        echo "<td>" . $row["total"] . "</td>";
                        echo "<td>";
                        echo "<button id='viewPermintaan' class='btn btn-outline-primary' data-toggle='modal' data-target='#modalViewPermintaan' > <i class='fas fa-eye fa-sm'></i></i> </button>";
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
  <div class="modal  fade" id="modalViewPermintaan" tabindex="-1" role="dialog" aria-labelledby="modalViewLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRekapViewLabel">View Permintaan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card text-center mb-5">
            <ul class="list-group list-group-flush">
              <li class="list-group-item detKode">Kode : J001</li>
              <li class="list-group-item detTanggal">Tanggal : 2023-4-8</li>
              <li class="list-group-item detKonsumen">Konsumen : Agus</li>
              <li class="list-group-item detKaryawan">Karyawan : Budi M</li>
            </ul>
          </div>

          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>Satuan</th>
                      <th>Harga</th>
                      <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tbody id="tbodyViewPermintaan">
                  </tbody>
                  <tfoot id="tfootViewPermintaan">

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

      let dataPer = [];


      var grandTotal = 0;
      var totalItem = 0;
      $("#tbodyTabelPermintaan tr").each(function() {
        var currentRow = $(this);
        // console.log(currentRow.find("td:eq(5)").text());
        grandTotal += Number(currentRow.find("td:eq(7)").text());
        // totalItem += Number(currentRow.find("td:eq(4)").text());
        // console.log(grandTotal);
      });

      $("#totalPermintaan").text(grandTotal);

      $(".addPermintaan").click(function() {
        $("#content").load("php/transaksi/addPermintaan.php");
      });

      $(".tableMasterPermintaan").on("click", "#viewPermintaan", function() {

        // $("#uptdBarang").show();
        // $(".btnHps").show();
        // $("#addBarang").hide();

        // ("#kodeBarang").attr('readonly', true);
        var currentRow = $(this).closest("tr");

        var col1 = currentRow.find("td:eq(0)").text(); // get current row 1st TD value
        var col2 = currentRow.find("td:eq(1)").text(); // get current row 2nd TD
        var col3 = currentRow.find("td:eq(2)").text();
        var col4 = currentRow.find("td:eq(6)").text();
        // var col5 = currentRow.find("td:eq(4)").text();
        console.log(col1, col2, col3);


        $(".detKode").text("Kode : " + col1);
        $(".detTanggal").text("Tanggal : " + col2);
        $(".detKonsumen").text("Konsumen : " + col3);



        $.ajax({
          url: "php/transaksi/detailKaryawan.php",
          type: "POST",
          dataType: "json",
          data: {
            kodeKar: col4,
          },
          success: function(data, response) {
            $(".detKaryawan").text("Karyawan : " + data[0].nama_karyawan);
          },
          error: function(data) {
            alert("Gagal Kar");
          },
        });

        // let dataBarang = [];
        // $.ajax({
        //   url: "php/transaksi/detailBarang.php",
        //   type: "POST",
        //   dataType: "json",
        //   data: {
        //     kodeDetail: col1,
        //   },
        //   success: function(data, response) {
        //     // alert("success")
        //     dataBarang = [];
        //     // console.log(data[0])
        //     let ic = 0;
        //     for (const d of data) {
        //       dataBarang.push(d)
        //       $('#tbodyViewPermintaan').append(`
        //         <tr>
        //           <td id="${"brg"+ic}">${d.nama_barang}</td>
        //           <td id="${"satuan"+ic}">${d.satuan}</td>
        //         </tr>
        //     `);
        //     }
        //   },
        //   error: function(data) {
        //     // console.log(data);
        //     alert("Data Gagal");
        //   },
        // });


        $.ajax({
          url: "php/transaksi/kodePermintaan.php",
          type: "POST",
          dataType: "json",
          data: {
            kodePer: col1,
          },
          success: function(data, response) {
            dataPer = [];
            let jumlahItem = 0;
            $("#tbodyViewPermintaan tr").remove();
            $("#tfootViewPermintaan tr").remove();

            let i = 0;
            // console.log(dataBarang[0].nama_barang)
            for (const d of data) {
              jumlahItem += Number(d.jumlah);
              // dataPer.push(d)
              $('#tbodyViewPermintaan').append(`
                <tr>
                  <td>${d.kode_permintaan}</td>
                  <td>${d.nama_barang}</td>
                  <td>${d.satuan}</td>
                  <td>${d.harga_jual}</td>
                  <td>${d.jumlah}</td>
                </tr>
            `);
              i++;
            }

            $('#tfootViewPermintaan').append(` 
                    <tr>
                      <th colspan="3">Total</th>
                      <th id="totalPermintaan">${data[0].total}</th>
                      <th id="totalItem">${jumlahItem}</th>
                    </tr>`);
          },
          error: function(data) {
            // console.log(data);
            alert("Data Gagal Ditambahkan");
          },
        });
      });





      // $("#uptdBarang").hide();
      // $(".btnHps").hide();
      // $("#addBarang").show();

      // $(".addBarang").click(function() {
      //   $("#kodeBarang").val("");
      //   $("#namaBarang").val("");
      //   $("#satuanBarang").val("");
      //   $("#hargaBeli").val("");
      //   $("#hargaJual").val("");
      //   $('#kodeBarang').prop('readonly', false);
      // })

      // $("#addBarang").click(function() {
      //   $(".modal-backdrop").remove();
      //   $("#uptdBarang").hide();
      //   $(".btnHps").hide();
      //   $("#addBarang").show();
      //   var kode = $("#kodeBarang").val();
      //   var nama = $("#namaBarang").val();
      //   var satuan = $("#satuanBarang").val();
      //   var hargaBeli = $("#hargaBeli").val();
      //   var hargaJual = $("#hargaJual").val();

      //   console.log(kode, nama, satuan, hargaBeli, hargaJual);
      //   $.ajax({
      //     url: "php/barang/simpanBarang.php",
      //     type: "POST",
      //     data: {
      //       kode: kode,
      //       nama: nama,
      //       satuan: satuan,
      //       hargaBeli: hargaBeli,
      //       hargaJual: hargaJual,
      //     },
      //     success: function(data) {
      //       console.log(data);
      //       // alert("Data Berhasil Ditambahkan");
      //       $("#content").load("php/barang/tambahBarang.php");
      //       // location.reload();
      //     },
      //     error: function(data) {
      //       console.log(data);
      //       alert("Data Gagal Ditambahkan");
      //     },
      //   });
      // });

      // $("#uptdBarang").click(function() {
      //   $(".modal-backdrop").remove();

      //   var kode = $("#kodeBarang").val();
      //   var nama = $("#namaBarang").val();
      //   var satuan = $("#satuanBarang").val();
      //   var hargaBeli = $("#hargaBeli").val();
      //   var hargaJual = $("#hargaJual").val();

      //   console.log(kode, nama, satuan, hargaBeli, hargaJual);
      //   $.ajax({
      //     url: "php/barang/updateBarang.php",
      //     type: "POST",
      //     data: {
      //       kode: kode,
      //       nama: nama,
      //       satuan: satuan,
      //       hargaBeli: hargaBeli,
      //       hargaJual: hargaJual,
      //     },
      //     success: function(data) {
      //       console.log(data);
      //       // alert("Data Berhasil Ditambahkan");
      //       $("#content").load("php/barang/tambahBarang.php");
      //       // location.reload();
      //     },
      //     error: function(data) {
      //       console.log(data);
      //       alert("Data Gagal Ditambahkan");
      //     },
      //   });
      //   $(".modal-backdrop .fade .show").remove();
      // });

      // $("#hapusBarang").click(function() {
      //   $(".modal-backdrop").remove();

      //   var kode = $("#kodeBarang").val();
      //   var nama = $("#namaBarang").val();
      //   var satuan = $("#satuanBarang").val();
      //   var hargaBeli = $("#hargaBeli").val();
      //   var hargaJual = $("#hargaJual").val();

      //   console.log(kode, nama, satuan, hargaBeli, hargaJual);
      //   $.ajax({
      //     url: "php/barang/hapusBarang.php",
      //     type: "POST",
      //     data: {
      //       kode: kode,
      //       nama: nama,
      //       satuan: satuan,
      //       hargaBeli: hargaBeli,
      //       hargaJual: hargaJual,
      //     },
      //     success: function(data) {
      //       console.log(data);
      //       // alert("Data Berhasil Ditambahkan");
      //       $("#content").load("php/barang/tambahBarang.php");
      //       // location.reload();
      //     },
      //     error: function(data) {
      //       console.log(data);
      //       alert("Data Gagal Ditambahkan");
      //     },
      //   });
      //   $(".modal-backdrop .fade .show").remove();
      // });



      // $(".table").on("click", "#updateBarang", function() {
      //   $("#uptdBarang").show();
      //   $(".btnHps").show();
      //   $("#addBarang").hide();

      //   // ("#kodeBarang").attr('readonly', true);
      //   var currentRow = $(this).closest("tr");

      //   var col1 = currentRow.find("td:eq(0)").text(); // get current row 1st TD value
      //   var col2 = currentRow.find("td:eq(1)").text(); // get current row 2nd TD
      //   var col3 = currentRow.find("td:eq(2)").text();
      //   var col4 = currentRow.find("td:eq(3)").text();
      //   var col5 = currentRow.find("td:eq(4)").text();
      //   console.log(col1, col2, col3, col4, col5);


      //   $("#kodeBarang").val(col1);
      //   $("#namaBarang").val(col2);
      //   $("#satuanBarang").val(col3);
      //   $("#hargaBeli").val(col4);
      //   $("#hargaJual").val(col5);
      //   $('#kodeBarang').prop('readonly', true);
      // });
    });
  </script>
</div>