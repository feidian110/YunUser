<?php


namespace addons\YunUser\html5\controllers;


use addons\YunStore\common\enums\StateEnum;
use addons\YunUser\html5\forms\LoginForm;
use addons\YunUser\html5\forms\SignupForm;
use common\helpers\ResultHelper;
use common\models\member\Member;
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

        if( Yii::$app->request->isPost ){
            $username = trim(Yii::$app->request->post('username',''));
            $password = trim(Yii::$app->request->post('password',''));
            $ra_pass = Yii::$app->request->post('ra_pass','');
            $email = trim(Yii::$app->request->post('email',''));
            $mobile = (int)Yii::$app->request->post('mobile');

            $model = new SignupForm(['scenario'=>'register']);
            $model->username = $username;
            $model->password = $password;
            $model->ra_pass = $ra_pass;
            $model->email = $email;
            $model->mobile = $mobile;
            if( $model->validate() ){
                if( $model->signup() ){
                    return ResultHelper::json(200,'注册成功！');
                }else{
                    return ResultHelper::json(402,$this->getError($model));
                }
            }else{
                return ResultHelper::json(402,$this->getError($model));
            }

        }
        return $this->render( $this->action->id );
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(['login']);
    }
}