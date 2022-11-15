<?php 
$hero_section_headline = get_field('hero_section_headline', get_option('page_for_posts'));
$hero_section_first_description = get_field('hero_section_first_description', get_option('page_for_posts'));
$hero_section_second_description = get_field('hero_section_second_description', get_option('page_for_posts'));

$featured_blog_posts_list = get_field('featured_blog_posts_list', get_option('page_for_posts'));
$featured_categories = get_field('featured_categories', get_option('page_for_posts'));

$all_posts_headline = get_field('all_posts_headline', get_option('page_for_posts'));


$all_posts = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'post_status' => 'publish',
));

$latest = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post_status' => 'publish',
));

$post_categories = get_terms(array(
    'taxonomy' => 'category'
));             

get_header();
?>

<div class="template-blog-page-container">
    <div class="text-hero blog-hero animate">
        <?php if($hero_section_headline): ?>
            <h1>
                <?php echo $hero_section_headline; ?>
            </h1>
            <?php if($hero_section_first_description): ?>
                <p>
                    <?php echo $hero_section_first_description; ?>
                </p>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <div class="featured-blog-posts-wrap animate">
        <div class="featured-blog-posts-header">
            <?php if($hero_section_first_description): ?>
                <p>
                    <?php echo $hero_section_first_description; ?>
                </p>
            <?php endif; ?>
            <?php if($hero_section_second_description): ?>
                <p>
                    <?php echo $hero_section_second_description; ?>
                </p>
            <?php endif; ?>
        </div>
    
        <div class="featured-blog-posts">
            <div class="left">
                <div class="swiper featured-blogs-swiper-thumb">
                    <div class="swiper-wrapper">
                        <?php if ( $latest->have_posts() ):
                            while ( $latest->have_posts() ):
                                $latest->the_post(); 
                                $post_date = get_the_date( 'F j, Y' );
                                $category_detail=get_the_category(get_the_ID());
                            ?>
                                <div class="swiper-slide">      
                                    <div class="category pill">
                                        <?php the_category(', '); ?>
                                        <!-- <?php $glue = ''; foreach($category_detail as $singleCategory): 
                                            $category_link = get_category_link($singleCategory->cat_ID);
                                            ?>
                                            
                                            <a href="<?php echo $category_link; ?>"><?php echo $glue . $singleCategory->cat_name; $glue = ', '; ?></a>
                                            
                                        <?php endforeach; ?> -->
                                    </div>

                                    <a href="<?php the_permalink(); ?>" class="image-holder">
                                        <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'large'); ?>
                                        <div class="date pill">
                                            <?php echo $post_date; ?>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile; wp_reset_postdata();?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="right-content">
                    <div class="counter">
                        <span class="current-slide">1</span>/<span class="total-slides"><?php echo count($featured_blog_posts_list); ?></span>
                    </div>

                    <div class="swiper featured-blogs-swiper">
                        <div class="swiper-wrapper">
                            <?php if ( $latest->have_posts() ):
                                while ( $latest->have_posts() ):
                                    $latest->the_post(); 
                                    $post_date = get_the_date( 'F j, Y' );
                                    $category_detail=get_the_category(get_the_ID());
                                ?>
                                    <a href="<?php the_permalink(); ?>" class="swiper-slide">
                                        <h2><?php the_title(); ?></h2>
                                        <p>
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </a>
                                <?php endwhile; wp_reset_postdata();?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="controls-holder">
                        <div class="swiper-button white blogs-swiper-button-prev">
                            <?php icon_white_arrow(); ?>
                        </div>
                        <div class="swiper-button white blogs-swiper-button-next">
                            <?php icon_white_arrow(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grey-section">
        <div class="featured-categories-wrap animate">
            <?php if($featured_categories): ?>
                <?php foreach( $featured_categories as $term ): ?>
                    <?php 
                        $featured_taxonomy = new WP_Query( array(
                            'post_type' => 'post',
                            'posts_per_page' => '3',
                            'post_status' => 'publish',
                            'tax_query' => array(
                                array (
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => $term->name,
                                )
                            ),
                        ));
                    ?>

                    <div class="single-category-wrap">
                        <h2>
                            <?php echo $term->name; ?>
                        </h2>

                        <div class="single-category-posts">
                            <div class="swiper categories-swiper" data-slug="<?php echo $term->slug; ?>">
                                <div class="swiper-wrapper">
                                    <?php if ( $featured_taxonomy->have_posts() ):
                                        while ( $featured_taxonomy->have_posts() ):
                                            $featured_taxonomy->the_post(); 
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
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            
            <?php if($featured_blog_posts_list): ?>
                <div class="single-category-wrap">
                    <h2>
                        Most Popular Blogs
                    </h2>

                    <div class="single-category-posts">
                        <div class="swiper categories-swiper" data-slug="<?php echo $term->slug; ?>">
                            <div class="swiper-wrapper">
                            <?php foreach( $featured_blog_posts_list as $post ): 
                                setup_postdata($post);
                                $post_date = get_the_date( 'F j, Y' );
                                $category_detail=get_the_category(get_the_ID());
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
                            <?php endforeach; ?>
                            <?php 
                            // Reset the global post object so that the rest of the page works correctly.
                            wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="all-news-wrap animate">
            <form class="all-news-content" id="posts-form">
                <input type="hidden" name="action" value="posts_filter">
                <input type="hidden" name="page" value="1" id="posts-page-input">

                <div class="all-posts-hero">
                    <?php if($all_posts_headline): ?>
                        <h2><?php echo $all_posts_headline; ?></h2>
                    <?php endif; ?>
    
                    <?php if( $post_categories ): ?>
                        <div class="filters-wrap">
                            <p>Filter By</p>
    
                            <div class="filters desktop">
                                <?php foreach ( $post_categories as $category ): ?>
                                    <div class="single-filter">
                                        <label>
                                            <input type="checkbox" value="<?= $category->slug ?>" name="category[]" id="category">
                                            <span><?= $category->name ?></span>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="filters mobile">
                                <select name="category" id="kita">
                                    <option value="all">
                                        All
                                    </option>
                                    <?php foreach ( $post_categories as $category ): ?>
                                        <option value="<?= $category->slug ?>">
                                            <?= $category->name ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="all-posts-list" id="posts-response">
                    <?php print_posts() ?>
                </div>
            </form>
        </div>
    </div>
</div>
<?php get_footer(); ?>