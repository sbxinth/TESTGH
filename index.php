<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style/STYLE2.css">  
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
</head>
<body>
<?php
            session_start();
          ?>
  <a id="home"></a>
    <!-- top menu -->
    <nav>
        <font style="font-size: 25pt; font-family: cursive; padding:20px 0 0 30px;">SBX</font>
        <ul style="padding-left: 0px;">
        <li><a class="lin" href="#home">Home</a></li>
        <li><a class="lin" href="#prf">Profile</a></li>
        <li><a class="lin" href="#EDU">Education</a></li>
        <li><a class="lin" href="Social_Link.html" target="_self">Social Link</a></li>


        <li><a class="lin" href="<?php echo "Form.php"; ?>" target="_self">Account/Register</a></li>



        <li><a class="lin" href="showinfo.php" target="_self">USER LIST</a></li>
    </ul></nav>
    <!-- end top menu -->

    <div class="ctnt">
        <div class="imgctn">
            <img class="mySlides" src="image/IMG_SLIDE/2.jpg" >
            <img class="mySlides" src="image/IMG_SLIDE/1.jpg" >
            <img class="mySlides" src="image/IMG_SLIDE/3.jpg" >
            <img class="mySlides" src="image/IMG_SLIDE/4.jpg" >
          
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
          </div>
          <div style="background: rgb(163, 163, 163); width: 100%; height: 13px; float: right;"></div>
     <!-- content -->
         <a id="prf"></a>
          <div style="float: left;padding: 30px 0px 20px 50px;width:450px;" ><img src="image/61130010035.jpg" style="width: 50% ;"><br>
            <span> <br> RACHAPOL BURINWATTHANA <br>
            Student ID : 61130010035 <br>
            </span> 
          </div>
          <div style="float: auto;"><img src="image/INFO.jpg" alt=""> <div style="float: right;"><img src="image/INFO copy.jpg" alt=""></div></div>
          <div style="background: rgb(163, 163, 163); width: 100%; height: 20px; float: right;"></div>
          <div style="float: left;width: 100%;">
          <br>
          <a id="EDU"></a>
          <div style="text-align: center;"><b style="font-size: 50pt;"><font style="color:red ;">E</font><font style="color:orange ;">d</font><font style="color:yellow ;">u</font><font style="color:green ;">c</font><font style="color:blue ;">a</font><font style="color:purple ;">t</font><font style="color:red ;">i</font><font style="color:orange ;">o</font><font style="color:yellow ;">n</font>
        
          </b> <br><br><br><br>
          <br>
          <img src="http://www.kng.ac.th/image/mainpage/banner.jpg" alt=""> <br>
          <div style="font-size: 15pt;color:rgb(79, 85, 1);">Primary school : <a href="http://www.kng.ac.th/">ChumchonWatkhanngoenSchool</a> 
            <br><br><br><br>
            <br><img src="http://www.thaischool1.in.th/_files/webconfig/86100397_2_20200206-163014.jpg" width="433" height="86" > 
          <br>
          <div style="font-size: 15pt;color:rgb(79, 85, 1);">High school : <a href="http://www.kng.ac.th/">ChumchonWatkhanngoenSchool</a> 
            <br>
          </div> 
          </div>
          <br><br>
          
           
        </div>

          <div style="background: rgb(136, 0, 0); width: 100%; height: 20px; float: right;"></div>
          
          
          <a id="Social"></a>


    </div> <!-- end content -->
      

    <!-- footer -->
    <div>
        <img src="image/16991768_559544954249252_5449404567620968274_o.jpg" width="100%" height="100px">
    </div>

    <!-- Img Slider script -->
    <script>
      var slideIndex = 1;
      showDivs(slideIndex);
      
      function plusDivs(n) {
        showDivs(slideIndex += n);
      }
      
      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
      }
      </script>
</body>
</html>