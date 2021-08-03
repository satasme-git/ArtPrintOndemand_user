<?php
session_start();
require('inc/conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArtPrint</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!--Bootstrap css file-->
     <link rel="stylesheet" href="./css/bootstrap.min.css"> 
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--font awesome icons-->
    <link href="./css/fontawesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Slick carousel css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!--custom css file-->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link href="http://fonts.cdnfonts.com/css/segoe-ui-4" rel="stylesheet">

    <!-- fonts -->
    <style>
        .dropdown-menu{
            height:0%!important;

        }




        /* styling search bar */
        .search input[type=text]{

            height:25px;
            border-radius:25px;
            margin-left: 0%;
            border: none;
        }

        .search{

            margin:-12px;
            margin-top:-42px;
            border: 1px solid #d1d1d1;
            margin-right: 41%;
            margin-left: 31%;

        }

        .search button{
            background-color:#66000000;
            color: #C0C0C0;
            font-size: 14px;
            border: none;
            cursor: pointer;
        }
        .hedFnt{
            padding-top:-15px;
        }

        #footAbou{
            width:25%;
            padding-left:59px;
        }
        }

        .banImg{
            padding-left:342px;
            margin-bottom:-40px;
        }

        #catrow{
            background-color: white;
            width:742px;
            margin-left:0px;
            margin-right:0px;
        }
        #footDtl{
            width:25%;
            padding-left:59px;

        }
        #footDtl2{
            width:17%;
            padding-left:89px;
        }

        #cntInfo{
            width:20%;
            padding-left:43px;
            margin-left:79px;
        }
        .midBan{
            margin-top:35px!important;
        }
        .rdLine{
            margin-top:-9.5px;
            margin-left:-161px;
            margin-right:-123px;
        }

        .Hme_hr{
            display:none;
        }


        @media screen and (max-width: 320px){


            .search{
                margin-left:50px;
                margin-right:20%;
                margin-top:-1%;
                margin-bottom:16px;

            }
            .search input[type=text]{
                margin-right:-6%;
                width:85%;
            }
            .contFrm{
                float: none;
                display:grid!important;
                margin-left:30px;

            }
            .phneAre{
                float: none!important;
            }
            .envAre{
                float: none!important;
            }
            .navbar-right{
                float:none!important;
            }
            .dropdown-menu{
                height:0%!important;

            }
            .hedFnt{
                display:none;
            }


            .newMap{
                margin-right:56px;
            }

            .hedImg{
                display:none;
            }
            .banImg{
                display:none;
            }
            .Fbr{
                display:none;
            }
            #catrow{

                width:auto!important;

            }
            #wallpaper{
                margin-top: -20px;
            }
            #footDtl{
                width:57%!important;
                padding-left:20px!important;
            }
            #footDtl2{
                width:43%;
                padding-left:5px;
            }

            #cntInfo{
                width: 92%!important;
                margin-left: -20px!important;

            }

            .rdLine{
                margin-top:-9.5px;
                margin-left:-161px;
                margin-right:-123px;
            }
            #menu{
                margin-top:0px!important;
            }
            .Hme_hr{
                display: inherit;

            }


        }
        @media only screen and (device-width : 375px) {
            .newMap{
                margin-right:110px!important;
            }

        }
        @media only screen and (min-width : 411px) and (max-width:414px) {
            .newMap{
                margin-right:150px!important;
            }


        }

        @media (min-width:321px)  and (max-width:500px) {
            .search{
                margin-left:50px;
                margin-right:20%;
                margin-top:-1%;
                margin-bottom:16px;

            }
            .search input[type=text]{
                margin-right:-6%;
                width:85%;
            }
            .contFrm{
                float: none;
                display:grid!important;
                margin-left:60px;

            }
            .phneAre{
                float: none!important;
            }
            .envAre{
                float: none!important;
            }
            .navbar-right{
                float:none!important;
            }
            .dropdown-menu{
                height:0%!important;

            }
            .hedFnt{
                display:none;
            }


            .newMap{
                margin-right:100px;
            }

            .hedImg{
                display:none;
            }
            .banImg{
                display:none;
            }
            .Fbr{
                display:none;
            }
            #catrow{

                width:auto!important;

            }
            #wallpaper{
                margin-top: -20px;
            }
            #footDtl{
                width:57%!important;
                padding-left:20px!important;
            }
            #footDtl2{
                width:43%!important;
                padding-left:18px!important;
            }

            #cntInfo{
                width: 92%;
                margin-left: -22px;
            }
            #menu{
                margin-top:0px!important;
            }
            .Hme_hr{
                display: inherit;

            }

        }

        @media(min-width: 1281px) {
            .contFrm{
                margin-left:-83px;

            }

            .search input[type=text] {
                width:284px;
            }
            .newMap{

                margin-right:60px;
            }
        }


        @media (min-width: 1025px) and (max-width: 1280px) {
            .contFrm{
                margin-left:-84px;
            }

            .newMap{

                margin-right: 55px!important;
            }
            .search input[type=text] {
                width: 282px;
            }

        }

        @media (min-width: 1024px) and (max-width: 1280px) {

            .contFrm{
                margin-left:-59px;
            }
            .search input[type=text] {
                width: 208px;
            }
            .banImg{
                display:none;
            }

            .Fbr{
                display:none;
            }
            #catrow{
                margin-right: -329px;
            }
        }

        @media only screen and (min-device-width : 768px) and (max-device-width : 1023px){

            .banImg{
                display:none;
            }
            .search{
                margin: auto;
                margin-top: -43px;
                margin-right: 53%;
                margin-left: 6%;

            }
            .search input[type=text] {
                width: 208px;
            }
            .hedFnt{
                display:none;
            }
            .contFrm{
                margin-left: -105px;
            }
            #menu li a{
                font-size: 10px;
            }
            .Fbr{
                display:none;
            }
            #footDtl {
                width: 50%;
                padding-left: 33px;
            }
            #footDtl2 {
                width: 50%;

            }
            #cntInfo {
                width: 50%;
                padding-left: unset;
                margin-left: 33px

            }
            .newMap{
                margin-right: 57px;
            }

            #catrow{
                width: 628px;
                margin-left: 0px;
                margin-right: -343px;
            }
        }

        @media screen and (max-width: 767px){

        }




    </style>
    
