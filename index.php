<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>AJAX DEMO</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    
        
    </head>
    <body>

        <div id="container" class="col-xs-6 col-xs-offset-3 text-center">
            <div class="row">
            <h2>Search our database</h2>
            <input class="form-control" type="text" name="search" id="search" placeholder="Search our inventory">
            <br>
            <br>
            <h2 class="bg-success" id="result">
                
            </h2>
            
        </div>
            
            <div class="row">
                <form class="" action="">
                    <div class="form-group-sm col-md-5">
                    <input type="text" class="form-control" name="car_name">
                    </div>
                    <div class="form-group-sm col-md-1">
                        <input type="submit" class="btn btn-primary" value="Add Car">
                    </div>
                </form>
            </div>
            
        <script>
            $(document).ready(function(){
                $('#search').keyup(function(){
                   
                   var search = $('#search').val();
                   $.ajax({
                       
                       url:'search.php',
                       data:{search:search},
                       type:'POST',
                       success:function(data){
                           
                           if(!data.error){
                               $('#result').html(data);
                           }
                       }
                       
                   });
                   
                });
              
            });
        
        </script>
        
   </body>
</html>


<?php

