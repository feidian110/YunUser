<?php
use common\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "账户绑定";
?>
<section class="aui-flexView">
    <header class="aui-navBar aui-navBar-fixed b-line">
        <div class="aui-center">
            <span class="aui-center-title">还没有账户，注册并绑定</span>
        </div>
    </header>
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
                <!-- <i class="aui-show  operate-eye-open"></i> -->
                <input type="password" id="psw_ag" class="aui-code-line-input" placeholder="再次输入密码" value="">
            </p>
            <!-- <div class="aui-flex-links">
                <input type="text" placeholder="输入验证码" class="erification-right" name="">

                <button type="button" id="btnSendCode1" class="feachBtn" style="width: 35%;font-size: 13px;">获取验证码</button>
            </div> -->

            <div class="aui-code-btn">

                <?= Html::button('注册',['id'=>'register']);?>
            </div>
            <div class="aui-code-btn">

                <?= Html::button('绑定已有账户',['id'=>'register']);?>
            </div>
            <div class="aui-code-btn">

                <?= Html::button('直接登录',['id'=>'register']);?>
            </div>
            <?php ActiveForm::end()?>
        </div>

    </section>
</section>
