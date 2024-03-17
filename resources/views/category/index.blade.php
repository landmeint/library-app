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
  <!-- category section -->

<div class="container mt-3 mb-3">
  @if (Auth::user()->level == 1)

  <a class="btn btn-primary" href="{{route('category_create')}}" role="button">Add New Category</a>
  @endif


<table class="table" style="margin: 30px 20px 50px 30px">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kategori Buku</th>
      <th scope="col">Action</th>
  </thead>
  <tbody>
    @foreach ($categories as $item)
    <tr>
        <th scope="row">{{$loop->index +1 }}</th>
        <td>{{$item->name}}</td>
        <td>
            <form action="/category/{{$item->id}}" method="POST">
                @csrf
                <a class="btn btn-primary" href="{{ route('category_edit', ['id' => $item->id]) }}" role="button">Edit</a>
                @method('DELETE')
                <button class="btn btn-primary" type="submit">Delete</button>
            </form>
        </td>
      
    </tr>
    @endforeach
  
  </tbody>
</table>
</div>
  <!-- end category section -->
@endsection

