<?php
use common\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "账户注册";
?>
<section class="aui-flexView">

    <section class="aui-scrollView">
        <div class="aui-code-box">
            <?php $form = ActiveForm::begin()?>

            <p class="aui-code-line">
                <input type="text" class="aui-code-line-input" name="phone" value="" id="phone" autocomplete="off" placeholder="请输入手机号"/>
            </p>
            <p class="aui-code-line">
                <input type="password" id="psw" class="aui-code-line-input" placeholder="请输入密码" value="">
            </p>
            <p class="aui-code-line">
                <input type="password" id="psw_ag" class="aui-code-line-input" placeholder="再次输入密码" value="">
            </p>


            <div class="aui-code-btn">

                <?= Html::button('注册',['id'=>'register']);?>
            </div>
            <div class="aui-code-btn">

                <?= Html::a('绑定已有账户',['bind'],['class'=>'signUp_button']);?>
            </div>
            <?php ActiveForm::end()?>
        </div>

    </section>
</section>
