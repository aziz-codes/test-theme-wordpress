<?php get_header(); 
 if(have_posts()){
    while(have_posts()){
        the_post();
        ?>
      
      <div class='flex mx-auto flex-col gap-2 justify-center items-center ml-4'>
        <?php get_template_part('template-parts/content','article') ?>
      </div>
<?php
    }
 }

?>    
<?php get_footer(); ?>