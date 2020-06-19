<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( isset( $_SESSION['email'] ) ) {
    // Grab user data from the database using the user_id
    $email = $_SESSION['email'];
    // Let them access the "logged in only" pages
} else {
    // Redirect them to the login page
    header("Location: guest.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MY DIARY - USER</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="calendarstyle.css">
        <link rel="stylesheet" href="web.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
            body, html {
                height: 100%;
                line-height: 1.8;
            }
            /* Full height image header */
            .bgimg-1 {
                background-position: center;
                background-size: cover;
                background-image: url(https://images.unsplash.com/photo-1529251333259-d36cccaf22ea?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e6c52662b2feaffa4fa61553c94d0ac8&auto=format&fit=crop&w=1041&q=80);
                min-height: 100%;
            }
            .w3-bar .w3-button {
                padding: 16px;
            }

            #contact input, #contact datalist, #contact textarea, #contact option {
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

                #settings,#newentry,#blogs,#contact{
                    display: none;
                }
                //
                .w3-bar .w3-button {
                padding: 16px;
            }

            #settings a {
              text-decoration: none;
              color: #fff;
              transition: .5s ease;
            }

            #settings .form, #newentry .form {
                position: relative;
              padding: 40px;
              width: 1000px;
              margin: 10px auto;
              border-radius: 4px;
              box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
              transition: .5s ease;
            }

            .form:hover {
                box-shadow: 0px 0px 40px 16px #D3D3D3;
                }

            h3 {
              color: #000000;
              font-weight: 300;
              margin: 0 0 20px;
            }
            p {
            color: #000000;}

            label {
              position: absolute;
              transform: translateY(6px);
              left: 13px;
              color:#A9A9A9;
              transition: all 0.25s ease;
              pointer-events: none;
              font-size: 22px;
            }
            label .req {
              margin: 2px;
              color: red;
            }

            label.active {
              transform: translateY(50px);
              left: 2px;
              font-size: 14px;
            }
            label.active .req {
              opacity: 0;
            }

            label.highlight {
              color: #000;
              margin-top:-10px;
            }

             #settings input, #newentry input {
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
              font-size: 1rem;
              font-weight: 400;
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
              width: 50%;
            }


            ::placeholder{
            color:#A9A9A9;}
        </style>
    </head>
    <body class='bgimg-1'>
    <!-- Navbar (sit on top) -->
        <div class="w3-top">
          <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a class="w3-bar-item w3-button w3-wide"><?php echo $email; ?></a>
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
                <a id='blogs2' class="w3-bar-item w3-button">BLOG</a>
                <a id='contact2' class="w3-bar-item w3-button">CONTACT</a>
                <a  href='signout.php'class="w3-bar-item w3-button">SIGN OUT</a>
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
          <a id='blogs3' onclick="w3_close()" class="w3-bar-item w3-button">BLOG</a>
          <a id='contact3' onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
          <a href='guest.php' onclick="w3_close()" class="w3-bar-item w3-button">SIGN OUT</a>
        </nav>

        <div class="wrapper">
            <main id='calendar'>
                <div class="toolbar">
                    <div class="current-month">June 2016</div>
                </div>
              <div class="calendar">
                <div class="calendar__header">
                  <div>mon</div>
                  <div>tue</div>
                  <div>wed</div>
                  <div>thu</div>
                  <div>fri</div>
                  <div>sat</div>
                  <div>sun</div>
                </div>
                <div class="calendar__week">
                  <div class="calendar__day day">1</div>
                  <div class="calendar__day day">2</div>
                  <div class="calendar__day day">3</div>
                  <div class="calendar__day day">4</div>
                  <div class="calendar__day day">5</div>
                  <div class="calendar__day day">6</div>
                  <div class="calendar__day day">7</div>
                </div>
                <div class="calendar__week">
                  <div class="calendar__day day">8</div>
                  <div class="calendar__day day">9</div>
                  <div class="calendar__day day">10</div>
                  <div class="calendar__day day">11</div>
                  <div class="calendar__day day">12</div>
                  <div class="calendar__day day">13</div>
                  <div class="calendar__day day">14</div>        
                </div>
                <div class="calendar__week">
                  <div class="calendar__day day">15</div>
                  <div class="calendar__day day">16</div>
                  <div class="calendar__day day">17</div>
                  <div class="calendar__day day">18</div>
                  <div class="calendar__day day">19</div>
                  <div class="calendar__day day">20</div>
                  <div class="calendar__day day">21</div>    
                </div>
                <div class="calendar__week">
                  <div class="calendar__day day">22</div>
                  <div class="calendar__day day">23</div>
                  <div class="calendar__day day">24</div>
                  <div class="calendar__day day">25</div>
                  <div class="calendar__day day">26</div> 
                  <div class="calendar__day day">27</div> 
                  <div class="calendar__day day">28</div> 
                </div>
                <div class="calendar__week">
                  <div class="calendar__day day">29</div>
                  <div class="calendar__day day">30</div>
                  <div class="calendar__day day">31</div>
                  <div class="calendar__day day">1</div>
                  <div class="calendar__day day">2</div>
                  <div class="calendar__day day">3</div>
                  <div class="calendar__day day">4</div>
                </div>
              </div>
            </main>
            <main id='settings'>
                <div class="form w3-white">

                <form id ='settingform' action='http://localhost/webpro/setting.php' method='POST'>
                <div>
                <h3>Account Info</h3>
                </div>


                <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "mydiarydb";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                $ses_email=$_SESSION['email'];
                $sql = "select fname,lname,username,email from signup where email= '$ses_email' ";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res)>0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($res)) {

                                 $fname= $row['fname'];
                                 $lname= $row['lname'];
                                 $username= $row['username'];
                                 $email= $row['email'];?>
                <div class="top-row">
                <div class="field-wrap">

                              FirstName<label><span class="req"></span></label>
                              <input type="text"  name="fname"  value="<?php echo $fname; ?>" readonly autocomplete="off" />
                            </div>

                            LastName<div class="field-wrap">
                              <label><span class="req"></span></label>
                              <input type="text" name="lname" value="<?php echo $lname; ?>" readonly autocomplete="off"/>
                            </div>
                          </div>
                <div class="top-row">
                <div class="field-wrap">
                            UserName<label><span class="req"></span></label>
                            <input type="text"  name="username" value="<?php echo $username; ?>" readonly autocomplete="off"/>
                          </div>

                          <div class="field-wrap">
                            Email<label><span class="req"></span></label>
                            <input type="email"  name="email" value="<?php echo $email; ?>" readonly  autocomplete="off"/>
                          </div>
                </div>

                </form>

                <h3>Deactivate your account</h3>
                <p>If you deactivate your account you will lost all your data.Your public blogs will still be visible to users though.</p>
                <br>
                <p><a  href='delete.php' class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Deactivate</a></p>
                </div>
               <?php	

                }}
                mysqli_close($conn);
                ?>     
            </main>
            <main id='newentry'>
                <div class="form w3-white">
                    <form id='newdiaryentry' action="http://localhost/webpro/diary.php" method="POST">
                        <div>
                            <h3>Diary Entry</h3>
                        </div>

                        <div class="top-row">
                            <div class="field-wrap">

                                <label><span class="req"></span></label>
                                <input type="date" required name="date" placeholder="Enter Date" />
                            </div>

                            <div class="field-wrap">
                                <label><span class="req"></span></label>
                                <input type="text"required name="day" placeholder="Enter Day"autocomplete="off"/>
                            </div>
                            <div class="field-wrap">
                                <label><span class="req"></span></label>
                                <input type="text"required name="title" placeholder="Enter Title"autocomplete="off"/>
                            </div>
                        </div>
                        <div class="top-row">
                            <textarea form='newdiaryentry' name='diarytext' class=' w3-container'style="width:100%;height:400px;border-radius: 20px;">
                            </textarea>
                            <input type='hidden' name='diary_submitted' value='1' />
                        </div>    

                        <button type="submit" class="button button-block" value='SUBMIT DIARY ENTRY'/>Submit Diary Entry
                    </form>
                </div>  
            </main>
            <main id='blogs'>
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
           <input type='hidden' name='user_form_submitted' value='1' />
            <input type="submit" value="Submit">
          </form>
