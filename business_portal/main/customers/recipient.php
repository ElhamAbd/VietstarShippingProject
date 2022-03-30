<?php
    include('connect.php');
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    ?>

<?php 
  
    $con = mysqli_connect("localhost","root","root","vietstar_shipping");

    if(isset($_GET['GetID']))
    {
        $filtervalues = $_GET['GetID'];
        $query = "SELECT * FROM recipient WHERE CONCAT(recipient_id,recipient_name,recipient_address,recipient_phone,recipient_email) LIKE '%$filtervalues%' ";
        $query_run = mysqli_query($con, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $items)
            {
                ?>
                <tr>
                    <td><?= $items['recipient_id']; ?></td>
                    <td><?= $items['recipient_name']; ?></td>
                    <td><?= $items['recipient_phone']; ?></td>
                    <td><?= $items['customer_id']; ?>
                    <td><?= $items['recipient_email']; ?>
            


                </tr>
                <?php
            }
        }
        else
        {
            ?>
                <tr>
                    <td colspan="4">No Record Found</td>
                </tr>
            <?php
        }
    }
 
?>

         ?>