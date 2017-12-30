<?php
include('haconfig/config.php');
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
<title> Responsive tabs </title>
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



</head>


    <body>
    <div id="sb-site">



    <div id="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div id="page-wrapper">
        <div id="page-header" class="bg-gradient-9">
    <div id="mobile-navigation">
        <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
        <a href="index.html" class="logo-content-small" title="MonarchUI"></a>
    </div>
    <div id="header-logo" class="logo-bg">
        <a href="index.html" class="logo-content-big" title="MonarchUI">
            HAI ANH <i>SYSTEM</i>
            <span>The perfect solution for user interfaces</span>
        </a>
        <a href="index.html" class="logo-content-small" title="MonarchUI">
            Monarch <i>UI</i>
            <span>The perfect solution for user interfaces</span>
        </a>
        <a id="close-sidebar" href="#" title="Close sidebar">
            <i class="glyph-icon icon-angle-left"></i>
        </a>
    </div>
    <div id="header-nav-left">
        <div class="user-account-btn dropdown">
            <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                <img width="28" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Creative-Tail-People-police-women.svg/1024px-Creative-Tail-People-police-women.svg.png" alt="Profile image">
                <span><?php echo username;?></span>
               
            </a>
        </div>
    </div><!-- #header-nav-left -->

    <div id="header-nav-right">
        <a class="header-btn" id="logout-btn" href="<?php echo url; ?>/auth.php?logout" title="Lockscreen page example">
            <i class="glyph-icon icon-linecons-lock"></i>
        </a>

    </div><!-- #header-nav-right -->

</div>
        <div id="page-sidebar">
    <div class="scroll-sidebar">
        

    <ul id="sidebar-menu">
    <li class="header"><span>Today: <?php echo hadate;?> </span></li>
    <li>
        <a href="/" title="Admin Dashboard">
            <i class="glyph-icon icon-linecons-tv"></i>
            <span>Thống Kê</span>
        </a>
    </li>
    <li class="divider"></li>
    <li class="no-menu">
        <a href="/" title="Frontend template">
            <i class="glyph-icon icon-linecons-beaker"></i>
            <span>Quản Trị</span>
            <span class="bs-label label-danger">
                ADMIN
            </span>
        </a>
    </li>
    <li class="header"><span>Quản Lý</span></li>
    <li>
        <a href="<?php echo url;?>/?home=order-chitiet" title="Đơn Hàng">
            <i class="glyph-icon icon-linecons-diamond"></i>
            <span>Đơn Hàng</span>
        </a>
        <div class="sidebar-submenu" style="display: block;">

            <ul>
                <li><a href="<?php echo url;?>/?home=order" title="Buttons"><span>Tổng Quan</span></a></li>
                <li><a href="<?php echo url;?>/?home=order-chitiet" title="Buttons"><span>Xưởng</span></a></li>
                <li><a href="<?php echo url;?>/?home=order-creat" title="Labels &amp; Badges"><span>Tạo Đơn</span></a></li>

            </ul>

        </div>

    </li>
    <li>
        <a href="#" title="Kho Mẫu">
            <i class="glyph-icon icon-linecons-lightbulb"></i>
            <span>Kho Mẫu</span>
        </a>

    </li>
    <li>
        <a href="#" title="Widgets">
            <i class="glyph-icon icon-linecons-wallet"></i>
            <span>Khách Hàng</span>
        </a>

    </li>

    <li>
        <a href="#" title="Advanced tables">
            <i class="glyph-icon icon-linecons-megaphone"></i>
            <span>THÔNG BÁO</span>
        </a>

    </li>
    <li>
        <a href="#" title="Charts">
            <i class="glyph-icon icon-linecons-paper-plane"></i>
            <span>HỖ TRỢ</span>
        </a>

    </li>
    <li class="header"><span>Nhân Sự</span></li>
    <li>
        <a href="#" title="Pages">
            <i class="glyph-icon icon-linecons-fire"></i>
            <span>SALE</span>
          
        </a>

    </li>
    <li>
        <a href="#" title="Other Pages">
            <i class="glyph-icon icon-linecons-cup"></i>
            <span>KINH DOANH</span>
        </a>

    </li>
    <li>
        <a href="#" title="Mailbox">
            <i class="glyph-icon icon-linecons-mail"></i>
            <span>XƯỞNG</span>
        </a>

    </li>
    <li>
        <a href="#" title="Snippets">
            <i class="glyph-icon icon-linecons-cd"></i>
            <span>KẾ TOÁN</span>
        </a>

    </li>
    </ul><!-- #sidebar-menu -->


    </div>
