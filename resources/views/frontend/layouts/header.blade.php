<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @stack("title")
    <link
      rel="shortcut icon"
      href={{ asset("frontend/image/logo-white-bg-circle.png") }}
      type="image/x-icon"
    />
    <link rel="stylesheet" href="{{ asset('frontend/css/header-style.css') }}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
      integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
      integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('frontend/css/footer-style.css') }}">

    @stack("css")

  </head>
  <body>
    <header class="sticky">
      <!-- Navigation Pannel -->
      <div class="nav-info">
        <div class="logo-nav">
          <img src={{ asset("frontend/image/logo.png") }} alt="page logo" class="page-logo" />
        </div>
        <div class="nav-media">
          <div class="pad-10">
            <a href="tel:+977-5922111">
              <span>
                <i class="fa-solid fa-phone"></i>
                01-5922111
              </span>
            </a>
          </div>
          <div class="pad-10">
            <a href="mailto:info@systembull.edu.np">
              <i class="fa-solid fa-envelope"></i>
              info@systembull.edu.np
            </a>
          </div>
          <div class="pad-10">
            <a
              href="https://www.facebook.com/ashim.adhikari.9809"
              target="_blank"
            >
              <i class="fa-brands fa-facebook-f"></i>
            </a>
          </div>
          <div class="pad-10">
            <a href="https://www.instagram.com/adkary_aseem/" target="_blank">
              <i class="fa-brands fa-instagram"></i>
            </a>
          </div>
          <div class="pad-10">
            <a href="https://www.youtube.com/@adkaryaseem" target="_blank">
              <i class="fa-brands fa-youtube"></i>
            </a>
          </div>
          <div class="pad-10">
            <a
              href="https://www.linkedin.com/in/ashim-adhikari-447725217/"
              target="_blank"
            >
              <i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
          <div class="pad-10">
            <a href="https://www.twitter.com/aseemadkary" target="_blank">
              <i class="fa-brands fa-twitter"></i>
            </a>
          </div>
        </div>
        <div class="nav-media-sm">
          <div class="address-sm">
            <div class="pad-10">
              <a href="tel:+977-5922111">
                <span>
                  <i class="fa-solid fa-phone"></i>
                  01-5922111
                </span>
              </a>
            </div>
            <div class="pad-10">
              <a href="mailto:info@systembull.edu.np">
                <i class="fa-solid fa-envelope"></i>
                info@systembull.edu.np
              </a>
            </div>
          </div>
          <div class="social-media-sm">
            <div class="pad-10">
              <a
                href="https://www.facebook.com/ashim.adhikari.9809"
                target="_blank"
              >
                <i class="fa-brands fa-facebook-f"></i>
              </a>
            </div>
            <div class="pad-10">
              <a href="https://www.instagram.com/adkary_aseem/" target="_blank">
                <i class="fa-brands fa-instagram"></i>
              </a>
            </div>
            <div class="pad-10">
              <a href="https://www.youtube.com/@adkaryaseem" target="_blank">
                <i class="fa-brands fa-youtube"></i>
              </a>
            </div>
            <div class="pad-10">
              <a
                href="https://www.linkedin.com/in/ashim-adhikari-447725217/"
                target="_blank"
              >
                <i class="fa-brands fa-linkedin-in"></i>
              </a>
            </div>
            <div class="pad-10">
              <a href="https://www.twitter.com/aseemadkary" target="_blank">
                <i class="fa-brands fa-twitter"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- phone display icon -->
      <div class="side-bar-phone-display">&#9776;</div>
      <!-- Ribbon Option -->
      <div class="nav-contents sticky">
        <icon class="cross-btn"> &#10005; </icon>
        <!-- <i class="fa-regular fa-circle-xmark"></i> -->
        <div class="nav-content">
          <a href="{{ route('homepage') }}"> Home </a>
        </div>
        <div class="nav-content hover">
          <a href=""> About Us <i class="fa-solid fa-angle-down"></i></a>
          <div class="nav-content-inside">
            <div class="drop-down-content">
              <a href="{{ route("about.introduction") }}"> Introduction </a>
            </div> 
            <div class="drop-down-content">
              <a href="{{ route('about.management-team') }}"> Management Team </a>
            </div>
            <div class="drop-down-content">
              <a href="{{ route('about.silent-feature') }}"> Sailent Feature </a>
            </div>
            <div class="drop-down-content">
              <a href="{{ route('about.vision-mission') }}"> Vision & Mission </a>
            </div>
          </div>
        </div>
        <div class="nav-content">
          <a href="{{ route('admission-form') }}" target="_blank"> Admission </a>
        </div>
        <div class="nav-content hover">
          <a href=""> Courses <i class="fa-solid fa-angle-down"></i> </a>
          <div class="nav-content-inside">
            <div class="drop-down-content">
              <a href="{{ route('courses.dict') }}">
                Diploma In Information And Communication Technology
              </a>
            </div>
            <div class="drop-down-content">
              <a href="{{ route('courses.web-development') }}">
                Web Development
              </a>
            </div>
          </div>
        </div>
        <div class="nav-content">
          <a href="{{ route('news-notice') }}"> News and Notices </a>
        </div>
        <div class="nav-content">
          <a href="{{ route('program') }}"> Program </a>
        </div>
        <div class="nav-content hover">
          <a href=""> Gallery <i class="fa-solid fa-angle-down"></i> </a>
          <div class="nav-content-inside">
            <div class="drop-down-content">
              <a href="{{ route('gallary.photo') }}"> Photo Gallery </a>
            </div>
            <div class="drop-down-content">
              <a href="{{ route('gallary.video') }}"> Video Gallery </a>
            </div>
          </div>
        </div>
        <div class="nav-content">
          <a href="{{ route('vaccancy') }}"> Vaccancy </a>
        </div>
        <div class="nav-content">
          <a href="{{ route('contactus') }}"> Contact US </a>
        </div>
      </div>
    </header>