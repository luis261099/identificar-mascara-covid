<?php 
	function Connection(){
	  $server="localhost";
	  $user="aksvi562_nasa";
	  $pass="Grupo78@2019";
	  $db="aksvi562_nasa";
	  
	  $dbh = mysqli_connect($server, $user, $pass);
	  $selected = mysqli_select_db($dbh,"aksvi562_nasa");
	}
  ?>