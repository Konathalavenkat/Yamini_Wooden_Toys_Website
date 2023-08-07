<?php 
    $t=$t1=$t2="";
    $servername = "localhost";
   $username = "root";
   $password = "";
   $conn = mysqli_connect($servername, $username, $password,'mydb');
   if(isset($_POST['cust'])){
    
   $result=mysqli_query($conn,"select * from Customers");
   if(!$result) echo 'error'; ;
   $t="<table border='1px'><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Password</th><th>Address</th><th>Mobile Number</th><th>Gender</th></tr>";
   if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $t.="<tr><td>$row[id]</td><td>$row[fname]</td><td>$row[lname]</td><td>$row[email]</td><td>$row[pass]</td><td>$row[address]</td><td>$row[mbno]</td><td>$row[gender]</td></tr>";
    }
    }
    $t.="</table>";
   };
   if(isset($_POST['prod'])){
        $t2="<table border='1px'><tr><th>ID</th><th>Product Name</th><th>Length</th><th>Breadth</th><th>Height</th><th>Weight</th><th>Cost</th>";
        $result=mysqli_query($conn,"select * from products");
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $t2.="<tr><td>$row[id]</td><td>$row[name]</td><td>$row[length]</td><td>$row[breadth]</td><td>$row[height]</td><td>$row[weight]</td><td>$row[cost]</tr>";
            }
        }
        $t2.="</table>";
   }
   if(isset($_POST['ord'])){
    $t1="<table border='1px'><tr><th>Customer ID</th><th>Product ID</th><th>First Name</th><th>Email</th><th>Address</th><th>Mobile Number</th><th>Product name</th><th>Cost</th>";
    $result=mysqli_query($conn,"select c.id,p.id as pid,c.fname,c.email,c.address,c.mbno,p.name,p.cost from customers c,orders o,products p where o.custid=c.id and o.prodid=p.id;");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $t1.="<tr><td>$row[id]</td><td>$row[pid]</td><td>$row[fname]</td><td>$row[email]</td><td>$row[address]</td><td>$row[mbno]</td><td>$row[name]</td><td>$row[cost]</tr>";
        }
    }
    $t1.="</table>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="back.css">
    <style>
        table{
            border-collapse: collapse;
        }
        td,th{
            padding: 15px;
        }
        tr:nth-child(odd){
            background-color: antiquewhite;
        }
        input{
            padding: 15px;
            background-color: aqua;
            border-radius: 10px;
            border: none;
        }
        input:hover{
            opacity: 0.6;
        }
    </style>
</head>
<body>
<a href="home.html"><div class="back">Go Back</div></a>
    <h1 align="center">Admin Page</h1>
    <form method="post">
        <input type="submit" value="get customers details" name="cust">
        <input type="submit" value="get Order info" name="ord">
        <input type="submit" value="get Product info" name="prod">
        <br><br>
        <?php echo $t;?><br>
        <?php echo $t1;?><?php echo $t2;?>
    </form>
</body>
</html>