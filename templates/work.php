<?php
/* Template Name: Work */
$work_headline = get_field('work_headline');

// $args = array(
//     'post_type' => 'case-studies',
//     'posts_per_page' => -1,
//     'post_status' => 'publish',
// );

// $work = new WP_Query( $args );

$work_categories = get_terms(array(
    'taxonomy' => 'project-type'
));

get_header(); ?>
<div class="template-work-page-container">
    <div class="text-hero faq-hero animate">
        <?php if($work_headline): ?>
            <h1>
                <?php echo $work_headline; ?>
            </h1>
        <?php endif; ?>
    </div>

    <div class="work-content-wrap animate">
        <form class="work-content" id="works-form">
            <input type="hidden" name="action" value="works_filter">
            <input type="hidden" name="page" value="1" id="works-page-input">
            
            
            <div class="all-posts-hero">
                <?php if( $work_categories ): ?>
                    <div class="filters-wrap">
                        <p>Filter By</p>
    
                        <div class="filters desktop">
                            <?php foreach ( $work_categories as $category ): ?>
                                <div class="single-filter">
                                    <label>
                                        <input type="checkbox" value="<?= $category->slug ?>" name="category[]" id="category">
                                        <span><?= $category->name ?></span>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="filters mobile">
                            <select name="category" id="category">
                                <option value="all">
                                    All
                                </option>
                                <?php foreach ( $work_categories as $category ): ?>
                                    <option value="<?= $category->slug ?>">
                                        <?= $category->name ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="works-wrap" id="works-response">
                <?php print_works() ?>
            </div>
        </form>
    </div>
</div>
<?php get_footer(); ?>