<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "Form submitted successfully";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];               
    $password = $_POST['password'];


$connection = new mysqli('localhost', 'root', '', 'dataforms');

if($connection){
    $sql = "INSERT INTO `dataforms`.`data` (`name`, `email`, `gender`, `phone`, `password`) VALUES ('$name', '$email', '$gender', '$phone', '$password')";
    $result = mysqli_query($connection, $sql);
    if(!$result){
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}else{
    die("Connection failed: " . mysqli_connect_error());
}

}


?>