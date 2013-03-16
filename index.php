<?php
/**
 * 这是 Typecho 系统的一套默认皮肤
 * 
 * @package Minimal Typecho
 * @author 杰森葱
 * @version 1.0
 * @link http://blog.ijason.info
 */
 
 $this->need('header.php');
 ?>
	<div class="container">
		<div class="row">
		<div class="span6 offset3">
			
		<?php while($this->next()): ?>
	        <div class="row apost">
	        	
	        	<p><div class="muted"><?php //_e('发布时间：'); ?><?php $this->date('F j, Y'); ?></div></p>
	        	
				<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
				
				<?php $this->content('Continue...'); ?>
	        </div>
		<?php endwhile; ?>
		
			
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
		</div>
	</div><!-- end container -->

	
	<?php $this->need('footer.php'); ?>
