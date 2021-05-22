<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women Security</title>
    <link rel="stylesheet" href="stylejob.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="sub-header-job">
        <nav>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()" ></i>

                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.html ">ABOUT</a></li>
                  
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>

                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
       <h1 style="text-decoration: overline;">JOB OPPOURTUNITIES</h1>
       <p style="font-size: x-large; ">you have skills, we have platform</p>
    </section>

    <div class="contact-col">
        <form action="job.php" method="post">
    
    <div>
    <input type="text" placeholder="Name" name="Name" required>
    <input type="email" placeholder="Your email id" name="mail" required>
    <input type="text" placeholder="Your Message" name="message" required>
    <input type="text" placeholder="Your Contact no." name="number" required>
    <input type="text" placeholder="Put the drive link of your resume!" name="resume" required>
   </div>
    
 <!------
<div class="resume">
 

    <div class="field-wrapper" >
    <input type="text" id="file" name="fle-upload-field" class="file-upload-file" value="" accept="application/pdf, application/msword">   
</div>
</div>
---->


  <div class="h4">
    <h4>Select Your Area of Interest</h4>
</div>
    
</form>
<form>
    <div class="tick">
    <label class="hello">Technical
        <input type="checkbox" >
        <span class="checkmark"></span>
      </label>
      <label class="hello">Non-Technical
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
      <label class="hello">voluntary
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
      
    </div>
    <div style="opacity: 1; margin: 90px 40px 10px 600px; padding-bottom:80px;" >
        <button type="submit" class="hero-btn red-btn" style="color: rgb(3, 3, 3);">Submit</button>
        </div>

</form>
</body>
</html>
    <script>
    </script>
    
