<div class="row mt-3 mx-0">
    <div class="col-12 px-0">
        <h3>Задачи</h3>
    </div>

    <div class="col-12 mt-3 mx-0 header-list">
        <div class="row">
            <div class="col-2 header-list-item">Имя пользователя</div>
            <div class="col-2 header-list-item"> E-mail пользователя</div>
            <div class="col-3 header-list-item"> Текст задачи</div>
            <div class="col-2 header-list-item">Статус</div>
            <div class="col-2 header-list-item">Отредактровано</div>
            <div class="col-1 header-list-item d-block">Действие</div>
        </div>
    </div>

    <div class="col-12 content-list">
        <?php if($tasks): ?>
            <?php foreach ($tasks as $task): ?>
                <div class="row row py-2 border-bottom">
                    <div class="col-2 header-list-item"><?=$task->user_name; ?></div>
                    <div class="col-2 header-list-item"><?=$task->user_email; ?></div>
                    <div class="col-3 header-list-item"><?=$task->text; ?></div>

                    <div class="col-2 header-list-item">
                        <? if($task->status) : ?>
                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                        <? endif; ?>

                        <? if(!$task->status) : ?>
                            <a href="<?=ADMIN; ?>/task/execute?id=<?=$task->id; ?>">Выполнить</a>
                        <? endif; ?>
                    </div>


                    <div class="col-2 header-list-item">
                        <? if($task->is_edit) : ?>
                            <i class="fa fa-check text-success" aria-hidden="true"></i>
                        <? endif; ?>

                        <? if(!$task->is_edit) : ?>
                            <?=$task->is_edit; ?>
                        <? endif; ?>
                    </div>


                    <div class="col-1 header-list-item">
                        <a href="<?=ADMIN; ?>/task/edit?id=<?=$task->id; ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                    </div>
                </div>
            <? endforeach; ?>
        <? endif; ?>
    </div>
</div>

<style>
    .header-list {
        background: #e6e6e6;
    }

    .header-list .header-list-item {
        display: flex;
        padding: 3px 15px;
        align-items: center;
        box-shadow: 1px 0px 3px -3px #1f1f1f;
    }


</style>