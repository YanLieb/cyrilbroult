<?php
if ( get_field( 'home_slider' ) ) :
	$home_slider = get_field( 'home_slider' );
	$text        = $home_slider['text'];
	$images      = $home_slider['slider'];
endif;
?>

	<section id="home-slider">
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
			<a type="button" href="<?php echo $text['button']['link']; ?>" target="_blank"><?php echo $text['button']['title']; ?></a>
		</div>
	</section>


<?php
echo '<pre>';
var_dump( $home_slider );
echo '</pre>';
