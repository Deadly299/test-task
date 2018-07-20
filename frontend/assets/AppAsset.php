<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/slick.grid.css',
        'css/slick-default-theme.css',
//        'css/jquery-ui-1.8.16.custom.css',
        'css/examples.css',
    ];
    public $js = [
        'js/jquery.event.drag-2.2.js',
        'js/slick.core.js',
        'js/slick.grid.js',
        'js/main.script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
