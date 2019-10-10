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
        <h2>Вход</h2>
    </div>

    <div class="col-12">
        <form method="post" action="/user/login" id="signup" role="form" data-toggle="validator">
            <div class="form-group has-feedback">
                <label for="login">Логин</label>
                <input type="text" name="login" class="form-control" id="login" placeholder="Логин" required>
            </div>

            <div class="form-group has-feedback">
                <label for="pasword">Пароль</label>
                <input type="password" name="password" class="form-control" id="pasword" placeholder="****" required>
            </div>

            <button type="submit" class="btn btn-success">Войти</button>
        </form>
        <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
    </div>
</div>
