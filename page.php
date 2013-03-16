<?php $this->need('header.php'); ?>

    <div class="container" id="content">
        <div class="row">
        	<div class="span6 offset3">
        		<div class="row apost">
				<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
				<p class="entry_data">
					<span><?php //_e('作者：'); ?><?php //$this->author(); ?></span>
					<?php //_e('发布时间：'); ?><?php //$this->date('F j, Y'); ?>
				</p>
				<?php $this->content(); ?>

				
				</div>
				
				<div class="row">
					<?php $this->need('comments.php'); ?>
				</div>

		</div>

		
    </div><!-- end #content-->
	<?php //$this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
