<?php $this->need('header.php'); ?>

    <div class="container" id="content">
	<div class="row">
	<div class="span6 offset3">
		
		<div class="row apost">
			<p><div class="muted">
				<?php $this->date('F j, Y'); ?></div>
			</p>

			<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>

			
			
			<p class="entry_data">
				<span><?php //_e('作者：'); ?><?php //$this->author(); ?></span>
				
				
			</p>
			<?php $this->content(); ?>

			<div class="muted">
			<p class="text-right">
				CATEGORY: <?php $this->category(','); ?><br>
				TAGS: <?php $this->tags(', ', true, 'none'); ?>
			</p></div>
		</div>
		

		<div class="row">
			<?php $this->need('comments.php'); ?>
		</div>

	</div>
	</div>
    </div><!-- end #content-->
	<?php // $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
