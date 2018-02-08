<?php

require('connector.php');

$getname = $_POST['name'];
$getage = $_POST['age'];
$getsex = $_POST['sex'];
$getclass = $_POST['class'];
$getdosmoke = $_POST['dosmoke'];
$getalcohol = $_POST['alcohol'];
$getedudur = $_POST['edudur'];
$getfreeze = $_POST['freeze'];
$getalrg = $_POST['alrg'];
$getpet = $_POST['pet'];
$getstay = $_POST['stay'];



$getname = !empty($getname) ? "'$getname'" : "NULL";
$getclass = !empty($getclass) ? "'$getclass'" : "NULL";
$getfreeze = !empty($getfreeze) ? "'$getfreeze'" : "NULL";
$getalrg = !empty($getalrg) ? "'$getalrg'" : "NULL";



$sql = "CALL searchstudent($getname, $getage, $getsex, $getclass, $getdosmoke, $getalcohol, $getedudur, $getfreeze, $getalrg, $getpet, $getstay)";

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
		if (!$result) {
		        echo 'MySQL Error: ' . mysqli_error($db);
		        exit;
		    }
	while($row = mysqli_fetch_assoc($result))
	{	
			
        $name = $row['stu_name'];
		$age = $row['stu_age'];
		$sex = $row['sex'];
		$class = $row['class'];
		$dosmoke = $row['does_smoke'];
		$alcohol = $row['use_alcohol'];
		$edudur = $row['edu_dur'];
		$freeze = $row['freeze_stat'];
		$alrg = $row['allergies'];
		$pet = $row['has_pet'];
		$stay = $row['stay_duration'];	

		echo "<tr>
          <td>$name</td>
          <td>$age</td>
          <td>$sex</td>
          <td>$class</td>
          <td>$dosmoke</td>
          <td>$alcohol</td>
          <td>$edudur</td>
          <td>$freeze</td>
          <td>$alrg</td>
          <td>$pet</td>
          <td>$stay</td>
          
          </tr>";
		

    }

?>
	</tbody>
	</table>
</div>
<?php include 'scripts.php'; ?>


</body>

</html>
 