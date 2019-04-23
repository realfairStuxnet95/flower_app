 <?php  
define("ROOT_URL", $_SERVER['DOCUMENT_ROOT'].'/flower/Dashboard/');
define("LOADER", ROOT_URL.'App/Views/Utils/classes_loader.php');
 $output = '';  
 if(is_array($_FILES))  
 {  
    foreach($_FILES['images']['name'] as $name => $value)  
    {  
       $file_name = explode(".", $_FILES['images']['name'][$name]);  
       $allowed_extension = array("jpg", "jpeg", "png", "gif");  
       if(in_array($file_name[1], $allowed_extension))  
       {  
            require LOADER;
            $new_name = rand() . '.'. $file_name[1];  
            $sourcePath = $_FILES["images"]["tmp_name"][$name];  
            $targetPath = ROOT_URL."upload/".$new_name;
            $flower_id=$function->sanitize($_POST['flower_id']); 
            if(move_uploaded_file($sourcePath, $targetPath)){
              $save_status=$admin->add_images($flower_id,$new_name);
              if($save_status){
                $output="200";
              }else{
                $output="Error While saving Image.Please contact system admin";
              }
            }else{
              $output=$targetPath;
            } 
       }  
    }        
 }else{
  $output="Please select Images";
 }
 echo $output;
 ?>