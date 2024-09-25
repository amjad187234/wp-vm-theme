<?php get_header(); ?>

<div class="container">
    <h1>Willkommen bei Videograph</h1>
    <p>Wir sind Experten in der Videoproduktion und bieten kreative und professionelle Dienstleistungen an, um Ihre Geschichte in atemberaubenden Videos festzuhalten.</p>
    <button>Kontaktieren Sie uns</button>

    <h2>Unsere neuesten Projekte</h2>
    <div class="portfolio-grid">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
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
        ?>
    </div>
</div>

<?php get_footer(); ?>

