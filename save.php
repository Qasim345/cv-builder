<?php

$photo=$_FILES["photo"];
move_uploaded_file($_FILES["photo"]["tmp_name"],"img/".$_FILES["photo"]["name"]);
$pic="img/". $_FILES["photo"]["name"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1024">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
  <title>Building cv</title>
</head>

<body>
  <div class="loader">
    <div>
      <h3>Building...</h3>
      <div class="load">
        <div></div>
      </div>
    </div>
  </div>
   <button class="print">Download PDF</button>
  <!-- change theme-->
  <div class="colors">
    <div class="red"></div>
    <div class="blue"></div>
    <div class="green"></div>
  </div>
  <div class="container animated fadeInUp" id="container">
    <div class="top">
      <h1>CURRICULUM VITAE</h1>
    </div>
    <!-- left side -->
    <div class="left-side">
      <div class="profile">
        <img src="<?php echo $pic; ?>" alt="">
      </div>
      <h1><?php echo $_POST["fullName"]; ?></h1>
      <div class="about">
        <h3>About Me</h3>
        <p>
          <?php echo $_POST["about"]; ?>
        </p>
      </div>
      <h2>Personal Details</h2>
      <div class="bar"></div>
      <table>
        <tr>
          <td>First Name: </td>
          <td><?php echo $_POST["firstname"]; ?></td>
        </tr>
        <tr>
          <td>Last Name: </td>
          <td><?php echo $_POST["lastname"]; ?></td>
        </tr>
        <tr>
          <td>Father Name: </td>
          <td><?php echo $_POST["fathername"]; ?></td>
        </tr>
        <tr>
          <td>Sex:</td>
          <td><?php echo $_POST["sex"]; ?></td>
        </tr>
        <tr>
          <td>Place of birth: </td>
          <td><?php echo $_POST["pBirth"]; ?></td>
        </tr>
        <tr>
          <td>Date of birth:</td>
          <td><?php echo $_POST["dBirth"]; ?></td>
        </tr>
        <tr>
          <td>Nationality:</td>
          <td><?php echo $_POST["nation"]; ?></td>
        </tr>
        <tr>
          <td>Marital state:</td>
          <td><?php echo $_POST["state"]; ?></td>
        </tr>
        <tr>
          <td>Province:</td>
          <td><?php echo $_POST["province"]; ?></td>
        </tr>
      </table>
      <div class="bar"></div>
      <h2>Contact Details</h2>
      <table>
        <tr>
          <td><i class="fa fa-envelope"></i></td>
          <td><?php echo $_POST["email"]; ?></td>
        </tr>
        <tr>
          <td><i class="fa fa-phone"></i></td>
          <td><?php echo $_POST["phone"]; ?></td>
        </tr>
        <tr>
          <td><i class="fa fa-map-marker"></i></td>
          <td><?php echo $_POST["location"]; ?></td>
        </tr>
      </table>
      <p class="ab">
        Created by Qasim Sarwari.
      </p>
    </div>
    <!-- // left side -->
    <!-- right side -->
    <div class="right-side">
      <div class="title">
        <h1>EDUCATION</h1>
      </div>
      <div class="info">
        <h3><i class="fa fa-chevron-right"></i><?php echo $_POST["school"]; ?></h3>
        <h3><i class="fa fa-chevron-right"></i><?php echo $_POST["uniy"]; ?></h3>
        <h3><i class="fa fa-chevron-right"></i><?php echo $_POST["cource"]; ?></h3>
      </div>
      <div class="title">
        <h1>JOB EXPERIENCE</h1>
      </div>
      <div class="info">
        <h3><i class="fa fa-chevron-right"></i><?php echo $_POST["exp1"]; ?></h3>
        <h3><i class="fa fa-chevron-right"></i><?php echo $_POST["exp2"]; ?></h3>
        <h3><i class="fa fa-chevron-right"></i><?php echo $_POST["exp3"]; ?></h3>
      </div>
      <div class="title">
        <h1>COMPUTER SKILLS</h1>
      </div>
      <div class="info">
        <h3><i class="fa fa-chevron-right"></i><?php echo $_POST["skill1"]; ?></h3>
        <h3><i class="fa fa-chevron-right"></i><?php echo $_POST["skill2"]; ?></h3>
        <h3><i class="fa fa-chevron-right"></i><?php echo $_POST["skill3"]; ?></h3>
      </div>
      <div class="title">
        <h1>LANGUAGE SKILLS</h1>
      </div>
      <div class="info">
        <div class="lang-bar" style="margin-top:20px;">
          <h3>English</h3>
          <div class="lang">
            <div class="english" style="width: <?php echo $_POST["english"] . "%"; ?>">
              <p>
                <?php echo $_POST["english"] . "%"; ?>
              </p>
            </div>
          </div>
        </div>
        <div class="lang-bar">
          <h3>Dari</h3>
          <div class="lang">
            <div class="dari" style="width: <?php echo $_POST["dari"] . "%"; ?>">
              <p>
                <?php echo $_POST["dari"] . "%"; ?>
              </p>
            </div>
          </div>
        </div>
        <div class="lang-bar">
          <h3>Pashto</h3>
          <div class="lang">
            <div class="pashto" style="width: <?php echo $_POST["pashto"] . "%"; ?>">
              <p>
                <?php echo $_POST["pashto"] . "%"; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
  setTimeout(()=>{
      $(".loader").fadeOut(500);
    },3000)
  
    $(".red").click(() => {
      $(".container,.top,.left-side,.title,.info,.lang div").addClass("redB");
      $(".container,.top,.left-side,.title,.info,.lang div").removeClass("greenB");
      $(".container,.top,.left-side,.title,.info,.lang div").removeClass("blueB");
    });
    $(".blue").click(() => {
      $(".container,.top,.left-side,.title,.info,.lang div").addClass("blueB");
      $(".container,.top,.left-side,.title,.info,.lang div").removeClass("greenB");
      $(".container,.top,.left-side,.title,.info,.lang div").removeClass("redB");
    });
    $(".green").click(() => {
      $(".container,.top,.left-side,.title,.info,.lang div").addClass("greenB");
      $(".container,.top,.left-side,.title,.info,.lang div").removeClass("blueB");
      $(".container,.top,.left-side,.title,.info,.lang div").removeClass("redB");
    });
    // print pdf
    $(".print").click(()=>{
      window.print();
      $(".print").fadeOut(100);
      $(".colors").fadeOut(100)
    })
  </script>
</body>
<!-- All Created by Qasim Sarwari -->

</html>