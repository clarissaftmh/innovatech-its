<?php
    session_start();

    if(!($_SESSION)){
        header('location: inner-page.php');
    }

    include 'conn.php';

    if(isset($_POST['submit'])){
    //    var_dump($_FILES['gambar']);

        $id_ulpload = $_SESSION['id_ulpload'];
        $team = $_POST['team'];
        $ketua = $_POST['ketua'];
        $no_telp = $_POST['no_telp'];
        $targetDir = "uploads/";
        $fileName = $_FILES['gambar']['name'];
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        $allowedTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType,$allowedTypes)){
            if(move_uploaded_file($_FILES['gambar']['tmp_name'],$targetFilePath)){

                $sql = "INSERT INTO upload (`team`, `ketua`, `no_telp`,`photo`)
                VALUES ('$team', '$ketua', '$no_telp','$fileName')";

                if(mysqli_query($conn,$sql)){
                    echo "File Upload Success";
                }else{
                    echo"File Upload Error";
                }
            }else{
                echo "Sorry, there was an error uploading your file.";
            }
        }else{
           echo 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
        header('Location: inner-page.php');
    }

    // // var_dump($_GET['id']);
    // $id = $_SESSION['id'];
    // $sql = "SELECT * FROM users WHERE `id`= $id";

    // $result = mysqli_query($conn,$sql);
    // $row = $result->fetch_assoc();
    // // var_dump($row);
    
    mysqli_close($conn);

    
    $pageTitle = 'Upload';
    include 'header.php';
?>


   
<!DOCTYPE html>
<html lang="en">
    <div style="background: #8d4c27">
<link href="assets/img/logo.png" rel="icon">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    
   <br><br><br><br><br>
   <div class="container" style="width: 35%; padding-bottom: 20px">
        <div class="container">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Tim</label>
                <input type="text" class="form-control"  required="required" name="team">
                <small id="emailHelp" class="form-text text-muted">Masukkan Nama Tim</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Ketua</label>
                <input type="text" class="form-control"  required="required" name="ketua">
                <small id="emailHelp" class="form-text text-muted">Masukkan Nama Ketua</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">No Telp</label>
                <input type="text" class="form-control"  required="required" name="no_telp">
                <small id="emailHelp" class="form-text text-muted">Masukkan No Telp yang dapat dihubungi</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload KTM</label>
                <input type="file" class="form-control-file"  required="required" name="gambar">
            </div>
            <button type="submit" name="submit" id="submit" class="btn"style="background: #f8c5a7">Submit</button> 
        </form>
        </div>
    </div>

<?php include 'footer.php' ?>