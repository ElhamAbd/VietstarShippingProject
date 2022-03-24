<?php
echo "inventory/test.php";
require_once '../connect.php';
require_once 'function.php';

if (is_product_exist('sku015')) echo 'Prod Exists';
else echo 'prod not exists';

?>
