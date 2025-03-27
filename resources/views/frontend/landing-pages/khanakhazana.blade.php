<!DOCTYPE html>
<!-- saved from url=(0125)https://kalanidhithemes.com/live-preview/landing-page/appiq/all-demo/multipage/02-food-delivery-static-centre-hero/index.html -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Meta Description -->
  <meta name="description" content="Order your favorite meals with ease using our Food Delivery mobile app. Browse local restaurants, customize your order, and enjoy fast, reliable delivery straight to your door. Download now for convenient, delicious dining at your fingertips.">
  <title>Khana Khazana</title>

  <!-- icofont-css-link -->
  <link rel="stylesheet" href="{{asset('khanakhazana-assets/icofont.min.css') }}">
  <!-- Owl-Carosal-Style-link -->
  <link rel="stylesheet" href="{{asset('khanakhazana-assets/owl.carousel.min.css') }}">
  <!-- Bootstrap-Style-link -->
  <link rel="stylesheet" href="{{asset('khanakhazana-assets/bootstrap.min.css') }}">
  <!-- Aos-Style-link -->
  <link rel="stylesheet" href="{{asset('khanakhazana-assets/aos.css') }}">
  <!-- Coustome-Style-link -->
  <link rel="stylesheet" href="{{asset('khanakhazana-assets/style.css') }}">
  <!-- Responsive-Style-link -->
  <link rel="stylesheet" href="{{asset('khanakhazana-assets/responsive.css') }}">
  <!-- Favicon -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737350167/Image_3_1__processed_i47q0s.png" type="image/x-icon">
  <!-- font 1 -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="{{asset('khanakhazana-assets/css2') }}" rel="stylesheet">
  <!-- font 2 -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="{{asset('khanakhazana-assets/css2(1)') }}" rel="stylesheet">

