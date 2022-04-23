<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    
<body> -->
<?php
  include_once 'header.php';
  include_once 'sidebar.php';
?>
<div class="content-wrapper">
<div class="bg-dark"><br>
        <h1 class="text-center text-white">Form Penilaian</h1>
        <br>
    </div>
<div class="p-5">
<form class="form-horizontal"  autocomplete="off" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
      <option value="Tidak Ada Mata Kuliah">Pilih Mata Kuliah</option>
        <option value="DDP">Dasar-Dasar Pemograman</option>
        <option value="Basis Data">Basis Data</option>
        <option value="Pemograman Web">Pemograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="UTS" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" value="proses" type="submit" class="btn btn-dark">Simpan</button>
    </div>
  </div>
  <?php
    
    require_once 'libfungsi2.php';

    // $proses= $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $presentase_uts = (30 * ((int)$nilai_uts))/100;
    $presentase_uas = (35 * ((int)$nilai_uas))/100;
    $presentase_tugas = (35 * ((int)$nilai_tugas))/100;
    $total_nilai = $presentase_uts + $presentase_uas + $presentase_tugas;
    $grade = grade($total_nilai);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(!empty($_POST["proses"])) {
        $proses = "Berhasil";
        echo 'Proses : '.$proses;
        echo '<br/>Nama : '.$nama_siswa;
        echo '<br/>Mata Kuliah : '.$mata_kuliah;
        echo '<br/>Nilai UTS : '.$nilai_uts;
        echo '<br/>Nilai UAS : '.$nilai_uas;
        echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
        echo '<br/> Grade : '.grade($total_nilai);
        predikat($grade);
        echo '<br/>DINYATAKAN ' .kelulusan($total_nilai);
      }
    }else{
      echo '<div class="alert alert-dark" role="alert"> Silahkan Isi Form Diatas Untuk Menampilkan Nilai , Grade dan Predikat </div>'; 
    }
    ?>
</form>
  </div>
  </div>
  <?php
  include_once 'footer.php';
?>



<!-- </body>
</html> -->


