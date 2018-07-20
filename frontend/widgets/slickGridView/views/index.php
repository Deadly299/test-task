<?php

use yii\helpers\Url;

?>

<table class="items" data-items='<?= $slickData ?>'>
    <tr>
        <td valign="top" width="100%">
            <div id="myGrid" style="width:550px;height:270px;"></div>
        </td>
    </tr>
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

