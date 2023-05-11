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
        <h1>About Us</h1>
    </section>

    <!-- about us content -->
    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>We are the world largest university</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur quibusdam iusto dolorum! Aut voluptatem debitis eum, voluptate ab sequi velit repellendus, maxime enim recusandae explicabo. Natus officia numquam maiores quam.</p>
                <a href="" class="hero.btn red-btn">EXPLORE NOW</a>
            </div>
            <div class="about-col">
                <img src="images/metting.jpeg">
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