</head>

<body>

    <!-- ============== Start Header Area ================== -->

    <section class="header">
        <img src="./img/home.jpg" class="home">
        <nav class="navbar navbar-expand-lg">
            <a href="index.html"><img src="./img/Logo1.png" alt="logo"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <!-- <li><a href="#">Collections</a> -->
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Collections
                          </a>
                                   <ul class="dropdown-menu" style="background-color:white;height:10%;padding-top=3%;text-decoration: none;">

                        <div class="row" id="catrow">
                            <div class="col-6 col-sm-4">
                                <?php
                                $c = 0;
                                $query5 = "SELECT * FROM category where mainid=0 ORDER BY name";
                                $result5 = $conn->query($query5);
                                while ($row5 = $result5->fetch_array()) {
                                    echo '
                        <li style="border-bottom:2px solid#f1f1f1;text-transform:uppercase;padding-bottom:5px;font-family:Hind;font-weight:100;font-size:16px;text-decoration:none;"><a style="letter-spacing:0.8px;line-height:17px;color:black;text-decoration:none;" href="show.php?id=' . $row5['id'] . '"><b>' . $row5['name'] . '</b></a></li>';

                                    if ($c ==6) {
                                        echo ' </div><div class="col-6 col-sm-4">';
                                        $c = 0;
                                    }
                                    $c++;
                                } ?>
                            </div>
                        </div>



