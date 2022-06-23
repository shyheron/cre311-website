<?php
    /*
    Template Name: Broome Trail page
    */
    ?>
<?php require_once('broome-trail-header.php'); ?>

<section class="container-fluid trail-info">
        <div class="container text-center">
          <h2 class="text-left"><?php the_field('titleforbroomeactivities'); ?></h2>
          <p class="text-center" ><?php the_field('paragraphforbroomeactivities'); ?></p>
        </div>
      </section>

      <section class="container-fluid trail-species">
            <h2 class="text-center"><?php the_field('wildlifetagbroome'); ?></h2>
            <div class="container">
              <div class="row text-center"><!--  a row that gives us access to the BS columns-->
                    
                <div class="col-md-4">
                    <img class="img-fluid" alt=“bandicoot” src="<?php the_field('broomespecies1image');?>">
                    <p class="text-center" ><?php the_field('broomespecies1name'); ?></p>
                    <p class="text-center" ><?php the_field('broomespecies1description'); ?></p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" alt=“dolphin” src="<?php the_field('broomespecies2image');?>">
                    <p class="text-center" ><?php the_field('broomespecies2name'); ?></p>
                    <p class="text-center" ><?php the_field('broomespecies2description'); ?></p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" alt=“dugong” src="<?php the_field('broomespecies3image');?>">
                    <p class="text-center" ><?php the_field('broomespecies3name'); ?></p>
                    <p class="text-center" ><?php the_field('broomespecies3description'); ?></p>
                </div>
                <div class="col-md-4">
                  <img class="img-fluid" alt=“finch” src="<?php the_field('broomespecies4image');?>">
                    <p class="text-center" ><?php the_field('broomespecies4name'); ?></p>
                    <p class="text-center" ><?php the_field('broomespecies4description'); ?></p>
              </div>
              <div class="col-md-4">
                  <img class="img-fluid" alt=“leather-back-turtle” src="<?php the_field('broomespecies5image');?>">
                    <p class="text-center" ><?php the_field('broomespecies5name'); ?></p>
                    <p class="text-center" ><?php the_field('broomespecies5description'); ?></p>
              </div>
              <div class="col-md-4">
                  <img class="img-fluid" alt=“mangrove-crab” src="<?php the_field('broomespecies6image');?>">
                    <p class="text-center" ><?php the_field('broomespecies6name'); ?></p>
                    <p class="text-center" ><?php the_field('broomespecies6description'); ?></p>
              </div>
            </div>
          </section>

        <?php get_footer(); ?>