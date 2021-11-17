<?php  if (count($notify) > 0) : ?>
  <div class="error">
  	<?php foreach ($notify as $notif) : ?>
  	  <p><?php echo $notify ?></p>
  	<?php endforeach ?>
  </div>
  <?php  endif ?>