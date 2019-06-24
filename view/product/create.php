<?php include_once "view/header.php"; ?>

    <div class="container">
        <form action="index.php?controller=ProductResource&method=store" method="post" style="margin-top: 50px;">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name: </label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="description">Description: </label>
                    <input type="text" class="form-control" name="description" id="description" required>
                </div>
            </div>
            <input type="submit" value="SAVE" class="btn btn-primary"/>
        </form>
    </div>

<?php include_once "view/footer.php"; ?>