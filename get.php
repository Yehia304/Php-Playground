<?php 


echo $_SERVER['REQUEST_METHOD'];

 ?>

 <form action="control.php" method="post">
 	<input type="text" name="Username">
 	<input type="password" name="Password">
 	<input type="submit" name="Login">
 	
 </form>