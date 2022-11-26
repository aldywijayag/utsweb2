<?php
require 'controller/controllerProduct.php';

// var_dump($result);
// die();
?>
<div class="container mt-3">
    <div class="row align-items-start">
        <h3 class="ms-1">Mobil</h3>
        <?php foreach ($resultMobil as $mobil) { ?>

            <div class="col-md-3 p-3">
                <div class="card" style="width: 15rem;">
                    <img src="img/<?= $mobil->img; ?>" class="card-img-top" style="height: 150px; object-fit: contain  ">
                    <div class=" card-body">
                        <h5 class="card-title">Rp <?= $mobil->harga; ?></h5>
                        <p class="card-text"><?= $mobil->tahun; ?> | <?= $mobil->nama; ?></p>
                        <p class="card-text"><?= $mobil->kota; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <!--Motor Section-->
    <div class="row align-items-start mt-4">
        <h3 class="ms-1">Motor</h3>
        <?php foreach ($resultMotor as $motor) { ?>
            <div class="col-md-3 p-3">
                <div class="card" style="width: 15rem;">
                    <img src="img/<?= $motor->img; ?>" class="card-img-top" style="height: 150px; object-fit: contain  ">
                    <div class=" card-body">
                        <h5 class="card-title">Rp <?= $motor->harga; ?></h5>
                        <p class="card-text"><?= $motor->tahun; ?> | <?= $motor->nama; ?></p>
                        <p class="card-text"><?= $motor->kota; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>