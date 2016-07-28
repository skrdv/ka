<article <?php post_class(); ?> role="article">

    <div id="fullpost">
      <section class="section" style="background-image: url(<?php the_field('case_title'); ?>);">
        <header>
          <h1 class="case-title"><?php the_title(); ?></h1>
        </header>
      </section>

      <section class="section" id="case-info" style="background-image: url(<?php the_field('case_info'); ?>);">

      </section>

      <?php for ($i=1; $i < 11; $i++) { ?>
        <?php if( get_field('case_'.$i) ) { ?>

          <section class="section" id="case-<?php echo($i); ?>" style="background-image: url(<?php the_field('case_'.$i); ?>);">
          </section>

        <?php } ?>
      <?php } ?>

    </div>

    <?php the_content(); ?>

</article>
