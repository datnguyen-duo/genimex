<?php get_header(); ?>

<div class="template-page-container">
    <div class="template-page-content animate">
        <div class="text-hero animate">
            <h1><?php the_title(); ?></h1>
        </div>
        
        <div class="text-editor">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>