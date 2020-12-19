<?php 
include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <title>Welcome To Proramming Lust</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Programming Lust</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index4.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
               

            </ul>


            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            <a class="nav-link" href="profile.php"> <img src=""> <?php echo "". $_SESSION['username']?></a>
    <li class="nav-item active">
        
      </li>
  </ul>
  </div>
    </nav>

    



    

</div>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    <?php endif ?>
</div>


    <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded" alt="hero" src="Images/code.png">
            </div>
            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Let's See What in the Box
                    <br class="hidden lg:inline-block">“Knowledge is power.”
                </h1>
                <p class="mb-8 leading-relaxed">“Any fool can write code that a computer can understand. ... .</p>
                <a href="index.php">
                  <div class="flex justify-center ">
                    <button href="index.php" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Switch to technology</button>
                </a>
                </div>
            </div>
        </div>
    </section>

    

    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Python Projects For Beginners</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
                <p class="lg:w-1/2 w-full leading-relaxed text-base">Python is the most in demand language today and to help you learn it, here are some of the most important Python Projects that you can .</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="Images/Calculator.gif" alt="content">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Python</h3>
                        <a href="Calculator.php">
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Basic Calculator Using Python </h2>
                        </a>
                        <p class="leading-relaxed text-base">We are going to create a simple GUI calculator using the Tkinter module. Tkinter is builtin the Python module for developing the GUI application. It's easy to use and comes with Python. We can visualize our data with GUI applications.</p>

                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-voilet-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="Images/snakegame.gif" alt="content">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Python</h3>
                        <a href="Snakegame.php">
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Snake Game in Python</h2>
                        </a>
                        <p class="leading-relaxed text-base">We are creating simple <strong>snake game</strong> in Python using Pygame module.</p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="Images/Textsearch.gif" alt="content">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Python</h3>
                        <a href="Textsearch.php">
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Searching Text Strings From Files Using Python</h2>
                        </a>
                        <p class="leading-relaxed text-base">Search strings in a file and get line numbers of lines containing the string. Using basic <strong>for loops </strong> we gonna search strings in the text file.</p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="Images/Turtle.gif" alt="content">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Python</h3>
                        <a href="https://github.com/akashkokare2910/Programming-Lust/blob/main/Turtlegame.py">
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4"> Turtle Game Using Python</h2>
                        </a>
                        <p class="leading-relaxed text-base">For making this awesome game we we'll using <strong>Turtle</strong> library. It's simple race game between two turtles using randomazied dice.</p>
                    </div>
                </div>
            </div>
        </div>
        
   
        <div class="container px-5 py-0 mx-auto">
            <div class="flex flex-wrap w-full mb-3">
            
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="Images/Udownload.gif" alt="content">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Python</h3>
                        <a href="Utube.php">
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Youtube video downloader using Python</h2>
                        </a>
                        <p class="leading-relaxed text-base"> we are going to create a youtube video downloader GUI using the Tkinter module. </p>
                        <p class="leading-relaxed text-base"> <strong> Tkinter </strong> is built-in the Python module for developing the GUI application. It's easy to use and comes with Python. We can visualize our data with GUI applications.</p>

                    </div>
               
    </section>
    <div class="d-flex justify-content-center">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    </span>
    </span>
    &nbsp;
    &nbsp;

        

        <!-- Footer -->

        <body>
<!-- Footer -->
<footer class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Programming Lust</h5>
        <p>Here you can find useful coding projects in python.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Python Scripts</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://github.com/akashkokare2910/PythonPrograms/blob/master/SimpleInterest.py"> Calculate Simple Interest Using Python</a>
          </li>
          <li>
          </hr>
            <a href="https://github.com/akashkokare2910/PythonPrograms/blob/master/Compound_Interest.py">Calculate Compound Interest Using Python</a>
          </li>
          <li>
            <a href="https://github.com/akashkokare2910/PythonPrograms/blob/master/Password_Generator.py">Password Generator Using Python </a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Cryptography Scripts</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://github.com/akashkokare2910/Cryptography-Scripts/blob/main/Diffie_Hellman.py">Diffie Hellman Key exchange algorithm</a>
          </li>
          <li>
            <a href="https://github.com/akashkokare2910/Cryptography-Scripts/blob/main/MD5_Hashing.py"> Test integrity of message using MD-5</a>
          </li>
          <li>
            <a href="https://github.com/akashkokare2910/Cryptography-Scripts/blob/main/RSA1.py">Implement RSA cryptosystem</a>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

     
    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>

  <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Register for free</h5>
    </li>
    <li class="list-inline-item">
      <a href="register.php" class="btn btn-danger btn-rounded">Sign up!</a>
    </li>
  </ul>
  <!-- Call to action -->

  <hr>

  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="index4.php"> Programming Lust</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
        <!-- Footer -->
        <div class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-blue-500 text-sm text-center sm:text-left">© 2020 Programming Lust —
                    <a href="https://twitter.com/AkashKokare3" rel="noopener noreferrer" class="text-dark-600 ml-1" target="_blank">@akashkokare</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
              
              </a>
              <a class="ml-3 text-gray-500" href="https://twitter.com/AkashKokare3">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500" href="">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                  <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                  <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
              </a>
            </span>
            </div>
        </div>

</body>

</html>