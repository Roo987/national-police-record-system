<?php
include ('include/dbconfig.php');
if(count($_POST)>0){
	if($_POST['type']==1){
		$username=$_POST['username'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		
		$sql = "INSERT INTO `police`( `username`, `email`,`phone`) 
		VALUES ('$name','$email','$phone')";
		if (mysqli_query($bd, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($bd);
		}
		mysqli_close($bd);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		
		$sql = "UPDATE `police` SET `username`='$username',`email`='$email',`phone`='$phone' WHERE id=$id";
		if (mysqli_query($bd, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($bd);
		}
		mysqli_close($bd);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `police` WHERE id=$id ";
		if (mysqli_query($bd, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($bd);
		}
		mysqli_close($bd);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM police WHERE id in ($id)";
		if (mysqli_query($bd, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($bd);
		}
		mysqli_close($bd);
	}
}

?>