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

					<div class="slide <?php echo $post->post_name ?>" id="slide-<?php echo $post->post_name ?>" data-bs="<?php the_field('case_head'); ?>">
						<div class="wrap">
							<header class="frame">
								<div class="ui header"><?php the_title(); ?>
			            <div class="sub header"><?php the_field('case_meta1'); ?></div>
			          </div>
                <a class="more" href="<?php echo get_the_permalink() ?>" rel="bookmark">Подробнее...</a>
							</header>
						</div>
					</div>

					<?php } ?>
					<?php wp_reset_postdata(); ?>

				</section>

				<section class="section services">

					<div class="ui three column doubling stackable grid container">

						<div class="two wide column">
							<div class="ui card pr">
  							<div class="content">
    							<div class="header">PR</div>
    							<div class="description">
      							<p>О вас будут говорить так, как вы хотите.</p>
    							</div>
  							</div>
							</div>
						</div>

						<div class="two wide column">
							<div class="ui card brand">
  							<div class="content">
    							<div class="header">Branding</div>
    							<div class="description">
      							<p>Вы будете похожи на себя, а другие захотят быть похожими на вас.</p>
    							</div>
  							</div>
							</div>
						</div>

						<div class="two wide column">
							<div class="ui card adv">
  							<div class="content">
    							<div class="header">Реклама</div>
    							<div class="description">
      							<p>Вы хотите рассказать о своем продукте – мы знаем, как сделать, чтобы вас слушали.</p>
    							</div>
  							</div>
							</div>
						</div>

						<div class="two wide column">
							<div class="ui card digital">
  							<div class="content">
    							<div class="header">Digital</div>
    							<div class="description">
      							<p>Сайты, социальные сети, поисковое продвижение, контент маркетинг, вот это вот всё.</p>
    							</div>
  							</div>
							</div>
						</div>

						<div class="two wide column"></div>

						<div class="six wide column">
							<div class="ui card big">
  							<div class="content">
    							<div class="header">Услуги</div>
									<div class="meta pr">PR</div>
    							<div class="description pr">
      							<p>Создаем и реализуем информационные поводы, инициируем публикации, организуем выступления, готовим интервью etc. В выборе инструментов опираемся на PR стратегию. У вас нет стратегии? Мы  разработаем!</p>
    							</div>
									<div class="meta brand">Branding</div>
    							<div class="description brand">
      							<p>Создаем бренды с нуля, проводим ребрендинг, пишем бренд-платформы, придумываем вербальную айдентику, логотипы, фирменные стили, чек-листы для текстов. Опираемся на пожелания заказчика, специфику продукта и предпочтения целевой аудитории.</p>
    							</div>
									<div class="meta adv">Реклама</div>
    							<div class="description adv">
      							<p>Разработаем вам новую Big idea или будем действовать в рамках готовой. Создадим рекламный креатив, заточенный под вашу целевую аудиторию. Подберем носители, подготовим медиа-план, снимем, смонтируем, сверстаем, напечатаем – и запустим вашу рекламу в пространство и время! Работаем с традиционными носителями, придумываем эмбиент. Никогда не воруем креатив!</p>
    							</div>
									<div class="meta digital">Digital</div>
    							<div class="description digital">
      							<p>Создадим группу и наполним ее органикой, изгоним ботов, придумаем интересный контент и произведем его, настроим контекст и таргет, поддержим комментарийную программу, разработаем механики активации и реализуем, определим KPI и достигнем результата.</p>
    							</div>
  							</div>
							</div>
						</div>
					</div>

				</section>

				<section class="section team" data-bs="/wp-content/uploads/team_bwo.jpg">

					<div class="wrap">
						<header class="frame">
							<h3 class="ui header">Мы
								<div class="sub header">Знакомьтесь</div>
							</a>
						</header>
					</div>

				</section>

				<section class="section contact">

					<div class="slide contact" data-bs="/wp-content/uploads/contact_circle.jpg">

							<div class="ui doubling stackable grid container">
						  	<div class="eight wide column">

									<div class="ui card">
	  								<div class="content">
	    								<div class="header">
												<a href="tel:+78124020029">+7 (812) 402-00-29</a>
											</div>
	    								<div class="description">
												<p>Санкт-Петербург</p>
												<p>Каменноостровский пр. 12 А 3-Н</p>
												<a href="mailto:office@kira-all.ru">office@kira-all.ru</p>
												<a class="fb" href="https://www.facebook.com/kiraallofficial" target="_blank" onclick="yaCounter38590155.reachGoal('fb'); return true;">facebook</a>
	    								</div>
										</div>
	  							</div>

								</div>
								<div class="eight wide column">

									<div class="ui card big">
										<div class="content">
											<div class="header">Контакты</div>
											<div class="meta">поговорим об этом?</div>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>

				<div class="slide map" data-bs="/wp-content/uploads/contact_map.jpg">

					<div class="wrap">
						<header class="frame">
							<div class="ui header">Мы здесь
								<div class="sub header">Каменноостровский пр. 12 А 3-Н</div>
							</a>
						</header>
					</div>

				</div>

				<div class="slide feedback" data-bs="/wp-content/uploads/contact_form.jpg">

							<div class="ui doubling stackable grid container">
								<div class="eight wide column">

									<div class="ui card">
										<div class="content">
											<div class="header"></div>
											<div class="description">
												<?php echo do_shortcode( '[contact-form-7 id="1744" title="Обратная связь"]' ); ?>
											</div>
										</div>
									</div>

								</div>
								<div class="eight wide column">

									<div class="ui card big">
										<div class="content">
											<div class="header">Обратная связь</div>
											<div class="meta">оставить заявку и задать вопросы</div>
										</div>
									</div>

								</div>
							</div>

					</div>

				</section>

			<?php //the_content(); ?>

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
					<header class="article-header">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
				</header>
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
