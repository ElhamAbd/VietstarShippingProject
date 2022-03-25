
<!DOCTYPE html>
<html lang="en">

<head>
    <title>VietStar Shipping Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <link href="./testcase.css" rel="stylesheet" type="text/css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet"> 
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script src="js/datatables.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="shippingStyles.css">
<script src="Scripts/swfobject_modified.js"></script>
<link rel="shortcut icon" href="images/Vietstar Shipping Company Logo (No Background).png">

<script src="js/datatables.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script defer src="formValidationScript.js"></script>

<style>
    .err { background: #ffe6ee; border: 1px solid #b1395f; }
    .emsg { color: #c12020; font-weight: bold; }
</style>
    <script>

			function doSubmit()
			{
				alert("You have successfully submitted your shipping form");
				return;
				}
			function validateName()
			{
				var name = document.shippingForm_BE.full_name.value;
				if (name.length == 0) return false;
				return true;
			}
			function validatePhone()
			{
				var phone = document.shippingForm_BE.num_of_package.value;
				if (num_of_package.length == 0) return false;
				return true;
			}
			function validateMail()
			{
				var mail = document.shippingForm_BE.mail.value;
				if (mail.length == 0) return false;
				return true;
			}
			function validateAddress()
			{
				var address = document.shippingForm_BE.address.value;
				if (address.length == 0) return false;
				return true;
			}
			function validateCity()
			{
				var city = document.shippingForm_BE.city.value;
				if (city.length == 0) return false;
				return true;
			}
			function validateZip()
			{
				var zip = document.shippingForm_BE.zip.value;
				if (zip.length == 0) return false;
				return true;
			}
			function validateState()
			{
				var state = document.shippingForm_BE.state.value;
				if (state.length == 0) return false;
				return true;
			}
            function validateState()
			{
				var state = document.shippingForm_BE.state.value;
				if (state.length == 0) return false;
				return true;
			}
            function validateState()
			{
				var state = document.shippingForm_BE.state.value;
				if (state.length == 0) return false;
				return true;
			}
            function validateState()
			{
				var state = document.shippingForm_BE.state.value;
				if (state.length == 0) return false;
				return true;
			}function validateState()
			{
				var state = document.shippingForm_BE.state.value;
				if (state.length == 0) return false;
				return true;
			}function validateState()
			{
				var state = document.shippingForm_BE.state.value;
				if (state.length == 0) return false;
				return true;
			}
    </script>
</head>

<body>

    <nav class="navbar1  p-md-1 navbar-style navbar-topbar navbar-expand-lg  navbar-dark text-light">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    
                </li>
               
            </ul>
            <h6 style="text-align: center;"> Shipping service to vietnam</h6>
        </div>
    </nav>
    <!--Navbar starts here-->
    
    <div id="header" class="p-md-4">
        

        <h1>VIETSTAR SHIPPING & TRAVEL</h1>
    </div>

    <!--Navigation Bar Starts-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-0 rounded sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./Assets/logo/NewVietstarLogo.png" alt="Avatar Logo"
                        style="width:40px;" class="rounded-pill">
            </a>
            <a class="navbar-brand" href="#">
                <img src="./Assets/logo/VIETSTAR.png" width="150" height="40" class="d-inline-block align-top" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Shipping
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./shipping.php">Shipping Form</a></li>
                            <li><a class="dropdown-item" href="./customFees.html">Custom Fees</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./trackPage.html">Track Shipment</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Our Mission</a></li>
                            <li><a class="dropdown-item" href="./faq.html">FAQ</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./contactUs.html">Contact us</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <form class="d-flex search-bar">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>

            </div>
        </div>
    </nav>
    
    <!--Navigation Bar ends-->

    <div class="exit_button">
        <a href="cusHomepage.html">
            <button class="btn btn-primary" type="button">Exit Shipping Form</button>
        </a>
    </div>
    <div class="container mt-5">
        <form name= "shippingForm_BE" action="shippingForm_BE.php" method="POST" class="row g-5 needs-validation"> 

            <div class="col-md-6" id="sender_border">
                <!-- Sender's information -->

                <h3>Sender's Information</h3> </br></br>
                
                <div class="row">

                    <div class="col-md-6">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" tabindex="1" required>
                        <div id="emsg_first_name" class="emsg_first_name"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="num_of_package" class="form-label">Number of Package</label>
                        <input type="number" class="form-control" id="num_of_package" name="num_of_package" placeholder="1" tabindex="2" required>
                        <div id="emsg_last_name" class="emsg_last_name"></div>
                    </div>
                    <div class="col-md-12">
                        <label for="package_value" class="form-label">Package item value</label>
                        <input type="number" class="form-control" id="package_value" name="package_value" placeholder="Package Valued at" tabindex="3" required>
                        <div id="emsg_address1" class="emsg_address1"></div>
                    </div>
                    <div class="col-md-12">
                        <label for="address1" class="form-label">Address 1</label>
                        <input type="text" class="form-control" id="address1" name="address1" placeholder="Streer., Apt., PMB#, etc." tabindex="4" required>
                    </div>
                    <div class="col-md-4">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" tabindex="5" required>
                        <div id="emsg_city" class="emsg_city"></div>
                    </div>
                    <div class="col-md-4">
                        <label for="zip_code" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip Code" tabindex="6" required minlength="5" maxlength="10">
                        <div id="emsg_zip_code" class="emsg_zip_code"></div>
                    </div>
                    <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                        <select name="state" id="state" tabindex="7" required>
                            <option value=""></option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                        <div id="emsg_state" class="emsg_state"></div>
                    </div>
                    <div class="col-md-8">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="8" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        <div id="emsg_email" class="emsg_email"></div>
                    </div>
                    <div class="col-md-4">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="phone"class="form-control" id="phone" name="phone" placeholder="Phone" tabindex="9" required minlength="10">
                        <div id="emsg_phone" class="emsg_phone"></div>
                    </div>
                    <div class="col-md-12">
                        <label for="location" class="form-label">Send To</label>
                        <select name="location" id="location" placeholder="Location"tabindex="10" required>
                            <option value=""></option>
                            <option value="Sài Gòn">Sài Gòn</option>
                            <option value="Tỉnh (Province)">Tỉnh</option>
                        </select>
                        <div id="emsg_state" class="emsg_state"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <!-- Recipient's information -->
                
                <h3>Recipient's Information</h3> </br></br>

                <div class="row">

                    <div class="col-md-6">
                        <label for="full_name_r" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="full_name_r" name="full_name_r" placeholder="Full Name" tabindex="11" required>
                        <div id="emsg_first_name_r" class="emsg_first_name_r"></div>
                    </div>
                    <div class="col-md-12">
                        <label for="address_r1" class="form-label">Address</label>
                        <textarea class="form-control" rows="6" cols="50" id="address_r1" name="address_r1" placeholder="Recipient Address" tabindex="12" required></textarea>
                        <div id="emsg_address_r1" class="emsg_address_r1"></div>
                    </div>
                    <div class="col-md-8">
                        <label for="email_r" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email_r" name="email_r" placeholder="Email (Optional)" tabindex="13" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    </div>
                    <div class="col-md-4">
                        <label for="phone_r" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone_r" name="phone_r" placeholder="Phone " tabindex="14" required>
                    </div>
                    <div class="col-md-12">
                        <label for="send_date" class="form-label">Item Sending Date</label>
                        <input type="date" class="form-control" id="send_date" name="send_date" placeholder="Item send date" tabindex="15" required>
                        <div id="emsg_send_r1" class="emsg_send_r1"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-12" id="item_desc_area">
                <!-- Item description field -->
                
                </br></br> <h3>Item Descriptions</h3> </br></br>

                <div class="row">
                    <div class="col-md-9">
                        <label for="pkg1" class="form-label">Package 1</label>
                        <textarea class="form-control" rows="6" cols="50"  id="pkg1" name="pkg1" placeholder="Package 1 Item Descriptions" tabindex="15"required></textarea>
                    </div>
                    <div class="col-md-3">
                        <label for="pkg1_weight" class="form-label">Weight (lbs)</label>
                        <input type="text" class="form-control" id="pkg1_weight" name="pkg1_weight" placeholder="Package 1 Weight" tabindex="16" required></input>
                    </div>
                    
                </div>
                <div class="form_buttons">
                    <button class="btn btn-danger" id="reset_button" type="reset">Reset</button>
                    <button class="btn btn-primary" id="submit_button" type="submit">Submit Shipping Form</button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="submit_modal" tabindex="-1" aria-labelledby="modal_label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal_label">Thank You!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">You have successfully submitted your shipping form</div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </form>

    </div>
</body>
<footer class="footer-long">
    <div class="mt-5 p-lg-5 text-black-50 text-center container-fluid">
    <div class="row">
            
        <!--end of col-->
        <div class="col-12 col-lg-3">
            <img src="./Assets/logo/VIETSTAR.png">
            <hr class="light">

        </div>
        <div class="col-12 col-md-9">
            <div class="row no-gutters">
                <div class="col-6 col-lg-3">
                    <h6>Navigate</h6>
                    <hr class="light">
                    <ul class="list-unstyled">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="pages-landing.html">Shipping form</a>
                        </li>
                        <li>
                            <a href="pages-app.html">Customs fees</a>
                        </li>
                        <li>
                            <a href="pages-inner.html">Reimbursement Policy</a>
                        </li>
                    </ul>
                </div>
                <!--end of col-->

                <!--end of col-->
                <div class="col-6 col-lg-3">
                    <h6>Need help?</h6>
                    <hr class="light">
                    <ul class="list-unstyled">
                        
                        <li>
                            <a href="#">Track Shipment</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <!--end of col-->
                <div class="col-6 col-lg-3">
                    <h6>Company</h6>
                    <hr class="light">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">About company</a>
                        </li>
                        <li>
                            <a href="#">History</a>
                        </li>
                        <li>
                            <a href="#">Team</a>
                        </li>
                        <li>
                            <a href="#">Location</a>
                        </li>
                    </ul>
                </div>
                <!--end of col-->
                <div class="col-6 col-lg-3">
                    <h6>Connect</h6>
                    <hr class="light"> 
                    <ul class="list-unstyled social">
                        <li>
                            <a href="https://www.facebook.com/Vietstar-Shipping-Eden-Center-100594958786649/"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                              </svg></a>
                            <a href="https://api.whatsapp.com/send?phone=17035878989&app=facebook&entry_point=page_cta"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                              </svg></a>
                              <br>
                        </li>
                        <hr>
                        <h6>Translate</h6>
                        <hr class="light">
                        <li>
                            <div style="position: relative;">
                                <div id="google_element" style="position: relative; opacity: 100; color: black;"></div>
                               <!--<button id="translate" class="btn btn-secondary dropdown-toggle"
                                    style="position: absolute; left: 0; top: 0; z-index: -1; color: black;"></button>--> 
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of col-->
        <hr class="my-4">
    </div>
   
        <div class="row">
            
            <div id="Register" class="col-md-6">
                <p>Copyright &copy; 2022 VIETSTAR SHIPPING</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="./Assets/Quy Trinh Xu Li Khieu Nai (Reimbursement Process).docx"
                    class="text-light">Reimbursement Process</a>
                <span class="text-muted mx-2">|</span>
                <a href="./Assets/Điểu khoản gửi hàng (Shipping Policies).pdf" class="text-light">Shipping
                    Policy</a>
            </div>
        </div>
    </div>
</footer>
</html>
</html>
