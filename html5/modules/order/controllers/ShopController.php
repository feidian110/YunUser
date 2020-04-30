<?php


namespace addons\YunUser\html5\modules\order\controllers;


use addons\YunShop\common\models\CartItem;
use addons\YunStore\common\enums\StateEnum;
use addons\YunUser\html5\controllers\BaseController;
use Yii;

class ShopController extends BaseController
{

    public function actionIndex()
    {
        $model = CartItem::find()
            ->where(['>=','status',StateEnum::DISABLED])
            ->all();
        return $this->render( $this->action->id,[
            'model' => $model
        ] );
    }



}