<html>
<head><title>Registered Ingredients</title></head>
<body>
<?php
	$mysqli = new mysqli("localhost","root","","hfl");
	if ($mysqli->connect_errno) {
	    printf("Connect failed: %s\n", $mysqli->connect_error);
	    exit();
	}

	$sql="SELECT * FROM ingredients";
	$result=$mysqli->query($sql);
?>
<h1 align="center">Registered Ingredients Modified</h1>
<table border="1" cellpadding="2" align="center">
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Details</td>
		<td>Category</td>
		<td colspan="2" align="center">Action</td>
	</tr>
	<?php while($row=mysqli_fetch_array($result)) 
	{ ?>
	<tr>
		<td><?php echo $row['id'] ?></td>
		<td><?php echo $row['name'] ?></td>
		<td><?php echo $row['details'] ?></td>
		<td><?php echo $row['category'] ?></td>
		<td><a href="ingredients.php?action=edit&id=<?php echo $row['id'] ?>">Update</a></td>
		<td><a href="ingredients_action.php?action=delete&id=<?php echo $row['id'] ?>" 
		onClick="return(confirm('Are you sure you want to delete this record?'));">Delete</a></td>
	</tr>
	<?php } ?>
</table>
<br><center><a href="ingredients.php">Add new</a></center>
</body>
</html>