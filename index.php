<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $to_email = "abdul.qadir.avadia@gmail.com";
    $subject = "contact from gFX paradise";
$body = "foolowing person contacted<br>
$name <br>
$email <br>
$phone <br>
$message
";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: gfx.paradise.official@gmail.com' . "\r\n";




if (mail($to_email, $subject, $body, $headers)) {
    ?>
    <script>alert('message has been sent to '+'<?php echo $to_email;?>'); </script>

  <?php
} else {
    
    echo '<script> alert("Email sending failed...") </script>' ;
}

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GFX Paradise</title>
    <link rel="icon" type="image/x-icon" href="images/img-8.png">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <link href='https://fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>
    <!-- custom cursors  -->
    <div class="cursor-1"></div>
    <div class="cursor-2"></div>


    <div id="menu-bars" class="fas fa-bars" onclick=" open"></div>

    <div id="toggle-btn" class="fas fa-sun"></div>


    <!-- header section starts  -->

    <header>

        <a href="#" class="logo"> <span>GFX</span> Paradise </a>

        <nav class="navbar">
            <a href="#home"><i class="fa fa-home" style="color: #14a800"></i> home</a>
            <a href="#about"><i class="fa fa-user" style="color: #14a800"></i> abou</a>
            <a href="#service"><i class="fa fa-list " style="color: #14a800"></i> service</a>
            <a href="#portfolio"><i class="fa fa-briefcase" style="color: #14a800"></i> portfolio</a>
            <a href="#contact"><i class="fa fa-comment" style="color: #14a800"></i> contact</a>
        </nav>

        <div class="follow">
            <a href="https://www.behance.net/AbdulQadirTGP" target="_blank" class="fab fa-behance"></a>
            <a href="https://www.youtube.com/c/GamesParadise136" target="_blank" class="fab fa-youtube"></a>
            <a href="https://www.instagram.com/abdulqadir_tgp/" target="_blank" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/abdul-qadir-avadia-49936a207/" target="_blank"
                class="fab fa-linkedin"></a>
        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <span class="hi"> hi there... </span>
            <h3> My name is <span> Abdul Qadir </span> </h3>
            <h4 class="info"> I am a <span class="typing">Graphic Designer</span> </h4>
            <p class="text"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias quidem excepturi natus iste
                ut. Alias, quod? Earum pariatur obcaecati dolorum! </p>
            <a href="#about" class="btn">about me</a>
        </div>

        <div class="image">
            <img src="images/home-img-01.png" alt="">
        </div>
    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> about <span> me </span> </h1>

        <div class="row-1">

            <div class="image">
                <img src="images/img-8.png" alt="">
            </div>

            <div class="content">
                <h3> My name is Abdul Qadir & I am a Graphic Designer </h3>
                <p>I am from Karachi, Pakistan. I got my start as a graphic designer by creating a logo, banner and
                    thumbnails for my youtube channel. After that my interest increased in graphic designing, then i
                    start doing graphic designing work as freelancer.Today, I am open to all kinds of design work.

                    If you have any type of design related work , I am here for you to get quality work at a minimum
                    time and affordable price.
                </p>

                <div class="box-container">
                    <div class="box">
                        <p> <span> age : </span> 21 </p>
                        <p> <span> gender : </span> Male </p>
                        <p> <span> language : </span> Urdu & English </p>
                        <p> <span> work : </span> Graphic Designer </p>
                    </div>
                    <div class="box">
                        <p> <span> freelance : </span> Available </p>
                        <p> <span> phone : </span> +92 3010 301158 </p>
                        <p> <span> email : </span> abdul.qadir.avadia@gmail.com </p>
                        <p> <span> country : </span> Pakistan </p>
                    </div>
                </div>

            </div>

        </div>
        <center>
            <a href="#" class="bn">download CV</a>
            <a href="#" class="bn">hire me</a>
        </center>
