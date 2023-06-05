<?php

include "../../databases/koneksi.php";

$sql = "select * from barang";
$result = mysqli_query($conn, $sql);
$sqlKar = "select * from karyawan";
$resultKar = mysqli_query($conn, $sqlKar);

// INSERT INTO `master_permintaan` (`kode_permintaan`, `tanggal`, `konsumen`, `telp`, `alamat`, `keterangan`, `kode_karyawan`, `total`, `created_at`) VALUES ('T0001', '2023-05-10', 'Habib', '09876543', 'surabaya', 'tidak tau', 'K001', '1000', current_timestamp());

?>


<div id="barang">
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

          </div>
          <!-- DataTales Example -->
          <form>
            <div class="form-group row">

              <!-- <label for="kodeTrx" class="col-sm-1 col-form-label">Kode</label>
              <span class="ml-4 col-form-label">:</span>

              <div class="col-sm-4">
                <input type="text" class="form-control" id="kodeTrx" placeholder="T1234" />
              </div> -->

              <label for="karyawanTrx" class="col-sm-1 col-form-label">Karyawan</label>
              <span class="ml-4 col-form-label">:</span>
              <div class="col-sm-4">
                <select class="custom-select" id="karyawanTrx">
                  <option value="0">Select Karyawan</option>
                  <?php
                  if (mysqli_num_rows($resultKar) > 0) {
                    while ($row = mysqli_fetch_assoc($resultKar)) {
                      echo "<option value=" . $row["kode_karyawan"]  . ">" . $row["nama_karyawan"] . "</option>";
                    }
                  }
                  ?>
                  <!-- <option value="K001">Ali</option>
                  <option value="K002">Budi</option>
                  <option value="K003">Ceri</option> -->
                </select>
              </div>
              <!-- <label for="jabatanTrx" class="col-sm-1 col-form-label">Keterangan</label>
              <span class="ml-4 col-form-label">:</span>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="jabatanTrx" placeholder="Admin" />
              </div> -->
              <label for="ketTrx" class="col-sm-1 col-form-label">Keterangan</label>
              <span class="ml-4 col-form-label">:</span>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="ketTrx" placeholder="WTH" />
              </div>
            </div>
            <div class="form-group row">
              <label for="tglTrx" class="col-sm-1 col-form-label">Tanggal</label>
              <span class="ml-4 col-form-label">:</span>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="tglTrx" name="tglTrx" />
              </div>

              <!-- <label for="jabatanTrx" class="col-sm-1 col-form-label">Keterangan</label>
              <span class="ml-4 col-form-label">:</span>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="jabatanTrx" placeholder="Admin" />
              </div> -->

            </div>
            <div class="form-group row">
              <label for="konsumenTrx" class="col-sm-1 col-form-label">Konsumen</label>
              <span class="ml-4 col-form-label">:</span>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="konsumenTrx" placeholder="Hoew" />
              </div>
            </div>

            <!-- <div class="form-group row">
              <label for="supTrx" class="col-sm-1 col-form-label">Konsumen</label>
              <span class="ml-4 col-form-label">:</span>
              <div class="col-sm-4">
                <select class="custom-select" id="supTrx">
                  <option value="0">Select Konsumen</option>
                  <option value="1">Ali</option>
                  <option value="2">Budi</option>
                  <option value="3">Ceri</option>
                </select>
              </div>
            </div> -->

            <div class="form-group row">
              <label for="telTrx" class="col-sm-1 col-form-label">Telepon</label>
              <span class="ml-4 col-form-label">:</span>
              <div class="col-sm-4">
                <input type="tel" class="form-control" id="telTrx" placeholder="0351-1234145" />
              </div>
            </div>

            <div class="form-group row">
              <label for="alamatTrx" class="col-sm-1 col-form-label">Alamat</label>
              <span class="ml-4 col-form-label">:</span>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="alamatTrx" placeholder="Surabaya" />
              </div>
            </div>
            <div class="form-group row"></div>

            <div class="form-group row text-left">

              <div class="col-sm-2">
                <button type="button" class="btn btn-primary" id="pilihBarang">Pilih Barang</button>
              </div>


              <div class="col-sm-2">
                <input type="text" class="form-control" id="namaInput" placeholder="Batu" />
              </div>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="satuanInput" placeholder="Pcs" />
              </div>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="hargaInput" placeholder="4000" />
              </div>
              <div class="col-sm-1">
                <input type="number" class="form-control" id="jumlahInput" placeholder="5" />
              </div>
              <div class="col-sm-1 invisible">
                <input type="text" class="form-control" id="kodeInput" placeholder="M001" />
              </div>
              <div class="col-sm-2">
                <button type="button" class="btn btn-success" id="saveTrx">Save</button>
              </div>
            </div>
          </form>

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
                  <tbody id="tbodyAddPermintaan">
                    <!-- <tr>
                      <td>P001</td>
                      <td class="tgl">12-01-2020</td>
                      <td>Ali</td>
                      <td>Ani</td>
                      <td>5</td>
                      <td>200</td>
                      <td>
                        <button type="button" class="removeTrx btn btn-outline-success">
                          <i class="fas fa-trash fa-sm"></i>
                        </button>
                      </td>
                    </tr> -->

                  </tbody>
                  <tfoot>
                    <tr>
                      <th colspan="4">Total</th>
                      <th id="totalItem">Item</th>
                      <th id="totalPermintaan">0</th>
                      <th></th>
                    </tr>
                  </tfoot>
                </table>

                <br /><br />
                <!-- <label for="tagtotal">Total : </label>   <label for="total" id="total">0</label> -->
                <button class="btn btn-info" id="saveMasterDetail">
                  Save
                </button>
                <button class="btn btn-info" id="cancelMasterDetail">
                  Cancel
                </button>
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

  <!-- Modal pilih barang -->
  <div class="modal fade" id="modalBarangKode" tabindex="-1" role="dialog" aria-labelledby="modalViewLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalBarangKode">Pilih Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="tableKodeBarang table table-striped text-center table-hover">
            <thead>
              <tr class="bg-success text-white">
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">Satuan</th>
                <th scope="col">Harga</th>
                <th>Pilih</th>
              </tr>
            </thead>

            <tbody id="bodyTablePilihBarang">
              <?php
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row["kode_barang"] . "</td>";
                  echo "<td>" . $row["nama_barang"] . "</td>";
                  echo "<td>" . $row["satuan"] . "</td>";
                  echo "<td>" . $row["harga_jual"] . "</td>";
                  echo "<td>";
                  echo "<button type='button' class='btn pilihKode btn-outline-success' data-dismiss='modal'> <i class='fas fa-pen fa-sm'></i> </button>";
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

            <!-- <tfoot>
              <tr class="bg-success text-white font-weight-bold h4">
                <td colspan="2">Total</td>
                <td></td>
                <td class="totalJumlahAdd"></td>
                <td></td>
                <td id="totalTrxViewRekap"></td>
              </tr>
            </tfoot> -->
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Close
          </button>
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
      $("#pilihBarang").click(function() {
        $("#modalBarangKode").modal("show");
      });

      var today = new Date();
      var dd = String(today.getDate()).padStart(2, '0');
      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
      var yyyy = today.getFullYear();

      // today = mm + '/' + dd + '/' + yyyy;
      // document.write(today);
      today = yyyy + "/" + mm + "/" + dd

      var data = new Date();
      var tglDate = data.getDay() + 1;
      var tanggal = data.getFullYear() + "-" + (data.getMonth() + 1) + "-" + tglDate;
      $(".tgl").text(today);
      $("#tglTrx").val(today);
      $('#tglTrx').prop('readonly', true);


      $("#tglJual1").text(tanggal);

      $("#tbodyAddPermintaan tr").each(function() {
        var tanggal = data.getFullYear() + "-" + data.getMonth() + "-" + tglDate;
        var currentRow = $(this);
        currentRow.find("td:eq(1)").text(today);
        tglDate = tglDate + 1;
      });

      var grandTotal = 0;
      var totalItem = 0;
      $("#tbodyAddPermintaan tr").each(function() {
        var currentRow = $(this);
        // console.log(currentRow.find("td:eq(5)").text());
        grandTotal += Number(currentRow.find("td:eq(5)").text());
        totalItem += Number(currentRow.find("td:eq(4)").text());
        console.log(totalItem);
      });

      $("#totalPermintaan").text(grandTotal);
      $("#totalItem").text(totalItem);

      // $('#telTrx').prop('readonly', true);
      // $('#alamatTrx').prop('readonly', true);
      $("#supTrx").change(function() {
        var namaSup = $("#supTrx").find(":selected").val();

        if (namaSup == "1") {
          $("#telTrx").val("09876544");
          $("#alamatTrx").val("Surabaya");
        } else if (namaSup == "2") {
          $("#telTrx").val("09876512");
          $("#alamatTrx").val("Bandung");
        } else if (namaSup == "3") {
          $("#telTrx").val("09876532");
          $("#alamatTrx").val("Makasar");
        }
      });


      // $('#jabatanTrx').prop('readonly', true);


      $("#karyawanTrx").change(function() {
        let namaKar = $("#karyawanTrx").find(":selected").val();

        console.log(namaKar);
        // console.log(namaKar);
        if (namaKar == "K001") {
          $("#jabatanTrx").val("Admin - Ini ket admin");
        } else if (namaKar == "K002") {
          $("#jabatanTrx").val("Supervisor - ket dari supervisor");
        } else if (namaKar == "K003") {
          $("#jabatanTrx").val("Marketing - keterangan dari marketing");
        }
      });

      $("#saveTrx").click(function() {
        $(".odd").remove();
        grandTotal = 0;
        totalItem = 0;
        let panjang = $("#tbodyAddPermintaan tr").length;
        // console.log(panjang);
        let kode = $("#kodeInput").val();
        let nama = $("#namaInput").val();
        let satuan = $("#satuanInput").val();
        let harga = $("#hargaInput").val();
        let jumlah = $("#jumlahInput").val();
        let total = Number(harga) * Number(jumlah);
        // console.log(total);

        $("#tbodyAddPermintaan").append(
          "<tr><td>" +
          kode +
          "</td><td>" +
          nama +
          "</td><td>" +
          satuan +
          "</td><td>" +
          harga +
          "</td><td>" +
          jumlah +
          "</td><td>" +
          total +
          '</td><td><button type="button" class="removeTrx btn btn-outline-success" id="' +
          panjang +
          '"> <i class="fas fa-trash fa-sm"></i></button></td></tr'
        );

        $("#tbodyAddPermintaan tr").each(function() {
          let currentRow = $(this);
          grandTotal += Number(currentRow.find("td:eq(5)").text());
          totalItem += Number(currentRow.find("td:eq(4)").text());
          // console.log(total);
          $("#totalPermintaan").text(grandTotal);
          $("#totalItem").text(totalItem);
        });
      });

      $("#tbodyAddPermintaan").on("click", ".removeTrx", function() {
        grandTotal = 0;
        totalItem = 0;
        var id = $(this).attr("id");
        $(this).closest("tr").remove();
        $("#tbodyAddPermintaan tr").each(function() {
          var currentRow = $(this);

          grandTotal += Number(currentRow.find("td:eq(5)").text());
          totalItem += Number(currentRow.find("td:eq(4)").text());
        });
        $("#totalPermintaan").text(grandTotal);
        $("#totalItem").text(totalItem);
      });

      $(".tableKodeBarang").on("click", ".pilihKode", function() {

        // ("#kodeKaryawan").attr('readonly', true);
        var currentRow = $(this).closest("tr");
        // console.log(currentRow);

        var col1 = currentRow.find("td:eq(0)").text(); // get current row 1st TD value
        var col2 = currentRow.find("td:eq(1)").text(); // get current row 2nd TD
        var col3 = currentRow.find("td:eq(2)").text();
        var col4 = currentRow.find("td:eq(3)").text();
        var col5 = currentRow.find("td:eq(4)").text();

        // console.log(col1, col2, col3, col4, col5);

        $("#kodeInput").val(col1);
        $('#kodeInput').prop('readonly', true);

        $("#namaInput").val(col2);
        $('#namaInput').prop('readonly', true);

        $("#satuanInput").val(col3);
        $('#satuanInput').prop('readonly', true);

        $("#hargaInput").val(col4);
        $('#hargaInput').prop('readonly', true);

        $("#jumlahInput").val(1);
        // $("#emailKaryawan").val(col5);
        // $("#passwordKaryawan").val(col6);
        // $('#kodeKaryawan').prop('readonly', true);
      });

      $("#saveMasterDetail").click(function() {

        var data = new Date();
        // var tglDate = 1;
        var kodeTgl = "P" + data.getFullYear() + data.getMonth() + data.getDay() + Math.round((Math.random() * 1000000));
        // console.log(kodeTgl)

        let kodeper1 = kodeTgl;
        let tanggal1 = $("#tglTrx").val();
        // let konsumen1 = $("#supTrx option:selected").text();
        let konsumen1 = $("#konsumenTrx").val();
        let karyawan1 = $("#karyawanTrx").find(":selected").val();
        let telp1 = $("#telTrx").val();
        let alamat1 = $("#alamatTrx").val();
        // let keterangan1 = $("#jabatanTrx").val();
        let keterangan1 = $("#ketTrx").val();
        let total1 = $("#totalPermintaan").text();

        // kodeper1.toString();

        // console.log(kodeper1);
        // console.log(tanggal1);
        // console.log(konsumen1);
        // console.log(karyawan1);
        // console.log(telp1);
        // console.log(alamat1);
        // console.log(keterangan1);
        // console.log(total1);




        $("#tbodyAddPermintaan tr").each(function() {
          let currentRow = $(this);
          let kodebr1 = currentRow.find("td:eq(0)").text();
          let hargajual1 = currentRow.find("td:eq(3)").text();
          let jumlah1 = currentRow.find("td:eq(4)").text();

          // console.log(kodeper1);
          // console.log(hargajual1);
          // console.log(jumlah1);

          $.ajax({
            url: "php/transaksi/simpanDetailPermintaan.php",
            type: "POST",
            data: {
              kode_permintaan: kodeper1,
              kode_barang: kodebr1,
              harga_jual: hargajual1,
              jumlah: jumlah1
            },
            success: function(data) {
              console.log(data);
              console.log("detail success")
              // alert("Data Berhasil Ditambahkan");
              // $("#content").load("php/barang/tambahBarang.php");
              // location.reload();
              reset();
            },
            error: function(data) {
              // console.log(data);
              alert("Data Gagal Ditambahkan");
            },
          });

        });


        $.ajax({
          url: "php/transaksi/simpanMasterPermintaan.php",
          type: "POST",
          data: {
            kode_permintaan: kodeper1,
            tanggal: tanggal1,
            konsumen: konsumen1,
            telp: telp1,
            alamat: alamat1,
            keterangan: keterangan1,
            karyawan: karyawan1,
            total: total1
          },
          success: function(data) {
            console.log("success master");
            alert("Data Berhasil Ditambahkan");
            $("#content").load("php/transaksi/permintaan.php");
            // $("#content").load("php/barang/tambahBarang.php");
            // location.reload();
            reset();
          },
          error: function(data) {
            // console.log(data);
            alert("Data Gagal Ditambahkan");
          },
        });

      });

      $("#cancelMasterDetail").click(function() {
        // Headers("location: permintaan.php");
        $("#content").load("php/transaksi/permintaan.php");
      });

      function reset() {
        $("#telTrx").val("");
        $("#alamatTrx").val("");
        $("#telTrx").val("");
        $("#alamatTrx").val("");
        $("#ketTrx").val("");
      }
    });
  </script>
</div>