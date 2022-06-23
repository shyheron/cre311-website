<?php
    /*
    Template Name: Karakamia Trail page
    */
    ?>
<?php require_once('karakamia-trail-header.php'); ?>

<section class="container-fluid trail-info">
        <div class="container text-center">
          <h2 class="text-center"><?php the_field('titleforkarakamiaactivities'); ?></h2>
          <p class="text-center" ><?php the_field('paragraphforkarakamiaactivities'); ?></p>
        </div>
      </section>

      <section class="container-fluid trail-species">
            <h2 class="text-center"><?php the_field('wildlifetagkarakamia'); ?></h2>
            <div class="container">
              <div class="row text-center"><!--  a row that gives us access to the BS columns-->
                    
                <div class="col-md-4">
                    <img class="img-fluid" alt=“bandicoot” src="<?php the_field('karakamiaspecies1image');?>">
                    <p class="text-center" ><?php the_field('karakamiaspecies1name'); ?></p>
                    <p class="text-center" ><?php the_field('karakamiaspecies1description'); ?></p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" alt=“dolphin” src="<?php the_field('karakamiaspecies2image');?>">
                    <p class="text-center" ><?php the_field('karakamiaspecies2name'); ?></p>
                    <p class="text-center" ><?php the_field('karakamiaspecies2description'); ?></p>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" alt=“dugong” src="<?php the_field('karakamiaspecies3image');?>">
                    <p class="text-center" ><?php the_field('karakamiaspecies3name'); ?></p>
                    <p class="text-center" ><?php the_field('karakamiaspecies3description'); ?></p>
                </div>
            </div>
          </section>

        <?php get_footer(); ?>