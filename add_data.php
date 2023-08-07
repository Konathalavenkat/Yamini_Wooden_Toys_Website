<?php 
$valid=$invalid=$fnameErr=$lnameErr=$emailErr=$passErr=$cpassErr=$addrErr=$mbnoErr='';
$fn=$ln=$em=$ps=$cps=$add=$mb="";
extract($_POST);
if(isset($_POST['submit']))
{
   $validName="/^[a-zA-Z ]*$/";
   $validEmail="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
   $validpass="/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
if(empty($first_name)){
   $fnameErr="First Name is Required"; 
}
else if (!preg_match($validName,$first_name)) {
   $fnameErr="Digits are not allowed";
}else{
   $fnameErr=1;
}
if(empty($last_name)){
   $lnameErr="Last Name is Required"; 
}
else if (!preg_match($validName,$last_name)) {
   $lnameErr="Digits are not allowed";
}
else{
   $lnameErr=1;
}
if(empty($email)){
  $emailErr="Email is Required"; 
}
else if (!preg_match($validEmail,$email)) {
  $emailErr="Invalid Email Address";
}
else{
  $emailErr=1;
}
if(empty($pass)){
  $passErr="Password is Required"; 
} 
elseif (!preg_match($validpass,$pass)) {
  $passErr="Password must be at least one uppercase letter, lowercase letter, digit, a special character with no spaces and minimum 8 length";
}
else{
   $passErr=1;
}
if($cpass!=$pass){
   $cpassErr="Confirm Password doest Matched";
}
else{
   $cpassErr=1;
}

if(empty($addr)){
   $addrErr="Enter Address";
}
else {
   $addrErr=1;
}

if(empty($mbno)){
   $mbnoErr="Enter mobile no";
}
else if(!preg_match("/^[0-9]{10}+$/",$mbno)){
   $mbnoErr="Enter Valid mobile number";
}
else{
   $mbnoErr=1;
}
$fn=$first_name;
$ln=$last_name;
$em=$email;
$ps=$pass;
$cps=$cpass;
$add=$addr;
$mb=$mbno;
// check all fields are valid or not
if($fnameErr==1 && $lnameErr==1 && $emailErr==1 && $passErr==1 && $cpassErr==1 && $addrErr==1 && $mbnoErr==1)
{
   $servername = "localhost";
   $username = "root";
   $password = "";
   $conn = mysqli_connect($servername, $username, $password,'mydb');
   $x=mysqli_query($conn,"select * from customers where email='$email';");
   if($x->num_rows!=0){
    
    $invalid="This email is already registerd";
   }
   else{
    $result=mysqli_query($conn,"insert into customers(fname,lname,email,pass,address,mbno,gender) values('$first_name','$last_name','$email','$pass','$addr','$mbno','$gender');");
    $valid="Successfully registered";
    }
}
}
?>