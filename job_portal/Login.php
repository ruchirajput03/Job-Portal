<?php
$server ='localhost';
$username ='root';
$password ='';
$database ='jobs';

$conn = mysqli_connect($server, $username, $password, $database);

if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);

} 
echo"";
session_start();
if(isset($_POST['Login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
    $result =mysqli_query($conn,$query);
    $row =mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:Index.php");
    }
    else{
        $error = 'Email or Password is incorrect';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    background-image: radial-gradient(White,#87CEEB);
    margin-top: 6em;
    margin-left: 20em;
    margin-right: 13em;
    padding: 30px;
    box-shadow: 5px 5px 8px #FFFFE0, 10px 10px 8px white;
}
input{
    border-radius: 20px;
    border-style:solid;
    border-color:gray;
}
</style>
    <title>Login</title>
</head>
<body>
<div class="container">
    <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail4" aria-describedby="emailHelp" placeholder="enter your email" name="email" required>
    <div id="emailHelp2" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword3" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary" name="Login">Login</button>
  <p style="text-align: center;"><br> New User?Create Account<a href="register.php">Signup</a></p>
</form>
    </div>
</body>
</html>