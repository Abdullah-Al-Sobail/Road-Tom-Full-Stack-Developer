<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploads</title>
</head>
<body>
    <form action="uploads.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="uploadFile" id="uploadFileID">
        <input type="submit" value="Submit File" name="submit">
    </form>
</body>
</html>