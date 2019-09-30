<?php

    $mailto = $_POST['email'];
    $mailSub = $_POST['name'];
    $mailName = $_POST['type'];
    $mailDate = $_POST['date'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "hafiz1anik@gmail.com";
   $mail ->Password = "kina2532namahar";
   $mail ->SetFrom("hafiz1anik@gmail.com");
   $mail ->Subject = "Congratulation!! $mailSub";
   $mail ->Body = "<b>You have successfully register for our free training session</b> <br> <b>REGISTRATION DETAILS</b> <br><b> NAME:</b> $mailSub <br><b> SESSION NAME:</b> $mailName <br><b> DATE:</b> $mailDate <br><b> Thanks for your interest</b><br> <b>Location:</b> <br> Muscle Factory Gymnasium <br> Gem In Mall,Cyberjaya,63000." ;
   

   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
    
    header('location:thanks.php');
   }

?>



   

