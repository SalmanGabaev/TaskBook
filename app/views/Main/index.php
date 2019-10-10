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
        <form method="post" action="<?=PATH; ?>">
            <div class="form-group">
                <label for="inputUserName">Имя пользователя</label>
                <input type="text" class="form-control" id="inputUserName" name="user_name" value="<?=isset($_SESSION['form_data']['user_name']) ? h($_SESSION['form_data']['user_name']) : '';?>">
            </div>

            <div class="form-group">
                <label for="inputUserEmail">E-mail</label>
                <input type="text" class="form-control" id="inputUserEmail" name="user_email" value="<?=isset($_SESSION['form_data']['user_email']) ? h($_SESSION['form_data']['user_email']) : '';?>">
            </div>


            <div class="form-group">
                <label for="userTaskDescription">Текст задачи</label>
                <textarea class="form-control" id="userTaskDescription" name="text" rows="3" value="<?=isset($_SESSION['form_data']['user_email']) ? h($_SESSION['form_data']['text']) : '';?>"></textarea>
            </div>

            <button type="submit" class="btn btn-sm btn-success">Создать задачу</button>
        </form>
        <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
    </div>
</div>
<div class="row m-0">

    <table id="example" class="display">
        <thead>
            <tr>
                <th class="px-2">Имя пользователя</th>
                <th class="px-2">E-mail</th>
                <th class="px-2" data-orderable="false">Текст задачи</th>
                <th class="px-2">Статус</th>
            </tr>
        </thead>
        <tbody>
            <?php if($tasks): ?>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?=$task->user_name; ?></td>
                        <td><?=$task->user_email; ?></td>
                        <td><?=$task->text; ?></td>
                        <td>
                            <? if($task->status) : ?>
                                <i class="fa fa-check text-success" aria-hidden="true"></i>
                                <span class="invisible"><?=$task->status; ?></span>
                            <? endif; ?>

                            <? if(!$task->status) : ?>
                                <?=$task->status; ?>
                            <? endif; ?>
                        </td>
                    </tr>
                <? endforeach; ?>
            <? endif; ?>
        </tfoot>
    </table>
</div>
