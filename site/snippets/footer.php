<!--Footer-->
<div id="footer">

  <section class="row">

    <div class="col2-a">

      <?php echo kirbytext($site->copyright()) ?>

    </div> <!-- END .col2-a -->

    <div class="col2-b">

      <?php echo kirbytext($site->footer()) ?>

    </div> <!-- END .col2-b -->

  </section>

</div> <!-- END #footer -->

</section> <!-- END #design -->

<?php
	echo js('//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.1/jquery.min.js');
	echo js('assets/js/vendor/jquery.lazyload.min.js');
	echo js('assets/js/vendor/jquery.flexslider-min.js');
  echo js('assets/js/vendor/jquery.fittext.js');
	echo js('assets/js/vendor/jquery.fitvids.js');
	echo js('assets/js/main.js');
?>

</body>
</html>