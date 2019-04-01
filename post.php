<?php $pagename = "post page"; include( 'header.php'); ?>


<div >
	<a class="post-img" href="#"><img src="./elephantPhotos/post1.jpeg" alt="post"></a>
	<div class="post-body">
		<div class="post-meta">
			<a class="post-category cat-1" href="#">title<?php echo $postSubject ?></a>
			<span class="post-date">March 15, 2019<?php echo $datePosted ?></span>
		</div>
		<h3 class="post-subject">Add a description <?php echo $postinfo ?></h3>
	</div>
</div>		

					
<div>

	<?php include( 'footer.inc'); ?>

</div>

	</body>

</html>