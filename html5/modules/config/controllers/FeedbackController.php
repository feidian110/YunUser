<?php


namespace addons\YunUser\html5\modules\config\controllers;


use addons\YunUser\html5\controllers\BaseController;

class FeedbackController extends BaseController
{
    public function actionIndex()
    {
        return $this->render( $this->action->id );
    }
}