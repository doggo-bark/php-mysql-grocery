<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css.style.css">
	
	<title>Add grocery</title>
</head>
<body>
	<h1>Add Grocery list</h1>
	<form action="" method="post">
	<div><label for="">Item name  </label><input type="text" name ="iname" value=""></div>	
	<div><label>Item quantity </label><input type="text" name="iquantity" placeholder="quantity"></div>	
	<div>	<label>Item status</label>
		<select name="istatus" id="">
			<option value=0>PENDING</option>
			<option value=1>BOUGHT</option>
			<option value=2>NOT AVAILABLE</option>
		</select>

	</div>
	<div>	<input type="date" name="idate" placeholder="Date"></div>
	<div>	<input type="submit" value="Add" name="btn"></div>
	</form>


	<?php
		include "connect.php";
		if (isset($_POST['btn'])){
			$iname=$_POST['iname'];
			
			$iqty=$_POST['iquantity'];
			//echo($iqty);
			$istatus=$_POST['istatus'];
			$idate=$_POST['idate'];
			$query="insert into grocerytb(item_name,item_quantity,item_status,date) values('$iname',$iqty,$istatus,'$idate')";
			
			$result=mysqli_query($con, $query);
			 if (!$result) {echo("something is wrong: " .mysqli_error($con));}
		}	
	?>
</body>
</html>