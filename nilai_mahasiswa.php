
<?php
  include_once 'header.php';
  include_once 'sidebar.php';
?>
    <?php
    class nilaiMahasiswa {
        var $matakuliah;
        var $nilai;
        var $nim;

        function __construct ($nim,$matkul,$nilai){
            $this->nim = $nim;
            $this->matkul = $matkul;
            $this->nilai = $nilai;
            
        }

        function grade() {
            if ($this->nilai >= 56){
                return 'Lulus';
            }else{ 
                return 'Tidak Lulus';
            }
        }
        function hasil(){
            if ($this->nilai <= 35 ){
                return 'E';
            }elseif ($this->nilai <= 55){
                return 'D';
            }elseif ($this->nilai <= 69){
                return 'C';
            }elseif ($this->nilai <= 84){
                return 'B';
            }elseif ($this->nilai <= 100){
                return 'A';
            }
        }
    }
    ?>
<div class="content-wrapper">
  <nav class="navbar navbar-expand-lg navbar-light bg-primary p-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Web02</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Review PHP
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PHP5 OOP
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <form class="d-flex">
          <input class="form-control me-2" type="search" aria-label="Search">
          <button class="btn btn-dark" type="submit">Submit</button>
        </form>
    </div>
  </nav>
  <div class="border-bottom border-dark m-3 p-2">
    <h1>Form Nilai Ujian</h1>
  </div>
  <form class="form-horizontal" method="POST" autocomplete="off" action="nilai_mahasiswa.php">
    <div class="container p-3">
      <div class="form-group row">
        <label for="nim" class="col-4 col-form-label">NIM</label> 
        <div class="col-8">
          <input id="nim" name="nim" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
        <div class="col-8">
          <select id="matkul" name="matkul" class="custom-select">
            <option value="Pilih Mata Kuliah">Pilih Mata Kuliah</option>
            <option value="Dasar-Dasar Pemograman">Dasar-Dasar Pemograman</option>
            <option value="Pemograman Web">Pemograman Web</option>
            <option value="Basis Data">Basis Data</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai" class="col-4 col-form-label">Nilai</label> 
        <div class="col-8">
          <input id="nilai" name="nilai" type="text" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </form>
  <div>
    <div class="border-top border-dark m-3"></div>

    <div class="container">
      <?php

        $nim = $_POST['nim'];
        $matkul = $_POST['matkul'];
        $nilai = $_POST['nilai'];
        $data = new nilaiMahasiswa($nim, $matkul, $nilai);


        if ($_SERVER["REQUEST_METHOD"] == "POST"){
          if(empty($_POST["proses"])){
          echo 'NIM : '.$data->nim;
          echo '<br/>Mata Kuliah : '.$data->matkul;
          echo '<br/>Nilai : '. $data->nilai;
          echo "<br/>Hasil : ".$data->hasil();
          echo "<br/>Grade : ".$data->grade();
          }
        }else{
          echo "*Format belum terisi";
        }
      ?>
    </div>
  </div>
<footer>
  <div class="border-top border-dark m-3"></div>
  <div class="m-3">
    <p><b>Lab Pemograman Web lanjutan</b></p>
    <p>Dosen Sirojul Munir S.SI,M.Kom</p>
    <p>STT-NF-Kampus B</p>
    </div>
</footer>
</div>
</div>
<?php
  include_once 'footer.php';
?>