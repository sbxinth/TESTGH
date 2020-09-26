<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
    <!-- <meta http-equiv="refresh" content="3; url=index.php"> -->
    <style>
        .lds-dual-ring {
  display: inline-block;
  width: 80px;
  height: 80px;
}
.lds-dual-ring:after {
  content: " ";
  display: block;
  width: 64px;
  height: 64px;
  margin: 8px;
  border-radius: 50%;
  border: 6px solid #000;
  border-color: #000 transparent #000 transparent;
  animation: lds-dual-ring 1.2s linear infinite;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
    </style>
</head>
<body style="background-color: thistle;">
<?php
session_start();
?>
<?php
function gen_uuid() {
    $uuid = array(
     'time_low'  => 0,
     'time_mid'  => 0,
     'time_hi'  => 0,
     'clock_seq_hi' => 0,
     'clock_seq_low' => 0,
     'node'   => array()
    );
   
    $uuid['time_low'] = mt_rand(0, 0xffff) + (mt_rand(0, 0xffff) << 16);
    $uuid['time_mid'] = mt_rand(0, 0xffff);
    $uuid['time_hi'] = (4 << 12) | (mt_rand(0, 0x1000));
    $uuid['clock_seq_hi'] = (1 << 7) | (mt_rand(0, 128));
    $uuid['clock_seq_low'] = mt_rand(0, 255);
   
    for ($i = 0; $i < 6; $i++) {
     $uuid['node'][$i] = mt_rand(0, 255);
    }
   
    $uuid = sprintf('%08x-%04x-%04x-%02x%02x-%02x%02x%02x%02x%02x%02x',
     $uuid['time_low'],
     $uuid['time_mid'],
     $uuid['time_hi'],
     $uuid['clock_seq_hi'],
     $uuid['clock_seq_low'],
     $uuid['node'][0],
     $uuid['node'][1],
     $uuid['node'][2],
     $uuid['node'][3],
     $uuid['node'][4],
     $uuid['node'][5]
    );
   
    return $uuid;
   }

        $gusername=$_POST["field1"];
        $gemail=$_POST["field2"];
        $gpassword=$_POST["field3"];
        $firstname=$_POST["field4"];
        $lastname=$_POST["field5"];
        $servername= "localhost";
        $usernameLG="root";
        $passwordLG="";
        $dbname="PFO";
        $uidd = gen_uuid();
        $statusActib = 1;
        
        // $_SESSION["X1"]="son";

//create connecttion
$conn = new mysqli($servername, $usernameLG, $passwordLG ,$dbname);
//check connection
if ($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}
$sql = "INSERT INTO Account_Info (username,email,password,firstname,lastname,uid,status)
VALUES ('$gusername','$gemail','$gpassword','$firstname','$lastname','$uidd','$statusActib')";

if ($conn->query($sql) === TRUE){
    // echo "New record created successfully";
    // echo "<a href='success.php'>ดูข้อมูลในฐานข้อมูล</a>";
    echo '<div class="lds-dual-ring"></div>';
    print("<H1>Successfully</H1>");
    print("<h3>This page will refresh automatically . . .</h3>");

    echo '<meta http-equiv="refresh" content="4; url=index.php">';

}else{
    // echo "Error:" . $sql . "<br>" . $conn->error;
    // print '<br><br><br><br><br><br><br><br><br><br>';

    echo '<center><div><img width="300px" height="300px" src="image/download-free-png-incorrect-png-all-pluspngco-dlpngcom-incorrect-png-400_456.png" alt=""></div>';
    print '<center><h1>THIS USERNAME IS <span style="color:red;">ALREADY TAKEN';

    echo '<meta http-equiv="refresh" content="4; url=Form.php">';
}

$conn->close();
    ?>  
</body>
</html>