<?php
function getPosts(){
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "olep";
    $conn = new mysqli($servername, $username, $password, $dbname);
 
    $sql = "SELECT * FROM posts"; 
    if ($res = mysqli_query($conn, $sql)) { 
        if (mysqli_num_rows($res) > 0) {
          return $res;  
        }  
        else { 

        } 
    }//res ends here 
    else { 
    echo "ERROR: Could not able to execute $sql. ".mysqli_error($link); 
    }
}
?>