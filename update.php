<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>
    <?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "PFO";
    $getForchange=$_POST["field1"];
    $dataforchange=$_SESSION["username"];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE Account_Info SET firstname='".$getForchange."' WHERE username='".$dataforchange."'";
    $_SESSION["name"]=$getForchange;
    $_SESSION["firstname"]=$getForchange;
    echo 'this is username'.$dataforchange;
    echo '<br>this is new name(FIELD1) '.$getForchange.' and This is username (Primary Key)'.$dataforchange.'<br>';
    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    echo '<meta http-equiv="refresh" content="3; url=showACCountname.php">';
    // header("location:index.php");
    // Header("Location: index.php");
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();
    ?>
</body>
</html>