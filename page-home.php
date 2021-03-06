<?php
/*
 Template Name: Home Page
*/
?>

<?php get_header(); ?>
<main role="main">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="home" role="article">

				<section class="section portfolio">
					<?php $query = new WP_Query( array( 'category_name' => 'portfolio') ); ?>
					<?php while ( $query->have_posts() ) { ?>
						<?php $query->the_post(); ?>
						<div class="slide <?php echo $post->post_name ?>" style="background: url(<?php the_field('case_head'); ?>) center center no-repeat">
							<div class="frame link">
								<h2 class="title">
									<span><?php the_title(); ?></span>
									<div class="sub"><?php the_field('case_meta1'); ?></div>
								</h2>
								<a class="more" href="<?php echo get_the_permalink() ?>" rel="bookmark">Подробнее...</a>
							</div>
						</div>
						<?php } ?>
					<?php wp_reset_postdata(); ?>
					
          <div class="fp-controlArrow fp-prev start">
						<?php include( 'library/svg/arrow_up.svg' ); ?>
					</div>
					<div class="fp-controlArrow fp-next start">
						<?php include( 'library/svg/arrow_down.svg' ); ?>
					</div>
					<div class="fp-verticalArrow fp-down start">
						<?php include( 'library/svg/arrow_down.svg' ); ?>
					</div>
				</section>

				<section class="section services">
					<div class="container">
						<?php the_content(); ?>
					</div>
				</section>

				<section class="section team" style="background: url(/wp-content/uploads/team_bwo.jpg) center center no-repeat">
					<div class="wrap">
						<div class="frame">
							<h3 class="ui title">Мы
								<div class="sub title">Знакомьтесь</div>
							</a>
						</div>
					</div>
				</section>

				<section class="section contact">
					<div class="slide contact" style="background: url(/wp-content/uploads/contact_circle.jpg) center center no-repeat">
							<div class="container">
						  	<div class="six column">
									<div class="card contact">
	  								<div class="content">
	    								<a class="title" href="tel:+78124020029">+7 (812) 402-00-29</a>
	    								<div class="description">
												<p>Санкт-Петербург</p>
												<p>Каменноостровский пр. 12 А 3-Н</p>
												<a href="mailto:office@kira-all.ru">office@kira-all.ru</p>
												<a class="fb" href="https://www.facebook.com/kiraallofficial" target="_blank" onclick="yaCounter38590155.reachGoal('fb'); return true;">facebook</a>
	    								</div>
										</div>
	  							</div>
								</div>
								<div class="six column">
									<div class="card contact big">
										<div class="content">
											<div class="title">Контакты</div>
											<div class="meta">поговорим об этом?</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				<div class="slide map" style="background: url(/wp-content/uploads/contact_map.jpg) center center no-repeat">
					<div class="wrap">
						<div class="frame">
							<div class="ui title">Мы здесь
								<div class="sub title">Каменноостровский пр. 12 А 3-Н</div>
							</div>
						</div>
					</div>
				</div>
		
				<div class="slide feedback" style="background: url(/wp-content/uploads/contact_form.jpg) center center no-repeat">
					<div class="container">
						<div class="six column">
							<?php echo do_shortcode( '[ninja_form id=1]' ); ?>
						</div>
						<div class="six column">
							<div class="ui card feedback big">
								<div class="content">
									<div class="title">Обратная связь</div>
									<div class="meta">оставить заявку и задать вопросы</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>

	</article>

	<div class="fp-verticalArrow fp-up">
		<?php include( 'library/svg/arrow_up.svg' ); ?>
	</div>
	<div class="fp-verticalArrow fp-down">
		<?php include( 'library/svg/arrow_down.svg' ); ?>
	</div>

	<?php /*
	<div class="ui help hidden">
		<div class="mouse">
			<svg xmlns="http://www.w3.org/2000/svg" width="80px" height="80px" viewBox="0 0 64 64">
    		<path d="M32,16c-4.971,0-9,4.029-9,9v14c0,4.971,4.029,9,9,9c4.971,0,9-4.029,9-9V25C41,20.029,36.971,16,32,16z M39,39c0,3.866-3.134,7-7,7s-7-3.134-7-7V25c0-3.866,3.134-7,7-7s7,3.134,7,7V39z M32,21c-0.552,0-1,0.448-1,1v5c0,0.553,0.448,1,1,1c0.553,0,1-0.447,1-1v-5C33,21.448,32.553,21,32,21z" />
			</svg>
		</div>
		<div class="keyboard">
			<div class="keyboard-content">
				<i class="keyboard-bg">
					<svg xmlns="http://www.w3.org/2000/svg" width="65" height="44" viewBox="0 0 65 44">
						<path class="keyboard-button keyboard-button-down" fill-rule="evenodd" clip-rule="evenodd" fill="#5F3FFF" d="M38.004,44H26.997C23.694,44,21,41.305,21,37.992V27.008 C21,23.694,23.694,21,26.997,21h11.007C41.314,21,44,23.694,44,27.008v10.984C44,41.305,41.314,44,38.004,44z M38.004,42 c2.201,0,3.998-1.796,3.998-4.008V27.008c0-2.213-1.797-4.008-3.998-4.008H26.997c-2.211,0-3.998,1.788-3.998,4v11 c0,2.212,1.787,4,3.998,4H38.004z M35.229,30l-2.797,6.566L29.635,30H35.229z"></path>
						<path class="keyboard-button keyboard-button-left" fill-rule="evenodd" clip-rule="evenodd" fill="#5F3FFF" d="M0,38.004V26.997C0,23.694,2.695,21,6.008,21h10.985 C20.306,21,23,23.694,23,26.997v11.007C23,41.314,20.306,44,16.993,44H6.008C2.695,44,0,41.314,0,38.004z M2,38.004 c0,2.201,1.796,3.998,4.008,3.998h10.985c2.212,0,4.008-1.797,4.008-3.998V26.997c0-2.211-1.789-3.998-4-3.998H6 c-2.212,0-4,1.787-4,3.998V38.004z M14,35.229l-6.566-2.797L14,29.635V35.229z"></path>
						<path class="keyboard-button keyboard-button-top" fill-rule="evenodd" clip-rule="evenodd" fill="#5F3FFF" d="M44,6.008v10.984C44,20.306,41.314,23,38.004,23H26.997 C23.694,23,21,20.306,21,16.992V6.008C21,2.695,23.694,0,26.997,0h11.007C41.314,0,44,2.695,44,6.008z M26.997,2 c-2.211,0-3.998,1.788-3.998,4v11c0,2.212,1.787,4,3.998,4h11.007c2.201,0,3.998-1.795,3.998-4.008V6.008 C42.002,3.796,40.205,2,38.004,2H26.997z M29.635,14l2.797-6.566L35.229,14H29.635z"></path>
						<path class="keyboard-button keyboard-button-right" fill-rule="evenodd" clip-rule="evenodd" fill="#5F3FFF" d="M58.992,44H48.008C44.694,44,42,41.314,42,38.004V26.997 C42,23.694,44.694,21,48.008,21h10.984C62.305,21,65,23.694,65,26.997v11.007C65,41.314,62.305,44,58.992,44z M63,26.997 c0-2.211-1.788-3.998-4-3.998H48c-2.212,0-4,1.787-4,3.998v11.007c0,2.201,1.795,3.998,4.008,3.998h10.984 c2.212,0,4.008-1.797,4.008-3.998V26.997z M51,29.635l6.566,2.797L51,35.229V29.635z"></path>
					</svg>
				</i>
				<i class="keyboard-overlay">
					<svg xmlns="http://www.w3.org/2000/svg" width="65" height="44" viewBox="0 0 65 44">
						<path class="keyboard-button keyboard-button-down" fill-rule="evenodd" clip-rule="evenodd" fill="#5F3FFF" d="M38.004,44H26.997C23.694,44,21,41.305,21,37.992V27.008 C21,23.694,23.694,21,26.997,21h11.007C41.314,21,44,23.694,44,27.008v10.984C44,41.305,41.314,44,38.004,44z M38.004,42 c2.201,0,3.998-1.796,3.998-4.008V27.008c0-2.213-1.797-4.008-3.998-4.008H26.997c-2.211,0-3.998,1.788-3.998,4v11 c0,2.212,1.787,4,3.998,4H38.004z M35.229,30l-2.797,6.566L29.635,30H35.229z"></path>
						<path class="keyboard-button keyboard-button-left" fill-rule="evenodd" clip-rule="evenodd" fill="#5F3FFF" d="M0,38.004V26.997C0,23.694,2.695,21,6.008,21h10.985 C20.306,21,23,23.694,23,26.997v11.007C23,41.314,20.306,44,16.993,44H6.008C2.695,44,0,41.314,0,38.004z M2,38.004 c0,2.201,1.796,3.998,4.008,3.998h10.985c2.212,0,4.008-1.797,4.008-3.998V26.997c0-2.211-1.789-3.998-4-3.998H6 c-2.212,0-4,1.787-4,3.998V38.004z M14,35.229l-6.566-2.797L14,29.635V35.229z"></path>
						<path class="keyboard-button keyboard-button-top" fill-rule="evenodd" clip-rule="evenodd" fill="#5F3FFF" d="M44,6.008v10.984C44,20.306,41.314,23,38.004,23H26.997 C23.694,23,21,20.306,21,16.992V6.008C21,2.695,23.694,0,26.997,0h11.007C41.314,0,44,2.695,44,6.008z M26.997,2 c-2.211,0-3.998,1.788-3.998,4v11c0,2.212,1.787,4,3.998,4h11.007c2.201,0,3.998-1.795,3.998-4.008V6.008 C42.002,3.796,40.205,2,38.004,2H26.997z M29.635,14l2.797-6.566L35.229,14H29.635z"></path>
						<path class="keyboard-button keyboard-button-right" fill-rule="evenodd" clip-rule="evenodd" fill="#5F3FFF" d="M58.992,44H48.008C44.694,44,42,41.314,42,38.004V26.997 C42,23.694,44.694,21,48.008,21h10.984C62.305,21,65,23.694,65,26.997v11.007C65,41.314,62.305,44,58.992,44z M63,26.997 c0-2.211-1.788-3.998-4-3.998H48c-2.212,0-4,1.787-4,3.998v11.007c0,2.201,1.795,3.998,4.008,3.998h10.984 c2.212,0,4.008-1.797,4.008-3.998V26.997z M51,29.635l6.566,2.797L51,35.229V29.635z"></path>
					</svg>
				</i>
			</div>
		</div>
	</div>
	*/ ?>

	<?php endwhile; else : ?>

			<article id="post-not-found" class="hentry cf">
					<div class="article-title">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
				</div>
					<section class="entry-content">
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
				</section>
				<footer class="article-footer">
						<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
				</footer>
			</article>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
