<footer class="site-footer">
        <div class="container">
            <div class="logo">
                <?php 
                    if(has_custom_logo()){
                            the_custom_logo();
                    } else {
                ?>
                    <a href="<?php echo home_url('/');?>"><span>
                        <?php bloginfo('name'); ?>
                    </span></a>
                    <?php
                            }
                    ?>
                        </div>
                <div class="copyright">
                    <p>Copyright © 2022 Veleiros MJ - Todos os direitos reservados - contato@veleirosmj.com.br - (13) 98124-3145</p>
                </div>
                <nav class="footer-menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'mj_veleiros_footer_menu', 
                'depth' => 1 ));?>
            </nav>
        </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>


