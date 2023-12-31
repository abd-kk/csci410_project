<?php

require("./connection.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $coffee_id = isset($_POST['coffee_id']) ? $_POST['coffee_id'] : null;

    if ($coffee_id !== null) {

        $query = "DELETE FROM cart WHERE coffe_id = '$coffee_id'";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "Item has been deleted";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Invalid data received";
    }
} else {
    echo "Invalid request method";
}

mysqli_close($con);
?>