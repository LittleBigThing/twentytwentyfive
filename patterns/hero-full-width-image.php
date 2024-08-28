<?php
/**
 * Title: Hero Full Width Image
 * Slug: twentytwentyfive/hero-full-width-image
 * Categories: banner, featured
 * Description: A hero with a full width image, heading, short paragraph and button
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

 ?>
 <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-8802603-original.webp","id":11,"dimRatio":20,"overlayColor":"black","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.95},"minHeight":832,"minHeightUnit":"px","contentPosition":"bottom left","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:832px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-11" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-8802603-original.webp" style="object-position:50% 95%" data-object-fit="cover" data-object-position="50% 95%"/>
    <div class="wp-block-cover__inner-container">
        <!-- wp:heading {"textAlign":"left","level":1} -->
            <h1 class="wp-block-heading has-text-align-left">Tell your story</h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience, revealing hidden wonders.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn More</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
</div>
<!-- /wp:cover -->