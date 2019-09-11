<!DOCTYPE html>
<html lang='en-US'>

<head>
    <title>File Sharing Website: View Files</title>
    <link rel="stylesheet" type="text/css" href="fileM2.css" />
</head>

<body>

    <?php
        $filename = $_GET['view'];
        //and from wiki
        if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
            echo "Invalid filename";
            exit;
        }

        $username = $_SESSION['username'];
        if( !preg_match('/^[\w_\-]+$/', $username) ){
            echo "Invalid username";
            exit;
        }


    ?>