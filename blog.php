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
        <h1>Our Certificate & Online Programs For 2023</h1>
    </section>

    <!-- blog page-->
    <section class="blog-content">
        <div class="row">
            <div class="blog-left">
                <img src="images/passout.jpeg">
                <h2>Our Certificate & Online Programs For 2023</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis non quo, quas, natus atque tenetur error rerum velit molestiae similique recusandae beatae hic adipisci, quibusdam commodi. Ipsa aspernatur aliquam natus!</p><br>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab repudiandae dolores saepe explicabo voluptatum, soluta neque expedita asperiores laborum omnis sint ea fugit alias aliquid eligendi quis ipsam iste voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam mollitia debitis vero voluptatibus ad reiciendis asperiores porro voluptatum eaque nisi, iusto praesentium ut sint numquam nostrum error ex alias cupiditate.</p><br>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus iste eos laudantium explicabo. Porro earum magni odio accusamus mollitia sequi exercitationem amet. Ullam eos saepe, officiis est ipsa nemo eligendi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus dignissimos ad perferendis laborum aspernatur. Earum quod eveniet et velit fugiat vel sequi necessitatibus architecto ullam enim. Harum quasi voluptate quia.</p><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ut repudiandae animi veritatis, dolorem veniam magnam repellat facere totam ratione, quidem nam! Quo alias quam eveniet modi nulla iure. Ducimus?</p>

                <div class="comment-box">
                    <h3>Leave a comment</h3>
                    <form class="comment-form">
                        <input type="text" placeholder="Enter Name">
                        <input type="email" placeholder="Enter Email">
                        <textarea rows="5" placeholder="Your Comment"></textarea>
                        <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
                    </form>
                </div>
            </div>
            <div class="blog-right">
                <h3>Post Categories</h3>
                <div>
                    <span>Business Analytics</span>
                    <span>21</span>
                </div>
                <div>
                    <span>Data Sciense</span>
                    <span>28</span>
                </div>
                <div>
                    <span>Machine Learning</span>
                    <span>15</span>
                </div>
                <div>
                    <span>Computer Science</span>
                    <span>34</span>
                </div>
                <div>
                    <span>Auto CAD</span>
                    <span>42</span>
                </div>
                <div>
                    <span>Journalism</span>
                    <span>22</span>
                </div>
                <div>
                    <span>Commerse</span>
                    <span>29</span>
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