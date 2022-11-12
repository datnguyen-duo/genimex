<?php
/* Template Name: Contact */

$hero_section_video = get_field('hero_section_video');
$hero_section_headline = get_field('hero_section_headline');
$hero_section_description = get_field('hero_section_description');

$contact_form_headline = get_field('contact_form_headline');
$contact_form_description = get_field('contact_form_description');
$contact_form_id = get_field('contact_form_id');

get_header(); ?>
<div class="template-contact-page-container">
    <div class="template-contact-hero animate">
        <div class="left">
            <div class="image-holder">
                <video autoplay muted loop playsinline class="section-background hero-video" id="heroVideo">
                    <source src="<?php echo $hero_section_video['url']; ?>" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="right">
            <div class="right-content">
                <?php if($hero_section_headline): ?>
                    <h1>
                        <?php echo $hero_section_headline; ?>
                    </h1>
                <?php endif; ?>
                <?php if($hero_section_description): ?>
                    <div class="description">
                        <?php echo $hero_section_description; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="form-wrap">
        <div class="from-content animate">
            <div class="form-header">
                <?php if($contact_form_headline): ?>
                    <h2>
                        <?php echo $contact_form_headline ?>
                    </h2>
                <?php endif; ?>
                <?php if($contact_form_description): ?>
                    <p>
                        <?php echo $contact_form_description ?>
                    </p>
                <?php endif; ?>
            </div>
            <?php if($contact_form_id): ?>
                <div class="form-holder">
                    <?php echo do_shortcode($contact_form_id); ?>
                </div>
            <?php endif; ?>
            
        </div>
    </div>
</div>
<?php get_footer(); ?>