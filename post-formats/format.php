
              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">



                <section class="cf" itemprop="articleBody">

                  <div id="fullpost">
                    <div class="section" id="slide-title" style="background-image: url(<?php the_field('slide_title'); ?>);">
                      <header class="article-header entry-header">
                        <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
                      </header>
                    </div>

                    <div class="section" id="slide-title" style="background-image: url(<?php the_field('slide_info'); ?>);">

                    </div>

                    <?php for ($i=1; $i < 5 ; $i++) { ?>
                      <?php if( get_field('slide_'.$i) ) { ?>
                        <div class="section" id="slide-<?php echo($i); ?>" style="background-image: url(<?php the_field('slide_'.$i); ?>);">
										    </div>
                      <?php } ?>
                    <?php } ?>

									</div>

                  <?php the_content(); ?>

                </section>


                <footer class="article-footer">

                </footer>

              </article>
