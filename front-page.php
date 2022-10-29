<?php get_header(); 


 if(have_posts()){
    while(have_posts()){
        the_post();
        ?>
      
      <div class='ml-4 mt-4 text-green-600'>
        <?php the_content(); ?>
      </div>


<?php
    }
 }



?>

    
<?php get_footer(); ?>