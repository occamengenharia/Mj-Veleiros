<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <h2>Conheça nossa linha de veleiros</h2>
                    <div class="container">
                        <div class="services-item">
                            <?php
                            if( is_active_sidebar('mj-34-deck-solarium') ):
                                dynamic_sidebar('mj-34-deck-solarium');
                            endif;?>
                        </div>
                        <div class="services-item">
                            <?php
                            if( is_active_sidebar('mj-38-deck-solarium') ):
                                dynamic_sidebar('mj-38-deck-solarium');
                            endif;?>
                        </div>
                        <div class="services-item">
                            <?php
                            if( is_active_sidebar('mj-44-deck-solarium') ):
                                dynamic_sidebar('mj-44-deck-solarium');
                            endif;?>
                        </div>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>