<br>
        <h1 class="heading"> <span> my </span> skills </h1>

        <div class="row-2">

            <div class="skills">
                <div class="progress">
                    <h3> Graphic Designer <span> 95% </span> </h3>
                    <div class="bar"> <span></span> </div>
                </div>
                <div class="progress">
                    <h3> Video Editor <span> 80% </span> </h3>
                    <div class="bar"> <span></span> </div>
                </div>
                <div class="progress">
                    <h3> Wordpress Developer <span> 75% </span> </h3>
                    <div class="bar"> <span></span> </div>
                </div>
                <div class="progress">
                    <h3> Front End Developer <span> 85% </span> </h3>
                    <div class="bar"> <span></span> </div>
                </div>
            </div>

            <div class="box-container">

                <div class="box">
                    <h3> >> 3+ </h3>
                    <p>years of experience</p>
                </div>
                <div class="box">
                    <h3> >> 150+ </h3>
                    <p>happy clients</p>
                </div>
                <div class="box">
                    <h3> >> 200+ </h3>
                    <p>projects completed</p>
                </div>
                <div class="box">
                    <h3> >> 4+ </h3>
                    <p>certificate</p>
                </div>

            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- service section starts  -->

    <section class="service" id="service">

        <h1 class="heading"> <span> my </span> services </h1>

        <div class="box-container">

            <div class="box">
                <i class="fa-solid fa-pen-nib"></i>
                <h3>Logo & Branding</h3>
                <p>The logo is the face of your Brand. I have great experience of designing Logo, I designed logos and
                    brand identities for many reputed companies and that's something i am good at.</p>
            </div>

            <div class="box">
                <i class="fa-solid fa-film"></i>
                <h3>Video Editing</h3>
                <p>Want to share your video with your friends, family or world but you don't know how to edit your
                    video, So you are at the right place. Just give me a chance, I promise you never regrate</p>
            </div>

            <div class="box">
                <i class="fa-solid fa-print"></i>
                <h3>Print Design Services</h3>
                <p>Sending something to print can be so final! Don't make the mistake of having a mistake - get the
                    design right the first time, whether it's a flyer, poster or sticker. Check out my print design
                    services. </p>
            </div>

            <div class="box">
                <i class="fa-solid fa-shirt"></i>
                <h3>Product & Merchandise Design Services</h3>
                <p>Need some walking advertising? A little promotional gear for the team manning the tradeshow booth?
                    Get custom apparel, mugs or caps by hiring me.</p>
            </div>

            <div class="box">
                <i class="fa-solid fa-palette"></i>
                <h3>Art & Illustration</h3>
                <p>Want some Art and Illustration work, So you are at the right place. Whether you need a mascot
                    designed for your sporting team or a piece of custom wall art here you'll find everything you need.
                    Try my Art & Illustration service.</p>
            </div>

            <div class="box">
                <i class="fa-solid fa-palette"></i>
                <h3>Art & Illustration</h3>
                <p>Want some Art and Illustration work, So you are at the right place. Whether you need a mascot
                    designed for your sporting team or a piece of custom wall art here you'll find everything you need.
                    Try my Art & Illustration service.</p>
            </div>

    </section>

    <!-- service section ends -->
    <!-- portfolio section starts  -->

    <section class="portfolio" id="portfolio">

        <h1 class="heading"> <span> my </span> portfolio </h1>

        <div class="box-container">

            <div class="img-area">
                <a href="Logo Design/Logo Design.html"> <img src="images/Logo-01.png">
                    <div class="img-text">
                        <h2>Logo Design </h2>
                    </div>
                </a>
            </div>

            <div class="img-area">
                <a href="Banner/Banner.html"> <img src="images/Banner-01.png">
                    <div class="img-text">
                        <h2> Banner Design </h2>
                    </div>
                </a>
            </div>

            <div class="img-area">
                <a href="Brochure/Brochure.html"> <img src="images/Brochure-01.png">
                    <div class="img-text">
                        <h2> Brochure & Flyer Design </h2>
                    </div>
                </a>
            </div>

            <div class="img-area">
                <a href="Card/Card.html"> <img src="images/Card-01.png">
                    <div class="img-text">
                        <h2> Business Card </h2>
                    </div>
                </a>
            </div>

            <div class="img-area">
                <a href="Logo/Logo.html"> <img src="images/Mascot-01.png">
                    <div class="img-text">
                        <h2> Mascot Logo </h2>
                    </div>
                </a>>
            </div>

            <div class="img-area">
                <a href="Poster/poster.html"> <img src="images/Poster-01.png">
                    <div class="img-text">
                        <h2> Poster Design </h2>
                    </div>
                </a>
            </div>

        </div>
        <center>
            <a href="Portfolio page/portfolio.html" class="bn">Load More</a>
        </center>
    </section>

    <!-- portfolio section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> contact <span> me </span> </h1>

        <div class="icons-container">

            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3>my email</h3>
                <p>abdul.qadir.avadia@gmail.com
                    gfx.paradise.official@gmail.com
                </p>
            </div>

            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3>my number</h3>
                <p>+92 3010 3011 58</p>
                <p>+92 3002 1544 57</p>
            </div>

            <div class="icons">
                <i class="fas fa-map-marker-alt"></i>
                <h3>my address</h3>
                <p> NP-11/1, MUHAMMAD SHAH STREET, JUDIA BAZAR KARACHI</p>
            </div>

        </div>

        <div class="row">

            <form action = "index.php" method = 'POST'>
                <h3>Get In Touch</h3>
                <input type="text" id="name" name = 'name' placeholder="Your Name" required>
                <input type="email" id="email" name = 'email' placeholder="email id" required>
                <input type="Contact Number" id="phone" name = 'phone' placeholder="Phone Number" required>
                <textarea id="message" rows="10" name = 'message' placeholder="How can we help you" ></textarea>
                <button type="submit">Send</button>
            </form>
        </div>


        
    </section>
    <!-- contact section ends -->

    <!-- footer section  -->
    <footer class="footer"> created by <span> GFX Paradise </span> | all rights reserved! </footer>






















    <!-- custom js file link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"
        referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>

</body>

</html>