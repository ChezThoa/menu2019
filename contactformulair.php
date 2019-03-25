<?php
    $name=$_POST['name'];
    $visitor_email =$_POST['email'];
    $message =$_POST['message'];


    $email_from =$_POST['email'];
    $email_subject ='New Form subission';
    $email_body ='User Name: $name.\n'. 
                    "User Email: $visitor_email.\n". 
                    "User Message: $message.\n";



    $to ="hla211268@gmail.com;
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: formulair.html");





>