<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="a online and free Resume builder to generated a modern Resume by own in secounds. created by Qasim Sarwari.">
  <meta name="keywords" content="Online Resume | Resume builder | Free Resume | cv builder | Afghan Resume | Resume maker | CV Maker">
  <meta name="author" content="Qasim Sarwari">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="distribution" content="global" />
  <meta name="rating" content="General" />
  <meta name="language" content="En" />
  <meta name="Googlebot" content="index, follow" />
  <meta name="distribution" content="global" />
  <meta name="object" content="document" />
  <meta name="audience" content="All" />
  <meta name="language" content="english" />
  <link rel="canonical" href="https://cv-builder-af.herokuapp.com/" />
  <link rel="alternate" href="https://cv-builder-af.herokuapp.com" hreflang="en-us" />
  <meta name="robots" content="index" />
  <meta content="Resume builder" property="og:title" />
  <meta content="A online and free Resume builder to generated a modern Resume by own in secounds. created by Qasim Sarwari." property="og:description" />
  <meta property="og:url" content="https://cv-builder-af.herokuapp.com" />
  <meta property="og:site_name" content="Resume Builder" />
  <meta property="og:type" content="website" />
  <!-- seo -->
  <meta name="theme-color" content="#233966" />
  <link rel="manifest" href="manifest.json" />
  <link rel="apple-touch-icon" href="dist/logo.png" />
  <link rel="shortcut icon" href="dist/logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/style.css">
  <link rel="stylesheet" href="dist/animate.css" type="text/css" media="all" />
  <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">-->
  <title>Resume Builder | Online & Free</title>
</head>

<body>
  <div class="loader">
    <img src="dist/logo.png" />
  </div>
  <!-- menu -->
  <div class="back"></div>
  <!-- nav button -->
  <div id="nav-btn" class="animated bounceInRight">
    <div></div>
  </div>
  <!-- sidebar menu -->
  <div id="sidebar">
    <img class="logo" src="dist/logo.png" />
    <h2>Resume Builder</h2>
    <ul>
      <li><a href="#" id="about"><span>info</span> About Us</a></li>
      <li><a href="https://qa-sim.netlify.app" target="_blank"><span>contacts</span> Portfolio</a></li>
      <li><a href="https://qasim345.github.io/ColorPicker"><span>color_lens</span> Color Picker</a></li>
      <li><a href="mailto:qasimsarwari2020@gmail.com"><span>email</span> Contact Us</a></li>
    </ul>
    <div class="social">
      <a href="https://www.facebook.com/qasim.sarwari.10"><i class="fa fa-facebook"></i></a>
      <a href="https://www.instagram.com/qa_sim345"><i class="fa fa-instagram"></i></a>
      <a href="https://t.me/qasim_tech"><i class="fa fa-telegram"></i></a>
      <a href="https://www.twitter.com/Qasimsarwary3"><i class="fa fa-twitter"></i></a>
      <a href="https://www.youtube.com/channel/UCRyEaWppR-X0AfXR6gFxbWw"><i class="fa fa-youtube-play"></i></a>
    </div>
  </div>
  <!-- // menu -->
  <!-- modols -->
  <div class="modol-container animated bounceInDown">
    <!-- about modol -->
    <div class="about-modol" id="ab">
      <div class="up">
        <h2>About Us</h2>
        <span id="close-about">close</span>
      </div>
      <p>
        Hello, I'm Qasim Sarwari with hands on experience of designing, developing and maitaining web. Adept at understanding the requirement of the clients and delivering projects accordingly. Highly skilled at collaborating with team members to ship beautiful
        products within deadilinces.
      </p>
    </div>
  </div>

  <!-- main form -->
  <form action="save.php" class="form animated bounceInUp" method="post" enctype="multipart/form-data">
    <h1>Insert Your Information</h1>
    <div class="public">
      <input type="text" name="fullName" placeholder="Full Name" required>
      <div id="pro">
        <label for="photo">Photo</label>
        <input style="padding-left: 5px;" type="file" id="photo" name="photo">
      </div>
      <br><br>
      <label for="about" style="font-weight: bold">About</label><br>
      <textarea name="about" id="about" cols="30" rows="10" placeholder="About you">I am a productive, honest and intensive worker who wills never loss the loyalty of my organization. Appreciating the opportunity to apply for the job, I thank you for providing me a chance. I am confident that my abilities and passion for the job Make me a strong contender to apply.
      </textarea>
    </div>
    <h3>Personal & Contact & Education Details</h3>
    <hr>
    <div class="pages">
      <div class="pageone">
        <input type="text" name="firstname" placeholder="First name">
        <input type="text" name="lastname" placeholder="Last name">
        <input type="text" name="fathername" placeholder="Father name">
        <input type="text" name="sex" placeholder="Male or Female">
        <input type="text" name="pBirth" placeholder="Place of birth">
        <input type="text" name="dBirth" id="d" onfocus="(this.type = 'date')" placeholder="Date of birth">
        <input type="text" name="nation" placeholder="Nationality">
        <input type="text" name="state" placeholder="Marital state">
      </div>
      <div class="pagetwo">
        <input type="text" name="province" placeholder="Province">
        <input type="email" name="email" placeholder="Email Address">
        <input type="text" name="phone" placeholder="Mobile Number">
        <input type="text" name="location" placeholder="Location">
        <input type="text" name="school" placeholder="School name">
        <input type="text" name="uniy" placeholder="University name">
        <input type="text" name="cource" placeholder="Cources name">
        <input type="text" name="exp1" placeholder="Job Experience 1">
      </div>
      <div class="pagethree">
        <input type="text" name="exp2" placeholder="Job Experience 2">
        <input type="text" name="exp3" placeholder="Job Experience 3">
        <input type="text" name="skill1" placeholder="Computre skill 1">
        <input type="text" name="skill2" placeholder="Computre skill 2">
        <input type="text" name="skill3" placeholder="Computre skill 3">
        <!-- language -->
        <div id="langs">
          <input type="text" name="lang1" class="langN" placeholder="language" />
          <input type="number" name="langPre1" placeholder="Percentage %">
        </div>
        <div id="langs">
          <input type="text" name="lang2" class="langN" placeholder="language">
          <input type="number" name="langPre2" placeholder="Percentage %" />
        </div>
        <div id="langs">
          <input type="text" name="lang3" class="langN" placeholder="language">
          <input type="number" name="langPre3" placeholder="Percentage %" />
        </div>
      </div>
    </div>
    <button type="submit">Submit</button>
  </form>
  <script src="dist/jquery.min.js"></script>
  <script src="dist/main.js"></script>
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
</body>
<!-- All Creadet by Qasim Sarwari -->

</html>