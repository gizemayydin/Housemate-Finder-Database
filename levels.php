<?php
require ('connector.php');
$query = 'SELECT * FROM levels;';
$result = mysqli_query($db,$query);
?>

<!DOCTYPE html>
<html>


<head>

<style>

    .mylinks { font-size: 18px; text-decoration: none; }
    
    table, td, th {    
        border: 1px solid #9f2b68;
        text-align: left;
    }

    table {
        font-family: "Georgia";
        background-color:white;
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 15px;
    }

</style>

</head>



<body style="overflow: scroll;">

    <h1 style="color:purple;text-align:center;" > <b> Program Levels Data </b></h1>
    
	<?php if (mysqli_num_rows($result) != 0): ?>
		
    
    
		<table>
	<thead>
		<tr>
			<th style="color:purple;"> School ID </th>
            <th style="color:purple;"> Level </th>
            <th style="color:purple;"> Level ID</th>
            <th style="color:purple;"> Program Name </th>
            
            
			
		</tr>
	</thead>
	<tbody>	
	<?php 

	while($row = mysqli_fetch_assoc($result))
	{

		

		$school_id = $row['school_id'];
        $level = $row['level'];
        $level_id = $row['level_id'];
        $level_name = $row['level_name'];
       
      
		

		echo "<tr>
          <td>$school_id</td>
          <td>  $level</td>
          <td>  $level_id</td>
          <td> $level_name</td>
          </tr>";
		

    }

		?>

	</tbody>
	</table>

	<?php endif ?>

    <br>
    <br>
    <br>
    <img src="3.jpg" alt="Sorry, image cannot be viewed." style="float:right;width:150px;height:150px;">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div align="right">
	<a href="index.html" class = "mylinks"><i> Return To Homepage</i></a>
    </div>    
</body>

</html>