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
    <title> English PDF | SMBG</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

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
    
    <form action="dashboard.php" method="post">
        <div class="row" align="left">

            <div class="col-xs-3 col-sm-2">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Back</button>
            </div>
        </div>
    </form>

    <div class="row" align="center">
        <div class="col-sm-12">
            <img src="images/diabetes-logo.png" style="height: 100px;">
        </div>
    </div>
    <br><br>

</section>

<section class="content hidden-xs">

    <div class="row">

        <a href="pdf/english/All about Quitting Smoking (B).pdf">
            <div class="col-lg-4">
                <div class="small-box bg-aqua">
                    <center><img src="images/quit-smoking.png" style="margin-top: 23px;"></center>
                    <div class="inner">
                        <p align="center" style="color: #494444;">All about Quitting Smoking</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/english/Autonomic Neuropathy (A).pdf">
            <div class="col-lg-4">
                <div class="small-box bg-aqua">
                    <center><img src="images/neuro.png" style="margin-top: 23px;"></center>
                    <div class="inner">
                        <p align="center" style="color: #494444;">Autonomic Neuropathy</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/english/Checking blood glucose Leaflet (C).pdf">
            <div class="col-lg-4">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <center><img src="images/blood-glucose.png" style="margin-top: 23px;"></center>
                    <div class="inner">
                        <p align="center" style="color: #494444;">Checking blood glucose Leaflet</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/english/Diabetes and Kidney Disease (A).pdf">
            <div class="col-lg-4">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <center><img src="images/kidney.png" style="margin-top: 23px;"></center>
                    <div class="inner" data-toggle="modal" data-target="#modal-issue16">
                        <p align="center" style="color: #494444;">Diabetes and Kidney Disease</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/english/Diabetes symptoms and Test (B).pdf">
            <div class="col-lg-4">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <center><img src="images/symptom.jpg" style="margin-top: 23px;"></center>
                    <div class="inner" data-toggle="modal" data-target="#modal-issue16">
                        <p align="center" style="color: #494444;">Diabetes symptoms and Test</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/english/Gestational Diabetes (B).pdf">
            <div class="col-lg-4">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <center><img src="images/gestational-diabetes.png" style="margin-top: 23px;"></center>
                    <div class="inner" data-toggle="modal" data-target="#modal-issue16">
                        <p align="center" style="color: #494444;">Gestational Diabetes (B)</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/english/Leaflet-Diabetes and orel health.PDF">
            <div class="col-lg-4">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <center><img src="images/oral-health.png" style="margin-top: 23px;"></center>
                    <div class="inner" data-toggle="modal" data-target="#modal-issue16">
                        <p align="center" style="color: #494444;">Leaflet-Diabetes and orel health</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/english/Leaflet-Diabetes Type 2.PDF">
            <div class="col-lg-4">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <center><img src="images/type2-diabetes.png" style="margin-top: 23px;"></center>
                    <div class="inner">
                        <p align="center" style="color: #494444;">Leaflet-Diabetes Type 2</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/english/Leaflet-Eye exam for diabetics.PDF">
            <div class="col-lg-4">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <center><img src="images/eye-exam.png" style="margin-top: 23px;"></center>
                    <div class="inner">
                        <p align="center" style="color: #494444;">Leaflet-Eye exam for diabetics</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/english/Leaflet-Gestational Diabetes- What to Expect">
            <div class="col-lg-4">

                <div class="small-box bg-aqua">
                    <center><img src="images/gestational-diabetes.png" style="margin-top: 23px;"></center>
                    <div class="inner">
                        <p align="center" style="color: #494444;">Leaflet-Gestational Diabetes- What to Expect</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</section>


<section class="content hidden-sm hidden-md hidden-lg">
    <div class="row">

        <a href="http://intascareforyou.com/smbg/pdf/hindi/All_about_Quitting_Smoking_Hindi.pdf">
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-aqua">
                    <center><img src="images/quit-smoking.png" style="margin-top: 23px;"></center>
                    <div class="inner">
                        <p align="center" style="color: #494444;">All about Quitting Smoking</p>
                    </div>
                </div>
            </div>
        </a>


        <a href="pdf/hindi/Autonomic_Neuropathy_Hindi.pdf">
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-aqua">
                    <center><img src="images/neuro.png" style="margin-top: 23px;"></center>
                    <div class="inner" data-toggle="modal" data-target="#modal-issue16">
                        <p align="center" style="color: #494444;">Autonomic Neuropathy</p><br>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/hindi/Checking_blood_glucose_Leaflet_Hindi.pdf">
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-aqua">
                    <center><img src="images/blood-glucose.png" style="margin-top: 23px;"></center>
                    <div class="inner" data-toggle="modal" data-target="#modal-issue16">
                        <p align="center" style="color: #494444;">Checking blood glucose Leaflet</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/hindi/Diabetes_and_Kidney_Disease_Hindi.pdf">
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-aqua">
                    <center><img src="images/kidney.png" style="margin-top: 23px;"></center>
                    <div class="inner" data-toggle="modal" data-target="#modal-issue16">
                        <p align="center" style="color: #494444;">Diabetes and Kidney Disease</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/hindi/Diabetes_symptoms_and_Test_Hindi.pdf">
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-aqua">
                    <center><img src="images/symptom.jpg" style="margin-top: 23px;"></center>
                    <div class="inner" data-toggle="modal" data-target="#modal-issue16">
                        <p align="center" style="color: #494444;">Diabetes symptoms and Test</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/hindi/Gestational_Diabetes_(B)_Hindi.pdf">
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-aqua">
                    <center><img src="images/gestational-diabetes.png" style="margin-top: 23px;"></center>
                    <div class="inner" data-toggle="modal" data-target="#modal-issue16">
                        <p align="center" style="color: #494444;">Gestational Diabetes (B)</p><br>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/hindi/Leaflet_Diabetes_and_orel_health_Hindi.pdf">
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-aqua">
                    <center><img src="images/oral-health.png" style="margin-top: 23px;"></center>
                    <div class="inner" data-toggle="modal" data-target="#modal-issue16">
                        <p align="center" style="color: #494444;">Leaflet-Diabetes and oral health</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/hindi/Leaflet_Diabetes_Type 2_Hindi.pdf">
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-aqua">
                    <center><img src="images/type2-diabetes.png" style="margin-top: 23px;"></center>
                    <div class="inner" data-toggle="modal" data-target="#modal-issue16">
                        <p align="center" style="color: #494444;">Leaflet-Diabetes Type 2</p><br>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/hindi/Leaflet_Eye_exam_for_diabetics_Hindi.pdf">
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-aqua">
                    <center><img src="images/eye-exam.png" style="margin-top: 23px;"></center>
                    <div class="inner" data-toggle="modal" data-target="#modal-issue16">
                        <p align="center" style="color: #494444;">Leaflet-Eye exam for diabetics</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="pdf/hindi/Leaflet_Gestational_Diabetes_What_to_Expect_hindi.pdf">
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-aqua">
                    <center><img src="images/gestational-diabetes.png" style="margin-top: 23px;"></center>
                    <div class="inner">
                        <p align="center" style="color: #494444;">Leaflet-Gestational Diabetes- What to Expect</p>
                    </div>
                </div>
            </div>
        </a>
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
