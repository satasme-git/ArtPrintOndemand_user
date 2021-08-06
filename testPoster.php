<?php
session_start();
require('inc/conn.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Art, Prints and Posters</title>
  
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="home_css/style.css">
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="images/logos/art_print_on_demand.png" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="images/logos/art_print_on_demand.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.css"
    />
    <script src="js/modernizer.js"></script>

    
 
    
    <style>
        
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
        font-size: 12px; 
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
           .rdLine{
          margin-top:-9.5px;
          margin-left:-161px;
          margin-right:-123px;
      }
       #search-tab{
         margin-bottom: 26px;
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
      #botAll{
         width:100%;
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
     #botAll{
         width:100%;
     }

          } 
          
         
          @media screen and (max-width: 767px){
              
          }
        

          /* /////////////////////////////////////////////////////////////////////////////////////////// */



    </style>
    
    
</head>
<body onload="loadJustprint()">





<!-- ///////////////////////////new header//////////////////////////////////////////////////////////// -->
<!-- Navbar-->

<script>

  $(function () {
      $(window).on('scroll', function () {
          if ( $(window).scrollTop() > 10 ) {
              $('.navbar').addClass('active');
          } else {
              $('.navbar').removeClass('active');
          }
      });
  });
  
  

  
  </script>


  
 
  <!-- //////////////////////////////////////////////header/////////////////////////////////////////// -->


<!--Main navbar starts here-->




<nav class="navbar navbar-default">
  <div class="container">
 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/index.php"><img src="Image/39.png"  style="width: 60%;" /></a>
    </div>
    <br>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/index.php">Home <span class="sr-only">(current)</span></a></li>
        
                   
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"  style="color:black;  padding-right: 15px;"  aria-haspopup="true"
                   aria-expanded="false"   >Collections<span class="caret"></span></a>
                <ul class="dropdown-menu" style="background-color:white;height:10%;padding-top=0%;">
                    <div class="row" id="catrow">
                        <div class="col-lg-4 col-sm-4">
                            <?php
                            $c = 0;
                            $query5 = "SELECT * FROM category where mainid=0 ORDER BY name";
                            $result5 = $conn->query($query5);
                            while ($row5 = $result5->fetch_array()) {
                                echo '
<li style="border-bottom:1px solid#f1f1f1;text-transform:uppercase;padding-bottom: 8px;font-family:Hind;font-weight:100;font-size:12px;"><a style="letter-spacing:0.6px;line-height:16.8px;color:black;" href="posters/show.php?id=' . $row5['id'] . '">' . $row5['name'] . '</a></li>';

                                if ($c == 10) {
                                    echo ' </div> <div class="col-lg-4 col-sm-4">';
                                    $c = 0;
                                }
                                $c = $c + 1;
                            } ?>
                        </div>


                        
                </ul>
              
            </li>


            <li><a href="#">gettyImages</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="contact/contacts.php">Contact us</a></li>
      </ul>
  
      <ul class="nav navbar-nav navbar-right">
        <li>  <a href="/cart.php">
                <i class="fa fa-shopping-cart"  style="color: black;">&nbsp; Cart   </a></i>  &nbsp;&nbsp;</li>
        <li> <a href="/logingForm.php">   
                <i class="fa fa-user" style="color: black;">&nbsp; Login  </a></i></li>
   
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  </header>
  
  
  
  
  <!-- //////////////////////////////////////////////header/////////////////////////////////////////// -->


<br><br><br><br>



<div class="banner-area banner-bg-1" hidden>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <h2>Select product page</h2>
                    <ul class="page-title-link">
                        <li><a href="index.php">Home</a></li>
                        <li>
                            <a href="posters/abstract-art.html">Abstract Art</a>
                        </li>
                        <li>
                            <a
                                    href="posters/abstract-art-posters/cool-art-posters.html"
                            >cool tone</a
                            >
                        </li>
                        <li><a id="imageCode"> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- suuti-style select order section -->

<div class="container custom-poster-sec">
      <span class="suuti-topic-style-gray"
            style="width: 102.7%;margin-left: -1.3%;margin-top: -10px;height: 40px;border-radius: 12px 12px 0 0;"
      >Step 1: Select product
          <!--<span-->
          <!--class="fa fa-bars" id="all-nav" style="text-align: right;color: black;margin-left: 79%;" aria-hidden="true">-->
          <!--</span>-->
      </span>
    <hr style="margin-top: -19px;border: 0.5px solid;width: 102.8%;margin-left: -1.4%;">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-3" id="poster-canvas-stretching">
                <div class="feature-gallery">
                    <img class="thumb"
                         src="images/orderBtnImg/canvas-stretching.jpg" alt=""
                         title="">
                    <div class="fg-overlay">
                        <h2>Canvas Stretching</h2>
                        <p style="z-index: 10">continue...</p>
                    </div>
                </div>
                <label style="width: 100%;text-align: center;border: none;color: grey;font-weight: 100;">Canvas
                    Stretching</label>
            </div>
            <!--/feature-gallery--->

            <div class="col-md-3 col-sm-3" id="poster-framing">
                <div class="feature-gallery">
                    <img class="thumb"
                         src="images/orderBtnImg/frame.jpg" alt=""
                         title="">
                    <div class="fg-overlay">
                        <h2>Framing</h2>
                        <p style="z-index: 10">continue...</p>
                    </div>
                </div>
                <label style="width: 100%;text-align: center;border: none;color: grey;font-weight: 100;">Framing</label>
            </div>
            <!--/feature-gallery--->

            <div class="col-md-3 col-sm-3" id="poster-acrylic-mount">
                <div class="feature-gallery">
                    <img class="thumb"
                         src="images/orderBtnImg/acrylic-mount.jpg" alt=""
                         title="">
                    <div class="fg-overlay">
                        <h2>Acrylic Mount</h2>
                        <p style="z-index: 10">continue...</p>
                    </div>
                </div>
                <label style="width: 100%;text-align: center;border: none;color: grey;font-weight: 100;">Acrylic
                    Mount</label>
            </div>
            <!--/feature-gallery--->

            <div class="col-md-3 col-sm-3" id="poster-block-mount">
                <div class="feature-gallery">
                    <img class="thumb"
                         src="images/orderBtnImg/block-mount.jpg" alt=""
                         title="">
                    <div class="fg-overlay">
                        <h2>Block Mount</h2>
                        <p style="z-index: 10">continue...</p>
                    </div>
                </div>
                <label style="width: 100%;text-align: center;border: none;color: grey;font-weight: 100;">Block
                    Mount</label>
            </div>
        </div>
    </div>
</div>

<!-- suuti-style select order section -->

<!--framing section-->

