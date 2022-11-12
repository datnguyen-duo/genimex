<?php
/* Template Name: Thank You */

$hero_section_headline = get_field('hero_section_headline');
$hero_section_description = get_field('hero_section_description');

$related_blog_posts_headline = get_field('related_blog_posts_headline');
$related_blog_posts_button = get_field('related_blog_posts_button');

$all_posts = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => '3',
    'post_status' => 'publish',
));

get_header(); ?>
    <div class="template-thankyou-page-container">
        <div class="text-hero thankyou-hero animate">
            <div class="hero-content">
                <?php if($hero_section_headline): ?>
                    <h1>
                        <?php echo $hero_section_headline; ?>
                    </h1>
                <?php endif; ?>
                <?php if($hero_section_description): ?>
                    <p>
                        <?php echo $hero_section_description; ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>

        <div class="latest-posts-wrap">
            <div class="latest-posts-content">
                <div class="latest-posts-hero animate">
                    <?php if($related_blog_posts_headline): ?>
                        <h2>
                            <?php echo $related_blog_posts_headline; ?>
                        </h2>
                    <?php endif; ?>
                    <?php if($related_blog_posts_button): ?>
                        <a href="<?php echo $related_blog_posts_button['url']; ?>" target="<?php echo $related_blog_posts_button['target']; ?>" class="btn">
                            <span>
                                <?php echo $related_blog_posts_button['title']; ?>
                            </span>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="latest-posts animate">
                    <?php if ( $all_posts->have_posts() ):
                        while ( $all_posts->have_posts() ):
                            $all_posts->the_post(); 
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
    </div>
<?php get_footer(); ?>