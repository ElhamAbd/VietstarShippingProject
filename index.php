<?php 
include 'connect.php';

// Define get_customers function
function get_customers() { 
  echo "<br>Start Get Customer<br>";
  global $db;
  $query = 'SELECT * FROM customer'; 
  $stmt = $db->prepare($query); // prepare the query
  $res = $stmt->execute(); // execute the query
  if ($res) echo '<br>Success<br>'; // check if the query is executed successfully or not
  else echo '<br>Fail<br>';
  $customer = $stmt->fetchAll(); // get all rows returned by the query
  //print_r($customer);
  $stmt->closeCursor(); // close the query
  echo "<br>End Get Customer<br>";
  return $customer;
}

$customers = get_customers(); // call the function 
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

      <?php for ($i = 0; $i < count($customers); $i++) { ?>
      
            Customer Name: <?=$customers[$i]['cust_name']?>
            Customer Phone: <?=$customers[$i]['cust_phone']?>
      </div>

      <?php } ?>
  </main>

  <footer>
  </footer>
  <script src="scripts.js"></script>
</body>
</html>
