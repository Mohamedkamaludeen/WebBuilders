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

        $toEmail=$email;
        $subject="testing purpose";
        $body=$massage;
        $fromEmail="From: abishanoffwebbuilder@gmail.com";


        if(mail($toEmail,$subject,$body,$fromEmail))
        {
            echo "email sent successfully";
        }
        else
        {
            echo "you have an error";
        }
    }
       



    
?>
