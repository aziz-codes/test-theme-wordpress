<div class='flex gap-2 mt-2'>
<label class='text-sm font-bold'>Published on 
    <span class='text-md text-gray-400 font-semibold'><?php the_date(); ?></span></p>
    <div class='mt-2'>
        Tags
    <?php 
    the_tags('<label class="p-1 bg-slate-300 rounded-sm ml-1 font-normal">'
    ,'</label><label class="p-1 bg-slate-300 rounded-sm ml-2 font-normal">
     ','</label>');
    ?>
       
    </div>
    <div class='mt-3'>
    <p class="font-normal rounded-sm p-1"><?php comments_number(); ?></p>
    </div>
</div> 
 <?php   
 ?>
  <img src="<?php the_post_thumbnail_url(); ?>" class="max-h-96 p-2 border w-1/2"/>


<?php
?>
<div class='max-w-2xl'>
 
    <?php the_content(); ?>

</div>

<?php
 comments_template();
 
 ?>


