<?php
session_start();
$conn =new mysqli('localhost','root','','learnformula') or die(mysqli_error($conn));
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Password=sha1($Password);
$query="SELECT *FROM register WHERE Email='$Email' AND Password='$Password'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
$Nam=$result['Name'];
if(isset($_POST["submit2"]))
{
    $query="SELECT *FROM register WHERE Email='".$Email."'AND Password='".$Password."'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['username']=ucfirst($Nam);
        header("Location:index.php");
    }
    else
    {
        echo '<script> alert("Email/password not exist!!"); </script>';
        ?>
       <script type="text/javascript"> 
           window.location.href="login.php";
           
</script>
<?php
        exit();
    }
        
}
else
{
     exit();
}
mysqli_close($conn);
?>