<?php /* Smarty version 3.1.24, created on 2015-10-26 20:32:47
         compiled from "F:/Web/Webroot/MistCMS/Application/Admin/Member/View/Public/login.html" */ ?>
<?php
/*%%SmartyHeaderCode:29023562e1d6f0b8f23_52451849%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b9d2ff8ae49231089d9f3189b0d6ebc222c485e' => 
    array (
      0 => 'F:/Web/Webroot/MistCMS/Application/Admin/Member/View/Public/login.html',
      1 => 1445862720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29023562e1d6f0b8f23_52451849',
  'variables' => 
  array (
    'login_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_562e1d6f3324f5_30333410',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562e1d6f3324f5_30333410')) {
function content_562e1d6f3324f5_30333410 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29023562e1d6f0b8f23_52451849';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Metronic | Login Options - Login Form 1</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="index.html">
        <img src="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/admin/layout/img/logo-big.png" alt=""/>
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" id="login_form" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['U'][0][0]->U(array('url'=>'admin/member/public/login'),$_smarty_tpl);?>
" method="post">
        <h3 class="form-title">Sign In</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
			<span> Enter any username and password. </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <input id="username" class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input id="password" class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Verify</label>
            <input id="verify" class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Verify" name="verify"/>
            <img style="padding: 0px;;" class="form-control form-control-solid placeholder-no-fix" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['U'][0][0]->U(array('url'=>'admin/member/public/verify','mode'=>'1'),$_smarty_tpl);?>
" id="verify_img" />
        </div>
        <div class="form-actions" style="padding-top: 10px;">
            <button type="submit" class="btn btn-success uppercase">Login</button>
            <label class="rememberme check">
                <input type="checkbox" name="remember" value="1"/>Remember </label>
            <a href="javascript:void(0);" id="forget-password" class="forget-password">Forgot Password?</a>
        </div>
        <div class="create-account">
            <p>
                <a href="javascript:void(0);" id="register-btn" class="uppercase">Create an account</a>
            </p>
        </div>
    </form>
    <!-- END LOGIN FORM -->


    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['U'][0][0]->U(array('url'=>'admin/member/public/forget'),$_smarty_tpl);?>
" method="post">
        <h3>Forget Password ?</h3>
        <p>
            Enter your e-mail address below to reset your password.
        </p>
        <div class="form-group">
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
        </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn btn-default">Back</button>
            <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->




    <!-- BEGIN REGISTRATION FORM -->
    <form class="register-form" id="register-form" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['U'][0][0]->U(array('url'=>'admin/member/public/register'),$_smarty_tpl);?>
" method="post">
        <h3>Sign Up</h3>
        <p class="hint">
            Enter your personal details below:
        </p>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Username" name="username"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Nickname</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Nickname" name="nickname"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control placeholder-no-fix" type="password" placeholder="Password " id="reg_password"  name="password"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password again</label>
            <input class="form-control placeholder-no-fix" type="password" placeholder="Password again" name="rpassword"/>
        </div>
        <p class="hint">
            Enter your account details below:
        </p>
        <div class="form-group">
            <label for="sex"  class="control-label visible-ie8 visible-ie9">Sex</label>
            <select name="sex" id="sex" class="form-control">
                <option value="1">Man</option>
                <option value="0">Women</option>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Mobile</label>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Mobile" name="mobile"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">QQ</label>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="QQ" name="qq"/>
        </div>
        <div class="form-group margin-top-20 margin-bottom-20">
            <label class="check">
                <input type="checkbox" name="tnc"/> I agree to the
                <a href="javascript:void(0);">Terms of Service </a>
                &
                <a href="javascript:void(0);">Privacy Policy </a>
            </label>
            <div id="register_tnc_error">
            </div>
        </div>
        <div class="form-actions">
            <button type="button" id="register-back-btn" class="btn btn-default">Back</button>
            <button type="button" id="register-submit-btn" class="btn btn-success uppercase pull-right">Submit</button>
        </div>
    </form>
    <!-- END REGISTRATION FORM -->


</div>
<div class="copyright">
    2014 © Metronic. Admin Dashboard Template.
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/global/plugins/respond.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/global/plugins/excanvas.min.js"><?php echo '</script'; ?>
>
<![endif]-->
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/global/plugins/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/global/scripts/metronic.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/admin/layout/scripts/layout.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/admin/layout/scripts/demo.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/assets/admin/pages/scripts/login.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- END PAGE LEVEL SCRIPTS -->
<?php echo '<script'; ?>
>
    jQuery(document).ready(function() {
        var dangershower =  $('.alert-danger', $("#login_form"));//the parameter two is context
        function showErrorMessage(msg){
            dangershower.html(msg);
            dangershower.show();
        }
        var login_message = "<?php echo $_smarty_tpl->tpl_vars['login_message']->value;?>
";
        if($.trim(login_message)){
            showErrorMessage(login_message);
        }

        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
    });
<?php echo '</script'; ?>
>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }
}
?>