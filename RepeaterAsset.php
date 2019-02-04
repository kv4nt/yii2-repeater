<?php

namespace kv4nt\yii2repeater;

use yii\web\AssetBundle;

class RepeaterAsset extends AssetBundle
{

    public $sourcePath = __DIR__;
    public $basePath   = '@app/web';
    public $js         = [
        'js/js.js',
    ];
    public $css        = [
        'css/style.css',
    ];
    public $depends    = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
