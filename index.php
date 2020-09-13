<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Infinity Study : Download any Previous Year question Papers With Answer keys.</title>
        <link href="f1346d0b-0866-4e5b-b818-515fd4e73670_200x200.ico" type="image" rel="icon">
        <link href="index.css" rel="stylesheet" type="text/css">
        <link href="index_small.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width:768px)">
        <link href="bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Here we provide every question papers,answer keys & solutions related to every entrance exams. You can search it or you can manually input what you want and you can download every year question papers.">
        <meta name="keywords" content="question papers,infinity study,study,infinitystudy,answer key,exams,entrance exams question paper,previous year papers,jee main papers,neet,jee main question papers">
        <meta name="author" content="Navin Shahi">
    </head>
    <body style="font-family:'Open Sans',Helvetica,Arial,sans-serif;">
        <div class="navba">
            <ul class="navba_content">
                <a href="#"><li class="navba_1"><img src="f1346d0b-0866-4e5b-b818-515fd4e73670_200x200.png" width="140" height="150"></li></a>
                <a href="index.php"><li id="navba_2"><span class="glyphicon glyphicon-home"></span>  Home</li></a>
                <a href="contact_us.php"><li id="navba_3"><span class="glyphicon glyphicon-phone-alt"></span>  Contact Us</li></a>
                <a href="about_us.php"><li id="navba_4"><span class="glyphicon glyphicon-question-sign"></span>  About Us</li></a>
                <a href="https://www.mygov.in/covid-19" target="_blank"><li id="navba_5"><span class="glyphicon glyphicon-info-sign"></span>  COVID19</li></a>
            </ul>
            <button type="button" class="toggle" onclick="hhh()"><span id="menu" class="glyphicon glyphicon-th-list" style="font-size:20px;"></span></button>
            <ul>
                <?php
if(isset($_SESSION['username'])){
        echo("<a href='logout.php'><li id='navba_6'><span class='glyphicon glyphicon-log-in'></span>  Logout</li></a>");
    }else{
         echo("<a href='login.php'><li id='navba_6'><span class='glyphicon glyphicon-log-in'></span>  Login/Register</li>");
    } ?>
            </ul>
            <form>
            <a href="#" class="sea"><div id="navba_but">
                <button class="but" type="submit">Search</button>
            </div></a>
            <div id="navba_search">
                <input type="search" class="input" placeholder="Search by Exam name">
            </div>
                </form>
        </div>
        <div id="nav_toggle"></div>
        <div class="image">
            <div class="sent"><h1 class="sentence">Start Downloading Previous Year Papers With Answer Key Of Any Exams</h1></div>
              <img src="1593024516742_50.jpg" alt="banner_image" class="banner_img">
        </div>
        <div class="updates">Hello, <?php
if(isset($_SESSION['username'])){
    echo($_SESSION["username"]);
    }else{
         echo("Admin...!");
    } ?></div>
        <div class="updates1"><div class="form-group" style="float:left;margin-left:0%;width:70%;">
                   <select class="form-control" id="mSelect" name="country">
<option value="">Select Your Exam...</option>
<option value="JEE Mains Previous Year Papers">JEE-Mains Previous Year Papers</option>
<option value="JEE Advanced Previous Year Papers">JEE-Advanced Previous Year Papers</option>
<option value="NEET(UG) Previous Year Papers">NEET(UG) Previous Year Papers</option>
<option value="B.H.U. UET Previous Year Papers">B.H.U. UET Previous Year Papers</option>
<option value="GATE(CS/IT) Previous Year Papers">GATE(CS/IT) Previous Year Papers</option>
<option value="UPSC - IAS Previous Year Papers">UPSC - IAS Previous Year Papers</option>
<option value="UGC - NET Previous Year Papers">UGC - NET Previous Year Papers</option>
<option value="ESE(Engineering Services Exam) Previous Year Papers">ESE(Engineering Services Exam) Previous Year Papers</option></a>
</select>
                    </div><button type="button" class="btn btn-danger" style="margin-left:0%;" onclick="jjj()">Submit</button></div>
        <div class="box">
          <div class="box1"><p style="float:left;">Pick a Goal</p><div class="form-group" id="select" style="float:left;margin-left:15%;margin-top:5px;">
                   <select class="form-control" id="mySelect" name="country">
