<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Resume builder using HTML - CSS - JavaScript & PHP">
    <meta name="keywords" content="Online Resume builder, cv maker">
    <meta name="author" content="Qasim Sarwari">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#233966" />
   <link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css" type="text/css" media="all" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    <title>CV builder | by Qasim</title>
</head>

<body>
    <!-- menu -->
    <div class="back"></div>
    <!-- nav button -->
    <div id="nav-btn" class="animated bounceInRight">
        <div></div>
    </div>
    <!-- sidebar menu -->
    <div id="sidebar">
        <h2>CV Builder</h2>
        <ul>
            <li><a href="#" id="about">About Us</a></li>
            <li><a href="https://qa-sim.netlify.app" target="_blank">Portfolio 1</a></li>
            <li><a href="http://qasimsarwari.epizy.com" target="_blank">Portfolio 2</a></li>
            <li><a href="mailto:qasimsarwari2020@gmail.com">Contact Us</a></li>
        </ul>
    </div>
    <!-- // menu -->
    <!-- modols -->
    <div class="modol-container animated bounceInDown">
        <!-- about modol -->
        <div class="about-modol" id="ab">
            <div class="up">
                <h2>About Us</h2>
                <i class="fa fa-close" id="close-about" aria-hidden="true"></i>
            </div>
            <p>
                Hello, I'm Qasim Sarwari with hands on experience of designing, developing and maitaining web. Adept at
                understanding the requirement of the clients and delivering projects accordingly. Highly skilled at
                collaborating with team members to ship beautiful products within deadilinces. i'm from Mazar-e-Sharif
                Afghanistan. born in Sholgara district of balkh province. Graduted from Qadim high school, Study
                Computer Science in Jawzjan University, I always dreamed to be a persion who change the world, therefore
                i started coding and developing cause naw-a-days coding and developing is the one of successful way to
                change the world and develop it. <br>Thanks for visiting!</p>
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
            </div><br><br>
            <label for="about" style="font-weight: bold;">About</label><br>
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
                <input type="number" name="english" placeholder="English language skills %">
                <input type="number" name="dari" placeholder="Dari language skills %">
                <input type="number" name="pashto" placeholder="Pashto language skills %">
            </div>
        </div>
        <button type="submit">Submit</button>
    </form>
    <script src="js/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // toggle navbar
        $("#nav-btn").click(() => {
            $(".back,#nav-btn,#sidebar").toggleClass("act");
        });
        document.onclick = ((e) => {
            if (e.target.id !== 'sidebar' && e.target.id !== 'nav-btn') {
                $(".back,#nav-btn,#sidebar").removeClass("act");
            }
        })
        $("#about").click(() => {
            $(".about-modol").css("top", "50%");
            $(".modol-container").css("display", "block");
        })
        $("#close-about").click(() => {
            $(".about-modol").css("top", "-100%");
            $(".modol-container").css("display", "none");
        });
    </script>
</body>
<!-- All Creadet by Qasim Sarwari -->

</html>
