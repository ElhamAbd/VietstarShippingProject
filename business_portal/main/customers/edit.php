    <?php 

        require_once("connect.php");
        $items['customer_id'] = $_GET['GetID'];
        $query = " select * from records where customer_id='".$items['customer_id']."'";
        $result = mysqli_query($con,$query);

        while($row=mysqli_fetch_assoc($result))
        {
            $$customer_id = $row['$customer_id'];
            $cust_name = $row['cust_name'];
            $cust_email = $row['cust_email'];
            $cust_phone = $row['cust_phone'];
        }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">
    <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="card mt-5">
                            <div class="card-title">
                                <h3 class="bg-success text-white text-center py-3"> Update Form in PHP</h3>
                            </div>
                            <div class="card-body">

                                <form action="update.php?ID=<?php echo $customer_id ?>" method="post">
                                    <input type="text" class="form-control mb-2" placeholder=" User Name " name="name" value="<?php echo $cust_name ?>">
                                    <input type="email" class="form-control mb-2" placeholder=" User Email " name="email" value="<?php echo $cust_mail ?>">
                                    <input type="text" class="form-control mb-2" placeholder=" User Age " name="age" value="<?php echo $cust_phone ?>">
                                    <button class="btn btn-primary" name="update">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
</body>
</html>