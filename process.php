<?php 
include("db.php");


/***********Displaying Action Box Data**************************/   
if(isset($_POST['id'])){

    $id = mysqli_real_escape_string($connection,$_POST['id']);
    $query = "SELECT * FROM cars WHERE id = {$id}";
    $query_car_info = mysqli_query($connection, $query);

    if(!$query_car_info){
        die("QUERY FAILED".mysqli_error($connection));
    }
    
    while($row = mysqli_fetch_array($query_car_info)){
      
        echo "<input rel='".$row['id']."' type='text' class='form-control title_input' value='".$row['title']."'>";
        echo "<input type='button' class='btn btn-success btn-block update' value='Update'>";
        echo "<input type='button' class='btn btn-danger btn-block delete' value='Delete'>";
        
    }
    
}

/*************Updating Data**************************************/   

if(isset($_POST['updatethis'])){
    
    $id = mysqli_real_escape_string($connection,$_POST['id']);
    $title = mysqli_real_escape_string($connection,$_POST['title']);
    
    $query = "UPDATE cars SET title = '$title' WHERE id = '$id'";
    
    
    
}

/*************EOF Updating Data**************************************/  



?> 
<!--************EOF php tagData**************************************/-->  

<!--******************Script**************************************-->  
 <script>
    $(document).ready(function(){

        var id;
        var title;
        var updatethis = "update";
        var deletethis = "delete";
                
/***********Extract id and title**************************/

        $(".title_input").on('input',function(){
            id = $(this).attr('rel');
            title = $(this).val();
        
        });
  
/***********Update  Button functionality**************************/          
            
        $(".update").on('click',function(){

            $.post("process.php",{id:id,title:title,updatethis:updatethis},function(data){
               
               alert(data);
               
            });

        });
            
            
        
                
                
                
               
    });

