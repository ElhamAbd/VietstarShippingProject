<form action="saveproduct.php" method="post" autocomplete="on" onSubmit="return formValidation();">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Product</h4></center>
<hr>
<div id="ac">
<span>UPC: </span><input type="text" style="width:265px; height:30px;" name="product_code" required/><br>
<span>Product Name: </span><input type="text" style="width:265px; height:30px;" name="product_name" required><br>
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
