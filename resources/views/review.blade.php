@extends('layout')

@section('content')

    <!-- Review Summary Section -->
    <div class="container my-5">
        <h2 class="fw-bold">Review Summary</h2>
        <div class="row mt-4">
            <div class="col-md-8">
                <!-- Rating Bar -->
                <div class="d-flex align-items-center mb-2">
                    <div class="fw-bold me-3">5</div>
                    <div class="progress flex-grow-1" style="height: 10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="fw-bold me-3">4</div>
                    <div class="progress flex-grow-1" style="height: 10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="fw-bold me-3">3</div>
                    <div class="progress flex-grow-1" style="height: 10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="fw-bold me-3">2</div>
                    <div class="progress flex-grow-1" style="height: 10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="fw-bold me-3">1</div>
                    <div class="progress flex-grow-1" style="height: 10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <!-- Average Rating -->
            <div class="col-md-4 text-center">
                <h1 class="display-1 fw-bold">5.0</h1>
                <div class="d-flex justify-content-center mb-2">
                    <span class="text-warning fs-4 me-2">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                </div>
                <a href="#" class="text-primary">32 reviews</a>
            </div>
        </div>
    </div>

    <!-- Review Section -->
    <div class="container my-5">
        <div class="row">
            <!-- Review 1 -->
            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User">
                    <div>
                        <h6 class="mb-0">Melisa Mhrni</h6>
                        <small>5 ulasan</small>
                    </div>
                </div>
                <div class="mt-2">
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    <small class="text-muted">9 months ago</small>
                    <p>Tempatnya nyaman adem enak bersih😍 ibu kos nya baik banget👏 pokoknya ga bakalan nyesel kalo ngekos di sini enak banget dan kalau untuk anak kuliahan lebih fokus belajar...</p>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User">
                    <div>
                        <h6 class="mb-0">Melisa Mhrni</h6>
                        <small>5 ulasan</small>
                    </div>
                </div>
                <div class="mt-2">
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    <small class="text-muted">9 months ago</small>
                    <p>Tempatnya nyaman adem enak bersih😍 ibu kos nya baik banget👏 pokoknya ga bakalan nyesel kalo ngekos di sini enak banget dan kalau untuk anak kuliahan lebih fokus belajar...</p>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User">
                    <div>
                        <h6 class="mb-0">Melisa Mhrni</h6>
                        <small>5 ulasan</small>
                    </div>
                </div>
                <div class="mt-2">
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    <small class="text-muted">9 months ago</small>
                    <p>Tempatnya nyaman adem enak bersih😍 ibu kos nya baik banget👏 pokoknya ga bakalan nyesel kalo ngekos di sini enak banget dan kalau untuk anak kuliahan lebih fokus belajar...</p>
                </div>
            </div>

            <!-- Review 4 -->
            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User">
                    <div>
                        <h6 class="mb-0">Melisa Mhrni</h6>
                        <small>5 ulasan</small>
                    </div>
                </div>
                <div class="mt-2">
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    <small class="text-muted">9 months ago</small>
                    <p>Tempatnya nyaman adem enak bersih😍 ibu kos nya baik banget👏 pokoknya ga bakalan nyesel kalo ngekos di sini enak banget dan kalau untuk anak kuliahan lebih fokus belajar...</p>
                </div>
            </div>
        </div>
    </div>

@endsection
