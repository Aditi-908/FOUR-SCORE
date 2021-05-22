<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
  
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women Security</title>
    <link rel="stylesheet" href="style(main).css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="header">
        <nav>
            
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()" ></i>

                <ul>
                <li><a href="index.php">HOME</a></li>
                    <li><a href="about.html ">ABOUT</a></li>
                    
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT &nbsp; US</a></li>

                    <li><a href="register.php">SIGN &nbsp;UP/LOG &nbsp; IN</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
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
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="login.php?logout='1'" style="color: red; ;">Logout</a> </p>
		
    <?php endif ?>
</div>
        
<h1>VEERANGANA</h1>
<P>For the women, By the women, Of the women</P>
<a href="login.php" class="hero-btn">Join Us</a>
        </div>

    </section>

<!--Facilities provided-->


<section class="facility">
    <h1>Facilities we provide</h1>
    <p class="facpara">Our motive is to provide safety to women and bring them to the mainstream. To accomplish our target, we provide the following facilities.</p>

<div class="row">

    
    <div class="facility-col">
        <a href="self defence.php">
        <h3>Self Defense Tutorials</h3>
        </a>
        <p>Here at Veerangana, we believe that every woman must possess knowledge of self defense and be sufficiently trained in martial arts. Hence, Veerangna makes it their mission to spread awareness about self defence , along with very detailed tutorials on the same, thus allowing women to increase their chances of coming out unharmed in such a case.</p>
    
    </div>


    <div class="facility-col">
        <a href="financialaid.php">
        <h3>Donate For A Cause</h3>
    </a>
        <p>We recognize how many women, more so in rural areas, fear to stand up for their rights and against violence merely because they fear that they will be caught in a financial crunch in the worst of circumstances. And this is why we provide financial aid to such individuals so that more and more women can finally stand up to injustice and create a safe environment.</p>
    
    </div>
  
        
</div>



<div class="row">
    <div class="facility-col">
        <a href="job application.php">
        <h3>Job Options</h3>
    </a>
        <p>Independence is something that is valued by one and all equally and therefore, we provide many job opportunities to the unemployed women so that they can stand up on their own feet and become independent financially so as to not hesitate in emergency situations because of financial crunches.</p>
    
    </div>

    <div class="facility-col">
        <a href="contactauthorities.html">
        <h3>Contact with authorities</h3>
    </a>
        <p>Veerangana is constantly updated about the latest news and achievements regarding the safety and empowerment and thus strives to make the audience informed about the same. This ensures that women can find all the essential help they need in one place and not have to work a lot in order to find the necessary information they need, thus reducing their stress.</p>
    </div>
</div>  
   
<div class="row">
    
<div class="facility-col">
        
        <a href="twitter.php">
        <h3>Connect with others</h3>
    </a>
        <p>Networking is one of the biggest plus points in today’s society and helps to connect people from one corner of the world to the other.Similarly, Veerangna holds meeting and sessions such as video calls so as to increase positivity and optimism in each other’s lives and provide a chance to connect with others and form precious bonds.</p>        
    </div> 

    <div class="facility-col" style="margin-left:30% ">
        <a href="blog.php">
        <h3>Share Story Anonymously</h3>
    </a>
        <p>We also provide opportunities for women to narrate their tales of wit and bravery so as to become an inspiration for billions and gazillions of women out there, who might be facing a similar crisis in their lives. Moreover, we also provide an option of anonymity to reassure all the women that their identity is protected in case they face discomfort in revealing their identity.</p>        

    </div>


</div>   

</section>


<!--Headquarters-->
<section class="cities">

    <h1>Our Headquarters</h1>
    <P class="citpara">Our headquarters are situated in the following cities of India.</P>

<div class="row">
    <div class="cities-col">
        <img src="images/icon-hyderbad-charminar-beautiful-architecture-meets-colorful-nature-146254896.jpg" style="height: 200px; width: 290px;">
        <div class="layer">
            <h3>HYDERABAD</h3>
        </div>
    </div>

    <div class="cities-col">
        <img src="images/chhota-imambara.jpg" style="height: 200px; width: 290px;">
        <div class="layer">
            <h3>LUCKNOW</h3>
        </div>
    </div>


    <div class="cities-col">
        <img src="images/1587125615_6HAxxn_sck.jpg"style="height: 200px; width: 290px;">
        <div class="layer">
            <h3>KANPUR</h3>
        </div>
    </div>



    <div class="cities-col">
        <img src="images/wp6612913.jpg"style="height: 200px; width: 290px;" >
        <div class="layer">
            <h3>VARANASI</h3>
        </div>
    </div>


</div>

</section>



<!--Testimonials-->

<section class="testimonials">
    <h1>What 'Veeranganas' Say</h1>

<p class="testpara">Here are the thoughts and experiences of our members.</p>

<div class="row">
    <div class="testimonial-col">
        <img src="images/user1.jpg">
        <div>
        <p>Security for women is very necessary in this present scenario.  Daily we come across many cases in which women are harrassed and exploited. One day, I came to know aboutt this website. When I visited this website the idea of 'Veerangana' attracted me and I registered . Since then , I really feel confident and safe. Thanks to Veerangana.</p>
        <h3>Shraddha Tripathi</h3>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star-o" ></i>

        </div>
    </div>


    <div class="testimonial-col">
        <img src="images/user2.jpg">
        <div>
        <p> One day I was returning quite late from my office. The roads were deserted and I was feeling very unsafe. Out of the blue, I registered on Veerangana and asked for  a transport so that I could go back home. Surprisingly, within 5 minutes, an auto was sent which real time tracker that tracked my GPS location at each and every point of time. More over, the driver suggested me to video call any one  of my family member. In no time, I reached my home safely. Thank you Veerangana!</p>
        <h3>Akanksha Goel</h3>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star-half-o" ></i>


        </div>
    </div>
</div>
</section>

<!---Call To Action-->

<section class="cta">
    <h1>Join our team of Veeranganas today!</h1>
    <a href="contact.php" class="hero-btn">CONTACT US</a>
</section>

<!--Footer-->

<section class="footer">
    <h4>About Us</h4>
    <p>
        We at 'Veerangana' aim to help all those woman that feel unsafe to become a more empowered character.
    </p>

<div class="icon">
<i class="fa fa-facebook" ></i>
<i class="fa fa-twitter" ></i>
<i class="fa fa-instagram" ></i>
<i class="fa fa-linkedin" ></i>
</div>
</section>





<!--Java Script for Toggle Menu-->
<script src="index.js"></script>




</body>
</html>