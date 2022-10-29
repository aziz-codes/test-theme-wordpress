<div class='flex flex-row gap-2 justify-start p-0 m-0 ml-4 mb-2'>
    <div class='max-w-sm'>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class='w-52 h-48 border p-2 rounded-sm bg-cover'/>
</div>
    <div class="title flex flex-col max-w-xl shadow-sm p-1">
      <label class='font-bold text-md'><?php the_title(); ?></label>
      <span class='text-xs text-gray-400 font-semibold'><?php comments_number(); ?></span>
      <div  class='max-w-xl flex-wrap'>
      <?php the_excerpt(); ?>
      </div>
      <?php 
     
      ?>
      <a class='text-red-500 font-medium w-28' href="<?php 
      the_permalink(); 
      ?>">Read more &rarr;</a>
      <span class='text-slate-400 text-sm'>Published on <?php the_date(); ?></span>
    </div>
</div>
<?php 
        the_post_pagination();
        
        ?>