</main>
            <sidebar>
                <br>
                <nav class="menu" >
                  <a class="menu__item" id='newentry2'>
                    <i class="menu__icon fa fa-plus"></i>
                    <span class="menu__text">NEW ENTRY</span>
                  </a>
                  <a id='calendar2'class="menu__item menu__item--active" >
                    <i class="menu__icon fa fa-calendar" ></i>
                      <span class="menu__text">CALENDAR</span>
                  </a>
                  <a class="menu__item" id='settings2'>
                    <i class="menu__icon fa fa-gear"></i>
                    <span class="menu__text">SETTINGS</span>
                  </a>
                </nav>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('sidebar a').click(function(){
            $('sidebar a').css('background-color','black');
            $('.w3-top a').css('background-color','white');
           $(this).css('background-color','purple'); 
        });
        $('#calendar2').click(function(){ 
            $('main').hide();
            $('#calendar').show();
        });
        $('#settings2').click(function(){ 
            $('main').hide();
            $('#settings').show();
        });
        $('#newentry2').click(function(){ 
            $('main').hide();
            $('#newentry').show();
        });
        $('.w3-top a').click(function(){
            $('.w3-top a').css('background-color','white');
            $('sidebar a').css('background-color','black');
           $(this).css('background-color','lavender'); 
        });
        $('#blogs2').click(function(){ 
            $('main').hide();
            $('#blogs').show();
        });
        $('#blogs3').click(function(){ 
            $('main').hide();
            $('#blogs').show();
        });
        $('#contact2').click(function(){ 
            $('main').hide();
            $('#contact').show();
        });
        $('#contact3').click(function(){ 
            $('main').hide();
            $('#contact').show();
        });
    });
        
</script>