<!DOCTYPE html>
<html>
<head>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<title>Oksbol Hub</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	
<div id="logo">
	<?php

	include 'config.php';
	include 'post.php';


	?>
</div>

	<nav>
		<ul>
			
		<?php 
						
						

						while ($row=mysqli_fetch_array($result)) {
							$list='<a href="'.$row["links"].'"><li>'.$row["mlinks"].'</li></a>';
							echo $list;
							}

			?>
		</ul>
	</nav>
	

</header>

<div class="clean">
<?php

include 'delete.php';

?>
	<form id="insert" method="post" action="">
     			 <label for="name">Insert name to delete</label>
     			 <input type="text" placeholder="name" name="name1">
  				 <input type="submit" data-inline="true" value="Delete" name="btn1">
     			
  	  			</form> 


</div>

</body>
</html>
