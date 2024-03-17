

@if (Auth::user()->level == 1)

    <a href="/">Beranda</a>
    <a href="{{ url('catalog') }}">Katalog</a>
    <a href="{{ url('about') }}">Tentang Kami</a>
    <a href="{{ url('borrow') }}">Peminjaman</a>
    <a href="{{ url('book') }}">Manajemen Buku</a>
    <a href="{{ url('category') }}">Manajemen Katogori</a>

    <a href="{{ url('borrow/create') }}" hidden>Peminjaman</a>

@elseif (Auth::user()->level == 2)

    <a href="/">Beranda</a>
    <a href="{{ url('catalog') }}">Katalog</a>
    <a href="{{ url('about') }}">Tentang Kami</a>

@endif