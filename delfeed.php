<?php
	require_once('../controllers/database.php');
	$id = $_POST['x'];
	$getimg = "SELECT picture FROM feedback WHERE id_pk = '$id'";
	$gres = mysqli_query($database->connection,$getimg);
	$grow = mysqli_fetch_array($gres);
	$image = '../images/feedback/'.$grow['picture'];

	$del = "DELETE FROM feedback WHERE id_pk = '$id'";
	$res = mysqli_query($database->connection,$del);
	if($res){
		unlink($image);
		echo "Data successfully deleted";
	}else{
		echo "Data not deleted";
	}
?>