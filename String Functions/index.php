<?php
    if(isset($_FILES['image'])){
        $file_name = $_FILES['image']['name'];
        $file_temp = $_FILES['image']['tmp_name'];

        // Move the uploaded file to the "uploads" directory
        if (move_uploaded_file($file_temp, "uploads/" . $file_name)) {
            echo "Successfully uploaded<br>";

            // Display the uploaded image
            echo '<img src="uploads/' . $file_name . '" alt="Uploaded Image">';
        } else {
            echo "File upload failed";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>File Upload</title>
</head>
<style>
    img{
        height:300px;
        width:400px;
    }
</style>
<body>
    <h2>Upload a File</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
