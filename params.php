<?php 
include 'connect.php';
// get customer with one param
function get_customer($cust_id) {
  echo "<br>Start Get Customer<br>";
  global $db;
  $query = 'SELECT * FROM customer WHERE customer_id = :cust_id';
  $stmt = $db->prepare($query);
  $stmt->bindParam( ':cust_id',$cust_id);
 $stmt->execute();
  $customer = $stmt->fetchAll();
  if ($res) echo '<br>Success<br>';
  else echo '<br>Fail<br>';
  $stmt->closeCursor(); 
  echo "<br>End Get Customer<br>";
  return $customer;
}

// get customer with more than one params
function get_customer_v2($cust_name, $cust_phone) {
  echo "<br>Start Get Customer v2<br>";
  global $db;
  $query = 'SELECT * FROM customer WHERE cust_name = :cust_name  AND cust_phone = :cust_phone';
  $stmt = $db->prepare($query);
  $res = $stmt->execute(array(
    ':cust_name ' => $cust_name,
    ':cust_phone' => $cust_phone
  ));
  $customer = $stmt->fetchAll();
  if ($res) echo '<br>Success<br>';
  else echo '<br>Fail<br>';
  $stmt->closeCursor(); 
  echo "<br>End Get Customer v2<br>";
  return $customer;
}

$customer = get_customer('1'); // call the function 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Document</title>
</head>
<body>
  <header>
  </header>

  <main>
      <p>I am index.php page</p>
       <div>
            Customer Name: <?=$customer[0]['cust_name']?>
            Customer Phone: <?=$customer[0]['cust_phone']?>
      </div>
  </main>

  <footer>
  </footer>
  <script src="scripts.js"></script>
</body>
</html>
