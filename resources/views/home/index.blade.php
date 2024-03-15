@extends('layouts.main')

@section('head-content')
<body>
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
    <!-- slider section -->
    <section class=" slider_section position-relative">

      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="slider_item-box">
                <div class="slider_item-container">
                  <div class="slider_item-detail">
                    <h1>
                        TEMUKAN BUKU <br />
                      <span>FAVORITMU</span>
                    </h1>
                    <div>
                      <form action="">
                        <input type="text" placeholder="Masukkan Judul Buku" />
                        <button type="submit">
                          Cari
                        </button>
                      </form>
                    </div>
                    <div>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="slider_item-box">
                <div class="slider_item-container">
                  <div class="slider_item-detail">
                    <h1>
                        “You cannot open a book without learning something.” <br />
                      <span>— Confucius</span>
                    </h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="slider_item-box">
                <div class="slider_item-container">
                  <div class="slider_item-detail">
                    <h1>
                        “Books are the ever-burning lamps of accumulated wisdom.” <br />
                      <span>— George William</span>
                    </h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </section>
    <!-- end slider section -->
  </div>
@endsection

@section('body-content')
  <!-- about section -->

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

  <!-- make section -->

  <section class="make_section layout_padding">
    <div class="container">
      <div class="box">
        <h2>
          We promote your business. <br />
          we set up everything for you.
        </h2>
        <h2 class="make-heading">
          We make it easy.
        </h2>
      </div>
    </div>
  </section>
  <!-- end make section -->
  <!-- online section -->

  <section class="online_section layout_padding">
    <div class="d-flex justify-content-center">
      <h2>
        How we get you noticed online
      </h2>
    </div>
    <div class="layout_padding">
      <div class="container-fluid ">
        <div class="row ">
          <div class="col-md-5 offset-md-1">
            <div class="img-box">
              <div class="box-1">
                <div>
                  <img src="images/o-1.png" alt="" />
                </div>
                <div class="">
                  <img src="images/o-2.png" alt="" />
                </div>
              </div>
              <div class="box-2 ">
                <div>
                  <img src="images/o-3.png" alt="" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="detail-box">
              <h2 class="number-style">
                01
              </h2>
              <p>
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in some
                form, by injected humour, or randomised words which don't look
                even slightly believable. If you are going to use a passage of
                Lorem Ipsum, you need to be
              </p>
              <div>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end online section -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="d-flex justify-content-center">
        <h2>
          Testimonial
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container">
              <div class="row">
                <div class="col-md-6">
                  <div class="client_box">
                    <div class="detail_box">
                      <div class="img_box">
                        <img src="images/client-1.jpg" />
                      </div>
                      <h5>
                        zabih jo
                      </h5>
                      <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random
                        text. It has roots in a piece of classical Latin literature
                        from 45 BC, making it over
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="client_box">
                    <div class="detail_box">
                      <div class="img_box">
                        <img src="images/client-2.jpg" />
                      </div>
                      <h5>
                        zabih jo
                      </h5>
                      <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random
                        text. It has roots in a piece of classical Latin literature
                        from 45 BC, making it over
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container">
              <div class="row">
                <div class="col-md-6">
                  <div class="client_box">
                    <div class="detail_box">
                      <div class="img_box">
                        <img src="images/client-1.jpg" />
                      </div>
                      <h5>
                        zabih jo
                      </h5>
                      <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random
                        text. It has roots in a piece of classical Latin literature
                        from 45 BC, making it over
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="client_box">
                    <div class="detail_box">
                      <div class="img_box">
                        <img src="images/client-2.jpg" />
                      </div>
                      <h5>
                        zabih jo
                      </h5>
                      <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random
                        text. It has roots in a piece of classical Latin literature
                        from 45 BC, making it over
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container">
              <div class="row">
                <div class="col-md-6">
                  <div class="client_box">
                    <div class="detail_box">
                      <div class="img_box">
                        <img src="images/client-1.jpg" />
                      </div>
                      <h5>
                        zabih jo
                      </h5>
                      <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random
                        text. It has roots in a piece of classical Latin literature
                        from 45 BC, making it over
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="client_box">
                    <div class="detail_box">
                      <div class="img_box">
                        <img src="images/client-2.jpg" />
                      </div>
                      <h5>
                        zabih jo
                      </h5>
                      <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random
                        text. It has roots in a piece of classical Latin literature
                        from 45 BC, making it over
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end client section -->
@endsection