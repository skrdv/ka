<?php get_header(); ?>

<main role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="case" role="article">

		  <section class="section case head <?php echo $post->post_name; ?>"
							 data-bs="<?php the_field('case_head'); ?>"
							 data-alt="<?php the_title(); ?> <?php the_field('case_meta1'); ?>">
					<div class="frame">
						<h2 class="title">
							<span><?php the_title(); ?></span>
							<div class="sub"><?php the_field('case_meta1'); ?></div>
						</h2>
					</div>
		  </section>

		  <section class="section case info <?php echo $post->post_name; ?>"
				data-bs="<?php the_field('case_info'); ?>"
				data-alt="<?php the_title(); ?> <?php the_field('case_meta1'); ?>">
				<div class="back"></div>
				<div class="container">
					<div class="six column">
						<div class="card info">
			        <div class="content">
			          <div class="title"><?php the_title(); ?></div>
			          <div class="meta"><?php the_field('case_meta2'); ?></div>
			          <div class="description">
			            <p><?php the_content(); ?></p>
			          </div>
			        </div>
			      </div>
					</div>
					<div class="six column">
						<button class="button hide hidden"></button>
					</div>
				</div>
				<button class="button show">Показать описание</button>
		  </section>

		  <?php for ($i=1; $i < 11; $i++) { ?>
		    <?php if( get_field('case_'.$i) ) { ?>

		      <section class="section case <?php echo $post->post_name; ?> case-<?php echo $i; ?>" data-bs="<?php the_field('case_'.$i); ?>" data-alt="<?php the_field('alt_'.$i); ?>">

		        <?php if( get_field('text_'.$i) ) { ?>
						<div class="container">
							<div class="six column">
								<div class="card case">
			            <div class="content">
			              <div class="title"><?php the_title(); ?></div>
			              <div class="meta"><?php the_field('case_meta2'); ?></div>
			              <div class="description">
			                <p><?php the_field('text_'.$i); ?></p>
			              </div>
			            </div>
			          </div>
							</div>
		        </div>
		        <?php } ?>

		      </section>

		    <?php } ?>
		  <?php } ?>

		</article>

		<div class="fp-verticalArrow fp-up">
		  <?php include( 'library/svg/arrow_up.svg' ); ?>
		</div>
		<div class="fp-verticalArrow fp-down">
		  <?php include( 'library/svg/arrow_down.svg' ); ?>
		</div>
		<div class="fp-verticalArrow fp-top">
		  <?php include( 'library/svg/arrow_up.svg' ); ?>
			<span>наверх</span>
		</div>


	<?php endwhile; ?>

	<?php else : ?>

		<article id="post-not-found" class="hentry cf">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
				</section>
				<footer class="article-footer">
						<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
				</footer>
		</article>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
