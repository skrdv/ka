<article role="article">

    <div id="case">
      <section class="section <?php echo $post->post_name; ?> case-head" id="head-<?php echo $post->post_name; ?>" data-bs="<?php the_field('case_head'); ?>">
        <header class="frame">
          <h1 class="ui header">
            <?php the_title(); ?>
            <div class="sub header"><?php the_field('case_meta1'); ?></div>
          </h1>
        </header>
      </section>

      <section class="section case <?php echo $post->post_name; ?> case-info" id="info-<?php echo $post->post_name; ?>" data-bs="<?php the_field('case_info'); ?>">

        <div class="ui card">
          <div class="content">
            <div class="header"><?php the_title(); ?></div>
            <div class="meta"><?php the_field('case_meta2'); ?></div>
            <div class="description">
              <p><?php the_content(); ?></p>
            </div>
          </div>
        </div>
        <button class="ui white basic button toogle">Скрыть описание</button>

      </section>

      <?php for ($i=1; $i < 11; $i++) { ?>
        <?php if( get_field('case_'.$i) ) { ?>

          <section class="section case <?php echo $post->post_name; ?> case-<?php echo $i; ?>" data-bs="<?php the_field('case_'.$i); ?>">

            <?php if( get_field('text_'.$i) ) { ?>
            <div class="ui card">
              <div class="content">
                <div class="header"><?php the_title(); ?></div>
                <div class="meta"><?php the_field('case_meta2'); ?></div>
                <div class="description">
                  <p><?php the_field('text_'.$i); ?></p>
                </div>
              </div>
            </div>
            <?php } ?>

          </section>

        <?php } ?>
      <?php } ?>

    </div>



</article>
