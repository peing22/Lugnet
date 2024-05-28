<?php
/*
Template name: Sidopanel med nyhetsinlägg
*/
?>

<?php get_header(); ?>

<!-- Brödsmulor -->
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
}
?>

<!-- Behållare för huvudinnehåll -->
<div class="wrapper flex-container">
    <main>

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
    <?php get_sidebar('news'); ?>
</div>

<!-- Sidfot -->
<?php get_footer(); ?>