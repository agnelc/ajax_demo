<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>AJAX DEMO</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
              <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <style>
            
            
        </style>
        
    </head>
    <body>

        <div id="container" class="col-xs-6 col-xs-offset-3 text-center">
            
            <h2>Search our database</h2>
            <input class="form-control" type="text" name="search" id="search" placeholder="Search our inventory">
            <br>
            <br>
            <h2 class="bg-success" id="result">
                
            </h2>
            
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

