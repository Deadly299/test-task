<?php

/* @var $this yii\web\View */

use frontend\widgets\slickGridView\SlickGridView;

$this->title = 'Task №2';
?>

    <div class="container">
    <div class="row">
        <div class="col-sm-3">
            <p>Table 1:</p>
            <?= \yii\helpers\Html::dropDownList('id', Yii::$app->request->get('table1'), $table1Items, [
                'prompt' => 'Все',
                'class' => 'form-control',
                'data-role' => 'drop-down-list',
                'data-type' => 'table1',
                'data-url' => \yii\helpers\Url::to(['/site/slick-grid']),
            ]) ?>
        </div>

        <?php if ($table2Items) { ?>
            <div class="col-sm-3">
                <p>Table 2:</p>
                <?= \yii\helpers\Html::dropDownList('id', Yii::$app->request->get('table2'), $table2Items, [
                    'prompt' => 'Все',
                    'class' => 'form-control',
                    'data-role' => 'drop-down-list',
                    'data-type' => 'table2',
                    'data-url' => \yii\helpers\Url::to(['/site/slick-grid']),
                ]) ?>
            </div>
        <?php } ?>
    </div>
</div>

<?php if ($table3Items) { ?>
    <div class="col-sm-6">
        <p>Table 3:</p>
        <?= SlickGridView::widget(['query' => $table3Items, 'limit' => 10]) ?>
    </div>

<?php } ?>