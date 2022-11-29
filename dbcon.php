<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "mahalaxmi";

$conn = mysqli_connect($server,$username,$password,$database);

if($conn)
{
	
}
else
{ 
	?>
	<script>
		alert("Connection unsuccessfull!!!");
	</script>
	<?php

}

 ?>