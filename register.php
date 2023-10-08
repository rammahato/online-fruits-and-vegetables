<?php

include 'config.php';

if (isset($_POST['submit'])) {

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = md5($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $select = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select->execute([$email]);

   if ($select->rowCount() > 0) {
      $message[] = 'user email already exist!';
   } else {
      if ($pass != $cpass) {
         $message[] = 'confirm password not matched!';
      } else {
         $insert = $conn->prepare("INSERT INTO `users`(name, email, password) VALUES(?,?,?)");
         $insert->execute([$name, $email, $pass,]);

         if ($insert) {
            $message[] = 'registered successfully!';
            header('location:login.php');
         }
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/login.css">

</head>

<body>

   <?php

   if (isset($message)) {
      foreach ($message as $message) {
         echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
      }
   }

   ?>

   <div class="main-container">
      <form action=" " method="post">
         <h1> Register</h1>
         <div class="input-box">
            <input type="text" name="name" placeholder="enter your name" required>
            <i class='bx bxs-user-pin'></i>
         </div>
         <div class="input-box">
            <input type="email" name="email" placeholder="enter your email" required>
            <i class='bx bxs-user'></i>
         </div>
         <div class="input-box">
            <input type="password" name="pass" placeholder="enter your password" required>
            <i class='bx bxs-lock-alt'></i>
         </div>
         <div class="input-box">
            <input type="password" name="cpass" placeholder="confirm your password" required>
            <i class='bx bxs-lock-alt'></i>
         </div>
         <input type="submit" value="register now" class="btn" name="submit">
         <div class="reg-link">
            <p>Already have an account? <a href="login.php">Login</a></p>
         </div>
      </form>

   </div>


</body>

</html>