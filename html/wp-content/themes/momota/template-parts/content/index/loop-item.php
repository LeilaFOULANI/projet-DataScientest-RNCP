<div class="<?php momota_print_archive_entry_class('wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container momota-index__k__QtetVXHJ9I-container momota-local-369-container d-flex   '); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner momota-index__k__QtetVXHJ9I-inner momota-local-369-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
		<div class="position-relative wp-block-kubio-query-loop-item__align momota-index__k__QtetVXHJ9I-align momota-local-369-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container momota-index__k__iE82N7AEu-container momota-local-370-container h-aspect-ratio--4-3 <?php momota_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
				<?php if(has_post_thumbnail()): ?>
				<img class='position-relative wp-block-kubio-post-featured-image__image momota-index__k__iE82N7AEu-image momota-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
				<?php endif; ?>
				<div class="position-relative wp-block-kubio-post-featured-image__inner momota-index__k__iE82N7AEu-inner momota-local-370-inner">
					<div class="position-relative wp-block-kubio-post-featured-image__align momota-index__k__iE82N7AEu-align momota-local-370-align h-y-container align-self-lg-start align-self-md-start align-self-start"></div>
				</div>
			</figure>
			<a class="position-relative wp-block-kubio-post-title__link momota-index__k__tstzQ_uACq-link momota-local-371-link d-block" href="<?php echo esc_url(get_the_permalink()); ?>">
				<h4 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container momota-index__k__tstzQ_uACq-container momota-local-371-container" data-kubio="kubio/post-title">
					<?php the_title(); ?>
				</h4>
			</a>
			<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text momota-index__k__-hWWlFyCEF-text momota-local-372-text" data-kubio="kubio/post-excerpt">
				<?php momota_post_excerpt(array (
  'max_length' => 16,
)); ?>
			</p>
			<div class="position-relative wp-block-kubio-read-more-button__spacing momota-index__k__7TrnS1SQ70-spacing momota-local-373-spacing">
				<span class="wp-block wp-block-kubio-read-more-button  position-relative wp-block-kubio-read-more-button__outer momota-index__k__7TrnS1SQ70-outer momota-local-373-outer kubio-button-container" data-kubio="kubio/read-more-button">
					<a class="position-relative wp-block-kubio-read-more-button__link momota-index__k__7TrnS1SQ70-link momota-local-373-link h-w-100 h-global-transition" href="<?php echo esc_url(get_the_permalink()); ?>">
						<span class="position-relative wp-block-kubio-read-more-button__text momota-index__k__7TrnS1SQ70-text momota-local-373-text kubio-inherit-typography">
							<?php esc_html_e('Read more', 'momota'); ?>
						</span>
					</a>
				</span>
			</div>
		</div>
	</div>
</div>
