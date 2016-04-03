<?php

include("db.php");

$query = "SELECT * FROM cars ORDER BY id desc";
$query_car_info = mysqli_query($connection, $query);

    if(!$query_car_info){
        die("QUERY FAILED".mysqli_error($connection));
    }
    
    while($row = mysqli_fetch_array($query_car_info)){
        echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['cars']}</td>";
        echo "</tr>";
        
    }

?>