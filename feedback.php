<?php 

$conn = mysqli_connect('localhost', 'root');
mysqli_select_db($conn, 'feedbackdata');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$feedback = $_POST['feedback'];

$query = "INSERT INTO feedbackdata (Userame, Email, Mobile, Feedback) VALUES ('$name', '$email', '$mobile', '$feedback')";

mysqli_query($conn, $query);

header('location: index.html');
?>