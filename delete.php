<body style="background-color:powderblue;"></body>

<?php 

 include('includes/header.php');
if ($_SESSION['Username'] == 'root'){
 $_POST['ProdID'] = $_GET['id'];
 $_POST['ProductName'] = "";
 $_POST['ProductPicture'] = "";
 $_POST['ProductPrice'] = "";

  $delete = validateProduct('delete');
  header("Location: admin.php");
}else{
}


 include('includes/footer.php');
?>