<?php include_once "view/header.php" ?>

<div class="container">
    <h2 class="mt-3 mb-3">Funcionários - Serviço EXTERNO</h2>

    <table class="table table-dark" style="margin-top: 25px;">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Salary</th>
            <th scope="col">Age</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($employees)) : ?>
            <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= $employee->id ?></td>
                    <td><?= $employee->employee_name ?></td>
                    <td><?= $employee->employee_salary ?></td>
                    <td><?= $employee->employee_age ?></td>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<?php include_once "view/footer.php" ?>

