<?php
namespace addons\YunUser\html5\controllers;


use addons\YunUser\html5\forms\BindForm;
use addons\YunUser\html5\forms\LoginForm;
use addons\YunUser\html5\forms\SignupForm;
use common\helpers\ResultHelper;

use common\models\member\Auth;
use common\widgets\area\Area;
use Yii;
use yii\helpers\Json;

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
       // $info = Json::decode(Yii::$app->session->get('wechatUser'));
       // $auth = Auth::findOne(['oauth_client_user_id'=>$info['id']]);
      //  if( $auth['member'] == null ){
      //      return $this->redirect( 'signup' );
      //  }
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
            return ResultHelper::json(422, '登录失败，请检查用户名和密码！');
        }
        $open = Yii::$app->yunWechatService->account->getAccount();
        //$open->oauth->scopes(['snsapi_userinfo'])->redirect()->send();
        var_dump(Yii::$app->session);
        die;
        return $this->render( $this->action->id );
    }

    public function actionBind()
    {
        $model = new BindForm();
        return $this->render( $this->action->id,[
            'model' =>$model
        ] );
    }


    public function actionSignup()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect( ['index'] );
        }
        if( Yii::$app->request->isPost ){
            $password = trim(Yii::$app->request->post('password',''));
            $ra_pass = Yii::$app->request->post('ra_pass','');
            $mobile = (int)Yii::$app->request->post('mobile');
            $model = new SignupForm(['scenario'=>'register']);

            $model->password = $password;
            $model->ra_pass = $ra_pass;
            $model->mobile = $mobile;
            if( $model->validate() ){
                if( $id = $model->signup() ){
                    $info = Json::decode(Yii::$app->session->get('wechatUser'));
                    if( $info != null ){
                        $auth = Auth::findOne(['oauth_client_user_id'=>$info['id']]);
                        $auth->member_id = $id;
                        if( $auth->save() ){
                            Yii::$app->user->login($auth->member);
                        }
                    }
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