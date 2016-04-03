<?php 
include("db.php");

if(isset($_POST['id'])){

    $id = mysqli_real_escape_string($connection,$_POST['id']);
    $query = "SELECT * FROM cars WHERE id = {$id}";
    $query_car_info = mysqli_query($connection, $query);

    if(!$query_car_info){
        die("QUERY FAILED".mysqli_error($connection));
    }
    
    while($row = mysqli_fetch_array($query_car_info)){
      
        echo "<input type='text' class='form-control car_id' value='".$row['title']."'>";
        echo "<input type='button' class='btn btn-success btn-block car_id' value='Update'>";
        echo "<input type='button' class='btn btn-danger btn-block car_id' value='Delete'>";
        
    }
    
}


?>
 <script>
            $(document).ready(function(){
                
                var id;
                var title;
               
    });

