<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MY DIARY - GUEST</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="calendarstyle.css">
        <link rel="stylesheet" href="web.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            @media (min-width:768px){
                sidebar{
                    display: none;
                }
            }
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
            body, html {
                height: 100%;
                line-height: 1.8;
            }
            /* Full height image header */
            .bgimg-1 {
                background-position: right;
                background-size: cover;
                background-image: url(394482-PCGX1X-951.jpg);
                min-height: 100%;
            }
            .w3-bar .w3-button {
                padding: 16px;
            }
            input, datalist, textarea, option {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
                border: 3px solid #ccc;
                -webkit-transition: 0.5s;
                transition: 0.5s;
                outline: none;
            }

            input.hover {
                border: 3px solid 555;
            }
                #about,#contact,#blog,#login,#signup{
                    display: none;
                }
                sidebar {
                    display: none;
                }

            ///
            .w3-bar .w3-button {
                padding: 16px;
            }
            .top-row a {
              text-decoration: none;
              color: #fff;
              transition: .5s ease;
            }
            .top-row a:hover {
              color: #000000;
            }

            .form {
              position:relative;
              padding: 40px;
              max-width: 600px;
              margin: 10px auto;
              border-radius: 4px;
              box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
              transition: .5s ease;
            }

            .form:hover {
                box-shadow: 0px 0px 40px 16px #D3D3D3;
                }

            h1 {
              text-align: center;
              color: #000000;
              font-weight: 300;
              margin: 0 0 40px;
            }

            label {
              position: absolute;
              transform: translateY(6px);
              left: 15px;
              color:white;
              transition: all 0.25s ease;
              pointer-events: none;
              font-size: 22px;
              border-radius:5px;
            }
            
            label.active {
              transform: translateY(50px);
              left: 2px;
              font-size: 14px;
              border-radius:5px;
            }
            label.active .req {
              opacity: 0;
            }

            label.highlight {
              color: #000;
              margin-top:-10px;
            }

            .top-row input {
              font-size: 22px;
              display: block;
              width: 100%;
              height: 100%;
              padding: 5px 10px;
              background: none;
              background-image: none;
              border: 1px solid #fff;
              color: #A9A9A9;
              border-radius: 0;
              transition: border-color .25s ease, box-shadow .25s ease;
            }
            input:focus{
              outline: 0;
              border-color: #000;
            }

            .field-wrap {
              position: relative;
              margin-bottom: 40px;
              border-radius:5px;
            }

            .top-row:after {
              content: "";
              display: table;
              clear: both;
            }
            .top-row > div {
              float: left;
              width: 48%;
              margin-right: 4%;
            }
            .top-row > div:last-child {
              margin: 0;
            }

            .button {
              border: 0;
              outline: none;
              border-radius: 5px;
              padding: 15px 0;
              font-size: 2rem;
              font-weight: 600;
              text-transform: uppercase;
              letter-spacing: .1em;
              background: black;
              color: #ffffff;
              transition: all 0.5s ease;
            }
            .button:hover, .button:focus {
              background: #FFC0CB;
            }

            .button-block {
              display: block;
              width: 100%;
            }
                .center {
              display: block;
              margin-left: auto;
              margin-right: auto;
              margin-top: 100px;
               border-radius: 50%;
            }
            .mid{  
            text-align: center;

            .forgot {
              margin-top: -20px;

              margin-bottom:10px;
            }
            ::placeholder{
            color:#A9A9A9;}
        </style>
    </head>
<body class='bgimg-1'>

<!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a href="#home" class="w3-bar-item w3-button w3-wide">MY DIARY</a>
    <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
                <a id='mainpage2' class="w3-bar-item w3-button">HOME</a>
                <a id='about2'class="w3-bar-item w3-button">ABOUT</a>
                <a id='contact2'class="w3-bar-item w3-button">CONTACT</a>
                <a id='blog2' class="w3-bar-item w3-button">BLOG</a>
                <a id='login2' class="w3-bar-item w3-button"><i class="fa fa-user"></i> LOG IN</a>
                <a id='signup2' class="w3-bar-item w3-button"><i class="fa fa-user"></i> SIGN UP</a>
            </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
<!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <a id='mainpage3' onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
        <a id='about3' onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
        <a id='contact3' onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
        <a id='blog3' onclick="w3_close()" class="w3-bar-item w3-button">BLOG</a>
        <a id='login3' onclick="w3_close()" class="w3-bar-item w3-button">LOG IN</a>
        <a id='signup3' onclick="w3_close()" class="w3-bar-item w3-button">SIGN UP</a>
    </nav>

    <div class="wrapper" style="min-height: 100%;" >
        <main id='mainpage'>
            <div class="w3-display-left w3-text-white" style="padding:48px">
                <span class="w3-jumbo w3-hide-small" style="color:black">Write your memories...</span><br>
                <span class="w3-xxlarge w3-hide-large w3-hide-medium" style='color:black'>Write your memories...</span><br>
                <span class="w3-large" style="color:black">Stop wasting valuable time with projects that just isn't you.</span>
                <p><a id='signup4' class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Start Writing</a></p>
            </div> 
            <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
                <i class="fa fa-facebook-official w3-hover-opacity"></i>
                <i class="fa fa-instagram w3-hover-opacity"></i>
                <i class="fa fa-snapchat w3-hover-opacity"></i>
                <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                <i class="fa fa-twitter w3-hover-opacity"></i>
                <i class="fa fa-linkedin w3-hover-opacity"></i>
            </div>
        </main>
        <main id='about'>
            <header class="w3-display-container w3-grayscale-min" id="home" ><br><br>
            <div class="w3-display-right w3-text-white w3-right-align" style="margin:100px 50px;padding:300px 40px 40px 40px;background-color: rgba(255,255,255,0.5); ">
                <span class="w3-jumbo w3-hide-small w3-text-black" >About Us</span><br>
                <span class="w3-xxlarge w3-hide-large w3-hide-medium" style='color:black'>About Us</span><br>
                <div class="w3-large w3-text-black" style="font-weight: bold; max-width: 500px;">We, the team at My Diary, know the struggles of writing. Having been there ourselves we know what it's like. And since we do, this website has been customized to ensure that you have the best writing experience.</div>
            </div> 
            </header>
        </main>
        <main id='contact'>
            <form id ='contactform' action='http://localhost/webpro/contact.php' method='POST'>
                <input list="options" id="contactoption" name="contactoption" placeholder="Choose an option" required>
                <datalist id="options">
                    <option value="Advertisement">
                    <option value="Customer Support">
                    <option value="Feedback">
                </datalist> 
                <input type="text" id="fname" name="fname" placeholder ="First Name" required>
                <input type="text" id="lname" name="lname" placeholder ="Last Name" required>
                <textarea form='contactform' name="textarea" id="textarea" placeholder="What do you want to ask?"></textarea>
                <input type='hidden' name='form_submitted' value='1' />
                <input type="submit" value="Submit">
            </form>
        </main>
        <main id='blog'>
            <div class="w3-container" style="margin: 10px 5px;padding: 50px 50px 16px 16px;background-color: rgba(255,255,255,0.5);color:black">
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "mydiarydb";
                // Create connection
                $conn = mysqli_connect($servername, $username, $password,$database);
                // Check connection
                if(!$conn){
                    die("Connection failed: ".mysqli_connect_error());
                }
                $sql = "SELECT title, diarytext FROM diaryentries";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) { 
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="w3-row-padding" >
                    <div class="w3-col m9">
                        <h3><?php echo $row["title"];?></h3>
                        <p><?php $text=substr($row["diarytext"],0,250); echo $text;?>
                    </div>
                    <div class="w3-col m3">
                        <img class="w3-image w3-round-large" src="https://magazin.ehorses.de/wp-content/uploads/2017/08/silhouette-2124183_960_720.jpg" alt="Buildings" width="700" height="394">
                        <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> Read the Entire Article</a></p>
                    </div>
                </div>   
                
            <?php 
                    }
                }
            mysqli_close($conn);
            ?>

            </div>

        </main>
        <main id='login'>
            <div class="form w3-white" >
                <form id='loginform' action='http://localhost/webpro/login.php' method='POST'>
                    <div class="top-row">   
                        <h1>Welcome</h1>
                        <div class="field-wrap">
                            <label><span class="req"></span></label>
                            <input  type="email"  name="email" id="email" placeholder="Email Address"  autocomplete="off" required/>
                        </div>
          
                        <div class="field-wrap">
                            <label><span class="req"></span></label>
                            <input type="password" name="password" id="email"  placeholder="Password" autocomplete="off" required/>
                        </div>
                        <div>
                            <p  class="forgot"><a href="#">Forgot Password?</a></p>
                        </div>
                        <div>
                          <p>Don't have an account?<a id='create' style='color:black;'>create one:)</a></p>
                          <br>
                        </div>
                          <input type='hidden' name='form_login' value='1' />
                          <input type="submit" value="LOGIN" class="button button-block"/>
                        </div>          
                </form>
            </div>
        </main>
        <main id='signup'>
    	   <div class="form w3-white">
                <form  id ='signupform' action='http://localhost/webpro/signup.php' method='POST' >
                    <div class="top-row">
                        <h1>Create an account</h1>
                        <div class="field-wrap">
                            <label><span class="req"></span></label>
                            <input type="text"  name="fname" id="fname" placeholder="First Name" autocomplete="off" required/>
                        </div>

                        <div class="field-wrap">
                          <label><span class="req"></span></label>
                          <input type="text" name="lname" id="lname" placeholder="Last Name" autocomplete="off" required/>
                        </div>
                    </div>
                    <div class="field-wrap">
                        <label><span class="req"></span></label>
                        <input type="text"  name="username" id="username" placeholder="User Name" autocomplete="off" required/>
                    </div>
                    <div class="field-wrap">
                        <label><span class="req"></span></label>
                        <input type="email" name="email" id="email" placeholder="Email Address" autocomplete="off" required />
                    </div>
                    <div class="field-wrap">
                        <label><span class="req"></span></label>
                        <input type="password"  name="password" id="password" placeholder="Set a Password" autocomplete="off" required/>
                      </div>
                    <p>Birth date</p>
                    <div class="field-wrap">
                        <label><span class="req"></span></label>
                        <input type="date"  name="birthday" id="birthday" placeholder="Date of Birth" autocomplete="off" required/>
                    </div>
                    <p>Already had an account?<a id='log'> Click here to <b>Log In</b></a></p>
                    <br>
                    <input type='hidden' name='form_signup' value='1' />
                    <input type="submit" value="SUBMIT" class="button button-block"/>
          
                </form>
            </div>
        </main>

        <sidebar class="myside">
        <div id="imageSwap" ></div>
        <div id="nameSwap"></div>
        <div id="quoteSwap"></div>
        </sidebar>
    </div> 


    </body>
