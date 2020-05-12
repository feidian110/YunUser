<?php
use common\helpers\Html;
use common\helpers\ImageHelper;
use yii\widgets\ActiveForm;

$this->title = "用户登录";
?>

<style>
    .login-box{
        width: 100%;
        height: 200px;
    }
    .login-box .login-logo{
        width: 80px;
        height: 80px;
        background: #f5f5f5;
        margin: 80px auto;
        position: relative;
        border-radius:10px;
        background-size:contain;
    }
    .signUp_button{

        height: 45px;
        line-height: 45px;
        border: #ff6849;
        border-style: solid;
        border-width: 1px;
        border-radius: 4px;
        width: 100%;
        font-size: 0.98rem;
        margin-top: 10px;
        float: right;
    }
</style>
<section class="aui-flexView">


    <section class="aui-scrollView">
        <div class="aui-code-box">
            <form  id="form">
                <?php $form = ActiveForm::begin() ;?>
                <p class="aui-code-line">
                    <input type="text" class="aui-code-line-input" value="" name="account" id="account" autocomplete="off" placeholder="请输入邮箱/用户名"/>
                </p>
                <p class="aui-code-line aui-code-line-clear">

                    <i class="aui-show  operate-eye-open"></i>
                    <input type="password" class="aui-code-line-input password" name="password" id="password" placeholder="密码" value="">
                </p>
                <div class="aui-flex-links">
                    <!-- <a href="javascript:;">
                         <label class="cell-right">
                             <input type="checkbox" value="1" name="checkbox">
                             <i class="cell-checkbox-icon"></i>记住密码
                         </label>
                     </a> -->
                    <a href="javascript:;">忘记密码?</a>
                </div>
                <div class="aui-code-btn">
                    <?= Html::button('登 录',['onclick'=>'login.check()']);?><br/>
                    <?= Html::a('注 册',['signup'],['class'=>'signUp_button']);?>
                </div>

                <?php ActiveForm::end();?>
        </div>

        <div class="aui-login-line">
            <h2>第三方登录</h2>
        </div>
        <div class="aui-login-armor">
            <a href="javascript:;" class="aui-tabBar-item">
                <img src="/html5/resources/img/icon-sin-001.png" alt="">
            </a>
            <a href="javascript:;" class="aui-tabBar-item">
                <img src="/html5/resources/img/icon-sin-002.png" alt="">
            </a>
            <a href="javascript:;" class="aui-tabBar-item">
                <img src="/html5/resources/img/icon-sin-003.png" alt="">
            </a>
        </div>

    </section>
</section>

<?php
$js = <<<JS
    $('.aui-show').click(function() {
        let pass_type = $('input.password').attr('type');

        if (pass_type === 'password') {
            $('input.password').attr('type', 'text');
            $('.aui-show').removeClass('operate-eye-open').addClass('operate-eye-close');
        } else {
            $('input.password').attr('type', 'password');
            $('.aui-show').removeClass('operate-eye-close').addClass('operate-eye-open');
        }
    });


JS;
$this->registerJs($js);
?>