</div>
        <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    

<!-- jQueryUI Tabs -->

<!--<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/tabs-ui/tabs.css">-->
<script type="text/javascript" src="<?php echo style; ?>/widgets/tabs-ui/tabs.js"></script>
<script type="text/javascript">
    /* jQuery UI Tabs */

    $(function() { "use strict";
        $(".tabs").tabs();
    });

    $(function() { "use strict";
        $(".tabs-hover").tabs({
            event: "mouseover"
        });
    });
</script>

<!-- Boostrap Tabs -->

<script type="text/javascript" src="<?php echo style; ?>/widgets/tabs/tabs.js"></script>

<!-- Tabdrop Responsive -->

<script type="text/javascript" src="<?php echo style; ?>/widgets/tabs/tabs-responsive.js"></script>
<script type="text/javascript">
    /* Responsive tabs */
    $(function() { "use strict";
        $('.nav-responsive').tabdrop();
    });
</script>

<div id="page-title">
    <div id="theme-options" class="admin-options">
    <a href="javascript:void(0);" class="btn btn-primary theme-switcher tooltip-button" data-placement="left" title="Color schemes and layout options">
        <i class="glyph-icon icon-linecons-cog icon-spin"></i>
    </a>
    <div id="theme-switcher-wrapper">
        <div class="scroll-switcher">
            <h5 class="header">Layout options</h5>
            <ul class="reset-ul">
                <li>
                    <label for="boxed-layout">Boxed layout</label>
                    <input type="checkbox" data-toggletarget="boxed-layout" id="boxed-layout" class="input-switch-alt">
                </li>
                <li>
                    <label for="fixed-header">Fixed header</label>
                    <input type="checkbox" data-toggletarget="fixed-header" id="fixed-header" class="input-switch-alt">
                </li>
                <li>
                    <label for="fixed-sidebar">Fixed sidebar</label>
                    <input type="checkbox" data-toggletarget="fixed-sidebar" id="fixed-sidebar" class="input-switch-alt">
                </li>
                <li>
                    <label for="closed-sidebar">Closed sidebar</label>
                    <input type="checkbox" data-toggletarget="closed-sidebar" id="closed-sidebar" class="input-switch-alt">
                </li>
            </ul>
            <div class="boxed-bg-wrapper hide">
                <h5 class="header">
                    Boxed Page Background
                    <a class="set-background-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
                </h5>
                <div class="theme-color-wrapper clearfix">
                    <h5>Patterns</h5>
                    <a class="tooltip-button set-background-style pattern-bg-3" data-header-bg="pattern-bg-3" title="Pattern 3" href="javascript:void(0);">Pattern 3</a>
                    <a class="tooltip-button set-background-style pattern-bg-4" data-header-bg="pattern-bg-4" title="Pattern 4" href="javascript:void(0);">Pattern 4</a>
                    <a class="tooltip-button set-background-style pattern-bg-5" data-header-bg="pattern-bg-5" title="Pattern 5" href="javascript:void(0);">Pattern 5</a>
                    <a class="tooltip-button set-background-style pattern-bg-6" data-header-bg="pattern-bg-6" title="Pattern 6" href="javascript:void(0);">Pattern 6</a>
                    <a class="tooltip-button set-background-style pattern-bg-7" data-header-bg="pattern-bg-7" title="Pattern 7" href="javascript:void(0);">Pattern 7</a>
                    <a class="tooltip-button set-background-style pattern-bg-8" data-header-bg="pattern-bg-8" title="Pattern 8" href="javascript:void(0);">Pattern 8</a>
                    <a class="tooltip-button set-background-style pattern-bg-9" data-header-bg="pattern-bg-9" title="Pattern 9" href="javascript:void(0);">Pattern 9</a>
                    <a class="tooltip-button set-background-style pattern-bg-10" data-header-bg="pattern-bg-10" title="Pattern 10" href="javascript:void(0);">Pattern 10</a>

                    <div class="clear"></div>

                    <h5 class="mrg15T">Solids &amp;Images</h5>
                    <a class="tooltip-button set-background-style bg-black" data-header-bg="bg-black" title="Black" href="javascript:void(0);">Black</a>
                    <a class="tooltip-button set-background-style bg-gray mrg10R" data-header-bg="bg-gray" title="Gray" href="javascript:void(0);">Gray</a>

                    <a class="tooltip-button set-background-style full-bg-1" data-header-bg="full-bg-1 fixed-bg" title="Image 1" href="javascript:void(0);">Image 1</a>
                    <a class="tooltip-button set-background-style full-bg-2" data-header-bg="full-bg-2 fixed-bg" title="Image 2" href="javascript:void(0);">Image 2</a>
                    <a class="tooltip-button set-background-style full-bg-3" data-header-bg="full-bg-3 fixed-bg" title="Image 3" href="javascript:void(0);">Image 3</a>
                    <a class="tooltip-button set-background-style full-bg-4" data-header-bg="full-bg-4 fixed-bg" title="Image 4" href="javascript:void(0);">Image 4</a>
                    <a class="tooltip-button set-background-style full-bg-5" data-header-bg="full-bg-5 fixed-bg" title="Image 5" href="javascript:void(0);">Image 5</a>
                    <a class="tooltip-button set-background-style full-bg-6" data-header-bg="full-bg-6 fixed-bg" title="Image 6" href="javascript:void(0);">Image 6</a>

                </div>
            </div>
            <h5 class="header">
                Header Style
                <a class="set-adminheader-style" data-header-bg="bg-gradient-9" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-adminheader-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                <a class="tooltip-button set-adminheader-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                <a class="tooltip-button set-adminheader-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                <a class="tooltip-button set-adminheader-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                <a class="tooltip-button set-adminheader-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                <a class="tooltip-button set-adminheader-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                <a class="tooltip-button set-adminheader-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-adminheader-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
            </div>
            <h5 class="header">
                Sidebar Style
                <a class="set-sidebar-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-sidebar-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                <a class="tooltip-button set-sidebar-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                <a class="tooltip-button set-sidebar-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                <a class="tooltip-button set-sidebar-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                <a class="tooltip-button set-sidebar-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                <a class="tooltip-button set-sidebar-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                <a class="tooltip-button set-sidebar-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-sidebar-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
            </div>
        </div>
    </div>
</div>
</div>
<script src="<?php echo style;?>/js/chart/chart.js/dist/Chart.bundle.js"></script>
<script src="<?php echo style;?>/js/chart/chart.js/samples/utils.js"></script>
<!-- Bootstrap Modal -->

<!--<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/modal/modal.css">-->
<!--<script type="text/javascript" src="<?php echo style; ?>/widgets/modal/modal.js"></script>-->

<!-- JS Interactions -->

<script type="text/javascript" src="<?php echo style; ?>/widgets/interactions-ui/resizable.js"></script>
<script type="text/javascript" src="<?php echo style; ?>/widgets/interactions-ui/draggable.js"></script>
<script type="text/javascript" src="<?php echo style; ?>/widgets/interactions-ui/sortable.js"></script>
<script type="text/javascript" src="<?php echo style; ?>/widgets/interactions-ui/selectable.js"></script>

<!-- jQueryUI Dialog -->

<!--<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/dialog/dialog.css">-->
<script type="text/javascript" src="<?php echo style; ?>/widgets/dialog/dialog.js"></script>
<script type="text/javascript" src="<?php echo style; ?>/widgets/dialog/dialog-demo.js"></script>