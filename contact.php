<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" class="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>University</title>
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.php"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Contact Us</h1>
    </section>

    <!-- contact us -->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112966.51515861391!2d85.65421816467584!3d27.772700150052554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ebac2e539b8751%3A0xbfee2a4f31d3786f!2sChautara!5e0!3m2!1sen!2snp!4v1682006142974!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>Bagmati Coridore, Kupondole</h5>
                        <p>Kupondole, Lalitpur</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>+977-5478963</h5>
                        <p>Sunday to Saturday, 10AM to 6PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>dhunganasuman272@gmail.com</h5>
                        <p>Email Us Your Query</p>
                    </span>
                </div>
                <div class="contact-col">
                    <form action="form-handle.php" method="post">
                        <input type="text" name="name" placeholder="Enter Your Name" required>
                        <input type="email" name="email" placeholder="Enter Your Email" required>
                        <input type="text" name="subject" placeholder="Enter Your Subject" required>
                        <textarea rows="8" name="message" placeholder="Message" required></textarea>
                        <button type="submit" class="hero-btn red-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- /footer -->
    <section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus numquam delectus alias commodi ipsum voluptatibus natus ex animi blanditiis <br>aliquam esse nihil, vitae deserunt magni inventore ea corporis praesentium in.</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made With<i class="fa fa-heart-o"></i>By suman dhungana</p>
    </section>

    <!-- javascript for toggle menu -->
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>

</body>
</html>