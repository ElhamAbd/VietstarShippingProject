<?php
    include('connect.php');
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    ?>

<?php
if(isset($_GET['Del']))
         {
            $customer_id = $_GET['Del'];
             $query = " delete from customer where customer_id=:customer_id";
             $stmt = $db->prepare($query);
             $result = $stmt->execute(array(
                 ':customer_id' => $customer_id
             ));
             if($result)
             {
                 header("location:customer.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:customer.php");
         }
         ?>