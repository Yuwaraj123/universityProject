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
    <section class="header">
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

        <div class="text-box">
            <h1>World's Biggest University</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ut quisquam nam alias voluptates non, cum dolore accusantium nisi quam,<br> animi suscipit obcaecati dolorem voluptate earum tenetur sunt laboriosam perferendis.</p>
            <a href="" class="hero-btn">Visit Us To Know More</a>
        </div>
    </section>

    <!-- course -->  
    <section  class="course">
        <h1>Courses We Offer</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

        <div class="row">
            <div class="course-col">
                <h3>Intermediate</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptatem nulla ex iure sit dolorem ad, tempora quia, nobis laborum maxime delectus et dicta consectetur sapiente sequi! Sunt, voluptatem velit?</p>
            </div>
            <div class="course-col">
                <h3>Degree</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptatem nulla ex iure sit dolorem ad, tempora quia, nobis laborum maxime delectus et dicta consectetur sapiente sequi! Sunt, voluptatem velit?</p>
            </div>
            <div class="course-col">
                <h3>Post Graduation</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptatem nulla ex iure sit dolorem ad, tempora quia, nobis laborum maxime delectus et dicta consectetur sapiente sequi! Sunt, voluptatem velit?</p>
            </div>
        </div>
    </section>

    <!-- campus -->
    <section class="campus">
        <h1>Our Global Campus</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <div class="row">
            <div class="campus-col">
                <img src="images/building1.jpeg">
                <div class="layer">
                    <h3>WASHINGTON</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/building2.jpeg">
                <div class="layer">
                    <h3>LONDON</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/building3.jpeg">
                <div class="layer">
                    <h3>NEWYORK</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- facilities -->
    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

        <div class="row">
            <div class="facilities-col">
                <img src="images/sport1.webp">
                <h3>Play Ground</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="facilities-col">
                <img src="images/library1.jpeg">
                <h3>Awesome Library</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="facilities-col">
                <img src="images/canteen1.webp">
                <h3>Clean Canteen</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </section>

    <!-- testimonials -->
    <section class="testimonials">
        <h1>What Our Student Says</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>

        <div class="row">
            <div class="testimonial-col">
                <img src="images/boys.jpeg">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, molestiae quia voluptatum nam unde labore repellendus fuga placeat ea! Porro, ex? Aut pariatur est exercitationem quam blanditiis ipsam libero ad!</p>
                    <h3>Christine Berkley</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="images/girl.webp">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, molestiae quia voluptatum nam unde labore repellendus fuga placeat ea! Porro, ex? Aut pariatur est exercitationem quam blanditiis ipsam libero ad!</p>
                    <h3>David Byer</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- call to action -->
    <section class="cta">
        <h1>Lorem ipsum dolor sit amet<br>elit Ipsa dicta, modi.</h1>
        <a href="" class="hero-btn">Contact Us</a>
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

<!--  How To Make Website Using HTML & CSS | Full Responsive Multi Page Website Design Step by Step  -->