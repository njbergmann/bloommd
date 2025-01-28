<div class="custom-posts bloom-posts">
    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="post-container">
            <div class="custom-post">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption(); ?>" />
                <p class="title"><?php the_title(); ?></p>
                <p class="company"><?php echo get_field('company_name'); ?></p>
            </div>
        </div>
    <?php endwhile; ?>
</div>
