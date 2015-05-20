<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 
?>
<script type="text/javascript">
	$(document).ready(function() {
		 $('.wpcf7-form .submit').on('click', function(){
			$(window).scrollTop($('.top_information_part2').offset().top);
		 });
	});
</script>
    <!--body container2 part -->
		<section id="body_cotainer_part_inner">
      		<div class="top_information_part2">
                    <?php
                            if(have_posts()):
                                while(have_posts()):
                                    the_post();
                    ?>
                    <h1><?php the_title();?></h1>
                    <?php the_content(); ?>
                    <div class="spacer"></div>
                    <?php 
                                endwhile;
                            endif;
                    ?>
      		</div>
            </section>
	<!--body container2 part  end-->    
<?php get_footer(); ?>
