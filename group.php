<?php 
    session_start();
    
    ?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Building Bridges @ UofA - Home</title>
<link rel="shortcut icon" href="Assets/favicon.ico" />
<meta name="keywords" content="building bridges,b squared,b^2,uofa,u of a,university,of,alberta" />
<meta name="description" content="B squared is a service provided by the University of Alberta Bridge Builder team to connect new/isolated students with each other." />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link href="css/metro-bootstrap.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	background-color: #3CB6CE;
    color: #FFFFFF;
}
</style>

	<link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/prettify/prettify.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>
    <script src="js/prettify/prettify.js"></script>
    <script src="js/holder/holder.js"></script>
    <script src="js/page_scripts/HERE_utilities.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>
    <script src="js/github.info.js"></script>
    <script src="js/herescript.js"></script>
    <link rel="stylesheet" type="text/css" href="http://js.api.here.com/v3/3.0/mapsjs-ui.css" />
    <script type="text/javascript" charset="UTF-8"src="http://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
    <script type="text/javascript" charset="UTF-8" src="http://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
    <script type="text/javascript" charset="UTF-8"src="http://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
    <script type="text/javascript"  charset="UTF-8"src="http://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>

    <!-- Load script specific for index page-->
    <script src="js/page_scripts/index/index_script.js"></script>
    
</head>
	<body class="metro">
        <div class="grid">
            <div id="row0" class="row" >
                <div class="span4 offset_special">
                        <a href="index.php"><img src="Assets/logo.png" alt="U of A B² - Connecting you with a _?"></a>
                </div>
            </div>
            <div id="row1" class="row" >
                <div class="span_navbar_special">
                </div>
                <div class="span11 offset_special">
                    <header class="bg-dark" data-load="topbar.php"></header>
                </div>

                <div class="span11 offset_special" id="content" style="width: 100%; height: auto; background: #C7D28A" />
                    <div class="grid fluid show-grid">
                        <div id="featured_row1" class="row" >
                            <div class="spanspecial"> 
                                </div>
                            <div id ="content_column" class="span4">
                                
                                <div class="tile triple double-vertical">
                                    <div class="carousel" id="carousel1">
                                            <div class="slide">
                                                <img src="Assets/1.png" class="cover1" />
                                            </div>
                                
                                            <div class="slide">
                                                <img src="Assets/2.png" class="cover1" />
                                            </div>
                                
                                            <div class="slide">
                                                <img src="Assets/3.png" class="cover1"/>
                                            </div>
                                
                                            <a class="controls left"><i class="icon-arrow-left-3"></i></a>
                                            <a class="controls right"><i class="icon-arrow-right-3"></i></a>
                                    </div>
                                    <div class="brand bg-black">
                                        <div class="label fg-white place-right">Featured</div>
                                
                                
                                    </div>
                                        <script>
                                            $(function () {
                                                $("#carousel1").carousel({
                                                    height: 250
                                                });
                                            })
                                        </script>
                                </div>

                                <div class="tile triple double-vertical">
                                   <div class="carousel" id="carousel2">
                                           <div class="slide">
                                               <img src="Assets/1.png" class="cover1" />
                                           </div>
                                
                                           <div class="slide">
                                               <img src="Assets/2.png" class="cover1" />
                                           </div>
                                
                                           <div class="slide">
                                               <img src="Assets/3.png" class="cover1"/>
                                           </div>
                                
                                           <a class="controls left"><i class="icon-arrow-left-3"></i></a>
                                           <a class="controls right"><i class="icon-arrow-right-3"></i></a>
                                   </div>
                                   <div class="brand bg-black">
                                       <div class="label fg-white place-right">Recent</div>
                                   </div>
                                   <script>
                                       $(function (){
                                               $("#carousel2").carousel({
                                                   height: 250
                                               });
                                           })
                                       </script>
                                </div>
                            </div>

                            
                            <div id="livefeed_column" class="span4 offset_livefeed_column">

                                <div class="tile triple">
                                    <h2><a href="?id=1_">"Event #1"</a></h2>
                                </div>

                                <div class="tile triple">
                                    <h2><a href="?id=1_">"Event #2"</a></h2>
                                </div>

                                <div class="tile triple">
                                    <h2><a href="?id=1_">"Event #3"</a></h2>
                                </div>

                                <div class="tile triple">
                                    <h2><a href="?id=1_">"Event #4"</a></h2>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
            <div class="span11 offset_special tertiary-text bg-dark fg-white" style="padding: 20px">
                Developed using <a href="http://metroui.org.ua/" class="fg-yellow">Metro UI CSS Template</a> and <a href="http://developer.here.com/api-explorer" class="fg-yellow">Nokia Here Maps</a> by Tech Branch of Bsquared.
                <br><br> <a href="mailto:UABsquared@gmail.com" class="fg-yellow">Email </a> Us
                <br><br> Visit Us On <a href="https://github.com/orgs/BsquaredatUofA/" class="fg-yellow">GitHub</a>
                </div>
                </div>
                </div>
                </div>
                </div>

        <script  type="text/javascript" charset="UTF-8" >
            $(function () {
                $("#login").on('click', function () {
                    $.Dialog({
                        shadow: true,
                        overlay: false,
                        draggable: true,
                        icon: '<img src="Assets/default_user.png">',
                        title: 'Draggable window',
                        width: 'auto',
                        padding: 10,
                        content: 'This Window is draggable by caption.',
                        onShow: function () {
                            var content = '<form id="login-form-1" action="account/login.php/" method ="POST">' +
                                    '<p>Login</p>' +
                                    '<div class="input-control text"><input type="text" name="login"><button class="btn-clear"></button></div>' +
                                    '<p>Password</p>' +
                                    '<div class="input-control password"><input type="password" name="password"><button class="btn-reveal"></button></div>' +
                                    '<div class="input-control checkbox"><p>Remember Me <input type="checkbox" name="c1" checked/><span class="check"></span></p></div>' +
                                    '<div class="form-actions">' +
                                    '<button class="button primary">Login to...</button>&nbsp;' +
                                    '<button class="button warning" type="button"><a href="account/registration.php">Register</a></button>&nbsp;' +
                                    '<button class="button" type="button" onclick="$.Dialog.close()">Cancel</button> ' +
                                    '</div>' +
                                    '</form>';

                            $.Dialog.title("User login");
                            $.Dialog.content(content);
                        }

                    });
                });

                
            });
            
      
        </script>

        
    </body>
</html>

 