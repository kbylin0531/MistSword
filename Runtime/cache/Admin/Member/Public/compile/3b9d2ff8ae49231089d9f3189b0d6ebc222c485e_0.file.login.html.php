<?php /* Smarty version 3.1.24, created on 2015-10-17 10:59:37
         compiled from "F:/Web/Webroot/MistCMS/Application/Admin/Member/View/Public/login.html" */ ?>
<?php
/*%%SmartyHeaderCode:173755621b99989f322_65791246%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b9d2ff8ae49231089d9f3189b0d6ebc222c485e' => 
    array (
      0 => 'F:/Web/Webroot/MistCMS/Application/Admin/Member/View/Public/login.html',
      1 => 1445050774,
      2 => 'file',
    ),
    '85a2b91e132ab51fe36a08ddc48ad0f96940faa0' => 
    array (
      0 => 'F:/Web/Webroot/MistCMS/Application/Admin/Member/View/base.html',
      1 => 1445048360,
      2 => 'file',
    ),
    'a5270f469d6f97d0cf2e11c0147df48eef45335a' => 
    array (
      0 => 'a5270f469d6f97d0cf2e11c0147df48eef45335a',
      1 => 0,
      2 => 'string',
    ),
    '51b6fd3b604ee79208de2a2c7947767242f1cde5' => 
    array (
      0 => '51b6fd3b604ee79208de2a2c7947767242f1cde5',
      1 => 0,
      2 => 'string',
    ),
    '5b0dd18790074cfcacff1d50f9cc39f3f538fa64' => 
    array (
      0 => '5b0dd18790074cfcacff1d50f9cc39f3f538fa64',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '173755621b99989f322_65791246',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5621b999996259_46944173',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5621b999996259_46944173')) {
function content_5621b999996259_46944173 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '173755621b99989f322_65791246';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
$_smarty_tpl->properties['nocache_hash'] = '173755621b99989f322_65791246';
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>
        
            MistCMS
        
    </title>

    
    <link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/css/mist.css" />
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/js/mist.js"><?php echo '</script'; ?>
>

    
    <?php
$_smarty_tpl->properties['nocache_hash'] = '173755621b99989f322_65791246';
?>

<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/js/jquery.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/css/bootstrap-responsive.min.css" />
<link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/js/md5.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/plugin/notify/jquery.ui.custom.js"><?php echo '</script'; ?>
>
<link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/plugin/notify/jquery.gritter.css" rel="stylesheet" />
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/plugin/notify/jquery.gritter.min.js"><?php echo '</script'; ?>
>

<link rel="stylesheet" href="<?php echo @constant('URL_PUBLIC_PATH');?>
/css/modules/admin/member/login.css" />
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/js/modules/admin/member/login.js"><?php echo '</script'; ?>
>


</head>
<body>



<?php
$_smarty_tpl->properties['nocache_hash'] = '173755621b99989f322_65791246';
?>

<span class="mist_assigned_box" id="message_box_login"><?php echo $_smarty_tpl->tpl_vars['login_message']->value;?>
</span>

<div id="loginbox">
    <form id="loginform" class="form-vertical" method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['U'][0][0]->U(array('url'=>'admin/member/public/login','mode'=>'1'),$_smarty_tpl);?>
">
        <div class="control-group normal_text">
            <h3>
                <img src="<?php echo @constant('URL_PUBLIC_PATH');?>
/matadmin/img/logo.png" alt="Logo" />
            </h3>
        </div>

        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"></i></span>
                    <input type="text" id="username" placeholder="用户名" />
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                    <input type="password" id="password" placeholder="密码" />
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <!--<div class="main_input_box">-->
                    <img id="verifyimg" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['U'][0][0]->U(array('url'=>'admin/member/public/verify','mode'=>'1'),$_smarty_tpl);?>
" alt="点击切换" />
                    <input type="text" name="verify" id="verify" placeholder="验证码" />
                <!--</div>-->
            </div>
        </div>

        <div class="form-actions">
            <span class="pull-left">
                <a href="#" class="flip-link btn btn-info" id="to-recover">忘记密码?</a>
            </span>
            <span class="pull-right">
                <a type="button" id="submit" href="javascript:void(0);" class="btn btn-success" /> 登录</a>
            </span>
        </div>

    </form>
    <form id="recoverform" action="#" class="form-vertical">
        <p class="normal_text">请输入正确的用户名密码.</p>

        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
            </div>
        </div>

        <div class="form-actions">
            <span class="pull-left">
                <a href="#" class="flip-link btn btn-success" id="to-login">&laquo; 返回登录</a>
            </span>
            <span class="pull-right">
                <a class="btn btn-info"/>发送邮件</a>
            </span>
        </div>
    </form>
</div>




</body>
</html><?php }
}
?>