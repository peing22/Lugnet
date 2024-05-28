<!-- Sidopanel för att skriva ut nyheter och karta -->
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
    <!-- Karta med länk till google -->
    <h3>Hitta hit</h3>
    <a href="https://goo.gl/maps/D9fHupW2T8KGsNCu9" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/images/karta.jpg" alt="Karta för att hitta till Lugnet" width="300" height="300">
    </a>
</aside>