<?php get_header();?>

  
<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
  <p> <?php the_content() ?> </p> 

       <div class="omos2">
    <div class="info">
    <h1> <?php the_field("om12") ?> </h1>
   <p class="tekst"> <?php the_field("om2") ?> </p>
</div>
</div>

<div class="film">
<iframe class="video" src="https://www.youtube.com/embed/fgLvvX5caSY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
        <div class="forside">
       <div class="omos">
    <div class="info">
    <h1 class="omos4"> <?php the_field("om1") ?> </h1>
   <p class="tekstom"> <?php the_field("om") ?> </p>
</div>
</div>

<div class="aben">
    <div class="info">
    <h1 class="omos4"> <?php the_field("abnings") ?> </h1>
   <p class="tekst1"> <?php the_field("tider") ?> </p>
</div>
</div>
</div>

<div class="oplysninger">
    <img class="img" src="<?php the_field("billede") ?>">
    <div class="info3">
    <h1> <?php the_field("navn") ?> </h1>
   <p class="tekst3"> <?php the_field("beskrivelse") ?> </p>
   </div>
</div>


    <div class="oplysninger1">
    <img class="img" src="<?php the_field("billede1") ?>">
   <div class="info3">
   <h1> <?php the_field("navn1") ?> </h1>
   <p class="tekst3"> <?php the_field("beskrivelse1") ?> </p>
</div>
</div>

<div class="oplysninger">
    <img class="img" src="<?php the_field("billede2") ?>">
    <div class="info3">
    <h1> <?php the_field("navn2") ?> </h1>
   <p class="tekst3"> <?php the_field("beskrivelse2") ?> </p>
   </div>
</div>

  <?php endwhile; ?>
<?php endif; ?>
<iframe  width="100%" height="300"  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=600&amp;height=300&amp;hl=en&amp;q=gl%20vardevej%20189%20Esbjerg+()&amp;t=h&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='http://billigstempel.de/'>Stempelautomaten</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=a660793c81d72a6174c0ff58f9c0f44d10052eae'></script>

<?php get_footer(); ?>