<?php
  include_once 'header.php';
  include_once 'sidebar.php';
  ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Belajar PHP</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Selamat Datang</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
    <div class="bg-dark"><br>
        <h1 class="text-center text-white">Form Penilaian</h1>
        <br>
    </div>
    <div>
      <br>
    <div class="col-8">
      <form method="POST" autocomplete="off" action="form_penilaian.php">
        <div class="form-group row">
          <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
          <div class="col-8">
            <input id="text" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" value="" style="width: 50%">
          </div>
        </div>
        <div class="form-group row">
          <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
          <div class="col-8">
            <select id="select" name="matkul" class="custom-select" style="width: 50%">
              <option value="#">Pilih Mata Kuliah</option>
              <option value="DDP">Dasar-Dasar Pemograman</option>
              <option value="BD1">Basis Data 1</option>
              <option value="WEB1">Pemograman Web</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
          <div class="col-8">
            <input id="text1" name="uts" placeholder="Nilai UTS" type="text" class="form-control" value="" style="width: 50%">
          </div>
        </div>
        <div class="form-group row">
          <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
          <div class="col-8">
            <input id="text2" name="uas" placeholder="Nilai UAS" type="text" class="form-control" value="" style="width: 50%">
          </div>
        </div>
        <div class="form-group row">
          <label for="text3" class="col-4 col-form-label">Nilai Tugas / Praktikum</label> 
          <div class="col-8">
            <input id="text3" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control" value="" style="width: 50%">
          </div>
        </div> 
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="proses" value="Simpan" type="submit" class="btn btn-dark">Submit</button>
          </div>
        </div>
      </form>
      </div>
</div>

      <?php
                include_once ("libfungsi1.php");
                    $nama = $_POST["nama"];
                    $matkul = $_POST["matkul"];
                    $nilai_uts = $_POST["uts"];
                    $nilai_uas = $_POST["uas"];
                    $nilai_tugas = $_POST["tugas"];
                
                      echo"Nama :" . $nama;
                      echo"<br> Mata Kuliah :" . $matkul;
                      echo"<br> Nilai UTS :" . $nilai_uts;
                      echo"<br> Nilai UAS :" . $nilai_uas;
                      echo"<br> Nilai Tugas :" . $nilai_tugas;
                      $total_nilai = ((int)$nilai_uts+(int)$nilai_uas+(int)$nilai_tugas)/3;
                      echo '<br/>Total Nilai : '.$total_nilai;
                      $hasil = kelulusan($total_nilai);
                      echo '<br/>Dinyatakan : '.$hasil;
                      ?>
<?php
  include_once 'footer.php';
?>


  <!-- </body>
</html> -->