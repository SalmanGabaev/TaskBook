<div class="row mt-3">
    <div class="col-md-12">
        <?php if(isset($_SESSION['error'])): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>
        <?php if(isset($_SESSION['success'])): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="row">
    <div class="col-12 mt-3">
        <h2>Регистрация нового пользователя</h2>
    </div>

    <div class="col-12">
        <form method="post" action="/user/signup" id="signup" role="form" data-toggle="validator">
            <div class="form-group has-feedback">
                <label for="name">Имя</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Имя" value="<?=isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : '';?>" required>
            </div>

            <div class="form-group has-feedback">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?=isset($_SESSION['form_data']['email']) ? h($_SESSION['form_data']['email']) : '';?>" required>
            </div>

            <div class="form-group has-feedback">
                <label for="login">Логин</label>
                <input type="text" name="login" class="form-control" id="login" placeholder="Логин" value="<?=isset($_SESSION['form_data']['login']) ? h($_SESSION['form_data']['login']) : '';?>" required>
            </div>


            <div class="form-group has-feedback">
                <label for="pasword">Пароль</label>
                <input type="password" name="password" class="form-control" id="pasword" placeholder="****" data-error="Пароль должен включать не менее 6 символов" data-minlength="6" value="<?=isset($_SESSION['form_data']['password']) ? h($_SESSION['form_data']['password']) : '';?>" required>
            </div>

            <button type="submit" class="btn btn-success">Зарегистрировать</button>
        </form>
        <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
    </div>
</div>
