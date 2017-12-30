<?php
error_reporting(0);
require('haconfig/config.php');
include('haclass/func.php');
$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
$site_key    = '6LfxSD4UAAAAANwSCdH3WMH_PbU5hhzzrYZfsnCS';
$secret_key  = '6LfxSD4UAAAAAFba9X1hqPsM3pnGMNqaYU6jzuNa';
if(isset($_POST['submit']))
{
    $site_key_post    = $_POST['g-recaptcha-response'];
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $remoteip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $remoteip = $_SERVER['REMOTE_ADDR'];
    }
    $api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
    $response = file_get_contents($api_url);
    $response = json_decode($response);
    if(!isset($response->success))
    {
        header('Location: '.url.'/?error=3');
    }
    if($response->success == true)
    {
        if($_POST['user'] != null && $_POST['pass'] != null){
            $u = addslashes($_POST['user']);
            $p = md5(addslashes($_POST['pass']));
            $auth_access = $mysql->where('username', $u)->where('password', $p)->get('employer');
            #var_dump($auth_access);
            if($mysql->num_rows() > 0){
              session_start();
              $_SESSION['id'] = $auth_access[0]['id'];
              $_SESSION['name'] = $auth_access[0]['employer'];
              $_SESSION['permision'] = $auth_access[0]['permision'];
              $_SESSION['code'] = $auth_access[0]['code'];
              $_SESSION['leader'] = $auth_access[0]['leader'];
              $_SESSION['pro'] = $auth_access[0]['pro'];
              header('Location: '.url);
            } else {
              header('Location: '.url.'/?error=1');
            }
      }

    }else{
        header('Location: '.url.'/?error=2');
    }
}

