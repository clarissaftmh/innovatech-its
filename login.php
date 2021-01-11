<?php
    session_start();
    
    include 'conn.php';

    if($_SESSION){
        header('location: inner-page.php');
    } else{

        if(isset($_GET['redirectProfile'])){
            $profileId = $_GET['redirectProfile'];
        }
    
        if(isset($_POST['submit'])){
            // session_start();
            $username = $_POST['username'];
            $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $password = password_verify($_POST['password'], $hash);
    
            $sql = "SELECT * FROM users WHERE `username`='$username'";
            $result = mysqli_query($conn,$sql);
            $row = $result->fetch_assoc();
            if($row != NULL){
                if(password_verify($_POST['password'],$row['password'])){
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['id'] = $row['id']; 
                    // var_dump($_SESSION['id']);
                    if($profileId != NULL){
                        header('location: profile.php?id='.$profileId);
                    } else{
                        header('Location: inner-page.php');
                    }
                }
            } else{
                echo "No Dataset";
            }
        
        }
        mysqli_close($conn);

    }

    $pageTitle = 'Login';
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
        <h6>Already have account? Please Login</h6>
        <form action="login.php<?php if(isset($_GET['redirectProfile'])){echo "?redirectProfile=".$_GET['redirectProfile'];}?>" method="POST">
        
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" id="username"  required="required" name="username" placeholder="input username">
        </div>
        
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password"  required="required" name="password" placeholder="input password">
        </div>
        
        <button type="submit" name="submit" id="submit" class="btn"style="background: #f8c5a7">Login</button>
    </form>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>