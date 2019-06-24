<?php include_once "view/header.php"; ?>

    <div class="container">
        <form action="index.php?controller=CustomerResource&method=store" method="post" style="margin-top: 50px;">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="user">Usuário: </label>
                    <select id="user" class="form-control" name="user">
                        <option selected>Choose...</option>
                        <?php if (isset($users)) : ?>
                            <?php foreach ($users as $user): ?>
                                <option value="<?= $user['id'] ?>"><?= $user['username'] ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">CPF: </label>
                    <input type="text" class="form-control" name="cpf" id="cpf" required>
                </div>
            </div>
            <input type="submit" value="SAVE" class="btn btn-primary"/>
        </form>
    </div>

<?php include_once "view/footer.php"; ?>