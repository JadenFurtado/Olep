<?php 

include($_SERVER['DOCUMENT_ROOT'].'/olep.org/Config.php');

class Home extends Database{
	//fetches 1st 4 posts
	public function Home_content(){
		$sql = "SELECT * FROM posts LIMIT 4";
		$db = new Database();
		$link = $db->connection();
		$res = mysqli_query($link,$sql);
		$db->close_connection($link);
		return $res;
	}
}