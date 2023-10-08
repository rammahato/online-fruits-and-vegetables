<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}
;

if (isset($_POST['send'])) {

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_message = $conn->prepare("SELECT * FROM `message` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if ($select_message->rowCount() > 0) {
      $message[] = 'already sent message!';
   } else {

      $insert_message = $conn->prepare("INSERT INTO `message`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'sent message successfully!';

   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'header.php'; ?>

   <section class="contact">
      <!-- Google Map Embed Code -->
      <iframe
  width="100%"
  height="400"
  frameborder="0"
  style="border:0"
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18.554861!2d73.919083!3d18.554861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0x0!2s18%C2%B033'17.5%22N+73%C2%B055'08.7%22E!5e0!3m2!1sen!2sus&z=20">
</iframe>



      <!-- Shop Address -->
      <div class="address">
         <h2>Our Shop Address</h2>
         <p>Pooja vegetables, Wadgaonsheri, Near shubham Bus Stop,pune 411014.</p>
      </div>

      <h1 class="title">get in touch</h1>

      <form action="" method="POST">
         <input type="text" name="name" class="box" required placeholder="enter your name">
         <input type="email" name="email" class="box" required placeholder="enter your email">
         <input type="number" name="number" min="0" class="box" required placeholder="enter your number">
         <textarea name="msg" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" class="btn" name="send">
      </form>

   </section>








   <?php include 'footer.php'; ?>

   <script src="js/script.js"></script>

</body>

</html>