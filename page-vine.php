<?php get_header();?>

  
<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
       <p> <?php the_content() ?> </p>

       <div class="ting">
    <img class="img" src="<?php the_field("billede") ?>">
    <div class="info">
    <h1> <?php the_field("navn") ?> </h1>
   <p class="tekst"> <?php the_field("beskrivelse") ?> </p>
    <p class="pris"> <?php the_field("pris") ?> </p>
    <button class="knap">Bestil Nu</button>
</div>
</div>
  <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>