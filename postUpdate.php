<body style="background-color:powderblue;"></body>

<?php

include ('includes/header.php');
if ($_SESSION['Username'] == 'root'){
 $_POST['ProductPicture'] ="";
 $update = validateProduct('update');
 header("Location: admin.php");
}else{
}
include ('includes/footer.php');

?>