if(isset($_GET['logout'])){
  session_start();
  $_SESSION['id'] = null;
  $_SESSION['name'] = null;
  $_SESSION['permision'] = null;
  $_SESSION['code'] = null;
  $_SESSION['leader'] = null;
  $_SESSION['pro'] = null;
  session_destroy();
  header('Location: '.url);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>
    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> Login page 2 </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo style; ?>/images/icons/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo style; ?>/images/icons/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo style; ?>/images/icons/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo style; ?>/images/icons/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?php echo style; ?>/images/icons/favicon.png">



    <link rel="stylesheet" type="text/css" href="<?php echo style; ?>/bootstrap/css/bootstrap.css">


<!-- HELPERS -->

<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/helpers/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/helpers/backgrounds.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/helpers/boilerplate.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/helpers/border-radius.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/helpers/grid.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/helpers/page-transitions.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/helpers/spacing.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/helpers/typography.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/helpers/colors.css">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/badges.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/dashboard-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/forms.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/images.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/info-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/invoice.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/loading-indicators.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/menus.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/panel-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/response-messages.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/responsive-tables.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/ribbon.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/social-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/tables.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/tile-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/elements/timeline.css">



<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/icons/spinnericon/spinnericon.css">


<!-- WIDGETS -->

<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/accordion-ui/accordion.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/calendar/calendar.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/carousel/carousel.css">

<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/charts/justgage/justgage.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/charts/morris/morris.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/charts/piegage/piegage.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/charts/xcharts/xcharts.css">

<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/chosen/chosen.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/colorpicker/colorpicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/datatable/datatable.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/datepicker/datepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/datepicker-ui/datepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/dialog/dialog.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/dropdown/dropdown.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/dropzone/dropzone.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/file-input/fileinput.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/input-switch/inputswitch.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/input-switch/inputswitch-alt.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/ionrangeslider/ionrangeslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/jcrop/jcrop.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/jgrowl-notifications/jgrowl.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/loading-bar/loadingbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/maps/vector-maps/vectormaps.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/markdown/markdown.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/modal/modal.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/multi-select/multiselect.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/multi-upload/fileupload.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/nestable/nestable.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/noty-notifications/noty.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/popover/popover.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/pretty-photo/prettyphoto.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/progressbar/progressbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/range-slider/rangeslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/slidebars/slidebars.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/slider-ui/slider.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/tabs-ui/tabs.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/theme-switcher/themeswitcher.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/timepicker/timepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/tocify/tocify.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/tooltip/tooltip.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/touchspin/touchspin.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/uniform/uniform.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/wizard/wizard.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/xeditable/xeditable.css">

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/snippets/chat.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/snippets/files-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/snippets/login-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/snippets/notification-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/snippets/progress-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/snippets/todo.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/snippets/user-profile.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/snippets/mobile-navigation.css">

<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/applications/mailbox.css">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/themes/admin/layout.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/themes/admin/color-schemes/default.css">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/themes/components/border-radius.css">

<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/helpers/admin-responsive.css">

    <!-- JS Core -->

    <script type="text/javascript" src="<?php echo style; ?>/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="<?php echo style; ?>/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="<?php echo style; ?>/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="<?php echo style; ?>/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="<?php echo style; ?>/js-core/jquery-ui-position.js"></script>
    <!--<script type="text/javascript" src="<?php echo style; ?>/js-core/transition.js"></script>-->
    <script type="text/javascript" src="<?php echo style; ?>/js-core/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo style; ?>/js-core/jquery-cookie.js"></script>





    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>


<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<style type="text/css">

    html,body {
        height: 100%;
        background: #fff;
    }

</style>

<div class="center-vertical">
    <div class="center-content row">

        <form action="/" id="login-validation" class="col-md-4 col-sm-5 col-xs-11 col-lg-3 center-margin" method="post">
            <h3 class="text-center pad25B font-gray text-transform-upr font-size-23">HAI ANH SYSTEM | <span class="opacity-80">v1.0</span></h3>
            <div id="login-form" class="content-box bg-default">
               
                <div class="content-box-wrapper pad20A">
                    <img height="100px" width="150px" class="mrg25B center-margin radius-all-100 display-block" src="<?php echo style; ?>/image-resources/gravatar.jpg" alt="">
                    <div class="form-group">
                      <?php 
            if($_GET['error'] == 1){ 
              echo '<font color="red">Sai thông tin!</font> <br />'; 
            } elseif($_GET['error'] == 2) {
              echo '<font color="red">Nhập Re-capcha!</font> <br />'; 
            } 
              ?>  
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-envelope-o"></i>
                            </span>
                            <input type="text" name="user" class="form-control" id="exampleInputEmail1" placeholder="Tên Đăng Nhập">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-unlock-alt"></i>
                            </span>
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Mật Khẩu">
                        </div>
                         
                    </div>
                         
                    <div class="form-group">
                   <div class="g-recaptcha" data-sitekey="6LfxSD4UAAAAANwSCdH3WMH_PbU5hhzzrYZfsnCS" required></div> <br />
                        <button type="submit" name="submit" class="btn btn-block btn-primary">Đăng Nhập</button>
                    </div>
                    <div class="row">
                        <div class="checkbox-primary col-md-6" style="height: 20px;">
                            <label>
                                <input type="checkbox" id="loginCheckbox1" class="custom-checkbox">
                                Ghi Nhớ
                            </label>
                        </div>
                        <div class="text-right col-md-6">
                            <a href="#" class="switch-button" switch-target="#login-forgot" switch-parent="#login-form" title="Recover password">Trời ơi! Quên mất pass rồi???</a>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>



    <!-- WIDGETS -->

<script type="text/javascript" src="<?php echo style; ?>/bootstrap/js/bootstrap.js"></script>

<!-- Bootstrap Dropdown -->

<!-- <script type="text/javascript" src="<?php echo style; ?>/widgets/dropdown/dropdown.js"></script> -->

<!-- Bootstrap Tooltip -->

<!-- <script type="text/javascript" src="<?php echo style; ?>/widgets/tooltip/tooltip.js"></script> -->

<!-- Bootstrap Popover -->

<!-- <script type="text/javascript" src="<?php echo style; ?>/widgets/popover/popover.js"></script> -->

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="<?php echo style; ?>/widgets/progressbar/progressbar.js"></script>

<!-- Bootstrap Buttons -->

<!-- <script type="text/javascript" src="<?php echo style; ?>/widgets/button/button.js"></script> -->

<!-- Bootstrap Collapse -->

<!-- <script type="text/javascript" src="<?php echo style; ?>/widgets/collapse/collapse.js"></script> -->

<!-- Superclick -->

<script type="text/javascript" src="<?php echo style; ?>/widgets/superclick/superclick.js"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="<?php echo style; ?>/widgets/input-switch/inputswitch-alt.js"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="<?php echo style; ?>/widgets/slimscroll/slimscroll.js"></script>

<!-- Slidebars -->

<script type="text/javascript" src="<?php echo style; ?>/widgets/slidebars/slidebars.js"></script>
<script type="text/javascript" src="<?php echo style; ?>/widgets/slidebars/slidebars-demo.js"></script>

<!-- PieGage -->

<script type="text/javascript" src="<?php echo style; ?>/widgets/charts/piegage/piegage.js"></script>
<script type="text/javascript" src="<?php echo style; ?>/widgets/charts/piegage/piegage-demo.js"></script>

<!-- Screenfull -->

<script type="text/javascript" src="<?php echo style; ?>/widgets/screenfull/screenfull.js"></script>

<!-- Content box -->

<script type="text/javascript" src="<?php echo style; ?>/widgets/content-box/contentbox.js"></script>

<!-- Overlay -->

<script type="text/javascript" src="<?php echo style; ?>/widgets/overlay/overlay.js"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="<?php echo style; ?>/js-init/widgets-init.js"></script>

<!-- Theme layout -->

<script type="text/javascript" src="<?php echo style; ?>/themes/admin/layout.js"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="<?php echo style; ?>/widgets/theme-switcher/themeswitcher.js"></script>

</body>
</html>
           
