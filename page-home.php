<?php
/*
 Template Name: Home Page
*/
?>

<?php get_header(); ?>

<main id="main" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="fullpage" role="article">

				<section class="section portfolio">

					<?php $query = new WP_Query( array( 'category_name' => 'portfolio' ) ); ?>
					<?php while ( $query->have_posts() ) { ?>
					<?php $query->the_post(); ?>

					<div class="slide <?php echo $post->post_name ?>" style="background-image: url('<?php the_field('case_head'); ?>');">
						<header class="frame">
							<a class="ui header" href="<?php echo get_the_permalink() ?>" rel="bookmark"><?php the_title(); ?>
		            <div class="sub header"><?php the_field('case_meta1'); ?></div>
		          </a>
						</header>
					</div>

					<?php } ?>
					<?php wp_reset_postdata(); ?>

				</section>
				<section class="section services">

					<div class="ui grid">
					  <div class="two wide column">

							<div class="ui card">
  							<div class="content">
    							<div class="header">PR</div>
    							<div class="description">
      							<p>О вас будут говорить правильно.</p>
    							</div>
  							</div>
							</div>

						</div>
						<div class="two wide column">

							<div class="ui card">
  							<div class="content">
    							<div class="header">Branding</div>
    							<div class="description">
      							<p>Вы будите похожи на себя, а остальные захотят быть похожими на вас.</p>
    							</div>
  							</div>
							</div>

						</div>
						<div class="two wide column">

							<div class="ui card">
  							<div class="content">
    							<div class="header">Реклама</div>
    							<div class="description">
      							<p>Вы хотите рассказать о своем продукте, а мы знаем, как сделать так, чтобы вас слушали.</p>
    							</div>
  							</div>
							</div>

						</div>
						<div class="two wide column">

							<div class="ui card">
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

							<div class="ui card">
  							<div class="content">
    							<div class="header">Услуги</div>
									<div class="meta">Branding</div>
    							<div class="description">
      							<p>Создаем бренды с нуля, делаем ребрендинги, пишем бренд-платформы, придумываем вербальную айдентику, логотипы, фирменные стили, чек-листы для текстов. Опираемся на пожелания заказчика, специфику продукта и пожелания целевой аудитории.</p>
    							</div>
  							</div>
							</div>

						</div>
					</div>

				</section>

				<section class="section team">
					<h1>Команда</h1>
				</section>

				<section class="section contact">
					<h1>Контакты</h1>
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
