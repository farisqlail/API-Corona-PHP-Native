<?php require_once './view/layouts/script_header.php'; ?>

<div class="container">
    <form action="daerahStore" method="post">
        <div class="form-group">
            <label for="">Input Daerah</label>
            <input type="text" class="form-control" name="daerah"><br>
        </div>

        <div class="form-group">
            <label for="">Positif</label>
            <input type="text" class="form-control" name="positif">
        </div><br>

        <div class="form-group">
            <label for="">Meninggal</label>
            <input type="text" class="form-control" name="meninggal">
        </div><br>

        <div class="form-group">
            <label for="">Sembuh</label>
            <input type="text" class="form-control" name="sembuh">
        </div><br>

        <button class="btn btn-dark" type="submit">Submit</button>

    </form>
</div>


<?php require_once './view/layouts/script_footer.php'; ?>