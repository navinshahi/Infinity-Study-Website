<?php
session_start();
session_destroy();
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Infinity Study : Login</title>
        <link href="f1346d0b-0866-4e5b-b818-515fd4e73670_200x200.ico" type="image" rel="icon">
        <link href="login.css" rel="stylesheet" type="text/css">
        <link href="login_small.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width:768px)">
        <link href="bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Login to Infinity Study and access more contents of this website..">
        <meta name="keywords" content="login,contact us,contact infinity study,question papers,infinity study,study,infinitystudy,answer key,exams,entrance exams question paper,previous year papers,jee main papers,neet,jee main question papers">
        <meta name="author" content="Navin Shahi">
    </head>
    <body style="font-family:'Open Sans',Helvetica,Arial,sans-serif;background-color:#f5f5f5;">
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
               <a href="login.php"> <li id="navba_6"><span class="glyphicon glyphicon-log-in"></span>  Login/Register</li></a>
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
        <div class="box">
          <div class="box1">Login</div>
          <div class="box2">
          <form action="login1.php" method="post">
                                <div class="form-group">
                                   <span class="glyphicon glyphicon-user"></span> <label for="email">Email</label>
                                    <input type="email" class="form-control" name="Email" required><br>
                                </div>
                                <div class="form-group">
                                     <span class="glyphicon glyphicon-lock"></span>
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="Password" required><br>
                                </div>
                                <input type="submit" value="Sign in" class="btn btn-primary" name="submit2">
                                <input type="reset" value="Reset" class="btn btn-warning">
                             </form><br>
                             <p> <a href="#"><b>Forgot Password ?</b></a>
          </div>
          <div class="box3">Don't have an account? <a href="sign_up.php">Register</a></div>
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
        </script>
    </body>
</html>