<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Infinity Study : About Us</title>
        <link href="f1346d0b-0866-4e5b-b818-515fd4e73670_200x200.ico" type="image" rel="icon">
        <link href="about_us.css" rel="stylesheet" type="text/css">
        <link href="about_small.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width:768px)">
        <link href="bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="It is the About Us page of Infinity Study. Here you can know about us...">
        <meta name="keywords" content="About us,contact us,contact infinity study,question papers,infinity study,study,infinitystudy,answer key,exams,entrance exams question paper,previous year papers,jee main papers,neet,jee main question papers">
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
        <div class="box">
          <div class="box1">About Us</div>
          <div class="box2"><ul >
                                <li id="list3">This Website is for downloading Any Previous Year Question Papers of any Exams..</li><br>
                                <li id="list3">The founder of this website is <b>'Navin Kumar Shahi'</b>.</li><br>
                                <li id="list3">Here you can download Any Question Paper of Any Exams like I.I.T. , B.H.U. , U.P.S.C etc..With Answer keys & Solutions..
                                </li><br>
                                <li id="list3">Our Other Website :- <a href="https://learnformulas.xyz" target="_blank">Learn Formulas || Play Games Online</a>
                                </li><br>
                                <li id="list3">Follow us on:-  <a href="https://twitter.com/NavinSh98034159" style="margin-left: 5px;" target="_blank"><img src="twitter.png" width="30" height="30"></a> <a href="https://www.youtube.com/channel/UCWLeqcR0idJYheItFl1yBqQ" style="margin-left: 5px;" target="_blank"><img src="youtube.png" width="35" height="35"></a> <a href="https://www.linkedin.com/in/navin-shahi-39a934170" style="margin-left: 5px;" target="_blank"><img src="linkedin.png" width="30" height="30"></a>  <a href="https://api.whatsapp.com/send?phone=916306043265&text=Give%20me%20further%20information%20about.." style="margin-left: 5px;" target="_blank"><img src="whatsapp.png" width="33" height="33"></a>
                                <a href="https://www.facebook.com/navin.shahi.311" style="margin-left: 5px;" target="_blank"><img src="facebook.png" width="33" height="33"></a>
                                </li>
                            </ul>
        </div>
          <div class="box3">For more enquiry: <a href="mailto:navinkumarshahi0@gmail.com" target="_blank">Email us</a></div>
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