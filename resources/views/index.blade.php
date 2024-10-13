@extends('layout')

@section('content')

    <!-- Banner -->
    <div class="banner">
        <img src="https://via.placeholder.com/1000x300" alt="Banner Image">
    </div>

    <!-- Description -->
    <div class="description">
        <p>
            Kost Oemah Putri adalah tempat penginapan yang nyaman dan aman, terletak dekat Universitas Muhammadiyah
            Yogyakarta (UMY). Kost ini menawarkan fasilitas lengkap seperti kamar ber-AC, kamar mandi dalam, Wi-Fi, dapur bersama,
            dan area parkir. Dengan lingkungan yang tenang dan lokasi strategis, Kost Oemah Putri menjadi pilihan ideal bagi
            mahasiswi yang mencari tempat tinggal nyaman dan terjangkau di sekitar UMY.
        </p>
    </div>

    <!-- Location Section -->
    <div class="location">
        <h5>Location</h5>
        <p>Ngebel, Tamantirto, Kec. Kasihan, Bantul, DIY</p>
        <div class="map">
            <img src="https://via.placeholder.com/400x300" alt="Map Image">
        </div>
    </div>

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
