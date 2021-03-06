<section class="py-12 bg-light">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- Preheading -->
            <!-- <h6 class="heading-xxs mb-3 text-center text-gray-400">
              Our blog
            </h6> -->

            <!-- Heading -->
            <h2 class="mb-10 text-center">GALLERY</h2>

          </div>
        </div>
        <!-- IMAGES -->
        <div class="row">

<!-- LOOP -->
          <?php
            for ($i=0; $i < 3 ; $i++):
          ?>

          <div class="col-12 col-md-4">

            <!-- Card -->
            <div class="card mb-7 shadow shadow-hover lift">

              <!-- Image -->
              <a href="/gallery_page<?php echo $i+1?>.php">
                <img src="/img/prew/<?php echo $i+1?>.jpg" alt="..." class="card-img-top" height="500">
              </a>

              <!-- Body -->
              <div class="card-body px-8 py-7">

                <!-- Time -->
                <p class="mb-3 font-size-xs">
                  <!-- <a class="text-muted" href="blog.html">Fashion / Jun 20, 2019</a> -->
                </p>

                <!-- Heading -->
                <h6 class="mb-0">
                  <a class="text-body" href="blog-post.html">
                    NAME
                  </a>
                </h6>

              </div>

            </div>

          </div>

          <?php endfor; ?>

<!-- LOOP END -->

        </div>
        <div class="row">
          <div class="col-12">

            <!-- Link -->
            <div class="mt-7 text-center">
              <a class="link-underline" href="blog.html"></a>
            </div>

          </div>
        </div>
      </div>
    </section>
