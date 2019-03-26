
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ontario Connect</title>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!--AJAX-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

     <!-- Vue -->
     <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
     <script src="https://unpkg.com/vue"></script>
     <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
 
 
     <!--Waypoint-->
     <!-- <script src="js/noframework.waypoints.min.js"></script>
     <script src="js/mywaypoint.js"></script> -->

     <!-- Vue -->
    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>

</head>
<body>
    
<<<<<<< HEAD:index.php
    <main id="app">

    <img id="logo" src="images/Logo_Icon.svg">

        <nav role="navigation">
                <div id="menuToggle">
        <input id="checkbox" type="checkbox"/>
                
        <span></span>
        <span></span>
        <span></span>
       
    <ul id="menu">
        <div id="nav">
            <router-link :to="{ path: '/promotions'}"><li>Home</li></router-link>
            <router-link :to="{ path: '/promotions'}"><li>Sign Up</li></router-link>
            <a href="index.html"><li>Our Stories</li></a>
            <a href="index.html"><li>Events</li></a>
            <a href="index.html"><li>Testimonies</li></a>
            <router-link :to="{ path: '/form'}"><li>Contact</li></router-link>
        </div>

        <div id="socialIcons">
                <ul id="socialMed">
                        <li><a href="#"><img src="images/facebook.svg" alt="facebook"></a></li>
                        <li><a href="#"><img src="images/instagram.svg" alt="instagram"></a></li>
                        <li><a href="#"><img src="images/twitter.svg" alt="twitter"></a></li>
                        <li><a href="#"><img src="images/Linkdin.svg" alt="linkedin"></a></li>
                </ul>
        </div>
    </ul>

    
</div>
</nav>

<div id="join">
    <h1>JOIN THESE DONORS</h1>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eu- ismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim</p>
    <img src="images/Donor_Cards.jpg" alt="">
</div>


<div id="profiles">
    <ul>
        <div>
            <li><img src="images/Eye_Profile_FemaleOne.jpg" alt="">
                <!-- <figcaption class="caption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit velit illum quae vero sit, eligendi modi ipsam odio est facere, molestias vel commodi voluptates repellendus tempora? Soluta eveniet nemo perferendis.</figcaption> -->
            </li>
        </div>
        <div>
            <li><img src="images/Eye_Profile_FemaleTwo.jpg" alt="">
                <!-- <figcaption class="caption">2Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit velit illum quae vero sit, eligendi modi ipsam odio est facere, molestias vel commodi voluptates repellendus tempora? Soluta eveniet nemo perferendis.</figcaption> -->
            </li>
        </div>

        <div>
            <li><img src="images/Eye_Profile_MaleOne.jpg" alt="">
                <!-- <figcaption class="caption">3Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit velit illum quae vero sit, eligendi modi ipsam odio est facere, molestias vel commodi voluptates repellendus tempora? Soluta eveniet nemo perferendis.</figcaption> -->
            </li>
        </div>

        <div>
            <li><img src="images/Eye_Profile_MaleTwo.jpg" alt="">
                <!-- <figcaption class="caption">4Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit velit illum quae vero sit, eligendi modi ipsam odio est facere, molestias vel commodi voluptates repellendus tempora? Soluta eveniet nemo perferendis.</figcaption> -->
            </li>
        </div>
    </ul>
    </div>
    

<div id="events">


    <div id="event1">
        <img src="images/Events_One.jpg">
        <h3>Event Title</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipisc- ing elit, sed diam nonummy nibh euismod tincidLor- em ipsum dolor.</p>
        <div class="elocation">
            <div class="location">Event Location</div>
            <div class="edate">Event Date</div>
        </div>
    </div>
    <div id="event2">
            <img src="images/Events_Two.jpg">
            <h3>Event Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipisc- ing elit, sed diam nonummy nibh euismod tincidLor- em ipsum dolor.</p>
            <div class="elocation">
                    <div class="location">Event Location</div>
                    <div class="edate">Event Date</div>
            </div>
    </div>
    <div id="event3">
            <img src="images/Events_Three.jpg">
            <h3>Event Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipisc- ing elit, sed diam nonummy nibh euismod tincidLor- em ipsum dolor.</p>
            <div class="elocation">
                    <div class="location">Event Location</div>
                    <div class="edate">Event Date</div>
            </div>
    </div>
</div>
    
    
    <div id="contact">
        <h1>Get In Touch</h1>
        <p>Lorem ipsum dolor sit amet, consectetuer adipisc- ing elit, sed diam nonummy nibh euismod tincidLor- em ipsum dolor.
        </p>
        <script>
            function process(e){
                e.preventDefault();
                console.log(e);
            }//document.getElementById("signUpForm");
          
        </script>
        <form id="signUpForm" onsubmit="process()" action="admin/sendEmail.php" method="POST">        
                <input v-model="input.name" type="text" id="name" name="name" value="" placeholder="Name" required><br><br>
        
                <input v-model="input.email" type="email" id="email" name="email" value="" placeholder="Email Address" required><br><br>

                <textarea v-model="input.msg" type="msg" id="msg" name="msg" value="" placeholder="Message" required></textarea><br><br>
        
                <button @click.prevent="signup()" type="submit" id="submit" name="submit">Submit</button>
        </form>
    </div>
    <img src="images/Contact.jpg" id="contactIMG" alt="contactIMG">


    <footer>
        <ul>
            <li>CONTACT
                <a>How do I register?</a>
                <a>How do I log in?</a>
            </li>

            <li>FAQS
                <a>How do I register?</a>
                <a>How do I log in?</a>
            </li> 

            <li>HEALTH CARE MEMBERS
                <a>Jack Nathan Health</a>
                <a>Sunnybrook Health Sciences Centre</a>
            </li>
        </ul>
    </footer>














=======
<main id="app">

<!-- COMPONENTS BELOW -->
<span v-html="navComponent"></span>
<span v-html="headerComponent"></span>
<span v-html="waitComponent"></span>
<span v-html="videoComponent"></span>
<span v-html="donorsComponent"></span>
<span v-html="profilesComponent"></span>
<span v-html="eventsComponent"></span>
<span v-html="contactComponent"></span>
<span v-html="footerComponent"></span>

<!-- ROUTER TRANSITION -->
>>>>>>> 0e46c2b904d05d7343b06e4d190bbf5466de6662:index.html
    <transition name="fade" mode="out-in">
        <router-view id="move"></router-view>
    </transition> -->



</main>

<!-- JS below -->
<!-- <script src="js/videocontrols.js"></script>  -->
<script src="gulpfile.js"></script>
<script type="module" src="js/main.js"></script>
<!-- <script src="js/master.js"></script>
<script src="js/scrolltotop.js"></script> -->
    
</body>
</html>

<?php if(isset($_GET['status']) && $_GET['status'] == 'successful'): ?>
    <script>
        alert("Thank you for reaching out");
    </script>
<?php elseif(isset($_GET['status'])): ?>
    <script>
        alert("shit happens");
    </script>
<?php endif; unset($_GET); ?>