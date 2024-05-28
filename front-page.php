<?php get_header(); ?>

<!-- Headerbild -->
<div class="header-img">
    <img src="<?php echo header_image(); ?>" alt="<?php echo get_custom_header()->alt; ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>">

    <!-- Widget-area på headerbild -->
    <?php
    if (is_active_sidebar('header-widget')) : ?>
        <div class="header-widget">
            <ul>
                <?php dynamic_sidebar('header-widget'); ?>
            </ul>
        </div>
    <?php endif; ?>
</div>

<!-- Behållare för huvudinnehåll -->
<div class="wrapper-front-page flex-container">
    <main>
        <!-- Widget-area -->
        <?php
        if (is_active_sidebar('main-widget')) : ?>
            <div class="main-widget">
                <ul>
                    <?php dynamic_sidebar('main-widget'); ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- Innehåll -->
        <article>
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </article>
    </main>

    <!-- Sidopanel -->
    <?php get_sidebar('news-map'); ?>
</div>

<!-- Sidfot -->
<?php get_footer(); ?>