<?php
    get_header();
    $sub_title = get_post_meta(get_the_ID(), 'sub_title', true);
    $photo     = get_post_meta(get_the_ID(), 'photo', true);
    $content   = apply_filters('the_content', get_post_meta(get_the_id(), 'content', true));
?>
    <div class="loader">
        <div class="loader__spinner loader__spinner_egg"></div>
    </div>
    <div class="practice">
        <div class="practice__main">
            <?php get_template_part('/core/views/header_view'); ?>
            <div class="practice-content">
                <div class="practice-content__inner">
                    <h1 class="practice-content__row_navigation-title"><?= get_the_title(); ?></h1>
                    <div class="container">
                        <div class="practice-content__row">
                            <div class="practice-content__row_navigation">
                                <div class="practice-content__row_navigation-theme">
                                    <h2 class="practice-content__row_navigation-subtitle">Практики:</h2>
                                    <div class="menu-left">
                                        <div class="menu-left__active-item">Выберите практику</div>
                                        <ul class="menu-left__list">
                                            <?php get_template_part('/core/views/practice_list'); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="practice-content__row_about">
                                <div class="practice-content__row_about-information">
                                    <div class="practice-content__row_about-information-column">
                                        <div class="practice-content__row_about-information-column-subtitle">
                                            <?= $sub_title; ?>
                                        </div>
                                        <?php if (!empty($photo)): ?>
                                            <img class="practice-content__about_row-information-column-image js-img"
                                                 data-src="<?= $photo; ?>" alt="partners">
                                        <?php endif; ?>
                                    </div>

                                    <div class="practice-content__row_about-information-text">
                                        <?= wpautop($content); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="practice__footer">
            <?php get_template_part('/core/views/footer_view'); ?>
        </div>
    </div>
<?php
    get_footer();