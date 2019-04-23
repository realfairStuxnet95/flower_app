<?php 
define("ROOT_URL", $_SERVER['DOCUMENT_ROOT'].'/flower/Dashboard/');
define("LOADER", ROOT_URL.'App/Views/Utils/classes_loader.php');
require LOADER;
$success="200";
$error="403";
if(isset($_POST['input'])){
	if(is_array($_POST['input'])){
		$input=$_POST['input'];
		//get action
		$action=$function->sanitize($input[0]);
		if($action=='login_user'){
			$username=$function->sanitize($input[1]);
			$password=$function->sanitize($input[2]);

			$login_status=$login->validate_login($username,$password);
			if($login_status){
				//get session data
				$sessionData=$login->session_data($username,$password);
				if(count($sessionData)>0){
					if (session_status() == PHP_SESSION_NONE) {
					    session_start();
					}
					foreach ($sessionData as $key => $value) {
						$_SESSION['user_id']=$value['user_id'];
						$_SESSION['user_names']=$value['username'];
						$_SESSION['user_type']=$value['user_type'];
					}
					echo $success;
				}else{
					echo "404";
				}
			}else{
				echo '404';
			}
		}elseif($action=='delete_flower'){
			$flower_id=$function->sanitize($input[1]);
			$delete_status=$admin->delete_flower($flower_id);
			if($delete_status){
				echo $success;
			}else{
				echo $error;
			}
		}elseif($action=='add_review'){
			$comment=$function->sanitize($input[1]);
			$name=$function->sanitize($input[2]);
			$email=$function->sanitize($input[3]);
			$flower_id=$function->sanitize($input[4]);
			$save_status=$admin->saveReview($comment,$name,$email,$flower_id);
			if($save_status){
				echo $success;
			}else{
				echo $error;
			}
		}
		else{
			echo "500";
		}
	}else{
		echo "500";
	}
}else{
	echo "500";
}
?>