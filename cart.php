<?php session_start()?>
<?php require_once('inc/conn.php');?>
<?php
//checking if a user is logged in
if(!isset($_SESSION['id'])){
	header('location:login.php');
}
$_SESSION['img']=$_GET['image'];
$_SESSION['img_id']=$_GET['id'];
$_SESSION['img_code']=$_GET['code'];
$querys = "SELECT * FROM scategory where id={$_SESSION['img_id']}";

$results = $conn->query($querys);
$row = $results->fetch_array();
$_SESSION['img_name']=$row['name'];



?>
<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="http://fonts.cdnfonts.com/css/segoe-ui-4" rel="stylesheet">
    <link rel="stylesheet" href="./css/cart.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
        integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Cart</title>
</head>

<body>
    <div class="container cart_page">
        <div class="row ">
            <!-- cart item -->
            <div class="col-md-6 product_container">
                <h3>My Cart</h3>
                <!-- <p>You have 3 items in your cart</p> -->
                <div class="container single_product">
                    <div class="row product_row">
                        <!-- item img -->
                        <div class="col-3 cart_product_img">
                            <img src="<?php $_SESSION['img']?>" alt="">
                        </div>
                        <!-- /item img -->
                        <!-- item content -->
                        <div class="col-5 product_discription">
                            <ul>
                                <li>Product :<?php echo $_SESSION['img_name']?></li>
                                <li> Product Code :<?php echo $_SESSION['img_code']?></li>
                                <li> Size : 804 X 1000 Mm [ $144.32 ]</li>
                                <li>Edge Type : Black</li>
                                <li>Timber Size : 20 Mm</li>
                                <li>Special Note : No Special Instruction</li>
                            </ul>

                        </div>
                        <!-- /item content -->
                        <!-- item price -->
                        <div class="col-3 product_price">
                            <h3><b>$154.00</b></h3>
                            <div class="input-group">
                                <input type="button" value="-" class="button-minus" data-field="quantity">
                                <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
                                <input type="button" value="+" class="button-plus" data-field="quantity">
                            </div>

                        </div>
                        <!-- /item price -->
                        <!-- del item -->
                        <div class="col-1 del_product">
                            <img src="cart/deleteico.png" alt="">
                        </div>

                    </div>
                </div>



               
               
            </div>
            <div class="col-md-6 pay_container">
                <div class="pay_form">
                    <h3>Payment Details</h3>
                    <p>Complete your purchase by providng your payment details</p>
                    <form class="card_form">
                        
                        <label>Email Address</label>
                        <input class="form-control form-control" type="text" placeholder="Email Address">
                        
                        
                        <div class="validation">VALIDATION</div>
                        <label>Card Details</label>
                        <div class="row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="MM/YY">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="CVS">
                            </div>
                          </div>

                        <div class="validation">VALIDATION</div>
                        <label>Billing Address</label>
                        <input class="form-control form-control" type="text" placeholder="Address"><br>
                        <div class="row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Zip Code">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="State">
                            </div>
                          </div>
                          <div class="validation">VALIDATION</div>
                          <div class="separator"></div>
                          <div class="container">

                            <div class="row">
                                <div class="col heading">
                                   <h6>Subtotal</h6> 
                                </div>
                                <div class="col price">
                                    <h6>$504.00</h6>
                                </div>
                              </div></div>
                              <div class="container">

                              <div class="row">
                                <div class="col heading">
                                    <h6>Shipping</h6>
                                </div>
                                <div class="col price">
                                   <h6>$30.00</h6> 
                                </div></div>
                                
                                <div class="row">
                                <div class="col heading">
                                       <h6><b>Total</b></h6> 
                                </div>
                                <div class="col price">
                                        <h6><b>$80.00</b></h6>
                                </div>
                            </div>
                              <button class="btn btn-success pay_button">Pay $300</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script>
        function incrementValue(e) {
            e.preventDefault();
            var fieldName = $(e.target).data('field');
            var parent = $(e.target).closest('div');
            var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

            if (!isNaN(currentVal)) {
                parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
            } else {
                parent.find('input[name=' + fieldName + ']').val(0);
            }
        }

        function decrementValue(e) {
            e.preventDefault();
            var fieldName = $(e.target).data('field');
            var parent = $(e.target).closest('div');
            var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

            if (!isNaN(currentVal) && currentVal > 0) {
                parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
            } else {
                parent.find('input[name=' + fieldName + ']').val(0);
            }
        }

        $('.input-group').on('click', '.button-plus', function (e) {
            incrementValue(e);
        });

        $('.input-group').on('click', '.button-minus', function (e) {
            decrementValue(e);
        });

    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>