<!-- KIT 502 
Group 3 last edit 26/03/2021 -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>KIT_502_web_dev</title>
    <link rel="stylesheet" type="text/css" href="./css/home.css">
    <link rel="stylesheet" type="text/css" href="./css/booking.css">
    <link rel="stylesheet" type="text/css" href="./css/popup_window.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image" href="../img/logo/Photo.png">
</head>

<body>
    <!---------------part 1-------------------->
    <div class="covid_div">
        <aside class="covid_notice">
            <a class="covid_news" href="https://www.australia.gov.au/">
                <span class="covid_words">Get the latest on our COVID-19 response</span>
            </a>
        </aside>
    </div>
    <nav class="nav_bar">
        <div class="logo">
            <img src="./img/logo/Photo.png" alt="">
        </div>
        <!-- <a href="#" class="toggle_btn">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a> -->
        <div class="nav_links">
            <ul class="list_nav">
                <li><a class="active_nav" href="./home.php">Home</a></li>
                <li><a class="active_nav" href="./customer/booking.php">Book</a></li>
                <li><a class="active_nav" href="#">Customer</a>
                    <!-- sub user bar -->
                    <div class="sub_user">
                        <ul>
                            <li><a href="./customer/customer_login.php">Login</a></li>
                            <!-- <li><a onclick="do_logout()" href="../html/login_reg.html">Logout</a></li> -->
                            <li><a href="./customer/review.php">Review</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="./admin/admin_login.php"><button id="do_admin_login" type="button" class="btn btn-dark" onclick="do_admin_login()">Admin</button></a></li>
                <li><a><button id="open" type="button" class="btn btn-info">Search Now</button></a></li>
            </ul>
        </div>
        <!-- <script src="../js/toggle_bar.js" defer></script> -->
    </nav>

    <!---------------part 2-------------------->
    <div class="gallery_container">
        <div class="slide_show_container">
            <div onclick="push_slides(-1)" class="radio_btn arrow_prev">
                <span class="arrow prev_arrow"></span>
            </div>
            <div onclick="push_slides(1)" class="radio_btn arrow_next">
                <span class="arrow next_arrow"></span>
            </div>
            <!-- gallery text bar -->
            <div class="text_container">
                <p class="text_form slideTextFromTop"></p>
            </div>
            <div class="img_container" id="first">
                <img src="./img/gallery/hotel_1.jpeg">
                <p class="text_form">Ithaa, Location: Rangali Island, Maldives</p>
            </div>
            <div class="img_container">
                <img src="./img/gallery/hotel_2.jpg">
                <p class="text_form">Parallax Restaurant, Location: Mammoth Lakes, California</p>
            </div>
            <div class="img_container">
                <img src="./img/gallery/hotel_3.jpg">
                <p class="text_form">Sur un Arbre Perché, Location: Paris, France</p>
            </div>
            <div class="img_container">
                <img src="./img/gallery/hotel_4.jpg">
                <p class="text_form">Eternity, Location: Truskavets, Ukraine</p>
            </div>
            <div class="img_container">
                <img src="./img/gallery/hotel_5.jpg">
                <p class="text_form">The Disaster Café, Location: Loloret de Mar, Spain</p>
            </div>

            <!-- booking button -->
            <div class="more_info">
                <a class="explore_btn" href="./customer/booking.php">BOOKING NOW</a>
            </div>

            <!-- search popup window -->
            <div class="search_container" id="search_container">
                <div class="Booking_form">
                    <form class="Bk_form_tab">
                        <div class="Bk_op_tab">
                            <label for="Location">Location:</label>
                            <select id="Location" name="Location">
                                <option value="Melbourne">Melbourne</option>
                                <option value="Hobart">Hoart</option>
                                <option value="Sydney">Sydney</option>
                                <option value=“Adelaide”>Adelaide</option>
                            </select>
                        </div>
                        <div class="Bk_tab">
                            <label for="checkin">Check In:</label>
                            <input type="text" id="checkin" name="checkin">
                        </div>
                        <div class="Bk_tab">
                            <label for="checkout">Check Out:</label>
                            <input type="text" id="checkout" name="checkout">
                        </div>
                        <div class="Bk_tab">
                            <label for="guest">Number of Guests</label>
                            <input type="number" min="1" value="1" id="guest">
                        </div>
                        <a href="./customer/booking.php">Search</a>
                        <!-- <a href="../html/booking.html"></a> -->
                        <button class="btn btn-danger" id="close">Close Me</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="dots_container"></div>
    </div>

    <!-- seperate line part -->
    <div class="seperate_line"></div>

    <!--------------footer_part------------------->
    <div class="footer_container">
        <div class="about_us">
            <h2>About us</h2>
            <p>Our goal is to engage our guests and provide them with the best experience through harmonious, zealous and personable service in the most convenient, comfortable, intimate and welcoming setting.</p>
        </div>

        <div class="social_main">
            <div class="social_container">
                <li>
                    <a href=""><img src="./img/footer_social/fb.png" alt=""></a>
                </li>
            </div>
            <div class="social_container">
                <li>
                    <a href=""><img src="./img/footer_social/ins.png" alt=""></a>
                </li>
            </div>
            <div class="social_container">
                <li>
                    <a href=""><img src="./img/footer_social/twitter.webp" alt=""></a>
                </li>
            </div>
            <div class="social_container">
                <li>
                    <a href=""><img src="./img/footer_social/youtube.jpeg" alt=""></a>
                </li>
            </div>
        </div>
    </div>
    <!-- footer part -->
    <footer>
        <p>Copyright &copy; , KIT_502 Assignment_2</p>
    </footer>
    <!-- js files -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="./js/home.js"></script>
    <script src="./js/search_pop.js"></script>
    <script src="./js/admin_pop.js"></script>
    <script src="./js/booking.js"></script>
</body>

</html>