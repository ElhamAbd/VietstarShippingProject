<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="shippingStyles.css">
<script src="Scripts/swfobject_modified.js"></script>
<link rel="shortcut icon" href="images/Vietstar Shipping Company Logo (No Background).png">
</head>


    <body>
        <div class="container1">
            <form action="shippingForm_BE.php" method="POST" class="form">
                <!-- Sender's information -->
                <div class="sender">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" tabindex="1" required>
                </div>
                <div class="sender">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="first_name" name="last_name" placeholder="Last Name" tabindex="2" required>
                </div>
                <div class="sender">
                    <label for="address1" class="form-label">Address1</label>
                    <input type="text" class="form-control" id="address1" name="address1" placeholder="Address" tabindex="3" required>
                </div>
                <div class="sender">
                    <label for="address2" class="form-label">Address2</label>
                    <input type="text" class="form-control" id="address2" name="address2" placeholder="Apt., PMB#, etc." tabindex="4">
                </div>
                <div class="sender">
                    <label for="zip_code" class="form-label">Zip Code</label>
                    <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip Code" tabindex="5" required>
                </div>
                <div class="sender">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="City" tabindex="6" required>
                </div>
                <div class="sender">
                    <label for="state" class="form-label">State</label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="State" tabindex="7" required>
                </div>
                <div class="sender">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" tabindex="8" required>
                </div>
                <div class="sender">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" tabindex="9" required>
                </div>

                <!-- Recipient's information -->

                <div class="recipient">
                    <label for="first_name_r" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name_r" name="first_name_r" placeholder="First Name" tabindex="10" required>
                </div>
                <div class="recipient">
                    <label for="last_name_r" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name_r" name="last_name_r" placeholder="Last Name" tabindex="11" required>
                </div>
                
        </div>
    </body>

</html>
