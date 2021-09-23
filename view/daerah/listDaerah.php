<?php require_once './view/layouts/script_header.php'; ?>

<div class="container">

    <h2 style="margin-top: 50px;" align="center"><b>Informasi Baru Corona Daerah <?php echo $data[0] ?></b></h2>
    <center>
        <span align="center">by Faris Rizqilail - 19410100073</span>
    </center><br><br>

    <div align="center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                Nama Daerah : <?= $data[0] ?><br>
                Positif : <?= $data[1] ?><br>
                Meninggal : <?= $data[2] ?><br>
                Sembuh : <?= $data[3] ?>
            </div>
        </div>
    </div>
</div>

<?php require_once './view/layouts/script_footer.php'; ?>