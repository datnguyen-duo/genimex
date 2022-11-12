<?php
//$per_page = get_option( 'posts_per_page' );
$works_per_page = 12;
function works_filter() {
    /*
    TODO uncomment and replace category_name_1 and taxonomy-name-1 with the real taxonomy
    */
    $post_categories = $_GET['category'];

    $current_page = $_GET['page'];

    $work_args = array(
        'post_type' => 'case-studies',
        'post_status' => array( 'publish' ),
        'posts_per_page' => $GLOBALS['works_per_page'],
        'paged' => $current_page,
        'tax_query' => [
            'relation' => 'OR',
        ]
    );

//    Example for taxonomy filtration
    if( $post_categories && $post_categories != 'all') {
        array_push($work_args['tax_query'],array(
            'taxonomy' => 'project-type',
            'field' => 'slug',
            'terms' => $post_categories
        ));
    }

    $works = new WP_Query($work_args);

    print_works($works);
    die;
}
add_action('wp_ajax_works_filter', 'works_filter');
add_action('wp_ajax_nopriv_works_filter', 'works_filter');

function print_works( $query = '' ) {
    if( !$query ) {
        $query = new WP_Query(array(
            'post_type' => 'case-studies',
            'post_status' => array( 'publish' ),
            'posts_per_page' => $GLOBALS['works_per_page'],
            'paged' => 1,
        ));
    }
    $work_per_page = $query->query['posts_per_page'];
    $found_posts = $query->found_posts;
    $current_page = $query->query['paged'];
    $total_pages = ceil($found_posts / $work_per_page);

    if( $query->have_posts() ): ?>
        <div class="all-work-wrap">
            <?php if ( $query->have_posts() ):
                while ( $query->have_posts() ):
                    $query->the_post(); 
                    // $category_name = get_the_terms(get_the_ID(), 'categories')[0]->name;
                    $client_logo = get_field('client_logo', get_the_ID())
                ?>
                    <div class="single-work">
                        <div class="image-holder">
                            <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'large'); ?>
                        </div>

                        <?php if($client_logo): ?>
                            <div class="client-logo">
                                <?php echo wp_get_attachment_image($client_logo, 'large'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; wp_reset_postdata();?>
            <?php endif; ?>
        </div>

        <?php if( $total_pages > 1 ): ?>
            <div class="pagination-wrap" data-number="<?php echo wp_count_posts( 'post' )->publish; ?>" data-total="<?php echo $query->post_count; ?>" data-pages="<?php echo $total_pages; ?>">
                <div class="pagination-content posts-pagination">
                    <div class="left-arrow-holder pagination-page next-prev-page prev-page" data-page="<?= ($current_page == 1) ? $total_pages : $current_page-1; ?>">
                        <div class="arrow-holder">
                            <img src="<?= get_template_directory_uri().'/src/images/icons/swiper-arrow.svg' ?>" alt="">
                        </div>
                        <p>Previous Page</p>
                    </div>
                    <div class="pagination-pages">
                        <!-- <?php for( $i=1; $i <= $total_pages; $i++ ): ?>
                            <div class="pagination-number <?= ($current_page == $i) ? 'active' : null; ?>" data-page="<?php echo $i; ?>">
                                <span><?php echo $i; ?></span>
                            </div>
                        <?php endfor; ?> -->
                    </div>
                    <div class="right-arrow-holder pagination-page next-prev-page next-page" data-page="<?= ($current_page == $total_pages) ? 1 : $current_page+1; ?>">
                        <p>Next Page</p>
                        <div class="arrow-holder">
                            <img src="<?= get_template_directory_uri().'/src/images/icons/swiper-arrow.svg' ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;
    else: ?>
        <div class="no-results">
            <h2>No posts found.</h2>
        </div>
    <?php endif;
}