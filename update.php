<?php
    session_start();

    if(!($_SESSION)){
        header('location: login.php');
    }

    include 'conn.php';

    if(isset($_POST['submit'])){
    //    var_dump($_FILES['gambar']);

        $id = $_SESSION['id'];
        $bio = $_POST['bio'];
        $desc = $_POST['desc'];
        $targetDir = "uploads/";
        $fileName = $_FILES['gambar']['name'];
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        $allowedTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType,$allowedTypes)){
            if(move_uploaded_file($_FILES['gambar']['tmp_name'],$targetFilePath)){

                $sql = "UPDATE users SET `bio` = '$bio' , `description` = '$desc' , `image` = '$fileName' WHERE id = $id";
                // $sql = "INSERT INTO users (`email`, `username`, `password`,`bio`,`description`)";
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
        header('Location: index.php');
    }

    // var_dump($_GET['id']);
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE `id`= $id";

    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_assoc();
    // var_dump($row);
    
    mysqli_close($conn);
    
    $pageTitle = 'Update Profil | Instagram KA WE :)';
    include 'header.php';
?>
   
    <div class="jumbotron">
        <div class="container">
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Bio</label>
                <input type="text" class="form-control" name="bio" value="<?= $row['bio'] ?>">
                <small id="emailHelp" class="form-text text-muted">Jangan lebay bang</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" class="form-control" name="desc" value="<?= $row['description'] ?>">
                <small id="emailHelp" class="form-text text-muted">Deskripsikan hidup anda dalam 1 paragraf :)</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload foto syantik</label>
                <input type="file" class="form-control-file" name="gambar">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>

<?php include 'footer.php' ?>