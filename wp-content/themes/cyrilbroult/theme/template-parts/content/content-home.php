<section id="home-slider">

	<?php
		if ( get_field( 'home_slider' ) ) :
			$home_slider = get_field( 'home_slider' );
			$text        = $home_slider['text'];
			$images      = $home_slider['slider'];
		endif;
	?>

	<div class="swiper">
		<div class="swiper-wrapper">
			<?php foreach ( $images as $image ) : ?>
				<div class="swiper-slide">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" loading="lazy">
					<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="swiper-pagination"></div>
	</div>
	<div class="slider-content">
		<h2 class="title"><?php echo $text['title']; ?></h2>
		<h1 class="subtitle"><?php echo $text['subtitle']; ?></h1>
		<a type="button" href="<?php echo $text['button']['link']; ?>"
			 target="_blank"><?php echo $text['button']['title']; ?></a>
	</div>
	<a href="#home-reassurances" class="scroll-arrow"><img src="<?php echo get_template_directory_uri(); ?>/src/img/arrow-down-white.svg" alt="white arrow down" width="40" height="40"></a>
</section>


<section id="home-reassurances">
	<div class="container swiper">
		<div class="swiper-wrapper">
			<?php if ( get_field( 'home_reassurances' ) ) {
				$reassurances = get_field( 'home_reassurances' );
			};
				$i = 0;
				foreach ( $reassurances as $key => $reassurance ) : ?>
					<div id="<?php echo $key; ?>" class="reassurance swiper-slide">
						<?php $i ++; ?>
						<img src="<?php echo $reassurance["icon_$i"]['url']; ?>"
								 alt="<?php echo $reassurance["icon_$i"]['name']; ?>"
								 width="80" height="80" loading="lazy">
						<p><?php echo $reassurance['text']; ?></p>
					</div>
				<?php
				endforeach; ?>
		</div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>

</section>


<section id="home-presentation">
	<?php
		if ( get_field( 'home_presentation' ) ) {
			$home_presentation = get_field( 'home_presentation' );
			$block_1           = $home_presentation['block-1'];
			$block_2           = $home_presentation['block-2'];
		}
		foreach ( $home_presentation as $key => $block ) :
			?>
			<div id="block-<?php echo $key; ?>" class="presentation-block">
				<div class="text">
					<p><?php echo $block['description']; ?></p>
				</div>
				<div class="image">
					<img src="<?php echo $block['image']['url']; ?>" alt="<?php echo $block['image']['alt'];; ?>"
							 loading="lazy">
				</div>
			</div>
		<?php endforeach; ?>
</section>

<section id="home-testimonials">
	<div class="container swiper">
		<div class="swiper-wrapper">
			<?php if ( get_field( 'home_testimonials' ) ) {
				$testimonials = get_field( 'home_testimonials' );
			};
				foreach ( $testimonials as $key => $testimonial ) : ?>
					<div class="swiper-slide <?php echo $key; ?>">
						<div class="quote">
							<?php echo $testimonial["quote"]; ?>
						</div>
						<div class="author">
							<?php echo $testimonial["author"]; ?>
						</div>
					</div>
				<?php endforeach; ?>
		</div>
		<div class="swiper-pagination"></div>
	</div>
</section>

<?php if ( get_field( 'home_latest_news' ) ) {
	$home_latest_news = get_field( 'home_latest_news' );
} ?>
<section id="home-latest-news" style="--bg-image: url(<?php echo $home_latest_news['background_image']['url']; ?>);">
	<div class=" section-wrapper container">
		<div class="section-header">
			<h2><?php echo $home_latest_news['title']; ?></h2>
			<div class="subtitle"><?php echo $home_latest_news['description']; ?></div>
		</div>
		<div class="section-body swiper">
			<div class="swiper-wrapper">
				<?php
					$args = array(
						'post_type'      => 'post',
						'posts_per_page' => 3,
						'orderby'        => 'date',
						'order'          => 'DESC',
					);

					$query = new WP_Query( $args );

					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) :
							$query->the_post(); ?>
							<div class="post-miniature swiper-slide">
								<a href="<?php the_permalink(); ?>">
									<div class="post-title">
										<h3><?php the_title(); ?></h3>
									</div>
									<div class="post-thumbnail">
										<?php the_post_thumbnail( 'large' ); ?>
									</div>
								</a>
								<div class="post-excerpt">
									<p><?php the_excerpt(); ?></p>
								</div>
							</div>
						<?php
						endwhile;
					else :
						echo 'No posts found.';
					endif;

					wp_reset_postdata();

				?>
			</div>
		</div>
	</div>
</section>