<div class="container for-want" style="border: 1px solid;border-radius: 10px;margin-top: 4%;">
    <div class="row">
        <div class="col-xs-3 col-sm-1 p-r-0" style="margin-left: -58px;z-index: 99">
            <div id="poster-framing-section" class="col-md-3 poster-detail">
                <div class="custom-poster">
                    <div class="row">
                        <div id="selectMats" role="presentation"
                             style="background-color: black; text-align: center;width: 120px;transform: rotate(-90deg);z-index: 99;margin-bottom: 84px;left: -45px;margin-top: 60px;">
                            <span style="color:white; font-size: 2rem">Mats</span>
                        </div>
                        <div id="selectFrames" role="presentation"
                             style="background: #167AC6; text-align: center;width: 120px;transform: rotate(-90deg);z-index: 99;margin-bottom: 96px;left: -45px;">
                            <span style="color:white; font-size: 2rem">Frames</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-9 col-sm-11 p-r-0">
            <div class="scrollmenu frame-sec" id="frameCategory" hidden>
                <?php
                require('conn.php');
                $query = "SELECT * FROM fcategory";
                $result = $conn->query($query);
                while ($row = $result->fetch_array()) {
                    ?>
                    <a id="frameId<?= $row['id'] ?>" onclick="loadFrame('<?= $row['name'] ?>','frameId<?= $row['id'] ?>')"
                       style="cursor: pointer"><?= $row['name'] ?></a>
                    <?php
                }
                ?>
                <!--                <a href="#home" id="blackAndWhiteFrameId" onclick="loadFrameblackAndWhite()">Black and White</a>-->
                <!--                <a href="#news" id="boxFrameId" onclick="loadFrameBoxFrame()">Box Frames</a>-->
                <!--                <a href="#contact" id="budgetSyntheticFrameId" onclick="loadFrameBudgetSynthetic()">Budget Synthetic</a>-->
                <!--                <a href="#about" id="ColorFrameId" onclick="loadFrameColor()">Color</a>-->
                <!--                <a href="#support" id="distressedFrameId" onclick="loadFrameDistressed()">Distressed & Shabby</a>-->
                <!--                <a href="#blog" id="modernGoldFrameId" onclick="loadFrameModernGold()">Modern Gold, Silver & Metallic</a>-->
                <!--                <a href="#tools" id="modernTimberFrameId" onclick="loadFrameModernTimber()">Modern Timber</a>-->
                <!--                <a href="#base" id="oakLikeTimberFrameId" onclick="loadFrameOakLikeTimber()">Oak-Like Timber</a>-->
                <!--                <a href="#custom" id="ornateGoldFrameId" onclick="loadFrameOrnateGold()">Ornate Gold, Silver & black</a>-->
                <!--                <a href="#more" id="traditionalTimberFrameId" onclick="loadFrameTraditionalTimber()">Traditional Timber</a>-->
            </div>
            <div class="row frame-sec" hidden id="frameCardId"
                 style="width: 94%;margin-left: 5%;overflow: auto;height: 230px;display: inline-flex;overflow-y: hidden;">
                <!--<div class="column zoom">-->
                <!--<div class="card">-->
                <!--<img style="width: 100%;height: 0%;max-height: 0%;" src="images/home/sliderImage/abstarct_art_neutral_230x160.jpg" alt="Image" class="imageclient1" id="img1">-->
                <!--</div>-->
                <!--<div class="frame-details">-->
                <!--<p><b>Code: </b><span id="frame_name92">BW-1001</span></p>-->
                <!--</div>-->
                <!--</div>-->
            </div>

            <div id="mats-sec">
                <div class="container">
                    <!--                    <div class="row">-->
                    <div class="col-md-3">
                        <br>
                        <label style="margin-left: 6%;color: black">Select Mat</label>&nbsp;&nbsp;&nbsp;
                        <br>

                        <!--                            <input type="radio" style="margin-left: 15%;" name="mat" id="matYes" value="yes" checked/>&nbsp; yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                        <input type="radio" style="margin-left: 6%;" name="Nomat" id="matNo" value="no" />&nbsp;
                        None&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <br>

                        <input type="radio" style="margin-left: 6%;" name="Nomat" id="matNo1" value="mat1"/>&nbsp; 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="Nomat" id="matNo2" value="mat2" checked/>&nbsp; 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="Nomat" id="matNo3" value="mat3"/>&nbsp; 3
                        <br>
                        <br>

                        <div id="selectNoMat3" style="display: block;margin-bottom: 2px;width: 358px;margin-left: 4%;">
                            <input type="radio" style="margin-left: 6%;" name="selectedMat" id="SelmatNo3"
                                   value="selectMat3"/>&nbsp;&nbsp;&nbsp;
                            <label class="selectMatFrame">Top mat</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="matFrameSizeThird" disabled style="width: 55px;margin-left: 26px;"
                                   name="mat_width_1" value="50" type="number" min="5" max="50">
                            <label style="display: inline-block">mm</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div id="addColorThirdDivId"
                                 style="width: 33px;height: 33px;background-color: white;display: inline-block;margin-bottom: -10px;margin-left: -9px;"></div>
                        </div>

                        <div id="selectNoMat2" style="display: block;margin-bottom: 2px;width: 370px;margin-left: 4%;">
                            <input type="radio" style="margin-left: 6%;" name="selectedMat" id="SelmatNo2"
                                   value="selectMat2"/>&nbsp;&nbsp;&nbsp;
                            <label class="selectMatFrame" id="middleMatFrameId">Bottom mat</label>&nbsp;&nbsp;&nbsp;
                            <input id="matFrameSizeSecond" disabled style="width: 55px;margin-left: 10px;"
                                   name="mat_width_1" value="5" type="number" min="5" max="50">
                            <label style="display: inline-block">mm</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div id="addColorSecondDivId"
                                 style="width: 33px;height: 33px;background-color: white;display: inline-block;margin-bottom: -10px;margin-left: -10px;"></div>
                        </div>

                        <div id="selectNoMat1" style="display: none;margin-bottom: 2px;width: 370px;margin-left: 4%;">
                            <input type="radio" style="margin-left: 6%;" name="selectedMat" id="SelmatNo1"
                                   value="selectMat1"/>&nbsp;&nbsp;&nbsp;
                            <label class="selectMatFrame">Bottom mat</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="matFrameSizeFirst" disabled style="width: 55px;" name="mat_width_1" value="5"
                                   type="number" min="5" max="50">
                            <label style="display: inline-block">mm</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div id="addColorFirstDivId"
                                 style="width: 33px;height: 33px;background-color: white;display: inline-block;margin-bottom: -10px;margin-left: -8px;"></div>
                        </div>

                        <label style="margin-left: 6%;text-align: justify;font-size: 11px;">By default the top mat width
                            is 50mm and the bottom and middle Mat widths are 5mm. You can change the width in the
                            box.<br>
                            <span style="text-decoration: underline">To change colour, please click on the colour in the box on the right</span></label>
                    </div>
                    <!--                    </div>-->
                    <!--                    <div class="row">-->
                    <div class="col-md-8" style="margin-left:0;margin-bottom: 1%;">
                        <div class="scrollmenu" style="height: 285px;overflow-y: hidden;">
                            <div
                                    class="color-container"
                                    id="top-mats"
                                    style="margin: 2rem"
                            >
                                <div id="606B49" value class="box one">Balsam</div>
                                <div id="FFFFFF" class="box two">Crystal White</div>
                                <div id="AEA6A4" class="box three">Light Silver</div>
                                <div id="E4BAA2" class="box four">Cashew</div>
                                <div id="833F0E" class="box five">Cocoa</div>
                                <div id="D25C05" class="box six">Burnt Orange</div>
                                <div id="235033" class="box seven">Moss Green</div>
                                <div id="515F5F" class="box eight">Medium Green</div>
                                <div id="310B3E" class="box nine">African Violet</div>
                                <div id="4A4F49" class="box ten">Mercury</div>
                                <div id="E9BD66" class="box c1">Light Gold</div>
                                <div id="998C09" class="box c2">Gold</div>
                                <div id="060107" class="box c3">Midnight Black</div>
                                <div id="1E191F" class="box c4">Dark Gray</div>
                                <div id="5F605B" class="box c5">Cobblestone</div>
                                <div id="7C756F" class="box c6">Soft Grey</div>
                                <div id="ADAFAA" class="box c7">Mistey Grey</div>
                                <div id="B7B6BB" class="box c8">Silver Grey</div>
                                <div id="846F54" class="box c9">Taupe</div>
                                <div id="79705F" class="box c10">Antique</div>
                                <div id="606551" class="box c11">Olive</div>
                                <div id="2C4C3F" class="box c12">Forest Green</div>
                                <div id="A8C293" class="box c13">Thitsle</div>
                                <div id="C4B795" class="box c14">Nickel</div>
                                <div id="BCB89F" class="box c15">Spring Green</div>
                                <div id="D3D8B8" class="box c16">Celery</div>
                                <div id="47505F" class="box c17">Dark Blue</div>
                                <div id="3F4F5F" class="box c18">Medium Blue</div>
                                <div id="385072" class="box c19">Pregrine</div>
                                <div id="0154A0" class="box c20">Royal Blue</div>
                                <div id="0268BD" class="box c21">Caribbean Blue</div>
                                <div id="598BBE" class="box c22">Riviera Blue</div>
                                <div id="95BBE2" class="box c23">Pacific</div>
                                <div id="B5D1E7" class="box c24">Powder Blue</div>
                                <div id="6A4F6E" class="box c25">Plum</div>
                                <div id="5C2626" class="box c26">Raspberry</div>
                                <div id="7C4D55" class="box c27">Wine</div>
                                <div id="D898B2" class="box c28">Antique Rose</div>
                                <div id="B8838D" class="box c29">Victorian Rose</div>
                                <div id="D7A5C2" class="box c30">Lavender</div>
                                <div id="FFB6CA" class="box c31">Ice Pink</div>
                                <div id="D14A58" class="box c32">Chinese Red</div>
                                <div id="BF0B32" class="box c33">Real Red</div>
                                <div id="C94463" class="box c34">Cardinal Red</div>
                                <div id="DA5060" class="box c35">Coral</div>
                                <div id="9C554F" class="box c36">Rust</div>
                                <div id="9B301C" class="box c37">Burnt Sienna</div>
                                <div id="422A1E" class="box c38">Dark Brown</div>
                                <div id="3C140A" class="box c39">Coffee</div>
                                <div id="B49777" class="box c40">Sahara</div>
                                <div id="CFBB98" class="box c41">Tan</div>
                                <div id="FDD856" class="box c42">Wattle</div>
                                <div id="DECFB2" class="box c43">Pumice</div>
                                <div id="F6CE5F" class="box c44">Sunflower</div>
                                <div id="F3E288" class="box c45">Dijon</div>
                                <div id="F3E288" class="box c46">Storm Grey</div>
                                <div id="FEFEFE" class="box c47">Brite White</div>
                                <div id="FBFBFB" class="box c48">Soft White</div>
                                <div id="62768F" class="box c49">Antique Blue</div>
                                <div id="99705C" class="box c50">Bamboo</div>
                                <div id="01334C" class="box c51">Blueberry</div>
                                <div id="89673A" class="box c52">Pumpkin</div>
                                <div id="943312" class="box c53">Rosewood</div>
                                <div id="5E967D" class="box c54">Shamrock</div>
                                <div id="F37A0F" class="box c55">Tangerine</div>
                                <div id="1B2E2C" class="box c56">Teal</div>
                                <div id="FCFEF1" class="box c57">White Eggshell</div>
                                <div id="FEFCF0" class="box c58">Warm White</div>
                                <div id="FCFAED" class="box c59">Terrace</div>
                                <div id="FEFFDD" class="box c60">Cream</div>
                                <div id="710E3A" class="box c61">Royal Red</div>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <!--                </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container">
    <div class="row" style="padding-top: 50px;">
        <div class="col-sm-6 sticky">
            <div class="poster-img-prew">
                <div class="p-wrapper">
                    <div class="p-content">
                        <div id="thirdBorderDivId" style="height: 100%">
                            <div id="secondBorderDivId" style="height: 100%">
                                <!--<img id="borderimg1" src="images/downloadfile.jpg" style="width: 100%; height: 100%;" alt="">-->
                                <img id="borderimg1"
                                     style="width: 100%; height: 100%;box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.48);"
                                     alt="">
                            </div>
                        </div>
                        <h5 style="text-align: right" id="finalSizeImageId">final size : 1000x495mm</h5>
                    </div>
                </div>
            </div>
            <!-- for-want -->
        </div>
        <div class="col-sm-6 poster-detail sandunBorder for-want">
            <!--            <div id="poster-framing-section" class="col-md-12 poster-detail">-->
            <!--                <div class="custom-poster">-->
            <!--                    <div class="custom-size-div" id="custom-size-div">-->
            <!--                        <div class="row">-->
            <!--                            <div-->
            <!--                                    id="selectFrames"-->
            <!--                                    class="col-sm-6"-->
            <!--                                    style="background: linear-gradient( 90deg, rgba(2, 0, 36, 1) 0%, rgba(67, 139, 169, 1) 0%, rgba(45, 93, 125, 1) 0%, rgba(67, 139, 169, 1) 6%, rgba(0, 212, 255, 1) 100% ); text-align: center"-->
            <!--                            >-->
            <!--                                <span style="color:white; font-size: 2rem">Frames</span>-->
            <!--                            </div>-->
            <!--                            <div-->
            <!--                                    id="selectMats"-->
            <!--                                    class="col-sm-6"-->
            <!--                                    style="background-color: black; text-align: center"-->
            <!--                            >-->
            <!--                                <span style="color:white; font-size: 2rem">Mats</span>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->

            <!--            <div class="scrollmenu frame-sec" hidden>-->
            <!--                <a href="#home" id="blackAndWhiteFrameId" onclick="loadFrameblackAndWhite()">Black and White</a>-->
            <!--                <a href="#news" id="boxFrameId" onclick="loadFrameBoxFrame()">Box Frames</a>-->
            <!--                <a href="#contact" id="budgetSyntheticFrameId" onclick="loadFrameBudgetSynthetic()">Budget Synthetic</a>-->
            <!--                <a href="#about" id="ColorFrameId" onclick="loadFrameColor()">Color</a>-->
            <!--                <a href="#support" id="distressedFrameId" onclick="loadFrameDistressed()">Distressed & Shabby</a>-->
            <!--                <a href="#blog" id="modernGoldFrameId" onclick="loadFrameModernGold()">Modern Gold, Silver & Metallic</a>-->
            <!--                <a href="#tools" id="modernTimberFrameId" onclick="loadFrameModernTimber()">Modern Timber</a>-->
            <!--                <a href="#base" id="oakLikeTimberFrameId" onclick="loadFrameOakLikeTimber()">Oak-Like Timber</a>-->
            <!--                <a href="#custom" id="ornateGoldFrameId" onclick="loadFrameOrnateGold()">Ornate Gold, Silver & black</a>-->
            <!--                <a href="#more" id="traditionalTimberFrameId" onclick="loadFrameTraditionalTimber()">Traditional Timber</a>-->
            <!--            </div>-->
            <!--            <div class="row frame-sec" hidden id="frameCardId" style="margin-top: 12%;width: 98%;margin-left: 3%;overflow: auto;height: 230px;display: inline-flex;overflow-y: hidden;">-->
            <!--<div class="column zoom">-->
            <!--<div class="card">-->
            <!--<img style="width: 100%;height: 0%;max-height: 0%;" src="images/home/sliderImage/abstarct_art_neutral_230x160.jpg" alt="Image" class="imageclient1" id="img1">-->
            <!--</div>-->
            <!--<div class="frame-details">-->
            <!--<p><b>Code: </b><span id="frame_name92">BW-1001</span></p>-->
            <!--</div>-->
            <!--</div>-->
            <!--            </div>-->

            <!-- farming - mat section-->
            <!--            <div id="mats-sec" style="margin-left:5px;margin-bottom: 5%;">-->
            <!--                <div class="col-md-12" style="margin-left: 1%;">-->

            <!--                    <div style="height: auto">-->
            <!--                        <div-->
            <!--                                class="color-container"-->
            <!--                                id="top-mats"-->
            <!--                                style="margin: 2rem"-->
            <!--                        >-->
            <!--                            <div id="FFFFFF" value class="box one"></div>-->
            <!--                            <div id="C0C0C0" class="box two"></div>-->
            <!--                            <div id="808080" class="box three"></div>-->
            <!--                            <div id="000000" class="box four"></div>-->
            <!--                            <div id="FF0000" class="box five"></div>-->
            <!--                            <div id="800000" class="box six"></div>-->
            <!--                            <div id="FFFF00" class="box seven"></div>-->
            <!--                            <div id="808000" class="box eight"></div>-->
            <!--                            <div id="00FF00" class="box nine"></div>-->
            <!--                            <div id="008000" class="box ten"></div>-->
            <!--                            <div id="00FFFF" class="box c1"></div>-->
            <!--                            <div id="008080" class="box c2"></div>-->
            <!--                            <div id="0000FF" class="box c3"></div>-->
            <!--                            <div id="000080" class="box c4"></div>-->
            <!--                            <div id="FF00FF" class="box c5"></div>-->
            <!--                            <div id="800080" class="box c6"></div>-->
            <!--                            <div id="1b6d85" class="box c7"></div>-->
            <!--                            <div id="4cae4c" class="box c8"></div>-->
            <!--                            <div id="8a6d3b" class="box c9"></div>-->
            <!--                            <div id="761c19" class="box c10"></div>-->
            <!--                            <div id="FF3333" class="box c11"></div>-->
            <!--                            <div id="FF9933" class="box c12"></div>-->
            <!--                            <div id="FFCE33" class="box c13"></div>-->
            <!--                            <div id="DAFF33" class="box c14"></div>-->
            <!--                            <div id="B8FF33" class="box c15"></div>-->
            <!--                            <div id="86FF33" class="box c16"></div>-->
            <!--                            <div id="33FF8D" class="box c17"></div>-->
            <!--                            <div id="33FFC4" class="box c18"></div>-->
            <!--                            <div id="33B8FF" class="box c19"></div>-->
            <!--                            <div id="3386FF" class="box c20"></div>-->
            <!--                            <div id="333CFF" class="box c21"></div>-->
            <!--                            <div id="B833FF" class="box c22"></div>-->
            <!--                            <div id="FF33FC" class="box c23"></div>-->
            <!--                            <div id="FF33A2" class="box c24"></div>-->
            <!--                            <div id="FF3374" class="box c25"></div>-->
            <!--                            <div id="833C3C" class="box c26"></div>-->
            <!--                            <div id="72833C" class="box c27"></div>-->
            <!--                            <div id="3D833C" class="box c28"></div>-->
            <!--                            <div id="3C7A83" class="box c29"></div>-->
            <!--                            <div id="3F3C83" class="box c30"></div>-->
            <!--                            <div id="833C83" class="box c31"></div>-->
            <!--                            <div id="833C5A" class="box c32"></div>-->
            <!--                            <div id="8E7001" class="box c33"></div>-->
            <!--                            <div id="8E0101" class="box c34"></div>-->
            <!--                            <div id="018E21" class="box c35"></div>-->
            <!--                            <div id="ABD6B5" class="box c36"></div>-->
            <!--                            <div id="D6B6AB" class="box c37"></div>-->
            <!--                            <div id="AEABD6" class="box c38"></div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!-- end col -->
            <!--            </div>-->
            <!-- end section -->
            <div class="custom-poster">
                <!--<p>-->
                <!--All images are printed on 280gsm satin finished paper, rolled-->
                <!--and packed in paper tube-->
                <!--</p>-->
                <p></p>

                <h1 style="padding-left: 0px ; font-size: 2rem;padding-top: 30px;padding-bottom: 20px;">
                    Step 2: Select size
                </h1>

                <div style="margin-bottom: 25px;">
                    <input type="checkbox" name="" class="cBox-custom-size"/>
                    <span style="font-size : 2rem">Enter custom size</span>
                </div>
                <div class="custom-size-div" hidden style="margin-top: -25px;margin-bottom: 25px;">
                    <table style="width: 0%;">
                        <tr style="padding-left: 0px">
                            <td style="border :0">
                                <input type="number" value="50" name="customWidth" id="customWidthId1" min="0"/>
                            </td>
                            <td style="border :0">x</td>
                            <td style="border :0">
                                <input type="number" value="50" name="customHeight" id="customHeightId1" min="0"/>
                            </td>
                            <td style="border :0">cm</td>
                            <!--<td style="border :0;">-->
                            <!--<input type="button" style="background-color: dodgerblue;color: white;font-weight: bold" value="ENTER" class="customSizeBtn"/>-->
                            <!--</td>-->
                        </tr>
                    </table>
                    <label id="errorSize" style="color: red;font-size: 12px;" hidden>this sizes are not available.
                        Please call our showroom on (02) 9659 6696 for more options</label>
                </div>

                <label>Standard size</label>
                <select class="custom-poster-select-removeBorder fw-select-size" id="FramingDrpId">
                    <!--                    <option value="">Select Size</option>-->
                    <!--                    <option value="200">250x123mm</option>-->
                    <!--                    <option value="400">500x247mm</option>-->
                    <!--                    <option value="600">750x371mm</option>-->
                    <!--                    <option value="800">1000x495mm</option>-->
                    <!--                    <option value="1000">1000x1000mm</option>-->
                    <!--                    <option value="1200">1200x1200mm</option>-->
                </select>


                <div style="padding-top :1rem">
                    <table>
                        <!--<tr>-->
                        <!--<td>Name :</td>-->
                        <!--<td style="color: black"><b>PWES-105</b></td>-->
                        <!--</tr>-->
                        <tr>
                            <td>Size :</td>
                            <td class="fw-td-poster-size" id="fw-td-poster-size-id"><b>default size</b></td>
                        </tr>
                        <tr>
                            <td>Frame :</td>
                            <td class="selectFrame"><b>Select Frame</b></td>
                        </tr>
                        <!--                        <tr>-->
                        <!--                            <td>Mats :</td>-->
                        <!--                            <td>-->
                        <!--                                <label class="selectMat">Select Mat</label>&nbsp;&nbsp;&nbsp;-->
                        <!--                                <input type="radio" name="mat" id="matYes" value="yes" checked/>&nbsp; yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                        <!--                                <input type="radio" name="mat" id="matNo" value="no" />&nbsp; No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                        <!---->
                        <!--                                <label class="selectMatFrame">Mat Size</label>&nbsp;&nbsp;&nbsp;-->
                        <!--                                <input id="matFrameSize" name="mat_width_1" value="1.5" type="number" min="1.5" max="10">-->
                        <!--                            </td>-->
                        <!--                        </tr>-->
                        <!--<tr>-->
                        <!--<td>Fitting :</td>-->
                        <!--<td>d</td>-->
                        <!--</tr>-->
                        <tr>
                            <td>Glass</td>
                            <td>
                                <select class="s-dropdown" id="comboGlass">
                                    <!--<option value="2mm Clear Glass (incl)">2mm Clear Glass (incl)</option>-->
                                    <option value="2mm Clear Arcylic/Perspex">2mm Clear Arcylic/Perspex</option>
                                    <option value="2mm Clear Glass (incl)">2mm Clear Clear glass(incl)</option>
                                    <option value="2mm Anti-Reflective Glass">2mm Anti-Reflective Glass</option>
                                    <option value="2mm Conversation UV clear">2mm Conversation UV clear</option>
                                </select></td>
                        </tr>
                    </table>
                </div>

                <div style="padding-top :1rem">
                    <span class="suuti-topic-style-gray">Special Instructions</span>

                    <textarea
                            class="suuti-text-area"
                            name=""
                            id="framindSpecialInstructionId"
                            cols="30"
                            rows="4"
                    ></textarea>
                </div>

                <span class="suuti-topic-style-gray"
                      style="background: #626262;color: white;text-align: center;font-weight: bolder"
                >Your Order</span
                >

                <div style="margin-top:2rem; border: 1px solid black;background-color: white">
                    <table>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Product :</td>
                            <td height="3" style="color: black;border: none;padding-top: 0;padding-bottom: 0;">framing
                            </td>
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Item :</td>
                            <td height="3" id="itemAll1"
                                style="color: black;border: none;padding-top: 0;padding-bottom: 0;"></td>
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Frame :</td>
                            <td height="3" class="selectFrame"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;"
                                id="framesCodeId">none
                            </td>
                            <td height="3"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;"
                                id="framesPriceId">none
                            </td>
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="20" style="border: none;padding-top: 0;padding-bottom: 0;">Mat :</td>

                            <td height="20" class="selectMat"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;display: block">
                                Top mat : <span id="framesMatId3">none</span><span id="framesMatSizeId3"></span><span
                                        id="framesMatSizePriceId3"></span></td>

                            <td height="20" class="selectMat"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;display: block">
                                Middle mat : <span id="framesMatId2">none</span><span id="framesMatSizeId2"></span><span
                                        id="framesMatSizePriceId2"></span></td>

                            <td height="20" class="selectMat"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 30px;display: block">
                                Bottom mat : <span id="framesMatId1">none</span><span id="framesMatSizeId1"></span><span
                                        id="framesMatSizePriceId1"></span></td>

                            <td height="20" id="matFullCalculationId"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">
                                none
                            </td>
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Printing size :</td>
                            <td height="3" class="fw-td-poster-size"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;"
                                id="framingSize">default size
                            </td>
                            <td height="3"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;"
                                id="framingSizePriceId">none
                            </td>
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Glass price :</td>
                            <td height="3" class="selectGlass"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;"
                                id="framingGlassId">2mm Clear Arcylic/Perspex
                            </td>
                            <td height="3" id="framingGlassPriceId"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">
                                none
                            </td>
                        </tr>
                        <tr class="sandunBoxShadow" style="height: 25px">
                            <td style="color: black;border: none"><b>PRICE :</b></td>
                            <td style="color: black;font-weight: normal;border: none"></td>
                            <td style="color: black;font-weight: bolder;border: none" id="framingTotalPriceId">none</td>
                        </tr>
                    </table>
                </div>
                <table>
                    <tr>
                        <td style="border :0">
                            <button type="button" class="btn btn-primary" id="framingAddCartBtn" style="width: 100%"><b><span
                                            style="text-align: justify">Add to cart</span><i style="font-size: 20px"
                                                                                             class="fa fa-cart-plus"></i></b>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div id="poster-detail" class="col-sm-6 poster-detail sandunBorder">
            <div class="custom-poster">
                <p>
                    All images are printed on 280gsm satin finished paper, rolled and
                    packed in paper tube
                </p>

                <h1 style="padding-left: 0px ; font-size: 2rem">
                    Step 2: Select size
                </h1>

                <div style="margin-bottom: 25px;">
                    <input type="checkbox" name="" class="cBox-custom-size"/>
                    <span style="font-size : 2rem">Enter custom size</span>
                </div>

                <div class="custom-size-div" hidden style="margin-top: -25px;margin-bottom: 25px;">
                    <table>
                        <tr>
                            <td style="border :0">
                                <input type="number" name="customWidth" id="customWidthId" min="0"/>
                            </td>
                            <td style="border :0">cm x</td>
                            <td style="border :0">
                                <input type="number" name="customHeight" id="customHeightId" min="0"/>
                            </td>
                            <td style="border :0">cm</td>
                            <td style="border :0;">
                                <input type="button" style="background-color: dodgerblue;color: white;font-weight: bold"
                                       value="ENTER" class="customSizeBtn"/>
                            </td>
                        </tr>
                    </table>
                </div>

                <label>Standard size</label>
                <select class="custom-poster-select-removeBorder pjp-select-size">
                    <!--                    <option value="">Select Size</option>-->
                    <!--                    <option value="200">250x123mm</option>-->
                    <!--                    <option value="400">500x247mm</option>-->
                    <!--                    <option value="600">750x371mm</option>-->
                    <!--                    <option value="800">1000x495mm</option>-->
                </select>


                <span style="margin-top :1rem" class="suuti-topic-style-gray"
                      style="background: #626262;color: white;text-align: center;font-weight: bolder"
                >Your Order</span
                >

                <div style="padding-top :1rem">
                    <table>
                        <tr>
                            <td>No :</td>
                            <td>sdfsdf-02</td>
                        </tr>
                        <tr>
                            <td>Title :</td>
                            <td>sdfsdf-02</td>
                        </tr>
                        <tr>
                            <td>Size :</td>
                            <td class="pjp-td-poster-size">Please select</td>
                        </tr>
                    </table>
                </div>

                <div style="padding-top :1rem">
                    <span class="suuti-topic-style-gray">Special Instructions</span>

                    <textarea
                            class="suuti-text-area"
                            name=""
                            id=""
                            cols="30"
                            rows="4"
                    ></textarea>
                </div>

                <div style="margin-top:2rem; border: 1px solid black">
                    <table>
                        <tr>
                            <td style="border :0">Price :</td>
                            <td style="border :0">$0.00</td>
                            <td style="border :0">
                                <button type="button" class="btn btn-primary"><b><span style="text-align: justify">add to cart</span><i
                                                style="font-size: 20px" class="fa fa-cart-plus"></i></b></button>
                                <!--<img-->
                                <!--class="btn"-->
                                <!--src="https://img.icons8.com/cute-clipart/50/000000/shopping-cart.png"-->
                                <!--/>-->
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- poster-just-canvas-section -->
        <div id="poster-just-canvas-section" class="col-sm-6 poster-detail sandunBorder">
            <div class="custom-poster">
                <p>
                    All images are printed on 280gsm satin finished paper, rolled and
                    packed in paper tube
                </p>

                <h1 style="padding-left: 0px ; font-size: 2rem">
                    Step 2: Select size
                </h1>

                <div style="margin-bottom: 25px;">
                    <input type="checkbox" name="" class="cBox-custom-size"/>
                    <span style="font-size : 2rem">Enter custom size</span>
                </div>

                <div class="custom-size-div" hidden style="margin-top: -25px;margin-bottom: 25px;">
                    <table>
                        <tr>
                            <td style="border :0">
                                <input type="number" name="" id="customWidthId2" value="20" min="0" max="200"/>
                            </td>
                            <td style="border :0">x</td>
                            <td style="border :0">
                                <input type="number" name="" id="customHeightId2" value="20" min="0" max="200"/>
                            </td>
                            <td style="border :0">cm</td>
                            <!--<td style="border :0;">-->
                            <!--<input type="button" style="background-color: dodgerblue;color: white;font-weight: bold" value="ENTER" class="customSizeBtn"/>-->
                            <!--</td>-->
                        </tr>
                    </table>
                </div>

                <label>Standard size</label>
                <select class="custom-poster-select-removeBorder pjcs-select-size">
                    <!--                    <option value="">Select Size</option>-->
                    <!--                    <option value="200">250x123mm</option>-->
                    <!--                    <option value="400">500x247mm</option>-->
                    <!--                    <option value="600">750x371mm</option>-->
                    <!--                    <option value="800">1000x495mm</option>-->
                </select>

                <span style="margin-top :1rem" class="suuti-topic-style-gray"
                      style="background: #626262;color: white;text-align: center;font-weight: bolder"
                >Your Order</span
                >

                <div style="padding-top :1rem">
                    <table>
                        <tr>
                            <td>No :</td>
                            <td>sdfsdf-02</td>
                        </tr>
                        <tr>
                            <td>Title :</td>
                            <td>sdfsdf-02</td>
                        </tr>
                        <tr>
                            <td>Size :</td>
                            <td class="pjcs-td-poster-size">Please select</td>
                        </tr>
                    </table>
                </div>

                <div style="padding-top :1rem">
                    <span class="suuti-topic-style-gray">Special Instructions</span>

                    <textarea
                            class="suuti-text-area"
                            name=""
                            id=""
                            cols="30"
                            rows="4"
                    ></textarea>
                </div>

                <div style="margin-top:2rem; border: 1px solid black">
                    <table>
                        <tr>
                            <td style="border :0">Price :</td>
                            <td style="border :0">$0.00</td>
                            <td style="border :0">
                                <button type="button" class="btn btn-primary"><b><span style="text-align: justify">add to cart</span><i
                                                style="font-size: 20px" class="fa fa-cart-plus"></i></b></button>
                                <!--<img-->
                                <!--class="btn"-->
                                <!--src="https://img.icons8.com/cute-clipart/50/000000/shopping-cart.png"-->
                                <!--/>-->
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- poster-canvas-stretching-section -->
        <div
                id="poster-canvas-stretching-section"
                class="col-sm-6 poster-detail sandunBorder"
        >
            <div class="custom-poster">
                <p>
                    <!--Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto-->
                    <!--fuga, nostrum ducimus, natus iste illo quasi aspernatur-->
                    <!--laudantium, ut culpa rem. Sed quas odio ad iste perspiciatis ipsum-->
                    <!--recusandae soluta.-->
                </p>
                <div style="padding-top: 2rem">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Edge color</label>
                            <select
                                    class="custom-poster-select-removeBorder select-edgeType-canvas"
                                    id="custom-poster-select-removeBorder"
                            >
                                <option value="none">Select Edge Type</option>
                                <option value="black">Black edge</option>
                                <option value="white">White edge</option>
                                <option value="clear">Color</option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label>Timber size</label>
                            <select
                                    class="custom-poster-select-removeBorder timberSizeCanvasSretching"
                                    id="timberSize"
                            >
                                <option value="0">Select Timber Size</option>
                                <option value="20">20 mm</option>
                                <option value="40">40 mm</option>
                            </select>
                        </div>
                    </div>

                    <p style="padding-top: 2rem">
                        <!--Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto-->
                        <!--fuga, nostrum ducimus, natus iste illo quasi aspernatur-->
                        <!--laudantium, ut culpa rem. Sed quas odio ad iste perspiciatis-->
                        <!--ipsum recusandae soluta.-->
                    </p>
                </div>

                <h1 style="padding-left: 0px ; font-size: 2rem">
                    Step 2: Select size
                </h1>

                <div style="margin-bottom: 25px;">
                    <input type="checkbox" name="" class="cBox-custom-size"/>
                    <span style="font-size : 2rem">Enter custom size</span>
                </div>

                <div class="custom-size-div" hidden style="margin-top: -25px;margin-bottom: 25px;">
                    <table style="width: 0%;">
                        <tr style="padding-left: 0px">
                            <td style="border :0">
                                <input type="number" value="50" name="customWidth" id="customWidthIdCanvas" min="0"/>
                            </td>
                            <td style="border :0">x</td>
                            <td style="border :0">
                                <input type="number" value="50" name="customHeight" id="customHeightIdCanvas" min="0"/>
                            </td>
                            <td style="border :0">cm</td>
                            <!--<td style="border :0;">-->
                            <!--<input type="button" style="background-color: dodgerblue;color: white;font-weight: bold" value="ENTER" class="customSizeBtn"/>-->
                            <!--</td>-->
                        </tr>
                    </table>
                    <label id="errorSizeCanvas" style="color: red;font-size: 12px;" hidden>this sizes are not available.
                        Please call our showroom on (02) 9659 6696 for more options</label>
                </div>

                <label>Standard size</label>
                <select class="custom-poster-select-removeBorder pcs-select-size" id="canvasStretchingDrpId">
                    <!--                    <option value="">Select Size</option>-->
                    <!--                    <option value="200">250x123mm</option>-->
                    <!--                    <option value="400">500x247mm</option>-->
                    <!--                    <option value="600">750x371mm</option>-->
                    <!--                    <option value="800">1000x495mm</option>-->
                </select>

                <div style="padding-top :1rem">
                    <span class="suuti-topic-style-gray">Special Instructions</span>

                    <textarea
                            class="suuti-text-area"
                            name=""
                            id="canvasStretchingSpecialNote"
                            cols="30"
                            rows="4"
                    ></textarea>
                </div>

                <span class="suuti-topic-style-gray"
                      style="background: #626262;color: white;text-align: center;font-weight: bolder"
                >Your Order</span
                >

                <div style="margin-top:2rem; border: 1px solid black;background-color: white">
                    <table>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Product :</td>
                            <td height="3" style="color: black;border: none;padding-top: 0;padding-bottom: 0;">canvas
                                stretching
                            </td>
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Item :</td>
                            <td height="3" id="itemAll2"
                                style="color: black;border: none;padding-top: 0;padding-bottom: 0;"></td>
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Canvas size :</td>
                            <td height="3" class="fw-td-poster-size"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;"
                                id="canvasSize">default size
                            </td>
                            <td height="3"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;"
                                id="canvasSizePriceId">$18.00 x 1
                            </td>
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Edge type :</td>
                            <td height="3" class="selectEdgeTypeCanvas"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;"
                                id="canvasEdgeTypeId">none
                            </td>
                            <!--                            <td height="3" style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">$15.50 x 1</td>-->
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Timber size :</td>
                            <td height="3" class="selectTimberSizeCanvas"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;"
                                id="canvasTimberSizeId">none
                            </td>
                            <!--                            <td height="3" style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">$15.50 x 1</td>-->
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Canvas stretching :
                            </td>
                            <td height="3"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;"
                                id="canvasPrintPriceSizeId"></td>
                            <td height="3"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;"
                                id="canvasPrintPriceId">$15.50 x 1
                            </td>
                        </tr>
                        <tr class="sandunBoxShadow" style="height: 25px">
                            <td style="color: black;border: none"><b>PRICE :</b></td>
                            <td style="color: black;font-weight: normal;border: none"></td>
                            <td style="color: black;font-weight: bolder;border: none"
                                id="canvasStretchingTotalPriceId"></td>
                        </tr>
                    </table>
                </div>
                <table>
                    <tr>
                        <td style="border :0">
                            <button type="button" class="btn btn-primary" style="width: 100%"
                                    id="canvasStretchingAddCartBtn"><b><span
                                            style="text-align: justify">Add to cart</span><i style="font-size: 20px"
                                                                                             class="fa fa-cart-plus"></i></b>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- poster-framing-section -->


        <!-- poster-acrylic-mount-section -->
        <div
                id="poster-acrylic-mount-section"
                class="col-sm-6 poster-detail sandunBorder"
        >
            <div class="custom-poster">
                <!--<h1 style="padding-left: 0px ; font-size: 1.5rem">-->
                <!--NO: prid-125-->
                <!--</h1>-->
                <!--<h1 style="padding-left: 0px ; font-size: 1.5rem">-->
                <!--Title: prid-125-->
                <!--</h1>-->
                <p>
                    <!--Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto-->
                    <!--fuga, nostrum ducimus, natus iste illo quasi aspernatur-->
                    <!--laudantium, ut-->
                </p>
                <div style="padding-top: 2rem">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Backing color</label>
                            <select
                                    class="custom-poster-select-removeBorder select-backing-color">
                                <option value="none">Select backing color</option>
                                <option value="black">shiny black</option>
                                <option value="red">shiny red</option>
                                <option value="white">clear</option>
                                <option value="whitesmoke">shiny white</option>
                                <option value="#ECEAEB">opal white</option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label>Border</label>
                            <select
                                    class="custom-poster-select-removeBorder select-border-size">
                                <option value="" selected>Select border</option>
                                <option value="0">No border</option>
                                <option value="50">50mm border</option>
                                <option value="70">70mm border</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row" style="margin-top: 12px;">
                        <div class="col-sm-6">
                            <label>Hanging system</label>
                            <select
                                    class="custom-poster-select-removeBorder select-hanging-system">
                                <option value="none">Select</option>
                                <option value="Stainless steel standoffs">Stainless steel standoffs</option>
                                <option value="Matt silver standoffs">Matt silver standoffs</option>
                            </select>
                        </div>
                    </div>
                </div>

                <h1 style="padding-left: 0px ; font-size: 2rem">
                    Step 2: Select size
                </h1>

                <div style="margin-bottom: 25px">
                    <input type="checkbox" name="" class="cBox-custom-size"/>
                    <span style="font-size : 2rem">Enter custom size</span>
                </div>

                <div class="custom-size-div" hidden style="margin-top: -25px;margin-bottom: 25px;">
                    <table style="width: 0%;">
                        <tr style="padding-left: 0px">
                            <td style="border :0">
                                <input type="number" value="50" name="customWidth" id="customWidthIdAcrylic" min="0"/>
                            </td>
                            <td style="border :0">x</td>
                            <td style="border :0">
                                <input type="number" value="50" name="customHeight" id="customHeightIdAcrylic" min="0"/>
                            </td>
                            <td style="border :0">cm</td>
                        </tr>
                    </table>
                    <label id="errorSizeAcrylic" style="color: red;font-size: 12px;" hidden>this sizes are not
                        available. Please call our showroom on (02) 9659 6696 for more options</label>
                </div>

                <label>Standard size</label>
                <select class="custom-poster-select-removeBorder pams-select-size" id="acrylicMountDrpId">
                    <!--                    <option value="">Select Size</option>-->
                    <!--                    <option value="200">250x123mm</option>-->
                    <!--                    <option value="400">500x247mm</option>-->
                    <!--                    <option value="600">750x371mm</option>-->
                    <!--                    <option value="800">1000x495mm</option>-->
                </select>

                <div style="padding-top :1rem">
                    <span class="suuti-topic-style-gray">Special Instructions</span>

                    <textarea
                            class="suuti-text-area"
                            name=""
                            id="acrylicMountSpecialNoteId"
                            cols="30"
                            rows="4"
                    ></textarea>
                </div>

                <span class="suuti-topic-style-gray"
                      style="background: #626262;color: white;text-align: center;font-weight: bolder"
                >Your Order</span
                >

                <div style="margin-top:2rem; border: 1px solid black;background-color: white">
                    <table>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Product :</td>
                            <td height="3" style="color: black;border: none;padding-top: 0;padding-bottom: 0;">acrylic
                                mount
                            </td>
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Item :</td>
                            <td height="3" id="itemAll3"
                                style="color: black;border: none;padding-top: 0;padding-bottom: 0;"></td>
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Size :</td>
                            <td height="3" id="acrylicMountSize" class="fw-td-poster-size"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">
                                default size
                            </td>
                            <td height="3" id="acrylicMountSizePriceId"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">
                                none
                            </td>
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Baking color :</td>
                            <td height="3" id="acrylicMountBakingCollor" class="acrylicBackingColor"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">
                                none
                            </td>
                            <!--                            <td height="3" style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">$15.50 x 1</td>-->
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Hanging system :</td>
                            <td height="3" id="acrylicMountHangingSystem" class="acrylicHangingSystem"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">
                                none
                            </td>
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Border :</td>
                            <td height="3" id="acrylicMountBorder" class="acrylicBorder"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">
                                none
                            </td>
                            <!--                            <td height="3" style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">$15.50 x 1</td>-->
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Acrylic mount :</td>
                            <td height="3"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;"></td>
                            <td height="3"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;"
                                id="AcrylicprintPriceId"></td>
                        </tr>
                        <!--<tr style="border: none">-->
                        <!--<td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Hanging system   :</td>-->
                        <!--<td height="3" class="acrylicHangingSystem" style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">none</td>-->
                        <!--<td height="3" style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">$15.50 x 1</td>-->
                        <!--</tr>-->
                        <tr class="sandunBoxShadow" style="height: 25px">
                            <td style="color: black;border: none"><b>PRICE :</b></td>
                            <td style="color: black;font-weight: normal;border: none"></td>
                            <td style="color: black;font-weight: bolder;border: none" id="acrylicMountTotalPriceId">
                                none
                            </td>
                        </tr>
                    </table>
                </div>
                <table>
                    <tr>
                        <td style="border :0">
                            <button type="button" id="acrylicMountAddCartBtn" class="btn btn-primary"
                                    style="width: 100%"><b><span style="text-align: justify">Add to cart</span><i
                                            style="font-size: 20px" class="fa fa-cart-plus"></i></b></button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- poster-block-mount-section -->
        <div
                id="poster-block-mount-section"
                class="col-sm-6 poster-detail sandunBorder"
        >
            <div class="custom-poster">
                <!--<h1 style="padding-left: 0px ; font-size: 1.5rem">-->
                <!--NO: prid-125-->
                <!--</h1>-->
                <!--<h1 style="padding-left: 0px ; font-size: 1.5rem">-->
                <!--Title: prid-125-->
                <!--</h1>-->
                <p>
                    <!--Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto-->
                    <!--fuga, nostrum ducimus, natus iste illo quasi aspernatur-->
                    <!--laudantium, ut-->
                </p>

                <div style="padding-top: 2rem">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Lamination</label>
                            <select
                                    class="custom-poster-select-removeBorder block-mount-lamination"
                                    id="custom-poster-select-removeBorder"
                            >
                                <option value="none">Select Lamination</option>
                                <option value="matt finished">Matt finished</option>
                                <option value="gloss Finished">Gloss Finished</option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label>Edge type</label>
                            <select
                                    class="custom-poster-select-removeBorder block-mount-edge-type"
                                    id="custom-poster-select-removeBorder"
                            >
                                <option value="none">Select edge type</option>
                                <option value="black edge">Black edge</option>
                                <option value="white edge">White edge</option>
                            </select>
                        </div>
                    </div>
                </div>

                <h1 style="padding-left: 0px ; font-size: 2rem">
                    Step 2: Select size
                </h1>

                <div style="margin-bottom: 25px;">
                    <input type="checkbox" name="" class="cBox-custom-size"/>
                    <span style="font-size : 2rem">Enter custom size</span>
                </div>

                <div class="custom-size-div" hidden style="margin-top: -25px;margin-bottom: 25px;">
                    <table style="width: 0%;">
                        <tr style="padding-left: 0px">
                            <td style="border :0">
                                <input type="number" value="50" name="customWidth" id="customWidthIdBlock" min="0"/>
                            </td>
                            <td style="border :0">x</td>
                            <td style="border :0">
                                <input type="number" value="50" name="customHeight" id="customHeightIdBlock" min="0"/>
                            </td>
                            <td style="border :0">cm</td>
                        </tr>
                    </table>
                    <label id="errorSizeBlock" style="color: red;font-size: 12px;" hidden>this sizes are not available.
                        Please call our showroom on (02) 9659 6696 for more options</label>
                </div>

                <label>Standard size</label>
                <select class="custom-poster-select-removeBorder pbms-select-size" id="blockMountDrpId">
                    <!--                    <option value="">Select Size</option>-->
                    <!--                    <option value="200">250x123mm</option>-->
                    <!--                    <option value="400">500x247mm</option>-->
                    <!--                    <option value="600">750x371mm</option>-->
                    <!--                    <option value="800">1000x495mm</option>-->
                </select>


                <!--<span style="margin-top :1rem" class="suuti-topic-style-gray"-->
                <!--&gt;Your Order</span-->
                <!--&gt;-->

                <!--<div style="padding-top :1rem">-->
                <!--<table>-->
                <!--<tr>-->
                <!--<td>No :</td>-->
                <!--<td>sdfsdf-02</td>-->
                <!--</tr>-->
                <!--<tr>-->
                <!--<td>Title :</td>-->
                <!--<td>sdfsdf-02</td>-->
                <!--</tr>-->
                <!--<tr>-->
                <!--<td>Size :</td>-->
                <!--<td class="pbms-td-poster-size">Please select</td>-->
                <!--</tr>-->
                <!--<tr>-->
                <!--<td>Lamination :</td>-->
                <!--<td>Please select</td>-->
                <!--</tr>-->
                <!--<tr>-->
                <!--<td>Edge type :</td>-->
                <!--<td>Black edge</td>-->
                <!--</tr>-->
                <!--</table>-->
                <!--</div>-->

                <div style="padding-top :1rem">
                    <span class="suuti-topic-style-gray">Special Instructions</span>

                    <textarea
                            class="suuti-text-area"
                            name=""
                            id="blockMountSpecialNoteId"
                            cols="30"
                            rows="4"
                    ></textarea>
                </div>

                <span class="suuti-topic-style-gray"
                      style="background: #626262;color: white;text-align: center;font-weight: bolder"
                >Your Order</span
                >

                <div style="margin-top:2rem; border: 1px solid black;background-color: white">
                    <table>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Product :</td>
                            <td height="3" style="color: black;border: none;padding-top: 0;padding-bottom: 0;">block
                                mount
                            </td>
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Item :</td>
                            <td height="3" id="itemAll4"
                                style="color: black;border: none;padding-top: 0;padding-bottom: 0;"></td>
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Size :</td>
                            <td height="3" id="blockMountSize" class="fw-td-poster-size"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">
                                default size
                            </td>
                            <td height="3" id="blockMountSizePriceId"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">
                                none
                            </td>
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Lamination :</td>
                            <td height="3" id="blockMountLamination" class="blockMountLam"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">
                                none
                            </td>
                            <!--                            <td height="3" style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">$15.50 x 1</td>-->
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Edge type :</td>
                            <td height="3" id="blockMountEdgeType" class="blockMountEd"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">
                                none
                            </td>
                            <!--                            <td height="3" style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;">$15.50 x 1</td>-->
                        </tr>
                        <tr style="border: none;height: 25px">
                            <td height="3" style="border: none;padding-top: 0;padding-bottom: 0;">Block mount :</td>
                            <td height="3"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;"></td>
                            <td height="3"
                                style="color: black;border: none;font-weight: normal;padding-top: 0;padding-bottom: 0;"
                                id="blockMoountPrintPriceId"></td>
                        </tr>
                        <tr class="sandunBoxShadow" style="height: 25px">
                            <td style="color: black;border: none"><b>PRICE :</b></td>
                            <td style="color: black;font-weight: normal;border: none"></td>
                            <td id="blockMountSizeTotalPriceId" style="color: black;font-weight: bolder;border: none">
                                none
                            </td>
                        </tr>
                    </table>
                </div>
                <table>
                    <tr>
                        <td style="border :0">
                            <button type="button" id="blockMountAddCartBtn" class="btn btn-primary" style="width: 100%">
                                <b><span style="text-align: justify">Add to cart</span><i style="font-size: 20px"
                                                                                          class="fa fa-cart-plus"></i></b>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

    <p class="poster-detail-p">
        Our high quality art print service prints your poster with guaranteed
        quality assurance. You can choose from poster framing, canvas print and
        acrylic block mounting to transform your art into a masterpiece.
    </p>
