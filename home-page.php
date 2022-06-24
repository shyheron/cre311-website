<?php
    /*
    Template Name: Trail Scout Home page
    */
    ?>
<?php get_header();?>   <!--  Tells WordPress to include header.php -->

<!-- HOME INTRO -->
          <section class= "container-fluid home-intro">
            <div class="container">
            <h2><?php the_field('titleforintro'); ?></h2><!--  custom field for the mini introduction content-->
        <p class="about-text"><?php the_field('paragraphforintro'); ?></p>
        <a href="<?php the_field('buttonformoreinfo'); ?>" class="button"> > </a>
<!--     <h2>TAKE A JOURNEY THROUGH OUR NATURAL BIODIVERSITY</h2>
    <p>Home to several endemic species, WA is home to one of worlds' largest biodiversity hotspot. </p>
    <a class= "button" href="#" > > </a> -->
            </div> <!-- container -->
        </section>

        <?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->