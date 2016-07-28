<?php
/*
 Template Name: Home Page
*/
?>

<?php get_header(); ?>

<main id="main" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
		// WP_Query arguments
		$args = array (
			'cat' => '1',
		);

		// The Query
		$the_query = new WP_Query( $args );

		// The Loop
/*
	echo '<ul>';

		$the_query->the_post();
		echo '<li>' . get_the_title() . '</li>';
		echo '<a href="'. the_permalink().'" rel="bookmark" title="">'. the_title() .'</a>';
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
		echo $src[0];

	echo '</ul>';
*/

	/* Restore original Post Data */



?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

			<div id="fullpage">
				<section class="section" id="section-cases">
					<?php
					$the_query->the_post();
					$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
					echo '<div class="slide" id="home-slide-'. $post->post_name .'" style="background-image: url('. $src[0] .');">';
					echo '<a class="case-link" href="'. get_the_permalink().'" rel="bookmark" title="">'. get_the_title() .'</a>';
					echo '</div>';

						wp_reset_postdata();
					?>

				</section>
				<section class="section " id="section1">
					<h1>Услуги</h1>
				</section>
				<section class="section" id="section2">
					<h1>Команда</h1>
				</section>
				<section class="section" id="section3">
					<h1>Контакты</h1>
				</section>
			</div>

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
