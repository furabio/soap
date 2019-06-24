<?php include_once "view/header.php" ?>

<div class="container">
    <h2 class="mt-3 mb-3">Usuários - Serviço NUSOAP</h2>

    <table class="table table-dark" style="margin-top: 25px;">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($users)) : ?>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email'] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>

    <button style="margin-top: 25px;" type="button" class="btn btn-dark"><a
                href="index.php?controller=UserResource&method=create">ADD</a></button>

</div>

<?php include_once "view/footer.php" ?>

