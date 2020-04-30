
var login = {
    check : function () {
        var account = $('input[name="account"]').val();
        var password = $('input[name="password"]').val();

        if( !account ){
            hui.iconToast('用户名不能为空！');
            return false;
        }
        if( !password ){
            hui.iconToast('密码不能为空！');
            return false;
        }
        var url = '';
        var data = {'username':account,'password':password};
        $.post( url,data, function (result) {

        },'JSON')

    }
}