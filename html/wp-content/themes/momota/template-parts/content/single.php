<div id="post-<?php the_ID(); ?>" class=" <?php get_post_class() ?> wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer momota-single__k__single-lAFSH8Xo9x-outer momota-local-703-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner momota-single__k__single-lAFSH8Xo9x-inner momota-local-703-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container momota-single__k__single-baLWB4dRKjp-container momota-local-704-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-3 gutters-row-v-2" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner momota-single__k__single-baLWB4dRKjp-inner momota-local-704-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-3 gutters-col-v-2">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container momota-single__k__single-kxeqsSpdy-n-container momota-local-705-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner momota-single__k__single-kxeqsSpdy-n-inner momota-local-705-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align momota-single__k__single-kxeqsSpdy-n-align momota-local-705-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container momota-single__k__iE82N7AEu-container momota-local-706-container h-aspect-ratio--4-3 <?php momota_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
								<?php if(has_post_thumbnail()): ?>
								<img class='position-relative wp-block-kubio-post-featured-image__image momota-single__k__iE82N7AEu-image momota-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
								<?php endif; ?>
								<div class="position-relative wp-block-kubio-post-featured-image__inner momota-single__k__iE82N7AEu-inner momota-local-706-inner">
									<div class="position-relative wp-block-kubio-post-featured-image__align momota-single__k__iE82N7AEu-align momota-local-706-align h-y-container align-self-lg-end align-self-md-end align-self-end">
										<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container momota-single__k__6ZnkdhgybM-container momota-local-707-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
											<div class="position-relative wp-block-kubio-row__inner momota-single__k__6ZnkdhgybM-inner momota-local-707-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
												<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container momota-single__k__9ML85pKMqJ-container momota-local-708-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
													<div class="position-relative wp-block-kubio-column__inner momota-single__k__9ML85pKMqJ-inner momota-local-708-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
														<div class="position-relative wp-block-kubio-column__align momota-single__k__9ML85pKMqJ-align momota-local-708-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
															<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer momota-single__k__in2mlwF4a-metaDataContainer momota-local-709-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta" id="post-metadata">
																<span class="metadata-item">
																	<span class="metadata-prefix">
																		<?php esc_html_e('Published by', 'momota'); ?>
																	</span>
																	<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>">
																		<?php echo esc_html(get_the_author_meta("display_name",get_post_field("post_author"))); ?>
																	</a>
																</span>
																<span class="metadata-item">
																	<span class="metadata-prefix">
																		<?php esc_html_e('on', 'momota'); ?>
																	</span>
																	<a href="<?php echo esc_url(get_day_link(get_post_time( 'Y' ),get_post_time( 'm' ),get_post_time( 'j' ))); ?>">
																		<?php echo esc_html(get_the_date('j M')); ?>
																	</a>
																</span>
																<span class="metadata-item">
																	<a href="">
																		<?php echo esc_html(get_the_time()); ?>
																	</a>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</figure>
							<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container momota-single__k__single-SbdKxHs2YI-container momota-local-710-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
								<div class="position-relative wp-block-kubio-row__inner momota-single__k__single-SbdKxHs2YI-inner momota-local-710-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container momota-single__k__single-3VGwAjm9cX-container momota-local-711-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner momota-single__k__single-3VGwAjm9cX-inner momota-local-711-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
											<div class="position-relative wp-block-kubio-column__align momota-single__k__single-3VGwAjm9cX-align momota-local-711-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
												<?php the_content(); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container momota-single__k__single-1uGRU27HVz-container momota-local-712-container gutters-row-lg-0 gutters-row-v-lg-1 gutters-row-md-0 gutters-row-v-md-1 gutters-row-0 gutters-row-v-1" data-kubio="kubio/row">
								<div class="position-relative wp-block-kubio-row__inner momota-single__k__single-1uGRU27HVz-inner momota-local-712-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-start justify-content-md-start justify-content-start gutters-col-lg-0 gutters-col-v-lg-1 gutters-col-md-0 gutters-col-v-md-1 gutters-col-0 gutters-col-v-1">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container momota-single__k__single-K4Akm2YNqS-container momota-local-713-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner momota-single__k__single-K4Akm2YNqS-inner momota-local-713-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-3 h-px-md-0 v-inner-md-3 h-px-0 v-inner-3">
											<div class="position-relative wp-block-kubio-column__align momota-single__k__single-K4Akm2YNqS-align momota-local-713-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
												<p class="wp-block wp-block-kubio-text  position-relative wp-block-kubio-text__text momota-single__k__single-1pwRcGAnh-text momota-local-714-text" data-kubio="kubio/text">
													<?php esc_html_e('TAGS', 'momota'); ?>
												</p>
												<div class="wp-block wp-block-kubio-post-tags  position-relative wp-block-kubio-post-tags__container momota-single__k__single-tlSt_AyBi-container momota-local-715-container kubio-post-tags-container" data-kubio="kubio/post-tags">
													<div class="position-relative wp-block-kubio-post-tags__placeholder momota-single__k__single-tlSt_AyBi-placeholder momota-local-715-placeholder kubio-post-tags-placeholder"></div>
													<div class="position-relative wp-block-kubio-post-tags__tags momota-single__k__single-tlSt_AyBi-tags momota-local-715-tags">
														<?php momota_tags_list(__('No tags', 'momota')); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container momota-single__k__oBH0ABWoeL-container momota-local-716-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
								<div class="position-relative wp-block-kubio-row__inner momota-single__k__oBH0ABWoeL-inner momota-local-716-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container momota-single__k__wETEbWZUNc-container momota-local-717-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner momota-single__k__wETEbWZUNc-inner momota-local-717-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
											<div class="position-relative wp-block-kubio-column__align momota-single__k__wETEbWZUNc-align momota-local-717-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
												<p class="wp-block wp-block-kubio-text  position-relative wp-block-kubio-text__text momota-single__k__single-1pwRcGAnh-text momota-local-718-text" data-kubio="kubio/text">
													<?php esc_html_e('CATEGORIES', 'momota'); ?>
												</p>
												<div class="wp-block wp-block-kubio-post-categories  position-relative wp-block-kubio-post-categories__container momota-single__k__up5pQ_Cww-container momota-local-719-container kubio-post-categories-container" data-kubio="kubio/post-categories">
													<div class="position-relative wp-block-kubio-post-categories__placeholder momota-single__k__up5pQ_Cww-placeholder momota-local-719-placeholder kubio-post-categories-placeholder"></div>
													<div class="position-relative wp-block-kubio-post-categories__tags momota-single__k__up5pQ_Cww-tags momota-local-719-tags">
														<?php momota_categories_list(__('No category', 'momota')); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php if(momota_has_pagination()): ?>
							<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container momota-single__k__single-nqLiVZCaYo-container momota-local-720-container gutters-row-lg-0 gutters-row-v-lg-3 gutters-row-md-0 gutters-row-v-md-3 gutters-row-0 gutters-row-v-3" data-kubio="kubio/query-pagination">
								<div class="position-relative wp-block-kubio-query-pagination__inner momota-single__k__single-nqLiVZCaYo-inner momota-local-720-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-3 gutters-col-md-0 gutters-col-v-md-3 gutters-col-0 gutters-col-v-3">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container momota-single__k__single-3ndM77FkZV-container momota-local-721-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner momota-single__k__single-3ndM77FkZV-inner momota-local-721-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
											<div class="position-relative wp-block-kubio-column__align momota-single__k__single-3ndM77FkZV-align momota-local-721-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
												<?php if(momota_has_pagination_button(true)): ?>
												<div class="position-relative wp-block-kubio-pagination-nav-button__spacing momota-single__k__ELgmeRXRD--spacing momota-local-722-spacing">
													<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer momota-single__k__ELgmeRXRD--outer momota-local-722-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
														<a class="position-relative wp-block-kubio-pagination-nav-button__link momota-single__k__ELgmeRXRD--link momota-local-722-link h-w-100 h-global-transition" href="<?php momota_get_navigation_button_link(true); ?>">
															<span class="position-relative wp-block-kubio-pagination-nav-button__text momota-single__k__ELgmeRXRD--text momota-local-722-text kubio-inherit-typography">
																<?php esc_html_e('Previous', 'momota'); ?>
															</span>
														</a>
													</span>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container momota-single__k__single-mMPMCQqWfs-container momota-local-723-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner momota-single__k__single-mMPMCQqWfs-inner momota-local-723-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
											<div class="position-relative wp-block-kubio-column__align momota-single__k__single-mMPMCQqWfs-align momota-local-723-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
												<?php if(momota_has_pagination_button()): ?>
												<div class="position-relative wp-block-kubio-pagination-nav-button__spacing momota-single__k__ELgmeRXRD--spacing momota-local-724-spacing">
													<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer momota-single__k__ELgmeRXRD--outer momota-local-724-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
														<a class="position-relative wp-block-kubio-pagination-nav-button__link momota-single__k__ELgmeRXRD--link momota-local-724-link h-w-100 h-global-transition" href="<?php momota_get_navigation_button_link(); ?>">
															<span class="position-relative wp-block-kubio-pagination-nav-button__text momota-single__k__ELgmeRXRD--text momota-local-724-text kubio-inherit-typography">
																<?php esc_html_e('Next', 'momota'); ?>
															</span>
														</a>
													</span>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endif; ?>
							<div class="wp-block wp-block-kubio-post-comments kubio-migration--1 position-relative wp-block-kubio-post-comments__commentsContainer momota-single__k__single-s5UQRGEAN-commentsContainer momota-local-725-commentsContainer" data-kubio="kubio/post-comments">
								<?php momota_post_comments(array (
  'none' => __('No responses yet', 'momota'),
  'one' => __('One response', 'momota'),
  'multiple' => __('{COMMENTS-COUNT} Responses', 'momota'),
  'disabled' => __('Comments are closed', 'momota'),
  'avatar_size' => __('32', 'momota'),
)); ?>
							</div>
							<div class="wp-block wp-block-kubio-post-comments-form  position-relative wp-block-kubio-post-comments-form__container momota-single__k__single-oXoikmHxB-container momota-local-726-container" data-kubio="kubio/post-comments-form">
								<?php comment_form(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
