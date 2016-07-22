<?php
/*
 Template Name: Home Page
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

						<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


								<section class="cf" itemprop="articleBody">

									<div id="fullpage">
										<div class="section" id="section0">
											<?php for ($i=0; $i < 11 ; $i++) { ?>
												<?php if( get_field('case_'.$i.'_image') ) { ?>
													<div class="slide" id="slide<?php echo $i; ?>"
															 style="background-image: url(<?php the_field('case_'.$i.'_image'); ?>);">
														<a class="case-link" href="<?php the_field('case_'.$i.'_link'); ?>">
															<?php the_field('case_'.$i.'_title'); ?>
														</a>
													</div>
												<?php } ?>
											<?php } ?>
										</div>
										<div class="section " id="section1">
											<h1>Услуги</h1>
										</div>
										<div class="section" id="section2">
											<h1>Команда</h1>
										</div>
										<div class="section" id="section3">
											<h1>Контакты</h1>
										</div>
									</div>

									<?php the_content(); ?>

								</section>

								<footer class="article-footer">

								</footer>

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

				</div>

			</div>

<?php get_footer(); ?>
