<?php
    if (isset($_POST['submit'])) {
        $allowed_ext = ['png', 'jpg', 'bmp', 'exe'];

        if (!empty($_FILES['upload']['name'])) {
            // print_r($_FILES);
            $file_name = "php_crash" . $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $target_dir = "uploads/${file_name}";

            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            if (in_array($file_ext, $allowed_ext)) {
                if ($file_size <= 1000000) {
                    move_uploaded_file($file_tmp, $target_dir);
                    $message = "<p class='message'>File uploaded successfully.</p>";
                } else {
                    $message = "<p class='message'>File is too large. Max 1 MB.</p>";
                }
            } else {
                $message = "<p class='message'>Invalid File Type.</p>";
            }

        } else {
            $message = "<p class='message'>Please choose a file to upload.</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploads</title>
    <link rel="stylesheet" href="extras/style.css">
</head>
<body>
    <?php echo $message ?? null; ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
    method="POST" enctype="multipart/form-data">
        <h3>Select Image to upload:</h3>
        <div>
            <input type="file" name="upload" id="upload">
            <input type="submit" value="submit" name="submit">
        </div>
    </form> 
</body>
</html>