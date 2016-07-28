<article <?php post_class(); ?> role="article">

    <div id="fullpost">
      <section class="section case-title" style="background-image: url(<?php the_field('case_title'); ?>);">
        <header class="border">
          <h1 class="ui header">
            <?php the_title(); ?>
            <div class="sub header"><?php the_field('case_meta'); ?></div>
          </h1>
        </header>
      </section>

      <section class="section case-info" style="background-image: url(<?php the_field('case_info'); ?>);">

        <div class="ui card">
          <div class="content">
            <div class="header"><?php the_title(); ?></div>
            <div class="meta"><?php the_field('case_meta'); ?></div>
            <div class="description">
              <p><?php the_field('case_desc'); ?></p>
            </div>
          </div>
        </div>
        <button class="ui white basic button toogle">Смотреть кейс</button>

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
