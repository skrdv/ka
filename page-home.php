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

					<?php $query = new WP_Query( array( 'category_name' => 'portfolio', 'orderby' => 'rand' ) ); ?>
					<?php while ( $query->have_posts() ) { ?>
					<?php $query->the_post(); ?>

					<div class="slide <?php echo $post->post_name ?>" id="slide-<?php echo $post->post_name ?>" data-bs="<?php the_field('case_head'); ?>">
						<div class="wrap">
							<header class="frame">
								<a class="ui header" href="<?php echo get_the_permalink() ?>" rel="bookmark"><?php the_title(); ?>
			            <div class="sub header"><?php the_field('case_meta1'); ?></div>
			          </a>
							</header>
						</div>
					</div>

					<?php } ?>
					<?php wp_reset_postdata(); ?>

				</section>
				<section class="section services">

					<div class="ui container">
						<div class="ui grid">
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
						<div class="two wide column">

						</div>
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

					</div>

				</section>

				<?php /*
				<section class="section team">

					<div class="slide team-1">
						<header class="frame">
							<h3 class="ui header">Мы
								<div class="sub header">Знакомтесь</div>
							</a>
						</header>
					</div>

					<div class="slide team-2">
						<header class="frame">
							<h3 class="ui header">Мы
								<div class="sub header">Знакомтесь</div>
							</a>
						</header>
					</div>

				</section>
				*/ ?>

				<section class="section contact">

					<div class="slide contact" data-bs="/wp-content/uploads/contact_circle.jpg">

						<div class="ui container">
							<div class="ui grid">
						  	<div class="six wide column">

									<div class="ui card">
	  								<div class="content">
	    								<div class="header">
												<a href="tel:+78124020029">+7 (812) 402-00-29</a>
											</div>
	    								<div class="description">
												<p>Санкт-Петербург</p>
												<p>Каменноостровский пр. 12 А 3-Н</p>
												<a href="mailto:office@kira-all.ru">office@kira-all.ru</p>
												<a class="fb" href="https://www.facebook.com/kiraallru" target="_blank">facebook</a>
	    								</div>
										</div>
	  							</div>

								</div>
								<div class="ten wide column">

									<div class="ui card big">
										<div class="content">
											<div class="header">Контакты</div>
											<div class="meta">поговорим от этом?</div>
										</div>
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


				<div class="slide feedback hidden" data-bs="/wp-content/uploads/contact_form.jpg">

						<div class="ui container">
							<div class="ui grid">
								<div class="six wide column">

									<div class="ui card">
										<div class="content">
											<div class="header"></div>
											<div class="description">
												<?php echo do_shortcode( '[contact-form-7 id="1744" title="Обратная связь"]' ); ?>
											</div>
										</div>
									</div>

								</div>
								<div class="ten wide column">

									<div class="ui card big">
										<div class="content">
											<div class="header">Обратная связь</div>
											<div class="meta">Рекламное агенство</div>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>



				</section>

			<?php the_content(); ?>

	</article>

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
