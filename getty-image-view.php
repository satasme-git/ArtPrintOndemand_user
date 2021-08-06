<?php
session_start();
require('inc/conn.php');
?>
<?php
if(isset($_POST['submit'])){
    if(empty($_POST['search']) || strlen(trim($_POST['search'])) < 1){
        header('location:index.php'); 
    }else{
        $_SESSION['search']=$_POST['search']; 
        //echo $_SESSION['search'];

    }

}else{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>Art, Prints and Posters</title>

<link rel="stylesheet" href="home_css/style.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/bootstrap.css">

<link rel="shortcut icon" href="images/logos/art_print_on_demand.png" type="image/x-icon"/>
<link rel="apple-touch-icon" href="images/logos/art_print_on_demand.png">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
   

 

    .img-c{
        position: relative;
        height: 0;
        width: 100%;
        overflow: hidden;
        padding-top: 75.09%
    }


    .gettYImg{
        display:block;
        position: absolute;
        display: block;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        width: 100%;
        height: auto;
        margin: auto;
    }
     
     .tb
    {
        display: table;
        width: 100%;
    }

    .td
    {
        display: table-cell;
        vertical-align: middle;
    }
    .card-type-2 {

        border-radius: 3px;
        background-color: #fff;
        background-color: #fff;

        border: 1px solid #d8d8d8;
        border-bottom-width: 2px;
        width:100%;
        min-width:300px;
        padding: 8px;
        margin-bottom:3%;
    }
    
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
     
   
    .banImg{
        padding-left:420px!important;
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
      
     .Hme_hr{
         display:none;
     }
     #m-list{
      flex-direction: inherit;
     }
     .navbar-nav{
         flex-direction: inherit;
     }
     .dropdown-menu{
         position: absolute !important;
         z-index: 12 !important;
     }
     .caret{
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
       #menu{
           display: flex;
           flex-direction: column;
       }
        #myNavbar{
           display:inline;
       }
       .navbar-brand{
           margin-left: 15% !important;
           margin-top: 8px !important;
       }
       #m-list ul {
    margin-left: 6px;
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
       .navbar-brand{
           margin-left: 23%!important;
           margin-top:10px!important;
       }
         
          #menu{
           display: flex;
           flex-direction: column;
       } 
       #myNavbar{
           display:-webkit-box;
       }
    }
          
          @media(min-width: 1281px) {
              .contFrm{
                  margin-left:24px;
                  
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
                   margin-left:18px;
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
                   margin-left:24px;
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
<body onload="gettyImageLoad()">
<!--Main navbar starts here-->
<input type="hidden"  id="dataimage" value="<?php echo $_SESSION['search']?>">
<nav class="navbar navbar-default" style="padding: 0;">
    
  
    
    </div><!-- /.container-fluid -->
</nav>
 <!--sub navbar starts here-->


<div class="container-fluid">
    <div class="grid">
        
        <div class="row" id="mainDivId">
<!--            <div class="col-lg-4 col-md-6">-->
<!--                <div class="card-type-2">-->
<!--                    <div class="img-c">-->
<!--                        <img src='https://upload.wikimedia.org/wikipedia/commons/3/3c/Cinque_Terre_.jpg' width="800" height="800"/></div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
   
</div>
  

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/all.js"></script>

<script>
    function gettyImageLoad(){
        var searchData = document.getElementById("dataimage").value;

        var mainDivRow = document.getElementById('mainDivId');

        var mainDiv, cardDiv, imgDiv, mainImg;
        $.ajax({
            url: 'getty-image.php?search='+searchData,
            type: 'get',
            dataType: 'JSON',
            success: function(response){
                console.log(response);
                var len = response.length;
                for (var i = 0; i < len; i++) {
                    mainDiv = document.createElement("div");
                    mainDiv.setAttribute("class", "col-lg-4 col-md-6");

                    cardDiv = document.createElement("div");
                    cardDiv.setAttribute("class", "card-type-2");

                    imgDiv = document.createElement("div");
                    imgDiv.setAttribute("class", "img-c");
                    
                    var aTag= document.createElement("a");
                      
                    aTag.setAttribute("href", "#?image="+response[i]["display_sizes"][0]["uri"]+"&code=gettyimage");

                    var mainImg = document.createElement("IMG");
                    mainImg.setAttribute("src", response[i]["display_sizes"][0]["uri"]);
                    mainImg.setAttribute("style", "cursor: pointer");
                    mainImg.setAttribute("width", "800");
                    mainImg.setAttribute("height", "800");
                    mainImg.setAttribute("class", "gettYImg");

                    mainDivRow.appendChild(mainDiv).appendChild(cardDiv).appendChild(imgDiv).appendChild(aTag).appendChild(mainImg);
                }
            }
        });
    }
    
    $(document).on('keypress',function(e) {
        if(e.which == 13) {
            var searchData= document.getElementById("searchId").value;
    
            console.log(searchData);
    
            var mainDivRow = document.getElementById('mainDivId');
    
            $("#mainDivId").html("");
    
            $.ajax({
                url: 'getty-image.php?search='+searchData,
                type: 'get',
                dataType: 'JSON',
                success: function(response){
                    console.log(response);
                    var len = response.length;
                    for (var i = 0; i < len; i++) {
    
                        var mainDiv = document.createElement("div");
                        mainDiv.setAttribute("class", "col-lg-4 col-md-6");
    
                        var cardDiv = document.createElement("div");
                        cardDiv.setAttribute("class", "card-type-2");
    
                        var imgDiv = document.createElement("div");
                        imgDiv.setAttribute("class", "img-c");
                        
                         var aTag= document.createElement("a");
                        aTag.setAttribute("href", "testPoster.php?image="+response[i]["display_sizes"][0]["uri"]+"&code=gettyimage");
    
                        var mainImg = document.createElement("IMG");
                        mainImg.setAttribute("src", response[i]["display_sizes"][0]["uri"]);
                        mainImg.setAttribute("style", "cursor: pointer");
                        mainImg.setAttribute("width", "800");
                        mainImg.setAttribute("class", "gettYImg");
    
                        mainDivRow.appendChild(mainDiv).appendChild(cardDiv).appendChild(imgDiv).appendChild(aTag).appendChild(mainImg);
                    }
                }
            });
            return false;
        }
        // return false;
    });

    $('#searchBtnId').on('click', function(e){
        var searchData= document.getElementById("searchId").value;

        console.log(searchData);

        var mainDivRow = document.getElementById('mainDivId');

        $("#mainDivId").html("");

        $.ajax({
            url: 'getty-image.php?search='+searchData,
            type: 'get',
            dataType: 'JSON',
            success: function(response){
                console.log(response);
                var len = response.length;
                for (var i = 0; i < len; i++) {

                    var mainDiv = document.createElement("div");
                    mainDiv.setAttribute("class", "col-lg-4 col-md-6");

                    var cardDiv = document.createElement("div");
                    cardDiv.setAttribute("class", "card-type-2");

                    var imgDiv = document.createElement("div");
                    imgDiv.setAttribute("class", "img-c");
                    
                    var aTag= document.createElement("a");
                    
                    aTag.setAttribute("href", "testPoster.php?image="+response[i]["display_sizes"][0]["uri"]+"&code=gettyimage");

                    var mainImg = document.createElement("IMG");
                    mainImg.setAttribute("src", response[i]["display_sizes"][0]["uri"]);
                    mainImg.setAttribute("style", "cursor: pointer");
                    mainImg.setAttribute("width", "800");
                    mainImg.setAttribute("class", "gettYImg");

                    mainDivRow.appendChild(mainDiv).appendChild(cardDiv).appendChild(imgDiv).appendChild(aTag).appendChild(mainImg);
                }
            }
        });
    });
    
</script>
    
     

</body>
</html>