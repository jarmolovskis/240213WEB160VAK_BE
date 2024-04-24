<?php get_header(); ?>

    <?php while (have_posts()) : the_post(); ?>

        <p>Išskirtinai Sample page puslapio šablonas</p>

        <h3><?php the_title(); ?></h3>

        <?php the_content(); ?>

        <!-- ACF REPEATERIO PAVYZDYS -->
        
        <?php if( have_rows('paslaugos') ): ?>
            <ul class="slides">
            <?php while( have_rows('paslaugos') ): the_row(); ?>
                <li>
                    <h3><?php the_sub_field('paslaugos_pavadinimas');; ?></h3>
                    <img src="<?php the_sub_field('paslaugos_paveikslelis');; ?>" alt="">
                    <p><?php the_sub_field('paslaugos_aprasymas')?></p>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <!-- ACF REPEATERIO PAVYZDYS -->

    <?php endwhile; ?>

<?php get_footer(); ?>