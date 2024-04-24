<?php get_header(); ?>

    <p>Pagrindinio puslapio šablonas</p>

    <?php while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <?php the_content(); ?>

        <?php 
        $images = get_field('galerijos_nuotraukos');

        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
        if( $images ): ?>
            <ul>
                <?php foreach( $images as $image_id ): ?>
                    <li>
                        <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    <?php endwhile; ?>

    <!-- Įrašai atitinkantys sąlygą puslapio viduje pavyzdys -->

    <?php

        $the_query = new WP_Query([
            'post_type' => 'post',
            'category_name' => 'uncategorized',
            // 'offset' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
        ]);

        // The Loop.
        if ( $the_query->have_posts() ) {

            echo '<ul>';

            while ( $the_query->have_posts() ) {

                $the_query->the_post();

                echo '<li>' . get_the_title() . '</li>';

            }

            echo '</ul>';
        
        } else {
            esc_html_e( 'Sorry, no posts matched your criteria.' );
        }

        // Restore original Post Data.
        wp_reset_postdata();

    ?>

    <!-- Įrašai atitinkantys sąlygą puslapio viduje pavyzdys -->

<?php get_footer(); ?>