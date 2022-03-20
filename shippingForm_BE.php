<?php
    // grabs sender input data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $zip_code = $_POST['zip_code'];
    $state = $_POST['state'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // grabs recipient input data
    $first_name_r = $_POST['first_name_r'];
    $last_name_r = $_POST['last_name_r'];
    $address_r1 = $_POST['address_r1'];
    $email_r = $_POST['email_r'];
    $phone_r = $_POST['phone_r'];

    // grabs item description input data
    $pkg1 = $_POST['pkg1'];
    $pkg1_weight = $_POST['pkg1_weight'];
    $pkg2 = $_POST['pkg2'];
    $pkg2_weight = $_POST['pkg2_weight'];
    $pkg3 = $_POST['pkg3'];
    $pkg3_weight = $_POST['pkg3_weight'];
    $pkg4 = $_POST['pkg4'];
    $pkg4_weight = $_POST['pkg4_weight'];
    $pkg5 = $_POST['pkg5'];
    $pkg5_weight = $_POST['pkg5_weight'];
?>

<?php
    echo $first_name;
    echo $last_name;
    echo $address1;
    echo $address2;
    echo $city;
    echo $zip_code;
    echo $state;
    echo $email;
    echo $phone;

?>