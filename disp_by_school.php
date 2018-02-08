<?php
require('connector.php');

$sc_id = "";
$sc_id = $_POST['sc_id'];
$sql = "CALL SearchBySchool($sc_id);";
$result = mysqli_query($db, $sql);
?>


<!DOCTYPE html>
<html>

<body>
  <?php include 'basics.php'; ?>
  <div class="page">
    <h1>Students</h1>
<? 
if ($result): ?>
<table>
	<thead>
		<tr>
			<th> Username </th>
			<th> Name </th>
			<th> Age </th>
			<th> Sex </th>
			<th> Class </th>
			<th> School ID </th>
			
		</tr>
	</thead>
	<tbody>	
		<?php 
		#if (!$result) {
		#        echo 'MySQL Error: ' . mysqli_error($db);
		#        exit;
		#    }
		while($row = mysqli_fetch_assoc($result))
		{	
			
			$username = $row['username'];
			$name = $row['stu_name'];
			$age = $row['stu_age'];
			$sex = $row['sex'];
			$class = $row['class'];
			$scid = $row['school_id'];

			echo "<tr>
			<td>$username</td>
			<td>$name</td>
			<td>$age</td>
			<td>$sex</td>
			<td>$class</td>
			<td>$scid</td>

		</tr>";
		

	}

	?>
  </tbody>
</table>
	</div>
<?php include 'scripts.php'; ?>
</body>

</html>