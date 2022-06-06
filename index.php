<?php 

   session_start();
   $name = htmlspecialchars($_POST['name']);
   $email = htmlspecialchars($_POST['email']);
   $message = htmlspecialchars($_POST['message']);
   $con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'messages');
   $s = "insert into message(name,email,message) values ('$name','$email','$message')";
   mysqli_query($con,$s);
   echo '<script>  alert("Thank you for your feedback. We will shortly reach back at you.");   </script>';


 ?>