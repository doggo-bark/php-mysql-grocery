<?php
    include "connect.php";
    if (isset($_POST['btn'])){
        $tmp=$_POST['idate'];
        $query="select * from grocerytb where date='$tmp'";
        $result=mysqli_query($con,$query);
    }
    else{
        $query="select * from grocerytb";
        $result=mysqli_query($con,$query);
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
    <form action="" method="post">
        <input type="date" name="idate">
        <input type="submit" name="btn" value="filter">
    </form>
    <?php
        //list
        while ($row=mysqli_fetch_array($result)){
            ?>
			<div>
			
			<?php
			echo $row['item_name'];
            echo "  ";
            echo $row["item_quantity"];
            echo "  ";
            if ($row['item_status']==0){echo "PENDING";}
            if ($row['item_status']==1){echo "BOUGHT";}
            if ($row['item_status']==2){echo "NOT AVAILABLE";}
            echo "  ";
			?>
			<a href="./update.php?id=<?php echo $row['id'];?>" >Update</a>
			<a href="./delete.php?id=<?php echo $row['id'];?>" >Delete</a>
		</div>
            <?php
        }
    ?>



</body>
</html>