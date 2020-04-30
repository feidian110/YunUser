<?php

return [

    // ----------------------- 菜单配置 ----------------------- //
    'config' => [
        // 菜单配置
        'menu' => [
            'location' => 'addons', // default:系统顶部菜单;addons:应用中心菜单
            'icon' => 'fa fa-puzzle-piece',
        ],
        // 子模块配置
        'modules' => [
            'config' => [
                'class' => 'addons\YunUser\html5\modules\config\Module',
            ],
            'order' => [
                'class' => 'addons\YunUser\html5\modules\order\Module',
            ],
            'member' => [
                'class' => 'addons\YunUser\html5\modules\member\Module',
            ],
        ],
    ],

    // ----------------------- 快捷入口 ----------------------- //

    'cover' => [

    ],

    // ----------------------- 菜单配置 ----------------------- //

    'menu' => [

    ],

    // ----------------------- 权限配置 ----------------------- //

    'authItem' => [
    ],
];