<option value="">Select Your Exam...</option>
<option value="JEE Mains Previous Year Papers">JEE-Mains Previous Year Papers</option>
<option value="JEE Advanced Previous Year Papers">JEE-Advanced Previous Year Papers</option>
<option value="NEET(UG) Previous Year Papers">NEET(UG) Previous Year Papers</option>
<option value="B.H.U. UET Previous Year Papers">B.H.U. UET Previous Year Papers</option>
<option value="GATE(CS/IT) Previous Year Papers">GATE(CS/IT) Previous Year Papers</option>
<option value="UPSC - IAS Previous Year Papers">UPSC - IAS Previous Year Papers</option>
<option value="UGC - NET Previous Year Papers">UGC - NET Previous Year Papers</option>
<option value="ESE(Engineering Services Exam) Previous Year Papers">ESE(Engineering Services Exam) Previous Year Papers</option></a>
</select>
                    </div><button type="button" class="btn btn-danger" id="click" onclick="ggg()">Submit</button></div>
          <div class="box2">
             <div class="box_content">
                <div class="box_content1"><img src="jee-main-2020-admit-cardreleased-2019-12-06.jpg" alt="Jee Main" style="width:100%;height:100%;border-radius:5px;"></div>
                <div class="box_content2">
                    <div class="box_heading1"><p>JEE-Mains Previous Year Papers</p></div>
                    <div class="box_heading2"><a href="jeemain.php" class="se"><div id="navba_but1">
                <button class="butt">Start Study</button>
            </div></a></div>
                </div>
             </div>
             <div class="box_content">
                <div class="box_content1"><img src="JEE-ADVANCED.jpg" alt="Jee Advance" style="width:100%;height:100%;border-radius:5px;"></div>
                <div class="box_content2">
                    <div class="box_heading1"><p>JEE-Advanced Previous Year Papers</p></div>
                    <div class="box_heading2">
                    <a href="jeeadva.php" class="se"><div id="navba_but1">
                <button class="butt">Start Study</button>
            </div></a>
                    </div>
                </div>
             </div>
             <div class="box_content">
                <div class="box_content1"><img src="neet-pg-2020-registration-644x362-1572599863.jpg" alt="Neet" style="width:100%;height:100%;border-radius:5px;"></div>
                <div class="box_content2">
                    <div class="box_heading1"><p>NEET(UG)  Previous  Year  Papers</p></div>
                    <div class="box_heading2">
                    <a href="neet.php" class="se"><div id="navba_but1">
                <button class="butt">Start Study</button>
            </div></a>
                    </div>
                </div>
             </div>
             <div class="box_content">
                <div class="box_content1"><img src="logo-bhu.jpg" alt="BHU" style="width:100%;height:100%;border-radius:5px;margin-left:-3px;"></div>
                <div class="box_content2">
                    <div class="box_heading1"><p> B.H.U. UET Previous Year Papers</p></div>
                    <div class="box_heading2">
                    <a href="bhu.php" class="se"><div id="navba_but1">
                <button class="butt">Start Study</button>
            </div></a>
                    </div>
                </div>
             </div>
             <div class="box_content">
                <div class="box_content1"><img src="gate-2019.jpg" alt="GATE(B.tech)" style="width:100%;height:100%;border-radius:5px;"></div>
                <div class="box_content2">
                    <div class="box_heading1"><p> GATE(CS/IT) Previous Year Papers</p></div>
                    <div class="box_heading2">
                    <a href="gatecs.php" class="se"><div id="navba_but1">
                <button class="butt">Start Study</button>
            </div></a>
                    </div>
                </div>
             </div>
             <div class="box_content">
                <div class="box_content1"><img src="UPSC-IAS-LOGO.jpg" alt="IAS" style="width:100%;height:100%;border-radius:5px;"></div>
                <div class="box_content2">
                    <div class="box_heading1"><p> UPSC - IAS Previous Year Papers</p></div>
                    <div class="box_heading2">
                    <a href="upsc.php" class="se"><div id="navba_but1">
                <button class="butt">Start Study</button>
            </div></a>
                    </div>
                </div>
             </div>
             <div class="box_content">
                <div class="box_content1"><img src="NTA- Logo.jpg" alt="NET" style="width:100%;height:100%;border-radius:5px;"></div>
                <div class="box_content2">
                    <div class="box_heading1"><p> UGC - NET Previous Year Papers</p></div>
                    <div class="box_heading2">
                    <a href="ugcnet.php" class="se"><div id="navba_but1">
                <button class="butt">Start Study</button>
            </div></a>
                    </div>
                </div>
             </div>
             <div class="box_content">
                <div class="box_content1"><img src="main-qimg-bccd7222b33d20c3574d9d17eef6cf0e.jpg" alt="ESE" style="width:100%;height:100%;border-radius:5px;"></div>
                <div class="box_content2">
                    <div class="box_heading1"><p> ESE(Engineering Services Exam) Previous Year Papers</p></div>
                    <div class="box_heading2">
                    <a href="ese.php" class="se"><div id="navba_but1">
                <button class="butt">Start Study</button>
            </div></a>
                    </div>
                </div>
             </div>
          </div>
        </div>
        <footer id="navin">
            <div class="container">
              Copyright 2020 © Infinity Study. All Rights Reserved | Contact Us: +91 6306043265
            </div>
        </footer>
        <script type="text/javascript">
            x=0;
            function hhh(){
                if(x%2==0){
            document.getElementById("menu").className="glyphicon glyphicon-remove";
                    document.getElementById("nav_toggle").style.visibility="visible";
                    document.getElementById("navba_2").style.visibility="visible";
                    document.getElementById("navba_3").style.visibility="visible";
                    document.getElementById("navba_4").style.visibility="visible";
                    document.getElementById("navba_5").style.visibility="visible";
                    document.getElementById("navba_6").style.visibility="visible";
                    document.getElementById("navba_search").style.visibility="visible";
                    document.getElementById("navba_but").style.visibility="visible";
                x=x+1;}
                else{
                    document.getElementById("menu").className="glyphicon glyphicon-th-list";
                    document.getElementById("nav_toggle").style.visibility="hidden";
                    document.getElementById("navba_2").style.visibility="hidden";
                    document.getElementById("navba_3").style.visibility="hidden";
                    document.getElementById("navba_4").style.visibility="hidden";
                    document.getElementById("navba_5").style.visibility="hidden";
                    document.getElementById("navba_6").style.visibility="hidden";
                    document.getElementById("navba_search").style.visibility="hidden";
                    document.getElementById("navba_but").style.visibility="hidden";
                    x=x+1
                }
            }
            function ggg(){
                var p=document.getElementById("mySelect").value;
                if(p==""){
                    alert("Please, First Select Your Exam....");
                }
                else if(p=="JEE Mains Previous Year Papers"){
                    window.location.href="jeemain.php"; 
                }
                else if(p=="JEE Advanced Previous Year Papers"){
                    window.location.href="jeeadva.php"; 
                }
                else if(p=="NEET(UG) Previous Year Papers"){
                    window.location.href="neet.php"; 
                }
                else if(p=="B.H.U. UET Previous Year Papers"){
                    window.location.href="bhu.php"; 
                }
                else if(p=="GATE(CS/IT) Previous Year Papers"){
                    window.location.href="gatecs.php"; 
                }
                else if(p=="UPSC - IAS Previous Year Papers"){
                    window.location.href="upsc.php"; 
                }
                else if(p=="UGC - NET Previous Year Papers"){
                    window.location.href="ugcnet.php"; 
                }
                else if(p=="ESE(Engineering Services Exam) Previous Year Papers"){
                    window.location.href="ese.php"; 
                }
            }
                function jjj(){
                var p=document.getElementById("mSelect").value;
                if(p==""){
                    alert("Please, First Select Your Exam....");
                }
                else if(p=="JEE Mains Previous Year Papers"){
                    window.location.href="jeemain.php"; 
                }
                else if(p=="JEE Advanced Previous Year Papers"){
                    window.location.href="jeeadva.php"; 
                }
                else if(p=="NEET(UG) Previous Year Papers"){
                    window.location.href="neet.php"; 
                }
                else if(p=="B.H.U. UET Previous Year Papers"){
                    window.location.href="bhu.php"; 
                }
                else if(p=="GATE(CS/IT) Previous Year Papers"){
                    window.location.href="gatecs.php"; 
                }
                else if(p=="UPSC - IAS Previous Year Papers"){
                    window.location.href="upsc.php"; 
                }
                else if(p=="UGC - NET Previous Year Papers"){
                    window.location.href="ugcnet.php"; 
                }
                else if(p=="ESE(Engineering Services Exam) Previous Year Papers"){
                    window.location.href="ese.php"; }
                }
        </script>
    </body>
</html>