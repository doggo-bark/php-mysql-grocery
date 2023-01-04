
<?php
    //connect.php is included inside add.php
    echo "This is connect.php   .     ";
    $con=new mysqli('localhost','root','','grocerydb');
        //mysqli_connect -> doesn't work
   
    
    if ($con->connect_error){
      // ($con) -> doesn't work
       die("".$con->connect_error);
       //.mysqli_error($con));
        
    }  
    
    echo 'Connected successfully.';
    //mysqli_connect   and    !$con





    
    //new mysqli       and     $con->connect_error
?>
</body>
</html>