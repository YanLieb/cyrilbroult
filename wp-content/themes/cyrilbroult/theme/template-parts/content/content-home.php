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
	</div>
	<div class="swiper-controls">
		<div class="swiper-pagination"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
	<div class="slider-content">
		<h2><?php echo $text['title']; ?></h2>
		<h1><?php echo $text['subtitle']; ?></h1>
		<a type="button" href="<?php echo $text['button']['link']; ?>"
		   target="_blank"><?php echo $text['button']['title']; ?></a>
	</div>
</section>


<section id="home-reassurances" class="swiper">
	<div class="container swiper-wrapper">
		<?php if ( get_field( 'home_reassurances' ) ) {
			$reassurances = get_field( 'home_reassurances' );
		};
		$i = 0;
		foreach ( $reassurances as $key => $reassurance ) : ?>
				<div id="<?php echo $key; ?>" class="reassurance swiper-slide">
					<?php $i++;?>
					<img src="<?php echo $reassurance["icon_$i"]['url']; ?>"
						 alt="<?php echo $reassurance["icon_$i"]['name']; ?>"
						 width="80" height="80" loading="lazy">
					<p><?php echo $reassurance['text']; ?></p>
				</div>
			<?php
		endforeach; ?>
	</div>
	<div class="swiper-controls">
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

<?php
