<?php
/**
 * Template part for displaying home page content
 *
 * @package cyrilbroult
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$home_slider = function_exists('get_field') ? get_field('home_slider') : null;
$text        = ! empty($home_slider['text']) ? $home_slider['text'] : array();
$images      = ! empty($home_slider['slider']) && is_array($home_slider['slider']) ? $home_slider['slider'] : array();
?>
<section id="home-slider">
    <div class="swiper">
        <div class="swiper-wrapper">
            <?php foreach ($images as $image) : ?>
            <div class="swiper-slide">
                <img src="<?php echo ! empty($image['url']) ? esc_url($image['url']) : ''; ?>" alt="<?php echo ! empty($image['alt']) ? esc_attr($image['alt']) : ''; ?>" loading="lazy">
                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="slider-content">
        <?php if ( ! empty($text['title']) ) : ?>
            <h2 class="title"><?php echo esc_html($text['title']); ?></h2>
        <?php endif; ?>
        <?php if ( ! empty($text['subtitle']) ) : ?>
            <h1 class="subtitle"><?php echo esc_html($text['subtitle']); ?></h1>
        <?php endif; ?>
        <?php if ( ! empty($text['button']) ) : ?>
            <a type="button" href="<?php echo ! empty($text['button']['link']) ? esc_url($text['button']['link']) : '#'; ?>"
                target="_blank" rel="noopener noreferrer"><?php echo ! empty($text['button']['title']) ? esc_html($text['button']['title']) : ''; ?></a>
        <?php endif; ?>
    </div>
    <a href="#home-reassurances" class="scroll-arrow"><img
            src="<?php echo esc_url( get_template_directory_uri() . '/src/img/arrow-down-white.svg' ); ?>" alt="<?php esc_attr_e('white arrow down', 'cyrilbroult'); ?>"
            width="40" height="40"></a>
</section>


<?php
$reassurances = function_exists('get_field') ? get_field('home_reassurances') : null;
$reassurances = is_array($reassurances) ? $reassurances : array();
?>
<section id="home-reassurances">
    <div class="container swiper">
        <div class="swiper-wrapper">
            <?php
			$i = 0;
			foreach ($reassurances as $key => $reassurance) :
				$i++;
				$icon_data = ! empty($reassurance["icon_$i"]) ? $reassurance["icon_$i"] : array();
				$icon_url  = ! empty($icon_data['url']) ? esc_url($icon_data['url']) : '';
				$icon_name = ! empty($icon_data['name']) ? esc_attr($icon_data['name']) : '';
				$text_val  = ! empty($reassurance['text']) ? wp_kses_post($reassurance['text']) : '';
			?>
            <div id="<?php echo esc_attr($key); ?>" class="reassurance swiper-slide">
                <img src="<?php echo $icon_url; ?>"
                    alt="<?php echo $icon_name; ?>" width="80" height="80" loading="lazy">
                <p><?php echo $text_val; ?></p>
            </div>
            <?php
			endforeach; ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

</section>


<?php
$home_presentation = function_exists('get_field') ? get_field('home_presentation') : null;
$home_presentation = is_array($home_presentation) ? $home_presentation : array();
?>
<section id="home-presentation">
    <?php foreach ($home_presentation as $key => $block) :
        $desc    = ! empty($block['description']) ? wp_kses_post($block['description']) : '';
        $img_url = ! empty($block['image']['url']) ? esc_url($block['image']['url']) : '';
        $img_alt = ! empty($block['image']['alt']) ? esc_attr($block['image']['alt']) : '';
    ?>
    <div id="block-<?php echo esc_attr($key); ?>" class="presentation-block">
        <div class="text">
            <p><?php echo $desc; ?></p>
        </div>
        <div class="image">
            <img src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>"
                loading="lazy">
        </div>
    </div>
    <?php endforeach; ?>
</section>

<?php
$testimonials = function_exists('get_field') ? get_field('home_testimonials') : null;
$testimonials = is_array($testimonials) ? $testimonials : array();
?>
<section id="home-testimonials">
    <div class="container swiper">
        <div class="swiper-wrapper">
            <?php foreach ($testimonials as $key => $testimonial) :
                $quote  = ! empty($testimonial['quote']) ? wp_kses_post($testimonial['quote']) : '';
                $author = ! empty($testimonial['author']) ? esc_html($testimonial['author']) : '';
            ?>
            <div class="swiper-slide <?php echo esc_attr($key); ?>">
                <div class="quote">
                    <?php echo $quote; ?>
                </div>
                <div class="author">
                    <?php echo $author; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<?php
$home_latest_news   = function_exists('get_field') ? get_field('home_latest_news') : null;
$latest_news_bg     = ! empty($home_latest_news['background_image']['url']) ? esc_url($home_latest_news['background_image']['url']) : '';
$latest_news_title  = ! empty($home_latest_news['title']) ? esc_html($home_latest_news['title']) : '';
$latest_news_desc   = ! empty($home_latest_news['description']) ? wp_kses_post($home_latest_news['description']) : '';
?>
<section id="home-latest-news"<?php if ( $latest_news_bg ) : ?> style="--bg-image: url('<?php echo $latest_news_bg; ?>');"<?php endif; ?>>
    <div class=" section-wrapper container">
        <div class="section-header">
            <h2><?php echo $latest_news_title; ?></h2>
            <div class="subtitle"><?php echo $latest_news_desc; ?></div>
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

				$query = new WP_Query($args);

				if ($query->have_posts()) :
					while ($query->have_posts()) :
						$query->the_post(); ?>
                <div class="post-miniature swiper-slide">
                    <a href="<?php echo esc_url( get_permalink() ); ?>">
                        <div class="post-title">
                            <h3><?php the_title(); ?></h3>
                        </div>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    </a>
                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                <?php
					endwhile;
				else :
					echo '<p>' . esc_html__( 'No posts found.', 'cyrilbroult' ) . '</p>';
				endif;

				wp_reset_postdata();

				?>
            </div>
        </div>
    </div>
</section>


<section id="home-authorword">
    <div class="section-wrapper container">
        <?php the_content(); ?>
    </div>
</section>