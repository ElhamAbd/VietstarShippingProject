<?php
    include('connect.php');
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    ?>
    <?php 



            if(isset($_POST['update']))
            {
                $recipient_id = $_GET['ID'];
                $recipient_name = $_POST['name'];
                $recipient_email = $_POST['email'];
                $recipient_phone = $_POST['phone'];

                $query = "update recipient set recipient_name=:recipient_name, recipient_email=:recipient_email, recipient_phone=:recipient_phone where recipient_id=:recipient_id";  
                $stmt = $db->prepare($query);
                $result = $stmt->execute(array(
                    ':recipient_name' => $recipient_name,
                    ':recipient_email' => $recipient_email,
                    ':recipient_phone' => $recipient_phone,
                    ':recipient_id' => $recipient_id
                ));

                if($result)
                {
                    echo 'sucess';
                   // header("location:customer.php");
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
