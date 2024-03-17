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

  <div class="container mb-3">
    <div class="py-5 text-center">
      <h2>Tambah Buku</h2>
    </div>
  
      <div class="row justify-content-center ">
        <div class="col-md-8">
          <form action="{{ Route('book_store') }}" class="needs-validation"  method="POST" >
            @csrf
            <div class="mb-3">
              <label for="judul_buku">Judul Buku</label>
              <input type="text" name="title" class="form-control" id="judul_buku" placeholder="Masukkan Judul Buku">
              <div class="invalid-feedback">
                Tolong Masukkan Judul Buku
              </div>
            </div>

            <div class="mb-3">
              <label for="penulis_buku">Penulis</label>
              <input type="text" name="writer" class="form-control" id="penulis_buku" placeholder="Masukkan Nama Penulis Buku">
              <div class="invalid-feedback">
                Tolong Masukkan Penulis Buku
              </div>
            </div>

            <div class="mb-3">
              <label for="penerbit_buku">Penerbit</label>
              <input type="text" name="publisher" class="form-control" id="penerbit_buku" placeholder="Masukkan Nama Penerbit Buku">
              <div class="invalid-feedback">
                Tolong Masukkan Penerbit Buku
              </div>
            </div>
    
            <div class="mb-3">
              <label for="publication_date">Tanggal Terbit</label>
              <input type="date" name="publication" class="form-control" id="publication_date">
              <div class="invalid-feedback">
                Tolong Cantumkan Tanggal Terbit
              </div>
            </div>
  
            <div class="mb-3">
              <label for="jumlah_stok">Jumlah Stok yang Ada</label>
              <input type="number" name="stock" class="form-control" id="jumlah_stok" placeholder="Masukkan Jumlah Stok">
              <div class="invalid-feedback">
                Tolong Masukkan Jumlah Stok Buku yang tersedia dalam inventori
              </div>
            </div>

            <div class="mb-3">
              <label for="category">Kategori</label>
              <select id="category" class="form-control" name="category_id">
                <option selected>Pilih...</option>
                @foreach ($category as $ct)
                  <option value="{{ $ct->id }}">{{ $ct->name }}</option>
                @endforeach
              </select>
              <div class="invalid-feedback">
                Tolong Masukkan Kategori Buku
              </div>
            </div>
      
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan</button>
          </form>
        </div>
        
      </div>
  </div>

  <!-- end about section -->
@endsection

