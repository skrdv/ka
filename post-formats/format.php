<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

    <div id="fullpost">
      <section class="section" id="slide-title" style="background-image: url(<?php the_field('slide_title'); ?>);">
        <header>
          <h1 class="case-title"><?php the_title(); ?></h1>
        </header>
      </section>

      <section class="section" id="slide-title" style="background-image: url(<?php the_field('slide_info'); ?>);">

      </section>

      <?php for ($i=1; $i < 5 ; $i++) { ?>
        <?php if( get_field('slide_'.$i) ) { ?>

          <section class="section" id="slide-<?php echo($i); ?>" style="background-image: url(<?php the_field('slide_'.$i); ?>);">
          </section>

        <?php } ?>
      <?php } ?>

    </div>

    <?php the_content(); ?>

</article>
