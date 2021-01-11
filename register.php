<?php

    session_start();
    
    include 'conn.php';

    if($_SESSION){
        header('location: header.php');
    } else{

        if(isset($_POST['submit'])){
            if($_POST['password'] !== $_POST['confirm_password'])
            header('Location: register.php');
    
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        
            
            $sql = "INSERT INTO users (`email`, `username`, `password`)
            VALUES ('$email', '$username', '$password')";
    
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);

    }
    
    $pageTitle = 'Register';
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
    <div style="background: #8d4c27"
<link href="assets/img/logo.png" rel="icon">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<br>
<br>
<br>
<br>

    <div class="container" style="width: 35%; padding-bottom: 20px">
        <h6>Jika belum memiliki akun, silahkan Sign up</h6>
    <form action="register.php" method="POST">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" required="required" name="email" placeholder="Masukkan Email">
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" id="username"  required="required" name="username" placeholder="Masukkan Username">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password"  required="required" name="password" onkeyup='check();' >
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password"  required="required" name="confirm_password" onkeyup=' check();' >
            <span id="message"></span>
        </div>
        <button type="submit" name="submit" id="submit" class="btn"style="background: #f8c5a7">Sign Up</button>
    </form>
    </div>
</div>
    <script type="text/javascript">
        var check= function(){
            if (document.getElementById('password').value ==
          document.getElementById('confirm_password').value) {
          document.getElementById('message').style.color = 'green';
          document.getElementById('message').innerHTML = 'Password Matches!';
            } else {
          document.getElementById('message').style.color = 'red';
          document.getElementById('message').innerHTML = 'Password is not the same!';
            }
        }
    </script>

<?php include 'footer.php' ?>