@extends('layouts.main')

@section('head-content')
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
@endsection

@section('body-content')
  <!-- borrow section -->

  <div class="container">
    <div class="py-5 text-center">
      <h2>Tambah Peminjaman</h2>
    </div>
  
      <div class="col-md-8 order-md-1">
        <form class="needs-validation" novalidate>
  
          <div class="mb-3">
            <label for="petugas">petugas</label>
            <input type="text" class="form-control" id="petugas" placeholder="Masukkan Nama Petugas">
            <div class="invalid-feedback">
              Tolong Masukkan Nama Petugas
            </div>
          </div>
  
          <div class="mb-3">
            <label for="jumlah_buku">Jumlah Buku</label>
            <input type="text" class="form-control" id="jumlah_buku" placeholder="Masukkan Jumlah Buku">
            <div class="invalid-feedback">
              Tolong Masukkan Jumlah Buku
            </div>
          </div>
  
          <div class="mb-3">
            <label for="date">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="date">
            <div class="invalid-feedback">
              Tolong Set Tanggal Pinjam
            </div>
          </div>

          <div class="mb-3">
            <label for="date">Tanggal Kembali</label>
            <input type="date" class="form-control" id="date">
            <div class="invalid-feedback">
              Tolong Set Tanggal Kembali
            </div>
          </div>
  
          <div class="mb-3">
            <label for="peminjam">Peminjam</label>
              <select class="custom-select d-block w-100" id="peminjam" required>
                <option value="">Pilih...</option>
                <option>Neymar</option>
              </select>
              <div class="invalid-feedback">
                Pilih Peminjam
              </div>
          </div>

          <div class="mb-3">
            <label for="buku">Buku</label>
              <select class="custom-select d-block w-100" id="buku" required>
                <option value="">Pilih...</option>
                <option>Harry Potter</option>
              </select>
              <div class="invalid-feedback">
                Pilih buku
              </div>
          </div>
    
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
        </form>
      </div>
  </div>

  <!-- end about section -->
@endsection

