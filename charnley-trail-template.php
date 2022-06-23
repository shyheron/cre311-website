<?php
    /*
    Template Name: Charnley Trail page
    */
    ?>
<?php require_once('charnley-trail-header.php'); ?>

<section class="container-fluid trail-info">
        <div class="container text-center">
          <h2 class="text-left"><?php the_field('titleforcharnleyactivities'); ?></h2>
          <p class="text-center" ><?php the_field('paragraphforcharnleyactivities'); ?></p>
        </div>
      </section>

      <section class="container-fluid trail-species">
            <h2 class="text-center"><?php the_field('wildlifetagcharnley'); ?></h2>
            <div class="container">
              <div class="row text-center"><!--  a row that gives us access to the BS columns-->
                    
                <div class="col-md-4">
                    <img class="img-fluid" alt=“bandicoot” src="<?php the_field('charnleyspecies1image');?>">
                    <p class="text-center" ><?php the_field('charnleyspecies1name'); ?></p>
                    <p class="text-center" ><?php the_field('charnleyspecies1description'); ?></p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" alt=“dolphin” src="<?php the_field('charnleyspecies2image');?>">
                    <p class="text-center" ><?php the_field('charnleyspecies2name'); ?></p>
                    <p class="text-center" ><?php the_field('charnleyspecies2description'); ?></p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" alt=“dugong” src="<?php the_field('charnleyspecies3image');?>">
                    <p class="text-center" ><?php the_field('charnleyspecies3name'); ?></p>
                    <p class="text-center" ><?php the_field('charnleyspecies3description'); ?></p>
                </div>
                <div class="col-md-4">
                  <img class="img-fluid" alt=“finch” src="<?php the_field('charnleyspecies4image');?>">
                    <p class="text-center" ><?php the_field('charnleyspecies4name'); ?></p>
                    <p class="text-center" ><?php the_field('charnleyspecies4description'); ?></p>
              </div>
              <div class="col-md-4">
                  <img class="img-fluid" alt=“leather-back-turtle” src="<?php the_field('charnleyspecies5image');?>">
                    <p class="text-center" ><?php the_field('charnleyspecies5name'); ?></p>
                    <p class="text-center" ><?php the_field('charnleyspecies5description'); ?></p>
              </div>
              <div class="col-md-4">
                  <img class="img-fluid" alt=“mangrove-crab” src="<?php the_field('charnleyspecies6image');?>">
                    <p class="text-center" ><?php the_field('charnleyspecies6name'); ?></p>
                    <p class="text-center" ><?php the_field('charnleyspecies6description'); ?></p>
              </div>
            </div>
          </section>

        <?php get_footer(); ?>