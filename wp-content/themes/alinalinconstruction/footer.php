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
                &copy;Copyright. Alin Alin Construction . 2014... All Rights Reserved<br>  <a target="_blank" rel="" href="http://www.businessprodesigns.com/">Powered by BusinessPro Designs</a><BR>
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
	<?php wp_footer(); ?>
</body>
</html>