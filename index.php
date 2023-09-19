<!doctype html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="images/fav (2).png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stock and Coins</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/mobile.css">
</head>
  <body>
    <div class="container-fluid hero-section">
        <br>
        <center class="up-arrow" >
            <img src="images/arrow.png" alt="">
        </center>
       <?php 
        @require('modules/nav.php');
       ?>
          <div class="row align-items-center">
            <div class="col-sm-6" style="padding-left: 20%;">
                <h1>
                    Trading - Brokerage <br>
                    Financial Services
                </h1>
                <br>
                <h3 class="ytext">Trading</h3>
                <p style="font-size: 20px;">is the most efficient and the <br>
                    best way to reach your dream.</p>
                    <br>
                    <a href="" class="btn btn-def" style=" padding: 5px 55px;">Click to Start</a>
            </div>
            <div class="col-sm-6">
                <img src="images/bull bear.png" class="img-fluid" width="800" alt="">
            </div>
          </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="images/about.png" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6">
                <h2 class="ytext">About Us</h2>
                <p style="font-size: 20px;">
                    <b>Your Trading Partner: Always primed to help you achieve the freedom you dream of.
                    </b>
                    <br><br>
Since 2020, we've helped thousands of individuals break into the trading world. Our mission is to spread awareness about trading and equip traders with the necessary tools to succeed in the market. Through our services you would be able to confidently trade and build the financial future you dream of.
<br><br>
Our main vision is to become the single authority of trust and reference when it comes to trading, hence positioning our brand as the ultimately trusted broker to help individuals approach the market based on facts and not feelings through the services we provide. 

                </p>
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