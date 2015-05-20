<?php
    global $post;
    get_header(); 
?>
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

