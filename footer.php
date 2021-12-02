<?php wp_footer() ?>

<div class="jumbotron">
<div class="footermenu" ><?php
wp_nav_menu( array( 
    'theme_location' => 'my-footer-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>    
</div>
<div class="info2">
<h2> <?php the_field("om3") ?> </h2>
          <p class="tekst2"> <?php the_field("om4") ?> </p>

</div>
      
</div>

  

  
      </body>
</html>