<?php

require("./connection.php");

$query = "SELECT cart.*, coffee.coffee_id, coffee.coffee_name, coffee.coffee_price, coffee.coffee_image
          FROM cart
          JOIN coffee ON cart.coffe_id = coffee.coffee_id";

$result = mysqli_query($con, $query);

if ($result) {
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode($data);
}