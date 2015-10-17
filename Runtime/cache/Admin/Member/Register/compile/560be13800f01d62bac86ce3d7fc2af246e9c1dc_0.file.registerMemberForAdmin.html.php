<?php /* Smarty version 3.1.24, created on 2015-10-17 21:57:30
         compiled from "F:/Web/Webroot/MistCMS/Application/Admin/Member/View/Register/registerMemberForAdmin.html" */ ?>
<?php
/*%%SmartyHeaderCode:21061562253cae2bd41_03995712%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '560be13800f01d62bac86ce3d7fc2af246e9c1dc' => 
    array (
      0 => 'F:/Web/Webroot/MistCMS/Application/Admin/Member/View/Register/registerMemberForAdmin.html',
      1 => 1445090248,
      2 => 'file',
    ),
    '9b2d62f252ce862644469bdc805dc5962aeeda3c' => 
    array (
      0 => 'F:/Web/Webroot/MistCMS/Application/Admin/Common/View/base.html',
      1 => 1445088064,
      2 => 'file',
    ),
    'ff40b1c4b71fb3b4cdddb5618dfd0459dfae83e8' => 
    array (
      0 => 'ff40b1c4b71fb3b4cdddb5618dfd0459dfae83e8',
      1 => 0,
      2 => 'string',
    ),
    '89edefeeb37dd0b5925bb5b7cc564d727cf298f2' => 
    array (
      0 => '89edefeeb37dd0b5925bb5b7cc564d727cf298f2',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '21061562253cae2bd41_03995712',
  'variables' => 
  array (
    'page_title' => 0,
    'title' => 0,
    'userinfo' => 0,
    'modules' => 0,
    'module' => 0,
    'active' => 0,
    'order' => 0,
    'item' => 0,
    'process_bar' => 0,
    'val' => 0,
    'v' => 0,
    'key' => 0,
    'footinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_562253cb0575e8_06352961',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562253cb0575e8_06352961')) {
function content_562253cb0575e8_06352961 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21061562253cae2bd41_03995712';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)) {?>
            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        <?php } else { ?>
            MistCMS
        <?php }?>
    </title>
    <meta charset="UTF-8"/>

    <!-- 通用样式文件 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/css/bootstrap-responsive.min.css" />

    <link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/css/matrix-style.css" />
    <link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/css/matrix-media.css" />
    <link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/font-awesome/css/font-awesome.css" />

    <!-- 目录重新定义过的-->
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- 提示工具 -->
    <link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/plugin/notify/jquery.gritter.css" />
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/plugin/notify/jquery.ui.custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/plugin/notify/jquery.gritter.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- 引入基础掩饰文件 -->
    <link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/css/modules/admin/base.css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/js/modules/admin/base.js"><?php echo '</script'; ?>
>
    <?php
$_smarty_tpl->properties['nocache_hash'] = '21061562253cae2bd41_03995712';
?>

<link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/css/colorpicker.css" />
<link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/css/uniform.css" />
<link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/css/select2.css" />
<link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/css/matrix-media.css" />
<link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/css/bootstrap-wysihtml5.css" />

<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/js/bootstrap-colorpicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/js/masked.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/js/jquery.uniform.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/js/jquery.peity.min.js"><?php echo '</script'; ?>
>


<link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/css/modules/admin/member/register.css" rel="stylesheet" />
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/js/modules/admin/member/register.js"><?php echo '</script'; ?>
>


</head>
<body>

<!-- Logo部分 -->

<div id="header">
    <h1><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['U'][0][0]->U(array('url'=>'admin/member/index/index'),$_smarty_tpl);?>
">MistCMS</a></h1>
</div>



<!-- 用户栏 -->

<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <!-- 可以下拉 -->
        <li class="dropdown" id="profile-messages">
            <a title="" href="javascript:void(0);" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle">
                <i class="icon icon-user"></i>
                <span class="text">欢迎你！<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['username'];?>
</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a id="show_message" href="javascript:void(0);"><i class="icon-user"></i> 我的资料</a></li>
                <li class="divider"></li>
                <li><a id="show_tasks" href="javascript:void(0);"><i class="icon-check"></i> 我的任务</a></li>
            </ul>
        </li>
        <li class="dropdown" id="menu-messages">
            <a href="javascript:void(0);" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle">
                <i class="icon icon-envelope"></i>
                <span class="text">消息</span>
                <span id="message_sum_box" class="label label-important"></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="sAdd" title="" href="javascript:void(0);">
                        <i class="icon-plus"></i>
                        新消息 &nbsp;&nbsp;&nbsp;
                        <span id="message_new_box" class="label label-important"></span>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="sInbox" title="" href="javascript:void(0);">
                        <i class="icon-envelope"></i>
                        收件箱 &nbsp;&nbsp;&nbsp;
                        <span id="message_receive_box" class="label label-important"></span>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="sOutbox" title="" href="javascript:void(0);">
                        <i class="icon-arrow-up"></i>
                        发件箱 &nbsp;&nbsp;&nbsp;
                        <span id="message_send_box" class="label label-important"></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- 不能下拉 -->
        <li class="">
            <a title="" href="javascript:void(0);"><i class="icon icon-cog"></i>
                <span id="show_setting" class="text">设置</span>
            </a>
        </li>
        <li class="">
            <a title="" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['U'][0][0]->U(array('url'=>'admin/member/public/logout'),$_smarty_tpl);?>
">
                <i class="icon icon-share-alt"></i>
                <span id="to_logout" class="text">退出</span>
            </a>
        </li>
    </ul>
</div>


<!-- 搜索栏 -->

<div id="search">
    <input type="text" id="search_input" placeholder="输入搜索内容..."/>
    <button type="submit" id="search_submit" class="tip-bottom" title="Search">
        <i class="icon-search icon-white"></i>
    </button>
</div>


<!-- 侧边栏 -->

<div id="sidebar">
    <a href="javascript:void(0);" class="visible-phone"><i class="icon icon-home"></i> 控制台</a>
    <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['modules']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['module'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['module']->_loop = false;
$_smarty_tpl->tpl_vars['order'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
$foreach_module_Sav = $_smarty_tpl->tpl_vars['module'];
?>
            <?php if ($_smarty_tpl->tpl_vars['module']->value['type'] === 0) {?>
            
                <?php if (intval($_smarty_tpl->tpl_vars['active']->value) == $_smarty_tpl->tpl_vars['order']->value) {?>
                <li class="active"> <?php } else { ?> <li> <?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['module']->value['href'];?>
">
                    <i class="icon <?php echo $_smarty_tpl->tpl_vars['module']->value['icon'];?>
"></i>
                    <span><?php echo $_smarty_tpl->tpl_vars['module']->value['title'];?>
</span>
                </a>
            <?php } else { ?>
            
                <?php if (intval($_smarty_tpl->tpl_vars['active']->value) === $_smarty_tpl->tpl_vars['order']->value) {?>
                <li class="submenu active"> <?php } else { ?>  <li class="submenu">  <?php }?>
                <a href="javascript:void(0);">
                    <i class="icon <?php echo $_smarty_tpl->tpl_vars['module']->value['icon'];?>
"></i>
                    <span><?php echo $_smarty_tpl->tpl_vars['module']->value['title'];?>
</span>
                    
                </a>
                <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['module']->value['items'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </ul>
            <?php }?>
            </li>
        <?php
$_smarty_tpl->tpl_vars['module'] = $foreach_module_Sav;
}
?>

        <!-- 快速统计 -->
        <?php
$_from = $_smarty_tpl->tpl_vars['process_bar']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['val']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$foreach_val_Sav = $_smarty_tpl->tpl_vars['val'];
?>
            <?php
$_from = $_smarty_tpl->tpl_vars['val']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                <li class="content">
                    <span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value === 0) {?>
                        <div class="progress progress-mini active progress-striped progress-danger">
                    <?php } else { ?>
                        <div class="progress progress-mini active progress-striped">
                    <?php }?>
                        <div style="width: <?php echo $_smarty_tpl->tpl_vars['v']->value['percent'];?>
%;" class="bar"></div>
                    </div>
                    <span class="percent"> <?php echo $_smarty_tpl->tpl_vars['v']->value['percent'];?>
%</span>
                    <div class="stat"><?php echo $_smarty_tpl->tpl_vars['v']->value['used'];?>
 / <?php echo $_smarty_tpl->tpl_vars['v']->value['total'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['unit'];?>
</div>
                </li>
            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
        <?php
$_smarty_tpl->tpl_vars['val'] = $foreach_val_Sav;
}
?>

    </ul>
</div>



<!-- 内容区域 -->
<?php
$_smarty_tpl->properties['nocache_hash'] = '21061562253cae2bd41_03995712';
?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb">
            <a href="index.html" title="Go to Home" class="tip-bottom">
                <i class="icon-home"></i>
                Home
            </a>
            <a href="#" class="tip-bottom">Form elements</a>
            <a href="#" class="current">Common elements</a>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>基本信息</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="#" method="get" class="form-horizontal">

                            <div class="control-group">
                                <label class="control-label">用户名</label>
                                <div class="controls">
                                    <input type="text" name="username" class="span11" placeholder="请输入用户名"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">昵称</label>
                                <div class="controls">
                                    <input type="text" name="nickname" class="span11" value="匿名用户" placeholder=""/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">密码</label>
                                <div class="controls">
                                    <input type="password" name="password" class="span11" placeholder="请输入密码"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">重复密码</label>
                                <div class="controls">
                                    <input type="password" name="password_repeat" class="span11" placeholder="重复输入密码"/>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>其他</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="#" method="get" class="form-horizontal">

                            <div class="control-group">
                                <label class="control-label">手机</label>
                                <div class="controls">
                                    <input type="text" id="mobile" class="span11" placeholder=""/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">QQ</label>
                                <div class="controls">
                                    <input type="text" id="qq" class="span11" placeholder=""/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email</label>
                                <div class="controls">
                                    <input type="text" id="email" class="span11" placeholder=""/>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">性别</label>
                                <div class="controls">
                                    <select name="sex">
                                        <option value="0">男</option>
                                        <option value="1">女</option>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">启用状态</label>
                                <div class="controls">
                                    <select name="sex">
                                        <option value="1">启用</option>
                                        <option value="0">禁用</option>
                                    </select>
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label">生日</label>
                                <div class="controls">
                                    <div  data-date="2012/12/24" class="input-append date datepicker">
                                        <input type="text" value="2012/12/24"  data-date-format="yyyy-mm-dd" class="span11" >
                                        <span class="add-on"><i class="icon-th"></i></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </div>

</div>



<!-- 页脚区域 -->

<div class="row-fluid">
    <div id="footer" class="span12"><?php echo $_smarty_tpl->tpl_vars['footinfo']->value['copyright'];?>
</div>
</div>


</body>
</html>
<?php }
}
?>