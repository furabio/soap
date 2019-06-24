<?php include_once "view/header.php" ?>

<div class="container">
    <h2 class="mt-3 mb-3">Cliente - Serviço SOAP</h2>

    <table class="table table-dark" style="margin-top: 25px;">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">CPF</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($customers)) : ?>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= $customer->id ?></td>
                    <td><?= $customer->username ?></td>
                    <td><?= $customer->cpf ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>

    <button style="margin-top: 25px;" type="button" class="btn btn-dark"><a
                href="index.php?controller=CustomerResource&method=create">ADD</a></button>

</div>

<?php include_once "view/footer.php" ?>

