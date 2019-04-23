<?php
define("ROOT_URL", $_SERVER['DOCUMENT_ROOT'].'/flower/Dashboard/');
define("LOADER", ROOT_URL.'App/Views/Utils/classes_loader.php');

if($_FILES['image']['name'] != ''){
  $tmp=explode(".", $_FILES['image']['name']);
  $extension = end($tmp);  
  $allowed_type = array("jpg", "jpeg", "png", "gif","PNG");
  if(in_array($extension, $allowed_type)){
  	require LOADER;
  	$flower=$function->sanitize($_POST['flower']);
  	$price=$function->sanitize($_POST['price']);
  	$items=$function->sanitize($_POST['items']);
  	$description=$function->sanitize($_POST['comment']);
  	$new_name = rand() . "." . $extension;
  	$path = ROOT_URL.'upload/'.$new_name;
  	if(move_uploaded_file($_FILES['image']['tmp_name'], $path)){
  		$save_status=$admin->saveFlower($flower,$price,$items,$new_name,$description);
  		if($save_status){
  			echo "200";
  		}else{
  			echo "System Error Please Contact System Administrator.";
  		}
  	}else{
  		echo "Error while Uploading FLower Image.Please contact Your system admin";
  	}
  }else{
  	echo "Invalid File format";
  }
}else{
	echo "Please select a flower image";
}
?>