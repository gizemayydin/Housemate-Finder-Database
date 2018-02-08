<?php
require ('connector.php');
$query = 'SELECT * FROM StudentView;';
$result = mysqli_query($db,$query);
?>

<!DOCTYPE html>
<html>

<body>
  <?php include 'basics.php'; ?>
  <div class="page">
    <h1>Students</h1>

    <?php if (mysqli_num_rows($result) != 0): ?>

      <table>
       <thead>
        <tr>
          <th> Username </th>
          <th> Name </th>
          <th> Age </th>
          <th> Sex </th>
          <th> Class </th>
          <th> Smoking </th>
          <th> Alcohol </th>
          <th> Education Duration </th>
          <th> Freeze Status </th>
          <th> Allergies </th>
          <th> Pets </th>
          <th> Staying Time </th>

        </tr>
      </thead>
      <tbody>	
       <?php 

       while($row = mysqli_fetch_assoc($result))
       {


        $username = $row['username'];
        $stu_name = $row['stu_name'];
        $stu_age = $row['stu_age'];
        $sex = $row['sex'];
        $class = $row['class'];
        $does_smoke = $row['does_smoke'];
        $use_alcohol = $row['use_alcohol'];
        $edu_dur = $row['edu_dur'];
        $freeze_stat = $row['freeze_stat'];
        $allergies = $row['allergies'];
        $has_pet = $row['has_pet'];
        $stay_duration = $row['stay_duration'];

        echo "<tr>
        <td>$username</td>
        <td>$stu_name</td>
        <td>$stu_age</td>
        <td>$sex</td>
        <td>$class</td>
        <td>$does_smoke</td>
        <td>$use_alcohol</td>
        <td>$edu_dur</td>
        <td>$freeze_stat</td>
        <td>$allergies</td>
        <td>$has_pet</td>
        <td>$stay_duration</td>

      </tr>";
    }
    ?>

  </tbody>
</table>

<?php endif ?>
<div class="downgroup" >
<div class="exlink">
  <a href="searchstudents_in.php"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
</div>
</div>
</div>
<?php include 'scripts.php'; ?>
</body>

</html>