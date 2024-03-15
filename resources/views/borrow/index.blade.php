@extends('layouts.main')

@section('body-content')
<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="">
            <span>
              LIBRARY 7
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center mt-3">
              <ul class="navbar-nav ">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('logout') }}">
                    <span>Logout</span>
                  </a>
                </li>
              </ul>
              <form class="form-inline mb-3 mb-lg-0  mr-5">
                <button class="btn  my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                @include('layouts.menu')
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

@section('body-content')
  <!-- borrow section -->

  <section class="about_section layout_padding">
    <div class="row">
      <div class="col-md-5 offset-md-1">
        <div class="img-box">
          <img src="images/about.png" alt="" />
          <div class="play_btn-box">
            <div class="play-btn"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="detail-box">
          <h3>
            About Us
          </h3>
          <p>
            It is a long established fact that a reader will be distracted by
            the readable content of a page when looking at its layout. The
            point of using LoremIt is a long established fact that a reader
            will be distracted by the readable content of a page when looking
            at its layout. The point of using LoremIt is a long established
            fact that a reader will be distracted by the readable content of a
            page when looking at its layout. The point of using Lorem
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
@endsection