</html>
<script>

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('a').click(function(){
            $('a').css('background-color','white')
           $(this).css('background-color','pink'); 
        })
        $('#about2').click(function(){ 
        $('main').hide();
        $('#about').show();
            $('sidebar').show();
    });
        $('#contact2').click(function(){
            $('main').hide();
            $('#contact').show();
            $('sidebar').show();
    });
        $('#blog2').click(function(){
            $('main').hide();
            $('#blog').show();
            $('sidebar').show();
    });
        $('#login2').click(function(){
            $('main').hide();
            $('#login').show();
            $('sidebar').show();
    });
        $('#signup2').click(function(){
            $('main').hide();
            $('#signup').show();
            $('sidebar').show();
            
    });
         $('#mainpage2').click(function(){
            $('main').hide();
            $('#mainpage').show();
            $('sidebar').hide();
    });
         $('#about3').click(function(){ 
        	$('main').hide();
        	$('#about').show();
            $('sidebar').show();
    });
        $('#contact3').click(function(){
            $('main').hide();
            $('#contact').show();
            $('sidebar').show();
    });
        $('#blog3').click(function(){
            $('main').hide();
            $('#blog').show();
            $('sidebar').show();
    });
        $('#login3').click(function(){
            $('main').hide();
            $('#login').show();
            $('sidebar').show();
    });
        $('#signup3').click(function(){
            $('main').hide();
            $('#signup').show();
            $('sidebar').show();
            
    });
        $('#create').click(function(){
            $('main').hide();
            $('#signup').show();
            $('sidebar').show();
            $('a').css('background-color','white');
           $('#signup2').css('background-color','pink');
            
    });
        $('#log').click(function(){
            $('main').hide();
            $('#login').show();
            $('sidebar').show();
            $('a').css('background-color','white');
           $('#signup2').css('background-color','pink');
    });
         $('#mainpage3').click(function(){
            $('main').hide();
            $('#mainpage').show();
            $('sidebar').hide();
    });
      $('#signup4').click(function(){
            $('main').hide();
            $('#signup').show();
            $('sidebar').show();
            $('a').css('background-color','white');
           $('#signup2').css('background-color','pink');
    });
        
        
});
</script>

