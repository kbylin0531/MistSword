<?php /* Smarty version 3.1.24, created on 2015-10-18 11:14:41
         compiled from "F:/Web/Webroot/MistCMS/Application/Admin/Member/View/Public/login.html" */ ?>
<?php
/*%%SmartyHeaderCode:1970656230ea1a023c3_25848075%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b9d2ff8ae49231089d9f3189b0d6ebc222c485e' => 
    array (
      0 => 'F:/Web/Webroot/MistCMS/Application/Admin/Member/View/Public/login.html',
      1 => 1445136882,
      2 => 'file',
    ),
    '9b2d62f252ce862644469bdc805dc5962aeeda3c' => 
    array (
      0 => 'F:/Web/Webroot/MistCMS/Application/Admin/Common/View/base.html',
      1 => 1445138075,
      2 => 'file',
    ),
    '69cf96af853658016a141a53d2e5d7af2f621262' => 
    array (
      0 => '69cf96af853658016a141a53d2e5d7af2f621262',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1970656230ea1a023c3_25848075',
  'variables' => 
  array (
    'page_title' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56230ea1aec327_56298468',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56230ea1aec327_56298468')) {
function content_56230ea1aec327_56298468 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1970656230ea1a023c3_25848075';
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
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- The styles -->
    <link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/css/bootstrap-cerulean.min.css" rel="stylesheet" />
    <link href="<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/css/charisma-app.css" rel="stylesheet">

    <link href='<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery and Bootstrap JavaScript File -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- library for cookie management -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/js/jquery.cookie.js"><?php echo '</script'; ?>
>
    <!-- calender plugin -->
    <?php echo '<script'; ?>
 src='<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/bower_components/moment/min/moment.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/bower_components/fullcalendar/dist/fullcalendar.min.js'><?php echo '</script'; ?>
>
    <!-- data table plugin -->
    <?php echo '<script'; ?>
 src='<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/js/jquery.dataTables.min.js'><?php echo '</script'; ?>
>
    <!-- select or dropdown enhancer -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/bower_components/chosen/chosen.jquery.min.js"><?php echo '</script'; ?>
>
    <!-- plugin for gallery image view -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/bower_components/colorbox/jquery.colorbox-min.js"><?php echo '</script'; ?>
>
    <!-- notification plugin -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/js/jquery.noty.js"><?php echo '</script'; ?>
>
    <!-- library for making tables responsive -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/bower_components/responsive-tables/responsive-tables.js"><?php echo '</script'; ?>
>
    <!-- tour plugin -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"><?php echo '</script'; ?>
>
    <!-- star rating plugin -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/js/jquery.raty.min.js"><?php echo '</script'; ?>
>
    <!-- for iOS style toggle switch -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/js/jquery.iphone.toggle.js"><?php echo '</script'; ?>
>
    <!-- autogrowing textarea plugin -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/js/jquery.autogrow-textarea.js"><?php echo '</script'; ?>
>
    <!-- multiple file upload plugin -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/js/jquery.uploadify-3.1.min.js"><?php echo '</script'; ?>
>
    <!-- history.js for cross-browser state change on ajax -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/js/jquery.history.js"><?php echo '</script'; ?>
>


    <!-- application script for Charisma demo -->
    <?php echo '<script'; ?>
 src="<?php echo @constant('URL_PUBLIC_PATH');?>
/charisma/js/charisma.js"><?php echo '</script'; ?>
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

<?php
$_smarty_tpl->properties['nocache_hash'] = '1970656230ea1a023c3_25848075';
?>

<div class="ch-container">
    <div class="row">

        <div class="row">
            <div class="col-md-12 center login-header">
                <h2>Welcome to Charisma</h2>
            </div>
            <!--/span-->
        </div><!--/row-->

        <div class="row">
            <div class="well col-md-5 center login-box">
                <div class="alert alert-info">
                    Please login with your Username and Password.
                </div>
                <form class="form-horizontal" action="index.html" method="post">
                    <fieldset>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="clearfix"></div><br>

                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-prepend">
                            <label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
                        </div>
                        <div class="clearfix"></div>

                        <p class="center col-md-5">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </p>
                    </fieldset>
                </form>
            </div>
            <!--/span-->
        </div><!--/row-->
    </div><!--/fluid-row-->

</div><!--/.fluid-container-->



</body>
</html>
<?php }
}
?>