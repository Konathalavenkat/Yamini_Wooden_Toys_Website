<?php  
  $ival=$val=$cpass='';
  if(isset($_POST['submit'])){
    extract($_POST);
    $conn=new mysqli('localhost','root','','mydb');
    $orgpass=mysqli_query($conn,"select * from customers where email='$email';");
    if($orgpass->num_rows==0){
      $ival='email is not registered';
    }
    else{
      $cpass=$orgpass->fetch_assoc()['pass'];
      if($pass===$cpass){
        $val="login successfull";
        header("Location: index.html");
      }
      else{
        $ival="password or email is incorrect";
      }
    }
    
  }
?>