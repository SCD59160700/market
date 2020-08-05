<?php


require_once "connect.php";

if (isset($_POST['submit'])) {

    $image = $_POST['image'];

    $query = "INSERT INTO shop (shop_img)
                         VALUE ('$image')";
         $result = mysqli_query($conn, $query);

    // $username = $_POST['username'];
    // $password = $_POST['password'];
    // $firstname = $_POST['firstname'];
    // $lastname = $_POST['lastname'];
    // $email = $_POST['email'];
    // $tel = $_POST['tel'];
    // $address = $_POST['address'];

    // $user_check = "SELECT * FROM user WHERE user_username = '$username' LIMIT 1";
    // $result = mysqli_query($conn, $user_check);
    // $user = mysqli_fetch_assoc($result);

    // if ($user['username'] === $username) {
    //     echo "<script>alert('Username already exists');</script>";
    // } else {
    //     $passwordenc = md5($password);

    //     $query = "INSERT INTO user (user_username,user_pass,user_fname,user_lname,user_email,user_tel,user_address,user_type)
    //                     VALUE ('$username','$passwordenc','$firstname','$lastname','$email','$tel','$address','m')";
    //     $result = mysqli_query($conn, $query);

    //     if ($result) {
    //         $_SESSION['success'] = "Insert user successfully";
    //         header("Location: login1.php");
    //     } else {
    //         $_SESSION['error'] = "Something went wrong";
    //         header("Location: .php");
    //     }
    // }
}
?>