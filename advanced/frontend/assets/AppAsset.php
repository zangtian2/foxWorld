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
//        'css/site.css',
        'assets/layui/css/layui.css',
    ];
    public $js = [
//        'assets/myassets/layui.all.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
