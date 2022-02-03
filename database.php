<?php 


class connection{
	// create a DB connection
	public function database_connection(){
		$link = new mysqli("localhost","root","","olep");
		return $link;
	}
	// close a DB connection
	public function close_connection($link){
		mysqli_close($link);
	}
}