<?php
/*
Template Name: Portfolio
*/
get_header();
?>

<div class="container">
    <h1>Portfolio</h1>
    <div class="portfolio-grid">
        <?php
        $portfolio_query = new WP_Query(array(
            'post_type' => 'portfolio',
            'posts_per_page' => 6,
        ));

        if ($portfolio_query->have_posts()) :
            while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
                <div class="portfolio-item">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    } ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Mehr erfahren</a>
                </div>
            <?php endwhile;
        else :
            echo '<p>Keine Projekte gefunden.</p>';
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>

<?php get_footer(); ?>
