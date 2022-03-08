<?php
include("config/connection.php");
include("include/process.php");

error_reporting(0);
if (!isset($_SESSION['userId'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | SMBG</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
    body {
        
      background-image: url("images/background.jpg");
      background-size: cover;
      /*background-repeat: no-repeat;*/
    }
  </style>
</head>
<body>

<section class="content-header">

<br><br><br>
    <div class="row" align="center">
        <div class="col-sm-12">
            <img src="images/diabetes-logo.png" style="height: 94px;">
        </div>
    </div>
</section>
<br>

<section class="content">
    <?php
/*    session_start();
    include "header-message.php";
    session_destroy();
    */?>

    <center><h2><b style="color: #FFFFFF">Select Language</b></h2></center><br><br><br>

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-yellow">
               <!-- <span class="info-box-icon"><i class="fa fa-calendar"></i></span>-->
                <img src="images/english.png" style="height: 68px;margin-left: 7px;margin-bottom: -97px;">

                <a href="english-pdf.php"><div class="info-box-content">
                    <span class="info-box-number" style="color: #FFFFFF;">English</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                    &nbsp
                  </span>
                    </div></a>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-red">
                <img src="images/hindi.png" style="height: 68px;margin-left: 7px;margin-bottom: -97px;">

                <a href="hindi-pdf.php"><div class="info-box-content">

                    <span class="info-box-number" style="color: #FFFFFF;">Hindi</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                    &nbsp
                  </span>
                    </div></a>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12"></div>
    </div>
</section>


<div class="control-sidebar-bg"></div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
