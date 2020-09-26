<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <style>
        a{
            text-decoration: none;
            padding: 10px;
        }

        a:hover{
            background-color:rgb(255, 255, 255) ;
            transition: 0.5s;
            color: red;
        }
    </style>
    <link rel="stylesheet" href="style/formst.css">
</head>
    <body style="background-color: thistle;">

        <?php
                    session_start();
                    if(isset($_SESSION["name"])){
                        echo 'LOGGED IN';
                        Header("Location: showACCountname.php");
                    }else{
                        echo 'NOT LOGGED IN';

                    }
        ?>
        <div class="container2">
            <div class="FORMST">
                <form method="POST" action="insert.php" autocomplete="on">
                <!-- <form method="GET" action="process.php"> -->
                    <fieldset>
                    <legend>Register</legend>
                        <input type="text" name="field1" placeholder="USERNAME" required>
                        <input type="email" name="field2" placeholder="EMAIL" required>
                        <input type="password" name="field3" placeholder="PASSWORD" required>
                        <input type="text" name="field4" placeholder="First-Name" required>
                        <input type="text" name="field5" placeholder="Last-Name" required>
    

                    </fieldset>
                    <input type="submit" value="Submit" />
                </form>
                <br><span>Already has account ?</span><br>
                <div style="margin-top: 30px;"><a  href="login.html">Login<a></div>
            </div>
        </div>


    </body>
</html>