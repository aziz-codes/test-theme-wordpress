<div class='hidden gap-2'>
<label class='text-sm font-bold'>Published on 
    <span class='text-md text-gray-400 font-semibold'><?php the_date(); ?></span></p>
    <div class='mt-2'>
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
 
 the_content();
 comments_template();
 
 ?>


