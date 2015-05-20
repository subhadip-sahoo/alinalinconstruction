<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Alin Alin construction</title>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
<script src="<?php echo get_template_directory_uri();?>/js/modernizr.custom.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-1.10.2.min.js"></script>
<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri();?>/css/tablet.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri();?>/css/iphone.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/jquery.bxslider.css" type="text/css" />
<script src="<?php echo get_template_directory_uri();?>/js/jquery.bxslider.js"></script>
<script>
$(document).ready(function() {
    $('.bxslider').bxSlider({
	  mode: 'fade',
	  captions: false,
	  auto:true
	});
});
</script>
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});			
		});
	</script>
	<?php wp_head(); ?>
</head>

<body>
	<!--header paer start -->
    	<header>
        	<!--top container part -->
            	<section class="top_part">
                	<article>
                    	<!--logo part -->
                        	<figure>
                       	    	<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.jpg" alt="Australian Accountants" title="Australian Accountants"> </a>
                            </figure>
                        <!--logo part end -->
                        <!--top right part -->
                        	<div class="top_right_part">
                                <nav>
                                	<?php
										$args = array(
											'theme_location'  => '',
											'menu'            => '',
											'container'       => '',
											'container_class' => '',
											'container_id'    => '',
											'menu_class'      => 'menu',
											'menu_id'         => '',
											'echo'            => true,
											'fallback_cb'     => 'wp_page_menu',
											'before'          => '',
											'after'           => '',
											'link_before'     => '',
											'link_after'      => '',
											'items_wrap'      => '<ul>%3$s</ul>',
											'depth'           => 0,
											'walker'          => ''
										);
										wp_nav_menu( $args );
									?>
                                    <a href="#" id="pull">Menu</a>
                                </nav>
                                <div class="spacer"></div>
                            </div>
                            <div class="spacer"></div>
                        <!--top right part end -->
                    </article>
                </section>
                <div class="spacer"></div>
            <!--top container part end -->
        </header>
    <!--header paer end --> 