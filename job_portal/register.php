<?php
$server ='localhost';
$username ='root';
$password ='';
$database ='jobs';

$conn = mysqli_connect($server, $username, $password, $database);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);

} 
else {
    echo "";
}
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    

    $sql = "INSERT INTO `user`(`email`, `password`, `name`, `number`) VALUES ('$email','$password','$name','$number')";
    if(mysqli_query($conn,$sql)){
        echo "Records inserted successfully.";
    }
    else{
        echo"ERROR: Could not able to execute $sql." .mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    body{
        width: 100%;
        min-width: 1000px;
        height: auto;
        background-image: url('job1.jpg');
        background-size: cover;
    }
form{
    border-radius: 20px;
    background-image: radial-gradient(red,yellow);
    margin-top: 4em;
    margin-left: 20em;
    margin-right: 13em;
    padding: 30px;
    box-shadow: 10px 10px 8px #FFAE42;
    
}
input{
    border-radius: 20px;
    border-style:solid;
    border-color:gray;
}
</style>
    <title>Register</title>
</head>
<body>
    <div class="container">
    <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleinputname" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputfname" name="name" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your email" name="email" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleinputnumber" class="form-label">Number</label>
    <input type="text" class="form-control" id="exampleInputPnumber" name="number" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Register</button>
  <p style="text-align: center;"> <br>Already Registered?<a href="Login.php">Signin</a></p>
</form>
    </div>

</body>
</html>