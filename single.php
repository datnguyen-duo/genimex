<?php get_header(); 
    $related_posts = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'post__not_in'   => array( get_the_ID() )
    ));

    $post_date = get_the_date( 'F j, Y' );
    $category_detail=get_the_category(get_the_ID());

    $single_post_related_headline = get_field('single_post_related_headline', 'option');
    $single_post_related_link = get_field('single_post_related_link', 'option');
?>
<div class="single-post-page-container">
    <div class="single-post-hero animate">
        <div class="top-section">
            <div class="top-section-content">
                <h1>
                    <?php the_title(); ?>
                </h1>
                
                <?php if(the_excerpt()): ?>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="social-wrap">
                <?php echo do_shortcode( '[addtoany url="'.get_the_permalink().'" title="'.get_the_title().'"]' );  ?>
            </div>
        </div>

        <div class="bottom-section">
            <div class="image-holder">
                <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'large'); ?>
    
                <div class="pill-holder">
                    <div class="pill category">
                        <?php $glue = ''; foreach($category_detail as $singleCategory): 
                            $category_link = get_category_link($singleCategory->cat_ID);
                            ?>
                            
                            <a href="<?php echo $category_link; ?>"><?php echo $glue . $singleCategory->cat_name; $glue = ', '; ?></a>
                            
                        <?php endforeach; ?>
                    </div>
                    <div class="pill date">
                        <?php echo $post_date; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-post-content-wrap animate">
        <div class="single-post-content">
            <div class="text-editor">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

    <div class="similar-posts-wrap animate">
        <div class="similar-posts-header">
            <?php if($single_post_related_headline): ?>
                <h2>
                    <?php echo $single_post_related_headline; ?>
                </h2>
            <?php endif; ?>
            <?php if($single_post_related_link): ?>
                <a href="<?php echo $single_post_related_link['url'] ?>" target="<?php echo $single_post_related_link['target'] ?>" class="link-btn">
                    <?php echo $single_post_related_link['title'] ?>
                    <span>
                        <?php icon_plus(); ?>
                        <?php icon_white_arrow(); ?>
                    </span>
                </a>
            <?php endif; ?>
        </div>

        <div class="similar-posts">
            <div class="swiper similar-posts-swiper">
                <div class="swiper-wrapper">
                    <?php if ( $related_posts->have_posts() ):
                        while ( $related_posts->have_posts() ):
                            $related_posts->the_post(); 
                            $post_date = get_the_date( 'F j, Y' );
                        ?>
                            <div class="swiper-slide">
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
                            </div>
                        <?php endwhile; wp_reset_postdata();?>
                    <?php endif; ?>
                </div>
            </div>

            <?php if($single_post_related_link): ?>
                <a href="<?php echo $single_post_related_link['url'] ?>" target="<?php echo $single_post_related_link['target'] ?>" class="btn">
                    <span>
                        <?php echo $single_post_related_link['title'] ?>
                    </span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>