<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
<?php
session_start();

?>
<?php
        // $name=$_GET["field1"];
        // $email=$_GET["field2"];
        // $sport=$_GET["field3"];
        // $info=$_GET["field4"];
        $servername= "localhost";
        $usernameLG="root";
        $passwordLG="";
        $dbname="PFO";
    
//create connecttion
$conn = new mysqli($servername, $usernameLG, $passwordLG ,$dbname);
//check connection
if ($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}
$sql = "SELECT username,email,password,firstname,lastname,uid FROM Account_Info WHERE status = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo '<center><h1>USER LIST</h1></center>';
    while ($row = $result->fetch_assoc()){
        echo "<br> USERNAME: " . $row["username"] 
        . "<br>"."    - Email: " . $row["email"]. " " . "<br>" 
        . "    - Password: " . $row["password"]. " " . "<br>" 
        . "    - First-name: " . $row["firstname"]. " " . "<br>" 
        . "    - Last-name: " . $row["lastname"]. " " . "<br>" 
        . "    - USER ID: " . $row["uid"]. " " . "<br>" ;
    }
}else{
    echo "ไม่มีข้อมูลผู้ใช้";
}


$conn->close();
    ?>
</body>
</html>