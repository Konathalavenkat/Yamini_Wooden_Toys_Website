<?php 
    include('add_data.php');
?>
<head>
    <title>Registration Form Validation</title>
    <link rel="stylesheet" href="back.css">
    <style>
    body{
        background-image: url(bg.png);
        background-attachment: fixed;
        background-size: cover;
    }
    .container{
        position: absolute;
      left: 37.5%;
      top: 15%;
      height: 78%;
      width: 25%;
      background-color: white;
      text-align: center;
    }
    input,textarea{
        float: none;
        text-align: left;
        padding: 15px;
        border: 1px solid black;
        width: 85%;
        margin-bottom: 8px;
    }
    .btn input {
    background: orange;
    color: #fff;
    height: 40px;
    border-radius: 20px;
    border: 0;
    cursor: pointer;
    transition: background 1s;
    width: 100px;
    float: none;
    text-align: center;
}
    h1{
        text-align: center;
        color: blue;
        font-family: 'Times New Roman', Times, serif;
        text-transform: capitalize;
        font-size: 48px;
    }
    span{
        text-align: center;
        color: red;
        font-size: 18px;
        margin: auto;
        float: right;
        padding-right: 25px;
    }
    p{
        margin: 0;
        margin-bottom: 15px;
        text-align: center;
        width: 100%;
        color: darkgreen;
        font-size: 32px;
    }
    .gender{
        text-align: left;
        margin-left: 12%;

    }
    .gender input{
        float:none;
        width: 15px;

    }
</style>
</head>
<body>
<a href="home.html"><div class="back">Go Back</div></a>

<div class="container">
    <h1>Sign up/Register</h1>
    <div class="main">
        <div class="form">
            <form method="post">
                <p style="color:red;"><?php echo $invalid; ?></p>
                <p><?php echo $valid; ?></p>
                <br>
                <input type='text' name='first_name' placeholder="First Name" value="<?php echo $fn;?>"/><br /><span><?php if($fnameErr!=1) echo $fnameErr;?></span><br />
                <input type='text' name='last_name' placeholder="Last Name" value="<?php echo $ln;?>"/><br /><span><?php if($lnameErr!=1) echo $lnameErr;?></span><br />
                <input type='text' name='email' placeholder="Email" value="<?php echo $em;?>"/><br /><span><?php if($emailErr!=1) echo $emailErr;?></span><br>
                <input type='password' name='pass' placeholder="Password" value="<?php echo $ps;?>"><br /><span><?php if($passErr!=1) echo $passErr;?></span><br/>
                <input type="password"  name='cpass' placeholder="Retype the Password" value="<?php echo $cps;?>"><br><span><?php  if($cpassErr!=1)echo $cpassErr?></span><br>
                <textarea rows="2" cols="20" name='addr' placeholder="Address" value="<?php echo $add;?>"/></textarea> <br /><span><?php if($addrErr!=1) echo $addrErr;?></span> <br/>
                <input type='text' name='mbno' placeholder="Mobile Number" value="<?php echo $mb;?>"/><br /><span><?php if($mbnoErr!=1) echo $mbnoErr;?></span>
                <div class="gender">
                Gender: <input type='radio' name="gender" value='male'>male
                <input type='radio' name="gender" value='female'>female<br/><br />
                </div>
                <div class="btn"><input type='Submit' value='submit' name="submit"/>
                <input type="reset" value='reset' /></div>
                </form>
        </div>
    </div>
</div>
</body>