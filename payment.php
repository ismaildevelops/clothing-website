<?php 

   #session_start();
   $email = ($_POST['email']);
   $address = ($_POST['address']);
   $credit = ($_POST['credit']);
   $password = ($_POST['password']);
   $phone = ($_POST['phone']);
   $price = ($_POST['price2']);
   $items = ($_POST['item2']);

   $con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'messages');
   $query = "INSERT into payments(price,items,email,credit_card,phone,address,password) VALUES ('$price','$items','$email','$credit','$phone','$address','$password')";


   mysqli_query($con,$query);
   echo '<script>  alert("Thank you for shopping at Clothes4All. We will shortly reach back at you.");   </script>';


 ?>