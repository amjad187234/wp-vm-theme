<?php
/*
Template Name: Video Page
*/
get_header();
?>

<div class="container">
    <h1>Unsere Videoprojekte</h1>
    <div class="portfolio-grid">
        <?php
        $video_query = new WP_Query(array(
            'post_type' => 'video',
            'posts_per_page' => 10,
        ));

        if ($video_query->have_posts()) :
            while ($video_query->have_posts()) : $video_query->the_post(); ?>
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
            echo '<p>Keine Videos gefunden.</p>';
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>

<?php get_footer(); ?>
