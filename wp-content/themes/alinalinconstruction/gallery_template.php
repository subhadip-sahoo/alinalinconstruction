<?php
/* Template Name: Gallery */
get_header(); 
?>
<style>
.group1 {
    border: 1px solid #cccccc;
    display: inline-block;
    font-weight: bold;
    height: 210px;
    margin: 10px;
    outline: medium none;
    padding: 6px;
    position: relative;
    text-align: center;
    text-decoration: none;
    vertical-align: top;
    width: 210px;
}
.group1 .image {
    display: table-cell;
    height: 180px;
    text-align: center;
    vertical-align: middle;
    width: 210px;
}

.group1 .image img{
    max-height: 180px;
    max-width: 210px;
}

.group1 p { color:#707070; }
</style> 
    <!--body container2 part -->
            <section id="body_cotainer_part_inner">
      		<div class="top_information_part2">
                    <?php
                    if(have_posts()):
                        while(have_posts()):
                            the_post();
                    ?>
                    <h1><?php the_title();?></h1>
                    <div class="spacer"></div>
                    <?php 
                            endwhile;
                        endif;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;	
                    query_posts(array('post_type' => 'alin-gallery', 'paged' => $paged, 'posts_per_page' => 10));
                        if(have_posts()):
                            while(have_posts()):
                                the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src(get_post_thumbnail_id( $post_id ), 'medium');
                    ?>
                    <a class="group1" href="<?php echo the_permalink();?>"><span class="image"><img src="<?php echo $image[0];?>" alt=""></span><p><?php the_title();?></p></a>
					<?php endwhile; endif; ?>
                    <div class="spacer"></div>
                    <div class="clearfix"></div>
                    <div class="pagination_container">
                        <ul>
                            <li class="nav-previous alignleft"><?php echo next_posts_link( 'Next' ); ?></li>
                            <li class="nav-next alignright"><?php echo previous_posts_link( 'Previous' ); ?></li>                
                        </ul>           
                    </div>
                    <?php 
                            wp_reset_query();
                    ?>
      		</div>
            </section>
	<!--body container2 part  end-->    
<?php get_footer(); ?>

