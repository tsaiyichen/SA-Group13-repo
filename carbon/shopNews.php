<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>carbon</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>
          dialog {
            border-radius: 10px;
            width: 80%;
            max-width: 500px;
            margin: auto;
            padding: 20px;
            box-sizing: border-box;
          }
        </style>

</head>

<body>
<?php

session_start();
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
$NewsID = $_GET['NewsID'];
$sql = "select * from shopnews";
$result = mysqli_query($link, $sql);
?>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">



        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <?php include "navBar.php";?>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>公告</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> 首頁</a></li>
                            <li class="breadcrumb-item active" aria-current="page">公告</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
	<style>
		.rectangle {
			display: inline-block;
			float: left;
			margin-left: 200px;
			margin-top: -150px;

			width: 200px;
			height: 100px;
			background-color: #5ec542;
			text-align: center;
			line-height: 100px;
			font-size: 30px;
			color: white;
			border-radius: 5px;

		}

		.centered-text {
			font-size: 1000%;
			text-align: center;
			line-height: 20px;
            margin-left: 70px;
			margin-top: 20px;
		}
	</style>
    <!-- ##### Contact Area Info Start ##### -->
    <section class="bg-white py-10">
    <div class="container px-10 my-10">
            <div class="row gx-5 justify-content-center">
                <!-- Pricing card free-->
                <table class="table table-hover" background="">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">標題</th>
                          <th scope="col">日期</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                          <th scope="row"><?php echo $row["NewsID"]; ?></th>
                          <td><u><a href="detail.php?ID=<?php echo $NewsID?>">
                                    <?php echo $row["title"]; ?>
                                    </a></u></td>
                          <td><?php echo $row["time"]; ?></td>
                        </tr>

                            <?php } ?>

                    </tbody>
                </table>
    </section>
    <!-- ##### Checkout Area End ##### -->

                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Area Info End ##### -->


    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>