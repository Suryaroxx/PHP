<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if (!$conn){
    echo "connection unsuccessful";

}
else {
    echo "connected successfully";
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

 
  $name = $_POST["fname"];
  $lastname = $_POST["lname"];
  $dob = $_POST["dob"];
  $age = $_POST["age"];

  
  $sql = "INSERT INTO form (firstname, secondname, age, dob)
  VALUES ('$name', '$lastname', '$age', '$dob')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

  $query = "SELECT * FROM formdatabase";
	$result = mysqli_query($con,$query); 
	while ($row = mysqli_fetch_array($result))
	{
		echo "".$row["firstname"]." ".$row["secondname"]." ".$row["age"]." ".$row["dob"]."<br>";

	}
  ?>