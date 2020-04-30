<?php

namespace addons\YunUser\html5\controllers;

use common\traits\BaseAction;
use Yii;
use common\controllers\AddonsController;

/**
 * 默认控制器
 *
 * Class DefaultController
 * @package addons\YunUser\html5\controllers
 */
class BaseController extends AddonsController
{
    use BaseAction;
    /**
    * @var string
    */
    public $layout = "@addons/YunUser/html5/views/layouts/main";
}