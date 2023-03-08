<?php include("connection.php");
    $sql="select * from banner";
    $banner=mysqli_query($con,$sql);

    $sql="select * from whatidotitle";
    $whatidotitle=mysqli_query($con,$sql);

    $sql="select * from whatido";
    $whatido=mysqli_query($con,$sql);

    $sql="select * from worktitle";
    $worktitle=mysqli_query($con,$sql);

    $sql="select * from work";
    $work=mysqli_query($con,$sql);

    $sql="select * from information";
    $information=mysqli_query($con,$sql);

    $sql="select * from footerdescription";
    $footerdescription=mysqli_query($con,$sql);

    $sql="select * from address";
    $address=mysqli_query($con,$sql);
    
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="js/js.js"></script>
</head>

<body style="background-color:whitesmoke">
    <div class="container-fluid">
        <div class="row">
            <div class="owl-carousel owl-theme" id="owl-demo2">
            <?php
    		    while($row=mysqli_fetch_array($banner))
	  		    {
            ?>
                <div class="item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-7 col-sm-7 bgbanner1554" style="background-image: url('images/<?php echo $row["bannerimage"]?>');background-size: cover;
                                    background-position: center center;height: 100%;width: 58%;filter: blur(1px); -webkit-filter: blur(1px);" >
                                <div class="weblogo">
                                    <h2>
                                        <a href="#" style="color:white;"> <strong><u> M.</u></strong></a>
                                    </h2>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5 bgbanner2">
                                <div class="navlogo" onclick="openNav()" style="color:black">
                                    <i class="fas fa-bars fa-3x"></i>
                                </div>              
                            </div>
                            <div class="bannertitle">
                                ____________
                                <br>
                                <strong>
                                <?php                              
                                    echo wordwrap($row['bannertitle'],25,"<br>",true);
                                ?>
                                </strong>
                                <br><br>
                                <button class="btn ntitle"
                                    style="padding:10px;background-color:transparent; color: black; border: 2px solid black;">Hire
                                    me now --></button>
                            </div>
                            <div class="customNavigation right">
                                <a class="btn prev navbutton" style="color:white"><i
                                        class="fas fa-arrow-left fa-3x"></i></a>

                                <a class="btn next navbutton" style="color:white"><i
                                        class="fas fa-arrow-right fa-3x"></i></a>

                            </div>
                            <div class="ntitle social">
                                <a href="#" style="color:black; font-weight: 600;">
                                    twitter&nbsp;&nbsp;&nbsp;Facebook&nbsp;&nbsp;&nbsp;instagram&nbsp;&nbsp;&nbsp;dribble
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                }
            ?>
            </div>
        </div>
    </div>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="work.php">Work</a>
            <a href="blog.php">Blog</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>


    <section id="whatido" style="background-color:rgba(196, 196, 196, 1)">
        <div class="container animate-box slideInUp animated" data-aos="fade-up" data-aos-duration="2500">
            <div class="col-md-12 text-center ntitle" style="padding-top:5em;margin-top:10em;">WHAT I DO</div>
            <div class="col-md-12 text-center"><strong>\ \</strong></div>
            <?php
    		    while($row=mysqli_fetch_array($whatidotitle))
	  		    {
            ?>
            <div class="col-md-12 text-center htitle">
                <strong>
                    <?php                              
                        echo $row['whatidotitle'];
                    ?>
                </strong> 
            </div>
            <?php 
                }
            ?>
        </div>
        <div class="container animate-box slideInUp animated" data-aos="fade-up" data-aos-duration="2500"
            style="margin-top:20px;margin-bottom: 8em;">
            <div class="row" style="margin-bottom:8em;">
            <?php
    		    while($row=mysqli_fetch_array($whatido))
	  		    {
            ?>
                <div class="col-md-3 box text-center">
                    <p> <img src="images/loupe.png" alt="" height="70px" width="70px" style="margin:5px;"></p>
                    <p class="ntitle">
                        <?php                              
                            echo $row['boxtitle'];
                        ?>
                    </p>
                    <p><strong>_____</strong></p>
                    <p>
                        <?php                              
                                echo $row['desc1'];
                        ?>
                    </p><br>
                    <p>
                        <?php                              
                                echo $row['desc2'];
                        ?>
                    </p><br>
                    <p>
                        <?php                              
                                echo $row['desc3'];
                        ?>
                    </p><br>
                </div>
            <?php 
                }
            ?>
            </div>
        </div>
    </section>
    <section id="work" style="background-color:whitesmoke;">
        <div class="container animate-box slideInUp animated" data-aos="fade-up" data-aos-duration="2500">
            <div class="col-md-12 text-center ntitle" style="padding-top:5em;margin-top:10em;">Work</div>
            <div class="col-md-12 text-center"><strong><i>\ \</i></strong></div>
            <?php
                while($row=mysqli_fetch_array($worktitle))
                {
            ?>
            <div class="col-md-12 text-center htitle">
                <strong>
                    <?php echo $row['worktitle']; ?>
                </strong>
            </div>
            <?php 
                }
            ?>
        </div>
        <div class="container animate-box slideInUp animated" data-aos="fade-up" data-aos-duration="2500"
            style="margin-top:20px;margin-bottom: 8em;">
            <div class="row" style="margin-bottom:8em;">
                <div class="owl-carousel owl-theme" id="owl-demo">
                    <?php
                        while($row=mysqli_fetch_array($work))
                        {
                    ?>
                        <div class="item">
                            <div class="col-md-6 ">
                                <div class="case-img" style="background-image:url('images/<?php echo $row["boximage"]?>')"></div>
                            </div>
                            <div class="col-md-6">
                                <p class="ntitle">
                                    <span><?php echo $row['maintitle']; ?></span>
                                </p>
                                <h3><?php echo $row['boxtitle']; ?></h3>
                                <p><?php echo $row['boxdesc']; ?></p>
                            </div>
                        </div>
                    <?php 
                        }
                    ?>                   
                </div>
            </div>
        </div>
    </section>
    <section id="information" style="background-color: rgba(196, 196, 196, 1)">
        <div class="container animate-box slideInUp animated" data-aos="fade-up">
            <div class="row information">
                <?php
                    while($row=mysqli_fetch_array($information))
                    {
                ?>
                    <div class="col-md-12 text-center" data-aos="fade-up" data-aos-duration="2500">
                    <?php echo $row['para1']; ?>
                    <br><br> <?php echo $row['para2']; ?>
                    <br><br><a href=" <?php echo $row['resumeurl']; ?>"> Read my resume here </a>
                <?php 
                    }
                ?>
                    <br><br><br><br><br>
                    <h1><strong>Subsribe Newsletter</strong></h1>
                    <br><br>Subscribe our Newsletter and get latest update
                    <br><br>
                    <form class="form-inline" method="post" action="subscribe.php" data-aos="fade-up"
                        data-aos-duration="1500">
                        <input type="email" name="emailid" id="emailid" required=""
                            placeholder="Enter your email address" class="inputemail">
                        <input type="submit" value="Subscribe Now" class="submitemail">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container-fluid animate-box slideInUp animated" style="background-color:#002bdc; padding:7em;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 footerleft" data-aos="fade-up" data-aos-duration="2500">
                        <h1 class="titlefooter"><strong> Lets Talk</strong></h1><br>
                        <?php
                            while($row=mysqli_fetch_array($footerdescription))
                            {
                        ?>
                        <p>
                            <?php echo $row['para']; ?>
                        </p>
                        <?php
                            }
                        ?>
                    </div>

                    <div class="col-md-6 footerright" data-aos="fade-up" data-aos-duration="2500">
                        <h1 class="titlefooter"><strong>Info</strong></h1><br>
                        <?php
                            while($row=mysqli_fetch_array($address))
                            {
                        ?>
                        Email:<?php echo $row['email']; ?>
                        <br>Phone: <?php echo $row['contact']; ?><br>
                        Address:<Address><?php echo $row['address1']; ?> <br><?php echo $row['address2']; ?></Address>
                        <?php
                            }
                        ?>
                        <br>Facebook Twitter Dribble
                    </div>
                </div>
                <div class="row footerbanner" data-aos="fade-up" data-aos-duration="2500">
                    <div class="col-md-12">
                        <br><br><br>&copy; Copyright &copy;2019 All rights reserved | This template is made with love by
                        <br> Colorlib Demo Images: Unsplash , Pexels
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
    AOS.init();
    </script>
    <script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
    </script>
</body>
</html>