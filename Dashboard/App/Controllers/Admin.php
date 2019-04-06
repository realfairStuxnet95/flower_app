<?php 

class Admin extends Execute {

	//function to get user email
	public function saveFlower($name,$price,$items,$poster,$description){
		$array=array("name"=>$name,"description"=>$description,"price"=>$price,"items"=>$items,"poster"=>$poster,"tags"=>"beautiful flower","status"=>"ACTIVE");
		return $this->multi_insert(Tables::flower(),$array);
	}
	public function add_images($flower_id,$image_path){
		$array=array("flower_id"=>$flower_id,"image_path"=>$image_path,"status"=>"ACTIVE");
		return $this->multi_insert(Tables::images(),$array);
	}
	public function loadFlowers(){
		$sql="SELECT * FROM ".Tables::flower()." ORDER BY id DESC LIMIT 10";
		return $this->querying($sql);
	}
	public function loadPublicFlowers(){
		$sql="SELECT * FROM ".Tables::flower()." WHERE status='ACTIVE' ORDER BY id DESC LIMIT 10";
		return $this->querying($sql);
	}
	public function load_images($flower_id){
		$sql="SELECT * FROM ".Tables::images()." WHERE flower_id=\"$flower_id\" ORDER BY id DESC LIMIT 10";
		return $this->querying($sql);
	}
	public function getFlowerDetails($flower_id){
		$sql="SELECT * FROM ".Tables::flower()." WHERE id=\"$flower_id\" ORDER BY id DESC LIMIT 10";
		return $this->querying($sql);
	}
	public function removeFlower(){
		
	}
	public function delete_flower($flower_id){
		$sql="DELETE FROM ".Tables::flower()." WHERE id=\"$flower_id\" LIMIT 1";
		return $this->updating($sql);
	}
	public function generateHash(){
		$bytes = openssl_random_pseudo_bytes(32);
		$hash = base64_encode($bytes);
		return $hash;
	}
	public function saveReview($comment,$name,$email,$flower_id){
		$array=array("comment"=>$comment,"names"=>$name,"email"=>$email,"status"=>"PENDING","flower_id"=>$flower_id);
		return $this->multi_insert(Tables::reviews(),$array);
	}
	public function loadreviews(){
		$sql="SELECT * FROM ".Tables::reviews()." ORDER BY id DESC LIMIT 50";
		return $this->querying($sql);
	}
	public function loadFlowerReview($flower_id){
		$sql="SELECT * FROM ".Tables::reviews()." WHERE flower_id=\"$flower_id\" ORDER BY id DESC LIMIT 50";
		return $this->querying($sql);
	}
	public function reviewsCounter(){
		$sql="SELECT COUNT(id) FROM ".Tables::reviews()." WHERE status='PENDING'";
		$reviews=$this->querying($sql);
		$counter=0;
		foreach ($reviews as $key => $value) {
			$counter=(int)$value['COUNT(id)'];
		}
		return $counter;
	}
}
$admin=new Admin();
?>