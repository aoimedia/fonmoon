<?php

$blog = $pages->find('articles');
$tags = tagcloud($blog);

?>

<header id="header">

	<section class="row">

  	<div id="primary" class="col2-b single">

    	<h1 id="logo">
      	<span>
        	<a href="<?php echo url() ?>"><?php echo h($site->title()) ?></a>
      	</span>
    	</h1>

  		<nav class="nav">
  			<ul>
    			<li>
    			  <span class="info"><i>_</i>Pages</span>
    		  </li>
  				<?php foreach($pages->visible() AS $p): ?>
  				<li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
  				<?php endforeach ?>
  				<li>
    				<a href="<?php echo url('feed') ?>">RSS</a>
  				</li>
  			</ul>
  		</nav>

  	</div> <!-- END .primary -->

  	<div id="secondary" class="col2-a single">

  		<nav class="nav tags">
  			<ul>
    			<li>
    			  <span class="info"><i>_</i>Topics</span>
    		  </li>
  				<?php foreach($tags as $tag): ?>
  				<li><a<?php echo ($tag->isActive()) ? ' class="active"' : '' ?> href="<?php echo $tag->url() ?>"><?php echo $tag->name() ?></a></li>
  				<?php endforeach ?>
  			</ul>
  		</nav>

  	</div> <!-- END .secondary -->

	</section>

</header>