</ul>

                        </li>
                    <li><a href="#">Browse gettyimages</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="contactUs.php">Contact Us</a></li>
                    <?php
                        if(isset($_SESSION['id'])){
                          echo '<li><a href="logout.php">Logout</a></li>' ;
                        }else{
                           echo '<li><a href="login.php">Login</a></li>';
                        }
                    ?>
                    
                    <li><a href="cart.php">Cart</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="container-fluid">
            <div class="main-heading">
                <h1>Australian</h1>
                <h1>Coast</h1>
                <h1>Collection</h1>

                <button type="button" class="btn btn-light ">Shop Now</button>

            </div>
            <div class="for_slick_slider multiple-items">
                <div class="items" id="itt">
                    <img src="./img/Slider/ID1_dk.png" class="kp" alt="">
                    <div class="overlay"></div>
                </div>
                <div class="items" id="itt">
                    <img src="./img/Slider/ID200.png" alt="">
                    <div class="overlay"></div>
                </div>
                <div class="items" id="itt">
                    <img src="./img/Slider/ID300.png" alt="">
                    <div class="overlay"></div>
                </div>
                <div class="items" id="iti">
                    <img src="./img/Slider/ID1_dk.png" alt="">
                    <div class="overlay"></div>
                </div>
                <div class="items" id="itt">
                    <img src="./img/Slider/ID200.png" alt="">
                    <div class="overlay"></div>
                </div>
                <div class="items" id="itt">
                    <img src="./img/Slider/ID300.png" alt="">
                    <div class="overlay"></div>
                </div>
            </div>

        </div>

    </section>

    <!-- ============== End Header Area ================== -->

    <!-- ============== Start Main Area ==================== -->

    <main class="site-main">

        <!-- ============== Start Upload Area ================== -->

        <!-- <section class="upload-img-area">
            <div class="container">
                <img src="./img/Logo1.png" class="up-img">

                <h3>Upload Your Image</h3>
                <h1>Digital Photo printing and framing</h1>
                <p>Upload your image and select from our wide range of framing options</p>

                <button type="button" class="btn btn-light">Upload Your Image</button>

                <div class="icon">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-youtube"></i>
                    <i class="fa fa-whatsapp"></i>
                </div>
            </div>
        </section> -->
        <section class="first_banner">


            <img src="./img/Home/dfgd.png">


        </section>

        <!-- ============== End Upload Area ================== -->

        <!-- ============== Start Collections Area ====================== -->


        <section class="Collection_area">
            <h3>Featured Collections</h3>
            <div class="container">
                <div class="row">

                    <div class="col-md-4 collect">
                        <div class="card">
                            <img src="./img/Home/1.jpg" class="card-img-top" alt="...">
                            <div class="card-body coll_body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 collect">
                        <div class="card ">
                            <img src="./img/Home/1.jpg" class="card-img-top" alt="...">
                            <div class="card-body coll_body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>

                    </div>


                    <div class="col-md-4 collect">
                        <div class="card">
                            <img src="./img/Home/1.jpg" class="card-img-top" alt="...">
                            <div class="card-body coll_body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>

                    </div>


                </div>

            </div>

            <div class="collect_botton">
                <button class="btn">View All Product</button>
            </div>

        </section>

        <section class="Product_st">
            <h3>Product Styles</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 product_single">
                        <div class="card">
                            <img src="./img/Home/sample.jpg" class="card-img-top" alt="...">
                            <div class="card-body prd_body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 product_single">
                        <div class="card">
                            <img src="./img/Home/sample.jpg" class="card-img-top" alt="...">
                            <div class="card-body prd_body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 product_single">
                        <div class="card">
                            <img src="./img/Home/sample.jpg" class="card-img-top" alt="...">
                            <div class="card-body prd_body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>

                    </div>

                    
                </div>
            </div>

        </section>

        <section class="getty_image">



            <div class="input-group col-4 offset-md-4">

                <input class="form-control from_serch" type="text" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button><span class="input-group-text " id="basic-text1"><i class="fa fa-arrow-right"
                                aria-hidden="true"></i></span></button>

                </div>
            </div>
        </section>
        <!-- about section -->
        <section>
            <div class="container about_sec">
                <div class="row">
                    <div class="col-md-6 about_img">
                        <img src="./img/Home/about.png">
                    </div>
                    <div class="col-md-6 about_text">
                        <h3>ABOUT US</h3>
                        <p>.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Excepteur sint
                            occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- <section class="collections-area">
            <div class="container headings text-center">
                <h1>Featured Collections</h1>
            </div>
        </section>

        <section class="grid">
            <div class="topbar" id="topbar">

                <div class="tabs">
                    <div class="tab all" onclick="filterSelection('all')">All</div>
                    <div class="tab headphones" onclick="filterSelection('headphones')">Sunny Holidays</div>
                    <div class="tab watches" onclick="filterSelection('watches')">Classy Abstract</div>
                    <div class="tab shoes" onclick="filterSelection('shoes')">Green Nature</div>
                    <div class="tab weather" onclick="filterSelection('weather')">Weather</div>
                    <div class="tab colourful" onclick="filterSelection('colourful')">Colourful</div>
                    <div class="tab coast" onclick="filterSelection('coast')">Australian Coast</div>
                </div>
            </div>
            <div class="container">
                <div class="image shoes">
                    <img src="./img/Gallery/g1.jpg" alt="sorry" />
                </div>
                <div class="image shoes">
                    <img src="./img/Gallery/g2.jpg" alt="sorry" />
                </div>
                <div class="image shoes">
                    <img src="./img/Gallery/g3.jpg" alt="sorry" />
                </div>
                <div class="image shoes">
                    <img src="./img/Gallery/g4.jpg" alt="sorry" />
                </div>
                <div class="image shoes">
                    <img src="./img/Gallery/g5.jpg" alt="sorry" />
                </div>
                <div class="image shoes">
                    <img src="./img/Gallery/g6.jpg" alt="sorry" />
                </div>
                <div class="image watches">
                    <img src="./img/Gallery/g7.jpg" alt="sorry" />
                </div>
                <div class="image watches">
                    <img src="./img/Gallery/g8.jpg" alt="sorry" />
                </div>
                <div class="image watches">
                    <img src="./img/Gallery/g9.jpg" alt="sorry" />
                </div>
                <div class="image watches">
                    <img src="./img/Gallery/g10.jpg" alt="sorry" />
                </div>
                <div class="image headphones">
                    <img src="./img/Gallery/g1.jpg" alt="sorry" />
                </div>
                <div class="image headphones">
                    <img src="./img/Gallery/g2.jpg" alt="sorry" />
                </div>
                <div class="image headphones">
                    <img src="./img/Gallery/g3.jpg" alt="sorry" />
                </div>
                <div class="image headphones">
                    <img src="./img/Gallery/g4.jpg" alt="sorry" />
                </div>
                <div class="image headphones">
                    <img src="./img/Gallery/g5.jpg" alt="sorry" />
                </div>
                <div class="image headphones">
                    <img src="./img/Gallery/g6.jpg" alt="sorry" />
                </div>
                <div class="image weather">
                    <img src="./img/Gallery/g6.jpg" alt="sorry" />
                </div>
                <div class="image weather">
                    <img src="./img/Gallery/g6.jpg" alt="sorry" />
                </div>
                <div class="image weather">
                    <img src="./img/Gallery/g6.jpg" alt="sorry" />
                </div>
                <div class="image weather">
                    <img src="./img/Gallery/g6.jpg" alt="sorry" />
                </div>
                <div class="image colourful">
                    <img src="./img/Gallery/g7.jpg" alt="sorry" />
                </div>
                <div class="image coast">
                    <img src="./img/Gallery/g10.jpg" alt="sorry" />
                </div>

            </div>
