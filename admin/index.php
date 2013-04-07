<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
    <title>Erdem ALBAYRAK - CMS</title>
    
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    
    <!-- Bootstrap -->
    <link href="/online_exam/pub_assets/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/online_exam/pub_assets/admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    
    <!-- Bootstrap Extended -->
    <link href="/online_exam/pub_assets/admin/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="/online_exam/pub_assets/admin/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/online_exam/pub_assets/admin/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">
    
    <!-- JQueryUI v1.9.2 -->
    <link rel="stylesheet" href="/online_exam/pub_assets/admin/theme/scripts/jquery-ui-1.9.2.custom/css/smoothness/jquery-ui-1.9.2.custom.min.css" />
    
    <!-- Glyphicons -->
    <link rel="stylesheet" href="/online_exam/pub_assets/admin/theme/css/glyphicons.css" />
    
    <!-- Bootstrap Extended -->
    <link rel="stylesheet" href="/online_exam/pub_assets/admin/bootstrap/extend/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="/online_exam/pub_assets/admin/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
    
    <!-- Uniform -->
    <link rel="stylesheet" media="screen" href="/online_exam/pub_assets/admin/theme/scripts/pixelmatrix-uniform/css/uniform.default.css" />

    <!-- JQuery v1.8.2 -->
    <!-- <script src="/online_exam/pub_assets/admin/theme/scripts/jquery-1.8.2.min.js" ></script> -->
    
    <script src="http://code.jquery.com/jquery-1.8.2.min.js" ></script>
    
    <!-- Modernizr -->
    <script src="/online_exam/pub_assets/admin/theme/scripts/modernizr.custom.76094.js" ></script>
    
    <!-- MiniColors -->
    <link rel="stylesheet" media="screen" />
    
    <!-- Theme -->
    <link rel="stylesheet" href="/online_exam/pub_assets/admin/theme/css/style.min.css"/>
    
    
    <!-- LESS 2 CSS -->
    <script src="/online_exam/pub_assets/admin/theme/scripts/less-1.3.3.min.js" ></script>
    
    <!--[if IE]><script type="text/javascript" src="/online_exam/pub_assets/admin/theme/scripts/excanvas/excanvas.js" tppabs="http://mosaicpro.biz/adminplus/php/theme/scripts/excanvas/excanvas.js"></script><![endif]-->
    <!--[if lt IE 8]><script type="text/javascript" src="/online_exam/pub_assets/admin/theme/scripts/json2.js" tppabs="http://mosaicpro.biz/adminplus/php/theme/scripts/json2.js"></script><![endif]-->
