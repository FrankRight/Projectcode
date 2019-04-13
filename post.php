<?php $pagename = "post page"; include( 'header.php'); ?>


		

<?php

// connect to the database
$db = mysqli_connect('localhost', 'right', 'Fank.2010', 'EASDatabaseSystem');
$sql = "SELECT Title, sourceDir, Date_Time, Description FROM posts ORDER BY postID DESC ";
$result = $db->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {

			$Title = $row["Title"];
			$source = $row["sourceDir"];
			$Datetime = $row["Date_Time"];
			$Description = $row["Description"];

			echo "
			<div class='aside-widget'>
				<div class='post post-thumb'>
					<a class='post-img' href='post.php'><img src='$source' alt=''></a>
					<div class='post-body'>
						<div class='post-meta'>
							<a class='post-category cat-1' href='post.php'>$Title</a>
							<span class='post-date'>$Datetime</span>
						</div>
						<h4 class='post-title'>$Description</h4>
					</div>
				</div>

			</div>";

		}

	}

?>
					
<div style="width: 100%;" class="col-md-5 " >

	<?php include( 'footer.inc'); ?>

</div>

	</body>

</html>