<?php get_header();?>

  
<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
      

       <div class="omblomst">
          <h1> <?php the_field("om1") ?> </h1>
          <p class="tekstblomst"> <?php the_field("om") ?> </p>
        </div>

       <div class="ting">
    <img class="img" src="<?php the_field("billede") ?>">
    <div class="info">
    <h1> <?php the_field("navn") ?> </h1>
   <p class="tekst"> <?php the_field("beskrivelse") ?> </p>
    <p class="pris"> <?php the_field("pris") ?> </p>
    <button class="knap" onclick="window.location.href='KreativeBlomster/betaling/'">Bestil Nu</button>
</div>


    <img class="img" src="<?php the_field("billede1") ?>">
    <div class="info">
    <h1> <?php the_field("navn1") ?> </h1>
   <p class="tekst"> <?php the_field("beskrivelse1") ?> </p>
    <p class="pris"> <?php the_field("pris1") ?> </p>
    <button class="knap" onclick="window.location.href='KreativeBlomster/betaling/'">Bestil Nu</button>
</div>
</div>



<div class="ting">
    <img class="img" src="<?php the_field("billede2") ?>">
    <div class="info">
    <h1> <?php the_field("navn2") ?> </h1>
   <p class="tekst"> <?php the_field("beskrivelse2") ?> </p>
    <p class="pris"> <?php the_field("pris2") ?> </p>
    <button class="knap" onclick="window.location.href='KreativeBlomster/betaling/'">Bestil Nu</button>
</div>



    <img class="img" src="<?php the_field("billede21") ?>">
    <div class="info">
    <h1> <?php the_field("navn21") ?> </h1>
   <p class="tekst"> <?php the_field("beskrivelse21") ?> </p>
    <p class="pris"> <?php the_field("pris21") ?> </p>
    <button class="knap" onclick="window.location.href='KreativeBlomster/betaling/'">Bestil Nu</button>
</div>
</div>



<div class="ting">
    <img class="img" src="<?php the_field("billede3") ?>">
    <div class="info">
    <h1> <?php the_field("navn3") ?> </h1>
   <p class="tekst"> <?php the_field("beskrivelse3") ?> </p>
    <p class="pris"> <?php the_field("pris3") ?> </p>
    <button class="knap" onclick="window.location.href='KreativeBlomster/betaling/'">Bestil Nu</button>
</div>



    <img class="img" src="<?php the_field("billede4") ?>">
    <div class="info">
    <h1> <?php the_field("navn4") ?> </h1>
   <p class="tekst"> <?php the_field("beskrivelse4") ?> </p>
    <p class="pris"> <?php the_field("pris4") ?> </p>
    <button class="knap" onclick="window.location.href='KreativeBlomster/betaling/'">Bestil Nu</button>
</div>
</div>


<div class="ting">
    <img class="img" src="<?php the_field("billede5") ?>">
    <div class="info">
    <h1> <?php the_field("navn5") ?> </h1>
   <p class="tekst"> <?php the_field("beskrivelse5") ?> </p>
    <p class="pris"> <?php the_field("pris5") ?> </p>
    <button class="knap" onclick="window.location.href='KreativeBlomster/betaling/'">Bestil Nu</button>
</div>



    <img class="img" src="<?php the_field("billede6") ?>">
    <div class="info">
    <h1> <?php the_field("navn6") ?> </h1>
   <p class="tekst"> <?php the_field("beskrivelse6") ?> </p>
    <p class="pris"> <?php the_field("pris6") ?> </p>
    <button class="knap" onclick="window.location.href='KreativeBlomster/betaling/'">Bestil Nu</button>
</div>
</div>

<div class="ting">
    <img class="img" src="<?php the_field("billede7") ?>">
    <div class="info">
    <h1> <?php the_field("navn7") ?> </h1>
   <p class="tekst"> <?php the_field("beskrivelse7") ?> </p>
    <p class="pris"> <?php the_field("pris7") ?> </p>
    <button class="knap" onclick="window.location.href='KreativeBlomster/betaling/'">Bestil Nu</button>
</div>


    <img class="img" src="<?php the_field("billede8") ?>">
    <div class="info">
    <h1> <?php the_field("navn8") ?> </h1>
   <p class="tekst"> <?php the_field("beskrivelse8") ?> </p>
    <p class="pris"> <?php the_field("pris8") ?> </p>
    <button class="knap" onclick="window.location.href='KreativeBlomster/betaling/'">Bestil Nu</button>
</div>
</div>

<div class="ting">
    <img class="img" src="<?php the_field("billede9") ?>">
    <div class="info">
    <h1> <?php the_field("navn9") ?> </h1>
   <p class="tekst"> <?php the_field("beskrivelse9") ?> </p>
    <p class="pris"> <?php the_field("pris9") ?> </p>
    <button class="knap" onclick="window.location.href='KreativeBlomster/betaling/'">Bestil Nu</button>
</div>

    <img class="img" src="<?php the_field("billede10") ?>">
    <div class="info">
    <h1> <?php the_field("navn10") ?> </h1>
   <p class="tekst"> <?php the_field("beskrivelse10") ?> </p>
    <p class="pris"> <?php the_field("pris10") ?> </p>
    <button class="knap" onclick="window.location.href='KreativeBlomster/betaling/'">Bestil Nu</button>
</div>
</div>

  <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>