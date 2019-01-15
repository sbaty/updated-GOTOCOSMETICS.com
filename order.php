<!DOCTYPE html>
<meta charset="UTF-8" />


<?php include "includes/header.php";
// add the information for the drop down

$rows = selectAllProducts();

 ?>

<head>
<title> GoToCosmetics.com</title>
</head>
<body style="background-color:powderblue;">
<h1> <center>Welcome to GoToCosmetics.com, your one stop shop <br>for all things beauty!</center></h1>
<p style="color: red"align="center"> We offer a wide range of cosmetics, from eyeshadow to blush to eyebrow wax, we've got it all!</p>
<p> <center>Place Your Order Below</center></p>

<body>
<!--Build a form to place orders-->
<form action="purchase.php" method="post">
    <fieldset>
	<legend><strong>Personal information</strong></legend>
	 <table>
 	 <tr>
    <td>
    
    First name:<br>
    <input type="text" name="firstname" value="">
    <br>
    Last name:<br>
    <input type="text" name="lastname" value="">
    <br>
    Street Address:<br>
    <input type="text" name="address" value="">
    <br>
    </td>
    <td>
	<br>
    City:<br>
    <input type="text" name="city" value="">
    <br>
    State:<br>
    <input type="text" name="state" value="">
    <br>
    Zipcode:<br>
    <input type="text" name="zipcode" value="">
    <br><br>
    </td>
    </tr>
    </table> 
    </fieldset>

    <fieldset>
     <legend><strong>Product Order</strong></legend>

      Product Selection:<br> <select multiple name="productSelection[]">
             <?php
		foreach ($rows as $row){
			echo'<option value="'.$row['ProductName'].'">'.$row['ProductName'].'-'. $row['ProductPrice'] .'</option>';

		}
              ?>
			
		       </select><br>

     Comments:<br>
	 <textarea name="comments"></textarea><br>

    </fieldset>
   
    <fieldset>
	<legend><strong>Credit Card Information</strong></legend>
	  <img src="img/card.png" width="230em" height="40em"><br>
	  <input type="radio" name="cardType" value="MasterCard">MasterCard<br>
	  <input type="radio" name="cardType" value="Visa"> Visa<br>
	  <input type="radio" name="cardType" value="Discover"> Discover<br>
	  <input type="radio" name="cardType" value="Amex">American Express<br><br>

	  Card Number: <input type="number" name="cardNum" value="">
          Exp Date: <input type="date" name="expDate"><br>

    </fieldset><br>
    <input type="submit" class="btn btn-success btn-lg" value="Submit">
  </fieldset>
</form>



</body>

<?php 
 include "includes/footer.php";
?>


</html>