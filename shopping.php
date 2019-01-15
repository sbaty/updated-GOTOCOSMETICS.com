<!DOCTYPE html>
    <meta charset="UTF-8">
<?php

  include "includes/header.php";

$rows = selectAllProducts();
 ?>

<head>
<title> GoToCosmetics.com</title>
</head>
<body style="background-color:powderblue;">
<h1> <center>Welcome to GoToCosmetics.com, your one stop shop <br>for all things beauty!</center></h1>
<p style="color: red"align="center"> We offer a wide range of cosmetics, from eyeshadow to blush to eyebrow wax, we've got it all!</p>
<p> <center>Check out our 2018 list of BestSellers</center></p>

      <p> <center><a href="order.php">Place an Order here!</a> </center></p>

	<table border="1" padding="2">
	<tr>
	<?php
		$colCount = 0;
		foreach ($rows as $row){
		    if ($colCount % 6 != 0){
			echo'<td><img src="'. $row['ProductPicture'] . '" width="150em" height="150em"><br>'. $row['ProductName'] .'-'. $row['ProductPrice'] .'</a></td>';
		    }else{
			echo'</tr><tr>';
			echo'<td><img src="'. $row['ProductPicture'] . '" width="150em" height="150em"><br>'. $row['ProductName'] .'-'. $row['ProductPrice'] .'</a></td>';
		    }
		   $colCount++;
		}

	?>
	</tr>
	
	</table>

  
<?php
 include "includes/footer.php";
?>
</body>


</html>