<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Infinity Study : UPSC</title>
        <link href="f1346d0b-0866-4e5b-b818-515fd4e73670_200x200.ico" type="image" rel="icon">
        <link href="upsc.css" rel="stylesheet" type="text/css">
        <link href="upsc_small.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width:768px)">
        <link href="bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Here you can download UPSC previous year question paper with answer keys & solutions...">
        <meta name="keywords" content="upsc,contact us,contact infinity study,question papers,infinity study,study,infinitystudy,answer key,exams,entrance exams question paper,previous year papers,jee main papers,neet,jee main question papers">
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
        <div class="updates"><p>UPSC</p></div>
        <div class="tabl">
        <table class="table table-bordered" id="table1">
  <thead class="thead-dark" id="tab_head">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Year</th>
      <th scope="col">Question Paper</th>
      <th scope="col">Answer Key</th>
      <th scope="col">Solution</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>2005</td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>2006</td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>2007</td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>2008</td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>2009</td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>2010</td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>2011</td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>2012</td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>2013</td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>2014</td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>2015</td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>2016</td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>2017</td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>2018</td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>2019</td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>2020</td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
      <td><a href="#" class="btn btn-primary btn disabled" role="button" aria-disabled="true">Available Soon</a></td>
    </tr>
  </tbody>
</table>
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