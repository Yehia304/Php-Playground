<?php 

$maincolor = '#FFF';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$maincolor = $_POST['color'];

	setcookie('Background',$maincolor,time()+3600,'/');

}

if(isset($_COOKIE['Background'])){

	$body = $_COOKIE['Background'];
}

else {
	$body = $maincolor;
}


 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>COOKIE TRAINING</title>
 </head>
 <body style="background-color: <?php echo $body; ?>">

 	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
 		<input type="color" name="color">
 		<input type="submit" name="Change color">	

 	</form>
 
 </body>
 </html>