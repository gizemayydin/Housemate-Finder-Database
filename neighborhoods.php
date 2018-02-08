<?php
require ('connector.php');
$query = 'SELECT * FROM neighborhoods;';
$result = mysqli_query($db,$query);
?>

<!DOCTYPE html>
<html>

<body>
  <?php include 'basics.php'; ?>
  <div class="page">
    <h1>Neighborhoods</h1>
    <?php if (mysqli_num_rows($result) != 0): ?>



      <table>
       <thead>
        <tr>
         <th> Neighborhood ID </th>
         <th> Neighborhood Name </th>
         <th> Proximity to c.c. </th>
         <th> Transportation </th>
         <th> Shopping Mall </th>


       </tr>
     </thead>
     <tbody>	
       <?php 

       while($row = mysqli_fetch_assoc($result))
       {



        $neighborhood_id = $row['neighborhood_id'];
        $neighborhood_name = $row['neighborhood_name'];
        $proximity = $row['proximity'];
        $transportation = $row['transportation'];
        $mall_nearby = $row['mall_nearby'];



        echo "<tr>
        <td>$neighborhood_id</td>
        <td>  $neighborhood_name</td>
        <td> $proximity</td>
        <td>  $transportation</td>
        <td>$mall_nearby</td>
      </tr>";


    }

    ?>

  </tbody>
</table>
<div class=downgroup>
<div class="exlink"><a href="sort_by_prox.php" ><i class="fa fa-sort" aria-hidden="true"></i> Sort by Proximity to City Center</a></div>
  <div class="exlink"><a href="search_by_prefid.php"><i class="fa fa-search" aria-hidden="true"></i> Search by Neighborhood ID</a></div>
</div>
<?php endif ?>
</div>
<?php include 'scripts.php'; ?>
</body>

</html>