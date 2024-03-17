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
  <!-- book section -->

  <div class="container">
    <div class="py-5 text-center">
      <h2>Edit Buku</h2>
    </div>
  
      <div class="row justify-content-center ">
        <div class="col-md-8">
          <form class="needs-validation" action="{{ route('book_update', ['id' => $book->id]) }}" novalidate method="POST" >
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul_buku">Judul Buku</label>
                <input type="text" name="title" class="form-control" id="judul_buku" placeholder="Masukkan Judul Buku" value="{{$book->title}}">
                <div class="invalid-feedback">
                  Tolong Masukkan Judul Buku
                </div>
            </div>

            <div class="mb-3">
                <label for="penulis_buku">Penulis</label>
                <input type="text" name="writer" class="form-control" id="penulis_buku" placeholder="Masukkan Nama Penulis Buku" value="{{$book->writer}}">
                <div class="invalid-feedback">
                  Tolong Masukkan Penulis Buku
                </div>
            </div>

            <div class="mb-3">
                <label for="penerbit_buku">Penerbit</label>
                <input type="text" name="publisher" class="form-control" id="penerbit_buku" placeholder="Masukkan Nama Penerbit Buku" value="{{$book->publisher}}">
                <div class="invalid-feedback">
                  Tolong Masukkan Penerbit Buku
                </div>
            </div>

            <div class="mb-3">
              <label for="date">Tanggal Terbit</label>
              <input type="date" name="publication" value="{{$book->publication}}" class="form-control" id="date">
              <div class="invalid-feedback">
                Tolong Cantumkan Tanggal Terbit
              </div>
            </div>
    
            <div class="mb-3">
                <label for="jumlah_stok">Jumlah Stok yang Ada</label>
                <input type="number" name="stock" class="form-control" id="jumlah_stok" placeholder="Masukkan Jumlah Stok" value="{{$book->stock}}">
                <div class="invalid-feedback">
                  Tolong Masukkan Jumlah Stok Buku yang tersedia dalam inventori
                </div>
            </div>
  
            <div class="mb-3">
              <label for="ctaegory">Kategori</label>
              <input type="number" value="{{$book->category_id}}" name="category_id" class="form-control" >
                <div class="invalid-feedback">
                  Pilih buku
                </div>
            </div>
      
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan</button>
          </form>
        </div>
        
      </div>
  </div>

  <!-- end book section -->
@endsection

