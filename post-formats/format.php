<article id="case" role="article">

  <section id="head-<?php echo $post->post_name; ?>" class="section case head <?php echo $post->post_name; ?>" data-bs="<?php the_field('case_head'); ?>" data-alt="<?php the_title(); ?> <?php the_field('case_meta1'); ?>">

    <div class="wrap">
      <header class="frame">
        <h1 class="ui header">
          <?php the_title(); ?>
          <div class="sub header"><?php the_field('case_meta1'); ?></div>
        </h1>
      </header>
    </div>

  </section>

  <section id="info-<?php echo $post->post_name; ?>" class="section case info <?php echo $post->post_name; ?>" data-bs="<?php the_field('case_info'); ?>" data-alt="<?php the_title(); ?> <?php the_field('case_meta1'); ?>">

    <div class="info-bg"></div>
    <div class="ui container">
      <div class="ui card">
        <div class="content">
          <div class="header"><?php the_title(); ?></div>
          <div class="meta"><?php the_field('case_meta2'); ?></div>
          <div class="description">
            <p><?php the_content(); ?></p>
          </div>
        </div>
      </div>
    </div>
    <button class="ui white basic button toogle hidden">Скрыть описание</button>

  </section>

  <?php for ($i=1; $i < 11; $i++) { ?>
    <?php if( get_field('case_'.$i) ) { ?>

      <section id="case-<?php echo $post->post_name; ?>-<?php echo $i; ?>" class="section case <?php echo $post->post_name; ?> case-<?php echo $i; ?>" data-bs="<?php the_field('case_'.$i); ?>" data-alt="<?php the_field('alt_'.$i); ?>">

        <?php if( get_field('text_'.$i) ) { ?>
        <div class="info-bg"></div>
        <div class="ui container">
          <div class="ui card">
            <div class="content">
              <div class="header"><?php the_title(); ?></div>
              <div class="meta"><?php the_field('case_meta2'); ?></div>
              <div class="description">
                <p><?php the_field('text_'.$i); ?></p>
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
  <?php include( '../library/svg/arrow_up.svg' ); ?>
</div>
<div class="fp-verticalArrow fp-down">
  <?php include( '../library/svg/arrow_down.svg' ); ?>
</div>
