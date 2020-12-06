<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="shortcut icon" href="./img/—Pngtree—business logo design free logo_915991.png">
    <link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- thẻ div dùng để bao cả trang web -->
    <div class="container-fluid">
        <div class="row">
            <!-- background của phần heading -->
            <div class="background_heading">
                <!-- thẻ div bao toàn bộ navbar -->
                <div class="col-12 navbar_main sticky-top">
                    <div class="row">
                        <!-- thẻ này để chứa navbar nằm bên trái -->
                        <div class="col-6 navbar_body_left">
                            <!-- thẻ này dùng để chia tiếp col-6 ra để chứa các navbar items -->
                            <div class="row nav_left">
                                <!-- thẻ này dùng để chứa logo -->
                                <div class="col-3">
                                    <a class="navbar_logo" href=""><img class="img_logo" src="./img/mona-logo-o.png"
                                            alt=""></a>
                                </div>
                                <!-- thẻ này để chứa navbar itmes place to go -->
                                <div class="col-3 navbar_items"><a href="#willyougo"
                                        style="text-align:center;text-decoration: none; color: #fff;"><i
                                            class="fas fa-map-marker-alt"></i>PLACE TO GO</a></div>
                                <!-- thẻ này để chứa navbar itmes thing to do -->
                                <div class="col-3 navbar_items"><a href="#getinspired"
                                        style="text-align:center; text-decoration: none;color: #fff;"><i
                                            class="fas fa-bicycle"></i>THING TO DO</a></div>
                                <!-- thẻ này để chứa navbar itmes gallery -->
                                <div class="col-3 navbar_items"><a href="#gallery"
                                        style="text-align:center; text-decoration: none;color: #fff;"><i
                                            class="fas fa-images"></i>GALLERY</a></div>
                                <!-- Khi thu nhỏ lại thì sẽ hiện thanh bar này -->
                                <div class="col-3 bar_collapse"><i class="bar_icon fas fa-bars fa-2x"
                                        style="color: #fff;"></i></div>
                            </div>
                        </div>
                        <!-- thẻ này để chứa form tìm kiếm nằm bên phải -->
                        <div class="col-6 navbar_body_right">
                            <form class="search_form">
                                <input class="input_search" type="text" placeholder="Search">
                                <button class="btn_search">Search</button>
                            </form>
                            <i style="color: #fff;" class="fas fa-search iconbar ml-auto"></i>
                        </div>
                        <div class="collap">
                            <div class="items">
                                <a class="title_bar_collap_ptg" href="#willyougo"
                                    style="text-decoration: none; color: #fff;"> <i
                                        class="fas fa-map-marker-alt"></i>PLACE TO GO</a>
                            </div>
                            <div class="items">
                                <a class="title_bar_collap_ttd" href="#getinspired"
                                    style="text-decoration: none;color: #fff;"><i class="fas fa-bicycle"></i>THING TO
                                    DO</a>
                            </div>
                            <div class="items">
                                <a class="title_bar_collap_g" href="#gallery"
                                    style="text-decoration: none;color: #fff;"><i class="fas fa-images"></i>GALLERY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- thẻ này là chứa phần WILL YOU GO ? -->
        <div id="willyougo" class="row justify-content-center" style="background-color: #dddddd;">
            <div class="col-10 d-flex flex-column align-items-center">
                <h1 style="margin-top: 30px;color: #b2910e;font-family: 'Gamja Flower', cursive;">WILL YOU GO ?</h1>
                <h3 style="text-align: center;font-family: 'Gamja Flower', cursive;">Discover the highlights of
                    travelling
                    Vietnam and find ideas for your
                    holidays</h3>
                <!-- đây là phần nội dung của hà nội -->
                <div class="row" style="margin: 30px 0">
                    <!-- lấy 4 cột chứa ảnh -->
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="img_content img_of_hanoi">
                            <a href="#">
                                <img style="width: 100%" src="./img/contenthanoi.jpg" alt="">
                            </a>
                            <div class="scrollbar scrollbar_hanoi">HA NOI</div>
                        </div>
                    </div>
                    <!-- lấy 8 cột để chứa phần giới thiệu -->
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <p class="content content_of_hanoi">Founded over 1000 years ago, Vietnam’s capital city is rich
                            in
                            history, with the streets of
                            its rambling Old Quarter dating back to the 14th century. Wandering these tree-lined lanes
                            past crumbling colonial facades will transport you back in time. However, today's Hanoi is
                            about much more than the past. The ancient city is being invigorated with modern cafes,
                            world-class restaurants, and cool art galleries. When the sun goes down, you have your pick
                            of watering holes, from sophisticated rooftop bars to buzzing bia hoi.</p>
                    </div>
                </div>
                <!-- sparate là các dòng màu đỏ ngăn cách giữa các nội dung trong phần will you go -->
                <div class="sparate"></div>
                <!-- đây là phần nội dung của đã nẵng ở đây dùng flex-row-reverse để đảo ngược phần content vs img lại -->
                <div class="row flex-row-reverse" style="margin: 30px 0">
                    <!-- lấy 4 cột chứa ảnh -->
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="img_content img_of_danang">
                            <a href="#">
                                <img style="width: 100%" src="./img/contentdanang.jpg" alt="">
                            </a>
                            <div class="scrollbar scrollbar2">DA NANG</div>
                        </div>
                    </div>
                    <!-- lấy 8 cột để chứa phần giới thiệu -->
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <p class="content content_of_danang">With broad beaches, fantastic street food, the fabled Hai
                            Van
                            Pass, and a growing collection
                            of cafes, restaurants, and bars, it’s no wonder the residents of Da Nang sport some of the
                            broadest smiles in the country. Da Nang is a true beach city. The warm sands of My Khe Beach
                            sweep south from the mountainous Son Tra Peninsula. Da Nang hosts some of Vietnam's top
                            luxury resorts, but much of the beach still belongs to the people who make it their
                            playground, gym, and source of livelihood.</p>
                    </div>
                </div>
                <!-- sparate là các dòng màu đỏ ngăn cách giữa các nội dung trong phần will you go -->
                <div class="sparate"></div>
                <!-- đây là phần nội của hồ chí minh -->
                <div class="row" style="margin: 30px 0">
                    <!-- lấy 4 cột chứa ảnh -->
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="img_content img_of_hcm">
                            <a href="#">
                                <img style="width: 100%" src="./img/contenthcm.jpg" alt="">
                            </a>
                            <div class="scrollbar scrollbar3">TP.HO CHI MINH</div>
                        </div>
                    </div>
                    <!-- lấy 8 cột để chứa phần giới thiệu -->
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <p class="content content_of_hcm">Vibrating with energy, innovation and traffic – lots of
                            traffic
                            – Ho Chi Minh City, formerly
                            known as Saigon, is the economic heart of Vietnam and the main hub of the southern region. A
                            freewheeling, cosmopolitan metropolis, HCMC's dynamic cityscape draws together old and new
                            Vietnam in the most compact of spaces, representing the city’s past as well as its future.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- thẻ này là chứa phần GET INSPIRED -->
        <div id="getinspired" class="row flex-column align-items-center" style="font-family: 'Gamja Flower', cursive;">
            <h1 style="margin-top: 30px;color: #b2910e">GET INSPIRED</h1>
            <!-- các nút chọn -->
            <div class="row justify-content-center w-100">
                <div class="col-lg-12 choose_inspired d-flex justify-content-around w-100" style="margin-top: 30px">
                    <button type="button" class="btn_food btn btn-outline-danger btn-lg active">Food</button>
                    <button type="button" class="btn_nature btn btn-outline-danger btn-lg">Nature</button>
                    <button type="button" class="btn_culture btn btn-outline-danger btn-lg">Culture</button>
                    <button type="button" class="btn_city btn btn-outline-danger btn-lg">Citys</button>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="col-lg-12" style="margin-top: 60px">
                        <div class="row justify-content-center">
                            <!-- đây là mục click vào để chọn -->
                            <div class="col-lg-4 col-md-11 col-sm-12 col-12">
                                <div class="img_insprired img_insprired_1">
                                    <img class="img_of_insprired img_of_insprired_1" style="width: 100%;"
                                        src="./img/Vietnamese food recipes-1.jpg" alt="">
                                    <div class="content_insprired content_insprired1">5 VIETNAMESE RECIPES TO TRY AT
                                        HOME</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-11 col-sm-12 col-12">
                                <div class="img_insprired img_insprired_2">
                                    <img class="img_of_insprired img_of_insprired_2" style="width: 100%;"
                                        src="./img/Banh mi in Vietnam.jpg" alt="">
                                    <div class="content_insprired content_insprired2">7 SUPER BANH MI TO TRY IN VIET NAM
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-11 col-sm-12 col-12">
                                <div class="img_insprired img_insprired_3">
                                    <img class="img_of_insprired img_of_insprired_3" style="width: 100%;"
                                        src="./img/best dishes HCMC.jpg" alt="">
                                    <div class="content_insprired content_insprired3">EATING LIKE A LOCAL IN HO CHI MINH
                                        CITY</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- đây là phần nhiều ảnh của gallery -->
                    <div id="gallery" class="col-12 album-img" style="margin-top: 50px">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <img class="imgofbeautiful" style="width: 100%;margin-bottom: 10px;"
                                    src="./img/Vietnamese sandwich-4.jpg" alt="">
                                <img class="imgofbeautiful" style="width: 100%;margin-bottom: 10px;"
                                    src="./img/Guide to Vietnam_s crafts_-3.jpg" alt="">
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <img class="imgofbeautiful" style="width: 100%;margin-bottom: 10px;"
                                    src="./img/What to do in Dalat-6.jpg" alt="">
                                <img class="imgofbeautiful" style="width: 100%;margin-bottom: 10px;"
                                    src="./img/Guide to adventures in Con Dao-2_0.jpg" alt="">
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <img class="imgofbeautiful" style="width: 100%;margin-bottom: 10px;"
                                    src="./img/111111.jpg" alt="">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 d-flex align-items-center">
                                <img class="imgofbeautiful" style="width: 100%; margin-bottom: 10px;"
                                    src="./img/hinh-anh-lang-bac-nemtv-04.jpg" alt="">
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <img class="imgofbeautiful" style="width: 100%;margin-bottom: 10px"
                                    src="./img/Best islands to visit - Vietnam Tourism-9.jpg" alt="">
                                <img class="imgofbeautiful" style="width: 100%; margin-bottom: 10px"
                                    src="./img/Greg Norman in Old Quarter.jpg" alt="">
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <img class="imgofbeautiful" style="width: 100%;margin-bottom: 10px"
                                    src="./img/dalat inside guide-4.jpg" alt="">
                                <img class="imgofbeautiful" style="width: 100%; margin-bottom: 10px;"
                                    src="./img/Can Tho Mekong Delta.jpg" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <img class="imgofbeautiful" style="width: 100%; margin-bottom: 10px;"
                                    src="./img/Things to do in Cai Be in the Mekong Delta-6.jpg" alt="">
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class="imgofbeautiful" style="width: 100%; margin-bottom: 10px;"
                                    src="./img/Best getaways for couples vietnam travel-3.jpg" alt="">
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class="imgofbeautiful" style="width: 100%; margin-bottom: 10px;"
                                    src="./img/bun bo Hue recipe_0.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- đây là phần TRAVEL TIPS -->
            <div class="row flex-column align-items-center" style="font-family: 'Gamja Flower', cursive;">
                <h1 style="margin-top: 30px;color: #b2910e">TRAVEL TIPS</h1>
                <h3 style="text-align: center;">Prepare for your trip with these practical articles</h3>
                <div class="row justify-content-around align-items-center iconoftraveltips" style="margin-top: 35px">
                    <div class="col-lg-1 col-sm-2 col-3 col-md-2">
                        <img style="width: 100%" src="./img/Visas_1.jpg">
                        <p style="text-align: center; margin-top: 20px; font-weight: bold;">VISAS</p>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-3 col-md-2">
                        <img style="width: 100%" src="./img/Transport_1.jpg">
                        <p style="text-align: center;margin-top: 20px; font-weight: bold;">TRANSPORTS</p>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-3 col-md-2">
                        <img style="width: 100%" src="./img/Weather white_1.jpg">
                        <p style="text-align: center;margin-top: 20px; font-weight: bold;">WEATHER</p>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-3 col-md-2">
                        <img style="width: 100%;" src="./img/Health and Safety_0.jpg">
                        <p style="text-align: center;margin-top: 20px; font-weight: bold;">SAFETY</p>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-3 col-md-2">
                        <img style="width: 100%" src="./img/History white_0.jpg">
                        <p style="text-align: center;margin-top: 20px; font-weight: bold;">SAFETY</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- đây là phần slide -->
        <div class="row" style="margin-top:28px;">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/Virtual Vietnam Travel-4_0.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/Vietnamese food recipes-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/Vietnam tourism 360 tours-5_0.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/sustainable hotels vietnam_0.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/Solo travel in Vietnam-2.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- đây là phần footer -->
        <div class="row"
            style="background-color: black;padding-top: 50px;margin-top: 50px;font-family: 'Gamja Flower', cursive;">
            <div class="col-lg-4 col-12">
                <h3 style="text-align: center;color: #fff;">SIGN UP FOR OUR NEWSLETTER</h3>
                <p style="text-align: center;color: #b9b9b9">Receive new travel stories from Vietnam once a month in
                    your
                    inbox.</p>
                <div class="row">
                    <div class="col-12">
                        <input style="width: 100%; height: 40px;" type="text" name="" id="">
                    </div>
                    <div style="margin-top: 10px;" class="col-12">
                        <button style="width: 100%;" type="button" class="btn btn-danger ">SIGN UP</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex flex-column align-items-center col-12">
                <h3 style="color: #fff;">USEFUL LINKS</h3>
                <p class="footerofusefullinks">Stay at Home Kit</p>
                <p class="footerofusefullinks">Visas for Vietnam</p>
                <p class="footerofusefullinks">Beginner Guide</p>
                <p class="footerofusefullinks">FAQs</p>
                <p class="footerofusefullinks">Sitemap</p>
                <p class="footerofusefullinks">News & Media</p>
                <p class="footerofusefullinks">Industry Resources</p>
            </div>
            <div class="col-lg-4 col-12 d-flex flex-column align-items-center">
                <h3 style="color: #fff">FOLLOW US ON</h3>
                <div class="row">
                    <div class="col-12">
                        <i style="color: #fff; margin-right: 8px;" class="fab fa-facebook fa-2x"></i>
                        <i style="color: #fff; margin-right: 8px;" class="fab fa-youtube fa-2x"></i>
                        <i style="color: #fff;" class="fab fa-instagram fa-2x"></i>
                    </div>
                </div>
                <p style="text-align: center;color:#b9b9b9;">Welcome to the official website of Vietnam National
                    Administration of Tourism. Visit our social media pages for more travel inspiration.</p>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>