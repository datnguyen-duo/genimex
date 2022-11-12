<?php
/* Template Name: FAQ */

$faq_headline = get_field('faq_headline');
$faq_list = get_field('faq_list');

get_header(); ?>
    <div class="template-faq-page-container">
        <div class="text-hero faq-hero animate">
            <?php if($faq_headline): ?>
                <h1>
                    <?php echo $faq_headline ?>
                </h1>
            <?php endif; ?>
        </div>

        <div class="faq-content-wrap">
            <div class="faq-content animate">

                <div class="faq-wrap">
                    <?php foreach($faq_list as $singleCategory): ?>
                        <div class="single-faq-category">
                            <div class="left">
                                <h3>
                                    <?php echo $singleCategory['single_category_headline']; ?>
                                </h3>
                            </div>
                            <div class="right">
                                <?php foreach($singleCategory['single_category_list'] as $singleItem): ?>
                                    <div class="single-faq">
                                        <div class="faq-header">
                                            <h4>
                                                <?php echo $singleItem['list_item_headline']; ?>
                                            </h4>
                                            <div class="faq-opener">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>

                                        <div class="faq-description">
                                            <p>
                                                <?php echo $singleItem['list_item_description']; ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>