	<footer id="colophon" class="site-footer" role="contentinfo">
    
    	<div class="responsive-container">
            	
            <div class="site-info">           
            
               
                <h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h3>
                <p><?php _e('&copy; All rights reserved.', 'FDT STUDIO') ?></p>
                <?php if( is_home() || is_front_page() ): ?>
                <p><?php printf( __( 'Designed by: %1$s.', 'FDT STUDIO' ), '<a href="http://www.fdtstudio.com/" rel="designer">FDT STUDIO</a>' ); ?></p>
                <?php endif; ?>
                <p>Powered by <a href="http://www.fdtstudio.com/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'FDT STUDIO' ); ?>" rel="generator"><?php printf( __( '%s', 'dimonze' ), 'FDT STUDIO' ); ?></a></p>
                <div class="footer-search"><?php //get_search_form(); ?></div>

                
            </div><!-- .site-info -->
            
            <div class="footer-widget-three">
            	<?php if ( dynamic_sidebar('footer-left') ){ } else { ?>
                
                    <aside id="archives" class="widget">
                        <h1 class="widget-title"><?= _tr( 'Language' ); ?></h1>
                        <ul>
                          <li><a href="<?php curPageURL(); ?>?lang=ru">Русский</a>&nbsp|
                              <a href="<?php curPageURL(); ?>?lang=en">English</a></li>   
                          <li>+38(048)-736-25-46</li> 
                          <li>
                          <a href="mailto:info@fdtstudio.com">info@fdtstudio.com</a></li> 
                        </ul>
                    </aside>                                                                                
                                                                                
                <?php } ?>
            </div>
            
<!--            <div class="footer-widget-three">
            	<?php if ( dynamic_sidebar('footer-center') ){ } else { ?>

                    <aside id="meta" class="widget">
                        <h1 class="widget-title"><?= _tr( 'Services' ); ?></h1>
                        <ul>                            
                            <?php wp_list_pages('title_li='); ?>                         
                        </ul>
                    </aside>                                                                                
                                                                                
                <?php } ?>            
            </div>-->
            
            <div class="footer-widget-three">
            	<?php if ( dynamic_sidebar('footer-right') ){ } else { ?>

                    <aside id="archives" class="widget">
                        <h1 class="widget-title"><?= _tr( 'Company' ); ?></h1>
                        <ul>                          
                            <?php wp_register(); ?>
                            <li><?php wp_loginout(); ?></li>
                        </ul>
                    </aside>                                                                                 
                                                                                
                <?php } ?>            
            </div>            
            
    	</div><!-- #Responsive-Container -->
                    
	</footer><!-- #colophon -->