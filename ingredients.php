<?php
	if(isset($_GET['action'])){
		$id=$_GET['id'];
		$action=$_GET['action'];
		
		if($action=="edit"){
			$db=mysqli_connect("localhost","root","","hfl");
			$sql="SELECT * FROM ingredients WHERE id=".$id;
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_array($result);
			$btn="Update";
			
		}
	}
	else{
		$action="add";
		$id=0;
		$row=null;
		$btn="Register";
	}
?>

<html>
<head><title>Register Ingredients</title></head>
<body>
<h1 align="center">Register Ingredients</h1>
<form action="ingredients_action.php?action=<?php echo $action ?>&id=<?php echo $id ?>" method="POST">
<table align="center">
	<tr>
		<td>Name: </td>
		<td><input type="text" name="name" value="<?php echo $row['name'] ?>"></td>
	</tr>
	
	<tr>
		<td>Details: </td>
		<td><input type="text" name="details" value="<?php echo $row['details'] ?>"></td>
	</tr>
	
	<tr>
		<td>Category: </td>
		<td><input type="text" name="category" value="<?php echo $row['category'] ?>"></td>
	</tr>
	
	<tr>
		<td></td>
		<td align="center"><br><input type="submit" value="<?php echo $btn ?>"></td>
	</tr>
</table>
</form>
</body>
</html>