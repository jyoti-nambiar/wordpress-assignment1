  <main>
      <section>
          <div class="container">
              <div class="row">
                  <div id="primary" class="col-xs-12 col-md-9">
                      <article>
                          <img src="<?php the_post_thumbnail(); ?>" />
                          <h1 class="title"><?php the_title();    ?></h1>
                          <ul class="meta">
                              <li>
                                  <i class="fa fa-calendar"></i> <?php the_date();  ?>
                              </li>
                              <li>
                                  <i class="fa fa-user"></i> <a href="<?php echo site_url('/forfattare') ?>"><?php the_author(); ?></a>
                              </li>
                              <li>
                                  <i class="fa fa-tag"></i> <a href="<?php the_permalink()  ?>"><?php the_category(); ?></a>
                              </li>
                          </ul>
                          <?php the_content();  ?>
                      </article>
                  </div>
                  <?php get_sidebar(); ?>

              </div>
          </div>
      </section>
  </main>


  </div>
  </div>
  </div>