<?php get_header(); ?>

<div class="container">
    <h1><?php the_title(); ?></h1>
    <div class="post-content">
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail('large');
        } ?>
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>
