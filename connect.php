<?php
$conn =mysqli_connect('localhost','root','','learnformula') or die(mysqli_error($conn));
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$country=$_POST['country'];
$Contact=$_POST['Contact'];
$City=$_POST['City'];
$date_of_birth=$_POST['date_of_birth'];
$gender=$_POST['gender'];
$Password=sha1($Password);
$Name=mysqli_real_escape_string($conn,$Name);
$Email=mysqli_real_escape_string($conn,$Email);
$country=mysqli_real_escape_string($conn,$country);
$Contact=mysqli_real_escape_string($conn,$Contact);
$City=mysqli_real_escape_string($conn,$City);
$date_of_birth=mysqli_real_escape_string($conn,$date_of_birth);
$gender=mysqli_real_escape_string($conn,$gender);
if(isset($_POST["submit2"]))
{
    $query="SELECT *FROM register WHERE Email='".$Email."'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
 echo '<script> alert("Email already exists...!!"); </script>';
        ?>
       <script type="text/javascript"> 
           window.location.href="sign_up.php";
</script> 
<?php
die(mysqli_error($conn));
    }   
}
$user_registration_query ="insert into register(Name,Email,Password,country,Contact,City,date_of_birth,gender) values('$Name','$Email','$Password','$country','$Contact','$City','$date_of_birth','$gender')";
 $user_registration_submit=mysqli_query($conn,$user_registration_query) or die(mysqli_error($conn));
?>
<script type="text/javascript"> 
alert("Registration successfully...Click OK to login..");
window.location.href="login.php";
</script> 
<?php
?>
