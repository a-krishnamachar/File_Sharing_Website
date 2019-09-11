<?php
    session_start();
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


<?php

//borrowed liberally from wiki here. Pretty much all of it in honesty
    if(isset($_GET['submit'])) {
        $username = $_GET['username'];
        //$h = fopen('/Users/Aditya/Documents/WashU_academic_and_jobs/Junior Year/modules/module2-group-akmod2group/users.txt');
        $h = fopen("/home/akrishnamachar/files/m2group/users.txt", "r");
        echo $h;
        // while(!feof($h)){
        //     //had to add "trim" here otherwise was getting "fgets() expects parameter 1 to be resource, boolean given in" errors
        //     $storedUser = trim(fgets($h));
        //     if($username == $storedUser) {
        //         $_SESSION['username'] = $username;
        //         header("Location: homepage.php");
        //         exit;
        //     }
        //     // else {
        //     // }
        // }
        // fclose($h);
        echo "Sorry, your username was not recognized.";


    }
?>

</body>

</html>