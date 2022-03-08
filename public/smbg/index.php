<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration Page | SMBG</title>
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
      
    <p class="login-box-msg">Fill your details</p>

    <form action="include/process.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="userName"
            pattern="^[A-Za-z -]+$"
           oninput="this.setCustomValidity('')"
           oninvalid="this.setCustomValidity('Please Enter Only Character')"
            placeholder="Enter Full name" required>
        <!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
      </div>

        <div class="form-group has-feedback">
            <input type="text" class="form-control" name="userMobileNo"
               pattern="[0-9]+"
               oninput="this.setCustomValidity('')"
               oninvalid="this.setCustomValidity('Please Enter Only Number')" 
               placeholder="Enter mobile no." 
               maxlength="10" minlength="10" required>
            <!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
        </div>

        <div class="form-group has-feedback">
            <input type="text" class="form-control" name="userPlace"
               pattern="^[A-Za-z -]+$"
               oninput="this.setCustomValidity('')"
               oninvalid="this.setCustomValidity('Please Enter Only Character')" 
               placeholder="Enter Place" required>
            <!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
        </div>

        <div class="form-group has-feedback">
            <?php include "include/view-state-nameP.php"; ?>
            <select class="form-control" name="userStateId" required>
                <option value="">----Select your State----</option>
                <?php
                $count = count($stateNameData);
                for ($i = 0; $i < $count; $i++) {
                    ?>
                    <option value="<?php echo $stateNameData [$i]->stateId; ?>">
                        <?php echo $stateNameData[$i]->stateName; ?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </div>

      <div class="row">
        <!--<div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>-->

        <div class="col-xs-12">
            <input type="hidden" name="model" value="userRegister">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Next</button>
        </div>
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
