<aside id="sidebar" class="col2-a">

  <?php

  // find the open/active page on the first level
  $open  = $pages->findOpen();
  $items = ($open) ? $open->children()->visible() : false;

  ?>

  <?php if($items && $items->count()): ?>

  <nav class="nav subpages">
    <ul>
      <li class="info">
        <h3><i>_</i>subpages</h3>
      </li>
      <?php foreach($items AS $item): ?>
      <li>
        <a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a>
      </li>
      <?php endforeach ?>
    </ul>
  </nav><!-- .nav -->
  <?php endif ?>

  <?php if($page->aside() != ''): ?>
  <section class="content">
    <?php echo kirbytext($page->aside()) ?>
  </section>
  <?php else: ?>
  <?php endif ?>

</aside><!-- #sidebar -->