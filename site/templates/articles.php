<?php snippet('header') ?>
<?php snippet('navigation') ?>
<section id="container">
	<section class="row">

		<? if(param('tag')) {
		  $articles = $pages->find('articles')
		                    ->children()
		                    ->visible()
		                    ->filterBy('tags', param('tag'), ',')
		                    ->flip()
		                    ->paginate(4);
		} else {
		  $articles = $pages->find('articles')
		                    ->children()
		                    ->visible()
		                    ->flip()
		                    ->paginate(4);
		} ?>

		<? foreach($articles as $article): ?>

		<article class="article ext">
  		<?php $image = $article->images()->filterBy('name', '01') ?>
		  <figure class="media">
    		<a href="<?php echo $article->url() ?>" title="Read - <?php echo $article->title() ?>">
          <?php if($image && $image->first()): ?>
            <img src="<?php echo url('assets/images/loader.gif') ?>" data-original="<?php echo thumb($image->first(), array('width' => 475, 'height' => 350, 'crop' => true), false) ?>">
        </a>
		  </figure><!-- .media -->
		  <?php endif ?>
	    <h2 class="title">
  	    <span>
    	    <a href="<?php echo $article->url() ?>" title="Read - <?php echo $article->title() ?>"><?php echo $article->title() ?></a>
    	  </span>
	    </h2>
	    <p class="excerpt"><?php echo excerpt($article->text(), 75) ?></p>
		</article><!-- .article -->
		<?php endforeach ?>

	</section><!-- .row -->

  <nav id="pagination" class="index">
    <? if($articles->pagination()->hasPrevPage()): ?>
    <a class="prev" href="<?= $articles->pagination()->prevPageURL() ?>">&larr; Previous Page</a>
    <?php else: ?>
    <span class="prev">&larr; Previous Page</span>
    <?php endif ?>
    <? if($articles->pagination()->hasNextPage()): ?>
    <a class="next" href="<?= $articles->pagination()->nextPageURL() ?>">Next Page &rarr;</a>
    <?php else: ?>
    <span class="next">Next Page &rarr;</span>
    <?php endif ?>
  </nav><!-- #pagination -->

</section><!-- #container  -->

<?php snippet('footer') ?>