<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Report | SMBG</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<style>
        body {
            background-image: url("images/background.jpg");
            background-size: cover;
            /*background-repeat: no-repeat;*/
        }
    </style>


</head>

<body class="hold-transition register-page">
<div class="register-box">
  
  <div class="register-box-body">
      
      <center><img src="images/diabetes-logo.png" style="height: 94px;"></center><hr>
      
    <p class="login-box-msg"><b>Fill your details</b></p>

    <form action="include/process.php" method="post">
        <div class="form-group has-feedback">
            <input type="text" class="form-control" name="userReportCode"
            placeholder="Enter Your Report Code" required>
        </div>
        <div class="col-xs-12">
            <input type="hidden" name="model" value="userReport">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Report</button>
        </div>
        <br>
        <br>
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>