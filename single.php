<?php get_header(); ?>

<!-- Brödsmulor -->
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
}
?>

<!-- Behållare för huvudinnehåll -->
<div class="wrapper">
    <main>
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
                <!-- Inlägg -->
                <article>

                    <!-- Titel på inlägg -->
                    <h1><?php the_title(); ?></h1>

                    <!-- Datum för publicering -->
                    <p class="fivehundred">Inlägg publicerat <?php echo get_the_date(); ?></p>

                    <!-- Text -->
                    <?php the_content(); ?>

                    <!-- Utvald bild -->
                    <div class="single-post-thumbnail">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                        ?>
                    </div>
                </article>
        <?php
            endwhile;
        endif;
        ?>
    </main>
</div>

<!-- Sidfot -->
<?php get_footer(); ?>