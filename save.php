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
        <meta name="theme-color" content="#233966" />
        <link rel="stylesheet" href="dist/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="dist/style.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
        <title>Generated Resume</title>
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
        <div class="back"></div>
        <div id="nav-btn">
          <div></div>
        </div>
        <div id="sidebar">
          <img class="logo" src="dist/logo.png"/>
          <h2>Resume Builder</h2>
          <h3>Choice a theme</h3>
          <div class="colors">
            <div class="col red"></div>
            <div class="col green"></div>
            <div class="col blue active"></div>
            <div class="col black"></div>
          </div>
          <ul>
            <li><a href="#" onclick="genPDF()"><span>save_alt</span> Download PDF</a></li>
            <li><a href="#" id="imgLink" onclick="genPhoto"><span>photo</span> Download Image</a></li>
            <li><a href="#" onclick="window.print()"><span>print</span> Print Page</a></li>
          </ul>
        </div>
        <!--<div class="btns">
        <button onclick="genPDF()">Download PDF</button>
        <button onclick="printPage()">Print</button>
        </div>-->
        <div class="container animated fadeInUp" id="container">
            <div class="top">
                <h1>CURRICULUM VITAE</h1>
            </div>
            <!-- left side -->
            <div class="left-side">
                <div class="profile">
                    <img src="<?php echo $pic; ?>" alt="">
                </div>
                <h1>
                    <?php echo $_POST["fullName"]; ?>
                </h1>
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
                        <td>
                            <?php echo $_POST["firstname"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Last Name: </td>
                        <td>
                            <?php echo $_POST["lastname"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Father Name: </td>
                        <td>
                            <?php echo $_POST["fathername"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Sex:</td>
                        <td>
                            <?php echo $_POST["sex"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Place of birth: </td>
                        <td>
                            <?php echo $_POST["pBirth"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Date of birth:</td>
                        <td>
                            <?php echo $_POST["dBirth"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nationality:</td>
                        <td>
                            <?php echo $_POST["nation"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Marital state:</td>
                        <td>
                            <?php echo $_POST["state"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Province:</td>
                        <td>
                            <?php echo $_POST["province"]; ?>
                        </td>
                    </tr>
                </table>
                <div class="bar"></div>
                <h2>Contact Details</h2>
                <table>
                    <tr>
                        <td><i class="fa fa-envelope"></i></td>
                        <td>
                            <?php echo $_POST["email"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-phone"></i></td>
                        <td>
                            <?php echo $_POST["phone"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-map-marker"></i></td>
                        <td>
                            <?php echo $_POST["location"]; ?>
                        </td>
                    </tr>
                </table>
                <p class="ab">
                    Created by Qasim Sarwari.
                </p>
            </div>
            <!-- // left side -->
            <!-- right side -->
            <div class="right-side">
                <div class="flex">
                <div class="title">
                    <h1>EDUCATION</h1>
                </div>
                <div class="bef"></div>
                </div>
                <div class="info">
                    <h3><i class="fa fa-chevron-right"></i>
                        <?php echo $_POST["school"]; ?>
                    </h3>
                    <h3><i class="fa fa-chevron-right"></i>
                        <?php echo $_POST["uniy"]; ?>
                    </h3>
                    <h3><i class="fa fa-chevron-right"></i>
                        <?php echo $_POST["cource"]; ?>
                    </h3>
                </div>
                <div class="flex">
                <div class="title">
                    <h1>JOB EXPERIENCE</h1>
                </div>
                <div class="bef"></div>
                </div>
                <div class="info">
                    <h3><i class="fa fa-chevron-right"></i>
                        <?php echo $_POST["exp1"]; ?>
                    </h3>
                    <h3><i class="fa fa-chevron-right"></i>
                        <?php echo $_POST["exp2"]; ?>
                    </h3>
                    <h3><i class="fa fa-chevron-right"></i>
                        <?php echo $_POST["exp3"]; ?>
                    </h3>
                </div>
                <div class="flex">
                <div class="title">
                    <h1>COMPUTER SKILLS</h1>
                </div>
                <div class="bef"></div>
                </div>
                <div class="info">
                    <h3><i class="fa fa-chevron-right"></i>
                        <?php echo $_POST["skill1"]; ?>
                    </h3>
                    <h3><i class="fa fa-chevron-right"></i>
                        <?php echo $_POST["skill2"]; ?>
                    </h3>
                    <h3><i class="fa fa-chevron-right"></i>
                        <?php echo $_POST["skill3"]; ?>
                    </h3>
                </div>
                <div class="flex">
                <div class="title">
                    <h1>LANGUAGE SKILLS</h1>
                </div>
                <div class="bef"></div>
                </div>
                <div class="info">
                    <div class="lang-bar" style="margin-top:20px;">
                        <h3><?php echo $_POST["lang1"]; ?></h3>
                        <div class="lang">
                            <div class="english" style="width: <?php echo $_POST["langPre1"]; ?>%">
                                <p>
                                    <?php echo $_POST["langPre1"] . "%"; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lang-bar">
                        <h3><?php echo $_POST["lang2"]; ?></h3>
                        <div class="lang">
                            <div class="dari" style="width: <?php echo $_POST["langPre2"]; ?>%">
                                <p>
                                    <?php echo $_POST["langPre2"] . "%"; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lang-bar">
                        <h3><?php echo $_POST["lang3"]; ?></h3>
                        <div class="lang">
                            <div class="pashto" style="width: <?php echo $_POST["langPre3"]; ?>%">
                                <p>
                                    <?php echo $_POST["langPre3"] . "%"; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="dist/jquery.min.js"></script>
       <!-- <script src="dist/jspdf.min.js"></script>
        <script src="dist/html2canvas.js"></script>-->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <script>
            setTimeout(() => {
                $(".loader").fadeOut(500);
            }, 3000)
        // toggle navbar

        $("#nav-btn").click(() => {

            $(".back,#nav-btn,#sidebar").toggleClass("act");
        });
        document.onclick = ((e) => {
            if (e.target.id !== 'sidebar' && e.target.id !== 'nav-btn') {
                $(".back,#nav-btn,#sidebar").removeClass("act");
            }
        })
            $(".red").click(() => {
              $(".red").addClass("active");
              $(".blue,.green,.black").removeClass("active");
                $(".container,.top,.left-side,.title,.bef,.info,.lang div").addClass("redB");
                $(".container,.top,.left-side,.title,.bef,.info,.lang div").removeClass("greenB");
                $(".container,.top,.left-side,.title,.bef,.info,.lang div").removeClass("blueB");
                $(".container,.top,.left-side,.title,.bef,.info,.lang div").removeClass("blackB");
            });
            $(".blue").click(() => {
              $(".blue").addClass("active");
              $(".red,.green,.black").removeClass("active");
                $(".container,.top,.left-side,.title,.bef,.info,.lang div").addClass("blueB");
                $(".container,.top,.left-side,.title,.bef,.info,.lang div").removeClass("greenB");
                $(".container,.top,.left-side,.title,.bef,.info,.lang div").removeClass("redB");
                $(".container,.top,.left-side,.title,.bef,.info,.lang div").removeClass("blackB");
            });
            $(".green").click(() => {
              $(".green").addClass("active");
              $(".blue,.red,.black").removeClass("active");
                $(".container,.top,.left-side,.title,.bef,.info,.lang div").addClass("greenB");
                $(".container,.top,.left-side,.title,.bef,.info,.lang div").removeClass("blueB");
                $(".container,.top,.left-side,.title,.bef,.info,.lang div").removeClass("redB");
                $(".container,.top,.left-side,.title,.bef,.info,.lang div").removeClass("blackB");
            });
            $(".black").click(() => {
              $(".black").addClass("active");
              $(".blue,.green,.red").removeClass("active");
                $(".container,.top,.left-side,.title,.bef,.info,.lang div").addClass("blackB");
                $(".container,.top,.left-side,.title,.bef,.info,.lang div").removeClass("blueB");
                $(".container,.top,.left-side,.title,.bef,.info,.lang div").removeClass("redB");
                $(".container,.top,.left-side,.title,.bef,.info,.lang div").removeClass("greenB");
            });
           // print 
           /* function printPage(){
                $(".btns").fadeOut(100);
                $(".colors").fadeOut(100);
                window.print();
            }*/
            // get pdf file
          /*  function genPDF() {
                window.scrollTo(0,0);
                html2canvas(document.getElementById("container")).then(canvas => {
                var img = canvas.toDataURL("image/png");
                var doc = new jsPDF("p", "mm", [149,189]);
                doc.addImage(img, 'png', -1.5, 0, 150, 189);
                doc.save("Resume.pdf");
            })
            }*/
            function genPhoto(){
              var node = document.getElementById("container");
              domtoimage.toPng(node).then(function (dataUrl){
                var img = new Image();
                img.src = dataUrl;
                downloadUrl(dataUrl,"Resume.png");
              });
            }
              function downloadUrl(uri,name){
              var a = document.createElement("a");
                a.href = uri;
                a.download = name;
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                delete a;
            }
        </script>
    </body>
    <!-- All Created by Qasim Sarwari -->

    </html>