</div>

<div class="container" id="acrylicFooterImageId">
    <div class="row">
        <img src="images/No Border.jpg" style="margin-left: 60px" alt="Trulli" width="159" height="355">
        <img src="images/50mm Border.jpg" alt="Trulli" width="178" height="355">
        <img src="images/70mm Border.jpg" alt="Trulli" width="151" height="355">
        <img src="images/backing_01.jpg" style="vertical-align: baseline;" alt="Trulli" width="159" height="191">
        <img src="images/backing_02.jpg" style="vertical-align: baseline;" alt="Trulli" width="159" height="191">
        <img src="images/stand off.jpg" style="vertical-align: baseline;" alt="Trulli" width="197" height="197">
    </div>
</div>

<div class="container" id="blockMountFooterImageId">
    <div class="row">
        <img src="images/product/block mount edge (1).jpg" style="margin-left: 360px" alt="Trulli" width="409"
             height="307">
    </div>
</div>

<div class="container" id="canvasStretchFooterImageId">
    <div class="row">
        <img src="images/product/Canvas%20edge%20new%20(1).jpg" style="margin-left: 275px" alt="Trulli" width="325"
             height="221">
        <img src="images/product/CanvasThickness-New.jpg" style="margin-left: 60px" alt="Trulli" width="221"
             height="221">
    </div>
</div>

<!-- end section -->

 <?php include('footer.php');?>


<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>


<!-- ALL JS FILES -->

<!-- suuti-script -->
<script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"
></script>

