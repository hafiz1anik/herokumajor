<?php

    $mailto = $_POST['email'];
    $mailSub = $_POST['name'];
    $mailName = $_POST['type'];
    $mailDate = $_POST['amount'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   require_once __DIR__ . '/vendor/autoload.php';
   //create new pdf instance
   $mpdf = new \Mpdf\Mpdf();
   
   //create our PDF
   $data = '';
   $data .= '<h1>Your payment details</h1>';

   $data .= '<h2><b>Name: '.$mailSub.'</b></h2><br/>';
   $data .= '<h2><b>Membership Type: '.$mailName.'</b></h2><br/>';
   $data .= '<h2><b>Amount: RM'.$mailDate.'</b></h2><br/>';
   $data .= '<h2><b>Membership No: '.$mailDate.$mailSub.'</b></h2><br/>';
   $data .='<h2><b>Reward name: Yogamats</b></h2>';
   $data .= '<h2><b>Promo Code: insert this ( y56p9m ) promo code to redeem your reward </b></h2><br/>';
   $data .= '<h2><b>Location:<br>Muscle Factory Gymnasium<br>Gem In Mall,Cyberjaya,63000.</b></h2>';

   //write pdf
   $mpdf->WriteHTML($data);

   //output to browser
   $pdf= $mpdf->Output('','S');

   //grab enquirydata
   $enquirydata = [
       'Name'=> $mailSub,
       'Membership Type' => $mailName,
       'Amount' => $mailDate,
       'Membership No' => $mailDate.$mailSub,
       'Promo Code'  => 'y56p9m',
       'Location' => 'Location:<br\>Muscle Factory Gymnasium<br>Gem In Mall,Cyberjaya,63000.'
   ];

   //run the function
   sendEmail($pdf,$enquirydata);

   function sendEmail($pdf,$enquirydata){
     
   }

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
   $mail ->Body = "<b>Congratulations!! Your payment has been successfully done.</b> <br> <b>PAYMENT DETAILS</b> <br><b> NAME:</b> $mailSub <br><b> MEMBERSHIP TYPE:</b> $mailName <br><b> AMOUNT: RM </b> $mailDate <br><b>If you are a new member then Please show us this mail and collect your membership card from our gym centre. Thanks for joining with us</b><br> <b>Location:</b> <br> Muscle Factory Gymnasium <br> Gem In Mall,Cyberjaya,63000." ;
   
   
   //sending pdf file
   //$mail->AddAttachment('', $name = 'E-reciept',  $encoding = 'base64', $type = 'application/pdf');
   //add string attachment

   $mail -> addStringAttachment($pdf,'E-receipt.pdf');
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Please insert all required information and try again";
   }
   else
   {
    
    header('location:reward.php');
   }

?>



   

