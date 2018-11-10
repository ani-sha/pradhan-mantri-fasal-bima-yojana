<?php
$conn = new mysqli(DATABASE_HOST , DATABASE_USERNAME , DATABASE_PASSWORD, DATABASE_NAME);

if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}
echo "connected successfully";