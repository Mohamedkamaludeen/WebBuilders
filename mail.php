<?php

    $toEmail="abishanshan61@gmail.com";
    $subject="testing purpose";
    $body="hi i am abishan, what about you";
    $fromEmail="From: abishanoffwebbuilder@gmail.com";


    if(mail($toEmail,$subject,$body,$fromEmail))
    {
        echo "email sent successfully";
    }

    else
    {
        echo "you have an error";
    }



?>