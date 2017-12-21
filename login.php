<?php  
error_reporting(0);
session_start();
include_once'class/gapura_class.php';
$user = new User();
$db = new Database();
$db->connectMySQL();
if($user->get_sesi()) {
  header("location:index.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $login=$user->cek_login($_POST['username'], $_POST['password']);
  if($login) {
    header("location:index.php");
  }
  else {
 header("location:login.php?r=error");
  }
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Page title -->
    <title>HRM SYSTEM</title>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/ico" href="images/icon.png" />
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/sweetalert/lib/sweet-alert.css" />
    <link rel="stylesheet" href="vendor/datatables_plugins/integration/bootstrap/3/dataTables.bootstrap.css" />
  <link rel="stylesheet" href="vendor/select2-3.5.2/select2.css" />
    <link rel="stylesheet" href="vendor/select2-bootstrap/select2-bootstrap.css" />
    <link rel="stylesheet" href="vendor/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" />
    <link rel="stylesheet" href="vendor/fooTable/css/footable.core.min.css" />
    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="styles/style.css"/>
    <!-- Css custome sendiri untuk customize keutuhan tertentu-->
    <link rel="stylesheet" href="styles/customcss/msc_custom.css"/>
    <!-- data tabel -->   
    <!-- data tabel -->
</head>
<body>
<div class="color-line"></div>
<div class="login-container">
<center>
</center><p>
    <div class="col-md-9">
        <div class="hpanel hgreen">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    
                </div>
                <center>LOGIN SYSTEM</center>
            </div>
            <div class="panel-body">
                <center>
                <img src="images/logo-front.png">&nbsp;&nbsp;
            </center>
                <small>
                <?php
if($_GET['r']=='error') {
echo '
  <div class="alert alert-danger fade in">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <i class="fa fa-times-circle fa-fw fa-lg"></i>Kesalahan Username & Password </div>
  ';  
  }
?>            </small>
                <p>
                     <form action="?op=in" method="post" id="loginForm" role="form">
                            <div class="form-group">
                                <!-- Tidak perlu menggunakan label cukup dengan placeholder pada form -->
                                <!-- <label class="control-label" for="username">USERNAME</label> -->
                                <input type="text" placeholder="NIP" title="Please enter you username" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <!-- <label class="control-label" for="password">PASSWORD</label> -->
                                <input type="password" title="Please enter your password" placeholder="PASSWORD" name="password" id="password" class="form-control" required>
                            </div>
                            <input class="btn btn-success btn-block" type="submit" name="login" value="Login"> 
                            </form>
                   
            </p>
            </div>
            <div class="panel-footer">
                <center> <?php echo date('Y'); ?> Copyright HRD Gapura</center>
            </div>
        </div>
    </div>
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.js"></script>
<script src="vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="vendor/iCheck/icheck.min.js"></script>
<script src="vendor/sparkline/index.js"></script>
<script src="vendor/moment/moment.js"></script>
<script src="vendor/datatables/media/js/jquery.dataTables.js"></script>
<script src="vendor/datatables/media/js/dataTables.bootstrap.js"></script>
<script src="vendor/select2-3.5.2/select2.min.js"></script>
<script src="vendor/fooTable/dist/footable.all.min.js"></script>
<!-- Jquery validasi -->
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
<!-- App scripts -->
<script src="scripts/homer.js"></script>
<script src="scripts/aplikasi.js"></script>
<script src="scripts/tabel.js"></script>
<script>
    $(function(){
        $("#loginForm").validate({
            rules: {
                    username: {
                    required: true,
                    minlength: 3
                     
                },
                password: {
                    required: true,
                    minlength: 4
                    
                }
            },
            messages: {
                number: {
                    required: "(Please enter your phone number)",
                    number: "(Please enter valid phone number)"
                },
                last_name: {
                    required: "This is custom message for required",
                    minlength: "This is custom message for min length"
                }
            },
            submitHandler: function(form) {
                form.submit();
            },
            errorPlacement: function(error, element) {
                $( element )
                        .closest( "form" )
                        .find( "label[for='" + element.attr( "id" ) + "']" )
                        .append( error );
            },
            errorElement: "span",
        });
    });
</script>
</body>
</html>