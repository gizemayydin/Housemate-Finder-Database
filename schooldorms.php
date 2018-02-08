<?php
require ('connector.php');
$query = 'SELECT r.residence_id, s.school_name, r.address, r.squaremeter, d.studyrooms, d.price_per_semester, d.numResidents, d.bathroom, d.kitchen, d.laundry, d.entranceHours, d.desk, d.bed_seperate FROM residences AS r, dorms AS d, schooldorms AS s WHERE r.residence_id = d.residence_id AND d.residence_id = s.residence_id ;';
$result = mysqli_query($db,$query);

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
  <h1>School Dorms</h1>

    <table>
     <thead>
      <tr>
       <th> Residence ID </th>
       <th> School Name </th>
       <th> Study Rooms </th>
       <th> Price per Semester </th>
       <th> Number of Residents </th>
       <th> Bathroom Status </th>
       <th> Kitchen Status </th>
       <th> Laundry Room </th>
       <th> Entrance Hours </th>
       <th> Private Desk </th>
       <th> Bed Type </th>
       <th> Address </th>
       <th> m^2 </th>



     </tr>
   </thead>
   <tbody>	
     <?php 

     while($row = mysqli_fetch_assoc($result))
     {



      $residence_id = $row['residence_id'];
      $schoolname = $row['school_name'];
      $address = $row['address'];
      $squaremeter = $row['squaremeter'];
      $studyrooms = $row['studyrooms'];
      $price_per_semester = $row['price_per_semester'];
      $numResidents = $row['numResidents'];
      $bathroom = $row['bathroom'];
      $kitchen = $row['kitchen'];
      $laundry = $row['laundry'];
      $entranceHours = $row['entranceHours'];
      $desk= $row['desk'];
      $bed_seperate = $row['bed_seperate'];


      echo "<tr>
      <td>$residence_id</td>
      <td>$schoolname</td>
      <td>$studyrooms</td>
      <td>$price_per_semester</td>
      <td>$numResidents</td>
      <td>$bathroom</td>
      <td>$kitchen</td>
      <td>$laundry</td>
      <td>$entranceHours</td>
      <td>$desk</td>
      <td>$bed_seperate</td>
      <td> $address</td>
      <td>  $squaremeter</td>
    </tr>";


  }

  ?>

</tbody>
</table>

</div>
<?php include 'scripts.php'; ?>   
</body>

</html>