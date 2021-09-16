    <?php require_once 'layouts/script_header.php'; ?>


    <h2 style="margin-top: 50px;" align="center"><b>Informasi Corona</b></h2>
    <center>
        <span align="center">by Faris Rizqilail - 19410100073</span>
    </center>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-center">Informasi Covid-19 Indonesia</h4><br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4 align-self-center" align="center">
                                        <i class="fas fa-user-plus fa-2x"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <h5>Kasus Positif</h5>
                                        <small><?php echo $data['positif']; ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4 align-self-center" align="center">
                                        <i class="fas fa-hand-holding-medical fa-2x"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <h5>Pasien Sembuh</h5>
                                        <small><?php echo $data['sembuh']; ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4 align-self-center" align="center">
                                        <i class="fas fa-procedures fa-2x"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <h5>Pasien Dirawat</h5>
                                        <small><?php echo $data['dirawat']; ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4 align-self-center" align="center">
                                        <i class="fas fa-dizzy fa-2x"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <h5>kasus Meninggal</h5>
                                        <small><?php echo $data['meninggal']; ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <br><br>
                <h4 class="text-center">Informasi Covid-19 Dunia</h4><br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4 align-self-center" align="center">
                                        <i class="fas fa-user-plus fa-2x"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <h5>Kasus Positif</h5>
                                        <small><?php echo $data['dataPositif']['value']; ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4 align-self-center" align="center">
                                        <i class="fas fa-dizzy fa-2x"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <h5>Kasus Meninggal </h5>
                                        <small><?php echo $data['dataMeninggal']['value']; ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <br>

        </div>
        <div class="col-md-6">
            <h4 class="text-center">Informasi Provinsi</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Sembuh</th>
                        <th scope="col">Meninggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; ?>
                    <?php foreach ($data["dataProvinsi"] as $data1) { ?>
                        <?php foreach ($data1 as $data2) { ?>

                            <tr>
                                <th scope="row"><?= $count++ ?></th>
                                <td><?= $data2["Provinsi"] ?></td>
                                <td><?= $data2["Kasus_Posi"] ?></td>
                                <td><?= $data2["Kasus_Semb"] ?></td>
                                <td><?= $data2["Kasus_Meni"] ?></td>
                            </tr>
                        <?php } ?>

                    <?php } ?>



                </tbody>
            </table>
        </div>
    </div>

    <?php require_once 'layouts/script_footer.php'; ?>