<?php get_header();?>

  
<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
       <p> <?php the_content() ?> </p>

       <div class="bestilling">
          <h1> <?php the_field("bestilling") ?> </h1>
          <p class="tekst"> <?php the_field("bestilling1") ?> </p>
        </div>
       
  <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>