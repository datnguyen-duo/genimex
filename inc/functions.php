<?php
function button( $link, $button_class = '' ) {
    if( $link ):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self'; ?>
        <a class="site-button <?= $button_class ?>" href="<?= esc_url( $link_url ); ?>" target="<?= esc_attr( $link_target ); ?>">
            <?= esc_html( $link_title ); ?>
        </a>
    <?php endif;
}

function section_title( $title, $title_class = 'section-title' ) {
    if( $title ): ?>
        <h2 class="<?= $title_class ?> slide-up-element"><?= $title ?></h2>
    <?php endif;
}

function section_desc( $desc, $desc_class = 'section-description' ) {
    if( $desc ): ?>
        <div class="<?= $desc_class ?>"><?= $desc ?></div>
    <?php endif;
}