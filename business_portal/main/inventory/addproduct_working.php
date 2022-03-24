<?php 
include('../connect.php');
include('function.php');
require_once('auth.php');
$position=$_SESSION['SESS_POSITION'];
$name=$_SESSION['SESS_NAME'];
$finalcode=createRandomPassword();
?>
<html>
<head>
<title>Vietstar_Shipping</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/navbar.css" media="screen" rel="stylesheet" type="text/css" />
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
</head>

<body>
	
<form action="saveproduct.php" method="post" autocomplete="on" onSubmit="return formValidation();">
	<center><h4><i class="icon-plus-sign icon-large"></i> Add Product</h4></center>
	<hr>
	<div id="ac">
	<span>UPC: </span><input type="text" style="width:265px; height:30px;" id="product_code" name="product_code" required/><br>
	<span>Product Name: </span><input type="text" style="width:265px; height:30px;" id="product_name" name="product_name" required><br>
	<span>Category: </span><input type="text" style="width:265px; height:30px;" name="product_category" list="category" required><br>
	<datalist id="category">
		<option>Dairy</option>
		<option>Snack</option>
		<option>Food</option>
	</datalist>
	<span>Position: </span><input type="text" style="width:265px; height:30px;" name="product_location" ><br>
	<span>Selling Price : </span><input type="text" id="unit_price" style="width:265px; height:30px;" name="unit_price" onkeyup="sum();" required/><br>
	<!--<span>Quantity: </span><input type="number" style="width:265px; height:30px;" min="0" id="txt11" onkeyup="sum();" name="qty_onhand" Required ><br>-->
	<span></span><input type="hidden" style="width:265px; height:30px;" id="txt22" name="qty_supplied" Required ><br>
	<div style="float:right; margin-right:10px;">
	<button class="btn btn-success btn-block btn-large" style="width:267px;">Submit</button>
	</div>
	</div>
</form>

<script>
function formValidation() {
	var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
	var unit_price = $('#unit_price').val();

	// checking if selling price is a number
  if (!numberRegex.test(unit_price)) {
    alert("Xin vui lòng nhập chữ số cho giá bán - Please enter a number for Selling Price");
    return false;
  } 
  return true;
}

$(document).ready(function(){
	$("#product_name").change(function(){
		var product_code = $('#product_code').val();
		$.ajax({
			type: 'GET',
			url: 'checkproductcode.php',
			dataType: 'json',
			data: {'product_code':product_code},
			success: function(response){
				if (response.num == 1) {
					alert('Universal Product Code (UPC) exists');
				}
			},
			error: function(){
				alert("Get ERROR when request checkproductcode.php");
			}
 		});
  });


});
</script>
</body>

</html>