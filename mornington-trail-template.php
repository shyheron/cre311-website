<?php
    /*
    Template Name: Mornington Trail page
    */
    ?>
<?php require_once('mornington-trail-header.php'); ?>

<section class="container-fluid trail-info">
        <div class="container text-center">
          <h2 class="text-center"><?php the_field('titleformorningtonactivities'); ?></h2>
          <p class="text-center" ><?php the_field('paragraphformorningtonactivities'); ?></p>
        </div>
      </section>

      <section class="container-fluid trail-species">
            <h2 class="text-center"><?php the_field('wildlifetagmornington'); ?></h2>
            <div class="container">
              <div class="row text-center"><!--  a row that gives us access to the BS columns-->
                    
                <div class="col-md-4">
                    <img class="img-fluid" alt=“bandicoot” src="<?php the_field('morningtonspecies1image');?>">
                    <p class="text-center" ><?php the_field('morningtonspecies1name'); ?></p>
                    <p class="text-center" ><?php the_field('morningtonspecies1description'); ?></p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" alt=“dolphin” src="<?php the_field('morningtonspecies2image');?>">
                    <p class="text-center" ><?php the_field('morningtonspecies2name'); ?></p>
                    <p class="text-center" ><?php the_field('morningtonspecies2description'); ?></p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" alt=“dugong” src="<?php the_field('morningtonspecies3image');?>">
                    <p class="text-center" ><?php the_field('morningtonspecies3name'); ?></p>
                    <p class="text-center" ><?php the_field('morningtonspecies3description'); ?></p>
                </div>
            </div>
          </section>

        <?php get_footer(); ?>