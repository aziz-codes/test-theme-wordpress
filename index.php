<?php get_header(); 
 if(have_posts()){
    while(have_posts()){
        the_post();
        ?>

<div class='flex flex-col ml-20 mt-4'>
    <?php get_template_part('template-parts/content','archive') ?>
</div>
<?php
    }
    ?>
<div class='flex flex-row justify-center items-center gap-3'>
    <a><?php  the_posts_pagination();?></a>
</div>

<?php
 }

?>
<?php get_footer(); ?>