<footer class="site-footer">
            <div class="container">
                <div class="logo">
                    <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                    } else {
                    ?>
                        <a href="<?php echo home_url('/'); ?>"><span><?php bloginfo('name'); ?></span></a>
                    <?php
                    }

                    ?>
                </div>
                <div class="endereco">
                    <p> Rodovia Regis Bittencourt BR 116, Km 476 <br>
                        Rua Dois, n° 349 - Parque Industrial <br> 
                        Jacupiranga-SP - CEP 11940-000     
                    </p>
                </div>
                <div class="copyright">
                    <p>Copyright © 2022 Veleiros MJ - Todos os direitos reservados - contato@veleirosmj.com.br - (13) 98124-3145     
                    </p>
                </div>
                <nav class="footer-menu">
                    <?php wp_nav_menu(array('theme_location' => 'wp_devs_footer_menu',
                'depth' => 1)); ?>
                </nav>
            </div>
        </footer>
        

    </div>
    <?php wp_footer(); ?>
</body>
</html>