<?php

namespace addons\YunUser\html5\controllers;

use common\models\member\Auth;
use common\models\member\Member;
use common\traits\BaseAction;
use common\traits\WechatLogin;
use Yii;
use common\controllers\AddonsController;
use yii\helpers\Json;

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