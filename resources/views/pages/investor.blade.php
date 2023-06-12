@extends('layouts.mainlayout')

@section('title', 'Investor Relationship - PT. Formosa Ingredeint Factory Tbk')

@section('content')
    <style>
        .panel-file {
            background-size: cover;
            background-repeat: no-repeat;
            margin-top: 0.75rem;
            position: relative;
            width: 6cm;
            height: 8.5cm;
            background-color: white;
            overflow: hidden;
            border-radius: 5px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.178);
            transition: 0.3s ease-in-out;
        }

        .panel-file>.content {
            position: absolute;
            left: 0;
            bottom: 0rem;
            width: 100%;
            background-color: rgba(255, 255, 255,1);
            padding: 0.75rem;
            word-wrap: break-word;
        }

        .panel-file>.content h5 {
            display: flex;
            justify-content: center;
            width: 100%;
            font-size: 17px;
            font-weight: 800;
        }

        .panel-file>.content .dl {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .panel-file:hover {
            transform: scale(1.05);
        }
        
        .text-wrap {
            text-transform: capitalize;
            text-align: center;
        }
    </style>
    <main id="main">
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Investor Relationship</li>
                </ol>
                <h2>Investor Relationship</h2>

            </div>
        </section>
        <section id="features" class="features">
            <div class="container">
                <div class="feture-tabs mt-0" data-aos="fade-in">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills mb-3">
                            <li>
                                <a class="nav-link active" style="font-size: 12px" data-bs-toggle="pill"
                                    href="#ar">Annual Report</a>
                            </li>
                            <li>
                                <a class="nav-link" style="font-size: 12px" data-bs-toggle="pill" href="#cd">Company
                                    Disclosure</a>
                            </li>
                            <li>
                                <a class="nav-link" style="font-size: 12px" data-bs-toggle="pill" href="#cp">Company
                                    Prospectus</a>
                            </li>
                            <li>
                                <a class="nav-link" style="font-size: 12px" data-bs-toggle="pill" href="#ci">CSR
                                    Information</a>
                            </li>
                            <li>
                                <a class="nav-link" style="font-size: 12px" data-bs-toggle="pill" href="#fr">Financial
                                    Report</a>
                            </li>
                            <li>
                                <a class="nav-link" style="font-size: 12px" data-bs-toggle="pill" href="#gms">General
                                    Meeting Shareholders</a>
                            </li>
                            <li>
                                <a class="nav-link" style="font-size: 12px" data-bs-toggle="pill" href="#pr">Press
                                    Release</a>
                            </li>
                            <li>
                                <a class="nav-link" style="font-size: 12px" data-bs-toggle="pill"
                                    href="#sr">Sustainability Report</a>
                            </li>
                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="ar">
                                <div class="row gap-3" style="justify-content: center;">
                                    @foreach ($annual as $data)
                                        <div class="panel-file"
                                            style="background-image: url('{{ asset('assets/files/thumbnails/' . $data->thumbnail) }}'); background-size: contain;"
                                            data-aos="fade-up" data-aos-delay="100">
                                            <div class="content">
                                                <h5 class="title text-wrap">{{ $data->name }}</h5>
                                                <div class="dl">
                                                    <a href="download?file={{ $data->name }}&category={{ $data->category }}" download="{{ $data->name }}" class="btn btn-primary">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="cd">
                                <div class="row gap-3" style="justify-content: center;">
                                    @foreach ($cd as $data)
                                        <div class="panel-file"
                                            style="background-image: url('{{ asset('assets/files/thumbnails/' . $data->thumbnail) }}'); background-size: contain;"
                                            data-aos="fade-up" data-aos-delay="100">
                                            <div class="content">
                                                <h5 class="title text-wrap">{{ $data->name }}</h5>
                                                <div class="dl">
                                                    <a href="download?file={{ $data->name }}&category={{ $data->category }}" download="{{ $data->name }}" class="btn btn-primary">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="cp">
                                <div class="row gap-3" style="justify-content: center;">
                                    @foreach ($cp as $data)
                                        <div class="panel-file"
                                            style="background-image: url('{{ asset('assets/files/thumbnails/' . $data->thumbnail) }}'); background-size: contain;"
                                            data-aos="fade-up" data-aos-delay="100">
                                            <div class="content">
                                                <h5 class="title text-wrap">{{ $data->name }}</h5>
                                                <div class="dl">
                                                    <a href="download?file={{ $data->name }}&category={{ $data->category }}" download="{{ $data->name }}" class="btn btn-primary">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="ci">
                                <div class="row gap-3" style="justify-content: center;">
                                    @foreach ($csr as $data)
                                        <div class="panel-file"
                                            style="background-image: url('{{ asset('assets/files/thumbnails/' . $data->thumbnail) }}'); background-size: contain;"
                                            data-aos="fade-up" data-aos-delay="100">
                                            <div class="content">
                                                <h5 class="title text-wrap">{{ $data->name }}</h5>
                                                <div class="dl">
                                                    <a href="download?file={{ $data->name }}&category={{ $data->category }}" download="{{ $data->name }}" class="btn btn-primary">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="fr">
                                <div class="row gap-3" style="justify-content: center;">
                                    @foreach ($financial as $data)
                                        <div class="panel-file"
                                            style="background-image: url('{{ asset('assets/files/thumbnails/' . $data->thumbnail) }}'); background-size: contain;"
                                            data-aos="fade-up" data-aos-delay="100">
                                            <div class="content">
                                                <h5 class="title text-wrap">{{ $data->name }}</h5>
                                                <div class="dl">
                                                    <a href="download?file={{ $data->name }}&category={{ $data->category }}" download="{{ $data->name }}" class="btn btn-primary">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="gms">
                                <div class="row gap-3" style="justify-content: center;">
                                    @foreach ($gms as $data)
                                        <div class="panel-file"
                                            style="background-image: url('{{ asset('assets/files/thumbnails/' . $data->thumbnail) }}'); background-size: contain;"
                                            data-aos="fade-up" data-aos-delay="100">
                                            <div class="content">
                                                <h5 class="title text-wrap">{{ $data->name }}</h5>
                                                <div class="dl">
                                                    <a href="download?file={{ $data->name }}&category={{ $data->category }}" download="{{ $data->name }}" class="btn btn-primary">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pr">
                                <div class="row gap-3" style="justify-content: center;">
                                    @foreach ($press as $data)
                                        <div class="panel-file"
                                            style="background-image: url('{{ asset('assets/files/thumbnails/' . $data->thumbnail) }}'); background-size: contain;"
                                            data-aos="fade-up" data-aos-delay="100">
                                            <div class="content">
                                                <h5 class="title text-wrap">{{ $data->name }}</h5>
                                                <div class="dl">
                                                    <a href="download?file={{ $data->name }}&category={{ $data->category }}" download="{{ $data->name }}" class="btn btn-primary">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="sr">
                                <div class="row gap-3" style="justify-content: center;">
                                    @foreach ($sustain as $data)
                                        <div class="panel-file"
                                            style="background-image: url('{{ asset('assets/files/thumbnails/' . $data->thumbnail) }}'); background-size: contain;"
                                            data-aos="fade-up" data-aos-delay="100">
                                            <div class="content">
                                                <h5 class="title text-wrap">{{ $data->name }}</h5>
                                                <div class="dl">
                                                    <a href="download?file={{ $data->name }}&category={{ $data->category }}" download="{{ $data->name }}" class="btn btn-primary">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- End Feature Tabs -->
            </div>
        </section>
    </main>
@endsection
