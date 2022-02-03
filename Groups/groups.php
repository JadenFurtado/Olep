<?php   

include($_SERVER['DOCUMENT_ROOT'].'/olep.org/config.php');

class Groups extends Database{
	public function get_members(){
		$link = $this->connection();
		$sql="SELECT * FROM ppc_members WHERE designation='animator' OR designation='co-ordinator' ORDER BY Zone";
		$res = mysqli_query($link,$sql);
		return $res;
	}

	public function get_ppc_head(){
		$link = $this->connection();
		$sql="SELECT * FROM ppc_members WHERE designation='PPC head'";
		$res = mysqli_query($link,$sql);
		return $res;
	}

	public function get_ppc_vice_president(){
		$link = $this->connection();
		$sql = "SELECT * FROM ppc_members WHERE designation='PPC Vice President'";
		$res = mysqli_query($link,$sql);
		return $res;
	}

	public function get_ppc_secretary(){
		$link = $this->connection();
		$sql = "SELECT * FROM ppc_members WHERE designation='PPC Secretary'";
		$res = mysqli_query($link,$sql);
		return $res;
	}

	public function get_ppc_heads(){
		$link = $this->connection();
		$sql = "SELECT * FROM ppc_members WHERE designation LIKE 'Head%'";
		$res = mysqli_query($link,$sql);
		return $res;
	}

	public function get_religious(){
		$link = $this->connection();
		$sql = "SELECT * FROM ppc_members WHERE designation LIKE 'Parish%' OR designation LIKE 'Sister%' ORDER BY designation";
		$res = mysqli_query($link,$sql);
		return $res;
	}

}