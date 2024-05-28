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
</div>

<!-- Sidfot -->
<?php get_footer(); ?>