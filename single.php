<?php get_header(); ?>

<main role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="case" role="article">

		  <section class="section case head <?php echo $post->post_name; ?>" style="background: url(<?php the_field('case_head'); ?>) center center no-repeat;">
					<div class="frame">
						<h2 class="title">
							<span><?php the_title(); ?></span>
							<div class="sub"><?php the_field('case_meta1'); ?></div>
						</h2>
					</div>
				<?php previous_post_link('<div class="fp-controlArrow fp-next">%link<svg width="20" height="60" xmlns="http://www.w3.org/2000/svg"><path class="arrow-right" fill="rgb(35,21,32)" stroke="black" stroke-width="0" d="m19.973758,29.958522l-18.425238,-29.304412l-1.494917,0.938956l17.847211,28.384871l-17.874572,28.428114l1.49315,0.93984l18.426116,-29.304412l-0.052067,-0.032652l0.080306,-0.0503l0.00001,-0.000005z" clip-rule="evenodd" fill-rule="evenodd"  /></svg>
</div>', '', TRUE); ?>
					<?php next_post_link('<div class="fp-controlArrow fp-prev">%link<svg width="20" height="60" xmlns="http://www.w3.org/2000/svg"><path class="arrow-left" fill="rgb(35,21,32)" transform="rotate(180 10,30) " stroke="black" stroke-width="0" d="m19.973758,29.958522l-18.425238,-29.304412l-1.494917,0.938956l17.847211,28.384871l-17.874572,28.428114l1.49315,0.93984l18.426116,-29.304412l-0.052067,-0.032652l0.080306,-0.0503l0.00001,-0.000005z" clip-rule="evenodd" fill-rule="evenodd" /></svg>
</div>', '', TRUE, 0); ?>
		  </section>

		  <section class="section case info <?php echo $post->post_name; ?>" style="background: url(<?php the_field('case_info'); ?>) center center no-repeat;">
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
					<button class="button show">Показать описание</button>
				</div>
				<button class="button hide"></button>
		  </section>

		  <?php for ($i=1; $i < 11; $i++) { ?>
		    <?php if( get_field('case_'.$i) ) { ?>
		      <section class="section case slide" style="background: url(<?php the_field('case_'.$i); ?>) center center no-repeat;">
		        <?php if( get_field('text_'.$i) ) { ?>
		        		<div class="back"></div>
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
