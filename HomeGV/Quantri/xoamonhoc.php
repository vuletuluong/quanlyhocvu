<?php
session_start();
include ("class/classdangnhap.php");
$p=new login();
include("ham_xemthogntincanhan.php");
$a=new login2();
if(isset($_SESSION['id']) && isset($_SESSION['user']) && isset($_SESSION['pass'])&&isset($_SESSION['tennguoidung'])&& isset($_SESSION['phanquyen']) )
{
	include('ham_dangnhap.php');
	$q=new login1();
	if($q->confirmlogin($_SESSION['id'],$_SESSION['user'],$_SESSION['pass'],$_SESSION['tennguoidung'],$_SESSION['phanquyen'])==1)
	{
		
		header('location:login.php');
		
	}
	else
	{
		
	}
	

}
else
{
	header('location:login.php');
}

$layid=0;
$idsv=$_SESSION['id'];
if(isset($_REQUEST['id']))
{
	$layid=$_REQUEST['id'];
	$idsv=$_SESSION['id'];
	
	
}
error_reporting(0);


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <div class="page">
        <!-- Main Navbar-->
        <header class="header z-index-50">

        </header>
        <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <nav class="side-navbar z-index-40">
                <!-- Sidebar Header-->
                <div class="sidebar-header d-flex align-items-center py-4 px-3"><img
                        class="avatar shadow-0 img-fluid rounded-circle" src="img/avatar-1.jpg" alt="...">
                    <div class="ms-3 title">
                        <h1 class="h4 mb-2"><a href="xoataikhoan.php"><?php echo $_SESSION['tennguoidung'] ?></a></h1>
                        <p class="text-sm text-gray-500 fw-light mb-0 lh-1">Qu???n tr??? vi??n tr?????ng DHCN Tp.HCM</p>
                    </div>
                </div>
                <!-- Sidebar Navidation Menus-->
                <span
          class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Main</span>
        <ul class="list-unstyled py-4">
          <li class="sidebar-item active"><a class="sidebar-link" href="homequantri.php">
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#real-estate-1"> </use>
              </svg>Trang ch???</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdownm" data-bs-toggle="collapse">
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#browser-window-1"> </use>
              </svg>Qu???n l?? t??i kho???n</a>
            <ul class="collapse list-unstyled " id="exampledropdownDropdownm">
              <li><a class="sidebar-link" href="taotaikhoan.php">Th??m t??i kho???n</a></li>
              <li><a class="sidebar-link" href="xoataikhoan.php">X??a t??i kho???n</a></li>
              <li><a class="sidebar-link" href="xoataikhoan.php">S???a t??i kho???n</a></li>
            </ul>
          </li>

          <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdow" data-bs-toggle="collapse">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#sales-up-1"> </use>
            </svg>Qu???n l?? sinh vi??n</a>
          <ul class="collapse list-unstyled " id="exampledropdownDropdow">
            <li><a class="sidebar-link" href="themsinhvien.php">Th??m sinh vi??n</a></li>
            <li><a class="sidebar-link" href="xoasinhvien.php">X??a sinh vi??n</a></li>
            <li><a class="sidebar-link" href="xoasinhvien.php">S???a th??ng tin sinh vi??n</a></li>
          </ul>
        </li>
          
          <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse">
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#portfolio-grid-1"> </use>
              </svg>Qu???n l?? gi???ng vi??n </a>
            <ul class="collapse list-unstyled " id="exampledropdownDropdown">
              <li><a class="sidebar-link" href="themgiangvien.php">Th??m gi???ng vi??n</a></li>
              <li><a class="sidebar-link" href="xoagiangvien.php">X??a gi???ng vi??n</a></li>
              <li><a class="sidebar-link" href="xoagiangvien.php">S???a th??ng tin gi???ng vi??n</a></li>
            </ul>
          </li>
          <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdownmm" data-bs-toggle="collapse">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#survey-1"> </use>
            </svg>Qu???n l?? m??n h???c</a>
          <ul class="collapse list-unstyled " id="exampledropdownDropdownmm">
            <li><a class="sidebar-link" href="themmonhoc.php">Th??m m??n h???c</a></li>
            <li><a class="sidebar-link" href="xoamonhoc.php">X??a m??n h???c </a></li>
            <li><a class="sidebar-link" href="xoamonhoc.php">Th??m m??n h???c </a></li>
          </ul>
        </li>
          <li class="sidebar-item"><a class="sidebar-link" href="login.php">
              <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                <use xlink:href="#disable-1"> </use>
              </svg>Login page </a></li>
      </nav>
            <div class="content-inner w-100">
                <!-- Page Header-->
                <header class="bg-white shadow-sm px-4 py-3 z-index-20">
                    <div class="container-fluid px-0">
                        <h2 class="mb-0 p-1">Qu???n l?? h???c t???p</h2>
                    </div>
                </header>
                <!-- Danh s??ch c??c l???p h???c ph???n ??? ????y-->
                <div class="bg-white">
                    <div class="container-fluid">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 py-3">
                                <li class="breadcrumb-item"><a class="fw-light" href="homequantri.php">Trang ch???</a></li>
                                <li class="breadcrumb-item active fw-light" aria-current="page">X??a, s???a m??n h???c</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <section class="tables">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-12">
                                <div class="card mb-0">
                                    <div class="card-header">
                                        <div class="card-close">
                                            <div class="dropdown">
                                                <button class="dropdown-toggle text-sm" type="button" id="closeCard1"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fas fa-ellipsis-v"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end shadow-sm"
                                                    aria-labelledby="closeCard1"><a
                                                        class="dropdown-item py-1 px-3 remove" href="#"> <i
                                                            class="fas fa-times"></i>Close</a><a
                                                        class="dropdown-item py-1 px-3 edit" href="#"> <i
                                                            class="fas fa-cog"></i>Edit</a></div>
                                            </div>
                                        </div>
                                        <h3 class="h4 mb-0">Th??ng tin m??n h???c</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                     
                                            <?php 
											
											
											
												$p->load_ds_monhoc("select * from monhoc  ");
											
											
												
											?>
                                            <div class="border-bottom my-5 border-gray-200"></div>
										<h4 class="h4 mb-0">Ch???n ho???c nh???p v??o m??n h???c c???n x??a </h4>
										<form action="" method="POST">
                                        <?php	
							// ?????nh ngh??a bi???n 
							$tenmhErr = $thoigianhocErr = $namhocErr = "";
							$tenmonhoc = $thoigianhoc = $namhoc = "";
							 
							
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
							 
							
								if (empty($_REQUEST["tenmh"])) {
									$tenmhErr = "B???n ch??a nh???p t??n";
								} else {
									$tenmonhoc =$q-> input_data($_REQUEST["tenmh"]);
									
									if (!preg_match("/^([a-zA-Z0-9????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\s]+)$/i",$tenmonhoc)) {
										$tenmhErr = "T??n kh??ng h???p l???";
									}
								}
								
								if (empty($_POST["thoigianhoc"])) {
									$thoigianhocErr = "B???n ch??a nh???p th???i gian h???c";
								} else {
									$thoigianhoc = $q->input_data($_POST["thoigianhoc"]);
									
									if (!preg_match ("/^([a-zA-Z0-9????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\s]+)$/i", $thoigianhoc) ) {
										$thoigianhocErr = "Th???i gian h???c kh??ng h???p l???";
									}
									
								}
								
								if (empty($_POST["namhoc"])) {
									$namhocErr = "B???n ch??a nh???p n??m h???c";
								} else {
									$namhoc =$q-> input_data($_POST["namhoc"]);
								}
							}

						?>   
											<div class="card-body">
												<div class="table-responsive">
													<table class="table mb-0">
														<thead>
															<tr>
																<td >M?? m??n h???c</td>
																<td>T??n m??n h???c</td>
																<td>Th???i gian h???c</td>
                                                                <td>N??m h???c</td>
																
															</tr>
														</thead>
														<tbody>
															<tr>
																<th scope="row" ><input name="id_monhoc" type="text" id="id_monhoc" readonly value="<?php echo $a->laycot("SELECT id_monhoc from monhoc WHERE id_monhoc='$layid' limit 1"); ?>" /></th>
																<td><input name="tenmh" type="text" id="tenmh" value="<?php echo $a->laycot("SELECT tenmh from monhoc WHERE id_monhoc='$layid' limit 1"); ?>" /> <span class="error" style="color:red;" >* <?php  echo $tenmhErr; ?> </span></td>
																<td><input name="thoigianhoc" type="text" id="thoigianhoc" value="<?php echo $a->laycot("SELECT thoigianhoc from monhoc WHERE id_monhoc='$layid' limit 1"); ?>" /><span class="error" style="color:red;" >* <?php  echo $thoigianhocErr; ?> </span></td>
																<td><input name="namhoc" type="text" id="namhoc" value="<?php echo $a->laycot("SELECT namhoc from monhoc WHERE id_monhoc='$layid' limit 1"); ?>" /><span class="error" style="color:red;" >* <?php  echo $namhocErr; ?> </span></td>
                                                                
															</tr>

														</tbody>
													</table>

												</div>
											</div>
                                           
											<div class="row">
												<div class="col-sm-9 ms-auto">
                                                

													<input class="btn btn-secondary" style="padding-left:15px;" type="submit" name="nut" id="nut" value="X??a" />
                                                    <input class="btn btn-success " style="padding-left:15px;" type="submit" name="nut" id="nut" value="S???a" />
                                                    </br>

													

												</div>
											</div>
                                            				<?php
											if (isset($_POST['nut']))
											switch ($_POST['nut']) {
												case 'X??a'; {
														$idxoa = $_REQUEST['id_monhoc'];
														if ($idxoa > 0) {
															if ($p->themxoasua("delete from monhoc where id_monhoc=$idxoa limit 1") == 1) {
																echo ' x??a m??n h???c th??nh c??ng. ';
																echo '<script language="javascript">
																		window.location="xoamonhoc.php";
																		</script>';
															} else {
																echo 'Th???t b???i.';
															}
														} else {
															echo ' Vui l??ng ch???n ho???c nh???p th??ng tin tr?????c khi x??a.';
														}
														break;
													}
												case'S???a';
												{
													
													$tenmonhoc=$_REQUEST['tenmh'];
													$thoigianhoc=$_REQUEST['thoigianhoc'];
													$namhoc=$_REQUEST['namhoc'];
													$idsua=$_REQUEST ['id_monhoc'];
													if($idsua >0)
													{
															if($tenmhErr=='' && $thoigianhocErr=='' && $namhocErr =='')
															{
																if($p->themxoasua("UPDATE monhoc SET tenmh = '$tenmonhoc', thoigianhoc = '$thoigianhoc',namhoc = '$namhoc' WHERE id_monhoc = $idsua limit 1;")==1)
																{
																	echo '<script language="javascript">
																		window.location="xoamonhoc.php";
																		</script>';
																	
																}
																else
																{
																	echo's???a kh??ng th??nh c??ng';
																	 
																}
																
															}
															else
															{
																
																echo'Vui l??ng nh???p ?????y ????? th??ng tin';
															}
													}
													else
													{
														echo' vui l??ng ch???n th??ng tin c???n s???a';	
													}
													
													break;
													
												}
												
											}
											?>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                </section>
                
       
                <!-- Page Footer-->
                <footer class="position-absolute bottom-0 bg-darkBlue text-white text-center py-3 w-100 text-xs"
                    id="footer">
                    <div class="container-fluid">
                        <div class="row gy-2">
                            <div class="col-sm-6 text-sm-start">
                                <p class="mb-0">Seven Team &copy; 2022</p>
                            </div>
                            <div class="col-sm-6 text-sm-end">
                                <p class="mb-0">Design by <a href="https://bootstrapious.com/p/admin-template"
                                        class="text-white text-decoration-none">Lynn</a></p>
                                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function (e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');


    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>