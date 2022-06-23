<?php
    /*
    Template Name: Trail Scout Individual Trail page
    */
    ?>
<?php require_once('trail-header.php'); ?>

<section class="container-fluid trail-info">
        <div class="container text-center">
          <h2>Activities</h2>
          <p> Providing refuge to well over 200 species of birds and several other species, Charnley River-Artisan Range plays a vital role in protecting and restoring the wildlife.
            Activities provided at Charnley River include self guided tours from bird watching to exploring habitats unique to the Kimberely for the nature lovers. Swimming and exploring nearby gorges are also popular activities
            that allow visitors to appreciate the beauty around them.
             </p>
        </div>
      </section>

      <section class="container-fluid trail-species">
            <h2 class="text-center">Wildlife in the area</h2>
            <div class="container">
              <div class="row text-center"><!--  a row that gives us access to the BS columns-->
                    
                <div class="col-md-4">
                    <img class="img-fluid" src="images/bandicoot.png" alt="charnley-river-wilderness-camp">
                    <p class="more-title">Bandicoot</p>
                    <p class="species-description">Status
                      <br>Endangered
                      <br>Population
                      <br>10,000
                    </p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="images/dolphin.png" alt="mornington-wilderness-camp">
                    <p class="more-title">Finch</p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="images/dugong.png" alt="mt-gibson-wildlife-sanctuary">
                    <p class="more-title">Whale</p>
                </div>
                <div class="col-md-4">
                  <img class="img-fluid" src="images/finch.png" alt="charnley-river-wilderness-camp">
                  <p class="more-title">Bandicoot</p>
              </div>
              <div class="col-md-4">
                  <img class="img-fluid" src="images/leatherback-turtle.png" alt="mornington-wilderness-camp">
                  <p class="more-title">Finch</p>
              </div>
              <div class="col-md-4">
                  <img class="img-fluid" src="images/mangrove-crab.png" alt="mt-gibson-wildlife-sanctuary">
                  <p class="more-title">Whale</p>
              </div>
              <div class="col-md-4">
                <img class="img-fluid" src="images/n-quoll.png" alt="charnley-river-wilderness-camp">
                <p class="more-title">Bandicoot</p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="images/sandpiper.png" alt="mornington-wilderness-camp">
                <p class="more-title">Finch</p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="images/seahorse.png" alt="mt-gibson-wildlife-sanctuary">
                <p class="more-title">Whale</p>
            </div>
            </div>
          </section>

        <?php get_footer(); ?>