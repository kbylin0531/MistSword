/**
 * Created by Lin on 2015/10/17 0017.
 */

$(document).ready(function(){
    //登陆页与回复页
    var loginform = $("#loginform");
    var recoverform = $("#recoverform");

    var submit    = $("#submit");
    var password = $("#password");
    var username = $("#username");
    var verifyimg = $("#verifyimg");


    var to_login =  $('#to-login');//返回登陆
    var to_recovery = $('#to-recover');//去恢复页

    var lmsg = MistKits.getMessage("message_box_login");
    var speed = 400;

    to_recovery.click(function(){
        loginform.slideUp();
        $("#recoverform").fadeIn(speed);
    });
    to_login.click(function(){
        $("#recoverform").hide();
        loginform.fadeIn(speed);
    });


    //刷新验证码
    verifyimg.click(function () {
        var src = verifyimg.attr("src");
        if( src.indexOf('?')>0){
            verifyimg.attr("src", src+'&random='+Math.random());
        }else{
            verifyimg.attr("src", src.replace(/\?.*$/,'')+'?'+Math.random());
        }
    });

    //提交
    submit.click(function () {
        var pwd = password.val();
        password.val(md5(pwd));
        loginform.submit();
    });

    //登陆错误
    if(lmsg){
        console.log(lmsg);
        $.gritter.add({
            title:	'错误',
            text:	lmsg,
            sticky: false
        });
    }

    /**
     * 低版本IE的 placeholder兼容处理
     */
    if((GenKits.getBrowser())['name'] === 'ie' && $.browser.version.slice(0,3) < 10) {
        $('input[placeholder]').each(function(){
            var input = $(this);
            $(input).val(input.attr('placeholder'));
            $(input).focus(function(){
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                }
            });
            $(input).blur(function(){
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.val(input.attr('placeholder'));
                }
            });
        });
    }
});