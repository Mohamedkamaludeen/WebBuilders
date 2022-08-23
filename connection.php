<?php 
include("dbms.php");
?>
<?php 
    $user_Name=$_POST["name"];
    $email=$_POST["email"];
    $city=$_post["city"];
    $phone=$_POST["phone"];
    $massage=$_POST["massage"];
    
    $result=mysqli_connect($con,"INSERT INTO `userdetails`(`user_Name`,`email`,`city`,`phone`,`massage`,`city`) VALUES('$user_Name','$email','$city','$phone','$massage')");
    if($result)
    {
        echo "Our connection Successfully";
    }
?>
