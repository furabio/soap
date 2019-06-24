<?php include_once "view/header.php" ?>

<div class="container">
    <h2 class="mt-3 mb-3">Pessoa - Serviço EXTERNO</h2>

    <table class="table table-dark" style="margin-top: 25px;">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">FirstName</th>
            <th scope="col">LastName</th>
            <th scope="col">Photo</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($persons)) : ?>
            <?php foreach ($persons as $person): ?>
                <tr>
                    <td><?= $person->id ?></td>
                    <td><?= $person->email ?></td>
                    <td><?= $person->first_name ?></td>
                    <td><?= $person->last_name ?></td>
                    <td><img src="<?= $person->avatar ?>" alt="<?= $person->first_name ?>" class="img-thumbnail">
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<?php include_once "view/footer.php" ?>

