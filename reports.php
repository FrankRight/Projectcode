<?php $pagename = "Reports Page"; include( 'header.php');?>

<br>
<h2>Recent attacks Reports</h2>

<?php $db = mysqli_connect('localhost', 'right', 'Fank.2010', 'EASDatabaseSystem');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$ReportMade = "SELECT  NumberOfElephants, LocationNow, LocationTo, Description, date_Time FROM reports ORDER BY `ReportID` DESC";
				$result = $db->query($ReportMade);

				if ($result->num_rows > 0) {
					// output data of each row
                    while($row = $result->fetch_assoc())
                    {
						
						echo "<div class= 'report-container'> ".$row["date_Time"]."<br>"."<br>"." Number Of Elephants: " . $row["NumberOfElephants"]."<br>". " Their Location Now: " . $row["LocationNow"]."<br>". " Their Location To: " . $row["LocationTo"]. "<br>"." Description: " . $row["Description"]. "<br>"."<br></div>";
						echo "<hr>";
                    }
                    
                }
                else
                {
					echo "No recent reports made.";
				}
?>

</div>

<?php include( 'footer.inc'); ?>