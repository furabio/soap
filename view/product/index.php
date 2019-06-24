<?php include_once "view/header.php" ?>

<div class="container">
    <h2 class="mt-3 mb-3">Produto - Serviço SOAP</h2>

    <table class="table table-dark" style="margin-top: 25px;">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($products)) : ?>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product->id ?></td>
                    <td><?= $product->name ?></td>
                    <td><?= $product->description ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>

    <button style="margin-top: 25px;" type="button" class="btn btn-dark"><a
                href="index.php?controller=ProductResource&method=create">ADD</a></button>

</div>

<?php include_once "view/footer.php" ?>

