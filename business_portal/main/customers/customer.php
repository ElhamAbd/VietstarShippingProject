<!DOCTYPE>
<html>
<head>
<title>Dashboard</title>
<meta name ="viewport" content ="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/lib/bootstrap.css">
<link rel="stylesheet" href="../css/lib/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/styles.css">
<link rel="stylesheet" type="text/css" href="../css/maindashboard.css">
<link rel="stylesheet" type="text/css" href="../css/navbar.css">
<script src="js/scripts.js"></script>
<style>
    
	table{
		border-collapse: collapse;
		width: 100%;
		color: #588c7e;
		font-family: monospace;
		font-size : 25px;
		text-align: left;
	}
	th{
		background-color: #588c7e;
		color:black;
	}
	tr:nth-child(even) {background-color: #f2f2f2
	}
	.sticky {
		position: fixed;
		top: 53 px;
	}

	.top-sticky {
		position: fixed;
		top: 0;
		width: 100%;
}
</style>	
</head>
<body>
  <?php include '../navfixed.php';?>
	<nav class="navbar-primary sticky">
		<a href="#" class="btn-expand-collapse"><span class="glyphicon glyphicon-menu-left"></span></a>
		<ul class="navbar-primary-menu">
			<li> <a class="d-flex align-items-center pl-3 text-white text-decoration-none"><span class="fs-4">Dashboard</span></a></li>
			<li class="active"><a href="#" class="nav-link text-white"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li>             
			<li><a href="shipping/index.php" class="nav-link text-white"><i class="icon-truck icon-2x icon-2x"></i> Shipping</a></li>
			<li><a href="inventory/index.php" class="nav-link text-white"><i class="icon-list-alt icon-2x"></i> Inventory</a></li>
			<li><a href="#" class="nav-link text-white"><i class="icon-group icon-2x"></i>Customers</a></li>
			<li><a href="#" class="nav-link text-white"><i class="icon-bar-chart icon-2x"></i> Sales Report</a></li>		
		</ul>
	</nav><!--/.navbar-primary-->
     <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Customer </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer name</th>
                                    <th>address</th>
                                    <th>city</th>
                                    <th>state</th>
                                    <th>zip code</th>
                                    <th>email</th>
                                    <th>phone</th>
 
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","root","vietstar_shipping");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM customer WHERE CONCAT(customer_id,cust_name,cust_address,cust_city,cust_state,cust_zipcode,cust_email,cust_phone) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['customer_id']; ?></td>
                                                    <td><?= $items['cust_name']; ?></td>
                                                    <td><?= $items['cust_address']; ?></td>
                                                    <td><?= $items['cust_city']; ?>
                                                    <td><?= $items['cust_state']; ?>
                                                    <td><?= $items['cust_zipcode']; ?>
                                                    <td><?= $items['cust_email']; ?>
                                                    <td><?= $items['cust_phone']; ?></td>
                                                    <td><a href="edit.php?GetID=<?php echo $items['customer_id'] ?>">Edit</a></td>
                                                    <td><a href="recipient.php?customer_id=<?php echo $items['customer_id'] ?>">Recipient</a></td>
                
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
 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>