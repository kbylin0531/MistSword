/**
 * Created by Lin on 2015/10/17 0017.
 */
$(function () {

    var message_sum_box = $("#message_sum_box");//显示消息总数数目
    var message_receive_box = $("#message_receive_box");//接收消息数目
    var message_send_box = $("#message_send_box");//待发送消息数目

    var search_input = $("#search_input"); //搜索输入框
    var search_submit = $("#search_submit");//搜索提交按钮


    var sidebar = $("#sidebar");//侧边栏
    var submenus_parents = sidebar.find('li.submenu');
    var submenus = submenus_parents.find('ul');//sidebar下所有的ul

    var ul = sidebar.children("ul");
    var user_nav = $("#user-nav");

    //默认打开激活的li
    var lies = ul.children('li.active');
    openLi(lies);
    //显示我的资料
    $("#show_message").click(function () {

    });
    //显示我的任务
    $("#show_tasks").click(function () {

    });

    //显示个人设置
    $("#show_setting").click(function () {

    });

    //用户登出
    $("#to_logout").click(function () {

    });


    function isLiOpen(li){
        return li.hasClass('open') || li.hasClass('active');
    }
    function openLi(li){
        lies.removeClass('open');
        li.addClass('open');
        lies.removeClass('active');
        li.addClass('active');
    }
    function closeLi(li){
        li.removeClass('open');
    }


    //侧边栏下名为a的直接子元素
    sidebar.find('.submenu > a').click(function(e){
        e.preventDefault();
        var submenu = $(this).siblings('ul');//当前submenu下的ul(下拉项)
        var li = $(this).parents('li');
        if(isLiOpen(li)){
            if(($(window).width() > 768) || ($(window).width() < 479)) {
                submenu.slideUp();
            } else {
                submenu.fadeOut(250);
            }
            closeLi(li);
        } else {
            if(($(window).width() > 768) || ($(window).width() < 479)) {
                submenus.slideUp();
                submenu.slideDown();
            } else {
                submenus.fadeOut(250);
                submenu.fadeIn(250);
            }
            openLi(li);
        }
    });


    //var ul = $('#sidebar > ul');

    //全部关闭或者全部开启，但是该元素不可见
    //sidebar.children("a").click(function(e){
    //    e.preventDefault();
    //    if(sidebar.hasClass('open')){
    //        sidebar.removeClass('open');
    //        ul.slideUp(250);
    //    } else {
    //        sidebar.addClass('open');
    //        ul.slideDown(250);
    //    }
    //});

    // === Resize window related === //
    $(window).resize(function(){
        if($(window).width() > 479){
            ul.css({'display':'block'});
        }
        if($(window).width() < 479){
            //小于479的时候会不见
            ul.css({'display':'none'});
            fix_position();
        }
        if($(window).width() > 768){
            user_nav.children("ul").css({width:'auto',margin:'0'});
        }
    });

    if($(window).width() < 468){
        ul.css({'display':'none'});
        fix_position();
    }
    if($(window).width() > 479){
        ul.css({'display':'block'});
    }

    // === Tooltips === //
    $('.tip').tooltip();
    $('.tip-left').tooltip({ placement: 'left' });
    $('.tip-right').tooltip({ placement: 'right' });
    $('.tip-top').tooltip({ placement: 'top' });
    $('.tip-bottom').tooltip({ placement: 'bottom' });

    // === Search input typeahead === //
    //预设提示
    search_input.typeahead({
        source: ['Dashboard','Form elements','Common Elements','Validation','Wizard','Buttons','Icons','Interface elements','Support','Calendar','Gallery','Reports','Charts','Graphs','Widgets'],
        items: 4
    });

    // === Fixes the position of buttons group in content header and top user navigation === //
    function fix_position(){
        var uls = user_nav.children("ul");
        var uwidth = uls.width();//返回匹配到的第一个元素的宽度
        //距离移出一半
        uls.css({width:uwidth,'margin-left':'-' + uwidth / 2 + 'px'});
    }


});