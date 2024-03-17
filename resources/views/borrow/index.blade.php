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
    <main role="main" class="">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Peminjaman Buku</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a href="{{ url('borrow/create') }}" class="btn btn-sm btn-outline-secondary" role="button">Tambah Peminjaman</a>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Petugas</th>
              <th>Jumlah Buku</th>
              <th>Tanggal Pinjam</th>
              <th>Tanggal Kembali</th>
              <th>Peminjam</th>
              <th>Judul Buku</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>text</td>
              <td>random</td>
              <td>layout</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>1,007</td>
              <td>placeholder</td>
              <td>tabular</td>
              <td>information</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>random</td>
              <td>text</td>
              <td>placeholder</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>1,011</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>text</td>
              <td>placeholder</td>
              <td>layout</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>random</td>
              <td>tabular</td>
              <td>information</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Hapus</button>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <!-- end about section -->
@endsection

