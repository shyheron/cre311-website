<?php get_header();?>   <!--  Tells WordPress to include header.php -->

<!-- HOME INTRO -->
         <section class= "container-fluid home-intro">
            <div class="container">
    <h2><?php the_field('titleforintro'); ?></h2><!--  custom field for the mini introduction content-->
        <p class="about-text"><?php the_field('paragraphforintro'); ?></p>
        <a href="<?php the_field('buttonformoreinfo'); ?>" class="button"> > </a>
    
    
    
    <!-- <h2>TAKE A JOURNEY THROUGH OUR NATURAL BIODIVERSITY</h2> 
    <p>Western Australia is home to one of the worlds 35 biodiversity hotspots. Most of Australias wildlife is found nowhere else in the world, which makes it more crucial to protect our natural wildlife and the surrounding environment. 
      There are several sactuaries and national parks that are dedicated to protecting our biodiversity. Some of our most iconic and endangered wildlife are home in these protected areas. Guide yourself to one fo the best wildlife sanctuaries in WA and learn more about our natural wildlife species and the habitats they inhabit. </p>
    <a class= "button" href="#" > > </a> -->
            </div> <!-- container -->
        </section>        

        <?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->