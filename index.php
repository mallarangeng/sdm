<?php
session_start();
include_once'class/gapura_class.php';
include_once 'class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$user = new User();
$menu = new menu();
if (!$user->get_sesi())
{
header("location:login.php");
}
if ($_GET['r'] == 'logout')
{
$user->user_logout();
header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- disabled cache-->
    <!-- Page title -->
    <title>SDM GAPURA</title>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/ico" href="images/icon.png" />
    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" /><!-- oke -->
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" /><!-- oke -->
    <link rel="stylesheet" href="vendor/animate.css/animate.css" /><!-- oke -->
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" /><!-- oke -->
    <link rel="stylesheet" href="vendor/sweetalert/lib/sweet-alert.css" /><!-- oke -->
    <link rel="stylesheet" href="vendor/datatables_plugins/integration/bootstrap/3/dataTables.bootstrap.css" />
	<link rel="stylesheet" href="vendor/select2-3.5.2/select2.css" />
    <link rel="stylesheet" href="vendor/select2-bootstrap/select2-bootstrap.css" />
    <link rel="stylesheet" href="vendor/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" />
    <link rel="stylesheet" href="vendor/fooTable/css/footable.core.min.css" />
	<link rel="stylesheet" href="vendor/bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" />
    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" /><!-- oke -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" /><!-- oke -->
    <link rel="stylesheet" href="styles/style.css">
    <!-- Css custome sendiri untuk customize keutuhan tertentu-->
    <link rel="stylesheet" href="styles/customcss/msc_custom.css">
    <!-- data tabel -->
</head>
<body class="fixed-navbar fixed-footer">
<!-- Simple splash screen
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>MARKETINGSAKTI.COM</h1><p>Mohon tunggu sistem sedang melakukan permintaan data keserver.......</p><img src="images/loading-bars.svg" width="64" height="64" /> </div> </div>
-->
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span>
        <a href="index.php">SDM GAPURA</a>
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">SDM GAPURA</span>
        </div>
        <form role="search" class="navbar-form-custom" method="post" action="#">
            <div class="form-group">
                <input type="text" placeholder="Ketikan pencarian" class="form-control" name="search">
            </div>
        </form>
        <div class="navbar-right">
            <ul class="nav navbar-nav no-borders">
            
                <li class="dropdown">

                    <a href="?r=logout">
                        <i class=" pe-7s-right-arrow"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- Navigation -->
<aside id="menu">
    <div id="navigation">
        <div class="profile-picture">
            <a href="index.php">
                <img src="images/icon22.jpg" class="img-circle m-b" alt="logo">
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase"><?php echo $_SESSION['nama'];?><br><?php echo $_SESSION['nip'];?>  </span>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <small class="text-muted">Options <b class="caret"></b></small>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="">Contacts</a></li>
                        <li><a href="">Profile</a></li>
                        <li><a href="">Analytics</a></li>
                        <li class="divider"></li>
                        <li><a href="?r=logout">Logout</a></li>
                    </ul>
                </div>


                
            </div>
        </div>

        <ul class="nav" id="side-menu">
            <li class="active">
                <a href="index.php"> <span class="nav-label"><i class="pe-7s-home"></i>&nbsp;&nbsp;Dashboard</span> <span class="label label-success pull-right">1.0</span> </a>
            </li>
			<?php
				$arrayMenu = $menu->menuNavigasi($_SESSION['username']);
					if(isset($arrayMenu) && $arrayMenu !=NULL){
						foreach($arrayMenu as $data){
			?>
            <li>
                <a href="#"><span class="nav-label"><i class="<?php echo $data['icon']?>"></i>&nbsp;&nbsp;<?php echo $data['judul']?></span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
					<?php
						$arraysMenu = $menu->subMenuNavigasi($data['id_menu'],$_SESSION['username']);
						if(isset($arraysMenu) && $arraysMenu !=NULL){
							foreach($arraysMenu as $data2){
					?>
                    <li><a href="?r=<?php echo $data2['folder']?>&pg=<?php echo $data2['link']?>"><span class="nav-label"><i class="<?php echo $data2['icon']?>"></i></span>&nbsp;&nbsp;<?php echo $data2['judul']?></a></li>
					<?php
							}
						}
					?>
                </ul>
            </li>
            <?php
						}
					}
			?>
         
        </ul>
    </div>
</aside>

<!-- Main Wrapper -->
<div id="wrapper">
                            <?php
                                if (!isset($_GET['r'])){
                                    include('view/dashboard/dashboard.php');
                                }else{
                                    $r  = $_GET['r'];
                                    $pg = $_GET['pg'];
                                        include "view/".$r.'/'.$pg.".php";
                                }
                            ?>

    </div>

    <!-- Footer-->
    <footer class="footer">
        <span class="pull-right">
        SDM Gapura
        </span>
        &copy; 2017 - <?php echo date('Y'); ?>
    </footer>

</div>

  <!-- Vendor scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script><!-- oke -->
<script src="vendor/jquery-ui/jquery-ui.min.js"></script><!-- oke -->
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script><!-- oke -->
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script><!-- oke -->
<script src="vendor/metisMenu/dist/metisMenu.min.js"></script><!-- oke -->
<script src="vendor/iCheck/icheck.min.js"></script><!-- oke -->
<script src="vendor/sparkline/index.js"></script><!-- oke -->
<script src="vendor/moment/moment.js"></script>

<script src="vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>

<script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables_plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
<script src="vendor/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
<script src="vendor/select2-3.5.2/select2.min.js"></script>
<script src="vendor/fooTable/dist/footable.all.min.js"></script>
<!-- Jquery validasi -->
<script src="vendor/jquery-validation/jquery.validate.min.js"></script><!-- oke -->
<!-- App scripts -->
<script src="scripts/homer.js"></script><!-- oke -->
<script src="scripts/aplikasi.js"></script>
<script src="scripts/tabel.js"></script>




<script>

    $(function () {
		$(".js-source-konsumen").select2();
         $(".js-source-sales").select2();
        /**
         * Flot charts data and options
         */
        var data1 = [ [0, 55], [1, 48], [2, 40], [3, 36], [4, 40], [5, 60], [6, 50], [7, 51] ];
        var data2 = [ [0, 56], [1, 49], [2, 41], [3, 38], [4, 46], [5, 67], [6, 57], [7, 59] ];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
            },
            grid: {
                tickColor: "#f0f0f0",
                borderWidth: 1,
                borderColor: 'f0f0f0',
                color: '#6a6c6f'
            },
            colors: [ "#62cb31", "#efefef"],
        };

        $.plot($("#flot-line-chart"), [data1, data2], chartUsersOptions);

        /**
         * Flot charts 2 data and options
         */
        var chartIncomeData = [
            {
                label: "line",
                data: [ [1, 10], [2, 26], [3, 16], [4, 36], [5, 32], [6, 51] ]
            }
        ];

        var chartIncomeOptions = {
            series: {
                lines: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: "#64cc34"

                }
            },
            colors: ["#62cb31"],
            grid: {
                show: false
            },
            legend: {
                show: false
            }
        };

        $.plot($("#flot-income-chart"), chartIncomeData, chartIncomeOptions);
    });

</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-4625583-2', 'webapplayers.com');
    ga('send', 'pageview');

</script>

</body>

</html>