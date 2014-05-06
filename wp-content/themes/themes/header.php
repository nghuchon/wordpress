<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=9" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="" content="Djoch Software" property="og:title"/>
<meta name="" content="website" property="og:type"/>
<meta name="" content="technology" property="website:tag"/>
<meta name="" content="cloud computing" property="website:tag"/>
<meta name="" content="b2b" property="website:tag"/>
<meta name="" content="science" property="website:tag"/>
<meta name="" content="http://www.djoch.com" property="og:url"/>
<meta name="" content="Djoch Software" property="og:site_name"/>
<meta name="" content="Djoch Software specializes in creating enhanced client experience through web technologies. We provide a full suite solution from design, development, maintenance and hosting." property="og:description"/>
<meta name="" content="1392144595" property="og:updated_time"/>

<title><?php if(is_home()) { echo bloginfo("name"); echo " | "; echo bloginfo("description"); } else { echo wp_title(" | ", false, right); echo bloginfo("name"); } ?></title>

<?php
	wp_head();
?>

<link href="<?php bloginfo("template_directory");?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php bloginfo("template_directory");?>/js/bootstrap.min.js"></script>
<link href="<?php bloginfo("template_directory");?>/css/style.css" rel="stylesheet" type="text/css"/>

<style type="text/css">
    html{
        margin-top: 0px !important;
    }
</style>

<script>
    $(document).ready(function(){
          $("img#img1").hover(function(){
            $("img#img1").attr('src','<?php bloginfo("template_directory");?>/images/icon1_hover.png');
            },function(){
            $("img#img1").attr("src","<?php bloginfo("template_directory");?>/images/icon1.png");
          });
          $("img#img2").hover(function(){
            $("img#img2").attr('src','<?php bloginfo("template_directory");?>/images/icon2_hover.png');
            },function(){
            $("img#img2").attr("src","<?php bloginfo("template_directory");?>/images/icon2.png");
          });
          $("img#img3").hover(function(){
            $("img#img3").attr('src','<?php bloginfo("template_directory");?>/images/icon3_hover.png');
            },function(){
            $("img#img3").attr("src","<?php bloginfo("template_directory");?>/images/icon3.png");
          });
          $("img#img4").hover(function(){
            $("img#img4").attr('src','<?php bloginfo("template_directory");?>/images/icon4_hover.png');
            },function(){
            $("img#img4").attr("src","<?php bloginfo("template_directory");?>/images/icon4.png");
          });
        });
</script>
</head>
<body>
    <div id="wrapper">
        <div id="head">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div id="logo">
                            <?php dynamic_sidebar("Header");?>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-sx-8">
                        <div class="navbar navbar-default" role="navigation">
                          
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                            </div>
                            <div class="collapse navbar-collapse">
                            <?php wp_nav_menu( array('menu' => 'header','menu_class'=>'nav navbar-nav')); ?>
                            </div><!--/.nav-collapse -->
                          </div>
                    </div>
                </div>
            </div>
        </div>