<!-- ============== Start Product Area ======================== -->

<!-- <section class="product-area">
    <div class="container">
        <h2>Product Styles</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="product-top">
                    <img src="./img/Product/P1.jpg" alt="">
                </div>
                <div class="product-bottom text-center">
                    <h3>Sandwich Mount</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-top">
                    <img src="./img/Product/P2.jpg" alt="">
                </div>
                <div class="product-bottom text-center">
                    <h3>Floating Frame</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-top">
                    <img src="./img/Product/P3.jpg" alt="">
                </div>
                <div class="product-bottom text-center">
                    <h3>Framed</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="product-top">
                    <img src="./img/Product/P4.jpg" alt="">
                </div>
                <div class="product-bottom text-center">
                    <h3>Sandwich Mount</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-top">
                    <img src="./img/Product/P5.jpg" alt="">
                </div>
                <div class="product-bottom text-center">
                    <h3>Floating Frame</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-top">
                    <img src="./img/Product/P6.jpg" alt="">
                </div>
                <div class="product-bottom text-center">
                    <h3>Framed</h3>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- ============== End Product Area ========================== -->

        <!-- </section>  -->

        <!-- ============== End Collections Area ======================== -->

        
        <!-- ============== Start Gettyimages Area ================== -->

        <!-- <section class="callToAct">
            <div class="container">
                <img src="./img/getty-white-06-gi-25-vertical-positive.png" alt="">
            </div>
            <div class="parallax">
                <div class="call-content">
                    <p class="text">We work Getty Images to and you the perfect artwork for your print start by
                        searching below</p>
                    <div class="call-news">
                        <div class="search-box">
                            <input class="search-txt" type="text" name="" placeholder="">
                            <a class="search-btn" href="#">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--  -->
        <section class="clients">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 client-logo">
                        <img src="./img/Home/1.png" alt="">
                    </div>
                    <div class="col-md-4 client-logo">
                        <img src="./img/Home/2.png" alt="">

                    </div>
                    <div class="col-md-4 client-logo">
                        <img src="./img/Home/3.png" alt="">

                    </div>



                </div>
            </div>


            </div>

        </section>

        <!-- ============== End Gettyimages Area ================== -->

        <!-- ============== Start Testmonials Area ====================== -->

        <section id="testimonials">
            <div id="testimonials-cover">
                <h1 class="text-center say">Testmonials</h1>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="customer-testimonial" class="text-center owl-carousel owl-theme">
                                <div class="testimonial">

                                    <blockquote class="text-center">
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Atque fugiat iure a, similique harum reiciendis incidunt totam delectus.
                                            Quasi ipsum excepturi consectetur ipsam cupiditate cumque asperiores placeat
                                            neque veritatis nihil!
                                        </p>
                                    </blockquote>
                                    <div class="tesimonials-author">
                                    <img src="./img/Testimonial/T1.jpg" class="img-responsive img-circle" alt="">

                                        <p>
                                            Ahmed Elsayed<br>
                                            <span>Our Client - ArtPrint</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="testimonial">
                                   

                                    <blockquote class="text-center">
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Atque fugiat iure a, similique harum reiciendis incidunt totam delectus.
                                            Quasi ipsum excepturi consectetur ipsam cupiditate cumque asperiores placeat
                                            neque veritatis nihil!
                                        </p>
                                    </blockquote>
                                    <div class="tesimonials-author">
                                        <img src="./img/Testimonial/T2.jpg" class="img-responsive img-circle" alt="">
                                        <p>
                                            Deniel Watrosu<br>
                                            <span>CEP & Founder - Google</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="testimonial">
                                    

                                    <blockquote class="text-center">
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Atque fugiat iure a, similique harum reiciendis incidunt totam delectus.
                                            Quasi ipsum excepturi consectetur ipsam cupiditate cumque asperiores placeat
                                            neque veritatis nihil!
                                        </p>
                                    </blockquote>

                                    <div class="tesimonials-author">
                                        <img src="./img/Testimonial/T3.jpg" class="img-responsive img-circle" alt="">
                                        <p>
                                            Deniel Watrosu<br>
                                            <span>CEP & Founder - Google</span>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============== End Testmonials Area ======================== -->

        <!-- ============== Start contact Area ================== -->
        <section class="contact_home">
            <div class="container">
                <div class="row contact_sec">
                    <p>Contact us</p>
                    <span>Get in Touch</span>
                </div>

            </div>
            <div id="concatctus" class="container">
                <div class="row contact_icon">
                    <div class="col-md-4 icon_cont">
                        <i class="fa fa-envelope-o 5x text-center" aria-hidden="true"></i>
                        <p><strong>Email</strong><br>
                            <span>sales@modernartframing.com.au </span>
                        </p>
                    </div>
                    <div class="col-md-4 icon_cont">
                        <i class="fa fa-map-marker 5x text-center" aria-hidden="true"></i>
                        <p><strong>Address</strong><br>
                            <span>Unit 7, Victoria Industrial Park,<br>
                                No. 8, Victoria Avenue,<br>
                                Castle Hill NSW 2154,<br>
                                Australia</span>
                        </p>
            
                    </div>
                    <div class="col-md-4 icon_cont">
                        <i class="fa fa-phone 5x text-center" aria-hidden="true"></i>
                        <p><strong>Phone</strong><br>
                            <span>+94 0770 000 000</span>
                        </p>
                    </div>
            
                </div>
            <div class="container">
                <div class="row">
                    <form  action="SendMail.php" method="post">
                        <div class="input-group input-group-sm col-md-6 offset-md-3">
                            <!--  -->
                            <input type="text" class="form-control contact_form_" aria-label="Small" placeholder="Name"
                                aria-describedby="inputGroup-sizing-sm" name="name" required>
                        </div>
                        <div class="input-group input-group-sm col-md-6 offset-md-3">
                            <!--  -->
                            <input type="text" class="form-control contact_form_" aria-label="Small" placeholder="Email"
                                aria-describedby="inputGroup-sizing-sm" name="email" required>
                        </div>
                        <div class="input-group input-group-sm col-md-6 offset-md-3">
                            <!--  -->
                            <!-- <input type="text" class="form-control contact_form_" aria-label="Small" placeholder="Name"  aria-describedby="inputGroup-sizing-sm" required> -->
                            <textarea class="form-control contact_form_" aria-label="With textarea "
                                placeholder="Message" name="comments"></textarea>
            
                        </div>
                        <div class="input-group input-group-sm col-md-6 offset-md-3 in_button">
                            <button type="submit" name="submit" class="sub_btn">SUBMIT</button>
            
                        </div>
                    </form>
                </div>
            
            </div>
            </div>
            
            </section>

        <!-- <section class="upload-imgarea">
            <div class="container">
                <img src="./img/Logo1.png" class="up-img">

                <h3>Upload Your Image</h3>
                <h1>Digital Photo printing and framing</h1>
                <p>Upload your image and select from our wide range of framing options</p>

                <button type="button" class="btn btn-light">Upload Your Image</button>

                <div class="icon">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-youtube"></i>
                    <i class="fa fa-whatsapp"></i>
                </div>
            </div>
        </section> -->

        <!-- ============== End Upload Area ================== -->

        <!-- ============== Start Footer Area ================== -->
        <section class="footer-area">
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Collection</a></li>
                                <li><a href="#">Browse gettyimages</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <ul>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">YouTube</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <ul>
                                <li><a href="#">Subscribe to Our Newsletter</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <ul>
                                <h4>Modern Art Framing</h4>
                                <p>But I must explain to you how all this mistaken idea of
                                    denouncing pleasure and praising pain was born and
                                    I will give you a complete account of the system,
                                    and expound the actual teaching of the great
                                    explorer o
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="underline">
                </div>
                </div>
                <div class="copyRight">
                    <img src="./img/Logo1.png">
                    <p class="copyrights">Copyright &copy; 2021 -Modern Art Framing <br> ALL RIGHTS RESERVED - DEVELOPED
                        BY SATASME</p>
                </div>
                <i id="scrolltp" class="fa fa-arrow-up"></i>
            </footer>
        </section>
        <!-- ============== End Footer Area ================== -->

    </main>

    <!-- ============== End Main Area ====================== -->

    <!--Start Script Area-->

    <!--Jquery js file-->

    <!--Bootstrap js file-->

     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 

    <!--OwlCarousel2 js file-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> 

    <!--Slick carousel Js file-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
     <script src="./js/slick.min.js"></script> 
     <script src="./js/custom.js"></script> 


    <!-- JavaScript for Toggle Menu -->



    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

    <script>

        filterSelection("all");


        function filterSelection(c) {
            var x, y, i, j;
            x = document.getElementsByClassName("image");
            y = document.getElementsByClassName("tab");

            for (j = 0; j < y.length; j++) {
                //here we check for active option

                RemoveClass(y[j], "active");
                if (y[j].className.indexOf(c) > -1) {
                    AddClass(y[j], "active");
                }
            }

            if (c == "all") {
                c = ""
            }

            for (i = 0; i < x.length; i++) {
                RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) {
                    AddClass(x[i], "show");
                }
            }
        }

        function AddClass(element, name) {
            element.classList.add(name);
        }

        function RemoveClass(element, name) {
            element.classList.remove(name);
        }
    </script> 

    <!--owlCarousel-->
     <script>
        const scrolltp = document.querySelector("#scrolltp");
        scrolltp.addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: "smooth",
            });
        });
        window.addEventListener("scroll", function (){
            if (window.scrollY >= 6800) {
                scrolltp.style.opacity = 1;
            }else {
                scrolltp.style.opacity = 0;
            }
        })
    </script>

    <script>
        $(function(){
            $("#customer-testimonial").owlCarousel({
                items:1,
                autoplay:true,
                smartSpeed: 700,
                look:true,
                autoplayHoverPause:true,
                nav:true,
                dots:true  
            });
        });
    </script> 



    <!--Scroll to top-->
     <script>
        const scrolltp = document.querySelector("#scrolltp");
        scrolltp.addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: "smooth",
            });
        });
        window.addEventListener("scroll", function () {
            if (window.scrollY >= 6800) {
                scrolltp.style.opacity = 1;
            } else {
                scrolltp.style.opacity = 0;
            }
        })
    </script> 

    <!--End Script Area-->

</body>

</html>