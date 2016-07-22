<?php snippet('header') ?>

<?php snippet('navigation') ?>

<section id="container">

	<section class="row">

  	<article class="article">

      <h2 class="title col2-b single"><?php echo html($page->title()) ?></h2>

      <div class="clearfix"></div>

      <section class="content col2-b single">
        <?php echo kirbytext($page->text()) ?>
      </section>

      <?php snippet('default-aside') ?>

  	</article> <!-- END .article -->

	</section> <!-- END .row  -->

</section> <!-- END #container  -->

<?php snippet('footer') ?>