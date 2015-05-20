<?php
    /* Template Name: Home */
?>
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
            
            <!--header banner part -->
          		<div class="header_banner_part">
                     <div class="banner">                     	
                        <ul class="bxslider">
                              <li style="background:url(<?php echo get_template_directory_uri();?>/images/banner1.jpg) no-repeat center top; ">
                              	<div class="banner_text">
                                    <div class="text3a">
                                        <h1>Construction of your dream</h1>
                                    </div>
                                </div>
                              	<img src="<?php echo get_template_directory_uri();?>/images/banner1.jpg" title="Funky roots" alt="" />
                              </li>
                              <li style="background:url(<?php echo get_template_directory_uri();?>/images/banner2.jpg) no-repeat center top;">
                              	<div class="banner_text">
                                    <div class="text3a">
                                        <h1>Construction of your dream2</h1>
                                    </div>
                                </div>
                              	<img src="<?php echo get_template_directory_uri();?>/images/banner2.jpg" title="The long and winding road" alt="" />
                              </li>
                        </ul>
                        <div class="text">&nbsp;</div>
                        <div class="banner_text">
                        <div class="text2">
                            <h2><?php echo get_field('introduction_title');?></h2>
                            <p><?php echo get_field('short_des');?></p>
                            <br style="clear:both">
                            <a href="<?php echo site_url();?>/about-us/">Read more</a>
                        </div>                                                
                        </div>                                                                               	  		    	
                    </div>
                </div>
            <!--header banner part end -->
        </header>
    <!--header paer end --> 
    
    <!--body container2 part -->
		<section id="body_cotainer_part">
      		<div class="top_information_part2">
            	<?php 
                    if ( is_active_sidebar( 'sidebar-4' ) ) :
                            dynamic_sidebar( 'sidebar-4' ); 
                    endif; 
                    $count = 1;
                    query_posts(array('post_type' => 'service', 'posts_per_page' => 3));
                    if(have_posts()):
                        while(have_posts()):
                            the_post();
                            $post_id = get_the_ID();
                            $post = get_post($post_id);
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id( $post_id ), 'single-post-thumbnail');
                            $class = ($count == 3)?" class='b3'":"";
                            echo '<article'.$class.'>';
                            echo '<img src="'.$image[0].'" alt="">';
                            echo '<div class="left_box">';
                            echo '<h4>'.$post->post_title.'</h4>';
                            echo '<p><span>'.get_field('service_title', $post_id, false).'</span></p>';
                            echo '<p>'.the_excerpt().'</p>';
                            echo '<div style="clear:both"></div>';
                        ?>
                            <div class="click"><a href="<?php the_permalink()?>">Read more</a></div>
                        <?php
                            echo '</div>';
                            echo '</article>';
                            $count++;
                        endwhile;
                    endif;
                    wp_reset_query();
                ?>
                <div class="spacer"></div>
      		</div>
		</section>
	<!--body container2 part  end-->
    
    <!--footer part start-->
		<footer>
    		<section class="footer_body">
                <div class="bottom_footer">
                <?php
					$args_footer = array(
						'theme_location'  => 'footer-menu',
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
					wp_nav_menu( $args_footer );
				?>
                            <br style="clear:both">
                    &copy;Copyright. Alin Alin Construction . 2014... All Rights Reserved<br>  <a target="_blank" rel="nofollow" href="http://www.businessprodesigns.com/">Powered by BusinessPro Designs</a><BR>
                </div>
                <?php 
                    if ( is_active_sidebar( 'sidebar-5' ) ) :
                            dynamic_sidebar( 'sidebar-5' ); 
                    endif;
                ?>
                <div class="spacer"></div>
            </section>
    	</footer>
    <!--footer part end-->
    <?php wp_footer();?>
</body>
</html>
	
