<?php
    /*
    Template Name: Trail Scout Main Trail page
    */
    ?>
<?php require_once('main-trail-header.php'); ?>

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
                    <img class="img-fluid" alt=“mt-gibson-wildlife-sanctuary” src="<?php the_field('trail3image');?>">
                    <p class="text-center" ><?php the_field('trail3name'); ?></p>
                    <a href="<?php the_field('trail3button'); ?>" class="button"> > </a>
                </div>
                <div class="col-md-4 trailimg">
                    <img class="img-fluid" alt=“paruna-wildlife-sanctuary” src="<?php the_field('trail4image');?>">
                    <p class="text-center" ><?php the_field('trail4name'); ?></p>
                    <a href="<?php the_field('trail4button'); ?>" class="button"> > </a>
                </div>
                <div class="col-md-4 trailimg">
                    <img class="img-fluid" alt=“karakamia-wildlife-sanctuary” src="<?php the_field('trail5image');?>">
                    <p class="text-center" ><?php the_field('trail5name'); ?></p>
                    <a href="<?php the_field('trail5button'); ?>" class="button"> > </a>
                </div>
                <div class="col-md-4 trailimg">
                    <img class="img-fluid" alt=“broome” src="<?php the_field('trail6image');?>">
                    <p class="text-center" ><?php the_field('trail6name'); ?></p>
                    <a href="<?php the_field('trail6button'); ?>" class="button"> > </a>
                </div>
                </div><!-- row-->
            </div> <!-- container -->
        </section>

        <?php get_footer(); ?>