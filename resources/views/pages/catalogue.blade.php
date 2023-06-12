@extends('layouts.mainlayout')

@section('title', 'Catalogue - PT. Formosa Ingredeint Factory Tbk')
@section('content')
    <style>
        .col-lg-12 ul {
            display: flex;
            justify-content: center;
        }

        .card {
            border: 0;
            box-shadow: 2px 2px 7px rgba(0, 0, 0, 0.040)
        }

        .img-box {
            position: relative;
            overflow: hidden;
        }

        .img-box img {
            max-height: 531px;
        }

        .img-box .view-details {
            opacity: 0;
            position: absolute;
            background-color: rgba(230, 230, 230, 0.712);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            transition: opacity 0.3s ease-in-out;
        }

        .img-box:hover .view-details {
            opacity: 1;
        }

        .img-box .view-details .btn-view {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .img-box .view-details .btn-view i {
            background-color: #fff;
            padding: 10px;
            border-radius: 100%;
        }

        .img-box .view-details .btn-view i:active {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 100%;
        }
    </style>
    <main id="main">
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Catalogue</li>
                </ol>
                <h2>Catalogue</h2>

            </div>
        </section>

        <section id="features" class="features">
            <div class="container">
                <div class="feture-tabs mt-0" data-aos="fade-in">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills mb-3">
                            <li>
                                <a class="nav-link active" data-bs-toggle="pill" href="#boba">Tapioca Pearls</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#sauce">Sauce</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#jelly">Jelly</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#syrup">Syrup</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#other">Other</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="boba">
                                @if (!empty($catalog['tapioca']))
                                    <div
                                        class="row row-cols-xl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 d-flex justify-content-center">
                                        @foreach ($catalog['tapioca'] as $boba)
                                            <div class="col d-flex justify-content-center">
                                                <div class="card text-center p-0 mt-3">
                                                    <div class="img-box">
                                                        <div class="view-details">
                                                            <div class="btn-view">
                                                                <a href="/catalog/{{ urlencode($boba['categories']) }}/{{ urlencode($boba['flavour']) }}"
                                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="View Details"><i
                                                                        class="ri-search-line text-secondary"></i></a>
                                                            </div>
                                                        </div>
                                                        <img src="{{ asset('/assets/img/catalogue/tapioca_pearls/' . $boba['folder']) }}"
                                                            style="aspect-ratio: 1 / 1;object-fit: cover;"
                                                            class="card-img-top"
                                                            alt="{{ $boba['categories'] . ' ' . $boba['flavour'] }}">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title text-capitalize" style="font-weight: 800;">
                                                            {{ $boba['flavour'] }}</h5>
                                                        <p class="card-text text-capitalize">{{ $boba['categories'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="d-flex justify-content-center mt-3">
                                        <h1>No data found here</h1>
                                    </div>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="sauce">
                                @if (!empty($catalog['sauce']))
                                    <div
                                        class="row row-cols-xl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 d-flex justify-content-center">
                                        @foreach ($catalog['sauce'] as $boba)
                                            <div class="col d-flex justify-content-center">
                                                <div class="card text-center p-0 mt-3">
                                                    <div class="img-box">
                                                        <div class="view-details">
                                                            <div class="btn-view">
                                                                <a href="/catalog/{{ urlencode($boba['categories']) }}/{{ urlencode($boba['flavour']) }}"
                                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="View Details"><i
                                                                        class="ri-search-line text-secondary"></i></a>
                                                            </div>
                                                        </div>
                                                        <img src="{{ asset('/assets/img/catalogue/sauce/' . $boba['folder']) }}"
                                                            style="aspect-ratio: 1 / 1;object-fit: cover;"
                                                            class="card-img-top"
                                                            alt="{{ $boba['categories'] . ' ' . $boba['flavour'] }}">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title text-capitalize" style="font-weight: 800;">
                                                            {{ $boba['flavour'] }}</h5>
                                                        <p class="card-text text-capitalize">{{ $boba['categories'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="d-flex justify-content-center mt-3">
                                        <h1>No data found here</h1>
                                    </div>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="jelly">
                                @if (!empty($catalog['jelly']))
                                    <div
                                        class="row row-cols-xl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 d-flex justify-content-center">
                                        @foreach ($catalog['jelly'] as $boba)
                                            <div class="col d-flex justify-content-center">
                                                <div class="card text-center p-0 mt-3">
                                                    <div class="img-box">
                                                        <div class="view-details">
                                                            <div class="btn-view">
                                                                <a href="/catalog/{{ urlencode($boba['categories']) }}/{{ urlencode($boba['flavour']) }}"
                                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="View Details"><i
                                                                        class="ri-search-line text-secondary"></i></a>
                                                            </div>
                                                        </div>
                                                        <img src="{{ asset('/assets/img/catalogue/jelly/' . $boba['folder']) }}"
                                                            style="aspect-ratio: 1 / 1;object-fit: cover;"
                                                            class="card-img-top"
                                                            alt="{{ $boba['categories'] . ' ' . $boba['flavour'] }}">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title text-capitalize" style="font-weight: 800;">
                                                            {{ $boba['flavour'] }}</h5>
                                                        <p class="card-text text-capitalize">{{ $boba['categories'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="d-flex justify-content-center mt-3">
                                        <h1>No data found here</h1>
                                    </div>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="syrup">
                                @if (!empty($catalog['syrup']))
                                    <div
                                        class="row row-cols-xl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 d-flex justify-content-center">
                                        @foreach ($catalog['syrup'] as $boba)
                                            <div class="col d-flex justify-content-center">
                                                <div class="card text-center p-0 mt-3">
                                                    <div class="img-box">
                                                        <div class="view-details">
                                                            <div class="btn-view">
                                                                <a href="/catalog/{{ urlencode($boba['categories']) }}/{{ urlencode($boba['flavour']) }}"
                                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="View Details"><i
                                                                        class="ri-search-line text-secondary"></i></a>
                                                            </div>
                                                        </div>
                                                        <img src="{{ asset('/assets/img/catalogue/syrup/' . $boba['folder']) }}"
                                                            style="aspect-ratio: 1 / 1;object-fit: cover;"
                                                            class="card-img-top"
                                                            alt="{{ $boba['categories'] . ' ' . $boba['flavour'] }}">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title text-capitalize" style="font-weight: 800;">
                                                            {{ $boba['flavour'] }}</h5>
                                                        <p class="card-text text-capitalize">{{ $boba['categories'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="d-flex justify-content-center mt-3">
                                        <h1>No data found here</h1>
                                    </div>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="other">
                                @if (!empty($catalog['other']))
                                    <div
                                        class="row row-cols-xl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 d-flex justify-content-center">
                                        @foreach ($catalog['other'] as $boba)
                                            <div class="col d-flex justify-content-center">
                                                <div class="card text-center p-0 mt-3">
                                                    <div class="img-box">
                                                        <div class="view-details">
                                                            <div class="btn-view">
                                                                <a href="/catalog/{{ urlencode($boba['categories']) }}/{{ urlencode($boba['flavour']) }}"
                                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="View Details"><i
                                                                        class="ri-search-line text-secondary"></i></a>
                                                            </div>
                                                        </div>
                                                        <img src="{{ asset('/assets/img/catalogue/other/' . $boba['folder']) }}"
                                                            style="aspect-ratio: 1 / 1;object-fit: cover;"
                                                            class="card-img-top"
                                                            alt="{{ $boba['categories'] . ' ' . $boba['flavour'] }}">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title text-capitalize" style="font-weight: 800;">
                                                            {{ $boba['flavour'] }}</h5>
                                                        <p class="card-text text-capitalize">{{ $boba['categories'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="d-flex justify-content-center mt-3">
                                        <h1>No data found here</h1>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
