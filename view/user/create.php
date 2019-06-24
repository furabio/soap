<?php include_once "view/header.php"; ?>

    <div class="container">
        <form action="index.php?controller=UserResource&method=store" method="post" style="margin-top: 50px;">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="username">Username: </label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email: </label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Password: </label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="company">Empresa: </label>
                    <select id="company" class="form-control" name="company">
                        <option selected>Choose...</option>
                        <?php if (isset($companies)) : ?>
                            <?php foreach ($companies as $company): ?>
                                <option value="<?= $company->id ?>"><?= $company->name ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="role">Tipo de usuário: </label>
                    <select id="role" class="form-control" name="role">
                        <option selected>Choose...</option>
                        <?php if (isset($roles)) : ?>
                            <?php foreach ($roles as $role): ?>
                                <option value="<?= $role->id ?>"><?= $role->name ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <input type="submit" value="SAVE" class="btn btn-primary"/>
        </form>
    </div>

<?php include_once "view/footer.php"; ?>