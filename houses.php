<?php
require ('connector.php');
$query = 'SELECT h.residence_id, h.monthly_price, r.address, r.squaremeter, h.whiteApp, h.furniture, h.res_type,h.numRooms,h.parking_lot, h.rental_period FROM houses AS h, residences AS r WHERE h.residence_id = r.residence_id ;';
$result = mysqli_query($db,$query);
?>

<!DOCTYPE html>
<html>


<body>

  <?php include 'basics.php'; ?>
  <div class="page">
    <h1>Houses</h1>

    <div class="forms">
      <form action="room_price.php" method="post">
        <div class="form-group">
          <label for="numrooms">Number of Rooms: </label>
          <input type="text" name="numrooms" id="numrooms" value="NULL" class="form-control">
        </div>
        <div class="form-group">
          <label for="price">Max Monthly Price: </label>
          <input type="text" name="price" id="price" value="NULL" class="form-control">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>




    <?php if (mysqli_num_rows($result) != 0): ?>



      <table class="prefid">
       <thead>
        <tr>
          <th>Residence ID  </th>
          <th> Price per Month </th>
          <th> Address </th>
          <th> m^2 </th>
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
        $address = $row['address'];
        $squaremeter = $row['squaremeter'];
        $whiteApp = $row['whiteApp'];
        $furniture = $row['furniture'];
        $res_type = $row['res_type'];
        $numRooms = $row['numRooms'];
        $parking_lot = $row['parking_lot'];
        $rental_period = $row['rental_period'];



        echo "<tr>
        <td>$residence_id</td>
        <td>$monthly_price</td>
        <td>$address</td>
        <td>$squaremeter</td>
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