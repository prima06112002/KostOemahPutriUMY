@extends('layout')

@section('content')

    <!-- Gallery Section -->
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="bg-light" style="width:100%; height: 200px;"></div>
            </div>
            <div class="col-lg-3">
                <div class="bg-light" style="width:100%; height: 95px; margin-bottom: 10px;"></div>
                <div class="bg-light" style="width:100%; height: 95px;"></div>
            </div>
            <div class="col-lg-3">
                <div class="bg-light position-relative" style="width:100%; height: 200px;">
                    <div class="position-absolute bottom-0 end-0 p-3">
                        <span class="fs-4 fw-bold">+2 More Photos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Title Section -->
    <div class="container">
        <h2 class="fw-bold">Kost Oemah Putri</h2>
        <p class="text-muted">Kasihan Bantul, DIY</p>
    </div>

    <!-- Facility Section -->
    <div class="container mt-5">
        <h4 class="fw-bold">Fasilitas Kost</h4>
        <div class="row mt-3">
            <div class="col-6 col-md-4 mb-4">
                <img src="https://via.placeholder.com/40" alt="Ukuran Kamar" class="me-2">
                Uk kamar 3,5 X 4
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="https://via.placeholder.com/40" alt="Kamar Mandi Dalam" class="me-2">
                Kamar mandi dalam
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="https://via.placeholder.com/40" alt="Lemari" class="me-2">
                Lemari
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="https://via.placeholder.com/40" alt="Tv 32" class="me-2">
                Tv 32"
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="https://via.placeholder.com/40" alt="WiFi" class="me-2">
                Wifi
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="https://via.placeholder.com/40" alt="Meja Belajar" class="me-2">
                Meja Belajar
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="https://via.placeholder.com/40" alt="AC" class="me-2">
                AC
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="https://via.placeholder.com/40" alt="Bed" class="me-2">
                Bed
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="https://via.placeholder.com/40" alt="Kaca Rias" class="me-2">
                Kaca Rias
            </div>
        </div>
    </div>

@endsection