<script>
    const items = [
        "poster-just-print",
        "poster-just-canvas",
        "poster-canvas-stretching",
        "poster-framing",
        "poster-acrylic-mount",
        "poster-block-mount"
    ];
    var selectedVal,
        selectedBackingColor,
        frameModel,
        noMatSize,
        noSelectMatSize,
        matFrameSize,
        matFrameSizeFir = 0,
        matFrameSizeSec = 0,
        matFrameSizeThir = 0,
        matFrameSizeFirTemp = 5,
        matFrameSizeSecTemp = 5,
        matFrameSizeThirTemp = 50,
        checkMat1 = 0,
        checkMat2 = 0,
        checkMat3 = 0,
        drpDwnWid,
        drpDwnHei,
        matColor,
        imageUrl,
        imageCodeUrl,
        selectedWidth, selectedHeight,
        selectedWidth2, selectedHeight2,
        selectedWidth3, selectedHeight3,
        selectedWidth4, selectedHeight4,
        acrylicBorderSize, acrylicBackingColor, acrylicHangingSystem,
        canvasStetTimberSize, canvasStretColor,
        drpWidth1000,
        drpWidth750,
        drpWidth500,
        drpWidth250,
        drpHeaight1000,
        drpHeaight750,
        drpHeaight500,
        drpHeaight250,
        tempWid,
        tempHei,
        frameCodePrice,
        glassType,
        justPrintCostFraming,
        justCanvasCostCanvasStertching,
        justPrintCostAcrylycMount,
        justPrintCostBlockycMount,
        frameBorderSize = 0,
        frameBorderSizeTemp = 0,
        matSelectedTrue = 1,
        count1 = 0,
        count2 = 0,
        count3 = 0,
        canvasStretchingAdd = 0,
        framingAdd = 0,
        acrylicMountAdd = 0,
        blockMountAdd = 0,
        hangingSystemAdd = 0,
        countBackingClr = 0,
        countEdgeTypeClr = 0,
        mat1st = 0,
        mat2nd = 0,
        mat3rd = 0,
        checkCanvas = 1,
        checkFrame = 0,
        checkAcrylic = 0,
        checkBlock = 0,
        borderSiz,
        mColor,
        count = 1,
        customSizeCheckBox = true,
        frameThicknesSize = 0,
        frameSel = false,
        countMat = 0,
        checkNomat = 0;

    $(document).ready(function () {
        // hide all-nav btn
        $("#all-nav").hide();

        //hide poster details sections
        $("#poster-detail").hide();
        $("#poster-just-canvas-section").hide();
        $("#poster-canvas-stretching-section").hide();
        $("#poster-framing-section").hide();
        $("#poster-acrylic-mount-section").hide();
        $("#poster-block-mount-section").hide();
        $(".for-want").hide();
        $("#frames").hide();
        $("#mats-sec").hide();

        $(".cBox-custom-size").click(function (event) {
            if (this.checked) {
                customSizeCheckBox = true;
                document.getElementById("canvasStretchingDrpId").disabled = true;
                document.getElementById("canvasStretchingDrpId").style.cursor = "no-drop";
                document.getElementById("canvasStretchingDrpId").style.backgroundColor = "gray";

                document.getElementById("FramingDrpId").disabled = true;
                document.getElementById("FramingDrpId").style.cursor = "no-drop";
                document.getElementById("FramingDrpId").style.backgroundColor = "gray";

                document.getElementById("acrylicMountDrpId").disabled = true;
                document.getElementById("acrylicMountDrpId").style.cursor = "no-drop";
                document.getElementById("acrylicMountDrpId").style.backgroundColor = "gray";

                document.getElementById("blockMountDrpId").disabled = true;
                document.getElementById("blockMountDrpId").style.cursor = "no-drop";
                document.getElementById("blockMountDrpId").style.backgroundColor = "gray";

                $(".custom-size-div").show();
                $(".pjp-select-size").hide();
            } else {
                customSizeCheckBox = false;
                document.getElementById("canvasStretchingDrpId").disabled = false;
                document.getElementById("canvasStretchingDrpId").style.cursor = "default";
                document.getElementById("canvasStretchingDrpId").style.backgroundColor = "white";

                document.getElementById("FramingDrpId").disabled = false;
                document.getElementById("FramingDrpId").style.cursor = "default";
                document.getElementById("FramingDrpId").style.backgroundColor = "white";

                document.getElementById("acrylicMountDrpId").disabled = false;
                document.getElementById("acrylicMountDrpId").style.cursor = "default";
                document.getElementById("acrylicMountDrpId").style.backgroundColor = "white";

                document.getElementById("blockMountDrpId").disabled = false;
                document.getElementById("blockMountDrpId").style.cursor = "default";
                document.getElementById("blockMountDrpId").style.backgroundColor = "white";

                $(".custom-size-div").hide();
                $(".pjp-select-size").show();
            }
        });

        //The value of the selected option

        $(".pjp-select-size")
            .add(".pjcs-select-size")
            .add(".pcs-select-size")
            .add(".pams-select-size")
            .add(".pbms-select-size")
            .add(".fw-select-size")
            // backing color
            // .add(".select-backing-color")
            // border size
            // .add(".select-border-size")
            .on("change", function (e) {
                switch (e.target.className.split(" ")[1]) {
                    case "pjp-select-size":
                        selectedVal = $(".pjp-select-size").val();
                        break;
                    case "pjcs-select-size":
                        selectedVal = $(".pjcs-select-size").val();
                        break;
                    case "pcs-select-size":
                        selectedVal = $(".pcs-select-size").val();
                        break;
                    case "pams-select-size":
                        selectedVal = $(".pams-select-size").val();
                        break;
                    case "pbms-select-size":
                        selectedVal = $(".pbms-select-size").val();
                        break;
                    case "fw-select-size":
                        selectedVal = $(".fw-select-size").val();
                        break;
                    // case "select-backing-color":
                    //     selectedVal = $(".select-backing-color").val();
                    //     break;
                    // case "select-border-size":
                    //     selectedVal = $(".select-border-size").val();
                    //     break;
                    default:
                    //
                }
                var res = selectedVal.split("x");

                tempWid = Number(res[0] / 10);
                tempHei = Number(res[1] / 10);

                if(checkCanvas == 1){
                    document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + res[0] + 'x' + res[1] + 'mm';
                }
                if(checkFrame == 1){
                    document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + res[0] + 'x' + res[1] + 'mm';
                }
                if(checkAcrylic == 1){
                    console.log('working');
                    document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(res[0]) + (Number(acrylicBorderSize) * 2)) + 'x' + (Number(res[1]) + (Number(acrylicBorderSize) * 2)) + 'mm';
                    $('#finalSizeImageId').css({'marginTop': acrylicBorderSize / 2 + 'px'});
                }
                if(checkBlock == 1){
                    console.log('working not');
                    document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + res[0] + 'x' + res[1] + 'mm';
                }

                // if (frameBorderSize == 0) {
                //
                // } else {
                //
                // }

                framingMatPriceCalculation();

                if ($("#framesMatSizePriceId1").text() != '') {
                    $("#framesMatSizePriceId1").html('( $' + framingMatPriceCalculation() + ' )');
                }

                if ($("#framesMatSizePriceId2").text() != '') {
                    $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
                }

                if ($("#framesMatSizePriceId3").text() != '') {
                    $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
                }

                framingMatPriceCalculationComplete();

                justPrintCostFraming = justPrintCal((res[0] / 10), (res[1] / 10));
                $("#framingSizePriceId").html('$' + justPrintCostFraming.toFixed(2));

                justCanvasCostCanvasStertching = justCanvasCal((res[0] / 10), (res[1] / 10));
                $("#canvasSizePriceId").html('$' + justCanvasCostCanvasStertching.toFixed(2));
                canvasStretchingPriceCalculation(Number(res[0] / 10), Number(res[1] / 10));

                justPrintCostAcrylycMount = justPrintCal((res[0] / 10), (res[1] / 10));
                $("#acrylicMountSizePriceId").html('$' + justPrintCostAcrylycMount.toFixed(2));
                acrylicMountPriceCalculation(Number(res[0] / 10), Number(res[1] / 10));

                justPrintCostBlockycMount = justPrintCal((res[0] / 10), (res[1] / 10));
                $("#blockMountSizePriceId").html('$' + justPrintCostBlockycMount.toFixed(2));
                blockMountPriceCalculation(Number(res[0] / 10), Number(res[1] / 10));

                glassPriceCal(glassType, (res[0] / 10), (res[1] / 10));

                $(".p-content").css("width", drpWidth1000 / 10 + "%");
                $(".p-content").css("height", drpHeaight1000 / 10 + "%");

                // var borderWidth = 94*1000 / ((Number(res[0])/10) * frameThicknesSize);
                var borderWidth = ((frameThicknesSize * 200 / 10) / (Number(res[0])/10)) * 2;
                
            
                if (Number(res[0]) > Number(res[1])) {
                    if (res[0] == 1000) {
                        // borderWidth = 20;
                        $(".p-content").css({"border-width": borderWidth + 'px'});

                        // $("#framesPriceId").html('$'+frameCal(frameCodePrice,Number(res[0]),Number(res[1])));
                    }
                    if (res[0] == 750) {
                        // borderWidth = 35;
                        $(".p-content").css({"border-width": borderWidth + 'px'});

                        // $("#framesPriceId").html('$'+frameCal(frameCodePrice,Number(res[0]),Number(res[1])));
                    }
                    if (res[0] == 500) {
                        // borderWidth = 55;
                        $(".p-content").css({"border-width": borderWidth + 'px'});

                        // $("#framesPriceId").html('$'+frameCal(frameCodePrice,Number(res[0]),Number(res[1])));
                    }
                    if (res[0] == 250) {
                        // borderWidth = 25;
                        // $(".p-content").css("width", Number(res[0]) / 10 + "%");
                        // $(".p-content").css("height", Number(res[1]) / 10 + "%");
                        $(".p-content").css({"border-width": borderWidth + 'px'});

                        // $("#framesPriceId").html('$'+frameCal(frameCodePrice,Number(res[0]),Number(res[1])));
                    }

                    $("#finalSizeImageId").css({'margin-top': borderWidth + 'px'});
                }

                if (Number(res[0]) < Number(res[1])) {
                    if (res[1] == 1000) {
                        // borderWidth = 20;
                        $(".p-content").css({"border-width": borderWidth + 'px'});

                        // $("#framesPriceId").html('$'+frameCal(frameCodePrice,Number(res[0]),Number(res[1])));
                    }
                    if (res[1] == 750) {
                        // borderWidth = 35;
                        $(".p-content").css({"border-width": borderWidth + 'px'});

                        // $("#framesPriceId").html('$'+frameCal(frameCodePrice,Number(res[0]),Number(res[1])));
                    }
                    if (res[1] == 500) {
                        // borderWidth = 55;
                        $(".p-content").css({"border-width": borderWidth + 'px'});

                        // $("#framesPriceId").html('$'+frameCal(frameCodePrice,Number(res[0]),Number(res[1])));
                    }
                    if (res[1] == 250) {
                        // borderWidth = 25;
                        // $(".p-content").css("width", Number(res[0]) / 10 + "%");
                        // $(".p-content").css("height", Number(res[1]) / 10 + "%");
                        $(".p-content").css({"border-width": borderWidth + 'px'});

                        // $("#framesPriceId").html('$'+((Number(frameCodePrice) * 1)).toFixed(2));
                    }

                    $("#finalSizeImageId").css({'margin-top': borderWidth + 'px'});
                }

                if (Number(res[0]) == Number(res[1])) {
                    if (res[0] == 1000) {
                        // borderWidth = 20;
                        $(".p-content").css({"border-width": borderWidth + 'px'});

                        // $("#framesPriceId").html('$'+((Number(frameCodePrice) * 4)).toFixed(2));
                    }
                    if (res[0] == 750) {
                        // borderWidth = 35;
                        $(".p-content").css({"border-width": borderWidth + 'px'});

                        // $("#framesPriceId").html('$'+((Number(frameCodePrice) * 3)).toFixed(2));
                    }
                    if (res[0] == 500) {
                        // borderWidth = 55;
                        $(".p-content").css({"border-width": borderWidth + 'px'});

                        // $("#framesPriceId").html('$'+((Number(frameCodePrice) * 2)).toFixed(2));
                    }
                    if (res[0] == 250) {
                        // borderWidth = 25;
                        // $(".p-content").css("width", Number(res[0]) / 10 + "%");
                        // $(".p-content").css("height", Number(res[1]) / 10 + "%");
                        $(".p-content").css({"border-width": borderWidth + 'px'});

                        // $("#framesPriceId").html('$'+((Number(frameCodePrice) * 1)).toFixed(2));
                    }

                    $("#finalSizeImageId").css({'margin-top': borderWidth + 'px'});
                }
                
                if(frameSel){
                    var mFSize = matFrameSizeFir + matFrameSizeSec + matFrameSizeThir;
                    document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(res[0]) + Number(frameThicknesSize) * 2 + mFSize * 2) + 'x' + (Number(res[1]) + Number(frameThicknesSize) * 2 + mFSize * 2) + 'mm';
                }else{
                    
                    if(Number(res[0]) < 501 || Number(res[1]) < 501){
                        $(".p-content").css("width", Number(res[0])*2 / 10 + "%");
                        $(".p-content").css("height", Number(res[1])*2 / 10 + "%");   
                    }else{
                        $(".p-content").css("width", Number(res[0]) / 10 + "%");
                        $(".p-content").css("height", Number(res[1]) / 10 + "%");
                    }
                }

                $("#framesPriceId").html('$' + frameCal(frameCodePrice, Number(res[0] / 10), Number(res[1] / 10)));

                $(".pjp-td-poster-size, .pjcs-td-poster-size, .pcs-td-poster-size, .pams-td-poster-size, .pbms-td-poster-size, .fw-td-poster-size").html(selectedVal + "mm");


                if (selectedVal == "black") {
                    selectedBackingColor = "black";
                }
                if (selectedVal == "red") {
                    selectedBackingColor = "red";
                }
                if (selectedVal == "blue") {
                    selectedBackingColor = "blue";
                }
                if (selectedVal == "50") {
                    $(".p-content").css({
                        "border-color": selectedBackingColor,
                        "border-width": "1rem",
                        "border-style": "solid"
                    });
                    $("#td-border-size").html(selectedVal + "'mm border");
                    $("#td-border-color").html(selectedBackingColor);

                }
                if (selectedVal == "70") {
                    $(".p-content").css({
                        "border-color": selectedBackingColor,
                        "border-width": "2rem",
                        "border-style": "solid"
                    });
                    $("#td-border-size").html(selectedVal + "mm border");
                    $("#td-border-color").html(selectedBackingColor);

                }
                if (selectedVal == "no-border") {
                    $(".p-content").css("border", "none");
                    $("#td-border-size").html("none");
                    $("#td-border-color").html("none");
                }

                framingPriceCalculation();

            });

        // click and scroll
        $("#poster-canvas-stretching").click(function () {
            
            matFrameSizeFir = 0;
            matFrameSizeSec = 0;
            matFrameSizeThir = 0;
            
            frameSel = false;
        
            <!--$("#borderimg1").css({'background': 'none'});-->
            $("#borderimg1").css({'padding': 'unset'});
            
            canvasStretchingAdd = 0;
            framingAdd = 0;
            acrylicMountAdd = 0;
            blockMountAdd = 0;
            countBackingClr = 0;

            checkCanvas = 1;
            checkFrame = 0;
            checkAcrylic = 0;
            checkBlock = 0;

            $("#acrylicFooterImageId").css({'display': 'none'});
            $("#blockMountFooterImageId").css({'display': 'none'});
            $("#canvasStretchFooterImageId").css({'display': 'block'});

            $(".p-content").css({
                'width': (drpWidth1000 / 10) + '%',
                'height': (drpHeaight1000 / 10) + '%',
                '-webkit-border-image': 'none'
            });

            document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + drpWidth1000 + 'x' + drpHeaight1000 + 'mm';
            frameBorderSize = 0;
            frameThicknesSize = 0;

            justCanvasCostCanvasStertching = justCanvasCal((drpWidth1000 / 10), (drpHeaight1000 / 10));
            $("#canvasSizePriceId").html('$' + justCanvasCostCanvasStertching.toFixed(2));
            $("#canvasSize").html(drpWidth1000 + 'x' + drpHeaight1000 + 'mm');
            canvasStretchingPriceCalculation(Number(drpWidth1000 / 10), Number(drpHeaight1000 / 10));

            document.getElementById('canvasStretchingDrpId').selectedIndex = 0;
            document.getElementById('acrylicMountDrpId').selectedIndex = 0;
            document.getElementById('FramingDrpId').selectedIndex = 0;
            document.getElementById('blockMountDrpId').selectedIndex = 0;

            document.getElementById("canvasStretchingDrpId").disabled = false;
            document.getElementById("canvasStretchingDrpId").style.cursor = "default";
            document.getElementById("canvasStretchingDrpId").style.backgroundColor = "white";

            document.getElementById("FramingDrpId").disabled = false;
            document.getElementById("FramingDrpId").style.cursor = "default";
            document.getElementById("FramingDrpId").style.backgroundColor = "white";

            document.getElementById("acrylicMountDrpId").disabled = false;
            document.getElementById("acrylicMountDrpId").style.cursor = "default";
            document.getElementById("acrylicMountDrpId").style.backgroundColor = "white";

            document.getElementById("blockMountDrpId").disabled = false;
            document.getElementById("blockMountDrpId").style.cursor = "default";
            document.getElementById("blockMountDrpId").style.backgroundColor = "white";


            $("#borderimg1").css({'border': 'none'});
            $("#secondBorderDivId").css({'border': 'none'});
            $("#thirdBorderDivId").css({'border': 'none'});

            $('html,body').animate({
                    scrollTop: $(".sticky").offset().top
                },
                'slow');
        });

        $("#poster-framing").click(function () {
            
            matFrameSizeFir = 0;
            matFrameSizeSec = 0;
            matFrameSizeThir = 0;
            
            countMat = 0;
            
            frameSel = true;
        
            <!--$("#borderimg1").css({'background': 'none'});-->
            $("#borderimg1").css({'padding': 'unset'});

            canvasStretchingAdd = 0;
            framingAdd = 0;
            acrylicMountAdd = 0;
            blockMountAdd = 0;
            countBackingClr = 0;

            checkCanvas = 0;
            checkFrame = 1;
            checkAcrylic = 0;
            checkBlock = 0;

            $("#acrylicFooterImageId").css({'display': 'none'});
            $("#blockMountFooterImageId").css({'display': 'none'});
            $("#canvasStretchFooterImageId").css({'display': 'none'});

            $(".p-content").css({'width': (drpWidth1000 / 10) + '%', 'height': (drpHeaight1000 / 10) + '%'});

            document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + drpWidth1000 + 'x' + drpHeaight1000 + 'mm';
            frameBorderSize = 0;
            frameThicknesSize = 0;

            document.getElementById('canvasStretchingDrpId').selectedIndex = 0;
            document.getElementById('acrylicMountDrpId').selectedIndex = 0;
            document.getElementById('FramingDrpId').selectedIndex = 0;
            document.getElementById('blockMountDrpId').selectedIndex = 0;

            document.getElementById("canvasStretchingDrpId").disabled = false;
            document.getElementById("canvasStretchingDrpId").style.cursor = "default";
            document.getElementById("canvasStretchingDrpId").style.backgroundColor = "white";

            document.getElementById("FramingDrpId").disabled = false;
            document.getElementById("FramingDrpId").style.cursor = "default";
            document.getElementById("FramingDrpId").style.backgroundColor = "white";

            document.getElementById("acrylicMountDrpId").disabled = false;
            document.getElementById("acrylicMountDrpId").style.cursor = "default";
            document.getElementById("acrylicMountDrpId").style.backgroundColor = "white";

            document.getElementById("blockMountDrpId").disabled = false;
            document.getElementById("blockMountDrpId").style.cursor = "default";
            document.getElementById("blockMountDrpId").style.backgroundColor = "white";

            justPrintCostFraming = justPrintCal((drpWidth1000 / 10), (drpHeaight1000 / 10));
            $("#framingSizePriceId").html('$' + justPrintCostFraming.toFixed(2));
            $("#framingSize").html(drpWidth1000 + 'x' + drpHeaight1000 + 'mm');
            $("#fw-td-poster-size-id").html(drpWidth1000 + 'x' + drpHeaight1000 + 'mm');


            $("#borderimg1").css({'border': 'none'});
            $("#secondBorderDivId").css({'border': 'none'});
            $("#thirdBorderDivId").css({'border': 'none'});
            $('html,body').animate({
                    scrollTop: $(".sticky").offset().top
                },
                'slow');

            framingPriceCalculation();
        });

        $("#poster-acrylic-mount").click(function () {
            
            matFrameSizeFir = 0;
            matFrameSizeSec = 0;
            matFrameSizeThir = 0;
            
            hangingSystemAdd = 0;
            
            frameSel = false;
        
            <!--$("#borderimg1").css({'background': 'none'});-->
            $("#borderimg1").css({'padding': 'unset'});

            canvasStretchingAdd = 0;
            framingAdd = 0;
            acrylicMountAdd = 0;
            blockMountAdd = 0;
            countBackingClr = 0;

            checkCanvas = 0;
            checkFrame = 0;
            checkAcrylic = 1;
            checkBlock = 0;

            $("#acrylicFooterImageId").css({'display': 'block'});
            $("#blockMountFooterImageId").css({'display': 'none'});
            $("#canvasStretchFooterImageId").css({'display': 'none'});

            $('.select-backing-color').val('none');
            // $('.select-border-size').val(0);
            $('.acrylicBackingColor').html('none');
            $('.acrylicBorder').html(0 + ' mm');
            

            $(".p-content").css({
                'width': (drpWidth1000 / 10) + '%',
                'height': (drpHeaight1000 / 10) + '%',
                '-webkit-border-image': 'none'
            });

            document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + drpWidth1000 + 'x' + drpHeaight1000 + 'mm';

            frameBorderSize = 0;
            acrylicBorderSize = 0;
            frameThicknesSize = 0;

            document.getElementById('canvasStretchingDrpId').selectedIndex = 0;
            document.getElementById('acrylicMountDrpId').selectedIndex = 0;
            document.getElementById('FramingDrpId').selectedIndex = 0;
            document.getElementById('blockMountDrpId').selectedIndex = 0;

            document.getElementById("canvasStretchingDrpId").disabled = false;
            document.getElementById("canvasStretchingDrpId").style.cursor = "default";
            document.getElementById("canvasStretchingDrpId").style.backgroundColor = "white";

            document.getElementById("FramingDrpId").disabled = false;
            document.getElementById("FramingDrpId").style.cursor = "default";
            document.getElementById("FramingDrpId").style.backgroundColor = "white";

            document.getElementById("acrylicMountDrpId").disabled = false;
            document.getElementById("acrylicMountDrpId").style.cursor = "default";
            document.getElementById("acrylicMountDrpId").style.backgroundColor = "white";

            document.getElementById("blockMountDrpId").disabled = false;
            document.getElementById("blockMountDrpId").style.cursor = "default";
            document.getElementById("blockMountDrpId").style.backgroundColor = "white";

            justPrintCostAcrylycMount = justPrintCal((drpWidth1000 / 10), (drpHeaight1000 / 10));
            $("#acrylicMountSizePriceId").html('$' + justPrintCostAcrylycMount.toFixed(2));
            $("#acrylicMountSize").html(drpWidth1000 + 'x' + drpHeaight1000 + 'mm');
            acrylicMountPriceCalculation(Number(drpWidth1000 / 10), Number(drpHeaight1000 / 10));


            $("#borderimg1").css({'border': 'none'});
            $("#secondBorderDivId").css({'border': 'none'});
            $("#thirdBorderDivId").css({'border': 'none'});
            $('html,body').animate({
                    scrollTop: $(".sticky").offset().top
                },
                'slow');
        });

        $("#poster-block-mount").click(function () {
            
            matFrameSizeFir = 0;
            matFrameSizeSec = 0;
            matFrameSizeThir = 0;
            
            frameSel = false;
        
            <!--$("#borderimg1").css({'background': 'none'});-->
            $("#borderimg1").css({'padding': 'unset'});

            canvasStretchingAdd = 0;
            framingAdd = 0;
            acrylicMountAdd = 0;
            blockMountAdd = 0;
            countBackingClr = 0;

            checkCanvas = 0;
            checkFrame = 0;
            checkAcrylic = 0;
            checkBlock = 1;

            $("#acrylicFooterImageId").css({'display': 'none'});
            $("#canvasStretchFooterImageId").css({'display': 'none'});
            $("#blockMountFooterImageId").css({'display': 'block'});

            $('.block-mount-lamination').val('none');
            $('.block-mount-edge-type').val('none');
            $('.blockMountLam').html('none');
            $('.blockMountEd').html('none');

            $(".p-content").css({
                'width': (drpWidth1000 / 10) + '%',
                'height': (drpHeaight1000 / 10) + '%',
                '-webkit-border-image': 'none'
            });

            document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + drpWidth1000 + 'x' + drpHeaight1000 + 'mm';
            frameBorderSize = 0;
            frameThicknesSize = 0;

            document.getElementById('canvasStretchingDrpId').selectedIndex = 0;
            document.getElementById('acrylicMountDrpId').selectedIndex = 0;
            document.getElementById('FramingDrpId').selectedIndex = 0;
            document.getElementById('blockMountDrpId').selectedIndex = 0;

            document.getElementById("canvasStretchingDrpId").disabled = false;
            document.getElementById("canvasStretchingDrpId").style.cursor = "default";
            document.getElementById("canvasStretchingDrpId").style.backgroundColor = "white";

            document.getElementById("FramingDrpId").disabled = false;
            document.getElementById("FramingDrpId").style.cursor = "default";
            document.getElementById("FramingDrpId").style.backgroundColor = "white";

            document.getElementById("acrylicMountDrpId").disabled = false;
            document.getElementById("acrylicMountDrpId").style.cursor = "default";
            document.getElementById("acrylicMountDrpId").style.backgroundColor = "white";

            document.getElementById("blockMountDrpId").disabled = false;
            document.getElementById("blockMountDrpId").style.cursor = "default";
            document.getElementById("blockMountDrpId").style.backgroundColor = "white";

            justPrintCostBlockycMount = justPrintCal((drpWidth1000 / 10), (drpHeaight1000 / 10));
            $("#blockMountSizePriceId").html('$' + justPrintCostBlockycMount.toFixed(2));
            $("#blockMountSize").html(drpWidth1000 + 'x' + drpHeaight1000 + 'mm');
            blockMountPriceCalculation(Number(drpWidth1000 / 10), Number(drpHeaight1000 / 10));


            $("#borderimg1").css({'border': 'none'});
            $("#secondBorderDivId").css({'border': 'none'});
            $("#thirdBorderDivId").css({'border': 'none'});
            $('html,body').animate({
                    scrollTop: $(".sticky").offset().top
                },
                'slow');
        });


        //handle selected size key event
        //   framing section
        $("#customWidthId1").keyup(function () {
            selectedWidth = $('#customWidthId1').val();
            var x = $('#FramingDrpId').prop("selectedIndex", 0).val().split("x");
            selectedHeight = (Number(selectedWidth) / Number(x[0]) * Number(x[1])).toFixed(0);
            $('#customHeightId1').val(selectedHeight);
            changeSize();
        });
        $('#customHeightId1').keyup(function () {
            selectedHeight = $('#customHeightId1').val();
            changeSize();
        });

        $('#customWidthId1').change('input', function () {
            selectedWidth = $('#customWidthId1').val();
            var x = $('#FramingDrpId').prop("selectedIndex", 0).val().split("x");
            selectedHeight = (Number(selectedWidth) / Number(x[0]) * Number(x[1])).toFixed(0);
            $('#customHeightId1').val(selectedHeight);
            changeSize();
        });
        $('#customHeightId1').change('input', function () {
            selectedHeight = $('#customHeightId1').val();
            changeSize();
        });

        function changeSize() {

            if (selectedWidth == undefined) {
                selectedWidth = 50;
            }
            if (selectedHeight == undefined) {
                selectedHeight = 50;
            }
            
            
            if(customSizeCheckBox == false){
                if (selectedWidth == (drpWidth1000 / 10)) {
                    selectedWidth = 50;
                }
                if (selectedHeight == (drpHeaight1000 / 10)) {
                    selectedHeight = 50;
                }   
            }

            tempWid = Number(selectedWidth);
            tempHei = Number(selectedHeight);

            framingMatPriceCalculation();

            if ($("#framesMatSizePriceId1").text() != '') {
                $("#framesMatSizePriceId1").html('( $' + framingMatPriceCalculation() + ' )');
            }

            if ($("#framesMatSizePriceId2").text() != '') {
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
            }

            if ($("#framesMatSizePriceId3").text() != '') {
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
            }

            framingMatPriceCalculationComplete();

            $(".fw-td-poster-size").html(selectedWidth + " cm " + " x " + selectedHeight + " cm ");

            if (selectedWidth !== "" || selectedHeight !== "") {

                if (selectedWidth > drpWidth1000 / 10 || selectedHeight > drpHeaight1000 / 10) {
                    $('#errorSize').show();
                } else {
                    $('#errorSize').hide();
                }

                if (selectedWidth == selectedHeight) {
                    wid = 100;
                    hei = 100;
                } else {
                    if (selectedWidth < 101 && selectedHeight < 101) {
                        if (selectedWidth <= 50 && selectedHeight <= 50) {
                            if (selectedWidth <= 10) {
                                wid = selectedWidth * 4;
                            } else {
                                wid = selectedWidth * 2;
                            }
                            hei = selectedHeight * 2;
                        } else {
                            if (selectedWidth <= 75 && selectedHeight <= 75) {
                                wid = selectedWidth * 1.5;
                                hei = selectedHeight * 1.5;
                            } else {
                                wid = selectedWidth;
                                hei = selectedHeight;
                            }
                        }

                    } else {
                        if (Number(selectedHeight) > Number(selectedWidth)) {
                            hei = 100;
                            wid = selectedWidth / (selectedHeight / 100);
                        } else {
                            if (Number(selectedHeight) < Number(selectedWidth)) {
                                hei = selectedHeight / (selectedWidth / 100);
                                wid = 100;
                            } else {
                                wid = selectedWidth;
                                hei = selectedHeight;
                            }
                        }
                    }
                }
                var fVal = frameCal(Number(frameCodePrice), Number(selectedWidth), Number(selectedHeight));
                $("#framesPriceId").html('$' + fVal);


                justPrintCostFraming = justPrintCal(Number(selectedWidth), Number(selectedHeight));
                $("#framingSizePriceId").html('$' + justPrintCostFraming.toFixed(2));

                // $(".p-content").css("width", wid + "%");
                // $(".p-content").css("height", hei + "%");
                $(".pjp-td-poster-size, .pjcs-td-poster-size").html(selectedVal + "mm");

                glassPriceCal(glassType, Number(selectedWidth), Number(selectedHeight));
                
                var calculationx = ((frameThicknesSize * 200 / 10) / (Number(selectedWidth))) * 2;
                
                if (selectedWidth >= 100 || selectedHeight >= 100) {
                    if (selectedWidth >= 201 || selectedHeight >= 201) {
                        // var calculationx = 20 - (selectedWidth/50);
                        $(".p-content").css({'border': calculationx+'px solid transparent'});
                        $("#finalSizeImageId").css({'margin-top': calculationx+'px'});
                    } else {
                        $(".p-content").css({'border': calculationx+'px solid transparent'});
                        $("#finalSizeImageId").css({'margin-top': calculationx+'px'});
                    }

                } else {
                    if (selectedWidth < 50) {
                        $(".p-content").css({'border': calculationx+'px solid transparent'});
                        $("#finalSizeImageId").css({'margin-top': calculationx+'px'});
                    } else {
                        $(".p-content").css({'border': calculationx+'px solid transparent'});
                        $("#finalSizeImageId").css({'margin-top': calculationx+'px '});
                    }
                }
            }
            
            
            if(Number(drpWidth250) !== 250){
                if(Number(selectedWidth) <= Number(drpWidth250)/10){
                    $('#errorSize').show();
                    // $('#customWidthId1').val((Number(drpWidth250)/10).toFixed(0));
                    // $('#customHeightId1').val((Number(drpHeaight250)/10).toFixed(0));
                }else{
                    if(Number(selectedWidth) >= 100 || Number(selectedHeight) >= 100 ){
                        $('#errorSize').show();   
                        // $('#customWidthId1').val((Number(drpWidth1000)/10).toFixed(0));
                        // $('#customHeightId1').val((Number(drpHeaight1000)/10).toFixed(0));
                    }else{
                        $('#errorSize').hide();
                    }
                }   
            }
            
            
            if(Number(drpHeaight250) !== 250){
                if(Number(selectedHeight) <= Number(drpHeaight250)/10){
                    $('#errorSize').show();
                    // $('#customWidthId1').val((Number(drpWidth250)/10).toFixed(0));
                    // $('#customHeightId1').val((Number(drpHeaight250)/10).toFixed(0));
                }else{
                    if(Number(selectedHeight) >= 100 || Number(selectedWidth) >= 100 ){
                        $('#errorSize').show();   
                        // $('#customWidthId1').val((Number(drpWidth1000)/10).toFixed(0));
                        // $('#customHeightId1').val((Number(drpHeaight1000)/10).toFixed(0));
                    }else{
                        $('#errorSize').hide();
                    }
                }    
            }
            
            if(Number(drpHeaight250) === Number(drpWidth250)){
                if(Number(selectedHeight) <= Number(drpHeaight250)/10){
                    $('#errorSize').show();
                    // $('#customWidthId1').val((Number(drpWidth250)/10).toFixed(0));
                    // $('#customHeightId1').val((Number(drpHeaight250)/10).toFixed(0));
                }else{
                    if(Number(selectedHeight) >= 100 || Number(selectedWidth) >= 100 ){
                        $('#errorSize').show();
                        // $('#customWidthId1').val((Number(drpWidth1000)/10).toFixed(0));
                        // $('#customHeightId1').val((Number(drpHeaight1000)/10).toFixed(0));
                    }else{
                        $('#errorSize').hide();
                    }
                }    
            }
            
            
            // matFrameSizeFir = 0;
            // matFrameSizeSec = 0;
            // matFrameSizeThir = 0;
            
            var mFSize = Number(matFrameSizeFir) + Number(matFrameSizeSec) + Number(matFrameSizeThir);
        
            document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(selectedWidth) * 10 + Number(frameThicknesSize) * 2 + mFSize * 2) + 'x' + (Number(selectedHeight) * 10 + Number(frameThicknesSize) * 2  + mFSize * 2) + 'mm';
            
            framingPriceCalculation();
        };

        // handle canves stretching section size
        // canvas stretching
        $("#customWidthIdCanvas").keyup(function () {
            selectedWidth2 = $('#customWidthIdCanvas').val();
            var x = $('#canvasStretchingDrpId').prop("selectedIndex", 0).val().split("x");
            selectedHeight2 = (Number(selectedWidth2) / Number(x[0]) * Number(x[1])).toFixed(0);
            $('#customHeightIdCanvas').val(selectedHeight2);
            changeSizeCanvasStretching();
        });
        $('#customHeightIdCanvas').keyup(function () {
            selectedHeight2 = $('#customHeightIdCanvas').val();
            changeSizeCanvasStretching();
        });

        $('#customWidthIdCanvas').change('input', function () {
            selectedWidth2 = $('#customWidthIdCanvas').val();
            var x = $('#canvasStretchingDrpId').prop("selectedIndex", 0).val().split("x");
            selectedHeight2 = (Number(selectedWidth2) / Number(x[0]) * Number(x[1])).toFixed(0);
            $('#customHeightIdCanvas').val(selectedHeight2);
            changeSizeCanvasStretching();
        });

        $('#customHeightIdCanvas').change('input', function () {
            selectedHeight2 = $('#customHeightIdCanvas').val();
            changeSizeCanvasStretching();
        });

        function changeSizeCanvasStretching() {

            if (selectedWidth2 == undefined) {
                selectedWidth2 = 50;
            }
            if (selectedHeight2 == undefined) {
                selectedHeight2 = 50;
            }

            $(".fw-td-poster-size").html(selectedWidth2 + " cm " + " x " + selectedHeight2 + " cm ");
            if (selectedWidth2 !== "" || selectedHeight2 !== "") {

                if (selectedWidth2 > drpWidth1000 / 10 || selectedHeight2 > drpHeaight1000 / 10) {
                    $('#errorSizeCanvas').show();
                } else {
                    $('#errorSizeCanvas').hide();
                }

                if (selectedWidth2 == selectedHeight2) {
                    wid = 100;
                    hei = 100;
                } else {
                    if (selectedWidth2 < 101 && selectedHeight2 < 101) {
                        if (selectedWidth2 <= 50 && selectedHeight2 <= 50) {
                            if (selectedWidth2 <= 10) {
                                wid = selectedWidth2 * 4;
                            } else {
                                wid = selectedWidth2 * 2;
                            }
                            hei = selectedHeight2 * 2;
                        } else {
                            if (selectedWidth2 <= 75 && selectedHeight2 <= 75) {
                                wid = selectedWidth2 * 1.5;
                                hei = selectedHeight2 * 1.5;
                            } else {
                                wid = selectedWidth2;
                                hei = selectedHeight2;
                            }
                        }

                    } else {
                        if (Number(selectedHeight2) > Number(selectedWidth2)) {
                            hei = 100;
                            wid = selectedWidth2 / (selectedHeight2 / 100);
                        } else {
                            if (Number(selectedHeight2) < Number(selectedWidth2)) {
                                hei = selectedHeight2 / (selectedWidth2 / 100);
                                wid = 100;
                            } else {
                                wid = selectedWidth2;
                                hei = selectedHeight2;
                            }
                        }
                    }
                }

            if(Number(drpWidth250) !== 250){
                if(Number(selectedWidth2) <= Number(drpWidth250)/10){
                    $('#errorSizeCanvas').show();
                    // $('#customWidthIdCanvas').val((Number(drpWidth250)/10).toFixed(0));
                    // $('#customHeightIdCanvas').val((Number(drpHeaight250)/10).toFixed(0));
                }else{
                    if(Number(selectedWidth2) >= 100 || Number(selectedHeight2) >= 100 ){
                        $('#errorSizeCanvas').show();   
                        // $('#customWidthIdCanvas').val((Number(drpWidth1000)/10).toFixed(0));
                        // $('#customHeightIdCanvas').val((Number(drpHeaight1000)/10).toFixed(0));
                    }else{
                        $('#errorSizeCanvas').hide();
                    }
                }   
            }
            
            
            if(Number(drpHeaight250) !== 250){
                if(Number(selectedHeight2) <= Number(drpHeaight250)/10){
                    $('#errorSizeCanvas').show();
                    // $('#customWidthIdCanvas').val((Number(drpWidth250)/10).toFixed(0));
                    // $('#customHeightIdCanvas').val((Number(drpHeaight250)/10).toFixed(0));
                }else{
                    if(Number(selectedHeight2) >= 100 || Number(selectedWidth2) >= 100 ){
                        $('#errorSizeCanvas').show();   
                        // $('#customWidthIdCanvas').val((Number(drpWidth1000)/10).toFixed(0));
                        // $('#customHeightIdCanvas').val((Number(drpHeaight1000)/10).toFixed(0));
                    }else{
                        $('#errorSizeCanvas').hide();
                    }
                }    
            }
            
            if(Number(drpHeaight250) === Number(drpWidth250)){
                if(Number(selectedHeight2) <= Number(drpHeaight250)/10){
                    $('#errorSizeCanvas').show();
                    // $('#customWidthIdCanvas').val((Number(drpWidth250)/10).toFixed(0));
                    // $('#customHeightIdCanvas').val((Number(drpHeaight250)/10).toFixed(0));
                }else{
                    if(Number(selectedHeight2) >= 100 || Number(selectedWidth2) >= 100 ){
                        $('#errorSizeCanvas').show();
                        // $('#customWidthIdCanvas').val((Number(drpWidth1000)/10).toFixed(0));
                        // $('#customHeightIdCanvas').val((Number(drpHeaight1000)/10).toFixed(0));
                    }else{
                        $('#errorSizeCanvas').hide();
                    }
                }    
            }

                justCanvasCostCanvasStertching = justCanvasCal(Number(selectedWidth2), Number(selectedHeight2));
                $("#canvasSizePriceId").html('$' + justCanvasCostCanvasStertching.toFixed(2));
                canvasStretchingPriceCalculation(Number(selectedWidth2), Number(selectedHeight2));

                $(".p-content").css("width", wid + "%");
                $(".p-content").css("height", hei + "%");
                $(".pjp-td-poster-size, .pjcs-td-poster-size").html(selectedVal + "mm");
            }

            document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + Number(selectedWidth2) * 10 + 'x' + Number(selectedHeight2) * 10 + 'mm';
        };


        // handle Acrylic Mount section size
        $("#customWidthIdAcrylic").keyup(function () {
            selectedWidth3 = $('#customWidthIdAcrylic').val();
            var x = $('#acrylicMountDrpId').prop("selectedIndex", 0).val().split("x");
            selectedHeight3 = (Number(selectedWidth3) / Number(x[0]) * Number(x[1])).toFixed(0);
            $('#customHeightIdAcrylic').val(selectedHeight3);
            changeSizeAcrylicMount();
        });
        $('#customHeightIdAcrylic').keyup(function () {
            selectedHeight3 = $('#customHeightIdAcrylic').val();
            changeSizeAcrylicMount();
        });

        $('#customWidthIdAcrylic').change('input', function () {
            selectedWidth3 = $('#customWidthIdAcrylic').val();
            var x = $('#acrylicMountDrpId').prop("selectedIndex", 0).val().split("x");
            selectedHeight3 = (Number(selectedWidth3) / Number(x[0]) * Number(x[1])).toFixed(0);
            $('#customHeightIdAcrylic').val(selectedHeight3);
            changeSizeAcrylicMount();
        });

        $('#customHeightIdAcrylic').change('input', function () {
            selectedHeight3 = $('#customHeightIdAcrylic').val();
            changeSizeAcrylicMount();
        });

        function changeSizeAcrylicMount() {

            if (selectedWidth3 == undefined) {
                selectedWidth3 = 50;
            }
            if (selectedHeight3 == undefined) {
                selectedHeight3 = 50;
            }

            $(".fw-td-poster-size").html(selectedWidth3 + " cm " + " x " + selectedHeight3 + " cm ");
            if (selectedWidth3 !== "" || selectedHeight3 !== "") {

                if (selectedWidth3 > drpWidth1000 / 10 || selectedHeight3 > drpHeaight1000 / 10) {
                    $('#errorSizeAcrylic').show();
                } else {
                    $('#errorSizeAcrylic').hide();
                }

                if (selectedWidth3 == selectedHeight3) {
                    wid = 100;
                    hei = 100;
                } else {
                    if (selectedWidth3 < 101 && selectedHeight3 < 101) {
                        if (selectedWidth3 <= 50 && selectedHeight3 <= 50) {
                            if (selectedWidth3 <= 10) {
                                wid = selectedWidth3 * 4;
                            } else {
                                wid = selectedWidth3 * 2;
                            }
                            hei = selectedHeight3 * 2;
                        } else {
                            if (selectedWidth3 <= 75 && selectedHeight3 <= 75) {
                                wid = selectedWidth3 * 1.5;
                                hei = selectedHeight3 * 1.5;
                            } else {
                                wid = selectedWidth3;
                                hei = selectedHeight3;
                            }
                        }

                    } else {
                        if (Number(selectedHeight3) > Number(selectedWidth3)) {
                            hei = 100;
                            wid = selectedWidth3 / (selectedHeight3 / 100);
                        } else {
                            if (Number(selectedHeight3) < Number(selectedWidth3)) {
                                hei = selectedHeight3 / (selectedWidth3 / 100);
                                wid = 100;
                            } else {
                                wid = selectedWidth3;
                                hei = selectedHeight3;
                            }
                        }
                    }
                }
                
                
            if(Number(drpWidth250) !== 250){
                if(Number(selectedWidth3) <= Number(drpWidth250)/10){
                    $('#errorSizeAcrylic').show();
                    // $('#customWidthIdAcrylic').val((Number(drpWidth250)/10).toFixed(0));
                    // $('#customHeightIdAcrylic').val((Number(drpHeaight250)/10).toFixed(0));
                }else{
                    if(Number(selectedWidth3) >= 100 || Number(selectedHeight3) >= 100 ){
                        $('#errorSizeAcrylic').show();   
                        // $('#customWidthIdAcrylic').val((Number(drpWidth1000)/10).toFixed(0));
                        // $('#customHeightIdAcrylic').val((Number(drpHeaight1000)/10).toFixed(0));
                    }else{
                        $('#errorSizeAcrylic').hide();
                    }
                }   
            }
            
            
            if(Number(drpHeaight250) !== 250){
                if(Number(selectedHeight3) <= Number(drpHeaight250)/10){
                    $('#errorSizeAcrylic').show();
                    // $('#customWidthIdAcrylic').val((Number(drpWidth250)/10).toFixed(0));
                    // $('#customHeightIdAcrylic').val((Number(drpHeaight250)/10).toFixed(0));
                }else{
                    if(Number(selectedHeight3) >= 100 || Number(selectedWidth3) >= 100 ){
                        $('#errorSizeAcrylic').show();   
                        // $('#customWidthIdAcrylic').val((Number(drpWidth1000)/10).toFixed(0));
                        // $('#customHeightIdAcrylic').val((Number(drpHeaight1000)/10).toFixed(0));
                    }else{
                        $('#errorSizeAcrylic').hide();
                    }
                }    
            }
            
            if(Number(drpHeaight250) === Number(drpWidth250)){
                if(Number(selectedHeight3) <= Number(drpHeaight250)/10){
                    $('#errorSizeAcrylic').show();
                    // $('#customWidthIdAcrylic').val((Number(drpWidth250)/10).toFixed(0));
                    // $('#customHeightIdAcrylic').val((Number(drpHeaight250)/10).toFixed(0));
                }else{
                    if(Number(selectedHeight3) >= 100 || Number(selectedWidth3) >= 100 ){
                        $('#errorSizeAcrylic').show();
                        // $('#customWidthIdAcrylic').val((Number(drpWidth1000)/10).toFixed(0));
                        // $('#customHeightIdAcrylic').val((Number(drpHeaight1000)/10).toFixed(0));
                    }else{
                        $('#errorSizeAcrylic').hide();
                    }
                }    
            }

                justPrintCostAcrylycMount = justPrintCal(Number(selectedWidth3), Number(selectedHeight3));
                $("#acrylicMountSizePriceId").html('$' + justPrintCostAcrylycMount.toFixed(2));
                acrylicMountPriceCalculation(Number(selectedWidth3), Number(selectedHeight3));

                $(".p-content").css("width", wid + "%");
                $(".p-content").css("height", hei + "%");
                $(".pjp-td-poster-size, .pjcs-td-poster-size").html(selectedVal + "mm");
            }

            document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + Number(selectedWidth3) * 10 + 'x' + Number(selectedHeight3) * 10 + 'mm';
        };


        // handle Block Mount section size
        $("#customWidthIdBlock").keyup(function () {
            selectedWidth4 = $('#customWidthIdBlock').val();
            var x = $('#blockMountDrpId').prop("selectedIndex", 0).val().split("x");
            selectedHeight4 = (Number(selectedWidth4) / Number(x[0]) * Number(x[1])).toFixed(0);
            $('#customHeightIdBlock').val(selectedHeight4);
            changeSizeBlockMount();
        });
        $('#customHeightIdBlock').keyup(function () {
            selectedHeight4 = $('#customHeightIdBlock').val();
            changeSizeBlockMount();
        });

        $('#customWidthIdBlock').change('input', function () {
            selectedWidth4 = $('#customWidthIdBlock').val();
            var x = $('#blockMountDrpId').prop("selectedIndex", 0).val().split("x");
            selectedHeight4 = (Number(selectedWidth4) / Number(x[0]) * Number(x[1])).toFixed(0);
            $('#customHeightIdBlock').val(selectedHeight4);
            changeSizeBlockMount();
        });

        $('#customHeightIdBlock').change('input', function () {
            selectedHeight4 = $('#customHeightIdBlock').val();
            changeSizeBlockMount();
        });

        function changeSizeBlockMount() {

            if (selectedWidth4 == undefined) {
                selectedWidth4 = 50;
            }
            if (selectedHeight4 == undefined) {
                selectedHeight4 = 50;
            }

            $(".fw-td-poster-size").html(selectedWidth4 + " cm " + " x " + selectedHeight4 + " cm ");
            if (selectedWidth3 !== "" || selectedHeight3 !== "") {

                if (selectedWidth4 > drpWidth1000 / 10 || selectedHeight4 > drpHeaight1000 / 10) {
                    $('#errorSizeBlock').show();
                } else {
                    $('#errorSizeBlock').hide();
                }

                if (selectedWidth4 == selectedHeight4) {
                    wid = 100;
                    hei = 100;
                } else {
                    if (selectedWidth4 < 101 && selectedHeight4 < 101) {
                        if (selectedWidth4 <= 50 && selectedHeight4 <= 50) {
                            if (selectedWidth4 <= 10) {
                                wid = selectedWidth4 * 4;
                            } else {
                                wid = selectedWidth4 * 2;
                            }
                            hei = selectedHeight4 * 2;
                        } else {
                            if (selectedWidth4 <= 75 && selectedHeight4 <= 75) {
                                wid = selectedWidth4 * 1.5;
                                hei = selectedHeight4 * 1.5;
                            } else {
                                wid = selectedWidth4;
                                hei = selectedHeight4;
                            }
                        }

                    } else {
                        if (Number(selectedHeight4) > Number(selectedWidth4)) {
                            hei = 100;
                            wid = selectedWidth4 / (selectedHeight4 / 100);
                        } else {
                            if (Number(selectedHeight4) < Number(selectedWidth4)) {
                                hei = selectedHeight4 / (selectedWidth4 / 100);
                                wid = 100;
                            } else {
                                wid = selectedWidth4;
                                hei = selectedHeight4;
                            }
                        }
                    }
                }
                
                
            if(Number(drpWidth250) !== 250){
                if(Number(selectedWidth4) <= Number(drpWidth250)/10){
                    $('#errorSizeBlock').show();
                    // $('#customWidthIdBlock').val((Number(drpWidth250)/10).toFixed(0));
                    // $('#customHeightIdBlock').val((Number(drpHeaight250)/10).toFixed(0));
                }else{
                    if(Number(selectedWidth4) >= 100 || Number(selectedHeight4) >= 100 ){
                        $('#errorSizeBlock').show();   
                        // $('#customWidthIdBlock').val((Number(drpWidth1000)/10).toFixed(0));
                        // $('#customHeightIdBlock').val((Number(drpHeaight1000)/10).toFixed(0));
                    }else{
                        $('#errorSizeBlock').hide();
                    }
                }   
            }
            
            
            if(Number(drpHeaight250) !== 250){
                if(Number(selectedHeight4) <= Number(drpHeaight250)/10){
                    $('#errorSizeBlock').show();
                    // $('#customWidthIdBlock').val((Number(drpWidth250)/10).toFixed(0));
                    // $('#customHeightIdBlock').val((Number(drpHeaight250)/10).toFixed(0));
                }else{
                    if(Number(selectedHeight4) >= 100 || Number(selectedWidth4) >= 100 ){
                        $('#errorSizeBlock').show();   
                        // $('#customWidthIdBlock').val((Number(drpWidth1000)/10).toFixed(0));
                        // $('#customHeightIdBlock').val((Number(drpHeaight1000)/10).toFixed(0));
                    }else{
                        $('#errorSizeBlock').hide();
                    }
                }    
            }
            
            if(Number(drpHeaight250) === Number(drpWidth250)){
                if(Number(selectedHeight4) <= Number(drpHeaight250)/10){
                    $('#errorSizeBlock').show();
                    // $('#customWidthIdBlock').val((Number(drpWidth250)/10).toFixed(0));
                    // $('#customHeightIdBlock').val((Number(drpHeaight250)/10).toFixed(0));
                }else{
                    if(Number(selectedHeight4) >= 100 || Number(selectedWidth4) >= 100 ){
                        $('#errorSizeBlock').show();
                        // $('#customWidthIdBlock').val((Number(drpWidth1000)/10).toFixed(0));
                        // $('#customHeightIdBlock').val((Number(drpHeaight1000)/10).toFixed(0));
                    }else{
                        $('#errorSizeBlock').hide();
                    }
                }    
            }

                justPrintCostBlockycMount = justPrintCal(Number(selectedWidth4), Number(selectedHeight4));
                $("#blockMountSizePriceId").html('$' + justPrintCostBlockycMount.toFixed(2));
                blockMountPriceCalculation(Number(selectedWidth4), Number(selectedHeight4));

                $(".p-content").css("width", wid + "%");
                $(".p-content").css("height", hei + "%");
                $(".pjp-td-poster-size, .pjcs-td-poster-size").html(selectedVal + "mm");
            }

            document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + Number(selectedWidth4) * 10 + 'x' + Number(selectedHeight4) * 10 + 'mm';
        };
        //handle select options

        $("#poster-canvas-stretching").click(function () {

            checkCanvas = 1;
            checkFrame = 0;
            checkAcrylic = 0;
            checkBlock = 0;

            console.log("poster-canvas-stretching");
            $("#poster-detail").hide();
            $("#poster-just-canvas-section").hide();
            $("#poster-canvas-stretching-section").show();
            $("#poster-acrylic-mount-section").hide();
            $("#poster-block-mount-section").hide();
            $("#poster-canvas-stretching").css({
                "border-style": "solid",
                "border-width": "2px 10px 3px 20px",
                "border-color": "whitesmoke"
            });

            $("#poster-just-print").css({"border-style": "none", "border-width": "none"});
            $("#poster-just-canvas").css({"border-style": "none", "border-width": "none"});
            $("#poster-framing").css({"border-style": "none", "border-width": "none"});
            $("#poster-acrylic-mount").css({"border-style": "none", "border-width": "none"});
            $("#poster-block-mount").css({"border-style": "none", "border-width": "none"});

            $(".frame-sec").hide();
            $(".framemat-sec").hide();
            $(".for-want").hide();

            $(".custom-size-div").hide();

            $(".p-content").css({'border': 'none'});
            // $(".p-content").css({'width': '100%','height':'100%'});

            $(".select-edgeType-canvas").val('none');
            $('.selectEdgeTypeCanvas').html('none');
            $('.selectTimberSizeCanvas').html("none");
            $(".timberSizeCanvasSretching").val(0);

            swal("1st step", "Please select Edge type...", "success");

            $(".p-content").removeClass("pContentAcrylic");
            // $(".p-content").removeClass("pContentAcrylicNoBorder");
            $(".p-content").css({"border": "none", "padding": "0", "box-shadow": "none", "background": "none"});

        });

        $("#poster-framing").click(function () {

            addFrame();

            checkCanvas = 0;
            checkFrame = 1;
            checkAcrylic = 0;
            checkBlock = 0;

            $(".frame-sec").show();
            $(".framemat-sec").show();

            $("#poster-detail").hide();
            $("#poster-block-mount-section").hide();
            $("#poster-just-canvas-section").hide();
            $("#poster-canvas-stretching-section").hide();
            $("#poster-framing-section").show();
            $("#custom-size-div").show();
            $("#frame-sec").show();
            $("#frames").hide();
            $("#poster-acrylic-mount-section").hide();

            $("#selectFrames").css("background", "#167AC6");
            $("#selectMats").css("background", "black");

            // for-want
            $(".for-want").show();

            $(".custom-size-div").hide();

            //mats
            $("#mats-sec").hide();

            $("#poster-framing").css({
                "border-style": "solid",
                "border-width": "2px 10px 3px 20px",
                "border-color": "whitesmoke"
            });

            $("#poster-just-print").css({"border-style": "none", "border-width": "none"});
            $("#poster-just-canvas").css({"border-style": "none", "border-width": "none"});
            $("#poster-canvas-stretching").css({"border-style": "none", "border-width": "none"});
            $("#poster-acrylic-mount").css({"border-style": "none", "border-width": "none"});
            $("#poster-block-mount").css({"border-style": "none", "border-width": "none"});

            // loadFrameblackAndWhite();
            loadFrameFirstTime();
            // $(".p-content").css({'border': 'none'});
            // $(".p-content").css({'width': '100%','height':'100%'});

            swal("1st step", "Please select frame...", "success");

            $(".p-content").removeClass("pContentAcrylic");
            // $(".p-content").removeClass("pContentAcrylicNoBorder");
            $(".p-content").css({"border": "none", "padding": "0", "box-shadow": "none", "background": "none"});
        });

        $("#poster-acrylic-mount").click(function () {

            checkCanvas = 0;
            checkFrame = 0;
            checkAcrylic = 1;
            checkBlock = 0;

            $("#poster-detail").hide();
            $("#poster-just-canvas-section").hide();
            $("#poster-canvas-stretching-section").hide();
            $("#poster-framing-section").hide();
            $("#poster-block-mount-section").hide();
            $("#poster-acrylic-mount-section").show();

            $("#poster-acrylic-mount").css({
                "border-style": "solid",
                "border-width": "2px 10px 3px 20px",
                "border-color": "whitesmoke"
            });

            $("#poster-just-print").css({"border-style": "none", "border-width": "none"});
            $("#poster-just-canvas").css({"border-style": "none", "border-width": "none"});
            $("#poster-canvas-stretching").css({"border-style": "none", "border-width": "none"});
            $("#poster-framing").css({"border-style": "none", "border-width": "none"});
            $("#poster-block-mount").css({"border-style": "none", "border-width": "none"});

            $(".frame-sec").hide();
            $(".framemat-sec").hide();
            $(".for-want").hide();

            $(".custom-size-div").hide();

            $(".p-content").css({'border': 'none'});
            // $(".p-content").css({'width': '100%','height':'100%'});

            swal("1st step", "Please select Backing color...", "success");
            
            $(".p-content").removeClass("pContentAcrylic");
            // $(".p-content").addClass("pContentAcrylicNoBorder");
            $(".p-content").css({"border": "none", "padding": "0", "box-shadow": "none", "background": "none"});
        });

        $("#poster-block-mount").click(function () {

            checkCanvas = 0;
            checkFrame = 0;
            checkAcrylic = 0;
            checkBlock = 1;

            $("#poster-detail").hide();
            $("#poster-just-canvas-section").hide();
            $("#poster-canvas-stretching-section").hide();
            $("#poster-framing-section").hide();
            $("#poster-acrylic-mount-section").hide();
            $("#poster-block-mount-section").show();

            $("#poster-block-mount").css({
                "border-style": "solid",
                "border-width": "2px 10px 3px 20px",
                "border-color": "whitesmoke"
            });

            $("#poster-just-print").css({"border-style": "none", "border-width": "none"});
            $("#poster-just-canvas").css({"border-style": "none", "border-width": "none"});
            $("#poster-canvas-stretching").css({"border-style": "none", "border-width": "none"});
            $("#poster-framing").css({"border-style": "none", "border-width": "none"});
            $("#poster-acrylic-mount").css({"border-style": "none", "border-width": "none"});

            $(".frame-sec").hide();
            $(".framemat-sec").hide();
            $(".for-want").hide();

            $(".custom-size-div").hide();


            $(".p-content").css({'border': 'none'});
            // $(".p-content").css({'width': '100%','height':'100%'});

            swal("1st step", "Please select Lamination...", "success");

            $(".p-content").removeClass("pContentAcrylic");
            // $(".p-content").removeClass("pContentAcrylicNoBorder");
            $(".p-content").css({"border": "none", "padding": "0", "box-shadow": "none", "background": "none"});
        });

        $("section div ul li").click(function () {
            $(".col-sm-12").addClass("col-sm-5");
            $(".col-sm-12").removeClass("col-sm-12");
            var currentDiv = this.id;
            for (var i = 0; i < items.length; i++) {
                if (items[i] != currentDiv) {
                    //animation effect
                    // $("#" + items[i]).fadeOut();
                    // $("#" + items[i]).fadeOut("slow");
                    // $("#" + items[i]).fadeOut(3000);
                } else {
                    // if (currentDiv == "poster-just-print") {
                    //   $("#poster-detail").show();
                    //   $("#poster-just-canvas-section").hide();
                    //   $("#poster-canvas-stretching-section").hide();
                    //     $("#poster-acrylic-mount-section").hide();
                    //   $("#poster-just-print").css({"border-style": "solid", "border-width":"2px 10px 3px 20px"});
                    //
                    //     $("#poster-just-canvas").css({"border-style": "none", "border-width":"none"});
                    //     $("#poster-canvas-stretching").css({"border-style": "none", "border-width":"none"});
                    //     $("#poster-framing").css({"border-style": "none", "border-width":"none"});
                    //     $("#poster-acrylic-mount").css({"border-style": "none", "border-width":"none"});
                    //     $("#poster-block-mount").css({"border-style": "none", "border-width":"none"});
                    //
                    //     $(".frame-sec").hide();
                    //     $(".framemat-sec").hide();
                    //     $(".for-want").hide();
                    // }
                    // if (currentDiv == "poster-just-canvas") {
                    //   $("#poster-detail").hide();
                    //   $("#poster-just-canvas-section").show();
                    //   $("#poster-canvas-stretching-section").hide();
                    //     $("#poster-acrylic-mount-section").hide();
                    //   $("#poster-just-canvas").css({"border-style": "solid", "border-width":"2px 10px 3px 20px"});
                    //
                    //     $("#poster-just-print").css({"border-style": "none", "border-width":"none"});
                    //     $("#poster-canvas-stretching").css({"border-style": "none", "border-width":"none"});
                    //     $("#poster-framing").css({"border-style": "none", "border-width":"none"});
                    //     $("#poster-acrylic-mount").css({"border-style": "none", "border-width":"none"});
                    //     $("#poster-block-mount").css({"border-style": "none", "border-width":"none"});
                    //
                    //     $(".frame-sec").hide();
                    //     $(".framemat-sec").hide();
                    //     $(".for-want").hide();
                    // }


                    if (currentDiv == "poster-canvas-stretching") {

                    }
                    if (currentDiv == "poster-framing") {

                    }
                    if (currentDiv == "poster-acrylic-mount") {

                    }
                    if (currentDiv == "poster-block-mount") {

                    } else {
                        //
                    }
                }
            }
            // show all-nav btn
            $("#all-nav").show();
        });

        function setAnimation(img) {
            //fadeout
            img.fadeOut();
            img.fadeOut("slow");
            img.fadeOut(5000);

            //fadein
            img.fadeIn();
            img.fadeIn("slow");
            img.fadeIn(5000);
        }

        // frame select
        $("#comboFrames").on("click", function () {
            const selectedVal = $("#comboFrames").val();
            if (selectedVal == "mt") {
                $("#frames").show();
                $(".for-want").show();
            } else {
                //
            }
        });

        // frame
        $("#selectFrames").click(function () {
            $("#frame-sec").show();
            $(".frame-sec").show();
            $("#mats-sec").hide();
            $("#poster-block-mount-section").hide();
            $(".for-want").show();
            $("#selectMats").css("background", "black");
            $("#selectFrames").css("background", "#167AC6");
            $("#poster-acrylic-mount-section").hide();
        });
        // mats
        $("#selectMats").click(function () {
            $("#frame-sec").hide();
            $(".frame-sec").hide();
            $("#poster-block-mount-section").hide();
            $("#mats-sec").show();
            $(".for-want").show();
            $("#selectMats").css("background", "#167AC6");
            $("#selectFrames").css("background", "black");
            $("#poster-acrylic-mount-section").hide();
            
            
            if(checkNomat === 0){
                
                countMat++;
                
                var topMatColr = $("#thirdBorderDivId").css("border-left-color");
                var middleMatColr = $("#secondBorderDivId").css("border-left-color");
                var bottomMatColr = $("#borderimg1").css("border-left-color");
            
                $("#borderimg1").css({'padding': '3px'});
                $("#borderimg1").css({'background': 'white'});
            
                $("#selectNoMat3").css({'backgroundColor': 'lightblue'});
                document.getElementById("SelmatNo3").checked = true;
                document.getElementById("matFrameSizeThird").disabled = false;
            
                
                if(countMat === 1){
                    
                    if(topMatColr === "rgb(51, 51, 51)"){
                        $("#addColorThirdDivId").css({'background-color': 'rgb(216, 152, 178)'});
                        $("#thirdBorderDivId").css({'border': 'solid 25px rgb(216, 152, 178)'});
                        
                        $('#framesMatId3').html('Antique Rose');
                        $("#framesMatId3").css({'color': 'black'});
                        $("#framesMatSizeId3").html(' : 50mm');
        
                        $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
        
                        framingMatPriceCalculationComplete();
                    }
                    
                    
                    if(middleMatColr === "rgb(51, 51, 51)"){
                        $("#addColorSecondDivId").css({'background-color': 'rgb(124, 77, 85)'});
                        $("#secondBorderDivId").css({'border': 'solid 2.5px rgb(124, 77, 85)'});
                        
                        $('#framesMatId2').html('Wine');
                        $("#framesMatId2").css({'color': 'black'});
                        $("#framesMatSizeId2").html(' : 5mm');
        
                        $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
        
                        framingMatPriceCalculationComplete();
                    }
                    
                    matFrameSizeThir = 50;
                    matFrameSizeSec = 5;
                    matFrameSizeFir = 0;
                    $('#matFrameSizeThird').val(matFrameSizeThir);
                    $('#matFrameSizeSecond').val(matFrameSizeSec);
                    
                    $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
                    $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');   
                    
                    document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(drpWidth1000) + Number(frameThicknesSize) * 2 + (matFrameSizeThir + matFrameSizeSec) * 2) + 'x' + (Number(drpHeaight1000) + Number(frameThicknesSize) * 2  + (matFrameSizeThir + matFrameSizeSec) * 2) + 'mm';
                }
            
            }
                
            
            swal("3rd step", "Please select mat...", "success");

            frameBorderSizeTemp = frameBorderSize;
        });

        // select frames
        $(".btnFrame").click(function () {
            frameModel = this.id;
            switch (frameModel) {
                case "mat-outline":
                    $(".p-content").addClass("mat-outline");
                    $(".p-content").removeClass("mat-outline2");
                    break;
                case "mat-outline2":
                    $(".p-content").addClass("mat-outline2");
                    $(".p-content").removeClass("mat-outline");
                    break;
                default:
                    break;
            }
        });

        $('#matFrameSizeFirst').keyup(function () {
            matFrameSizeFirTemp = matFrameSizeFir;
            matFrameSizeFir = Number($('#matFrameSizeFirst').val());

            frameBorderSize = (Number(frameBorderSize) - (Number(matFrameSizeFirTemp) * 2)) + (Number(matFrameSizeFir) * 2);
            document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(tempWid) * 10 + Number(frameBorderSize) + Number(frameThicknesSize)*2) + 'x' + (Number(tempHei) * 10 + Number(frameBorderSize) + Number(frameThicknesSize)*2) + 'mm';

            $("#borderimg1").css({'borderWidth': (matFrameSizeFir / 2) + 'px'});
            $("#framesMatSizeId1").html(' : ' + matFrameSizeFir + 'mm');

            if (mat1st == 1) {
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
            }

            if (mat2nd == 1) {
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
            }

            if (mat3rd == 1) {
                $("#framesMatSizePriceId1").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
            }

            framingMatPriceCalculationComplete();
            framingPriceCalculation();
        });
        $('#matFrameSizeFirst').change('input', function () {
            matFrameSizeFirTemp = matFrameSizeFir;
            matFrameSizeFir = Number($('#matFrameSizeFirst').val());

            frameBorderSize = (Number(frameBorderSize) - (Number(matFrameSizeFirTemp) * 2)) + (Number(matFrameSizeFir) * 2);
            document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(tempWid) * 10 + Number(frameBorderSize) + Number(frameThicknesSize)*2) + 'x' + (Number(tempHei) * 10 + Number(frameBorderSize) + Number(frameThicknesSize)*2) + 'mm';

            $("#borderimg1").css({'borderWidth': (matFrameSizeFir / 2) + 'px'});
            $("#framesMatSizeId1").html(' : ' + matFrameSizeFir + 'mm');

            if (mat1st == 1) {
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
            }

            if (mat2nd == 1) {
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
            }

            if (mat3rd == 1) {
                $("#framesMatSizePriceId1").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
            }

            framingMatPriceCalculationComplete();
            framingPriceCalculation();
        });

        $('#matFrameSizeSecond').keyup(function () {
            matFrameSizeSecTemp = matFrameSizeSec;
            matFrameSizeSec = Number($('#matFrameSizeSecond').val());

            var frameBorderSize = (Number(frameBorderSize) - (Number(matFrameSizeSecTemp) * 2)) + (Number(matFrameSizeSec) * 2);
    
            document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(tempWid) * 10 + Number(frameBorderSize) + Number(frameThicknesSize)*2) + 'x' + (Number(tempHei) * 10 + Number(frameBorderSize) + Number(frameThicknesSize)*2) + 'mm';

            $("#secondBorderDivId").css({'borderWidth': (matFrameSizeSec / 2) + 'px'});
            $("#framesMatSizeId2").html(' : ' + matFrameSizeSec + 'mm');

            if (mat1st == 1) {
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
            }

            if (mat2nd == 1) {
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
            }

            if (mat3rd == 1) {
                $("#framesMatSizePriceId1").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
            }

            framingMatPriceCalculationComplete();
            framingPriceCalculation();
        });
        $('#matFrameSizeSecond').change('input', function () {
            matFrameSizeSecTemp = matFrameSizeSec;
            matFrameSizeSec = Number($('#matFrameSizeSecond').val());

            frameBorderSize = (Number(frameBorderSize) - (Number(matFrameSizeSecTemp) * 2)) + (Number(matFrameSizeSec) * 2);
            // frameThicknesSize
            
            document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(tempWid) * 10 + Number(frameBorderSize) + Number(frameThicknesSize)*2) + 'x' + (Number(tempHei) * 10 + Number(frameBorderSize) + Number(frameThicknesSize)*2) + 'mm';

            $("#secondBorderDivId").css({'borderWidth': (matFrameSizeSec / 2) + 'px'});
            $("#framesMatSizeId2").html(' : ' + matFrameSizeSec + 'mm');

            if (mat1st == 1) {
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
            }

            if (mat2nd == 1) {
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
            }

            if (mat3rd == 1) {
                $("#framesMatSizePriceId1").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
            }

            framingMatPriceCalculationComplete();
            framingPriceCalculation();
        });

        $('#matFrameSizeThird').keyup(function () {
            matFrameSizeThirTemp = matFrameSizeThir;
            matFrameSizeThir = Number($('#matFrameSizeThird').val());

            frameBorderSize = (Number(frameBorderSize) - (Number(matFrameSizeThirTemp) * 2)) + (Number(matFrameSizeThir) * 2);
            document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(tempWid) * 10 + Number(frameBorderSize) + Number(frameThicknesSize)*2) + 'x' + (Number(tempHei) * 10 + Number(frameBorderSize) + Number(frameThicknesSize)*2) + 'mm';

            $("#thirdBorderDivId").css({'borderWidth': (matFrameSizeThir / 2) + 'px'});
            $("#framesMatSizeId3").html(' : ' + matFrameSizeThir + 'mm');

            if (mat1st == 1) {
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
            }

            if (mat2nd == 1) {
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
            }

            if (mat3rd == 1) {
                $("#framesMatSizePriceId1").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
            }

            framingMatPriceCalculationComplete();
            framingPriceCalculation();
        });

        $('#matFrameSizeThird').change('input', function () {
            matFrameSizeThirTemp = matFrameSizeThir;
            matFrameSizeThir = Number($('#matFrameSizeThird').val());

            frameBorderSize = (Number(frameBorderSize) - (Number(matFrameSizeThirTemp) * 2)) + (Number(matFrameSizeThir) * 2);
            document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(tempWid) * 10 + Number(frameBorderSize) + Number(frameThicknesSize)*2) + 'x' + (Number(tempHei) * 10 + Number(frameBorderSize) + Number(frameThicknesSize)*2) + 'mm';

            $("#thirdBorderDivId").css({'borderWidth': (matFrameSizeThir / 2) + 'px'});
            $("#framesMatSizeId3").html(' : ' + matFrameSizeThir + 'mm');

            if (mat1st == 1) {
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
            }

            if (mat2nd == 1) {
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
            }

            if (mat3rd == 1) {
                $("#framesMatSizePriceId1").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
            }

            framingMatPriceCalculationComplete();
            framingPriceCalculation();
        });


        $(".box").click(function () {
            var selMatSizeFrame = $("input[name='selectedMat']:checked").val();
            matColor = this.id;

            if (selMatSizeFrame == 'selectMat1') {
               
                $("#borderimg1").css({'padding': '3px'});
                $("#borderimg1").css({'background': 'white'});
                
                matFrameSizeFir = 5;
                count1++;

                document.getElementById("matFrameSizeFirst").disabled = false;
                if (count1 === 1) {
                    frameBorderSize = (Number(frameBorderSize)) + (Number(matFrameSizeFir) * 2);
                    document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(tempWid) * 10 + Number(frameBorderSize)) + 'x' + (Number(tempHei) * 10 + Number(frameBorderSize)) + 'mm';
                } else {
                    frameBorderSize = Number(frameBorderSize) + ((Number(matFrameSizeFir) - 5) * 2);
                    document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(tempWid) * 10 + Number(frameBorderSize)) + 'x' + (Number(tempHei) * 10 + Number(frameBorderSize)) + 'mm';
                }

                $("#addColorFirstDivId").css({'background-color': '#' + matColor});
                $("#borderimg1").css({'border': 'solid 2.5px #' + matColor});
                $('#matFrameSizeFirst').val(matFrameSizeFir);

                $('#framesMatId1').html(document.getElementById(matColor).innerHTML);
                $("#framesMatId1").css({'color': 'black'});
                $("#framesMatSizeId1").html(' : ' + matFrameSizeFir + 'mm');

                $("#framesMatSizePriceId1").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');

                framingMatPriceCalculationComplete();
            }

            if (selMatSizeFrame == 'selectMat2') {
               
                $("#borderimg1").css({'padding': '3px'});
                $("#borderimg1").css({'background': 'white'});
                
                matFrameSizeSec = 5;
                count2++;
                document.getElementById("matFrameSizeSecond").disabled = false;
                if (count2 === 1) {
                    frameBorderSize = Number(frameBorderSize) + (Number(matFrameSizeSec) * 2);
                    document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(tempWid) * 10 + Number(frameBorderSize)) + 'x' + (Number(tempHei) * 10 + Number(frameBorderSize)) + 'mm';
                } else {
                    frameBorderSize = Number(frameBorderSize) + ((Number(matFrameSizeSec) - 5) * 2);
                    document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(tempWid) * 10 + Number(frameBorderSize)) + 'x' + (Number(tempHei) * 10 + Number(frameBorderSize)) + 'mm';
                }

                $("#addColorSecondDivId").css({'background-color': '#' + matColor});
                $("#secondBorderDivId").css({'border': 'solid 2.5px #' + matColor});
                $('#matFrameSizeSecond').val(matFrameSizeSec);

                $('#framesMatId2').html(document.getElementById(matColor).innerHTML);
                $("#framesMatId2").css({'color': 'black'});
                $("#framesMatSizeId2").html(' : ' + matFrameSizeSec + 'mm');

                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');

                framingMatPriceCalculationComplete();
            }

            if (selMatSizeFrame == 'selectMat3') {
                
                $("#borderimg1").css({'padding': '3px'});
                $("#borderimg1").css({'background': 'white'});
                
                matFrameSizeThir = 50;
                count3++;
                document.getElementById("matFrameSizeThird").disabled = false;
                if (count3 === 1) {
                    frameBorderSize = Number(frameBorderSize) + (Number(matFrameSizeThir) * 2);
                    document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(tempWid) * 10 + Number(frameBorderSize)) + 'x' + (Number(tempHei) * 10 + Number(frameBorderSize)) + 'mm';
                } else {
                    frameBorderSize = Number(frameBorderSize) + ((Number(matFrameSizeThir) - 50) * 2);
                    document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(tempWid) * 10 + Number(frameBorderSize)) + 'x' + (Number(tempHei) * 10 + Number(frameBorderSize)) + 'mm';
                }

                $("#addColorThirdDivId").css({'background-color': '#' + matColor});
                $("#thirdBorderDivId").css({'border': 'solid 25px #' + matColor});
                $('#matFrameSizeThird').val(matFrameSizeThir);

                $('#framesMatId3').html(document.getElementById(matColor).innerHTML);
                $("#framesMatId3").css({'color': 'black'});
                $("#framesMatSizeId3").html(' : ' + matFrameSizeThir + 'mm');

                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');

                framingMatPriceCalculationComplete();
            }
        });


        $("input[name='Nomat']").change(function () {
        
            <!--$("#borderimg1").css({'background': 'none'});-->
            $("#borderimg1").css({'padding': 'unset'});
            
            var matSize = $("input[name='Nomat']:checked").val();

            // if($("#matNo1").is(":checked")){
            //     var mat1st = 0;
            //     var mat2nd = 0;
            //     var mat3rd = 0;
            // }

            if (matSize == 'no') {
                count1 = 0;
                count2 = 0;
                count3 = 0;
                
                checkNomat = 1;
                
                matFrameSizeFir = 0;
                matFrameSizeSec = 0;
                matFrameSizeThir = 0;
               

                document.getElementById("matFrameSizeFirst").disabled = true;
                document.getElementById("matFrameSizeSecond").disabled = true;
                document.getElementById("matFrameSizeThird").disabled = true;

                $("#selectNoMat1").css({'display': 'none'});
                $("#selectNoMat2").css({'display': 'none'});
                $("#selectNoMat3").css({'display': 'none'});

                document.getElementById("SelmatNo1").checked = false;
                document.getElementById("SelmatNo2").checked = false;
                document.getElementById("SelmatNo3").checked = false;

                $("#addColorFirstDivId").css({'background-color': 'white'});
                $("#borderimg1").css({'border': 'none'});
                $('#matFrameSizeFirst').val(5);

                $('#framesMatId1').html("none");
                $("#framesMatId1").css({'color': 'black'});
                $("#framesMatSizeId1").html('');

                $("#framesMatSizePriceId1").html('');

                $("#addColorSecondDivId").css({'background-color': 'white'});
                $("#secondBorderDivId").css({'border': 'none'});
                $('#matFrameSizeSecond').val(5);

                $('#framesMatId2').html("none");
                $("#framesMatId2").css({'color': 'black'});
                $("#framesMatSizeId2").html('');

                $("#framesMatSizePriceId2").html('');

                $("#addColorThirdDivId").css({'background-color': 'white'});
                $("#thirdBorderDivId").css({'border': 'none'});
                $('#matFrameSizeThird').val(50);

                $('#framesMatId3').html("none");
                $("#framesMatId3").css({'color': 'black'});
                $("#framesMatSizeId3").html('');

                $("#framesMatSizePriceId3").html('');

                // if($("#matNo1").is(":checked")){
                frameBorderSize = 0;
                document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(tempWid) * 10 + Number(frameBorderSize)) + 'x' + (Number(tempHei) * 10 + Number(frameBorderSize)) + 'mm';
                // }
                $("#framesMatSizePriceId1").html('');
                $("#framesMatSizePriceId2").html('');
                $("#framesMatSizePriceId3").html('');

                framingMatPriceCalculationComplete();

                mat1st = 0;
                mat2nd = 0;
                mat3rd = 0;
            }

            if (matSize == 'mat1') {
                
                checkMat1 = 1;
                checkMat2 = 0;
                checkMat3 = 0;
                
                $("#borderimg1").css({'padding': '3px'});
                $("#borderimg1").css({'background': 'white'});
                
                document.getElementById("middleMatFrameId").innerHTML = "Middle mat";
                
                matFrameSizeFir = 0;
                matFrameSizeSec = 0;
                // matFrameSizeThir = 0;


                $("#selectNoMat1").css({'display': 'none'});
                $("#selectNoMat2").css({'display': 'none'});
                $("#selectNoMat3").css({'display': 'block'});

                document.getElementById("SelmatNo3").checked = true;

                document.getElementById("matFrameSizeFirst").disabled = true;
                document.getElementById("matFrameSizeSecond").disabled = true;
                document.getElementById("matFrameSizeThird").disabled = true;

                $("#selectNoMat1").css({'backgroundColor': 'white'});
                $("#selectNoMat2").css({'backgroundColor': 'white'});
                $("#selectNoMat3").css({'backgroundColor': 'lightblue'});

                $("#addColorSecondDivId").css({'background-color': 'white'});
                $("#secondBorderDivId").css({'border': 'none'});
                $('#matFrameSizeSecond').val(5);

                $("#addColorFirstDivId").css({'background-color': 'white'});
                $("#borderimg1").css({'border': 'none'});
                $('#matFrameSizeFirst').val(5);

                $('#framesMatId2').html("none");
                $("#framesMatId2").css({'color': 'black'});
                $("#framesMatSizeId2").html('');

                $('#framesMatId1').html("none");
                $("#framesMatId1").css({'color': 'black'});
                $("#framesMatSizeId1").html('');

                $("#framesMatSizePriceId2").html('');
                $("#framesMatSizePriceId1").html('');
                
                var topMatColr = $("#thirdBorderDivId").css("border-left-color");
                var middleMatColr = $("#secondBorderDivId").css("border-left-color");
                var bottomMatColr = $("#borderimg1").css("border-left-color");
                
                document.getElementById("matFrameSizeThird").disabled = false;

                if(topMatColr === "rgb(51, 51, 51)"){
                    $("#addColorThirdDivId").css({'background-color': 'rgb(216, 152, 178)'});
                    $("#thirdBorderDivId").css({'border': 'solid 25px rgb(216, 152, 178)'});
                    
                    $("#addColorThirdDivId").css({'background-color': 'rgb(216, 152, 178)'});
                    $("#thirdBorderDivId").css({'border': 'solid 25px rgb(216, 152, 178)'});
                    
                    $('#framesMatId3').html('Antique Rose');
                    $("#framesMatId3").css({'color': 'black'});
                    $("#framesMatSizeId3").html(' : 50mm');
    
                    $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
    
                    framingMatPriceCalculationComplete();
                }
                
                

                if (mat2nd == 1) {
                    if (mat3rd == 1) {
                        frameBorderSize = Number(frameBorderSize) - ((Number(matFrameSizeThir) * 2) + (Number(matFrameSizeSec) * 2));
                        document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(tempWid) * 10 + Number(frameBorderSize)) + 'x' + (Number(tempHei) * 10 + Number(frameBorderSize)) + 'mm';
                        $("#framesMatSizePriceId2").html('');
                        $("#framesMatSizePriceId3").html('');
                    }
                }

                if (mat2nd == 1) {
                    frameBorderSize = Number(frameBorderSize) - ((Number(matFrameSizeSec) * 2));
                    document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(tempWid) * 10 + Number(frameBorderSize)) + 'x' + (Number(tempHei) * 10 + Number(frameBorderSize)) + 'mm';

                    $("#framesMatSizePriceId2").html('');

                }

                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');

                framingMatPriceCalculationComplete();

                mat1st = 1;
                mat2nd = 0;
                mat3rd = 0;
                
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
                // $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
                // $("#framesMatSizePriceId1").html('( $' + framingMatPriceCalculation() + ' )');
            }

            if (matSize == 'mat2') {
                
                checkMat1 = 0;
                checkMat2 = 1;
                checkMat3 = 0;
                
                $("#borderimg1").css({'padding': '3px'});
                $("#borderimg1").css({'background': 'white'});
                
                document.getElementById("middleMatFrameId").innerHTML = "Bottom mat";
                
                matFrameSizeFir = 0;
                // matFrameSizeSec = 0;
                // matFrameSizeThir = 0;
               
                
                $("#selectNoMat1").css({'display': 'none'});
                $("#selectNoMat2").css({'display': 'block'});
                $("#selectNoMat3").css({'display': 'block'});

                document.getElementById("SelmatNo3").checked = true;

                document.getElementById("matFrameSizeFirst").disabled = true;
                document.getElementById("matFrameSizeSecond").disabled = true;
                document.getElementById("matFrameSizeThird").disabled = true;

                $("#selectNoMat1").css({'backgroundColor': 'white'});
                $("#selectNoMat2").css({'backgroundColor': 'white'});
                $("#selectNoMat3").css({'backgroundColor': 'lightblue'});

                // $("#addColorThirdDivId").css({'background-color': 'white'});
                // $("#thirdBorderDivId").css({'border': 'none'});
                // $('#matFrameSizeThird').val(50);

                $("#addColorFirstDivId").css({'background-color': 'white'});
                $("#borderimg1").css({'border': 'none'});
                $('#matFrameSizeFirst').val(5);

                $('#framesMatId1').html("none");
                $("#framesMatId1").css({'color': 'black'});
                $("#framesMatSizeId1").html('');
                
                var topMatColr = $("#thirdBorderDivId").css("border-left-color");
                var middleMatColr = $("#secondBorderDivId").css("border-left-color");
                var bottomMatColr = $("#borderimg1").css("border-left-color");
                
                document.getElementById("matFrameSizeThird").disabled = false;

                if (mat3rd == 1) {
                    frameBorderSize = Number(frameBorderSize) - ((Number(matFrameSizeThir) * 2));
                    document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(tempWid) * 10 + Number(frameBorderSize)) + 'x' + (Number(tempHei) * 10 + Number(frameBorderSize)) + 'mm';

                    $("#framesMatSizePriceId1").html('');
                }

                if(topMatColr === "rgb(51, 51, 51)"){
                    $("#addColorThirdDivId").css({'background-color': 'rgb(216, 152, 178)'});
                    $("#thirdBorderDivId").css({'border': 'solid 25px rgb(216, 152, 178)'});
                    
                    $("#addColorThirdDivId").css({'background-color': 'rgb(216, 152, 178)'});
                    $("#thirdBorderDivId").css({'border': 'solid 25px rgb(216, 152, 178)'});
                    
                    $('#framesMatId3').html('Antique Rose');
                    $("#framesMatId3").css({'color': 'black'});
                    $("#framesMatSizeId3").html(' : 50mm');
    
                    $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
    
                    framingMatPriceCalculationComplete();
                }
                
                
                if(middleMatColr === "rgb(51, 51, 51)"){
                    $("#addColorSecondDivId").css({'background-color': 'rgb(124, 77, 85)'});
                    $("#secondBorderDivId").css({'border': 'solid 2.5px rgb(124, 77, 85)'});
                    
                    $("#addColorThirdDivId").css({'background-color': 'rgb(216, 152, 178)'});
                    $("#thirdBorderDivId").css({'border': 'solid 25px rgb(216, 152, 178)'});
                    
                    $('#framesMatId2').html('Wine');
                    $("#framesMatId2").css({'color': 'black'});
                    $("#framesMatSizeId2").html(' : 5mm');
    
                    $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
    
                    framingMatPriceCalculationComplete();
                }
                
                
                // if(bottomMatColr === "rgb(51, 51, 51)"){
                //     $("#addColorFirstDivId").css({'background-color': 'rgb(243, 226, 136)'});
                //     $("#borderimg1").css({'border': 'solid 2.5px rgb(243, 226, 136)'});
                // }

                framingMatPriceCalculationComplete();

                mat1st = 1;
                mat2nd = 1;
                mat3rd = 0;
                
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
            // $("#framesMatSizePriceId1").html('( $' + framingMatPriceCalculation() + ' )');
            }

            if (matSize == 'mat3') {
                
                checkMat1 = 0;
                checkMat2 = 0;
                checkMat3 = 1;
                
                $("#borderimg1").css({'padding': '3px'});
                $("#borderimg1").css({'background': 'white'});
                
                document.getElementById("middleMatFrameId").innerHTML = "Middle mat";
                
                // matFrameSizeFir = 0;
                // matFrameSizeSec = 0;
                // matFrameSizeThir = 0;
                
                
                mat1st = 1;
                mat2nd = 1;
                mat3rd = 1;
                $("#selectNoMat1").css({'display': 'block'});
                $("#selectNoMat2").css({'display': 'block'});
                $("#selectNoMat3").css({'display': 'block'});

                // document.getElementById("SelmatNo1").checked = true
                document.getElementById("SelmatNo3").checked = true;

                document.getElementById("matFrameSizeFirst").disabled = true;
                document.getElementById("matFrameSizeSecond").disabled = true;
                document.getElementById("matFrameSizeThird").disabled = true;

                $("#selectNoMat1").css({'backgroundColor': 'white'});
                $("#selectNoMat2").css({'backgroundColor': 'white'});
                $("#selectNoMat3").css({'backgroundColor': 'lightblue'});
                
                var topMatColr = $("#thirdBorderDivId").css("border-left-color");
                var middleMatColr = $("#secondBorderDivId").css("border-left-color");
                var bottomMatColr = $("#borderimg1").css("border-left-color");
                
                document.getElementById("matFrameSizeThird").disabled = false;
                
                if(topMatColr === "rgb(51, 51, 51)"){
                    $("#addColorThirdDivId").css({'background-color': 'rgb(216, 152, 178)'});
                    $("#thirdBorderDivId").css({'border': 'solid 25px rgb(216, 152, 178)'});
                    
                    $("#addColorThirdDivId").css({'background-color': 'rgb(216, 152, 178)'});
                    $("#thirdBorderDivId").css({'border': 'solid 25px rgb(216, 152, 178)'});
                    
                    $('#framesMatId3').html('Antique Rose');
                    $("#framesMatId3").css({'color': 'black'});
                    $("#framesMatSizeId3").html(' : 50mm');
    
                    $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
    
                    framingMatPriceCalculationComplete();
                }
                
                
                if(middleMatColr === "rgb(51, 51, 51)"){
                    $("#addColorSecondDivId").css({'background-color': 'rgb(124, 77, 85)'});
                    $("#secondBorderDivId").css({'border': 'solid 2.5px rgb(124, 77, 85)'});
                    
                    $("#addColorThirdDivId").css({'background-color': 'rgb(216, 152, 178)'});
                    $("#thirdBorderDivId").css({'border': 'solid 25px rgb(216, 152, 178)'});
                    
                    $('#framesMatId2').html('Wine');
                    $("#framesMatId2").css({'color': 'black'});
                    $("#framesMatSizeId2").html(' : 5mm');
    
                    $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
    
                    framingMatPriceCalculationComplete();
                }
                
                
                if(bottomMatColr === "rgb(51, 51, 51)"){
                    $("#addColorFirstDivId").css({'background-color': 'rgb(243, 226, 136)'});
                    $("#borderimg1").css({'border': 'solid 2.5px rgb(243, 226, 136)'});
                    
                    $("#addColorThirdDivId").css({'background-color': 'rgb(216, 152, 178)'});
                    $("#thirdBorderDivId").css({'border': 'solid 25px rgb(216, 152, 178)'});
                    
                    $('#framesMatId1').html('Dijon');
                    $("#framesMatId1").css({'color': 'black'});
                    $("#framesMatSizeId1").html(' : 5mm');
    
                    $("#framesMatSizePriceId1").html('( $' + framingMatPriceCalculation() + ' )');
    
                    framingMatPriceCalculationComplete();
                }
                
                matFrameSizeFir = 5;
                matFrameSizeSec = 5;
                matFrameSizeThir = 50;
                
                $("#matFrameSizeThird").val(50);
                $("#matFrameSizeSecond").val(5);
                $("#matFrameSizeFirst").val(5);
                
                $("#framesMatSizePriceId3").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId2").html('( $' + framingMatPriceCalculation() + ' )');
                $("#framesMatSizePriceId1").html('( $' + framingMatPriceCalculation() + ' )');
            }
            
            // framingMatPriceCalculation();
        });


        $("input[name='selectedMat']").change(function () {
            var subMatSize = $("input[name='selectedMat']:checked").val();


            if (subMatSize == 'selectMat1') {
                $("#selectNoMat1").css({'backgroundColor': 'lightblue'});
                $("#selectNoMat2").css({'backgroundColor': 'white'});
                $("#selectNoMat3").css({'backgroundColor': 'white'});

                document.getElementById("matFrameSizeFirst").disabled = false;
                document.getElementById("matFrameSizeSecond").disabled = true;
                document.getElementById("matFrameSizeThird").disabled = true;
            }

            if (subMatSize == 'selectMat2') {
                $("#selectNoMat1").css({'backgroundColor': 'white'});
                $("#selectNoMat2").css({'backgroundColor': 'lightblue'});
                $("#selectNoMat3").css({'backgroundColor': 'white'});

                document.getElementById("matFrameSizeFirst").disabled = true;
                document.getElementById("matFrameSizeSecond").disabled = false;
                document.getElementById("matFrameSizeThird").disabled = true;
            }

            if (subMatSize == 'selectMat3') {
                $("#selectNoMat1").css({'backgroundColor': 'white'});
                $("#selectNoMat2").css({'backgroundColor': 'white'});
                $("#selectNoMat3").css({'backgroundColor': 'lightblue'});

                document.getElementById("matFrameSizeFirst").disabled = true;
                document.getElementById("matFrameSizeSecond").disabled = true;
                document.getElementById("matFrameSizeThird").disabled = false;
            }
        });


        //expand all nav icons
        $("#all-nav").click(function () {
            $(".col-sm-5").addClass("col-sm-12");
            $(".col-sm-5").removeClass("col-sm-5");
            for (let i = 0; i < items.length; i++) {
                $("#" + items[i]).fadeIn();
                $("#" + items[i]).fadeIn("slow");
                $("#" + items[i]).fadeIn(3000);
            }

            // hide all-nav btn
            $("#all-nav").hide();

            // hide poster details sections
            $("#poster-detail").hide();
            $("#poster-just-canvas-section").hide();
            $("#poster-canvas-stretching-section").hide();
            $("#poster-framing-section").hide();
            $("#poster-acrylic-mount-section").hide();
            $("#poster-block-mount-section").hide();
            $(".for-want").hide();

            //set default poster preview size, border
            $(".p-content").css("width", "50%");
            $(".p-content").css("height", "50%");
            $(".p-content").css("border", "none");
            $(".p-content").css("padding", "0");
            $(".p-content").removeClass("mat-outline");
            $(".p-content").removeClass("mat-outline2");

            // hide all custom div
            $(".custom-size-div").hide();

            // checkbox tik null
            $(".cBox-custom-size").prop('checked', false);

            $(".comboFrames").val("Please choose category");

        });
    });

    $("#matNone").click(function () {
        $(".p-content").css({'position': 'relative', 'border': 'none'});
        $(".p-content").css("background", "none");
    })

    // onload function
    function loadJustprint() {
        $("#acrylicFooterImageId").css({'display': 'none'});
        $("#blockMountFooterImageId").css({'display': 'none'});
        $("#canvasStretchFooterImageId").css({'display': 'block'});

        var dorpDowmRatio = [];

        glassType = '2mm Clear Arcylic/Perspex';

        const urlParams = new URLSearchParams(window.location.search);
        
        if(urlParams.get('code') === "gettyimage"){
            imageUrl = urlParams.get('image')+"&k="+urlParams.get('k')+"&m="+urlParams.get('m')+"&s="+urlParams.get('s')+"&w="+urlParams.get('w')+"&h="+urlParams.get('h');
        }else{
            imageUrl = urlParams.get('image');
            imageCodeUrl = urlParams.get('code');
        }
        
        console.log("================");
        console.log(imageUrl);
        console.log("================");
        

        document.getElementById('itemAll1').innerHTML = imageCodeUrl;
        document.getElementById('itemAll2').innerHTML = imageCodeUrl;
        document.getElementById('itemAll3').innerHTML = imageCodeUrl;
        document.getElementById('itemAll4').innerHTML = imageCodeUrl;
        // document.getElementById('borderimg1').src="images/postereImage/"+imageUrl+".jpg";
        document.getElementById('borderimg1').src = imageUrl;


        $(".col-sm-12").addClass("col-sm-5");
        $(".col-sm-12").removeClass("col-sm-12");


        $("#poster-detail").hide();
        $("#poster-just-canvas-section").hide();
        $("#poster-canvas-stretching-section").show();
        // $("#poster-just-print").css({"border-style": "solid", "border-width":"2px 10px 3px 20px"});
        $("#poster-canvas-stretching").css({
            "border-style": "solid",
            "border-width": "2px 10px 3px 20px",
            "border-color": "whitesmoke"
        });

        // loadFrameblackAndWhite();

        // document.getElementsByClassName("imageclient1").innerHTML = text;

        // get image size
        var imgLoader = new Image();
        imgLoader.onload = function () {
            var height = imgLoader.height;
            var width = imgLoader.width;

            var divWidthHeight = document.getElementById("borderimg1");
            $('.poster-img-prew').css({'height': divWidthHeight.offsetWidth+ 'px'});

            drpDwnWid = width;
            drpDwnHei = height;

            if (width > height) {
                drpWidth1000 = 1000;
                drpWidth750 = 750;
                drpWidth500 = 500;
                drpWidth250 = 250;

                drpHeaight1000 = ((height / width) * 1000).toFixed(0);
                drpHeaight750 = ((height / width) * 750).toFixed(0);
                drpHeaight500 = ((height / width) * 500).toFixed(0);
                drpHeaight250 = ((height / width) * 250).toFixed(0);

                dorpDowmRatio.push({w: drpWidth1000, h: drpHeaight1000}, {
                    w: drpWidth750,
                    h: drpHeaight750
                }, {w: drpWidth500, h: drpHeaight500}, {w: drpWidth250, h: drpHeaight250});
            }

            if (width < height) {
                drpHeaight1000 = 1000;
                drpHeaight750 = 750;
                drpHeaight500 = 500;
                drpHeaight250 = 250;

                drpWidth1000 = ((width / height) * 1000).toFixed(0);
                drpWidth750 = ((width / height) * 750).toFixed(0);
                drpWidth500 = ((width / height) * 500).toFixed(0);
                drpWidth250 = ((width / height) * 250).toFixed(0);

                dorpDowmRatio.push({w: drpWidth1000, h: drpHeaight1000}, {
                    w: drpWidth750,
                    h: drpHeaight750
                }, {w: drpWidth500, h: drpHeaight500}, {w: drpWidth250, h: drpHeaight250});
            }

            if (width == height) {
                drpHeaight1000 = 1000;
                drpHeaight750 = 750;
                drpHeaight500 = 500;
                drpHeaight250 = 250;

                drpWidth1000 = 1000;
                drpWidth750 = 750;
                drpWidth500 = 500;
                drpWidth250 = 250;

                dorpDowmRatio.push({w: drpWidth1000, h: drpHeaight1000}, {
                    w: drpWidth750,
                    h: drpHeaight750
                }, {w: drpWidth500, h: drpHeaight500}, {w: drpWidth250, h: drpHeaight250});
            }

            document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + drpWidth1000 + 'x' + drpHeaight1000 + 'mm';
            $(".p-content").css({'width': (drpWidth1000 / 10) + '%', 'height': (drpHeaight1000 / 10) + '%'});

            tempWid = (Number(drpWidth1000) / 10);
            tempHei = (Number(drpHeaight1000) / 10);
            justPrintCostFraming = justPrintCal((Number(drpWidth1000) / 10), (Number(drpHeaight1000) / 10));
            $("#framingSizePriceId").html('$' + justPrintCostFraming.toFixed(2));

            justCanvasCostCanvasStertching = justCanvasCal((Number(drpWidth1000) / 10), (Number(drpHeaight1000) / 10));
            $("#canvasSizePriceId").html('$' + justCanvasCostCanvasStertching.toFixed(2));
            canvasStretchingPriceCalculation(Number(drpWidth1000) / 10, Number(drpHeaight1000) / 10);

            justPrintCostAcrylycMount = justPrintCal((Number(drpWidth1000) / 10), (Number(drpHeaight1000) / 10));
            $("#acrylicMountSizePriceId").html('$' + justPrintCostAcrylycMount.toFixed(2));
            acrylicMountPriceCalculation(Number(drpWidth1000) / 10, Number(drpHeaight1000) / 10);

            justPrintCostBlockycMount = justPrintCal((Number(drpWidth1000) / 10), (Number(drpHeaight1000) / 10));
            $("#blockMountSizePriceId").html('$' + justPrintCostBlockycMount.toFixed(2));
            blockMountPriceCalculation(Number(drpWidth1000) / 10, Number(drpHeaight1000) / 10);

            $(".pjp-td-poster-size, .pjcs-td-poster-size, .pcs-td-poster-size, .pams-td-poster-size, .pbms-td-poster-size, .fw-td-poster-size").html(drpWidth1000 + ' x ' + drpHeaight1000 + " mm");

            var selectDrpCanvasStretchin = document.getElementById("canvasStretchingDrpId");
            var selectDrpFraming = document.getElementById("FramingDrpId");
            var selectDrpAcrylicMount = document.getElementById("acrylicMountDrpId");
            var selectDrpBlockMount = document.getElementById("blockMountDrpId");

            for (var i = 0; i < dorpDowmRatio.length; i++) {
                var opt = dorpDowmRatio[i];
                var el = document.createElement("option");
                el.textContent = Math.round(opt.w) + " x " + Math.round(opt.h) + " mm";
                el.value = Math.round(opt.w) + "x" + Math.round(opt.h);

                var e2 = document.createElement("option");
                e2.textContent = Math.round(opt.w) + " x " + Math.round(opt.h) + " mm";
                e2.value = Math.round(opt.w) + "x" + Math.round(opt.h);

                var e3 = document.createElement("option");
                e3.textContent = Math.round(opt.w) + " x " + Math.round(opt.h) + " mm";
                e3.value = Math.round(opt.w) + "x" + Math.round(opt.h);

                var e4 = document.createElement("option");
                e4.textContent = Math.round(opt.w) + " x " + Math.round(opt.h) + " mm";
                e4.value = Math.round(opt.w) + "x" + Math.round(opt.h);

                selectDrpCanvasStretchin.appendChild(el);
                selectDrpFraming.appendChild(e2);
                selectDrpAcrylicMount.appendChild(e3);
                selectDrpBlockMount.appendChild(e4);
            }

        }

        imgLoader.src = imageUrl;

    }

    // load framiing images

    // create frame array

    // var blackAndWhite = [{image:'images/frames/blackAndWhite/1515408251_thumb.jpg',border:'images/frames/border/1515408251.png',code:'BW-1034',fprice:'0.55',thicknes:'35',fsize:'0'}
    //     , {image:'images/frames/blackAndWhite/1515408398_thumb.jpg',border:'images/frames/border/1515408398.png',code:'BW-1035',fprice:'0.55',thicknes:'69',fsize:'0'}
    //     ,{image:'images/frames/blackAndWhite/1515408640_thumb.jpg',border:'images/frames/border/1515408640.png',code:'BW-1036',fprice:'0.65',thicknes:'69',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515409328_thumb.jpg',border:'images/frames/border/1515409328.png',code:'BW-1014',fprice:'0.55',thicknes:'40',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515409411_thumb.jpg',border:'images/frames/border/1515409411.png',code:'BW-1015',fprice:'0.55',thicknes:'41',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515409506_thumb.jpg',border:'images/frames/border/1515409506.png',code:'BW-1010',fprice:'0.5',thicknes:'38',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515410898_thumb.jpg',border:'images/frames/border/1515410898.png',code:'BW-1007',fprice:'0.5',thicknes:'35',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515411016_thumb.jpg',border:'images/frames/border/1515411016.png',code:'BW-1008',fprice:'0.5',thicknes:'35',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515411132_thumb.jpg',border:'images/frames/border/1515411132.png',code:'BW-1016',fprice:'0.55',thicknes:'48',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515413116_thumb.jpg',border:'images/frames/border/1515413116.png',code:'BW-1029',fprice:'0.55',thicknes:'49',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515478012_thumb.jpg',border:'images/frames/border/1515478012.png',code:'BW-1013',fprice:'0.55',thicknes:'49',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515478081_thumb.jpg',border:'images/frames/border/1515478081.png',code:'BW-1020',fprice:'0.4',thicknes:'52',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515478146_thumb.jpg',border:'images/frames/border/1515478146.png',code:'BW-1021',fprice:'0.5',thicknes:'51',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515479578_thumb.jpg',border:'images/frames/border/1515479578.png',code:'BW-1018',fprice:'0.55',thicknes:'54',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515479662_thumb.jpg',border:'images/frames/border/1515479662.png',code:'BW-1028',fprice:'0.55',thicknes:'54',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515480070_thumb.jpg',border:'images/frames/border/1515480070.png',code:'BW-1026',fprice:'0.6',thicknes:'56',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515480150_thumb.jpg',border:'images/frames/border/1515480150.png',code:'BW-1027',fprice:'0.6',thicknes:'55',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515480786_thumb.jpg',border:'images/frames/border/1515480786.png',code:'BW-1022',fprice:'0.55',thicknes:'58',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515480856_thumb.jpg',border:'images/frames/border/1515480856.png',code:'BW-1023',fprice:'0.55',thicknes:'240',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515480929_thumb.jpg',border:'images/frames/border/1515480929.png',code:'BW-1009',fprice:'0.6',thicknes:'60',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515482481_thumb.jpg',border:'images/frames/border/1515482481.png',code:'BW-1041',fprice:'0.75',thicknes:'69',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515482546_thumb.jpg',border:'images/frames/border/1515482546.png',code:'BW-1005',fprice:'0.55',thicknes:'35',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515482644_thumb.jpg',border:'images/frames/border/1515482644.png',code:'BW-1006',fprice:'0.55',thicknes:'35',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515484258_thumb.jpg',border:'images/frames/border/1515484258.png',code:'BW-1019',fprice:'0.55',thicknes:'64',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515496601_thumb.jpg',border:'images/frames/border/1515496601.png',code:'BW-1030',fprice:'0.7',thicknes:'67',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515496652_thumb.jpg',border:'images/frames/border/1515496652.png',code:'BW-1031',fprice:'0.7',thicknes:'68',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515496797_thumb.jpg',border:'images/frames/border/1515496797.png',code:'BW-1032',fprice:'0.65',thicknes:'67',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515496840_thumb.jpg',border:'images/frames/border/1515496840.png',code:'BW-1033',fprice:'0.65',thicknes:'67',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515497449_thumb.jpg',border:'images/frames/border/1515497449.png',code:'BW-1011',fprice:'0.6',thicknes:'69',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515497520_thumb.jpg',border:'images/frames/border/1515497520.png',code:'BW-1012',fprice:'0.6',thicknes:'35',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515497576_thumb.jpg',border:'images/frames/border/1515497576.png',code:'BW-1040',fprice:'0.75',thicknes:'71',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515497980_thumb.jpg',border:'images/frames/border/1515497980.png',code:'BW-1017',fprice:'0.65',thicknes:'73',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515498716_thumb.jpg',border:'images/frames/border/1515498716.png',code:'BW-1024',fprice:'0.6',thicknes:'46',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515498832_thumb.jpg',border:'images/frames/border/1515498832.png',code:'BW-1025',fprice:'0.6',thicknes:'78',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1515498890_thumb.jpg',border:'images/frames/border/1515498890.png',code:'BW-1038',fprice:'0.7',thicknes:'71',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1560219601_thumb.jpg',border:'images/frames/border/1511359632.png',code:'BW-1001',fprice:'0.4',thicknes:'35',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1560219651_thumb.jpg',border:'images/frames/border/1515409889.png',code:'BW-1003',fprice:'0.5',thicknes:'35',fsize:'0'},
    //     {image:'images/frames/blackAndWhite/1560219693_thumb.jpg',border:'images/frames/border/1515410237.png',code:'BW-1004',fprice:'0.5',thicknes:'35',fsize:'0'}]

    function loadFrameFirstTime() {

        var imag = document.getElementById('frameCardId');

        $("#frameCardId").html("");

        var frameVal = document.getElementById("frameId5").innerHTML;
        console.log(frameVal);
        $("#frameId5").css("background","#167AC6");
        $.ajax({
            url: 'loadFrame.php?frameCat=' + frameVal,
            type: 'get',
            dataType: 'JSON',
            success: function (response) {
                var len = response.length;
                for (var i = 0; i < len; i++) {

                    var mainDiv = document.createElement("div");
                    mainDiv.setAttribute("class", "column zoom");

                    var subDiv = document.createElement("div");
                    subDiv.setAttribute("class", "card");
                    subDiv.setAttribute("style", "width: 135px;height: auto");

                    var x = document.createElement("IMG");
                    x.setAttribute("src", "admin-log/uploads/" + response[i].thumb);
                    x.setAttribute("style", "width: 100%;display: block;");
                    x.setAttribute("class", "imageclient1");
                    x.setAttribute("alt", "Image");

                    var y = document.createElement("input");
                    y.setAttribute("style", "color: red");
                    y.setAttribute("value", "admin-log/uploads/" + response[i].pic);
                    y.setAttribute("class", "valIdFrame");

                    var z = document.createElement("input");
                    z.setAttribute("style", "color: red");
                    z.setAttribute("value", response[i].code);
                    z.setAttribute("class", "valIdFrameCode");

                    imag.appendChild(mainDiv).appendChild(subDiv).appendChild(x).appendChild(y).appendChild(z);

                    var framePriceDet = document.createElement("input");
                    framePriceDet.setAttribute("style", "color: red");
                    framePriceDet.setAttribute("value", response[i].price);
                    framePriceDet.setAttribute("class", "valIdFramePrice");

                    imag.appendChild(mainDiv).appendChild(subDiv).appendChild(x).appendChild(y).appendChild(framePriceDet);

                    var frameThink = document.createElement("input");
                    frameThink.setAttribute("style", "color: red");
                    frameThink.setAttribute("value", response[i].ft);
                    frameThink.setAttribute("class", "valIdFrameThink");

                    imag.appendChild(mainDiv).appendChild(subDiv).appendChild(x).appendChild(y).appendChild(frameThink);

                    var frameSize = document.createElement("input");
                    frameSize.setAttribute("style", "color: red");
                    frameSize.setAttribute("value", response[i].frame_size);
                    frameSize.setAttribute("class", "valIdFrameSize");

                    imag.appendChild(mainDiv).appendChild(subDiv).appendChild(x).appendChild(y).appendChild(frameSize);

                    var frameCodeDet = document.createElement("input");
                    frameCodeDet.setAttribute("value", "code : " + response[i].code);
                    frameCodeDet.setAttribute("class", "frame-details");
                    frameCodeDet.setAttribute("readonly", "true");

                    imag.appendChild(mainDiv).appendChild(frameCodeDet);
                }
                addFrame();
            }
        });
    }

    function loadFrame(frameVal,frameId) {
        var items = document.querySelectorAll("#frameCategory a"),
            tab = [], index, frameVal;

        // add values to the array
        for (var i = 0; i < items.length; i++) {
            tab.push(items[i].getAttribute('id'));
        }

        var imag = document.getElementById('frameCardId');
        // get selected element index
                $("#frameCardId").html("");


                for (var x = 0; x < tab.length; x++) {
                    if(frameId == tab[x]){
                        $("#"+frameId).css("background","#167AC6");
                    }else{
                        $("#"+tab[x]).css("background","black");
                    }
                }

                $.ajax({
                    url: 'loadFrame.php?frameCat=' + frameVal,
                    type: 'get',
                    dataType: 'JSON',
                    success: function (response) {
                        var len = response.length;
                        for (var i = 0; i < len; i++) {

                            var mainDiv = document.createElement("div");
                            mainDiv.setAttribute("class", "column zoom");

                            var subDiv = document.createElement("div");
                            subDiv.setAttribute("class", "card");
                            subDiv.setAttribute("style", "width: 135px;height: auto");

                            var x = document.createElement("IMG");
                            x.setAttribute("src", "admin-log/uploads/" + response[i].thumb);
                            x.setAttribute("style", "width: 100%;display: block;");
                            x.setAttribute("class", "imageclient1");
                            x.setAttribute("alt", "Image");

                            var y = document.createElement("input");
                            y.setAttribute("style", "color: red");
                            y.setAttribute("value", "admin-log/uploads/" + response[i].pic);
                            y.setAttribute("class", "valIdFrame");

                            var z = document.createElement("input");
                            z.setAttribute("style", "color: red");
                            z.setAttribute("value", response[i].code);
                            z.setAttribute("class", "valIdFrameCode");

                            imag.appendChild(mainDiv).appendChild(subDiv).appendChild(x).appendChild(y).appendChild(z);

                            var framePriceDet = document.createElement("input");
                            framePriceDet.setAttribute("style", "color: red");
                            framePriceDet.setAttribute("value", response[i].price);
                            framePriceDet.setAttribute("class", "valIdFramePrice");

                            imag.appendChild(mainDiv).appendChild(subDiv).appendChild(x).appendChild(y).appendChild(framePriceDet);

                            var frameThink = document.createElement("input");
                            frameThink.setAttribute("style", "color: red");
                            frameThink.setAttribute("value", response[i].ft);
                            frameThink.setAttribute("class", "valIdFrameThink");

                            imag.appendChild(mainDiv).appendChild(subDiv).appendChild(x).appendChild(y).appendChild(frameThink);

                            var frameSize = document.createElement("input");
                            frameSize.setAttribute("style", "color: red");
                            frameSize.setAttribute("value", response[i].frame_size);
                            frameSize.setAttribute("class", "valIdFrameSize");

                            imag.appendChild(mainDiv).appendChild(subDiv).appendChild(x).appendChild(y).appendChild(frameSize);

                            var frameCodeDet = document.createElement("input");
                            frameCodeDet.setAttribute("value", "code : " + response[i].code);
                            frameCodeDet.setAttribute("class", "frame-details");
                            frameCodeDet.setAttribute("readonly", "true");

                            imag.appendChild(mainDiv).appendChild(frameCodeDet);
                        }

                        addFrame();

                    }
                });
        //     }
        // }
    }

    // function loadFrameblackAndWhite() {
    //
    //     // $("#blackAndWhiteFrameId").css("background","linear-gradient( 90deg, rgba(2, 0, 36, 1) 0%, rgba(67, 139, 169, 1) 0%, rgba(45, 93, 125, 1) 0%, rgba(67, 139, 169, 1) 6%, rgba(0, 212, 255, 1) 100% )");
    //     $("#blackAndWhiteFrameId").css("background","#167AC6");
    //     $("#boxFrameId").css("background","black");
    //     $("#budgetSyntheticFrameId").css("background","black");
    //     $("#ColorFrameId").css("background","black");
    //     $("#distressedFrameId").css("background","black");
    //     $("#modernGoldFrameId").css("background","black");
    //     $("#modernTimberFrameId").css("background","black");
    //     $("#oakLikeTimberFrameId").css("background","black");
    //     $("#ornateGoldFrameId").css("background","black");
    //     $("#traditionalTimberFrameId").css("background","black");
    //
    //     $(".column").css("display","none");
    //
    //     blackAndWhite.sort((a,b) => (a.code > b.code) ? 1 : ((b.code > a.code) ? -1 : 0));
    //
    //     var imag = document.getElementById('frameCardId');
    //     for (i = 0; i < blackAndWhite.length; i++) {
    //
    //         var mainDiv = document.createElement("div");
    //         mainDiv.setAttribute("class", "column zoom");
    //
    //         var subDiv = document.createElement("div");
    //         subDiv.setAttribute("class", "card");
    //         subDiv.setAttribute("style", "width: 135px;height: auto");
    //
    //         var x = document.createElement("IMG");
    //         x.setAttribute("src", blackAndWhite[i].image);
    //         x.setAttribute("style", "width: 100%;display: block;");
    //         x.setAttribute("class", "imageclient1");
    //         x.setAttribute("alt", "Image");
    //
    //         var y = document.createElement("input");
    //         y.setAttribute("style", "color: red");
    //         y.setAttribute("value", blackAndWhite[i].border);
    //         y.setAttribute("class", "valIdFrame");
    //
    //         var z = document.createElement("input");
    //         z.setAttribute("style", "color: red");
    //         z.setAttribute("value", blackAndWhite[i].code);
    //         z.setAttribute("class", "valIdFrameCode");
    //
    //         imag.appendChild(mainDiv).appendChild(subDiv).appendChild(x).appendChild(y).appendChild(z);
    //
    //         var framePriceDet = document.createElement("input");
    //         framePriceDet.setAttribute("style", "color: red");
    //         framePriceDet.setAttribute("value", blackAndWhite[i].fprice);
    //         framePriceDet.setAttribute("class", "valIdFramePrice");
    //
    //         imag.appendChild(mainDiv).appendChild(subDiv).appendChild(x).appendChild(y).appendChild(framePriceDet);
    //
    //         var frameThink = document.createElement("input");
    //         frameThink.setAttribute("style", "color: red");
    //         frameThink.setAttribute("value", blackAndWhite[i].thicknes);
    //         frameThink.setAttribute("class", "valIdFrameThink");
    //
    //         imag.appendChild(mainDiv).appendChild(subDiv).appendChild(x).appendChild(y).appendChild(frameThink);
    //
    //         var frameSize = document.createElement("input");
    //         frameSize.setAttribute("style", "color: red");
    //         frameSize.setAttribute("value", blackAndWhite[i].fsize);
    //         frameSize.setAttribute("class", "valIdFrameSize");
    //
    //         imag.appendChild(mainDiv).appendChild(subDiv).appendChild(x).appendChild(y).appendChild(frameSize);
    //
    //         var frameCodeDet = document.createElement("input");
    //         frameCodeDet.setAttribute("value", "code : "+blackAndWhite[i].code);
    //         frameCodeDet.setAttribute("class", "frame-details");
    //         frameCodeDet.setAttribute("readonly", "true");
    //
    //         imag.appendChild(mainDiv).appendChild(frameCodeDet);
    //
    //
    //     }
    //     addFrame();
    // }

    function addFrame() {

        var items = document.querySelectorAll("#frameCardId div div IMG"),
            tab = [], index;

        // add values to the array
        for (var i = 0; i < items.length; i++) {
            tab.push(items[i].getAttribute('src'));
        }

        // get selected element index
        for (var i = 0; i < items.length; i++) {
            items[i].onclick = function () {

                index = tab.indexOf(this.getAttribute('src'));

                frameThicknesSize = document.getElementsByClassName("valIdFrameSize")[index].value;
               
                frameBorderSize = frameThicknesSize * 2;
                
                // var borderWidthFrame = 94*1000 / (Number(drpWidth1000 / 10) * frameThicknesSize);
                
                var borderWidthFrame = ((frameThicknesSize * 200 / 10) / (Number(drpWidth1000 / 10))) * 2;
                
                frameSel = true;

                $(".p-content").css({
                    'border': borderWidthFrame+'px solid transparent',
                    '-webkit-border-image': 'url(' + document.getElementsByClassName("valIdFrame")[index].value + ') ' + document.getElementsByClassName("valIdFrameThink")[index].value + ' round',
                    '-o-border-image': 'url(' + document.getElementsByClassName("valIdFrame")[index].value + ') ' + document.getElementsByClassName("valIdFrameThink")[index].value + ' round',
                    'border-image': 'url(' + document.getElementsByClassName("valIdFrame")[index].value + ') ' + document.getElementsByClassName("valIdFrameThink")[index].value + ' round'
                });

                $(".selectFrame").html(document.getElementsByClassName("valIdFrameCode")[index].value);

                frameCodePrice = Number(document.getElementsByClassName("valIdFramePrice")[index].value);
                $("#framesPriceId").html('$' + frameCal(frameCodePrice, drpWidth1000 / 10, drpHeaight1000 / 10));

                justPrintCostFraming = justPrintCal(Number(drpWidth1000 / 10), Number(drpHeaight1000 / 10));
                $("#framingSizePriceId").html('$' + justPrintCostFraming.toFixed(2));


                document.getElementById('canvasStretchingDrpId').selectedIndex = 0;
                document.getElementById('acrylicMountDrpId').selectedIndex = 0;
                document.getElementById('FramingDrpId').selectedIndex = 0;
                document.getElementById('blockMountDrpId').selectedIndex = 0;

                document.getElementById('fw-td-poster-size-id').innerHTML = drpWidth1000 + ' X ' + drpHeaight1000 + ' mm';
                document.getElementById('framingSize').innerHTML = drpWidth1000 + ' X ' + drpHeaight1000 + ' mm';


                document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(drpWidth1000) + Number(frameThicknesSize) * 2) + 'x' + (Number(drpHeaight1000) + Number(frameThicknesSize) * 2) + 'mm';
                $("#finalSizeImageId").css({'margin-top': '20px'});

                glassPriceCal(glassType, Number(drpWidth1000 / 10), Number(drpHeaight1000 / 10));

                swal("2nd step", "Please select size...", "success");

                framingAdd = 1;

                if (selectedWidth == undefined && selectedHeight == undefined) {
                    startChangeSize();
                }

                $("#borderimg1").css({'box-shadow': 'none'});
                $(".p-content").css({'box-shadow': '2px 2px 5px 0px rgba(0,0,0,0.48)'});
                $(".p-content").css("width", drpWidth1000 / 10 + "%");
                $(".p-content").css("height", drpHeaight1000 / 10 + "%");
                
                $('#customWidthId1').val(50);
                $('#customHeightId1').val(50);
                
                $(".cBox-custom-size").prop('checked', false);
                
                $(".custom-size-div").hide();
                
                document.getElementById("FramingDrpId").disabled = false;
                document.getElementById("FramingDrpId").style.cursor = "default";
                document.getElementById("FramingDrpId").style.backgroundColor = "white";

                framingPriceCalculation();

            };
        }
    }

    $('.s-dropdown').change(function () {
        $('.selectGlass').html($('.s-dropdown').val());

        glassType = $('.s-dropdown').val();
        glassPriceCal(glassType, tempWid, tempHei);

        framingPriceCalculation();
    });
    
    $('.select-hanging-system').change(function () {
        
        if($(".select-hanging-system").val() !== "none"){
            hangingSystemAdd = 1;
        }else{
            hangingSystemAdd = 0;
        }
    });

    // Acrylic mount change backing color and border size
    $('.select-border-size').change(function () {
        if (selectedWidth3 == undefined && selectedHeight3 == undefined) {
            startChangeSize();
        }
        acrylicBorderSize = $(".select-border-size").val();

        console.log(acrylicBackingColor);
        
        console.log(acrylicBorderSize);

        if (acrylicBorderSize != 0) {
            if (acrylicBackingColor == undefined) {
                acrylicBackingColor = 'black';
                $(".select-backing-color").val('black');
            } else {
                $(".select-backing-color").val(acrylicBackingColor);
            }
            acrylicMountAdd = 1;
            $(".p-content").css({
                'position': 'relative',
                '-moz-box-shadow': '1px 2px 4px ' + acrylicBackingColor,
                '-webkit-box-shadow': '1px 2px 4px ' + acrylicBackingColor,
                'box-shadow': '1px 2px 4px ' + acrylicBackingColor,
                'padding': acrylicBorderSize / 2 + 'px',
                'background': acrylicBackingColor
            });
            
            $(".p-content").removeClass("pContentAcrylicNoBorder");

            $(".p-content").addClass("pContentAcrylic");
            $('.acrylicBackingColor').html(acrylicBackingColor);
        } else {
            acrylicMountAdd = 0;
            $(".p-content").css({
                'position': 'relative',
                '-moz-box-shadow': 'none',
                '-webkit-box-shadow': 'none',
                'box-shadow': 'none',
                'padding': 'none',
                'background': 'none',
                'border':'none'
            });
            
            $(".p-content").addClass("pContentAcrylic");
            $(".p-content").addClass("pContentAcrylicNoBorder");
            
            

            // $(".p-content").removeClass("pContentAcrylic");

            $('.select-backing-color').val('none');
            $('.acrylicBackingColor').html('none');
            $('.acrylicBackingColor').css({'color': 'black'});
        }

        $('.acrylicBorder').html(acrylicBorderSize + ' mm');

        document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(drpWidth1000) + (Number(acrylicBorderSize) * 2)) + 'x' + (Number(drpHeaight1000) + (Number(acrylicBorderSize) * 2)) + 'mm';
        $('#finalSizeImageId').css({'marginTop': acrylicBorderSize / 2 + 'px'});

        justPrintCostAcrylycMount = justPrintCal(Number(drpWidth1000 / 10), Number(drpHeaight1000 / 10));
        $("#acrylicMountSizePriceId").html('$' + justPrintCostAcrylycMount.toFixed(2));
        acrylicMountPriceCalculation(Number(drpWidth1000 / 10), Number(drpHeaight1000 / 10));

        $("#acrylicMountSize").html(drpWidth1000 + 'x' + drpHeaight1000 + 'mm');

        document.getElementById('acrylicMountDrpId').selectedIndex = 0;
    });

    $('.select-backing-color').change(function () {
        
        $(".p-content").removeClass("pContentAcrylicNoBorder");
        
        if (selectedWidth3 == undefined && selectedHeight3 == undefined) {
            startChangeSize();
        }
        acrylicBackingColor = $(".select-backing-color").val();

        if (acrylicBorderSize == 0) {
            acrylicBorderSize = 50;
            $(".select-border-size").val(50);
        }
        
         $('.pContentAcrylic').css({'border': 'none'});
         
         console.log(acrylicBackingColor);
        


        if (acrylicBackingColor != 'none') {
            acrylicMountAdd = 1;
            $(".p-content").css({
                'position': 'relative',
                '-moz-box-shadow': '1px 2px 4px ' + acrylicBackingColor,
                '-webkit-box-shadow': '1px 2px 4px ' + acrylicBackingColor,
                'box-shadow': '1px 2px 4px ' + acrylicBackingColor,
                'padding': acrylicBorderSize / 2 + 'px',
                'background': acrylicBackingColor
            });

            $(".p-content").addClass("pContentAcrylic");
            $('.acrylicBorder').html(acrylicBorderSize + ' mm');
            $('.acrylicBackingColor').html(acrylicBackingColor);
            $('.acrylicBackingColor').css({'color': acrylicBackingColor});
        } else {
            acrylicMountAdd = 0;
            acrylicBorderSize = 0;
            $(".p-content").css({
                'position': 'relative',
                '-moz-box-shadow': 'none',
                '-webkit-box-shadow': 'none',
                'box-shadow': 'none',
                'padding': 'none',
                'background': 'none'
            });

            $('.select-backing-color').val('none');
            $('.acrylicBackingColor').html('none');

            $('.select-border-size').val(0);
            $(".p-content").removeClass("pContentAcrylic");

            $('.acrylicBorder').html(0 + ' mm');
            $('.acrylicBackingColor').html(acrylicBackingColor);
            $('.acrylicBackingColor').css({'color': 'black'});
        }
        
        if(acrylicBackingColor === "white"){
            console.log("============================");
            $('.pContentAcrylic').css({'border': 'solid 1px black'});
            $('.pContentAcrylic').css({'background': 'none'});
            
        }
        
        if(acrylicBackingColor === "whitesmoke"){
            $('.pContentAcrylic').css({'border': 'solid 1px black'});
        }
        
        if(acrylicBackingColor === "#ECEAEB"){
            $('.pContentAcrylic').css({'border': 'solid 1px black'});
        }

        document.getElementById('finalSizeImageId').innerHTML = 'final size : ' + (Number(drpWidth1000) + (Number(acrylicBorderSize) * 2)) + 'x' + (Number(drpHeaight1000) + (Number(acrylicBorderSize) * 2)) + 'mm';
        $('#finalSizeImageId').css({'marginTop': '25px'});

        justPrintCostAcrylycMount = justPrintCal(Number(drpWidth1000 / 10), Number(drpHeaight1000 / 10));
        $("#acrylicMountSizePriceId").html('$' + justPrintCostAcrylycMount.toFixed(2));
        acrylicMountPriceCalculation(Number(drpWidth1000 / 10), Number(drpHeaight1000 / 10));

        $("#acrylicMountSize").html(drpWidth1000 + 'x' + drpHeaight1000 + 'mm');

        document.getElementById('acrylicMountDrpId').selectedIndex = 0;
        countBackingClr++;

        if (countBackingClr == 1) {
            swal("2nd step", "Please select Border size...", "success");
        }
    });
    
    $('.select-hanging-system').change(function () {
        acrylicHangingSystem = $(".select-hanging-system").val();
        
        document.getElementById('acrylicMountHangingSystem').innerHTML = acrylicHangingSystem;
    });


    // Block mount change lamination and edge type
    $('.block-mount-lamination').change(function () {
        $('.blockMountLam').html($(".block-mount-lamination").val());
    });

    $('.block-mount-edge-type').change(function () {
        $('.blockMountEd').html($(".block-mount-edge-type").val());

        if ($(".block-mount-edge-type").val() != 'none') {
            blockMountAdd = 1;
        } else {
            blockMountAdd = 0;
        }
    });


    // canvas stretching change Timber size and edge type
    $('.select-edgeType-canvas').change(function () {
        if (selectedWidth2 == undefined && selectedHeight2 == undefined) {
            startChangeSize();
        }
        $('.selectEdgeTypeCanvas').html($(".select-edgeType-canvas").val());

        canvasStretColor = $(".select-edgeType-canvas").val();

        if (canvasStetTimberSize == undefined) {
            $(".timberSizeCanvasSretching").val(20);
            $('.selectTimberSizeCanvas').html(20 + " mm");
            canvasStetTimberSize = 20 / 10;
        }

        if (canvasStetTimberSize == 0) {
            $(".timberSizeCanvasSretching").val(20);
            $('.selectTimberSizeCanvas').html(20 + " mm");
            canvasStetTimberSize = 20 / 10;
        }

        if (canvasStretColor != 'none') {
            canvasStretchingAdd = 1;

            $(".timberSizeCanvasSretching").val(20);
            $('.selectTimberSizeCanvas').html(20 + " mm");
            canvasStetTimberSize = 20 / 10;

            if (canvasStretColor != 'clear') {
                countEdgeTypeClr++;
                if (countEdgeTypeClr == 1) {
                    swal("2nd step", "Please select Timber size...", "success");
                }
                $(".p-content").css({
                    'position': 'relative',
                    '-moz-box-shadow': canvasStetTimberSize + 'px ' + canvasStetTimberSize + 'px 3px ' + canvasStretColor,
                    '-webkit-box-shadow': canvasStetTimberSize + 'px ' + canvasStetTimberSize + 'px 3px ' + canvasStretColor,
                    'box-shadow': canvasStetTimberSize + 'px ' + canvasStetTimberSize + 'px 3px ' + canvasStretColor,
                    'padding': 0 + 'px',
                    'background': canvasStretColor
                });
            } else {

                swal("special note", "Please enter your favourite color in to the special instruction and select timber size...", "success");
                $(".p-content").css({
                    'position': 'relative',
                    '-moz-box-shadow': 'none',
                    '-webkit-box-shadow': 'none',
                    'box-shadow': 'none',
                    'padding': 0 + 'px',
                    'background': 'none'
                });
            }

        } else {
            canvasStretchingAdd = 0;
            $(".timberSizeCanvasSretching").val(0);
            $('.selectTimberSizeCanvas').html("none");

            $(".p-content").css({
                'position': 'relative',
                '-moz-box-shadow': 'none',
                '-webkit-box-shadow': 'none',
                'box-shadow': 'none',
                'padding': 0 + 'px',
                'background': 'none'
            });
        }
    });

    $('.timberSizeCanvasSretching').change(function () {
        if (selectedWidth2 == undefined && selectedHeight2 == undefined) {
            startChangeSize();
        }
        $('.selectTimberSizeCanvas').html($(".timberSizeCanvasSretching").val() + " mm");

        canvasStetTimberSize = $(".timberSizeCanvasSretching").val() / 10;

        if (canvasStretColor == undefined) {
            $(".select-edgeType-canvas").val('black');
            $('.selectEdgeTypeCanvas').html('black');
            canvasStretColor = 'black';
        }

        if (canvasStretColor == 'none') {
            $(".select-edgeType-canvas").val('black');
            $('.selectEdgeTypeCanvas').html('black');
            canvasStretColor = 'black';
        }

        console.log(canvasStetTimberSize);

        if (canvasStetTimberSize != 0) {
            $(".select-edgeType-canvas").val(canvasStretColor);
            $('.selectEdgeTypeCanvas').html(canvasStretColor);
            canvasStretchingAdd = 1;
            $(".p-content").css({
                'position': 'relative',
                '-moz-box-shadow': canvasStetTimberSize + 'px ' + canvasStetTimberSize + 'px 3px ' + canvasStretColor,
                '-webkit-box-shadow': canvasStetTimberSize + 'px ' + canvasStetTimberSize + 'px 3px ' + canvasStretColor,
                'box-shadow': canvasStetTimberSize + 'px ' + canvasStetTimberSize + 'px 3px ' + canvasStretColor,
                'padding': 0 + 'px',
                'background': canvasStretColor
            });

        } else {
            $(".select-edgeType-canvas").val('none');
            $('.selectEdgeTypeCanvas').html('none');
            $('.selectTimberSizeCanvas').html("none");
            canvasStretchingAdd = 0;
            $(".p-content").css({
                'position': 'relative',
                '-moz-box-shadow': 'none',
                '-webkit-box-shadow': 'none',
                'box-shadow': 'none',
                'padding': 0 + 'px',
                'background': 'none'
            });
        }
    });


    // save data in session

    $("#canvasStretchingAddCartBtn").click(function () {
        if (canvasStretchingAdd == 1) {
            console.log("working canvas");
            var size = document.getElementById('canvasSize').innerHTML + ' [ ' + document.getElementById('canvasSizePriceId').innerHTML + ' ] ';
            var edgeType = document.getElementById('canvasEdgeTypeId').innerHTML;
            var timberSize = document.getElementById('canvasTimberSizeId').innerHTML;
            var totalPrice = document.getElementById('canvasStretchingTotalPriceId').innerHTML;
            var specialNote = document.getElementById('canvasStretchingSpecialNote').value;

            if (specialNote == '') {
                specialNote = 'no special instruction';
            }

            var httpRequest = new XMLHttpRequest();

            httpRequest.onreadystatechange = function () {
                if (httpRequest.readyState === 4 & httpRequest.status === 200) {
                    window.location.href = 'cart.php';
                }
            };

            httpRequest.open('GET', 'addCart.php?action=addCanvas&product=canvas stretching&qty=1&itemCode=' + imageCodeUrl + '&imageSize=' + size + '&imageEdge=' + edgeType + '&imageTimberSize=' + timberSize + '&tPrice=' + totalPrice + '&imageSpecialNote=' + specialNote + '&imgUrl=' + imageUrl, true);

            httpRequest.send();
        } else {
            swal("warning", "Please select Edge type & Timber size...", "warning");
        }
    });

    $("#framingAddCartBtn").click(function () {
        if (framingAdd == 1) {
            console.log("working framing");
            var size = document.getElementById('framingSize').innerHTML + ' [ ' + document.getElementById('framingSizePriceId').innerHTML + ' ] ';
            console.log(size);
            var frameCode = document.getElementById('framesCodeId').innerHTML + ' [ ' + document.getElementById('framesPriceId').innerHTML + ' ] ';
            console.log(frameCode);
            var matColor = document.getElementById('framesMatId1').innerHTML + " " + document.getElementById('framesMatSizeId1').innerHTML + document.getElementById('framesMatSizePriceId1').innerHTML;
            var matColor2 = document.getElementById('framesMatId2').innerHTML + " " + document.getElementById('framesMatSizeId2').innerHTML + document.getElementById('framesMatSizePriceId2').innerHTML;
            var matColor3 = document.getElementById('framesMatId3').innerHTML + " " + document.getElementById('framesMatSizeId3').innerHTML + document.getElementById('framesMatSizePriceId3').innerHTML;
            console.log(matColor);
            var glass = document.getElementById('framingGlassId').innerHTML + ' [ ' + document.getElementById('framingGlassPriceId').innerHTML + ' ] ';
            console.log(glass);
            var totalPrice = document.getElementById('framingTotalPriceId').innerHTML;
            console.log(totalPrice);

            var specialNote = document.getElementById('framindSpecialInstructionId').value;
            if (specialNote == '') {
                specialNote = 'no special instruction';
            }

            var httpRequest = new XMLHttpRequest();

            httpRequest.onreadystatechange = function () {
                if (httpRequest.readyState === 4 & httpRequest.status === 200) {
                    window.location.href = 'cart.php';
                }
            };

            httpRequest.open('GET', 'addCart.php?action=addFraming&product=framing&qty=1&itemCode=' + imageCodeUrl + '&imageSize=' + size + '&imageFrame=' + frameCode + '&imageMat=' + matColor + '&imageMat2=' + matColor2 + '&imageMat3=' + matColor3 + '&imageGlass=' + glass + '&tPrice=' + totalPrice + '&imageSpecialNote=' + specialNote  + '&imgUrl=' + imageUrl, true);

            httpRequest.send();
        } else {
            swal("warning", "Please select Frame...", "warning");
        }

    });

    $("#acrylicMountAddCartBtn").click(function () {

        if (acrylicMountAdd == 1 && hangingSystemAdd == 1) {
            console.log("working acrylic mount");
            var size = document.getElementById('acrylicMountSize').innerHTML + ' [ ' + document.getElementById('acrylicMountSizePriceId').innerHTML + ' ] ';
            var backingColor = document.getElementById('acrylicMountBakingCollor').innerHTML;
            var border = document.getElementById('acrylicMountBorder').innerHTML;
            var hangingSys = document.getElementById('acrylicMountHangingSystem').innerHTML;
            var totalPrice = document.getElementById('acrylicMountTotalPriceId').innerHTML;

            var specialNote = document.getElementById('acrylicMountSpecialNoteId').value;
            if (specialNote == '') {
                specialNote = 'no special instruction';
            }

            var httpRequest = new XMLHttpRequest();

            httpRequest.onreadystatechange = function () {
                if (httpRequest.readyState === 4 & httpRequest.status === 200) {
                    window.location.href = 'cart.php';
                }
            };

            httpRequest.open('GET', 'addCart.php?action=addAcrylicMount&product=acrylic mount&qty=1&itemCode=' + imageCodeUrl + '&imageSize=' + size + '&imageBakingColor=' + backingColor + '&imageBorder=' + border + '&tPrice=' + totalPrice + '&imageSpecialNote=' + specialNote + '&imgUrl=' + imageUrl + '&hangingSystem=' + hangingSys, true);

            httpRequest.send();
        } else {
            swal("warning", "Please select Backing color, Border size & Hanging System...", "warning");
        }
    });

    $("#blockMountAddCartBtn").click(function () {
        if (blockMountAdd == 1) {
            console.log("working block mount");
            var size = document.getElementById('blockMountSize').innerHTML + ' [ ' + document.getElementById('blockMountSizePriceId').innerHTML + ' ] ';
            var blockLamination = document.getElementById('blockMountLamination').innerHTML;
            var blockEdgeType = document.getElementById('blockMountEdgeType').innerHTML;
            var totalPrice = document.getElementById('blockMountSizeTotalPriceId').innerHTML;

            var specialNote = document.getElementById('blockMountSpecialNoteId').value;
            if (specialNote == '') {
                specialNote = 'no special instruction';
            }

            var httpRequest = new XMLHttpRequest();

            httpRequest.onreadystatechange = function () {
                if (httpRequest.readyState === 4 & httpRequest.status === 200) {
                    window.location.href = 'cart.php';
                }
            };

            httpRequest.open('GET', 'addCart.php?action=addBlockMount&product=block mount&qty=1&itemCode=' + imageCodeUrl + '&imageSize=' + size + '&imageLamination=' + blockLamination + '&imageBlockEdge=' + blockEdgeType + '&tPrice=' + totalPrice + '&imageSpecialNote=' + specialNote + '&imgUrl=' + imageUrl, true);

            httpRequest.send();
        } else {
            swal("warning", "Please select Edge type...", "warning");
        }
    });

    function startChangeSize() {
        selectedWidth = drpWidth1000 / 10;
        selectedHeight = drpHeaight1000 / 10;
        if (selectedWidth !== "" || selectedHeight !== "") {

            if (selectedWidth < drpWidth1000 || selectedHeight < drpHeaight1000) {
                $('#errorSize').show();
            } else {
                $('#errorSize').hide();
            }

            if (selectedWidth == selectedHeight) {
                wid = 100;
                hei = 100;
            } else {
                if (selectedWidth < 101 && selectedHeight < 101) {
                    if (selectedWidth <= 50 && selectedHeight <= 50) {
                        if (selectedWidth <= 10) {
                            wid = selectedWidth * 4;
                        } else {
                            wid = selectedWidth * 2;
                        }
                        hei = selectedHeight * 2;
                    } else {
                        if (selectedWidth <= 75 && selectedHeight <= 75) {
                            wid = selectedWidth * 1.5;
                            hei = selectedHeight * 1.5;
                        } else {
                            wid = selectedWidth;
                            hei = selectedHeight;
                        }
                    }

                } else {
                    if (Number(selectedHeight) > Number(selectedWidth)) {
                        hei = 100;
                        wid = selectedWidth / (selectedHeight / 100);
                    } else {
                        if (Number(selectedHeight) < Number(selectedWidth)) {
                            hei = selectedHeight / (selectedWidth / 100);
                            wid = 100;
                        } else {
                            wid = selectedWidth;
                            hei = selectedHeight;
                        }
                    }
                }
            }

            $(".p-content").css("width", wid + "%");
            $(".p-content").css("height", hei + "%");
            $(".pjp-td-poster-size, .pjcs-td-poster-size").html(selectedVal + "mm");

            // if(selectedWidth >= 100 || selectedHeight >= 100){
            //     if(selectedWidth >= 500 || selectedHeight >= 500){
            //         $(".p-content").css({'border': '7px solid transparent'});
            //     }else{
            //         $(".p-content").css({'border': '15px solid transparent'});
            //     }
            //
            // }else {
            //     if(selectedWidth < 50 || selectedHeight < 50){
            //         $(".p-content").css({'border': '45px solid transparent'});
            //     }else {
            //         $(".p-content").css({'border': '30px solid transparent'});
            //     }
            // }
        }
    }

    function glassPriceCal(glass, width, height) {
        var glassPrice = (width+(frameThicknesSize/10)) + (height+(frameThicknesSize/10));
        // var glassPrice = 1;

        if (glass == '2mm Clear Glass (incl)') {
            $("#framingGlassPriceId").html('$' + (glassPrice*2 * 0).toFixed(2));
        }

        if (glass == '2mm Clear Arcylic/Perspex') {
            $("#framingGlassPriceId").html('$' + (0.2 * glassPrice).toFixed(2));
        }

        if (glass == '2mm Anti-Reflective Glass') {
            $("#framingGlassPriceId").html('$' + (glassPrice * 0.1).toFixed(2));
        }

        if (glass == '2mm Conversation UV clear') {
            $("#framingGlassPriceId").html('$' + (glassPrice * 0.35).toFixed(2));
        }

    };

    function justPrintCal(width, height) {
        var splitUrl = imageUrl.split("/");

        if (splitUrl[3] == "kenduncan") {
            return (width + height) * 1.4;
        } else {
            return (width + height) * 0.6;
        }
    }

    function justCanvasCal(width, height) {
        var splitUrl2 = imageUrl.split("/");

        if (splitUrl2[3] == "kenduncan") {
            return (width + height) * 1.6;
        } else {
            return (width + height) * 0.8;
        }
    }

    function frameCal(price, width, height) {
        if (price != undefined) {
            var frameCalPrice = price + 0.2;
            var frameCalWidth = width + (frameBorderSize / 10);
            var frameCalHeight = height + (frameBorderSize / 10);

            return ((frameCalWidth + frameCalHeight) * frameCalPrice).toFixed(2);
        } else {
            return 'none';
        }
    }


    function canvasStretchingPriceCalculation(width, height) {
        var cal = ((width + height) * 0.7 + justCanvasCostCanvasStertching).toFixed(2);
        $("#canvasStretchingTotalPriceId").html('$' + cal);
        // $("#canvasPrintPriceSizeId").html(width*10+'x'+height*10+'mm');
        $("#canvasPrintPriceId").html('$' + (cal - justCanvasCostCanvasStertching).toFixed(2));
    }

    function acrylicMountPriceCalculation(width, height) {
        console.log('width :' + width + ' , ' + 'height :' + height);
        console.log('acrylicBorderSize :' + acrylicBorderSize);
        console.log('justPrintCostAcrylycMount :' + justPrintCostAcrylycMount);
        console.log('acrylicBorderSize :' + acrylicBorderSize * 2 / 10);
        var cal2 = ((((width + ((acrylicBorderSize * 2) / 10)) + (height + ((acrylicBorderSize * 2) / 10))) * 1.6) + justPrintCostAcrylycMount).toFixed(2);
        $("#acrylicMountTotalPriceId").html('$' + cal2);
        $("#AcrylicprintPriceId").html('$' + (cal2 - justPrintCostAcrylycMount).toFixed(2));
    }

    function blockMountPriceCalculation(width, height) {
        var cal3 = ((width + height) * 1 + justPrintCostBlockycMount).toFixed(2);
        $("#blockMountSizeTotalPriceId").html('$' + cal3);
        $("#blockMoountPrintPriceId").html('$' + (cal3 - justPrintCostBlockycMount).toFixed(2));
    }

    function framingPriceCalculation() {

        var fPr = 0;
        var fMt = 0;
        var fSz = 0;
        var fGls = 0;

        if ($('#framesPriceId').text() != "none") {
            fPr = ($('#framesPriceId').text()).replace("$", "");
        }

        if ($.trim($('#matFullCalculationId').text()) != "none") {
            fMt = ($('#matFullCalculationId').text()).replace("$", "");
        }

        if ($('#framingSizePriceId').text() != "none") {
            fSz = ($('#framingSizePriceId').text()).replace("$", "");
        }

        if ($('#framingGlassPriceId').text() != "none") {
            fGls = ($('#framingGlassPriceId').text()).replace("$", "");
        }


        var cal4 = 0.20 + Number(fPr) + Number(fMt) + Number(fSz) + Number(fGls);
        $("#framingTotalPriceId").html('$' + cal4.toFixed(2));
    }

    function framingMatPriceCalculation() {
                
        // if(checkMat1 === 1){
        //     matFrameSizeThir = 50;
        //     matFrameSizeSec = 0;
        //     matFrameSizeFir = 0;
        //     $('#matFrameSizeThird').val(matFrameSizeThir);
        // }
        
        // if(checkMat2 === 1){
        //     matFrameSizeThir = 50;
        //     matFrameSizeSec = 5;
        //     matFrameSizeFir = 0;
        //     $('#matFrameSizeThird').val(matFrameSizeThir);
        //     $('#matFrameSizeSecond').val(matFrameSizeSec);
        // }
        
        // if(checkMat3 === 1){
        //     matFrameSizeThir = 50;
        //     matFrameSizeSec = 5;
        //     matFrameSizeFir = 5;
        //     $('#matFrameSizeThird').val(matFrameSizeThir);
        //     $('#matFrameSizeSecond').val(matFrameSizeSec);
        //     $('#matFrameSizeFirst').val(matFrameSizeFir);
        // }
        
        var mFSize2 = ((matFrameSizeFir + matFrameSizeSec + matFrameSizeThir) * 2) / 10;
        
        $("#framesMatSizeId1").html(' : '+ matFrameSizeFir +'mm');
        $("#framesMatSizeId2").html(' : '+ matFrameSizeSec +'mm');
        $("#framesMatSizeId3").html(' : '+ matFrameSizeThir +'mm');
        console.log("----------------------");
        console.log(tempWid);
        console.log(tempHei);
        console.log(mFSize2);
        console.log(matFrameSizeFir);
        console.log(matFrameSizeSec);
        console.log(matFrameSizeThir);
        console.log((((tempWid + mFSize2) + (tempHei + mFSize2)) * 0.13).toFixed(2));
        console.log();
        console.log();
        console.log("----------------------");
        // return (((tempWid + (frameBorderSize / 10)) + (tempHei + (frameBorderSize / 10))) * 0.13).toFixed(2);
         return (((tempWid + mFSize2) + (tempHei + mFSize2)) * 0.13).toFixed(2);
    }

    function framingMatPriceCalculationComplete() {
        var mat1 = 0;
        var mat2 = 0;
        var mat3 = 0;

        if ($("#framesMatSizePriceId1").text() != '') {
            var resMat1 = ($("#framesMatSizePriceId1").text()).split("( $");
            var resMP1 = resMat1[1].replace(" )", "")
            mat1 = Number(resMP1);
        }

        if ($("#framesMatSizePriceId2").text() != '') {
            var resMat2 = ($("#framesMatSizePriceId2").text()).split("( $");
            var resMP2 = resMat2[1].replace(" )", "")
            mat2 = Number(resMP2);
        }

        if ($("#framesMatSizePriceId3").text() != '') {
            var resMat3 = ($("#framesMatSizePriceId3").text()).split("( $");
            var resMP3 = resMat3[1].replace(" )", "")
            mat3 = Number(resMP3);
        }

        $('#matFullCalculationId').html('$' + (mat1 + mat2 + mat3).toFixed(2));

        framingPriceCalculation();

    }

</script>

<script src="js/all.js"></script>
<!-- ALL PLUGINS -->
<script src="js/custom.js"></script>
<script src="js/portfolio.js"></script>
<script src="js/hoverdir.js"></script>
</body>
</html>
