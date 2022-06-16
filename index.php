<?php get_header();?>
<div class="posts">
<?php if(have_posts()) { ?>
    <?php while(have_posts()) { ?>
        <?php the_post(); ?>
        <div class="post-preview">
        <div class="img-zoom"><?php the_post_thumbnail(); ?></div>
        <h2>
            <?php the_title() ?></a>
        </h2>
        <h3><?php echo get_post_meta($post->ID, 'Profession', true); ?></h3>
        <p><?php the_content(); ?></p>
        <a href="mailto:<?php echo get_post_meta($post->ID, 'Email', true); ?>" class="mailto"><?php echo get_post_meta($post->ID, 'Email', true); ?></a>
    </div>
        

    <?php } ?>

<?php } else { ?>
    <p>Sorry, no posts. :( See you next time.</p>
<?php }?>
</div>
<?php get_footer();?>