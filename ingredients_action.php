<?php
	$id=$_GET['id'];
	$action=$_GET['action'];
	$name=$_POST['name'];
	$details=$_POST['details'];
	$category=$_POST['category'];
	
	if($action=="edit"){
		$sql="UPDATE ingredients SET name='$name',details='$details',category='$category' WHERE id=".$id;
	}
	elseif($action=="add"){
		$sql="INSERT INTO ingredients(name,details,category) VALUES('$name','$details','$category')";
	}
	elseif($action=="delete"){
		$sql="DELETE FROM ingredients WHERE id=".$id;
	}
	
	$mysqli = new mysqli("localhost","root","","hfl");
	if ($mysqli->connect_errno) {
	    printf("Connect failed: %s\n", $mysqli->connect_error);
	    exit();
	}
	$mysqli->query($sql); # You can do stuff here for proper error handling
	header("location:ingredients_view.php");
?>