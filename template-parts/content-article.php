   <div class="container">
       <div class="row">
           <div id="primary" class="col-xs-12 col-md-9">
               <h1>Blogg</h1>
               <article>
                   <img src=" <?php echo get_stylesheet_directory_uri() . '/img/washington.jpg'   ?>" />

                   <h2 class="title">
                       <a href="inlagg.html">Det tredje inlägget</a>
                   </h2>
                   <ul class="meta">
                       <li>
                           <i class="fa fa-calendar"></i> <?php the_date(); ?>
                       </li>
                       <li>
                           <i class="fa fa-user"></i> <a href="forfattare.html">Peter Pärmenäs</a>
                       </li>
                       <li>
                           <i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>
                       </li>
                   </ul>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex. Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis. In sed mi mi. Praesent condimentum sollicitudin nibh. Vivamus vulputate purus quis volutpat fringilla. Ut tortor libero, semper eget dolor vel, hendrerit tempus dui. Suspendisse dictum efficitur blandit. In porta scelerisque nulla ac placerat.</p>
               </article>




               <?php
                the_content(); ?>
           </div>
       </div>
   </div>