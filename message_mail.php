<?php
    $mailto = $_POST['email'];
    $mailSub = $_POST['name'];
    
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
   $mail ->Body = "<b>You have successfully send your message to us we will get back to you soon.</b> <br>  Thanks for connecting with us</b><br> <b>Location:</b> <br> Muscle Factory Gymnasium <br> Gem In Mall,Cyberjaya,63000.<br><b>Phone:</b>0104370465" ;
   

   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
    echo '<script>alert("Thanks we will get back to you soon")</script>';
   }

?>



   