<script>

    $(document).ready(function () {
      setImageOne();
      setNameOne();
    });

    function setImageOne() {
      $('#imageSwap').fadeIn(500).html('<img src="Capture.jpg" width="150" height="150" class="center"/>').delay(6000).fadeOut(1000, function () { setImageTwo(); });
    }

    function setImageTwo() {
      $('#imageSwap').fadeIn(500).html('<img src="Capture1.jpg" width="150" height="150" class="center"/>').delay(6000).fadeOut(1000, function () { setImageThree(); });
    }
    function setImageThree() {
      $('#imageSwap').fadeIn(500).html('<img src="Capture2.jpg" width="150" height="150" class="center"/>').delay(6000).fadeOut(1000, function () { setImageFour(); });
    }
    function setImageFour() {
      $('#imageSwap').fadeIn(500).html('<img src="Capture3.jpg" width="150" height="150" class="center"/>').delay(6000).fadeOut(1000, function () { setImageFive(); });
    }
    function setImageFive() {
      $('#imageSwap').fadeIn(500).html('<img src="Capture4.jpg" width="150" height="150" class="center"/>').delay(6000).fadeOut(1000, function () { setImageOne(); });
    }
      

    function setNameOne() {
      $('#nameSwap').fadeIn(500).html('<p class="mid"><i>Samuel Pepys’ Secret Diary <br> (1660–1669)<br>  <br><b>"Mighty proud I am that I am able to have a spare bed for my friends"</b></i></p>').delay(6000).fadeOut(1000, function () { setNameTwo(); });
    }

    function setNameTwo() {
      $('#nameSwap').fadeIn(500).html('<p class="mid"><i>Anne Frank’s Diary <br> (1942–1944)<br>  <br><b> "Think of all the beauty still left around you and be happy" </b></i></p>').delay(6000).fadeOut(1000, function () { setNameThree(); });
    }
    function setNameThree() {
      $('#nameSwap').fadeIn(500).html('<p class="mid"><i>President Harry Truman <br> July 25, 1945<br>  <br><b>"Actions are the seed of fate deeds grow into destiny"</b></i></p>').delay(6000).fadeOut(1000, function () { setNameFour(); });
    }
    function setNameFour() {
      $('#nameSwap').fadeIn(500).html('<p class="mid"><i>Robert Scott <br> March 29, 1912<br>  <br><b>"Hunger and fear are the only realities in dog life: an empty stomach makes a fierce dog"</b></i></p>').delay(6000).fadeOut(1000, function () { setNameFive(); });
    }
    function setNameFive() {
      $('#nameSwap').fadeIn(500).html('<p class="mid"><i>Ernest Hemingway <br> 1908<br>  <br><b>"There is nothing noble in being superior to your fellow man; true nobility is being superior to your former self"</b></i></p>').delay(6000).fadeOut(1000, function () { setNameOne(); });
    }

  </script>