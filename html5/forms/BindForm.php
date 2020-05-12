<?php


namespace addons\YunUser\html5\forms;


use common\enums\StatusEnum;
use yii\base\Model;
use yii\db\ActiveQuery;

class BindForm extends Model
{
    public $mobile;

    public $password;

    public $ra_pass;

    public function rules()
    {
        return [
            [['mobile'], 'trim','on'=>'register'],
            [['password', 'ra_pass', 'mobile'], 'required','on'=>'bind'],
            ['password', 'string', 'min' => 6, 'max' => 20,'on'=>'register'],
            ['ra_pass', 'compare', 'compareAttribute' => 'password','message'=>'两次输入的密码不一致！'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'password' => '登录密码',
            'mobile' => '手机号码',
            'ra_pass' => '确认密码'
        ];
    }
}