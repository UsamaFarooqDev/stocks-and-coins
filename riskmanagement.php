<?php
$url = 'https://www.live-rates.com/rates'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$json = json_decode($data); // decode the JSON feed

// foreach($json as $obj){
//     if ($obj->currency == 'EUR/USD'){
//         echo "Pair: $obj->currency\n";
//            echo "Bid: $obj->bid\n";
//            echo "Ask: $obj->ask\n";
//            echo "Timestamp: $obj->timestamp\n";
//     }
// }
?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="images/fav (2).png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stocks and Coins - Risk Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/mobile.css">
    <style>
body{
    background: url(images/Mask\ Group\ 50.png);
    background-size: cover;
    background-repeat: no-repeat;
}
        </style>
</head>
  <body>
    <div class="container-fluid hero-nav">
        <br>
        <center class="up-arrow" >
            <img src="images/arrow.png" alt="">
        </center>
       <?php 
        @require('modules/navother.php');
       ?>
         
    </div>
    <br><br>
    <div class="container-fluid" style="padding: 0 !important;">
        <div class="row align-items-center">
        <div class="col-sm-1 col-3">
            <img src="images/Rectangle 654.png" alt="">
        </div>
        <div class="col-sm-11 col-9">
            <h2 class="gold">Risk Management</h2>
        </div>
        </div>
    </div>
    <div class="container ">
        <div class="row">
     <div class="col-sm-6 mb-4 mb-md-0">
        <form action="" method="post" class="rmform">
            <div class="row">
                <div class="col-sm-4">
                    <label for="">Instrument</label>
                </div>
                <div class="col-sm-8">
                    <select name="" id="" class="form-control form-select">   
                        <option value="EUR/USD">EUR/USD</option>
                        <option value="EUR/JPY">EUR/JPY</option>
                        <option value="USD/JPY">USD/JPY</option>
                    </select>
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-4 mb-4 mb-md-0">
                    <label for="">Balance</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="" placeholder="Balance" id="" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-4">
                    <label for="">Entry</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="" placeholder="Entry" id="" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-4">
                    <label for="">Stop Loss</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="" placeholder="Stop Loss" id="" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-4">
                    <label for="">Take Profit</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="" placeholder="Take Profit" id="" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-4">
                    <label for="">Risk Percentage</label>
                </div>
                <div class="col-sm-8">
                    <div class="prow">
                        <p class="gold">0%</p>
                        <p class="gold">2.5%</p>
                        <p class="gold">5%</p>
                    </div>
                    <input type="range" min="0" max="5" step="2.5" name="" placeholder="Balance" id="range" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <button class="btn btn-def">Submit</button>
                </div>
            </div>
        </form>
     </div>
     <div class="col-sm-6">
        <section class="lotsize">
        <div class="row">
                <div class="col-sm-4">
                    <label for="">Lot Size</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="" placeholder="Lot Size" id="" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-4">
                    <label for="">RRR</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="" placeholder="RRR" id="" class="form-control">
                </div>
            </div> <br>
        </section>
        <br>
        <section class="lotsize">
        <div class="row">
            <h3 class="gold text-center">Static Data</h3>
            <hr>
                <div class="col-sm-4">
                    <label for="">Commission</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="" placeholder="Commission" id="" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-4">
                    <label for="">Spread</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="" placeholder="Spread" id="" class="form-control">
                </div>
            </div> <br>
        </section>
     </div>
</div>
    </div>
    <div class="container-fluid footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 my-auto">
                    <img src="images/logo.png" class="img-fluid" alt="">
                </div>
                <div class="col-sm-3">
                    <ul>
                        <li>
                            <a href="">About Us</a>
                        </li>
                        <li>
                            <a href="">Services</a>
                        </li>
                        <li>
                            <a href="">Technical Analysis</a>
                        </li>
                        <li>
                            <a href="">Fudamental Analysis</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul>
                        <li>
                            <a href="">Risk Management</a>
                        </li>
                        <li>
                            <a href="">FAQ</a>
                        </li>
                        <li>
                            <a href="">Blog</a>
                        </li>
                    
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h6 class="text-white">Join Our Community</h6>
                    <form action="" method="post">
                        <input type="email" name="" placeholder="Email" id="" class="form-control" style="border-radius: 30px;">
                        <br>
                        <div class="row align-items-center">
                            <div class="col-sm-7">
                                <i class="fa-brands fa-tiktok" style="color: #ffffff;"></i>
                                <i class="fa-brands fa-youtube" style="color: #ffffff;"></i>
                                <i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i>
                                <i class="fa-brands fa-telegram" style="color: #ffffff;"></i>
                                <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
                            </div>
                            <div class="col-sm-5">
                                <input type="submit" value="Subscribe" class="btn btn-def">
                            </div>
                          
                        </div>
                    </form>
                </div>
            </div>
            <hr style="background: white;height: 2px;opacity: 1;">
            <div class="row cc align-items-center">
                <div class="col-sm-6">
                    <p>Developed and Designed by  <span><img src="images/qwinfooter.png" width="50" alt=""></span></p>
                </div>
                <div class="col-sm-6">
                    <p>Copyright © 2023 Stocks & Coins</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>