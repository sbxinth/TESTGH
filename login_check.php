<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
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

<body>

<?php 

echo '<center><div class="lds-dual-ring"></div>';
session_start();
        if(isset($_POST['field1'])){
                  include("condb.php");
                  $username = $_POST['field1'];
                  $password = $_POST['field3'];

                  $_SESSION["username"] = $username;

                //   echo 'test <br>';
                //   echo $username .' & '. $password ;
                  $sql="SELECT * FROM Account_Info 
                  WHERE  username='".$username."' 
                  AND  password='".$password."' ";
                  $result = mysqli_query($con,$sql);
				// echo $result;
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                    //   $_SESSION["ID"] = $row["ID"];
                      $_SESSION["name"] = $row["firstname"];
                      $_SESSION["firstname"] = $row["firstname"];
                    //   $_SESSION["level"] = $row["level"];
                    echo '<br><br><br><br><br><br>'.'Hi ! '.$_SESSION["name"];
                    // Header("Location: index.php"); //user & password incorrect back to login again
                    echo '<meta http-equiv="refresh" content="5; url=index.php">';

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{
            echo 'E YANG';

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>
</body>
</html>