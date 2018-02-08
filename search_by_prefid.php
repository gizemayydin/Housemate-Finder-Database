<?php

require ('connector.php');
$sql = "SELECT * FROM neighborshort";
$res = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html>

<body>
  <?php include 'basics.php'; ?>
  <div class="page">
   <h1>Neighborhood</h1>

   <div class="forms">
    <form action="list_stu_prefid.php" method="post">
     <div class="form-group">
      <label for="nid">Neighborhood Name: </label>
      <input type="text" name="nid" id="nid" placeholder=" " value="NULL" class="form-control">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<table class="prefid">
	<thead>
		<tr>
      <th> Neigborhood Name </th>
      <th> ID </th>
    </tr>
  </thead>
  <tbody>  
    <?php
    while($row = mysqli_fetch_assoc($res))
    {			
     $nname = $row['neighborhood_name'];
     $nid = $row['neighborhood_id'];
     echo "<tr>
     <td>$nname</td>
     <td>$nid</td>
   </tr>";
 }

 ?>
</tbody>
</table>
</div>
<?php include 'scripts.php'; ?>
</body>

</html>