<?php if($page->hasImages()): ?>

<div class="flexslider">

	<ul class="slides">

    <?php foreach($page->images() as $image): ?>

  	<li>

    	<img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>" />

    </li>

    <?php endforeach ?>

  </ul>

</div> <!-- END .slider -->

<?php endif ?>