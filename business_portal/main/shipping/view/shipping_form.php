<?php
require_once '../../connect.php';
require_once '../model/shipping_data.php';
$search_input = trim(filter_input(INPUT_GET, 'search_input', FILTER_SANITIZE_STRING));
$customer = search_customer($search_input);
//print_r($customer);
?>
