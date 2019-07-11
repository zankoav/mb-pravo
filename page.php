<?php get_header(); ?>
    <div class="loader">
        <div class="loader__spinner loader__spinner_egg"></div>
    </div>
    <div class="contacts">
        <div class="contacts__main">
            <?php get_template_part('/core/views/header_view'); ?>
            <div class="information">
                <div class="information__inner">
                    <div class="container">
                        <?php
                        if (have_posts()):
                            while (have_posts()):
                                the_post();
                                ?>
                                <div class="information__title"><?= the_title()?></div>
                                <div class="information__contacts">
                                    <div class="information__contacts-wrapper">
                                        <?php the_content()?>
                                    </div>
                                </div>
                            <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts__footer">
            <?php get_template_part('/core/views/footer_view'); ?>
        </div>
    </div>
<?php get_footer();