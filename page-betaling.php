<?php get_header();?>

  
<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
   <h1><?php the_title() ?> </h1>
       <p> <?php the_content() ?> </p>

       <form action="welcome_get.php" method="get">
Navn: </br>
<input type="text" name="name"><br>
Adresse: </br>
<input type="text" name="adresse"><br>
E-mail: </br>
<input type="text" name="email"><br>
Navn på vare og antal: </br>
  <textarea name="Navn på vare og antal" rows="5" cols="40"></textarea> <br>
Specifike ønsker: </br>
  <textarea name="Specifike ønsker" rows="5" cols="40"></textarea>

</form>
<div class="knap12">
<button class="knap1" onclick="window.location.href='KreativeBlomster/bestilling/'">Godkend Køb</button>
</div>
  <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>