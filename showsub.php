<?php
session_start();
require('inc/conn.php');

if ($_GET['id']==0) {
    echo "nothing";
}else{
    $id=$_GET['id'];
    $query = "SELECT * FROM category where id=$id";
    $result = $conn->query($query);
    $c=0;
    while($row = $result->fetch_array()){
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="http://fonts.cdnfonts.com/css/segoe-ui-4" rel="stylesheet">
    <link rel="stylesheet" href="css/abst.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--custom css file-->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link href="http://fonts.cdnfonts.com/css/segoe-ui-4" rel="stylesheet">
     <!--font awesome icons-->
     <link href="./css/fontawesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Slick carousel css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <title>Art, Prints and Posters | <?php echo $row['name']; ?></title>
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
    <section class="abstract_area">
    <nav class="navbar navbar-expand-lg">
            <a href="index.html"><img src="./img/Logo1.png" alt="logo"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php" class="active"><p class="text-success"><b>Home</b></p></a></li>
                    <!-- <li><a href="#">Collections</a> -->
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <p class="text-success"><b>Collections</b></p>
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
                    <li><a href="#"><p class="text-success"><b>Browse gettyimages</b></p></a></li>
                    <li><a href="#"><p class="text-success"><b>About Us</b></p></a></li>
                    <li><a href="contactUs.php"><p class="text-success"><b>Contact Us</b></p></a></li>
                    <?php
                        if(isset($_SESSION['id'])){
                          echo '<li><a href="logout.php"><p class="text-success"><b>Logout</b></p></a></li>' ;
                        }else{
                           echo '<li><a href="login.php"><p class="text-success"><b>Login</b></p></a></li>';
                        }
                    ?>
                    <li><a href="cart.php"><p class="text-success"><b>Cart</b></p></a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        
        <h3><?php echo $row['name']; ?></h3>
        <div class="container">
            <div class="row">
                
               
            
            <?php
                $querys = "SELECT * FROM scategory where mainid=$id";
                $results = $conn->query($querys);
                $c=0;
                    while($row = $results->fetch_array()){
                   echo  '
                   <div class="col-md-4 abstract">
                   <div class="card">
                        <img src="admin/uploads/image/subimage/subcategory/'.$row['pic'].'" class="card-img-top" alt="...">
                        <div class="card-body abs_body">
                        <a href="testPoster.php?image=../testPoster.php?image=admin/uploads/image/subimage/subcategory/'.$row['pic'].'&code='.$row['code'].'"><button style="width:100%" class="btn btn-info">Order</button></a>
                        </div>
                    </div>
                    <br>
                    </div>
                     ';
                }
            ?>
            
            
              
    
                
    
         </div>
    
        </div>
    
        
    
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
  </body>
</html>
<?php
    }

}?>