

	<h2>Promos at stores local to you</h2>            

	<?php $count = 1; ?>
    <?php foreach($promos as $key => $promo): ?>
    	<?php if ($count == 1): ?>
    		<div class="row">
    	<?php endif; ?>
    		
    		<div class="span4">
	            <h3><?php echo $promo['defaultDisplayDescription']; ?></h3>
	            <p><?php echo $promo['store']; ?> - $<?php echo $promo['finalPrice']; ?> - <?php echo $promo['additional']; ?></p>
	            <img src="<?php echo $promo['originalImagUrl']; ?>" />
	        </div>

    	<?php $count++;?>
    	<?php if ($count > 3 || $key==count($promos)-1): ?>
    	<?php $count = 1;?>
    		</div>
    	<?php endif; ?>
    <?php endforeach; ?>

          
    