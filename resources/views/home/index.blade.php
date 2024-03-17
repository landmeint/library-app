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
                      <form>
                        <input type="text" placeholder="Masukkan Judul Buku" id="search" name="search" class="form-cotrol"/>
                        <button type="submit">
                          Cari
                        </button>
                      </form>
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

  <div class="container mt-3">
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tanggal Terbit</th>
            <th>jumlah</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>

  <!-- end about section -->

  <!-- business section -->

  <section class="business_section layout_padding">
    <div class="container">
      <h2>
        Rekomendasi Buku Bulan Ini
      </h2>
      <p>
        Ada beberapa buku yang menjadi favorit para pembaca di perpustakaan kami, terdiri dari beberapa macam kategori, kami akan menampilkan 3 buku rekomendasi dari perpustakaan kami.
      </p>
    </div>
    <div class="business_container">
      <div class="content-box box-1">
        <div class="detail">
          <h3>
            Laut Bercerita
          </h3>
          <p>
            Laut Bercerita bertutur tentang kisah keluarga yang kehilangan, sekumpulan sahabat yang merasakan kekosongan di dada, sekelompok orang yang gemar menyiksa dan lancar berkhianat, sejumlah keluarga yang mencari kejelasan makam anaknya, dan tentang cinta yang tak akan luntur. <br/>
            -Leila S. Chudori
          </p>
        </div>
        <div>
          <a href="">
            Pinjam Sekarang
          </a>
        </div>
      </div>
      <div class="content-box box-2">
        <div class="detail">
          <h3>
            Hello, Habits
          </h3>
          <p>
            Hello, Habits adalah salah satu buku yang cocok dibaca oleh siapa saja yang ingin meningkatkan kualitas hidupnya dengan cara menciptakan kebiasaan-kebiasaan yang lebih baik. Akan selalu ada kesempatan untuk mencoba berbagai hal baru dan tidak pernah ada kata terlambat untuk meninggalkan kebiasaan buruk, kemudian membangun kebiasaan baru dalam keseharian kita. <br />
            - Fumio Sakaki
          </p>
        </div>
        <div>
          <a href="">
            Pinjam Sekarang
          </a>
        </div>
      </div>
      <div class="content-box box-3">
        <div class="detail">
          <h3>
            The Midnight Library
          </h3>
          <p>
            Dengan membaca buku berjudul The Midnight Library, kamu akan mendapatkan pengalaman yang sangat berkesan. Melalui buku ini, kamu akan mengikut kisah Nora dan diajak untuk kembali merenungkan kehidupan kita sendiri. Ada kesedihan dan ada juga penyesalan yang akan ikut kita rasakan. Banyak sekali momen pengalaman Nora yang bisa membuat pembaca melakukan refleksi diri. Kemudian, ada kehangatan hati yang mengalir di dalam diri ketika membaca akhir dari kisah di novel ini. <br />
            - Matt Haig
          </p>
        </div>
        <div>
          <a href="">
            Pinjam Sekarang
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
          Kami mendukung agar indonesia maju. <br />
          dengan di galangkannya.
        </h2>
        <h2 class="make-heading">
          Gerakan Nasional Gemar Membaca.
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
          Team 7
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
                        Yasir Rizqi
                      </h5>
                      <p>
                        Sofware Engineer on Microsoft Corp , @rizqiyasir
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
                        Abdullah Zakaria
                      </h5>
                      <p>
                        Backend Developer on Meint Corp, @abzariy
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
                        Taruna Makky Satya Nugraha
                      </h5>
                      <p>
                        Fullstack Developer on Google Inc, @tarunamsn
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
                        Yasir Rizqi
                      </h5>
                      <p>
                        Sofware Engineer on Microsoft Corp , @rizqiyasir
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
                        Abdullah Zakaria
                      </h5>
                      <p>
                        Backend Developer on Meint Corp , @abzariy
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
                        Taruna Makky Satya Nugraha
                      </h5>
                      <p>
                        Fullstack Developer on Google Inc , @tarunamsn
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

@section('js')
<script>
  $(document).ready(function() {
      fetch_book_data(); 

      function fetch_book_data(query = '') {
        $.ajax({
          url:"{{ route('search') }}",
          method:'GET',
          data:{query:query},
          dataType:'json',
          success:function(data){
              $('tbody').html(data.table_data);
              $('#total_records').text(data.total_data);
          }
        })
      }

      $(document).on('keyup', '#search', function(){
        var query = $(this).val();
        fetch_book_data(query);
      })
  });
</script>
@endsection