<!DOCTYPE html>
<html lang='en-US'>

<head>
    <title>File Sharing Website: View Files</title>
    <link rel="stylesheet" type="text/css" href="fileM2.css" />
</head>

<body>

    <?php
        $filename = $_GET['view'];
        //this stuff fully taken from wiki
        if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
            echo "Invalid filename";
            exit;
        }

        $username = $_SESSION['username'];
        if( !preg_match('/^[\w_\-]+$/', $username) ){
            echo "Invalid username";
            exit;
        }

        $full_path = sprintf("/srv/uploads/%s/%s", $username, $filename);

        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mime = $finfo->file($full_path);

        header("Content-Type: ".$mime);
        readfile($full_path);

        ?>

    </body>

    </html>