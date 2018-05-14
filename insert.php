<?php
 

include('db.php');

if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$comm=$_POST['comm'],
$password=$_POST['password'];


 
$sql = "INSERT INTO form (name, email, gender,comm, password)
VALUES ('$name', '$email','$gender','$comm','$password')"; 

if ($conn->query($sql) === TRUE) {
    echo "Inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>
 
