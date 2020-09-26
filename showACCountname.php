<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="style/LOGOUT.css">  
</head>
<body>
    <a href="index.php">HOME</a>
    <div style="margin: 200px 50px 0px 50px;" class="CTN">
    <?php
session_start();
include("condb.php");

// echo $_SESSION["name"].'<br>';
echo 'Your username is '.$_SESSION["username"].'<br><br>';
echo 'Your name is '.$_SESSION["firstname"].'<br>';
echo '<br><a href="input_to_update.html">EDIT NAME</a><br><BR>';
                  include("condb.php");
echo '<a href="logout.php">Logout</a>';
?>
    </div>



    
</body>
</html>