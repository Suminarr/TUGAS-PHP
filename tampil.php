<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BMI</title>
</head>
<body>
    <?php

    include_once 'class_pasien.php';
    include_once 'class_bmi.php';
    include_once 'class_bmipasien.php';

    $_nama = $_POST['nama'];
    $_berat = $_POST['berat'];
    $_tinggi = $_POST['tinggi']; 
    $_tanggal = $_POST['tanggal'];
    $_gender = $_POST['gender'];
    
    $p1 = new Pasien("P001", "Ahmad", "L");
    $p2 = new Pasien("P002", "Rina", "P");
    $p3 = new Pasien("P003", "Lutfi", "L");
    $p4 = new Pasien("P004", $_nama, $_gender);

    $b1 = new BMI(69.8);
    $b1->tinggi = 1.69;
    $b2 = new BMI(80);
    $b2->tinggi = 1.61;
    $b3 = new BMI(45.2);
    $b3->tinggi = 1.71;
    $b4 = new BMI($_berat);
    $b4->tinggi = $_tinggi;

    $bp1 = new BMIPasien("2022-01-10", $p1, $b1);
    $bp2 = new BMIPasien("2022-01-10", $p2, $b2);
    $bp3 = new BMIPasien("2022-01-11", $p3, $b3);
    $bp4 = new BMIPasien($_tanggal, $p4, $b4);

    $ar_tampil = [$bp1, $bp2, $bp3, $bp4];

    ?>

    <table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>No</th><th>Tanggal Periksa</th><th>Kode Pasien</th>
            <th>Nama Pasien</th><th>Gender</th><th>Berat (kg)</th><th>tinggi (m)</th><th>Nilai BMI</th><th>Status BMI</th>
        </tr>
    </thead>

    <tbody>
        <?php
            $nomor=1;
            foreach($ar_tampil as $row){
        ?>
            <tr>
            <td><?=$nomor?></td>
            <td><?=$row->tanggal?></td>
            <td><?=$row->pasien->kode?></td>
            <td><?=$row->pasien->nama?></td>
            <td><?=$row->pasien->gender?></td>
            <td><?=$row->bmi->berat?></td>
            <td><?=$row->bmi->tinggi?></td>
            <td><?=$row->bmi->nilaiBMI()?></td>
            <td><?=$row->bmi->statusBMI()?></td>


            </tr>
        <?php
            $nomor++;
            }
        ?>
    </tbody>
    </table>


    <div class="container">
        <div class="row">
            <div class="col-10">
                    <form method="POST" action="tampil.php">
                        <div class="form-group row">
                        <label for="nama" class="col-2 col-form-label">Nama</label> 
                        <div class="col-4">
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                                </div>
                            </div> 
                            <input id="nama" name="nama" placeholder="nama" type="text" required="required" class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="berat" class="col-2 col-form-label">Berat (kg)</label> 
                        <div class="col-4">
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fa fa-500px"></i>
                                </div>
                            </div> 
                            <input id="berat" name="berat" placeholder="berat badan" type="text" required="required" class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="tinggi" class="col-2 col-form-label">Tinggi (m)</label> 
                        <div class="col-4">
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fa fa-500px"></i>
                                </div>
                            </div> 
                            <input id="tinggi" name="tinggi" placeholder="tinggi badan" type="text" required="required" class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="text" class="col-2 col-form-label">Tanggal Periksa</label> 
                        <div class="col-4">
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fa fa-calendar"></i>
                                </div>
                            </div> 
                            <input id="text" name="tanggal" type="text" aria-describedby="textHelpBlock" required="required" class="form-control">
                            </div> 
                            <span id="textHelpBlock" class="form-text text-muted">yyyy-mm-dd</span>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-2">Jenis Kelamin</label> 
                        <div class="col-4">
                            <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="radio_0" type="radio" class="custom-control-input" value="L" required="required"> 
                            <label for="radio_0" class="custom-control-label">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="P" required="required"> 
                            <label for="radio_1" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                        </div> 
                        <div class="form-group row">
                        <div class="offset-2 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </div>
                    </form>
            </div>

            <div class="col-2 mt-5">
                <h2>test</h2>
            </div>
        </div>
    </div>
</body>
</html>