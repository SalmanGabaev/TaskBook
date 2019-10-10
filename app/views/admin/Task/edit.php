<div class="row">
    <div class="col-md-12 mt-3">
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
    <div class="col-12 mt-3">
        <form action="<?=ADMIN;?>/task/edit" method="post">
            <div class="form-group">
                <label for="inputUserName">Имя пользователя</label>
                <input type="text" class="form-control" id="inputUserName" name="user_name" value="<?=$task->user_name; ?>">
            </div>

            <div class="form-group">
                <label for="inputUserEmail">E-mail</label>
                <input type="text" class="form-control" id="inputUserEmail" name="user_email" value="<?=$task->user_email; ?>">
            </div>


            <div class="form-group">
                <label for="userTaskDescription">Текст задачи</label>
                <textarea class="form-control" id="userTaskDescription" name="text" rows="3"><?=$task->text; ?></textarea>
            </div>

            <input type="hidden" name="id" value="<?=$task->id;?>">
            <button type="submit" class="btn btn-sm btn-success">Обновить задачу</button>
        </form>
    </div>
</div>