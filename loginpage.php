<?php
session_start();
//borrowed liberally from wiki here. Pretty much all of it in honesty
    if(isset($_GET['submit'])) {
        $username = $_GET['username'];
        // $h = fopen('users.txt', "r");
        $h = fopen("/home/akrishnamachar/files/m2group/users.txt", "r");
        while(!feof($h)){
            //had to add "trim" here otherwise was just "not recognizing" username
            $storedUser = trim(fgets($h));
            if($username == $storedUser) {
                $_SESSION['username'] = $username;
                header("location: homepage.php");
                exit();
            }

        }
        fclose($h);
        //if code has gotten this far, then username wasn't in users.txt file
        echo "Sorry, your username was not recognized.";


    }
?>

<!DOCTYPE html>
<html lang='en-US'>

<head>
  <meta charset="utf-8"/>
  <title>Simple File Sharing Website - Login</title>
  <link rel="stylesheet" type="text/css" href="fileM2.css" />

</head>

<body>

    <h1>WELCOME TO THE LOGIN PAGE.</h1>
    <h2>We've missed you.</h2>
    <form method="GET">
        <h3>Please input your credentials below.</h3>
        <p>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" />
        </p>
        <p>
        <input type="submit" name="submit" value="LOGIN HERE" />
        </p>
    </form>




</body>

</html>
