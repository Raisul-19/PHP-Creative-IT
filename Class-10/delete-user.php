<?php
    require 'database.php';

?>

<?php

$id = $_GET['id'];

$delete = "DELETE FROM users WHERE id=$id";
$delete_result = mysqli_query($connection, $delete);

header('location:users.php');


?>