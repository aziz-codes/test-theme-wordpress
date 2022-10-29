<?php get_header(); 
 if(have_posts()){
    while(have_posts()){
        the_post();
        ?>
      
      <div class='flex mx-auto flex-col justify-center items-center ml-4 mt-4'>
        <?php get_template_part('template-parts/content','archive') ?>
      </div>
<?php
    }
 }

?>    
<?php get_footer(); ?>