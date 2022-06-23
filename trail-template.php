<?php
    /*
    Template Name: Trail Scout Individual Trail page
    */
    ?>
<?php require_once('trail-header.php'); ?>

<section class="container-fluid trail-info">
        <div class="container text-center">
          <h2 class="text-left"><?php the_field('titleforindividualactivities', 123); ?></h2>
          <p class="text-center" ><?php the_field('paragraphforindividualactivities', 123); ?></p>
        </div>
      </section>

      <section class="container-fluid trail-species">
            <h2 class="text-center"><?php the_field('wildlifetag', 123); ?></h2>
            <div class="container">
              <div class="row text-center"><!--  a row that gives us access to the BS columns-->
                    
                <div class="col-md-4">
                    <img class="img-fluid" alt=“bandicoot” src="<?php the_field('species1image', 123);?>">
                    <p class="text-center" ><?php the_field('species1name', 123); ?></p>
                    <p class="text-center" ><?php the_field('species1description', 123); ?></p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" alt=“dolphin” src="<?php the_field('species2image', 123);?>">
                    <p class="text-center" ><?php the_field('species2name'); ?></p>
                    <p class="text-center" ><?php the_field('species2description'); ?></p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" alt=“dugong” src="<?php the_field('species3image');?>">
                    <p class="text-center" ><?php the_field('species3name'); ?></p>
                    <p class="text-center" ><?php the_field('species3description'); ?></p>
                </div>
                <div class="col-md-4">
                  <img class="img-fluid" alt=“finch” src="<?php the_field('species4image');?>">
                    <p class="text-center" ><?php the_field('species4name'); ?></p>
                    <p class="text-center" ><?php the_field('species4description'); ?></p>
              </div>
              <div class="col-md-4">
                  <img class="img-fluid" alt=“leather-back-turtle” src="<?php the_field('species5image');?>">
                    <p class="text-center" ><?php the_field('species5name'); ?></p>
                    <p class="text-center" ><?php the_field('species5description'); ?></p>
              </div>
              <div class="col-md-4">
                  <img class="img-fluid" alt=“mangrove-crab” src="<?php the_field('species6image');?>">
                    <p class="text-center" ><?php the_field('species6name'); ?></p>
                    <p class="text-center" ><?php the_field('species6description'); ?></p>
              </div>
              <div class="col-md-4">
                <img class="img-fluid" alt=“northern-quoll” src="<?php the_field('species7image');?>">
                    <p class="text-center" ><?php the_field('species7name'); ?></p>
                    <p class="text-center" ><?php the_field('species7description'); ?></p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" alt=“sandpiper” src="<?php the_field('species8image');?>">
                    <p class="text-center" ><?php the_field('species8name'); ?></p>
                    <p class="text-center" ><?php the_field('species8description'); ?></p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="images/seahorse.png" alt="mt-gibson-wildlife-sanctuary">
                <img class="img-fluid" alt=“seahorse” src="<?php the_field('species9image');?>">
                    <p class="text-center" ><?php the_field('species9name'); ?></p>
                    <p class="text-center" ><?php the_field('species9description'); ?></p>
            </div>
            </div>
          </section>

        <?php get_footer(); ?>