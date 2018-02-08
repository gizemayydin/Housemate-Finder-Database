<?php
require('connector.php');

$numrooms = $_POST['numrooms'];
$price = $_POST['price'];
$sql = "SELECT *
        FROM houses h
        Where (numRooms = $numrooms OR $numrooms IS NULL) AND (monthly_price < $price OR $price IS NULL);";
$result = mysqli_query($db, $sql);
    if (!$result) {
            echo 'MySQL Error: ' . mysqli_error($db);
            exit;
        }
?>

<!DOCTYPE html>
<html>



<body>
 <?php include 'basics.php'; ?>
 <div class="page">
    <h1>Houses</h1>
    
	<?php if (mysqli_num_rows($result) != 0): ?>
		
    
    
		<table>
	<thead>
		<tr>
			<th>Residence ID  </th>
            <th> Price per Month </th>
            <th>White Appliances  </th>
            <th>Furniture  </th>
            <th> Site/Building </th>
            <th> Number of Rooms  </th>
            <th> Parking Lot </th>
            <th> Rental for how long? </th>
           
            
		</tr>
	</thead>
	<tbody>	
	<?php 

	while($row = mysqli_fetch_assoc($result))
	{

		

		$residence_id = $row['residence_id'];
        $monthly_price = $row['monthly_price'];
        $whiteApp = $row['whiteApp'];
        $furniture = $row['furniture'];
        $res_type = $row['res_type'];
        $numRooms = $row['numRooms'];
        $parking_lot = $row['parking_lot'];
        $rental_period = $row['rental_period'];
       
        

		echo "<tr>
          <td>$residence_id</td>
          <td>$monthly_price</td>
          <td>$whiteApp</td>
          <td>$furniture</td>
          <td>$res_type</td>
          <td>$numRooms</td>
          <td>$parking_lot</td>
          <td>$rental_period</td>
          </tr>";
		

    }

		?>

	</tbody>
	</table>

	<?php endif ?>

   </div>
<?php include 'scripts.php'; ?>
</body>

</html>