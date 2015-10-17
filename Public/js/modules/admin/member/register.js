/**
 * Created by Lin on 2015/10/17 0017.
 */

$(function () {

    var content_header = $("#content-header");
    var btn_group = content_header.find(".btn-group");

    $(window).resize(function(){
        if($(window).width() > 479){
            btn_group.css({width:'auto'});
        }
        if($(window).width() > 768){
            btn_group.css({width:'auto'});
        }
    });

    //上面的之后等到resize时才会调用，这里手动调用
    if($(window).width() > 479){
        btn_group.css({width:'auto'});
    }
/**
=== Fixes the position of buttons group in content header and top user navigation === //
function fix_position()
{
 var uwidth = $('#user-nav > ul').width();
 $('#user-nav > ul').css({width:uwidth,'margin-left':'-' + uwidth / 2 + 'px'});

 var cwidth = $('#content-header .btn-group').width();
 $('#content-header .btn-group').css({width:cwidth,'margin-left':'-' + uwidth / 2 + 'px'});
}
*/
$('input[type=checkbox],input[type=radio],input[type=file]').uniform();



    //------------- Masked input fields -------------//
    $("#mask-phone").mask("(999) 999-9999", {completed:function(){alert("Callback action after complete");}});
    $("#mask-phoneExt").mask("(999) 999-9999? x99999");
    $("#mask-phoneInt").mask("+40 999 999 999");
    $("#mask-date").mask("99/99/9999");
    $("#mask-ssn").mask("999-99-9999");
    $("#mask-productKey").mask("a*-999-a999", { placeholder: "*" });
    $("#mask-eyeScript").mask("~9.99 ~9.99 999");
    $("#mask-percent").mask("99%");

    //------------- Toggle button  -------------//



    //------------- Colorpicker -------------//
    if($('div').hasClass('picker')){
        $('.picker').farbtastic('#color');
    }






});
