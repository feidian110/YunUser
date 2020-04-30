<?php


namespace addons\YunUser\html5\modules\config\controllers;


use addons\YunUser\html5\controllers\BaseController;

class PersonalController extends BaseController
{
    public function actionProfile()
    {
        return $this->render( $this->action->id );
    }
}