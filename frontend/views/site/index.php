<?php

/* @var $this yii\web\View */

$this->title = 'Тестовое задание';

?>

<div class="container">
    <div class="col-sm-6">
        <h3><a href="<?= \yii\helpers\Url::to(['/site/base-grid']) ?>"> Задание №1.</a></h3>
    </div>
    <div class="col-sm-6">
        <h3><a href="<?= \yii\helpers\Url::to(['/site/slick-grid']) ?>"> Задание №2.</a></h3>
    </div>
</div>
