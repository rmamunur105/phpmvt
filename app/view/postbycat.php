
	<div class="left-content fix">
		<?php foreach ($postByCat as $key => $value) { ?>

			<article class="post">
				<h1 class="title"><a href="<?php echo BASE_URL ;?>/Index/postDetails/<?php echo $value['id']?>">	<?php echo $value['title']?> </a></h1>
				<?php $content = $value['content'];
					if (strlen($content) > 200 ) {
						$content = substr($content , 0 ,300);
						echo $content ;
					}else{
						echo $content ;
					}
					

				?> 
				<p><a href="<?php echo BASE_URL ;?>/Index/postDetails/<?php echo $value['id']?>">load more.....</a></p>
				<?php echo $value['catname']?> 
				<!-- <a href="#">cat one</a> -->
			</article>

		<?php  } ?>
	</div>
	
