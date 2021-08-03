<div class="container-fluid" id="main-nav">
        <div class="col-lg-1 col-md-1 col-sm-2 col-12" style="text-align: center">
            <a class="navbar-left" href="index.php">
                <img alt="Brand" src="images/logo.png" id="logo" style="width: 146px;margin-bottom: -30px">
            </a>
            
        </div>
        <div class="col-lg-11 col-md-11 col-sm-10 col-12" style="text-align: center">
            <div class="navbar-collapse" id="m-list">
                <!--                <div class="col-lg-6 col-md-12 col-sm-12">-->
                <ul class="nav navbar-nav navbar-right" id="m-list">
                    <?php
                    if (empty($_SESSION["loginUser"])) {
                        ?>
                        <li><i class="fa fa-user-circle" style="font-size:20px;margin-top:7px;" ></i><a style="font-family:Montserrat Medium,Verdana,Arial,sans-serif;color:#58595b;font-size:13px !important;" href="logingForm.php">Sign in</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a style="font-family:Montserrat Medium,Verdana,Arial,sans-serif;color:#58595b;font-size:13px !important;" href="logout.php">Log Out</a></li>
                        <?php
                    }
                    ?>
                    <li><a href="#">|</a></li>
                    <li><i class="fa fa-briefcase" style="font-size:20px;margin-top:7px;" ></i><a style="font-family:Montserrat Medium,Verdana,Arial,sans-serif;color:#58595b;font-size:13px !important;" href="registrationForm.php">My Account</a></li>
                    <li><a href="#">|</a></li>
                    <li><i class="fa fa-shopping-cart" style="font-size:20px;margin-top:7px;"></i> <a style="font-family:Montserrat Medium,Verdana,Arial,sans-serif;color:#58595b;font-size:13px !important;" href="cart.php">Cart</a></li>
                </ul>
                 <form class="hedFnt"style="margin-top:31px;">
               <li style="margin-right:79%; font-weight:bolder;">OPEN 7 DAYS</li> </li> 
               <li style="margin-right:75.5%;font-size:10px">BEST CUSTOMER SERVICE</li>
                 </form>
                <!--                </div>-->
            </div>
           
               <div class="search"> 
            <form action="#"> 
                <input type="text"
                    placeholder=" Search"
                    name="search"> 
                <button> 
                    <i class="fa fa-search"
                        style="font-size: 18px;"> 
                    </i> 
                </button> 
            </form> 
        </div> 
            <!-- /.navbar-collapse -->
        </div>

<div class="col-lg-11 col-md-11 col-sm-10 col-12" style="text-align:center;" >
             <hr style="border-color: #FF0000;margin-top:-9.5px;margin-left:-166px;margin-right:-15px;">
            <form class="navbar-right" role="search" id="search-tab" style="float:left!important;">
                
                <div class="banImg" style="padding-left:320px;margin-bottom:-33px;">
                <img src="/images/Small1.jpg">
                </div>
                
                <!--                            <div class="form-group">-->
                <!--                                <input type="text" class="form-control" style="width: 335px;margin-right: 21px" placeholder="Search">-->
                <!--                            </div>-->
                <form class="form-inline" id="emailHeaderAndNo"style="">
                    <ul class="contFrm"style="display: flex;">
                     <li class="envAre" style="float:left;list-style: none;"><i class="fa fa-envelope-o" aria-hidden="true"></i><a  style="font-family:Montserrat Medium,Verdana,Arial,sans-serif;color:#58595b;font-size:13px !important;" href="#">&nbsp;sales@modernartframing.com.au&nbsp;&nbsp;&nbsp;</a></li>
                     <li class="phneAre"style="float:left;list-style: none;"><i class="fa fa-phone"></i><a style="font-family:Montserrat Medium,Verdana,Arial,sans-serif;color:#58595b;font-size:12px !important;" href="#">&nbsp;(02)96 596 696</a></li>
                    </ul>
                
                </form>
            </form>
        </div>