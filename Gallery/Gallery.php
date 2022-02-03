<?php  

include($_SERVER['DOCUMENT_ROOT'].'/olep.org/database.php');

class Gallery extends Database{
	public function get_images(){
	//	$link = $this->database_connection();
	//	$sql = "SELECT * FROM images";
	//	$res = mysqli_query($link,$sql);
	//	$this->close_connection($link);
		return $res;
	}
}