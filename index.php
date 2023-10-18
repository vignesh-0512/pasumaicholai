 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Farms</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <style>
        /* Add responsive CSS here */
        @media (max-width: 768px) {
            /* Adjust the navbar for smaller screens */
            .navbar {
                padding: 10px;
            }
        }

        @media (max-width: 576px) {
            /* Make the heading and input more responsive */
            #home h1 {
                font-size: 28px;
            }

            #home p {
                font-size: 16px;
            }

            .input-group {
                flex-direction: column;
                align-items: center;
            }

            .input-group input,
            .input-group button {
                width: 100%;
            }
        }

        /* Add more media queries and CSS for other screen sizes as needed */
    </style>
 </head>
 <body>
    <!----Navbar-->

   
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PASUMAI CHOLAI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto"> 
              <li class="nav-item">
                <a class="nav-link " href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#About">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#product">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#contact">Contact</a>
              </li>
             <li class="nav-item">
                <a class="nav-link " href="weather.html">Weather</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="schemes.html">Schemes</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link " href="aqi.html">AQI</a>
              </li>
            </ul>
            <a href="reg.html"><button class="btn p-2 my-lg-0 my-2">Sign In</button></a>
            <a href="login.html"><button class="btn p-2 my-lg-0 my-2">Login</button>

            </a>
        </div>
      </nav>


      <!-----home-->

      <section id="home">
        <h1 class="text-center">  PASUMAI CHOLAI</h1>
        <p class="text-center">Agriculture is a way of life, not a profession -G.Nammazhvar</p> 
      </section>


      <!-----About---->

      <section id="About">
        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <img src="logo__1_-removebg-preview.png" class="img-fluid">
              </div>
              <div class="col-lg-6 col-md-6 col-12 p-lg-5 p-2 my-5">
                <h1>ABOUT US</h1>
                <p>
                  PASUMAI CHOLAI is the idea that have been started for farmers who have really struggling to survive in this world.  This the website started in the motto of saving the farmers life , to generate the actual correct profit to the farmers.   And, I have one question to everyone viewing this website "When the country is said to become as a Developed Nation ?"  the actual answer for this question is when farmer dies without money in poverty.   "It's not poverty only for that Farmer, That's poverty for the Whole Nation" When we understand this country will be fullfilled with development as much as other countries. And PASUMAI CHOLAI website helps the farmers to get connect with other farmers and experts in this Farm field to stay connect with each other and resolve their problems.  And we have E-commerce shopping section in this website by this, we can sell the product which are produced by Farmers its a direct  process and a small step that have been taken for the farmers to get their actual profit for the product.  In Tamil, their is a quotes    "உலகத்தில் உயர்ந்தவன் ஒருவன் தான்.   உழுது, விதைத்து, அறுத்து, உலகத்துக்கே சோறு போடுபவன் தான்    உலகத்திலேயே உயர்ந்தவன்."   As per, the quotes we are small young-ones started this website to Save Farmers!!! Save World!!!
                  </p>
              </div>
            </div>
        </div>
      </section>

      <section id="product">
        <?php include 'products.php'?>
</section>

      <section id="contact">
        <div class="container box">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                 <img src="logo__1_-removebg-preview.png" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <h1>CONTACT US</h1>
              <form class="mb-3" action="contact.php" method="post">
                <input type="text" name="name" class="form-control" placeholder="Enter your name">
                <input type="email" name="email" class="form-control" placeholder="Enter your e-mail">
                <input type="Phone number" name="pno" class="form-control" placeholder="Enter your phone no.">
                <textarea class="form-control" name="reviews" placeholder="Enter your reviews"></textarea>
                <button class="btn signin">Send reviews</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      
      

      <footer> Copyright  @Pasumai Cholai 0990</footer>

    <!-- Chatbot container -->
    
 </body>
 </html>  