</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

  <!-- Preloader -->
  <div id="preloader" style="display: none;">
    <div id="loader"></div>
  </div>

  <!-- Header Start -->
  <header>
    <!-- container start -->
    <div class="container">
      <!-- navigation bar -->
      <nav class="navbar navbar-expand-lg" style="margin-left: -130px;">
        <a class="navbar-brand" href="">
          <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737615363/Image_5_1__processed_3_kxlo2n.png" alt="Logo" style="width: 200px; ">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
            <span class="toggle-wrap">
              <span class="toggle-bar"></span>
            </span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: -140px">
          <ul class="navbar-nav ml-auto">

            <!-- secondery menu start -->
            <li class="nav-item has_dropdown">
              <a class="nav-link" href=""> <button style="background-color: #979a97; color: white; border: none; padding: 5px 10px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease; border-radius: 5px; width: 100px;"
                  onmouseover="this.style.backgroundColor='#fb5b29'"
                  onmouseout="this.style.backgroundColor='#979a97'">

                  Home
                </button></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://khanakhazana.genaiapp.io/page/vendor-registration" target="_blank"><button style="background-color: #979a97; color: white; border: none; padding: 5px 10px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease; border-radius: 5px; width: 100px;"
                  onmouseover="this.style.backgroundColor='#fb5b29'"
                  onmouseout="this.style.backgroundColor='#979a97'">

                  Merchants
                </button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://khanakhazana.genaiapp.io/page/driver-registration" target="_blank"><button style="background-color: #979a97; color: white; border: none; padding: 5px 10px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease; border-radius: 5px; width: 100px;"
                  onmouseover="this.style.backgroundColor='#fb5b29'"
                  onmouseout="this.style.backgroundColor='#979a97'">

                  Riders
                </button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=""><button style="background-color:#979a97; color: white; border: none; padding: 5px 10px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease; border-radius: 5px; width: 100px;"
                  onmouseover="this.style.backgroundColor='#fb5b29'"
                  onmouseout="this.style.backgroundColor='#979a97'">

                  About Us
                </button></a>
            </li>

          </ul>
        </div>
      </nav>
      <!-- navigation end -->
    </div>
    <!-- container end -->
  </header>

  <!-- Banner-Section-Start -->
  <section class="banner_section" id="home_sec">

    <!-- side element left  -->

    <!-- container start -->
    <div class="container">
      <!-- row start -->
      <div class="row">
        <div class="col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
          <!-- banner text -->
          <div class="banner_text">
            <!-- h1 -->
            <h1>Khana Khazana </h1>
            <h3 style="color: #fb5b29;">Your No. 1 Authentic Indian Food Delivery App in France</h3>
            <!-- p -->
            <p>
              Order authentic Indian cuisine– authentic flavors from every corner of India, delivered to your doorstep in just a tap
            </p>


          </div>

          <!-- app buttons -->
          <ul class="app_btn">
            <li>
              <a href="{{route('userHome')}}" style="background-color: black; color: white; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease; border-radius: 5px; width: 150px;"
                onmouseover="this.style.backgroundColor='#fb5b29'"
                onmouseout="this.style.backgroundColor='black'">

                Click To Order !
              </a>


            </li>

          </ul>
        </div>

        <!-- banner image start -->
        <div class="col-md-12">

          <div class="hero_img">
            <!-- hero image for desktop view -->
            <div class="desktop">
              <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737721213/K1_1_cmqrh9.png" alt="image">
            </div>

            <!-- hero image for mobile view -->
            <div class="mobile_view">
              <img src="{{asset('khanakhazana-assets/hero_image.webp') }}" alt="image">
            </div>
          </div>
        </div>
        <!-- banner image end -->

      </div>
      <!-- row end -->
    </div>
    <!-- container end -->
  </section>
  <!-- Banner-Section-end -->

  <!-- Page Wraper -->
  <div class="page_wrapper" style="overflow: hidden;">
    <!-- usp start -->
    <section class="row_am usp_section">

      <!-- background blure shapes -->
      <div class="blure_shape bs_1"> </div>
      <div class="blure_shape bs_2"> </div>

      <div class="inner_sec" id="counter">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row">
            <!-- box 1 -->
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="usp_box">
                <div class="usp_icon"><img src="{{asset('khanakhazana-assets/usp1.webp') }}" alt="image"></div>
                <div class="usp_text">
                  <span class="counter-value" data-count="5000">5000</span><span>+</span>
                  <p> Happy Users</p>
                </div>
              </div>
            </div>
            <!-- box 2 -->
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="usp_box">
                <div class="usp_icon"><img src="{{asset('khanakhazana-assets/usp2.webp') }}" alt="image"></div>
                <div class="usp_text">
                  <span class="counter-value" data-count="1879">1879</span><span>+</span>
                  <p> Positive Reviews </p>
                </div>
              </div>
            </div>
            <!-- box 4 -->
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="usp_box">
                <div class="usp_icon"><img src="{{asset('khanakhazana-assets/usp3.webp') }}" alt="image"></div>
                <div class="usp_text">
                  <span class="counter-value" data-count="3855">3855</span><span>+</span>
                  <p> Restaurant Listings </p>
                </div>
              </div>
            </div>
            <!-- box 5 -->
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="usp_box">
                <div class="usp_icon"><img src="{{asset('khanakhazana-assets/usp4.webp') }}" alt="image"></div>
                <div class="usp_text">
                  <span class="counter-value" data-count="985">985</span><span>M+</span>
                  <p> Successful deliveries</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- Features-Section-Start -->
    <section class="row_am features_section" id="why_sec">
      <!-- container start -->
      <div class="container">

        <!-- section title -->
        <div class="section_title aos-init" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">

          <!-- h2 -->
          <h2>Why Choose Us</h2>
          <!-- p -->
          <h5>Bringing The True Flavors Of Authentic Indian Cuisine To You</h5>
          <p style="text-align:center;">
            Khana Khazana brings India’s authentic flavor to Paris and all in France. Our advanced food delivery platform delivers authentic Indian cuisine right to your doorstep, offering everything from curries to biryanis with a fragrant aroma. We’ve got a passionate team that aims to achieve culinary excellence and make Indian food accessible to all.
          </p>

        </div>

        <div class="feature_detail">

          <!-- side element left  -->

          <!-- feature box left -->
          <div class="left_data feature_box">

            <!-- feature box -->
            <div class="data_block color1 aos-init" data-aos="fade-right" data-aos-duration="1500">
              <div class="icon">
                <img src="{{asset('khanakhazana-assets/whyicon1.webp') }}" alt="image">
              </div>
              <div class="text">
                <h6>Wide Variety</h6>
                <p>Access a diverse menu of authentic cuisines at your fingertips.</p>
              </div>
            </div>


            <div class="data_block color1 aos-init" data-aos="fade-right" data-aos-duration="1500">
              <div class="icon">
                <img src="{{asset('khanakhazana-assets/whyicon4.webp') }}" alt="image">
              </div>
              <div class="text">
                <h6>EXCLUSIVE Coupons</h6>
                <p>Unlock special discounts and offers to save on your next meal.</p>
              </div>
            </div>

            <!-- feature box -->
            <div class="data_block color2 aos-init" data-aos="fade-right" data-aos-duration="1500">
              <div class="icon">
                <img src="{{asset('khanakhazana-assets/whyicon2.webp') }}" alt="image">
              </div>
              <div class="text">
                <h6>Easy Payment Options</h6>
                <p>Choose from multiple secure payment methods for convenience.</p>
              </div>
            </div>
          </div>


          <!-- feature box right -->
          <div class="right_data feature_box">

            <!-- feature box -->
            <div class="data_block color3 aos-init" data-aos="fade-left" data-aos-duration="1500">
              <div class="icon">
                <img src="{{asset('khanakhazana-assets/whyicon3.webp') }}" alt="image">
              </div>
              <div class="text">
                <h6>Chat With Delivery Partner</h6>
                <p>Directly communicate with your delivery partner for updates or special requests.</p>
              </div>
            </div>


            <div class="data_block color3 aos-init" data-aos="fade-left" data-aos-duration="1500">
              <div class="icon">
                <img src="{{asset('khanakhazana-assets/whyicon1.webp') }}" alt="image">
              </div>
              <div class="text">
                <h6>Real Time Delivery</h6>
                <p>Track your order live from restaurant to doorstep</p>
              </div>
            </div>


            <!-- feature box -->
            <div class="data_block color4 aos-init" data-aos="fade-left" data-aos-duration="1500">
              <div class="icon">
                <img src="{{asset('khanakhazana-assets/whyicon4.webp') }}" alt="image">
              </div>
              <div class="text">
                <h6>Seamless Delivery</h6>
                <p>Enjoy hot and fresh food delivered quickly to your door.</p>
              </div>
            </div>

          </div>
          <!-- feature image -->
          <div class="feature_img aos-init" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
            <img src="
            https://res.cloudinary.com/dx9kqohjf/image/upload/v1737539843/k2_cjt7bb.png" alt="image">
          </div>
        </div>
      </div>
      <!-- container end -->
    </section>
    <!-- Features-Section-end -->

    <!-- Dishes-Section-Start -->
    <section class="row_am dishes_section">
      <!-- container start -->
      <div class="container">

        <!-- section title -->
        <div class="section_title aos-init" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">

          <!-- h2 -->
          <h2>Access over 1000+ dishes with just a tap</h2>
          <p>Whatever your heart says, “Desi Swaad at Home Comfort,” we’ve got you covered</p>
          <!-- p -->

        </div>
      </div>
      <!-- container end -->

      <!-- dishes list slide  -->
      <div class="dish_slider aos-init" data-aos="fade-in" data-aos-duration="1500">
        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="about_slider">










          <div class="owl-stage-outer">
            <div class="owl-stage" style="transition: all  linear ; width: 4000px; transform: translate3d(-482px, 0px, 0px);">
              <div class="owl-item active" style="width: 1250px; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737529425/new1_processed_svljqr.png" alt="image" style="opacity: 1; width: 150px; height: 150px;">
                  </div>
                </div>
              </div>


              <div class="owl-item active" style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737463260/p5_gng2bv.png" alt="image" style="opacity: 1; width: 150px; height: 150px;">
                  </div>
                </div>
              </div>



              <div class="owl-item active" style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737463260/p6_dlmzkr.png" alt="image" style="opacity: 1; width: 150px; height: 150px;">
                  </div>
                </div>
              </div>


              <div class="owl-item active" style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737635236/5_processed_ogfdqp.png" alt="image" style="opacity: 1;  width: 150px; height: 150px;">
                  </div>
                </div>
              </div>


              <div class="owl-item  active" style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737463259/p1-1_i8y3rm.png" alt="image" style="opacity: 1;  width: 150px; height: 150px;">
                  </div>
                </div>
              </div>

              <div class="owl-item active" style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737463259/p2_qrkmul.png" alt="image" style="opacity: 1;  width: 150px; height: 150px; ">
                  </div>
                </div>
              </div>

              <div class="owl-item active" style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737463259/p3_qgvuqv.png" alt="image" style="opacity: 1;  width: 150px; height: 150px;">
                  </div>
                </div>
              </div>

              <div class="owl-item active" style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737615752/1_processed_ms4ju6.png" alt="image" style="opacity: 1;  width: 150px; height: 150px;">
                  </div>
                </div>
              </div>

              <div class="owl-item active " style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737615965/th_6__processed_2_l83aeh.png" alt="image" style="opacity: 1;   width: 150px; height: 150px;">
                  </div>
                </div>
              </div>

              <div class="owl-item active" style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737529425/new1_processed_svljqr.png" alt="image" style="opacity: 1;  width: 150px; height: 150px;">
                  </div>
                </div>
              </div>








              <div class="owl-item active" style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737463260/p5_gng2bv.png" alt="image" style="opacity: 1;  width: 150px; height: 150px;">
                  </div>
                </div>
              </div>

              <div class="owl-item active" style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737463260/p6_dlmzkr.png" alt="image" style="opacity: 1;  width: 150px; height: 150px;">
                  </div>
                </div>
              </div>

              <div class="owl-item active" style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737635236/5_processed_ogfdqp.png" alt="image" style="opacity: 1;  width: 150px; height: 150px;">
                  </div>
                </div>
              </div>

              <div class="owl-item active" style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737463259/p1-1_i8y3rm.png" alt="image" style="opacity: 1;  width: 150px; height: 150px;">
                  </div>
                </div>
              </div>

              <div class="owl-item active" style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737463259/p2_qrkmul.png" alt="image" style="opacity: 1;  width: 150px; height: 150px;">
                  </div>
                </div>
              </div>

              <div class="owl-item active" style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737463259/p3_qgvuqv.png" alt="image" style="opacity: 1;  width: 150px; height: 150px;">
                  </div>
                </div>
              </div>

              <div class="owl-item active" style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737615752/1_processed_ms4ju6.png" alt="image" style="opacity: 1;  width: 150px; height: 150px;">
                  </div>
                </div>
              </div>







              <div class="owl-item active" style="width: auto; margin-right: 20px;">
                <div class="item">
                  <div class="dish_slides">
                    <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737615965/th_6__processed_2_l83aeh.png" alt="image" style="opacity: 1;  width: 150px; height: 150px;">
                  </div>
                </div>
              </div>



            </div>
          </div>

          <!-- <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div> -->
          <!-- </div> -->

          <!-- app buttons -->
          <div class="ctr_app_btn_block">

            <ul class="app_btn">
              <li>
                <a href="">
                  <img class="blue_img" src="{{asset('khanakhazana-assets/googleplay.webp') }}" alt="image">
                </a>
              </li>
              <li>
                <a href="">
                  <img class="blue_img" src="{{asset('khanakhazana-assets/appstorebtn.webp') }}" alt="image">
                </a>
              </li>
            </ul>
          </div>

    </section>
    <!-- Dishes-Section-end -->

    <!-- Our Client section -->
    <section class="row_am our_client">

      <div class="container">

        <!-- section title -->
        <div class="section_title aos-init" data-aos="fade-up" data-aos-duration="1500">
          <span class="title_badge">Our clients</span>
          <h2>Trusted by 2.5k+ restaurant </h2>
        </div>

        <!-- Our Client List -->
        <ul class="client_list">
          <li>
            <div class="client_logo aos-init" data-aos="fade-up" data-aos-duration="1500">
              <img src="{{asset('khanakhazana-assets/res1.webp') }}" alt="image">
            </div>
          </li>
          <li>
            <div class="client_logo aos-init" data-aos="fade-up" data-aos-duration="1500">
              <img src="{{asset('khanakhazana-assets/res2.webp') }}" alt="image">
            </div>
          </li>
          <li>
            <div class="client_logo aos-init" data-aos="fade-up" data-aos-duration="1500">
              <img src="{{asset('khanakhazana-assets/res3.webp') }}" alt="image">
            </div>
          </li>
          <li>
            <div class="client_logo aos-init" data-aos="fade-up" data-aos-duration="1500">
              <img src="{{asset('khanakhazana-assets/res4.webp') }}" alt="image">
            </div>
          </li>
          <li>
            <div class="client_logo aos-init" data-aos="fade-up" data-aos-duration="1500">
              <img src="{{asset('khanakhazana-assets/res5.webp') }}" alt="image">
            </div>
          </li>
          <li>
            <div class="client_logo aos-init" data-aos="fade-up" data-aos-duration="1500">
              <img src="{{asset('khanakhazana-assets/res6.webp') }}" alt="image">
            </div>
          </li>
          <li>
            <div class="client_logo aos-init" data-aos="fade-up" data-aos-duration="1500">
              <img src="{{asset('khanakhazana-assets/res7.webp') }}" alt="image">
            </div>
          </li>
          <li>
            <div class="client_logo aos-init" data-aos="fade-up" data-aos-duration="1500">
              <img src="{{asset('khanakhazana-assets/res8.webp') }}" alt="image">
            </div>
          </li>
        </ul>

        <!-- button  -->

      </div>

  </div>
  </section>

  <!-- win win Section Start -->
  <section class="winwin_section row_am" id="benefits_sec">

    <div class="container">

      <!-- section title -->
      <div class="section_title">
        <span class="title_badge">benefits</span>
        <h2>Delivering success for restaurants & Foodies</h2>
        <p>Connecting restaurants with hungry customers, fostering growth, convenience, and mouth-watering experiences that satisfy cravings and bring people together!</p>
      </div>

      <!-- block list -->
      <div class="win_listing">
        <div class="row">
          <div class="col-md-12">
            <div class="listing_inner">

              <!-- blok -->
              <div class="win_block aos-init" data-aos="fade-up" data-aos-duration="1500">
                <div class="img">
                  <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737636838/k6_iqtbxc.png" alt="image">
                </div>
                <div class="text">

                  <h4>Merchant Benefits</h4>

                  <div>
                    <p> Simplify tasks, automate workflows, and gain insights to optimize performance, reduce costs, and boost customer satisfaction effortlessly!</p>
                    <ul class="win_list">
                      <li>
                        <div class="icon">
                          <span><i class="icofont-check-circled"></i></span>
                        </div>
                        <div class="li_text">
                          <p>Increased Visibility
                          </p>
                        </div>
                      </li>
                      <li>
                        <div class="icon">
                          <span><i class="icofont-check-circled"></i></span>
                        </div>
                        <div class="li_text">
                          <p>Operational Efficiency</p>
                        </div>
                      </li>
                      <li>
                        <div class="icon">
                          <span><i class="icofont-check-circled"></i></span>
                        </div>
                        <div class="li_text">
                          <p>Customer Insights</p>
                        </div>
                      </li>
                      <li>
                        <div class="icon">
                          <span><i class="icofont-check-circled"></i></span>
                        </div>
                        <div class="li_text">
                          <p>Competitive Advantage
                          </p>
                        </div>
                      </li>
                    </ul>
                  </div>


                </div>
              </div>

              <!-- blok -->
              <div class="win_block aos-init" data-aos="fade-up" data-aos-duration="1500">
                <div class="img">
                  <img src="{{asset('khanakhazana-assets/win2.webp') }}" alt="image">
                </div>
                <div class="text">
                  <h4>Customer Benefits</h4>
                  <p>Place orders in no time, customize to your taste, and track in real-time. Our mobile app makes food ordering fast, easy, and delightfully convenient!</p>
                  <ul class="win_list">
                    <li>
                      <div class="icon">
                        <span><i class="icofont-check-circled"></i></span>
                      </div>
                      <div class="li_text">
                        <p>Easy Ordering</p>
                      </div>
                    </li>
                    <li>
                      <div class="icon">
                        <span><i class="icofont-check-circled"></i></span>
                      </div>
                      <div class="li_text">
                        <p>Wide variety of Indian Cuisine</p>
                      </div>
                    </li>
                    <li>
                      <div class="icon">
                        <span><i class="icofont-check-circled"></i></span>
                      </div>
                      <div class="li_text">
                        <p> Fast delivery</p>
                      </div>
                    </li>
                    <li>
                      <div class="icon">
                        <span><i class="icofont-check-circled"></i></span>
                      </div>
                      <div class="li_text">
                        <p>Exclusive offers</p>
                      </div>
                    </li>
                  </ul>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

  </section>
  <!-- win win Section End -->


  <!-- How it Works Section Start -->
  <section class="advance_feature_section row_am">
    <div class="af_innner">

      <!-- side element left  -->


      <!-- container -->
      <div class="container">

        <!-- section title -->
        <div class="section_title">

          <h2>How it Works</h2>
          <p>Order your favorite food in minutes! Enjoy a seamless experience with our intuitive solution: browse, select, order, track, and receive your food with ease and speed!</p>
        </div>

        <!-- listing -->
        <div class="af_listing">
          <!-- row -->
          <div class="row">
            <!-- collom -->
            <div class="col-md-12">
              <!-- inner section -->
              <div class="listing_inner">
                <!-- blok -->
                <div class="af_block aos-init" data-aos="fade-up" data-aos-duration="1500">
                  <div class="img">
                    <img src="{{asset('khanakhazana-assets/how1.webp') }}" alt="image">
                  </div>
                  <div class="text">
                    <h5>Download App &amp; create a free account </h5>
                    <p> Get started with our food delivery app! Download, create a free account, and start ordering instantly!</p>
                  </div>
                  <div class="process_num ">01</div>
                </div>

                <!-- blok -->
                <div class="af_block aos-init" data-aos="fade-up" data-aos-duration="1500">
                  <div class="img">
                    <img src="{{asset('khanakhazana-assets/how2.webp') }}" alt="image">
                  </div>
                  <div class="text">
                    <h5> Order your favourite food in no time</h5>
                    <p>Choose your favorite dish from the restaurant you love and place your order with just a few clicks!</p>
                  </div>
                  <div class="process_num">02</div>
                </div>

                <!-- blok -->
                <div class="af_block aos-init" data-aos="fade-up" data-aos-duration="1500">
                  <div class="img">
                    <img src="{{asset('khanakhazana-assets/how3.webp') }}" alt="image">
                  </div>
                  <div class="text">
                    <h5> Get it delivered directly to your home, effortlessly </h5>
                    <p> Relax and enjoy! Your favorite food is delivered right to your doorstep, hassle-free and convenient!</p>
                  </div>
                  <div class="process_num">03</div>
                </div>

              </div>

              <!-- app buttons -->
              <div class="ctr_app_btn_block">

                <ul class="app_btn">
                  <li>
                    <a href="">
                      <img class="blue_img" src="{{asset('khanakhazana-assets/googleplay.webp') }}" alt="image">
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <img class="blue_img" src="{{asset('khanakhazana-assets/appstorebtn.webp') }}" alt="image">
                    </a>
                  </li>
                </ul>
              </div>

            </div>
          </div>
          <!-- row -->
        </div>
        <!-- listing -->

      </div>
    </div>
  </section>
  <!-- How it Works Section End -->

  <!-- success stories Section Start -->

  <!-- success stories Section End -->

  <!-- App-Download-Section-Start -->
  <section class="row_am download_app" id="download_sec">
    <!-- Task Block start -->
    <div class="task_block aos-init" data-aos="fade-up" data-aos-duration="1500" style="top: 120px;">

      <!-- background blure shapes -->
      <div class="blure_shape bs_1"> </div>
      <div class="blure_shape bs_2"> </div>

      <!-- row start -->
      <div class="row">
        <div class="col-md-6">
          <!-- text -->
          <div class="task_text">

            <!-- section title -->
            <div class="section_title white_text aos-init" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
              <span class="title_badge">Download</span>
              <h2>Download app to enjoy 4500+ foods </h2>
              <p>
                Download our mobile app for a seamless food ordering experience, lightning-fast delivery, and incredible offers tailored just for you!
              </p>
            </div>
            <!-- app buttons -->
            <ul class="app_btn aos-init" data-aos="fade-up" data-aos-duration="1500">
              <li>
                <a href="">
                  <img class="blue_img" src="{{asset('khanakhazana-assets/black_google_play.webp') }}" alt="image">
                </a>
              </li>
              <li>
                <a href="">
                  <img class="blue_img" src="{{asset('khanakhazana-assets/black_appstore.webp') }}" alt="image">
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <!-- images -->
          <div class="task_img aos-init" data-aos="fade-in" data-aos-duration="1500">
            <div class="frame_img">
              <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737539936/k3_lczyfq.png" alt="image">
            </div>
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
    <!-- app Block end -->
  </section>
  <!-- App-Download-Section-end -->

  <!-- Blog Section Start -->

  <!-- Blog Section End -->

  <!-- call to action -->
  <section class="cta_section new white_text" id="support_sec">
    <!-- container start -->
    <div class="container">
      <div class="cta_box" style="background-color: white;">
        <div class="element">
          <span class="element1"> <img src="{{asset('khanakhazana-assets/element_white_3.webp') }}" alt="image"> </span>
          <span class="element2"> <img src="{{asset('khanakhazana-assets/element_white_4.webp') }}" alt="image"> </span>
        </div>
        <div class="left">

          <!-- section title -->
          <div class="section_title aos-init" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
            <img src="{{asset('khanakhazana-assets/customer-icon.webp') }}" class="customer_icon" alt="image" style="background-color: white; margin-top: -13px; ">
            <!-- h2 -->
            <h3 style="color: black;">Need support?</h3>
            <!-- p -->

          </div>

        </div>
        <!-- cta buttons -->
        <div class="right">
          <div class="btn_block ">
            <a href="tel:3489390172" class="btn puprple_btn aos-init aos-animate call_btn"> Call us now</a>
            <a href="mailto:Khanakhazana@gmail.com" class="btn aos-init aos-animate email_btn"> Email us</a>
          </div>
        </div>
      </div>
    </div>
    <!-- container end -->
  </section>
  <!-- call to action -->

  <!-- Footer-Section start -->
  <footer>
    <div class="top_footer" id="contact" style="background-color: #21752e;">

      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <!-- footer link 1 -->
          <div class="col-lg-5 col-md-6 col-12 ">
            <div class="abt_side" style="margin-top: -20px;">
              <div class="logo"> <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737631165/khana-logo-c_2__processed_p7nbfy.png" alt="image" style="width: 200px; height: 90px;"></div>
              <p style="margin-top: -40px;"><br>Location: Khana Khazana<br>Contact: 3489390172<br>Email: Khanakhazana@gmail.com</p>


            </div>
          </div>

          <!-- footer link 2 -->
          <div class="col-lg-2 col-md-6 col-12">
            <div class="links">
              <h5>Quick Links</h5>
              <ul>
                <li><a href="">Home</a></li>
                <li><a href="https://khanakhazana.genaiapp.io/page/privacy-policy" target="_blank">Privacy Policy</a></li>
                <li><a href="https://khanakhazana.genaiapp.io/page/terms-conditions" target="_blank">Terms And Conditions</a></li>
                <li><a href="mailto:Khanakhazana@gmail.com">Contact us</a></li>
              </ul>
            </div>
          </div>

          <!-- footer link 3 -->
          <div class="col-lg-2 col-md-6 col-12">
            <div class="links">
              <h5>Social Links</h5>

              <div style="display: flex; gap: 10px; align-items: center;">
                <!-- Instagram Icon -->
                <a href="https://www.instagram.com" target="_blank"
                  style="display: inline-block; transition: all 0.3s ease;"
                  onmouseover="this.children[0].style.filter='invert(1)'"
                  onmouseout="this.children[0].style.filter='invert(0)'">

                  <img src="https://img.icons8.com/?size=100&id=Iatym1CIDVkh&format=png&color=000000"
                    style="width: 30px; height: 30px;">
                </a>


                <!-- Twitter Icon -->
                <a href="https://www.twitter.com" target="_blank" style="display: inline-block; transition: all 0.3s ease;"
                  onmouseover="this.children[0].style.filter='invert(1)'"
                  onmouseout="this.children[0].style.filter='invert(0)'">
                  <img src="https://img.icons8.com/?size=100&id=437&format=png&color=000000"

                    style="width: 30px; height: 30px;">
                </a>

                <!-- Facebook Icon -->
                <a href="https://www.facebook.com" target="_blank" style="display: inline-block; transition: all 0.3s ease;"
                  onmouseover="this.children[0].style.filter='invert(1)'"
                  onmouseout="this.children[0].style.filter='invert(0)'">
                  <img src="https://img.icons8.com/?size=100&id=118491&format=png&color=000000"

                    style="width: 30px; height: 30px;">
                </a>
              </div>

            </div>
          </div>

          <!-- footer link 4 -->
          <div class="col-lg-3 col-md-6 col-12">

            <h5>Download Links</h5>
            <div style="display: flex; justify-content: center; align-items: center; gap: 20px; margin-top: -20px; margin-left: -60px;">
              <!-- First Image of Google -->
              <img loading="lazy" decoding="async" src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737358272/googl2_gmchou.jpg" style="width: 90px; height: 90px;" alt="Google Image">

              <!-- First Image of Apple -->
              <img loading="lazy" decoding="async" src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737357352/apple_c5bz53.jpg" style="width: 90px; height: 90px;" alt="Apple Image">
            </div>

            <div style="display: flex; justify-content: center; align-items: center; gap: 30px; margin-left: -60px;">
              <!-- Second Image of Google -->
              <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play Store" style="width: 80px; height: 50px;">

              <!-- Second Image of Apple -->
              <img src="https://res.cloudinary.com/dx9kqohjf/image/upload/v1737369241/th_4_ihc8sf.jpg" alt="Apple Store" style="width: 80px; height: 25px;">
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->

      <!-- last footer -->
      <div class="bottom_footer" style=" border-top: solid white 1px;">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row">


          </div>
          <!-- row end -->
          <div class="col-md-4" style="  display: flex; justify-content: right; margin-left: 350px;">
            <p>Copyrights @ 2025 Khana Khazana </p>
          </div>
        </div>
        <!-- container end -->

      </div>


    </div>

  </footer>
  <!-- Footer-Section end -->


  <!-- Video Model Start -->
  <div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <button id="close-video" type="button" class="button btn btn-default text-right" data-dismiss="modal">
          <i class="icofont-close-line-circled"></i>
        </button>
        <div class="modal-body">
          <div id="video-container" class="video-container">
            <iframe id="youtubevideo" width="640" height="360" allowfullscreen="" src="{{asset('khanakhazana-assets/saved_resource.html') }}"></iframe>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!-- Video Model End -->

  </div>
  <!-- Wraper End -->

  <!-- Jquery-js-Link -->
  <script src="{{asset('khanakhazana-assets/jquery.js') }}"></script>
  <!-- owl-js-Link -->
  <script src="{{asset('khanakhazana-assets/owl.carousel.min.js') }}"></script>
  <!-- bootstrap-js-Link -->
  <script src="{{asset('khanakhazana-assets/bootstrap.min.js') }}"></script>
  <!-- aos-js-Link -->
  <script src="{{asset('khanakhazana-assets/aos.js') }}"></script>
  <!-- Typed Js Cdn -->
  <script src="{{asset('khanakhazana-assets/typed.min.js') }}"></script>
  <!-- main-js-Link -->
  <script src="{{asset('khanakhazana-assets/main.js') }}"></script>

  <script>
    // Fixed Discount Dish JS
    $(document).ready(function() {
      let cardBlock = document.querySelectorAll('.task_block');
      let topStyle = 120;

      cardBlock.forEach((card) => {
        card.style.top = `${topStyle}px`;
        topStyle += 30;
      })

    });

    // Scroll Down Window 
    $(document).ready(function() {
      // Attach a click event handler to the button
      $('#scrollButton').click(function() {
        // Scroll down smoothly 200 pixels from the current position
        $('html, body').animate({
          scrollTop: $(window).scrollTop() + 600
        }, 800); // Adjust the speed (800ms) as needed
      });
    });
  </script>



  <div id="veepn-guard-alert"><template shadowrootmode="open">
      <style>
        html {
          box-sizing: border-box;
          text-size-adjust: 100%;
          word-break: normal;
          -moz-tab-size: 4;
          tab-size: 4
        }

        *,
        :before,
        :after {
          background-repeat: no-repeat;
          box-sizing: border-box
        }

        :before,
        :after {
          text-decoration: inherit;
          vertical-align: inherit
        }

        * {
          padding: 0;
          margin: 0
        }

        hr {
          overflow: visible;
          height: 0;
          color: inherit;
          border: 0;
          border-top: 1px solid
        }

        details,
        main {
          display: block
        }

        summary {
          display: list-item
        }

        small {
          font-size: 80%
        }

        [hidden] {
          display: none
        }

        abbr[title] {
          border-bottom: none;
          text-decoration: underline;
          text-decoration: underline dotted
        }

        a {
          background-color: transparent
        }

        a:active,
        a:hover {
          outline-width: 0
        }

        code,
        kbd,
        pre,
        samp {
          font-family: monospace
        }

        pre {
          font-size: 1em
        }

        b,
        strong {
          font-weight: bolder
        }

        sub,
        sup {
          font-size: 75%;
          line-height: 0;
          position: relative;
          vertical-align: baseline
        }

        sub {
          bottom: -.25em
        }

        sup {
          top: -.5em
        }

        table {
          border-color: inherit;
          text-indent: 0
        }

        iframe {
          border-style: none
        }

        input {
          border-radius: 0
        }

        [type=number]::-webkit-inner-spin-button,
        [type=number]::-webkit-outer-spin-button {
          height: auto
        }

        [type=search] {
          -webkit-appearance: textfield;
          -moz-appearance: textfield;
          appearance: textfield;
          outline-offset: -2px
        }

        [type=search]::-webkit-search-decoration {
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none
        }

        textarea {
          overflow: auto;
          resize: vertical
        }

        button,
        input,
        optgroup,
        select,
        textarea {
          font: inherit;
          color: inherit
        }

        optgroup {
          font-weight: 700
        }

        button {
          overflow: visible
        }

        button,
        select {
          text-transform: none
        }

        button,
        [type=button],
        [type=reset],
        [type=submit],
        [role=button] {
          cursor: pointer
        }

        button::-moz-focus-inner,
        [type=button]::-moz-focus-inner,
        [type=reset]::-moz-focus-inner,
        [type=submit]::-moz-focus-inner {
          border-style: none;
          padding: 0
        }

        button,
        html [type=button],
        [type=reset],
        [type=submit] {
          -webkit-appearance: button;
          -moz-appearance: button;
          appearance: button
        }

        button,
        input,
        select,
        textarea {
          background-color: transparent;
          border-style: none
        }

        button:-moz-focusring,
        [type=button]::-moz-focus-inner,
        [type=reset]::-moz-focus-inner,
        [type=submit]::-moz-focus-inner {
          outline: 1px dotted ButtonText
        }

        select {
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none
        }

        a:focus,
        button:focus,
        input:focus,
        select:focus,
        textarea:focus {
          outline-width: 0
        }

        select::-ms-expand {
          display: none
        }

        select::-ms-value {
          color: currentcolor
        }

        legend {
          border: 0;
          color: inherit;
          display: table;
          white-space: normal;
          max-width: 100%
        }

        ::-webkit-file-upload-button {
          -webkit-appearance: button;
          -moz-appearance: button;
          appearance: button;
          color: inherit;
          font: inherit
        }

        [disabled] {
          cursor: default
        }

        img {
          border-style: none
        }

        progress {
          vertical-align: baseline
        }

        [aria-busy=true] {
          cursor: progress
        }

        [aria-controls] {
          cursor: pointer
        }

        [aria-disabled=true] {
          cursor: default
        }

        ul,
        ol {
          list-style-type: none
        }

        figure {
          margin: 0
        }

        .guard-popup {
          font-family: FigtreeVF, sans-serif;
          position: fixed;
          z-index: 2147483638;
          top: 8px;
          left: 24px;
          overflow: visible;
          color: #222e3a;
          background-color: #fff;
          max-width: 416px;
          width: calc(100% - 48px);
          border-radius: 16px;
          box-shadow: 0 4px 20px #00000040;
          padding: 24px
        }

        .guard-popup__header {
          display: flex;
          justify-content: space-between;
          align-items: center;
          column-gap: 16px;
          margin-bottom: 24px
        }

        .guard-popup__close {
          display: flex;
          align-items: center;
          justify-content: center;
          width: 24px;
          height: 24px;
          opacity: .7
        }

        .guard-popup__img {
          line-height: 0;
          margin-bottom: 24px
        }

        .guard-popup__img img {
          width: 100%;
          aspect-ratio: 368/142;
          object-fit: cover;
          border-radius: 12px;
          overflow: hidden
        }

        .guard-popup__title {
          font-size: 24px;
          line-height: 32px;
          margin-bottom: 8px
        }

        .guard-popup__description {
          font-size: 20px;
          line-height: 28px;
          font-weight: 500;
          color: #4a5764;
          margin-bottom: 28px
        }

        .guard-popup__actions {
          display: flex;
          justify-content: flex-end;
          column-gap: 16px
        }

        .guard-popup__btn {
          display: flex;
          align-items: center;
          justify-content: center;
          padding: 8px 16px;
          border-radius: 5px;
          font-size: 16px;
          line-height: 24px;
          font-weight: 700;
          cursor: pointer;
          color: #fff;
          background: linear-gradient(180deg, #5695fd, #1554ff)
        }
      </style>
    </template></div>
  <style>
    @font-face {
      font-family: FigtreeVF;
      src: url(chrome-extension://majdfhpaihoncoakbjgbdhglocklcgno/fonts/FigtreeVF.woff2) format("woff2 supports variations"), url(chrome-extension://majdfhpaihoncoakbjgbdhglocklcgno/fonts/FigtreeVF.woff2) format("woff2-variations");
      font-weight: 100 1000;
      font-display: swap
    }
  </style>
  <div id="veepn-breach-alert"><template shadowrootmode="open">
      <style>
        .breach-popup {
          font-family: FigtreeVF, sans-serif;
          position: fixed;
          z-index: 2147483638;
          text-rendering: optimizelegibility;
          top: 0;
          left: 0;
          right: 0;
          pointer-events: none;
          padding-inline: 16px;
          height: 0;
          overflow: visible;
          color: #222e3a
        }

        .breach-popup * {
          box-sizing: border-box
        }

        .breach-popup__inner {
          background-color: #de4558;
          width: 100%;
          border-radius: 16px;
          margin-inline: auto;
          pointer-events: all;
          position: relative;
          transition: transform .25s ease-in-out, max-width .25s ease-in-out;
          transform: translateY(16px);
          max-height: calc(100svh - 80px);
          display: flex;
          flex-direction: column
        }

        .breach-popup__header {
          min-height: 32px;
          display: flex;
          align-items: center;
          justify-content: space-between;
          column-gap: 16px;
          padding: 4px;
          cursor: pointer
        }

        .breach-popup__close {
          cursor: pointer;
          background-color: transparent;
          border-style: none;
          outline: none;
          display: flex;
          align-items: center;
          justify-content: center;
          width: 24px;
          height: 24px;
          flex-shrink: 0;
          opacity: .5
        }

        .breach-popup__wrap {
          display: grid;
          grid-template-rows: 0fr;
          transition: grid-template-rows .25s ease-in-out;
          overflow: hidden
        }

        .breach-popup__content {
          overflow: hidden;
          opacity: 0;
          transform: translateY(-10px)
        }

        .breach-popup--minimize .breach-popup__inner {
          max-width: 485px;
          transform: translateY(-100%)
        }

        .breach-popup--collapse .breach-popup__inner {
          max-width: 485px
        }

        .breach-popup--expand .breach-popup__inner {
          max-width: 1120px
        }

        .breach-popup--expand .breach-popup__wrap {
          grid-template-rows: 1fr
        }

        .breach-popup--expand .breach-popup__content {
          opacity: 1;
          transform: translateY(0);
          transition: transform .25s ease-in-out, opacity .25s ease-in-out;
          transition-delay: .15s
        }

        .breach-popup--expand .breach-popup__header {
          cursor: default
        }

        .breach-info {
          padding: 2px;
          height: 100%
        }

        .breach-info__inner {
          padding: 22px 22px 0;
          background-color: #fff;
          border-bottom-left-radius: 15px;
          border-bottom-right-radius: 15px;
          height: 100%;
          overflow: auto
        }

        .breach-info__alert {
          font-size: 24px;
          line-height: 32px;
          font-weight: 700;
          margin: 0
        }

        .breach-info__list {
          margin-top: 24px;
          display: flex;
          flex-wrap: wrap;
          gap: 24px
        }

        @media only screen and (width >=992px) {
          .breach-info__list {
            flex-wrap: nowrap
          }
        }

        .breach-info__item {
          width: 100%
        }

        .breach-info__item:nth-child(2) {
          max-width: 320px
        }

        .breach-info__item:nth-child(3) {
          max-width: 200px
        }

        .breach-info__title {
          font-size: 18px;
          font-weight: 700;
          line-height: 32px;
          letter-spacing: -.1px;
          color: #de4558;
          margin-top: 0;
          margin-bottom: 4px
        }

        .breach-info__description {
          font-size: 16px;
          line-height: 28px;
          letter-spacing: -.1px
        }

        .breach-info__description ul {
          margin: 0
        }

        .breach-info__actions {
          display: flex;
          justify-content: center;
          padding-top: 32px;
          padding-bottom: 22px;
          background-color: #fff;
          position: sticky;
          bottom: 0
        }

        .breach-info__btn {
          cursor: pointer;
          border-style: none;
          outline: none;
          display: inline-flex;
          align-items: center;
          height: 48px;
          padding-inline: 20px;
          border-radius: 12px;
          text-align: center;
          font-size: 16px;
          font-weight: 700;
          line-height: 28px;
          letter-spacing: -.1px;
          color: #fff;
          background-color: #ff6400
        }

        .button-expand {
          position: absolute;
          bottom: 0;
          left: 50%;
          transform: translate(-50%, 100%);
          z-index: 1
        }

        .button-expand__pointer {
          cursor: pointer
        }

        .button-expand__alert {
          pointer-events: none;
          transition: opacity .25s ease-in-out
        }

        .button-expand__arrow {
          pointer-events: none;
          transition: transform .25s ease-in-out, opacity .25s ease-in-out;
          transform-origin: center
        }

        .button-expand--minimize .button-expand__arrow,
        .button-expand--collapse .button-expand__alert,
        .button-expand--expand .button-expand__alert {
          opacity: 0
        }

        .button-expand--expand .button-expand__arrow {
          transform: rotate(180deg)
        }

        .header-collapse {
          display: flex;
          align-items: center;
          flex-wrap: wrap;
          column-gap: 4px;
          padding-left: 8px;
          font-size: 14px;
          line-height: 20px;
          letter-spacing: -.1px;
          color: #fff
        }

        .header-expand {
          display: flex;
          align-items: center;
          flex-wrap: wrap;
          column-gap: 4px;
          padding-left: 20px;
          font-size: 14px;
          font-weight: 500;
          line-height: 20px;
          letter-spacing: -.1px;
          color: #fff
        }
      </style>
    </template></div>
  <style>
    @font-face {
      font-family: FigtreeVF;
      src: url(chrome-extension://majdfhpaihoncoakbjgbdhglocklcgno/fonts/FigtreeVF.woff2) format("woff2 supports variations"), url(chrome-extension://majdfhpaihoncoakbjgbdhglocklcgno/fonts/FigtreeVF.woff2) format("woff2-variations");
      font-weight: 100 1000;
      font-display: swap
    }
  </style>
</body>

</html>