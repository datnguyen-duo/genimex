<?php get_header();
$term = get_queried_object();
?>


<div class="archive-page-container">
    <div class="text-hero blog-hero animate">
        <h1><?php echo get_the_archive_title(); ?></h1>
    </div>
    <div class="all-news-wrap">
        <div class="category_posts_wrap">
            <?php
                $wp_query = new WP_Query(array(
                    'post_type' => 'post',
                    'post_status' => array( 'publish' ),
                    'posts_per_page' => -1,
                    'category_name' => $term->slug
                ));
            ?>
            <?php if ( $wp_query->have_posts() ):
            while ( $wp_query->have_posts() ):
                $wp_query->the_post(); 
                $post_date = get_the_date( 'F j, Y' );
            ?>
                <a href="<?php the_permalink(); ?>" class="single-post-article">
                    <div class="image-holder">
                        <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'large'); ?>
                        <div class="date pill">
                            <?php echo $post_date; ?>
                        </div>
                    </div>
    
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                </a>
                <?php endwhile; wp_reset_postdata();?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>