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
        <!-- Datum för publicering -->
        <h1>Publicerat <?php the_date(); ?></h1>
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
                <!-- Inlägg -->
                <article class="news">

                    <!-- Titel på inlägg -->
                    <h2><?php the_title(); ?></h2>

                    <!-- Utvald bild som miniatyr -->
                    <div class="float-left-img">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('thumbnail');
                        }
                        ?>
                    </div>

                    <!-- Avkortad text med länk för att läsa mer -->
                    <?php
                    $theExcerpt = get_the_excerpt();
                    $thePermalink = get_the_permalink();
                    echo '<p>' . $theExcerpt . ' <a href="' . $thePermalink . '">Läs mer</a></p>';
                    ?>
                </article>
        <?php
            endwhile;
        endif;
        ?>
    </main>
</div>

<!-- Sidfot -->
<?php get_footer(); ?>