<?php
    /*
    Template Name: Main trail
    */
    ?>
<?php require_once('main-trail-header.php'); ?>

<!-- TRAIL INTRODUCTION -->
<div class="col-md-4 trail-map-description">
            <h3 class="text-center"><?php the_field('titleformaintrail'); ?></h3>
            <p class="text-center" ><?php the_field('paragraphformaintrailintro'); ?></p>
        </div>
        <div class="col-md-8">
        <img class="img-fluid" alt=“portait” src="<?php the_field('mapimage');?>">
        </div>
    </div>    

          </div><!-- container-->
      </header>

        <!-- TRAIL MAP AREAS -->
        <section class="trails">
            <div class="container trailsub">
            <div class="row text-center"><!--  a row that gives us access to the BS columns-->
                    
                <div class="col-md-4 trailimg">
                    <img class="img-fluid" alt=“charnley-river-wilderness-camp” src="<?php the_field('trail1image');?>">
                    <p class="text-center" ><?php the_field('trail1name'); ?></p>
                    <a href="<?php the_field('trail1button'); ?>" class="button"> > </a>
                </div>
                <div class="col-md-4 trailimg">
                    <img class="img-fluid" alt=“mornington-wilderness-camp” src="<?php the_field('trail2image');?>">
                    <p class="text-center" ><?php the_field('trail2name'); ?></p>
                    <a href="<?php the_field('trail2button'); ?>" class="button"> > </a>
                </div>
                <div class="col-md-4 trailimg">
                    <img class="img-fluid" alt=“mt-gibson-wildlife-sanctuary” src="<?php the_field('trail2image');?>">
                    <p class="text-center" ><?php the_field('trail2name'); ?></p>
                    <a href="<?php the_field('trail2button'); ?>" class="button"> > </a>
                </div>
                <div class="col-md-4 trailimg">
                    <img class="img-fluid" alt=“paruna-wildlife-sanctuary” src="<?php the_field('trail2image');?>">
                    <p class="text-center" ><?php the_field('trail2name'); ?></p>
                    <a href="<?php the_field('trail2button'); ?>" class="button"> > </a>
                </div>
                <div class="col-md-4 trailimg">
                    <img class="img-fluid" alt=“karakamia-wildlife-sanctuary” src="<?php the_field('trail2image');?>">
                    <p class="text-center" ><?php the_field('trail2name'); ?></p>
                    <a href="<?php the_field('trail2button'); ?>" class="button"> > </a>
                </div>
                <div class="col-md-4 trailimg">
                    <img class="img-fluid" alt=“broome” src="<?php the_field('trail2image');?>">
                    <p class="text-center" ><?php the_field('trail2name'); ?></p>
                    <a href="<?php the_field('trail2button'); ?>" class="button"> > </a>
                </div>
                </div><!-- row-->
            </div> <!-- container -->
        </section>

        <?php get_footer(); ?>