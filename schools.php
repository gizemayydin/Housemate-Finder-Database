

<?php
require ('connector.php');
$query = 'SELECT school_name, st.school_id, COUNT(*) AS Stunum
FROM students st
LEFT JOIN schools sc ON sc.school_id = st.school_id
GROUP BY st.school_id, school_name
ORDER BY school_name;';
$result = mysqli_query($db,$query);
?>

<!DOCTYPE html>
<html>

<body>
   <?php include 'basics.php'; ?>
   <div class="page">
    <h1>Schools</h1>
    
    <?php if (mysqli_num_rows($result) != 0): ?>    
      <table>
       <thead>
          <tr>
            <th> School Name </th>
            <th> School ID </th>
            <th> Number of Students </th>                   			
        </tr>
    </thead>
    <tbody>	
        <?php 
        while($row = mysqli_fetch_assoc($result))
        {

            $school_name = $row['school_name'];
            $school_id = $row['school_id'];
            $stunum = $row['Stunum'];		
            echo "<tr>
            <td><i><form action='disp_by_school.php' method='post'>
              <button type='submit' id='spbutton' name='sc_id' value='$school_id'>$school_name</button>
          </form></td>
          <td>$school_id</td>
          <td>$stunum</td>          
      </tr>";	
  }
  ?>
  <p>Click on schools name to display the students from selected school.</p>
</tbody>
</table>

<?php endif ?>

<?php include 'scripts.php'; ?>
</body>

</html>