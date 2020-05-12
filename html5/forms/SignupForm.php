<?php
namespace addons\YunUser\html5\forms;

use yii\base\Model;
use yii\db\ActiveQuery;
use common\enums\StatusEnum;
use common\models\member\Member;

/**
 * Class SignupForm
 * @package frontend\models
 * @property string username 用户名
 * @property string password 用户密码
 * @property int mobile
 * @property string email
 * @property string ra_pass
 */
class SignupForm extends Model
{

    public $mobile;
    public $password;
    public $ra_pass;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mobile'], 'trim','on'=>'register'],
            [['password', 'ra_pass', 'mobile'], 'required','on'=>'register'],

            [
                'mobile',
                'unique',
                'targetClass' => '\common\models\member\Member',
                'filter' => function (ActiveQuery $query) {
                    return $query->andWhere(['>=', 'status', StatusEnum::DISABLED]);
                },
                'message' => '该手机号码已经被占用！','on'=>'register'
            ],

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

    /**
     * 注册
     *
     * @return Member|null
     * @throws \yii\base\Exception
     */
    public function signup()
    {
        $user = new Member();
        $user->mobile = $this->mobile;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user->id : $user->getErrors();
    }
}
