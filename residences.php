<?php
require ('connector.php');
$query = 'SELECT * FROM residences;';
$result = mysqli_query($db,$query);
?>

<!DOCTYPE html>
<html>

<body>
<?php include 'basics.php'; ?>
  <div class="page">
    <h1>All Residences</h1>
    
    <?php if (mysqli_num_rows($result) != 0): ?>



      <table>
       <thead>
          <tr>
            <th> Residence ID </th>
            <th> Neighborhood ID </th>
            <th> Address </th>
            <th> m^2 </th>
        </tr>
    </thead>
    <tbody>	
       <?php 

       while($row = mysqli_fetch_assoc($result))
       {


        $residence_id = $row['residence_id'];   
        $neighborhood_id = $row['neighborhood_id'];
        $address = $row['address'];
        $squaremeter = $row['squaremeter'];




        echo "<tr>
        <td>  $residence_id</td>
        <td>$neighborhood_id</td>
        <td> $address</td>
        <td>  $squaremeter</td>
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