<?php 
include("dbms.php");
?>
<?php 
    if(isset($_POST["submit"]))
    {
        $user_Name=$_POST["name"];
        $email=$_POST["email"];
        $city=$_POST["city"];
        $phone=$_POST["mobile"];
        $massage=$_POST["message"];
        

       
        $result = mysqli_query($con,"INSERT INTO `userdetails`(`user_Name`,`email`,`city`,`phone`,`message`) VALUES('$user_Name','$email','$city','$phone','$massage')");
        if(!$result)
        {
            echo "Our connection not  Successfully";
            //header("location:contact.php")
        }
    }
       /*
        $toEmail=$email;
        $subject="testing purpose";
        $body=$massage;
        $fromEmail="From: abishanoffwebbuilder@gmail.com";

        ini_set('SMTP', "server.com");
        ini_set('smtp_port', "25");
        ini_set('sendmail_from', "abishanoffwebbuilder@gmail.com"); 


        if(mail($toEmail,$subject,$body,$fromEmail))
        {
            echo "email sent successfully";
        }
        else
        {
            echo "you have an error";
        }
    }*/
      /*
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'path/to/PHPMailer/src/Exception.php';
        require 'path/to/PHPMailer/src/PHPMailer.php';
        require 'path/to/PHPMailer/src/SMTP.php';

        if(isset($_POST["submit"]))
        {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'mohamedkamaludeenwebbuilders@gmail.com'; //your gmail 
            $mail->Password = 'wrgngdsanqindmzrk' //gmail password

            $mail->SMTPSecure = 'ssl';
            $mail->port = 465;

            $mail->setFrom('mohamedkamaludeenwebbuilders@gmail.com');//your gmail

            $mail->addAddress($_POST["email"]);

            $mail->isHTML(true);

            $mail->Subject = "testing Perpos";
            $mail->Body = $_POST["message"];

            $mail->send();

            echo "
            <script> 
                alert('send Successfully'); 
                document.location.href='contact.php'
            </script>";
        }
    }
*/
    //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use  PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

//require 'phpmailer\src\Exception.php';
//require 'phpmailer\src\PHPMailer.php';
//require 'phpmailer\src\SMTP.php';

//Load Composer's autoloader


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mohamedkamaludeenwebbuilders@gmail.com';                     //SMTP username
    $mail->Password   = 'bzefocygvijybeed';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('mohamedkamaludeenwebbuilders@gmail.com', 'The Debug Area');
    $mail->addAddress($_POST["email"]);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    $message = $_POST["message"];
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $message;//'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header("location:mail_summary.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

       



    
?>
