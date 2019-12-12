
    <?php 


$host="localhost";
$user="root";
$password="";
$db="login";
 
$con = mysqli_connect($host,$user,$password,$db);

 
if(isset($_POST['User'])){
    
    $User=$_POST['User'];
    $pass=$_POST['password'];
    

    
    $sql="select * from users where username='".$User."'AND password='".$password."' limit 1";

    $_SESSION['mail']=$User;
    $result=mysqli_query($con,$sql);
    
    if( mysqli_num_rows($result) == 1){
        echo "  You Have Successfully Logged in ";
        
    
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
       /* echo "<script type=\"text/javascript\">window.alert('password invalid');
window.location.href = '.php';</script>"; */
exit();
      //  header("Location:Signin.php");
        //exit();
    }
        
   }
?>