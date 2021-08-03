<?php
session_start();
require('../inc/conn.php');
if ($_GET['id']==0) {
    echo "nothing";
}else{
    $id=$_GET['id'];
    $query = "SELECT * FROM category where id=$id";
    $result = $conn->query($query);
    $c=0;
    while($row = $result->fetch_array()){
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <!-- Basic -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <!-- Mobile Metas -->
            <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

            <!-- Site Metas -->
            <title>Art, Prints and Posters | <?php echo $row['name']; ?></title>

            <link rel="stylesheet" href="../home_css/style.css">
            <link rel="stylesheet" href=".././style.css">
            <!-- <link rel="stylesheet" href="../css/bootstrap.css"> -->
            <link rel="stylesheet" href="show_card_style.css">

            <link rel="shortcut icon" href="../images/logos/art_print_on_demand.png" type="image/x-icon"/>
            <link rel="apple-touch-icon" href="../images/logos/art_print_on_demand.png">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="home-css.css" /> -
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
            
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
      display: none;
           
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
          
        
   </STYLE>
            
        </head>
        <body>
        <!--Main navbar starts here-->
        
      
        
            </div><!-- /.container-fluid -->
        </nav>

        <br><br><br><br><br><br>
    

      <div class="container-fluid">
            <div class="section-title text-left">
                <h3><?php echo $row['name']; ?> </h3>
                <h5><a href="../index.php">Home</a> ~ <a href="#"><?php echo $row['name']; ?></a></h5>
                <p class="lead" style="text-align: justify"><?php echo $row['dis']; ?></p>
            </div><!-- end title -->
        </div><!-- end container -->
        <div id="portfolio" class="section-card">
             
            <!--            <div class="container-fluid" >-->
            <?php $querys = "SELECT * FROM category where mainid=$id";
            $results = $conn->query($querys);
            $c=0;
            while($rows = $results->fetch_array()){
                echo ' <div class="recap">
                <div class="snip1104 blue"><a href="showsub.php?id='.$rows['id'].'"><img  src="../../uploads/image/subimage/'.$rows['pic'].'" alt="sample35" /></a>
                
                </div>
                <a href="showsub.php?id='.$rows['id'].'" class="buttontext"><span>'.$rows['name'].'</span></a></div>';
            }?>
            </div>
            



            <!--            </div>-->
            <!-- end container -->
        </div>

        <br><br>




        <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

        <!-- ALL JS FILES -->
        <script src="../js/all.js"></script>
        <!-- ALL PLUGINS -->
        <script src="../js/custom.js"></script>
        <script src="../js/portfolio.js"></script>
        <script src="../js/hoverdir.js"></script>


        </body>
        </html>
        <?php
    }
}?>