<?php include_once "view/header.php" ?>

<div class="container">
    <h2 class="mt-3 mb-3">Filiais - Serviço NUSOAP</h2>

    <table class="table table-dark" style="margin-top: 25px;">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($subsidiaries)) : ?>
            <?php foreach ($subsidiaries as $subsidiary): ?>
                <tr>
                    <td><?= $subsidiary['id'] ?></td>
                    <td><?= $subsidiary['name'] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>

    <button style="margin-top: 25px;" type="button" class="btn btn-dark"><a
                href="index.php?controller=SubsidiaryResource&method=create">ADD</a></button>

</div>

<?php include_once "view/footer.php" ?>

