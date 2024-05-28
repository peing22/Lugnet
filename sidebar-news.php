<!-- Sidopanel för att skriva ut nyheter -->
<aside>
    <!-- Hämtar och skriver ut poster från kategorin nyheter -->
    <h3>Nyheter</h3>
    <?php
    $args = array('category_name' => 'Nyheter');
    $query = new WP_Query($args);

    if (have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
    ?>
            <!-- Skriver ut titel som en länk -->
            <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
    <?php
        endwhile;
    endif;
    ?>
</aside>