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
            <!-- Skriver ut innehåll för sidan -->
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
            endif;
            ?>
            <!-- Hämtar och skriver ut poster från kategorin aktiviteter -->
            <?php
            $args = array('category_name' => 'Aktiviteter');
            $query = new WP_Query($args);

            if (have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
                    <section>
                        <!-- Skriver ut titel och innehåll -->
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </section>
            <?php
                endwhile;
            endif;
            ?>
        </article>
    </main>
</div>

<!-- Sidfot -->
<?php get_footer(); ?>