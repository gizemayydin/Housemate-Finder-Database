<?php
require ('connector.php');

$nid = $_POST['nid'];
$query = "SELECT username, neighborhood_name, stu_name
FROM students s
JOIN neighborhoods n ON pref_id = neighborhood_id
WHERE neighborhood_id = $nid;";
$result = mysqli_query($db,$query);
?>


<!DOCTYPE html>
<html>



<body>
	<?php include 'basics.php'; ?>
	<div class="page">
		<table>
			<thead>
				<tr>
					<th> Username </th>
					<th> Neighborhood </th>
					<th> Name </th>
				</tr>
			</thead>
			<tbody>

				<?php 
				while($row = mysqli_fetch_assoc($result))
				{

					$username = $row['username'];
					$neighborhood = $row['neighborhood_name'];
					$name = $row['stu_name'];     

					echo "<tr>
					<td>$username</td>
					<td>$neighborhood</td>
					<td>$name</td>
				</tr>";

			}
			?>
		</tbody>
	</table>
	
</div>
<?php include 'scripts.php'; ?>


</body>

</html>