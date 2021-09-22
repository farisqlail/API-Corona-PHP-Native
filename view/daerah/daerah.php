<?php require_once './view/layouts/script_header.php'; ?>

<div class="container">
    <form action="daerahStore" method="post">
        <div class="form-group">
            <label for="">Input Daerah</label>
            <input type="text" class="form-control" name="daerah"><br>

            <button class="btn btn-dark" type="submit">Submit</button>
        </div>

    </form>
</div>


<?php require_once './view/layouts/script_footer.php'; ?>