<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="contactt.css"/>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      .gradient {
        background: linear-gradient(90deg, #000000 0%, rgb(58, 56, 49) 100%);
      }
      
    </style>
    <link rel="icon" href="house1.png" type="image/icon type">
  </head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <div id="navbar" class ="navbar">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="whenever">
          <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="index.php">
            
            WheneverHome
          </a>
        </div>
        <div class="block lg:hidden pr-4">
          
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="top">
          <?php
          if (isset($_SESSION["useruid"])) {
            echo "<li><a href='profile.php'>Profile Page</a></li>";
            echo "<li><a href='logout.php'>Logout</a></li>";
          }
          else {
            echo "<span li class='sign'><a span class='inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4' href='signup.php'>Sign Up</a></span></li>";
            echo "<span li class='sign'><a span class='inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4' href='login.php'>Sign in</a></span></li>";
            
          }
        ?>
          <li>
            <a href="loans.php">Loans</a>
            </li>
            <li>
              <a href="geolocation.php">Rent</a>
              </li>
              <li>
                <a href="coming soon page.php">Sell</a>
                </li>
                <li>
                  <a href="geolocation.php">Buy</a>
              </li>
         
        </div>
      </div>
      
      
    
    
   
    </nav>
    <!--Hero-->
    <div class="pt-20">
      
        <!--Left Col-->
        
        <!--Right Col-->
       
           <!--pnggggggg image-->
        </div>
      </div>
    </div>
    
    <section class="bg-white">
      
          
 
        
     
      <div class="map" id="map"></div>
    
          </div>
          <div class='content1'>
            <div class="content4">
              <div>
                <h1 class="contact">Contact Us</h1>
              </div>
              <input type="text" placeholder="Your email address" id="location"/>
              <input type="text" placeholder="Your phone number"/>
              <input type="text" placeholder="Subject" id="locality"/>
              <textarea class="textarea" placeholder="Description" rows="4" cols="50"></textarea>
              <button class="button">Submit</button>
           
          
        </div>
      </div>
    </div>
          
        </div>
      </div>
    </div>
  </div>
    </section>
    
    <!-- Change the colour #f8fafc to match the previous section colour -->
    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
          <g class="wave" fill="#f8fafc">
            <path
              d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
            ></path>
          </g>
          <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
            <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
              <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
              <path
                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                opacity="0.100000001"
              ></path>
              <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
            </g>
          </g>
        </g>
      </g>
    </svg>
    
      
    </section>
    <!--Footer-->
    <footer class="bg-white">
      <div class="container mx-auto px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
          <div class="flex-1 mb-6 text-black">
            <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
            
              </svg>
              
            </a>
          </div>
          <div class="flex-2">
            <p class="uppercase text-gray-500 md:mb-6">LINKS</p>
            <div>
            <li>
                <a href="coming soon page.php" >FAQ</a>
              </li>
              <li>
                <a href="contact.php">Help</a>
              </li>
              <li>
                <a href="contact.php" >Support</a>
              </li>
            </div>
          </div>
          <div class="flex-2">
            <p class="uppercase text-gray-500 md:mb-6">LEGAL</p>
            
            <li>
                <a href="coming soon page.php" >Terms</a>
              </li>
              <li>
                <a href="coming soon page.php" >Privacy</a>
              </li>
            
          </div>
          <div class="flex-2">
            <p class="uppercase text-gray-500 md:mb-6">SOCIAL</p>
            
            <li>
                <a href="coming soon page.php" >Facebook</a>
            </li>
                  <li>
                <a href="coming soon page.php" >Linkedin</a>
                  </li>
                  <li>
                <a href="coming soon page.php" >Twitter</a>
                  </li>
            </div>
          
          <div class="flex-2">
            <p class="uppercase text-gray-500 md:mb-6">COMPANY</p>
            
              <li>
                <a href="coming soon page.php" >Official Blog</a>
              </li>
                  <li>
                <a href="coming soon page.php" >About Us</a>
                  </li>
                  <li>
                <a href="contact.php">Contact</a>
                  </li>
            
          </div>
        </div>
      </div>
      
    </footer>
    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQbTHeG5SRYiGeDYWG8lGIJpF4zev4rao&callback=initAutocomplete&libraries=places&v=weekly"
      defer
    ></script>
<script src="scripts.js"></script>
    <script>
   
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
    </script>
  </body>
</html>
