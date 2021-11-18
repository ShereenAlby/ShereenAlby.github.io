<?php
session_start();
?>

<html>

  <head>
    <title> Euphority Cafe' </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">
  <link rel="stylesheet" href="css/css/core.css">
    <link rel="stylesheet" href="css/css/theme.css">
    <link rel="stylesheet" href="css/css/font-awesome.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,latin-ext">
    <link rel="stylesheet" href="css/css/layerslider.css">
	  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  

  <body>

    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class=""></span>
    </button>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Euphority Cafe'</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
           
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class=""></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class=""></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class=""></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class=""></span> Food Zone </a></li>
            <li><a href="cart.php"><span class=""></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class=""></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
			
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class=""></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class=""></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>
       </div>

      </div>
    </nav>
	
	
	
	
	

    <div class="site-wrapper"> 
      
	  <div id="home" style="background-image: url(img/slider-1.jpg); width: 100%; height: 862px;" class="parallax hidden-xs">
    </div>
		<section class="style-2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="126px" height="112px" viewBox="0 0 126 112" enable-background="new 0 0 126 112" xml:space="preserve" class="mini-logo">
                <g>
                  <g>
                    <g>
                      <path d="M63.016,1.134C55.414,6.166,53.994,17.37,53,29c5.021,1.321,9.101,3.579,10.016,8.998 C63.93,32.579,68.01,30.321,73.031,29C72.037,17.37,70.617,6.166,63.016,1.134z"></path>
                    </g>
                  </g>
                </g>
                <g>
                  <g>
                    <g>
                      <path d="M63.125,49.996C61.076,24.065,20.794,22.264,1,34c0,0.667,0.167,0.25,0.167,0.917C7.297,55.219,27.661,71.48,55.109,64 c-6.523,7.979,3.71,30.104-5.01,40c3.785,3.008,10.959,1.13,13.026-2.999c2.068,4.129,9.242,6.007,13.027,2.999 c-8.721-9.896,1.512-32.021-5.011-40c27.448,7.48,47.813-8.781,53.942-29.083c0-0.667,0.167-0.25,0.167-0.917 C105.457,22.264,65.175,24.065,63.125,49.996z"></path>
                    </g>
                  </g>
                </g>
                <g>
                  <g>
                    <g>
                      <path d="M50,70c-25.705-1.039-29.236,20.098-34,40C31.967,101.301,53.156,97.822,50,70z"></path>
                    </g>
                  </g>
                </g>
                <g>
                  <g>
                    <g>
                      <path d="M76.297,70c25.705-1.039,29.236,20.098,34,40C94.33,101.301,73.141,97.822,76.297,70z"></path>
                    </g>
                  </g>
                </g>
              </svg>
              <h2 id="foodzone" class="section-heading text-center">Food Zone</h2>
            </div>
            <div class="posts">
              <article class="col-md-4 col-sm-6"><a href="img/burger.jpg"><img alt="Recent Post 1" src="img/burger.jpg">
                  <div class="hover">
                    <h2>Burger</h2>
                  </div></a>
              </article>
              <article class="col-md-4 col-sm-6"><a href="img/sandwich.jpg"><img alt="Recent Post 2" src="img/sandwich.jpg">
                  <div class="hover">
                    <h2>Sandwich</h2>
                  </div></a>
              </article>
              <article class="col-md-4 col-sm-6"><a href="img/kulche.jpg"><img alt="Recent Post 3" src="img/kulche.jpg">
                  <div class="hover">
                    <h2>Chole kulche</h2>
                  </div></a>
              </article>
              <article class="col-md-4 col-sm-6"><a href="img/naan.jpg" data-rel="prettyPhoto"><img alt="Recent Post 4" src="img/naan.jpg">
                  <div class="hover">
                    <h2>Chole Naan</h2>
                  </div></a>
              </article>
              <article class="col-md-4 col-sm-6"><a href="img/coffee.jpg" data-rel="prettyPhoto"><img alt="Recent Post 5" src="img/coffee.jpg">
                  <div class="hover">
                    <h2>Coffee</h2>
                  </div></a>
              </article>
              <article class="col-md-4 col-sm-6"><a href="img/vegroll.jpg" data-rel="prettyPhoto"><img alt="Recent Post 6" src="img/vegroll.jpg">
                  <div class="hover">
                    <h2>Veg Roll</h2>
                  </div></a>
              </article>
            </div>
          </div>
        </div>
      </section>
     
      <section style="background-image: url(img/index.jpg)" id="no-clutter" class="jumbotron style-2 parallax text-center">
        <div class="container">
          <h2>Are <span class="color style-2">You Feeling</span>Hungry?</h2><a href="customerlogin.php" class="btn btn-md">Order Now</a>
        </div>
      </section>
      <section class="style-2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="126px" height="112px" viewBox="0 0 126 112" enable-background="new 0 0 126 112" xml:space="preserve" class="mini-logo">
                <g>
                  <g>
                    <g>
                      <path d="M63.016,1.134C55.414,6.166,53.994,17.37,53,29c5.021,1.321,9.101,3.579,10.016,8.998 C63.93,32.579,68.01,30.321,73.031,29C72.037,17.37,70.617,6.166,63.016,1.134z"></path>
                    </g>
                  </g>
                </g>
                <g>
                  <g>
                    <g>
                      <path d="M63.125,49.996C61.076,24.065,20.794,22.264,1,34c0,0.667,0.167,0.25,0.167,0.917C7.297,55.219,27.661,71.48,55.109,64 c-6.523,7.979,3.71,30.104-5.01,40c3.785,3.008,10.959,1.13,13.026-2.999c2.068,4.129,9.242,6.007,13.027,2.999 c-8.721-9.896,1.512-32.021-5.011-40c27.448,7.48,47.813-8.781,53.942-29.083c0-0.667,0.167-0.25,0.167-0.917 C105.457,22.264,65.175,24.065,63.125,49.996z"></path>
                    </g>
                  </g>
                </g>
                <g>
                  <g>
                    <g>
                      <path d="M50,70c-25.705-1.039-29.236,20.098-34,40C31.967,101.301,53.156,97.822,50,70z"></path>
                    </g>
                  </g>
                </g>
                <g>
                  <g>
                    <g>
                      <path d="M76.297,70c25.705-1.039,29.236,20.098,34,40C94.33,101.301,73.141,97.822,76.297,70z"></path>
                    </g>
                  </g>
                </g>
              </svg>
              <h2 id="restaurant" class="section-heading text-center">Euphority Cafe</h2>
            </div>
            <div class="col-md-5 col-md-offset-1"><img src="img/about-image.png" alt="Offers"></div>
            <div class="col-md-5">
              <h5>What can <span class="color">Euphority Cafe </span>offer</h5>
              <ul class="list icons">
                <li><i class="fa fa-cutlery"></i>All types of food are available.</li>
                <li><i class="fa fa-leaf"></i>Fresh food every day.</li>
                <li><i class="fa fa-glass"></i>We have a wide range of dishes.</li>
                <li><i class="fa fa-coffee"></i>Variety of Restaurants Available.</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
	  
	  <section class="jumbotron text-center">
        <div class="container">
          <h2><span class="color">All you need</span>, give it a go</h2>
        </div>
      </section>

    </div>
  
</body>
</html>