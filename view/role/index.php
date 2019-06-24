<?php include_once "view/header.php" ?>

<div class="container">
    <h2 class="mt-3 mb-3">Tipo de usuário - Serviço REST</h2>


    <table class="table table-dark" style="margin-top: 25px;">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>
        <?php if(isset($roles)) : ?>
            <?php foreach ($roles as $role): ?>
                <tr>
                    <td><?= $role->id ?></td>
                    <td><?= $role->name ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>

    <button style="margin-top: 25px;" type="button" class="btn btn-dark"><a href="index.php?controller=RoleResource&method=create">ADD</a></button>

</div>



<?php include_once "view/footer.php" ?>

