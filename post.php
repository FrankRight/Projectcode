<?php $pagename = "post page"; include( 'header.php'); ?>


		

<?php

// connect to the database
$db = mysqli_connect('localhost', 'right', 'Fank.2010', 'EASDatabaseSystem');
$sql = "SELECT Title, sourceDir, Date_Time, Description FROM posts WHERE userID = 1 ";
$result = $db->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {

			$Title = $row["Title"];
			$source = $row["sourceDir"];
			$Datetime = $row["Date_Time"];
			$Description = $row["Description"];

			echo "
				<div class='post-container'>
					<div class='col-md-5 col-md-offset-1'>
					<div class='post-meta'>
						<a class='post-category cat-1' >$Title</a>
					</div>	
						<div ><img src=$source width = auto height= 350px alt='error!' class='post-img'>
							<div class='post-body'>
								<span class='post-date'>$Datetime</span>
								<h4>$Description</h4>
							</div>
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