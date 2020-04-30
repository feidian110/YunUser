<?php


namespace addons\YunUser\html5\controllers;


use addons\YunUser\html5\forms\LoginForm;
use addons\YunUser\html5\forms\SignupForm;
use common\helpers\ResultHelper;
use Yii;

class PublicController extends BaseController
{

    public function actionIndex()
    {
        if( Yii::$app->user->isGuest){
            return $this->redirect( ['login'] );
        }
        $model = Yii::$app->user->identity;
        return $this->render($this->action->id,[
            'model' =>$model
        ]);
    }
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect( ['index'] );
        }
        $model = new LoginForm();
        if( Yii::$app->request->isPost ){
            $model->username = (string)Yii::$app->request->post('username');
            $model->password = (string)Yii::$app->request->post('password');
            if ( $model->login()) {
                return $this->goBack(Yii::$app->request->referrer);
            }
            return ResultHelper::json(422, '登录失败，请检查用户民和密码！');
        }
        return $this->render( $this->action->id );
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if( Yii::$app->request->isPost ){
            $model->username = trim(Yii::$app->request->post('username',''));
            $model->password = trim(Yii::$app->request->post('password',''));
            $model->ra_pass = trim(Yii::$app->request->post('ra_pass',''));
            $model->email = trim(Yii::$app->request->post('email',''));
            $model->mobile = trim(Yii::$app->request->post('mobile',''));
            if( $model->signup() ){
                return ResultHelper::json('200', '注册成功！');
            }
            return ResultHelper::json('402', '用户名或者密码错误！');
        }
        return $this->render( $this->action->id );
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(['login']);
    }
}