</head>
<body>
    
    <!-- Start CONTAINER FIRST DIV START -->
    <div class="container-fluid fixed">
        
        <div class="navbar main">
            <a href="index.html-lang=en.htm" class="appbrand"><span>Admin+ <span>lovely headline here</span></span></a>
            
            <button type="button" class="btn btn-navbar">
                <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
            </button>
                        
            <ul class="topnav pull-right">
                <li class="visible-desktop">
                    <ul class="notif">
                        <li><a href="" class="glyphicons envelope" data-toggle="tooltip" data-placement="bottom" data-original-title="5 new messages"><i></i> 5</a></li>
                        <li><a href="" class="glyphicons shopping_cart" data-toggle="tooltip" data-placement="bottom" data-original-title="1 new orders"><i></i> 1</a></li>
                        <li><a href="" class="glyphicons log_book" data-toggle="tooltip" data-placement="bottom" data-original-title="3 new activities"><i></i> 3</a></li>
                    </ul>
                </li>
                <li class="dropdown visible-desktop">
                    <a href="" data-toggle="dropdown" class="glyphicons cogwheel"><i></i>Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="">Some option</a></li>
                        <li><a href="">Some other option</a></li>
                        <li><a href="">Other option</a></li>
                    </ul>
                </li>
                
                <li class="hidden-phone">
                    <a href="#themer" data-toggle="collapse" class="glyphicons eyedropper"><i></i><span>Themer</span></a>
                    <div id="themer" class="collapse">
                        <div class="wrapper">
                            <span class="close2">&times; close</span>
                            <h4>Themer <span>color options</span></h4>
                            <ul>
                                <li>Theme: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
                                <li>Primary Color: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
                                <li>
                                    <span class="link" id="themer-custom-reset">reset theme</span>
                                    <span class="pull-right"><label>advanced <input type="checkbox" value="1" id="themer-advanced-toggle" /></label></span>
                                </li>
                            </ul>
                            <div id="themer-getcode" class="hide">
                                <hr class="separator" />
                                <button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i>Get LESS</button>
                                <button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i>Get CSS</button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Burası Profil Detayı İçin
                <li>
                    <ul class="dropdown-menu pull-right" class="glyphicons envelope" data-toggle="tooltip" data-original-title="5 new messages">
                        <li><a href="form_demo.html-lang=en.htm" class="glyphicons cogwheel">Settings<i></i></a></li>
                        <li><a href="form_demo.html-lang=en.htm" class="glyphicons camera">My Photos<i></i></a></li>
                        <li class="highlight profile">
                            <span>
                                <span class="heading">Profile <a href="form_demo.html-lang=en.htm" class="pull-right">edit</a></span>
                                <span class="img"></span>
                                <span class="details">
                                    <a href="form_demo.html-lang=en.htm">Erdem ALBAYRAK</a>
                                    erdm.albayrak@gmail.com
                                </span>
                                <span class="clearfix"></span>
                            </span>
                        </li>
                        <li>
                            <span>
                                <a class="btn btn-default btn-small pull-right" style="padding: 2px 10px; background: #fff;" href="">Sign Out</a>
                            </span>
                        </li>
                    </ul>
                </li>
                -->
                <li class="account">
                    <a href="/admin/admin_user_logout" class="glyphicons logout unlock" data-toggle="tooltip" data-placement="right" data-original-title="Çıkış" title="Çıkış">
                        <i style="width:38px;height:38px;">&nbsp;</i>
                    </a>
                </li>
                    
            </ul>
        </div>
        
        <!-- WRAPPER DIV START -->
        <div id="wrapper">
            





            <!-- LEFT MENU START -->
            <div id="menu" class="hidden-phone">
                <div id="menuInner">
                    <ul>
                        <li class="heading"><span>Navigasyon</span></li>
                        <li class="glyphicons home active"><a href="#"><i></i><span>Dashboard</span></a></li>
                        <li class="glyphicons cogwheels"><a href="#"><i></i><span>UI Elements</span></a></li>
                        <li class="glyphicons charts"><a href="#"><i></i><span>Charts</span></a></li>
                        <li class="hasSubmenu">
                            <a data-toggle="collapse" class="glyphicons show_thumbnails_with_lines" href="#menu_forms"><i></i><span>Forms</span></a>
                            <ul class="collapse" id="menu_forms">
                                <li class=""><a href="#"><span>My Account</span></a></li>
                                <li class=""><a href="#"><span>Form Elements</span></a></li>
                                <li class=""><a href="#"><span>Form Validator</span></a></li>
                                <li class=""><a href="#"><span>File Managers</span></a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a class="glyphicons table" href="#"><i></i><span>Tables</span></a>
                        </li>
                        <li class="glyphicons calendar"><a href="#"><i></i><span>Calendar</span></a></li>
                        <li class="glyphicons user"><a href="#"><i></i><span>Login</span></a></li>
                    </ul>
                    <ul>
                        <li class="heading"><span>Sections</span></li>
                        <li class="hasSubmenu">
                            <a data-toggle="collapse" class="glyphicons shopping_cart" href="#menu_ecommerce"><i></i><span>Online Shop</span></a>
                            <ul class="collapse" id="menu_ecommerce">
                                <li class=""><a href="#"><span>Products</span></a></li>
                                <li class=""><a href="#"><span>Add product</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- LEFT MENU END -->
            
            
            <!-- CONTENT DIV START -->
            <div id="content">
                <ul class="breadcrumb">
                    <li><a href="index.html-lang=en.htm" class="glyphicons home"><i></i> AdminPlus</a></li>
                    <li class="divider"></li>
                    <li>Dashboard</li>
                </ul>
                <div class="separator"></div>

            
            

        </div>
        <!-- WRAPPER DIV END -->
        
    </div>
    <!-- Start CONTAINER FIRST DIV END -->
    
    
    <!-- JQueryUI v1.9.2 -->
    <script src="/online_exam/pub_assets/admin/theme/scripts/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js"></script>
    
    <!-- JQueryUI Touch Punch -->
    <!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
    <script src="/online_exam/pub_assets/admin/theme/scripts/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    
    <!-- MiniColors -->
    <script src="/online_exam/pub_assets/admin/theme/scripts/jquery-miniColors/jquery.miniColors.js"></script>
    
    <!-- Themer -->
    <script>
    var themerPrimaryColor = '#DF6262';
    </script>
    <script src="/online_exam/pub_assets/admin/theme/scripts/jquery.cookie.js"></script>
    <script src="/online_exam/pub_assets/admin/theme/scripts/themer.js" ></script>
    
    
    <!-- <script type="text/javascript" src="https://www.google.com/jsapi"></script> -->

        <!-- Sparkline -->
    <script src="/online_exam/pub_assets/admin/theme/scripts/jquery.sparkline.min.js" type="text/javascript"></script>
        
    <!--  Flot (Charts) JS -->
    <!-- <script src="/online_exam/pub_assets/admin/theme/scripts/flot/jquery.flot.js"          type="text/javascript"></script> -->
    <!-- <script src="/online_exam/pub_assets/admin/theme/scripts/flot/jquery.flot.pie.js"      type="text/javascript"></script> -->
    <!-- <script src="/online_exam/pub_assets/admin/theme/scripts/flot/jquery.flot.tooltip.js"  type="text/javascript"></script> -->
    <!-- <script src="/online_exam/pub_assets/admin/theme/scripts/flot/jquery.flot.selection.js" type="text/javascript"></script> -->
    <!-- <script src="/online_exam/pub_assets/admin/theme/scripts/flot/jquery.flot.resize.js"   type="text/javascript"></script> -->
    <!-- <script src="/online_exam/pub_assets/admin/theme/scripts/flot/jquery.flot.orderBars.js" type="text/javascript"></script> -->
        
    
    <!-- Resize Script -->
    <script src="/online_exam/pub_assets/admin/theme/scripts/jquery.ba-resize.js"></script>
    
    <!-- Uniform -->
    <script src="/online_exam/pub_assets/admin/theme/scripts/pixelmatrix-uniform/jquery.uniform.min.js"></script>
    
    <!-- Bootstrap Script -->
    <script src="/online_exam/pub_assets/admin/bootstrap/js/bootstrap.min.js" ></script>
    
    <!-- Bootstra/online_exam/pub_assets/admin/p Extended -->
    <script src="/online_exam/pub_assets/admin/bootstrap/extend/bootstrap-select/bootstrap-select.js" ></script>
    <script src="/online_exam/pub_assets/admin/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js" ></script>
    <script src="/online_exam/pub_assets/admin/bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" ></script>
    <script src="/online_exam/pub_assets/admin/bootstrap/extend/jasny-bootstrap/js/jasny-bootstrap.min.js" ></script>
    <script src="/online_exam/pub_assets/admin/bootstrap/extend/jasny-bootstrap/js/bootstrap-fileupload.js" ></script>
    
    <script src="/online_exam/pub_assets/admin/bootstrap/extend/bootbox.js"                                          type="text/javascript"></script>
    <script src="/online_exam/pub_assets/admin/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js"   type="text/javascript"></script>
    <script src="/online_exam/pub_assets/admin/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js" type="text/javascript"></script>
    
    <!-- Custom Onload Script -->
    <script src="/online_exam/pub_assets/admin/theme/scripts/load.js"></script>
    

</body>
</html>            