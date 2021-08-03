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
            <meta charset="UTF-8">
            <!-- Mobile Metas -->
            <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

            <title>Art, Prints and Posters | <?php echo $row['name']; ?></title>
            <link rel="stylesheet" href="../home_css/style.css">
            <link rel="stylesheet" href="../style.css">
            <!-- <link rel="stylesheet" href="../css/bootstrap.css"> -->
            <link rel="stylesheet" href="../scrollingText.css"/>
            <link rel="stylesheet" href="../sideNavStyle.css"/>

            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

            <link
                    rel="stylesheet"
                    href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.css"
            />

                <link rel="stylesheet" type="text/css" href="home-css.css" />

            <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css"/>

            <!-- Modernizer for Portfolio -->
            <script src=".././js/modernizer.js"></script>

            <link rel="shortcut icon" href=".././images/logos/art_print_on_demand.png" type="image/x-icon"/>
            <link rel="apple-touch-icon" href=".././images/logos/art_print_on_demand.png">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href=".././side_nav_assest/side_nav_style.css">
            
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
    .hedFnt{
        padding-top:0px;
        
    }
   
     #m-list{
        color:black;
    }
    .bcTxt{
        margin-left: -10px;
    }
    .opnTxt{
        margin-top:-8px;
    }
      .africa #foot {
          margin-top:980px!important;
          
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
     #menu{
          margin-top:-58px!important;
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
        .dropdown-container {
            display:none;
        } 
        .caret{
            display:none;
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
           .dropdown-container {
            display:none;
        } 
        .caret{
            display:none;
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
                  margin-right: 50%;
                  margin-left: 14%;
                  
              }
                  .search input[type=text] {
                   width: 208px;
              }
              .hedFnt{
                  display:none;
              }
              .contFrm{
              margin-left: -36px;
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
              padding-left: unset;
             margin-left: 214px;
     
         }
         #cntInfo {
        width: 63%;
         margin-top: 304px;
         padding-left: -12px;
        margin-left: -607px;
         }
      .newMap{
          margin-right: 61px;
          margin-top: 43px;
         }
            #catrow{ 
           width: 628px;
           margin-left: 0px;
           margin-right: -343px;
         }
           .dropdown-container {
            display:none;
        } 
          } 
         
          @media screen and (max-width: 767px){
              
          }


</style>
            
            
        </head>

        <body>
        <!--Main navbar starts here-->
        
         <?php include('../sample2.php');?>
        
            </div><!-- /.container-fluid -->
        </nav>

<br><br><br><br>
  
            <!-- Page Content  -->
            <div id="content" class="p-4 p-md-5 pt-5" style="min-height: 284vh;" >
                <div class="container">
                    <div class="section-title text-center">
                        <h3> <?php echo $row['name']; ?> </h3>
                        <p class="lead" style="text-align: justify"> <?php echo $row['dis']; ?></p>
                    </div><!-- end title -->
                </div><!-- end container -->

                <div class="container-fluid">
                    <div id="services">
                        <div class="container-fluid" style="margin-left: 0">
                            <div class="row">
                                <div class="show-sub-images">
                                    <div class="container-fluid mainSubCatDic">
                                        <section style="padding-top: 50px">
                                            <!--<h1>Placeholder Services</h1>-->
                                            <div class="data-container">
                                                <ul class="data-container__list">
                                                    <?php
                                                    $querys = "SELECT * FROM scategory where mainid=$id";
                                                    $results = $conn->query($querys);
                                                    $c=0;
                                                    while($rows = $results->fetch_array()){
                                                        ?>
                                                        <li>
                                                            <div class="card" style="width:300px;">
                                                                <a style="display:flex;height:240px;"href="../testPoster.php?image=admin-log/uploads/<?=$rows['pic']?>&code=<?=$rows['code']?>">
                                                                    <img style="width:auto;height:147px;display:flex;margin-left: auto;margin-right: auto;margin-top: auto;margin-bottom:auto;" src="../uploads/image/<?=$rows['pic']?>" />
                                                                </a>
                                                                <div style="background-clolr: yellow" class="card-body">
                                                                </div>
                                                                <div class="card-footer">
                                                                    <button style="width:100%" class="btn btn-info" onclick="window.location.href='../testPoster.php?image=..\uploads\image\subimage\subcategory\<?=$rows['pic']?>&code=<?=$rows['code']?>'">Order</button>
                                                                </div>
                                                            </div>

                                                        </li>
                                                        <?php
                                                        if ($c==10) {
                                                            echo '</ul><ul class="data-container__list">';
                                                            $c=0;
                                                        }
                                                        $c=$c+1;
                                                    }    ;?>
                                            </div>

                                            <div class="pagination-container"></div>
                                        </section>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <!--<hr class="hr1">-->

                        </div><!-- end container -->
                    </div><!-- end section -->
                </div><!-- end container -->
            </div>
        </div>

         <?php include('../footer.php');?>


        <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>


        <!-- suuti-image-modal -->
        <div id="suuti-modal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>

        <!-- ALL JS FILES -->

        <!-- suuti-script -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.min.js"></script>

        <script>
            function renderHtml(data) {
                let html = '<ul class="data-container__list">';

                data.forEach(function(element) {
                    html += "<li>" + element.innerHTML + "</li>";
                });

                html += "</ul>";
                return html;
            }

            $(".pagination-container").pagination({
                dataSource: function(done) {
                    let result = [];
                    let reviews = document.querySelectorAll(".data-container__list > li");

                    reviews.forEach(function(element) {
                        result.push(element);
                    });

                    done(result);
                },
                pageSize: 24,
                callback: function(data, pagination) {
                    window.scrollTo(0, 0);
                    let html = renderHtml(data);
                    document.querySelector(".data-container").innerHTML = html;
                }
            });

        </script>

        <script>
            // Get the modal
            var modal = document.getElementById("suuti-modal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("myImg");
            console.log(img)
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }


            function viewImage(image, code) {
                console.log("====================");
                console.log(image);
                console.log(code);
                console.log("====================");
            }
        </script>

        <script src="../js/all.js"></script>
        <!-- ALL PLUGINS -->
        <script src="../js/custom.js"></script>
        <script src="../js/portfolio.js"></script>
        <script src="../js/hoverdir.js"></script>
        <script src=".././side_nav_assest/side_nav_main.js"></script>


        </body>
        </html>
    <?php }
}?>