<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'ajax';

$connection = mysqli_connect($host, $user, $password, $database);

//if($connection){
//    echo "Yes it is";
//}


$search = $_POST['search'];

if(!empty($search)){
    
    $query ="SELECT * FROM cars where cars LIKE '$search%' ";
    $search_query = mysqli_query($connection, $query);
    
    if(!$search_query){
        die('Query FAILED' . mysqli_error($connection));
    }
    
    while($row = mysqli_fetch_array($search_query))
    {
        $brand = $row['cars'];
        ?>
        
<ul class="list-unstyled">
    <?php
    
    echo "<li>{$brand} in stock  </li>";
    
    ?>
    
    
</ul>






 <?php   }

    }

?>
