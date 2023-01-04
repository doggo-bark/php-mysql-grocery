<?php
        include "connect.php";
        if (isset($_GET['id'])) {
          
            $id=$_GET['id'];
            $q="select * from grocerytb where id='$id'";
            $result=mysqli_query($con,$q);
            $row=mysqli_fetch_array($result);
           
        }
        if (isset($_POST['btn'])){
            $iname=$_POST['iname'];
            $iquantity=$_POST['iquantity'];
            $istatus=$_POST['istatus'];
            $idate=$_POST['idate'];
            $id=$_GET['id'];
            $q="update grocerytb set item_name='$iname',item_quantity='$iquantity',item_status='$istatus',date='$idate' where id='$id'";
            
            
            $result=mysqli_query($con,$q);
            echo (" ".mysqli_error($con));
            

        }

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Grocery List</h1>
    <form method=post>
        <div> 
            <label>Item name </label>
            <input type="text"  name=iname value=<?php echo $row['item_name'];?>  >
        </div>

        <div>
            <label for="">Item quantity </label>
            <input type="text"  name=iquantity value=<?php echo $row['item_quantity'];   ?>>
        </div>

        <div>
            <label>Item status </label>
            <select name="istatus" >
                <?php if ($row['item_status']==0) {?>
                    
                    <option value="0" selected>PENDING</option>
                    <option value="1">BOUGHT</option>
                    <option value="2">NOT AVAILABLE</option>
                <?php }else if ($row['item_status']==1) {  ?>
                    <option value="0" >PENDING</option>
                    <option value="1" selected>BOUGHT</option>
                    <option value="2">NOT AVAILABLE</option>
                <?php }else if ($row['item_status']==2) {  ?>
                    <option value="0" >PENDING</option>
                    <option value="1">BOUGHT</option>
                    <option value="2" selected>NOT AVAILABLE</option>
                    <?php }  ?>
            </select>
        </div>


        <div>
            <label>Date </label>
            <input type="date" name="idate" value=<?php echo $row['date'];  ?>  >
        </div>
 
        <input type="submit" value="Update" name='btn'>
    </form>



    
</body>
</html>