<?php

use yii\helpers\Url;

?>

<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>field 1</th>
        <th>field 2</th>
        <th>filed 3</th>
    </tr>
    </thead>
    <tbody>
    <?php if ($models) { ?>
        <?php foreach ($models as $number => $model) { ?>
            <tr>
                <td><?= ++$number ?></td>
                <td><?= $model->field1 ?></td>
                <td><?= $model->field2 ?></td>
                <td><?= $model->field3 ?></td>
            </tr>
        <?php } ?>
    <?php } ?>
    </tbody>
</table>

<?php if ($totalPages > 1) { ?>
    <ul class="pagination">
        <?php for ($page = 1; $page <= $totalPages; $page++) { ?>
            <li <?= (Yii::$app->request->get('page') == $page) || (($page == 1) && (!Yii::$app->request->get('page'))) ? 'class="active"' : null ?>>
                <a href="<?= Url::to([
                    Yii::$app->controller->route,
                    'table1' => Yii::$app->request->get('table1'),
                    'table2' => Yii::$app->request->get('table2'),
                    'page' => $page,
                ]) ?>" class="links">
                    <?= $page ?>
                </a>
            </li>

        <?php } ?>
    </ul>
<?php } ?>

