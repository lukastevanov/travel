<?php

session_start();

if(isset($_SESSION['lemail'])){
	
	echo "postavljena";
}else{
	
	echo "nije";
}


?>