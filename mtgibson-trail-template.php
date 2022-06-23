<?php
    /*
    Template Name: Mt Gibson Trail page
    */
    ?>
<?php require_once('mtgibson-trail-header.php'); ?>

<section class="container-fluid trail-info">
        <div class="container text-center">
          <h2 class="text-left"><?php the_field('titleformtgibsonactivities'); ?></h2>
          <p class="text-center" ><?php the_field('paragraphformtgibsonactivities'); ?></p>
        </div>
      </section>

      <section class="container-fluid trail-species">
            <h2 class="text-center"><?php the_field('wildlifetagmtgibson'); ?></h2>
            <div class="container">
              <div class="row text-center"><!--  a row that gives us access to the BS columns-->
                    
                <div class="col-md-4">
                    <img class="img-fluid" alt=“bandicoot” src="<?php the_field('mtgibsonspecies1image');?>">
                    <p class="text-center" ><?php the_field('mtgibsonspecies1name'); ?></p>
                    <p class="text-center" ><?php the_field('mtgibsonspecies1description'); ?></p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" alt=“dolphin” src="<?php the_field('mtgibsonspecies2image');?>">
                    <p class="text-center" ><?php the_field('mtgibsonspecies2name'); ?></p>
                    <p class="text-center" ><?php the_field('mtgibsonspecies2description'); ?></p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" alt=“dugong” src="<?php the_field('mtgibsonspecies3image');?>">
                    <p class="text-center" ><?php the_field('mtgibsonspecies3name'); ?></p>
                    <p class="text-center" ><?php the_field('mtgibsonspecies3description'); ?></p>
                </div>
                <div class="col-md-4">
                  <img class="img-fluid" alt=“finch” src="<?php the_field('mtgibsonspecies4image');?>">
                    <p class="text-center" ><?php the_field('mtgibsonspecies4name'); ?></p>
                    <p class="text-center" ><?php the_field('mtgibsonspecies4description'); ?></p>
              </div>
              <div class="col-md-4">
                  <img class="img-fluid" alt=“leather-back-turtle” src="<?php the_field('mtgibsonspecies5image');?>">
                    <p class="text-center" ><?php the_field('mtgibsonspecies5name'); ?></p>
                    <p class="text-center" ><?php the_field('mtgibsonspecies5description'); ?></p>
              </div>
              <div class="col-md-4">
                  <img class="img-fluid" alt=“mangrove-crab” src="<?php the_field('mtgibsonspecies6image');?>">
                    <p class="text-center" ><?php the_field('mtgibsonspecies6name'); ?></p>
                    <p class="text-center" ><?php the_field('mtgibsonspecies6description'); ?></p>
              </div>
            </div>
          </section>

        <?php get_footer(); ?>