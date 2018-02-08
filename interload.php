<?php

require('connector.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT username, password FROM students WHERE username = $username AND password = $password"

$result = mysqli_query($db, $sql);

if (!$result) {
	echo "Wrong entry for username / password. Please try again."
}

else if ($result)): ?>
Login Successful. Go to <a href="index.html" class = "mylinks"><i> Home Page </i></a><br>