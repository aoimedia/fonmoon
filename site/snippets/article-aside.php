<aside id="sidebar" class="col2-a">

  <section id="meta">
    <div class="nav">
      <ul>
        <li class="info">
          <h3><i>_</i>Published by <span><?php echo html($page->author()) ?></span></h3>
        </li>
        <li>
          <time id="date" datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('M d, Y'); ?></time>
        </li>
        <li class="info">
          <h3><i>_</i>Topics</h3>
        </li>
        <?php foreach(str::split($page->tags()) as $tag): ?>
        <li>
           <a href="<?php echo url('/tag:' . urlencode($tag)) ?>"><?php echo html($tag) ?></a>
        </li>
        <?php endforeach ?>
        <li class="info">
          <h3><i>_</i>Share</h3>
        </li>
        <li>
          <a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($site->title()) ?>%20<?php echo rawurlencode ($page->url()); ?>%20<?php echo ('via @horokho')?>" target="blank" title="Tweet this">Twitter</a>
        </li>
      </ul>
    </div><!-- .nav -->
  </section><!-- .meta -->

  <nav id="pagination">
    <?php if($page->hasPrevVisible()): ?>
    <a class="prev x" href="<?php echo $page->prev()->url() ?>">&larr; Previous Article</a>
    <?php else: ?>
    <span class="prev">&larr; Previous Article</span>
    <?php endif ?>
    <?php if($page->hasNextVisible()): ?>
    <a class="next y" href="<?php echo $page->next()->url() ?>">&rarr; Next Article</a>
    <?php else: ?>
    <span class="next">&rarr; Next Article</span>
    <?php endif ?>
  </nav><!-- #pagination -->

</aside><!-- #sidebar -->