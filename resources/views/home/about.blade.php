@extends('layouts.main')

@section('head-content')
<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
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
@endsection

@section('body-content')
  <!-- business section -->

  <section class="business_section layout_padding">
    <div class="container">
      <h2>
        Gets your business discovered
      </h2>
      <p>
        It is a long established fact that a reader will be distracted by the
        readable content of a page when looking at its layout. The point of
        using Lorem Ipsum is that it has a more-or-less normal distribution of
        letters,
      </p>
    </div>
    <div class="business_container">
      <div class="content-box box-1">
        <div class="detail">
          <h3>
            Not just a website
          </h3>
          <p>
            It is a long established fact that a r <br />
            eader will be distracted by the readable content <br />
            of a page when looking at i <br />
            ts layout. The point of usin <br />
            g Lorem Ipsum is that it has a more-or-less normal <br />
            distribution of letters,
          </p>
        </div>
        <div>
          <a href="">
            read More
          </a>
        </div>
      </div>
      <div class="content-box box-2">
        <div class="detail">
          <h3>
            Hosting & maintenance included
          </h3>
          <p>
            It is a long established fact that a r <br />
            eader will be distracted by the readable content <br />
            of a page when looking at i <br />
            ts layout. The point of usin <br />
            g Lorem Ipsum is that it has a more-or-less normal <br />
            distribution of letters,
          </p>
        </div>
        <div>
          <a href="">
            read More
          </a>
        </div>
      </div>
      <div class="content-box box-3">
        <div class="detail">
          <h3>
            Connect with your customers
          </h3>
          <p>
            It is a long established fact that a r <br />
            eader will be distracted by the readable content <br />
            of a page when looking at i <br />
            ts layout. The point of usin <br />
            g Lorem Ipsum is that it has a more-or-less normal <br />
            distribution of letters,
          </p>
        </div>
        <div>
          <a href="">
            read More
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end business section -->
@endsection

