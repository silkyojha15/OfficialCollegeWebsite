<?php
     if (isset($_POST['submit']))
     {
         $name=$_POST['fname'];
         $lastname=$_POST['lname'];
         $email=$_POST['email'];
         $address=$_POST['address'];
         $detail=$_POST['message'];
         
         $to='feedback.ggpf@gmail.com';
         $subject=$_POST['subject'];
         $msg='Name: '.$name.' '.$lastname.'\n'.'Address: '.$address.'\n'.'Wrote the following complain: '.'\n'.$detail;
         $headers= "From: ".$email;
         
         if(mail($to, $subject, $msg, $headers))
         {
             echo "<h1>Sent Successfully! Thank You".$name." ".$lastname."We will contact you shortly!</h1>";
         }
         else
         {
             echo "Something went wrong!";
         }
     }
?>