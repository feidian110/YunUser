<?php

namespace addons\YunUser\html5\assets;

use yii\web\AssetBundle;

/**
 * 静态资源管理
 *
 * Class AppAsset
 * @package addons\YunUser\html5\assets
 */
class AppAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@addons/YunUser/html5/resources/';

    public $css = [
        'css/hui.css',
        'css/login.css',
    ];

    public $js = [
        'js/hui.js',
        'js/hui-tab.js',
        'js/common.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}