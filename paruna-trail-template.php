<?php
    /*
    Template Name: Paruna Trail page
    */
    ?>
<?php require_once('paruna-trail-header.php'); ?>

<section class="container-fluid trail-info">
        <div class="container text-center">
          <h2 class="text-center"><?php the_field('titleforparunaactivities'); ?></h2>
          <p class="text-center" ><?php the_field('paragraphforparunaactivities'); ?></p>
        </div>
      </section>

      <section class="container-fluid trail-species">
            <h2 class="text-center"><?php the_field('wildlifetagparuna'); ?></h2>
            <div class="container">
              <div class="row text-center"><!--  a row that gives us access to the BS columns-->
                    
                <div class="col-md-4">
                    <img class="img-fluid" alt=“bandicoot” src="<?php the_field('parunaspecies1image');?>">
                    <p class="text-center" ><?php the_field('parunaspecies1name'); ?></p>
                    <p class="text-center" ><?php the_field('parunaspecies1description'); ?></p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" alt=“dolphin” src="<?php the_field('parunaspecies2image');?>">
                    <p class="text-center" ><?php the_field('parunaspecies2name'); ?></p>
                    <p class="text-center" ><?php the_field('parunaspecies2description'); ?></p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" alt=“dugong” src="<?php the_field('parunaspecies3image');?>">
                    <p class="text-center" ><?php the_field('parunaspecies3name'); ?></p>
                    <p class="text-center" ><?php the_field('parunaspecies3description'); ?></p>
                </div>
            </div>
          </section>

        <?php get_footer(); ?>