<?php $this->need('header.php'); ?>

    <div class="container" id="content">
	<div class="row">
	<div class="span6 offset3">
	

    <?php if ($this->have()): ?>
	<?php while($this->next()): ?>
	    <div class="row apost">
	    	
    	<p><div class="muted"><?php //_e('发布时间：'); ?><?php $this->date('F j, Y'); ?></div></p>
    	
		<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>

		<?php $this->content('Continue...'); ?>
		
    	</div>
		<?php endwhile; ?>
	    <?php else: ?>
	        <div class="post">
	            <h2 class="entry_title"><?php _e('没有找到内容'); ?></h2>
	        </div>
	    <?php endif; ?>
	

    <div class="row">
		    	<div class="pagination pagination-right">
			    	<?php $this->pageNav(); ?>
			    	<script>
						$('.page-navigator').contents().unwrap().wrapAll("<ul></ul>");
						$('li.current').addClass('active');
					</script>
				</div>

    </div>
	
	<div class="row">
		<p><?php $this->need('sidebar.php'); ?></p>
	</div>
    
    </div>
	</div><!-- end content row-->
    </div><!-- end #content-->
	
	<?php $this->need('footer.php'); ?>
