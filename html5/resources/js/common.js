/**
 * 登录操作
 * @type {{check: login.check}}
 */
var login = {
    check : function () {
        var account = $('input[name="account"]').val();
        var password = $('input[name="password"]').val();

        if( !account ){
            hui.toast('用户名不能为空！');
            return false;
        }
        if( !password ){
            hui.toast('密码不能为空！');
            return false;
        }
        var url = '';
        var data = {'username':account,'password':password};

        $.post( url,data, function (result) {
            if( result.code != 200 ){
                hui.toast(result.message);
                return false;
            }

        },'JSON')

    }
};


(function($) {
        $.fn.extend({
            addClear: function(options) {
                var options = $.extend({
                    closeSymbol: "&#10006;",
                    color: "#CCC",
                    top: 1,
                    right: 4,
                    returnFocus: true,
                    showOnLoad: false,
                    onClear: null
                }, options);

                $(this).wrap("<span style='position:relative;' class='add-clear-span'>");
                $(this).after("<a href='#clear'>" + options.closeSymbol + "</a>");
                $("a[href='#clear']").css({
                    color: options.color,
                    'text-decoration': 'none',
                    display: 'none',
                    'line-height': 1,
                    overflow: 'hidden',
                    position: 'absolute',
                    right: options.right,
                    top: options.top
                }, this);

                if ($(this).val().length >= 1 && options.showOnLoad === true) {
                    $(this).siblings("a[href='#clear']").show();
                }

                $(this).keyup(function() {
                    if ($(this).val().length >= 1) {
                        $(this).siblings("a[href='#clear']").show();
                    } else {
                        $(this).siblings("a[href='#clear']").hide();
                    }
                });

                $("a[href='#clear']").click(function() {
                    $(this).siblings("input").val("");
                    $(this).hide();
                    if (options.returnFocus === true) {
                        $(this).siblings("input").focus();
                    }
                    if (options.onClear) {
                        options.onClear($(this).siblings("input"));
                    }
                    return false;
                });
                return this;
            }
        });
    }
)(jQuery);
$('.feachBtn').click(function() {
    let count = 60;
    var phone = $.trim($('#phone1').val());

    if (!isPhoneNo(phone)) {
        hui.toast('请输入有效的手机号码！');
        return false;
    }
    if($.trim($("#psw").val())!=''&& $.trim($("#psw_ag").val())!=''){
        if($.trim($("#psw").val())!=$.trim($("#psw_ag").val())){
            hui.toast('两次输入的密码不一致！');
            return false;
        }
    }else{
        alert('密码不能为空');
        hui.toast('密码不能为空！');
        return false;

    }

    const countDown = setInterval(() => {
        if (count === 0) {
            $('.feachBtn').text('重新发送').removeAttr('disabled');
            $('.feachBtn').css({
                background: '#ff6849',
                color: '#fff',
            });
            clearInterval(countDown);
        } else {
            $('.feachBtn').attr('disabled', true);
            $('.feachBtn').css({
                background: '#FFA07A',
                color: '#ffffff'
            });
            $('.feachBtn').text(count + '秒后可重新获取');
        }
        count--;
    }, 1000);

});
// 验证手机号
function isPhoneNo(phone) {
    var pattern = /^1[34578]\d{9}$/;

    return pattern.test(phone);
}
$('#register').click(function(){
    // sendMessage1()
});
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
$("#register").click(function(){

    var phone = $.trim($('#phone').val());
    var password=$.trim($("#psw").val());

    if (!isPhoneNo(phone)) {
        hui.toast('请输入有效的手机号码！');
        $("#phone").focus();
        return false;
    }


    if($.trim($("#psw").val())!=''&& $.trim($("#psw_ag").val())!=''){
        if($.trim($("#psw").val())!=$.trim($("#psw_ag").val())){
            hui.toast('两次输入的密码不一致！！');
            return false;
        }
    }else{
        hui.toast('密码不能为空！！');
        return false;
    }
    var url = '';
    var data = {

        'mobile' : phone,
        'password' : password,
        'ra_pass' : $.trim($("#psw").val()),
    }
    $.post(url,data,function(result) {
        if( result.code != 200 ){
            hui.toast(result.message);
            return false;
        }
        hui.toast('注册成功！');
        location.href="/html5/yun-user/public/login";

    },'JSON')
});