<?php

    require 'db.php';

?>

<?php

    $id = $_POST['id'];
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $update = "UPDATE users SET name='$name', email='$email', password='$password', gender='$gender' WHERE id=$id";
    $update_result = mysqli_query($db_connection, $update);

    header('location:users.php');

?>