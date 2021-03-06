<!-- =========================
 SECTION: ABOUT
============================== -->
<?php
	global $wp_customize;
	$azera_shop_our_story_image = get_theme_mod('azera_shop_our_story_image', azera_shop_get_file('/images/about-us-background.jpg'));
	$azera_shop_our_story_title = get_theme_mod('azera_shop_our_story_title',esc_html__('Our Story','azera-shop'));
	$azera_shop_our_story_text = get_theme_mod('azera_shop_our_story_text',esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','azera-shop'));

	if( !empty($azera_shop_our_story_image) || !empty($azera_shop_our_story_title) || !empty($azera_shop_our_story_text) ) {
	?>
			<section class="brief text-left brief-design-one brief-left" id="story" role="region" aria-label="<?php esc_html_e('About','azera-shop') ?>" >
				<?php if(!empty($azera_shop_our_story_image)) { ?>

					<div class="section-overlay-layer" style="background-image: url('<?php echo esc_url($azera_shop_our_story_image); ?>');">

				<?php } else {  ?>

					<div class="section-overlay-layer">

				<?php } ?>

					<div class="container">

							<!-- BRIEF HEADING -->

            <div class="row">
							<div class="col-md-12 section-header brief-content-one">
								<?php
									if( !empty($azera_shop_our_story_title) ){
										echo '<h2 class="text-center white-text">'.esc_attr($azera_shop_our_story_title).'</h2><div class="colored-line"></div>';
									} elseif ( isset( $wp_customize )   ) {
										echo '<h2 class="text-center white-text azera_shop_only_customizer"></h2><div class="colored-line azera_shop_only_customizer"></div>';
									} ?>
                </div> <!-- .section-header -->
              </div> <!-- .row -->

              <div class="row">
                <div class="col-md-7 content-section brief-content-one">

    							<?php if( !empty($azera_shop_our_story_text) ){
										echo '<div class="brief-content-text white-text">'.$azera_shop_our_story_text.'</div>';
									} elseif ( isset( $wp_customize )   ) {
										echo '<div class="brief-content-text white-text azera_shop_only_customizer"></div>';
									}
								?>
							</div><!-- .brief-content-one-->
            </div><!-- .row -->
					</div>
				</div>
			</section><!-- .brief-design-one -->
	<?php
	}
?>
