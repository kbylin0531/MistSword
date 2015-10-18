<?php /* Smarty version 3.1.24, created on 2015-10-18 10:24:21
         compiled from "F:/Web/Webroot/MistCMS/Application/Admin/Main/View/Index/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:15172562302d500dcb5_80646709%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f5cf3d9137dd2933bdafb6482fe74ed05334c22' => 
    array (
      0 => 'F:/Web/Webroot/MistCMS/Application/Admin/Main/View/Index/index.html',
      1 => 1445084767,
      2 => 'file',
    ),
    '9b2d62f252ce862644469bdc805dc5962aeeda3c' => 
    array (
      0 => 'F:/Web/Webroot/MistCMS/Application/Admin/Common/View/base.html',
      1 => 1445135045,
      2 => 'file',
    ),
    'dc7a2287a4d29d40da901be5afbce9bb824fb02c' => 
    array (
      0 => 'dc7a2287a4d29d40da901be5afbce9bb824fb02c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '15172562302d500dcb5_80646709',
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
  'unifunc' => 'content_562302d5152917_11804589',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562302d5152917_11804589')) {
function content_562302d5152917_11804589 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15172562302d500dcb5_80646709';
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
/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/bootstrap/css/bootstrap-theme.min.css" />

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
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
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

    <!-- 引入基础掩饰文件 -->
    <link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/css/modules/admin/base.css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/js/modules/admin/base.js"><?php echo '</script'; ?>
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
$_smarty_tpl->properties['nocache_hash'] = '15172562302d500dcb5_80646709';
?>

<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb">
            <a href="index.html" title="Go to Home" class="tip-bottom">
                <i class="icon-home"></i>
                首页
            </a>
        </div>
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