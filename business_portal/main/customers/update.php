<?php
    include('connect.php');
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    ?>

<?php 



    if(isset($_POST['update']))
    {
        $customer_id = $_GET['ID'];
        $cust_name = $_POST['name'];
        $cust_email = $_POST['email'];
        $cust_phone = $_POST['PHONE'];

        $query = " update customer set cust_name = '".$cust_name."', cust_email='".$cust_email."',cust_phone='".$cust_phone."' where custom_id='".$customer_id."'";
        $result = mysqli_query($con,$query);

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