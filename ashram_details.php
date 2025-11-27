<?php
    include_once "navbar.php";
?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="">
                <label for="" class="form-label">Add Image</label>
                <input type="file" name="img" id="img" class="form-control mb-3">
                <label for="" class="form-label">Location</label>
                <input type="text" name="location" id="location" class="form-control mb-3">
                <input type="submit" value="Submit" class="btn btn-success mb-5">
            </form>
        </div>
    </div>
</div>

<?php
    include_once "footer.php";
?>