@extends('layouts.mainlayout')

@section('title', 'PT. Formosa Ingredient Factory Tbk')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Formosa Ingredient Factory</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Producer of high quality international standard Boba, Jelly,
                        Sauce, Syrup, and Drinking Powders</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1604 1604">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #f7ec32;
                                    fill-rule: evenodd;
                                }
                            </style>
                        </defs>
                        <path id="Color_Fill_1" data-name="Color Fill 1" class="cls-1"
                            d="M801,103c5.166,3.07,8.9,7.831,13,12l3,2v2l6,5v2l4,3v2l3,2v2l2,1v2l2,1v2l2,1v2l2,1q0.5,2,1,4l2,1v2h1v2h1v2h1v2h1v2h1q1,3,2,6h1v3h1v2h1v3h1v2h1q1,4.5,2,9h1v4h1v3h1v4h1v5h1v5h1q0.5,8.5,1,17h1V401q0.5,389.961,1,780v146c0,18.7,2.329,46.96-2,62q-0.5,6.495-1,13h-1v4h-1v4h-1v4h-1v4h-1v3h-1v3h-1v3h-1v2h-1v3h-1v2h-1v3h-1q-1,3-2,6h-1v2h-1v2h-1q-1,3-2,6c-0.667.33-1.333,0.67-2,1-0.333,1.33-.667,2.67-1,4h-1q-0.5,1.5-1,3c-0.667.33-1.333,0.67-2,1v2h-1q-0.5,1.5-1,3c-0.667.33-1.333,0.67-2,1v2c-1,.67-2,1.33-3,2v2c-1,.67-2,1.33-3,2v2c-1.667,1.33-3.333,2.67-5,4q-0.5,1.5-1,3l-7,6c-3.355,3.36-5.614,7.66-11,9q-3-3.495-6-7c-1-.33-2-0.67-3-1v-1c-0.667-.33-1.333-0.67-2-1v-2q-4-3.495-8-7v-2l-4-3v-2l-4-3v-2c-0.667-.33-1.333-0.67-2-1v-2c-0.667-.33-1.333-0.67-2-1v-2c-0.667-.33-1.333-0.67-2-1v-2c-0.667-.33-1.333-0.67-2-1-0.333-1.33-.667-2.67-1-4-0.667-.33-1.333-0.67-2-1v-2h-1v-2h-1v-2h-1v-2h-1v-2h-1v-2h-1q-1-3-2-6h-1l-9-27-1-10h-1q-0.5-7.005-1-14c-1.728-6.08-1-16.28-1-24V1059c0-10.98,1.576-25.81-1-35V297c0-32.889-3.5-75.78,5-101q0.5-4,1-8h1v-3h1v-3h1v-3h1q0.5-3,1-6h1v-2h1v-3h1q1-3,2-6h1v-2h1v-2h1v-2h1v-2h1v-2h1v-2h1v-2h1q0.5-1.5,1-3l2-1q0.5-2,1-4l2-1v-2l3-2v-2l3-2v-2l3-2v-2l6-5v-2l4-3,7-8C798.159,105.042,799.111,106.085,801,103ZM568,124l4,1v1l7,1v1h2v1l6,1v1h2v1h3v1l4,1v1h2v1l5,1q0.5,1,1,2h2v1h2v1h2v1h2q0.5,1,1,2h2q0.5,1,1,2h2q0.5,1,1,2h2q0.5,1,1,2h2l3,4c15.851,11.419,26.839,27.97,35,47v3h1v3h1v4h1v4h1v4h1v6h1v8c3.662,13.165.163,41.453-3,52v6h-1c-1.12,3.664.287,6.548-2,9v1h-3c-2.04-2.259-2.221-.741-5-2v-1l-4-1v-1h-3v-1h-2v-1h-2v-1h-2v-1h-2v-1h-2v-1h-2v-1l-4-1q-0.5-1-1-2l-4-1q-0.5-1-1-2l-4-1q-0.5-1-1-2h-2q-0.5-1-1-2h-2l-2-3h-2l-3-4c-18.421-13.251-29.726-32.56-38-56v-4h-1v-4h-1v-5h-1v-6h-1v-8c-2.186-7.777-1-20.5-1-30V146h1V136h1Q567.5,130,568,124Zm461,0q0.495,7.5,1,15h1v12h1v12c0,10.691.36,21.776-2,30v7h-1c-0.33,3.333-.67,6.667-1,10h-1v4h-1v3h-1v3h-1v3h-1v3h-1v2h-1v3h-1c-0.67,2-1.33,4-2,6h-1c-0.33,1.333-.67,2.667-1,4-0.67.333-1.33,0.667-2,1v2c-0.67.333-1.33,0.667-2,1v2c-0.67.333-1.33,0.667-2,1v2c-0.67.333-1.33,0.667-2,1v2c-1.67,1.333-3.33,2.667-5,4v2q-4,3.5-8,7l-2,3h-2l-4,5-3,1q-0.5,1-1,2h-2q-0.5,1-1,2l-3,1v1h-2q-0.5,1-1,2h-2q-0.5,1-1,2h-2v1h-2v1h-2v1h-2q-0.5,1-1,2l-4,1v1l-4,1v1h-3v1l-9,3v1a22.647,22.647,0,0,1-8,2c-0.374-6.648-2.39-13.475-4-19v-7h-1q-0.5-11.5-1-23h-1v-8h1V230h1v-7h1v-5h1v-5h1v-3h1v-4l10-23,2-1v-2h1q0.5-1.5,1-3l2-1v-2l3-2v-2l2-1c2.192-2.321,5.034-4.544,6-8h2c3.246-5.4,8.8-8.473,14-12q0.5-1,1-2h2q0.5-1,1-2l3-1v-1l4-1q0.5-1,1-2l4-1v-1h2v-1l6-2v-1h3v-1l4-1v-1ZM106,245H310c42.161,0,86.8-2.035,118,9l8,1v1h3v1h3v1h3v1h3v1l6,1v1h2v1h3v1l4,1v1h3v1l6,2v1h2v1l5,1,1,2h2v1h2v1h2v1h2v1h2l1,2,4,1,1,2,4,1v1l3,1,1,2h2l1,2h2l2,3h2l2,3h2l2,3h2l3,4h2l5,6h2l9,10,11,10v2l6,5v2l4,3v2l4,3v2l3,2v2l2,1v2l2,1v2l2,1v2l2,1v2l2,1q0.5,2,1,4l2,1q1,3,2,6l2,1q1,3,2,6h1v2h1q1,3,2,6h1v3h1v2h1q0.5,2,1,4h1q0.5,2.5,1,5h1q0.5,3,1,6c9.966,23.043,16,52.287,16,85v35c0,3.909.9,10.788-1,13-0.584-5.988-4.639-10.63-7-15q-0.5-2-1-4l-2-1v-2h-1v-2h-1v-2h-1v-2l-2-1q-0.5-2-1-4l-2-1q-0.5-2-1-4h-1q-0.5-1.5-1-3l-2-1v-2l-2-1v-2l-2-1v-2h-1q-0.5-1.5-1-3l-2-1v-2l-3-2v-2l-2-1v-2l-3-2v-2l-4-3v-2l-4-3v-2l-5-4v-2l-7-6v-2l-6-5-17-18h-2l-6-7h-2l-4-5h-2l-2-3h-2l-3-4h-2l-1-2h-2l-2-3h-2l-1-2-3-1v-1h-2l-1-2h-2l-1-2h-2l-1-2-4-1-1-2-6-2-1-2-39-18-6-1v-1h-3v-1h-3v-1h-3v-1h-3v-1l-8-1v-1l-12-2v-1l-10-1v-1h-6v-1h-7v-1h-8v-1l-41-1h-3v-1H290v-1h-3c-10.256-.46-23.451,1.4-32-1H220v-1H203c-11.877,0-21.853-.754-30-4h-3v-1l-6-2v-1l-4-1-1-2h-2l-1-2h-2l-6-7-4-3v-2l-3-2v-2l-2-1q-0.5-2-1-4h-1q-0.5-2-1-4h-1v-3h-1v-2h-1q-0.5-2-1-4h-1v-3h-1v-2h-1v-2h-1v-2h-1v-3h-1v-2h-1q-0.5-2-1-4h-1v-3h-1v-2h-1q-0.5-2-1-4h-1v-3h-1v-2h-1q-0.5-2-1-4h-1v-3h-1v-2h-1q-0.5-2-1-4h-1v-3h-1v-2h-1Zm1384,0c-0.35,3.827-1.91,4.572-3,7l-3,9h-1v3h-1v2h-1c-0.33,1.333-.67,2.667-1,4h-1v3h-1v2h-1v2h-1v2h-1v3h-1c-0.33,1.333-.67,2.667-1,4h-1c-0.33,1.666-.67,3.334-1,5h-1v2h-1c-0.33,1.333-.67,2.667-1,4h-1v3h-1v2h-1c-0.33,1.333-.67,2.667-1,4h-1v3h-1v2h-1v2h-1v2h-1v2h-1v2h-1v2c-0.67.333-1.33,0.667-2,1v2l-3,2v2c-1.67,1.333-3.33,2.667-5,4-0.67,1-1.33,2-2,3h-2l-3,4-4,1c-0.33.667-.67,1.333-1,2h-2v1l-4,1v1h-3v1h-3v1h-3v1h-4v1h-7v1h-32v1h-35v1h-35c-7.82,2.22-20.46.885-30,1h-5v1h-13c-10.53,0-22.72-.369-31,2l-15,1c-4.71,1.39-11.44,2.579-16,4h-5v1l-8,1v1l-7,1v1h-3v1h-3v1h-3v1h-3v1l-9,2v1h-2v1h-3v1l-4,1v1h-3v1l-6,2v1h-2v1h-3v1h-2v1h-2c-0.33.667-.67,1.333-1,2h-2v1h-2v1h-2v1h-2v1l-4,1c-0.33.667-.67,1.333-1,2l-4,1c-0.33.667-.67,1.333-1,2l-4,1v1l-3,1c-0.33.667-.67,1.333-1,2h-2v1l-3,1c-0.33.667-.67,1.333-1,2h-2c-0.67,1-1.33,2-2,3h-2c-0.33.667-.67,1.333-1,2h-2c-0.67,1-1.33,2-2,3h-2l-3,4h-2l-3,4h-2c-1.67,2-3.33,4-5,6h-2l-9,10c-7.29,7.3-14.84,13.482-21,22l-6,5v2c-1.33,1-2.67,2-4,3v2c-1.33,1-2.67,2-4,3v2l-3,2v2l-3,2v2l-3,2v2c-0.67.333-1.33,0.667-2,1-0.33,1-.67,2-1,3h-1v2c-0.67.333-1.33,0.667-2,1v2c-0.67.333-1.33,0.667-2,1v2c-0.67.333-1.33,0.667-2,1v2c-0.67.333-1.33,0.667-2,1v2c-0.67.333-1.333,0.667-2,1q-0.5,2-1,4l-2,1q-1,3-2,6l-2,1v2h-1v2h-1v2h-1v2l-2,1v2h-1v2h-1l-4,11h-1V476c2.671-3.237.556-12.163,2-17,2.208-7.394,3.594-16.935,6-24v-4h1v-3h1v-3h1v-4q7.5-18.5,15-37c0.67-.333,1.33-0.667,2-1v-2h1v-2h1v-2h1v-2h1v-2c0.67-.333,1.33-0.667,2-1,0.33-1.333.67-2.667,1-4,0.67-.333,1.33-0.667,2-1,0.33-1.333.67-2.667,1-4h1c0.33-1,.67-2,1-3,0.67-.333,1.33-0.667,2-1v-2h1c0.33-1,.67-2,1-3,0.67-.333,1.33-0.667,2-1v-2l3-2v-2l3-2v-2c1.33-1,2.67-2,4-3v-2c1.67-1.333,3.33-2.667,5-4v-2q7.005-6.5,14-13,5.505-6,11-12h2c1.67-2,3.33-4,5-6h2c0.67-1,1.33-2,2-3h2c0.67-1,1.33-2,2-3h2c0.67-1,1.33-2,2-3h2c0.33-.667.67-1.333,1-2h2c0.67-1,1.33-2,2-3l4-1c0.33-.667.67-1.333,1-2l3-1v-1l4-1c0.33-.667.67-1.333,1-2l6-2c0.33-.667.67-1.333,1-2l6-2v-1h2v-1l6-2v-1l5-1v-1h2v-1h3v-1h2v-1h3v-1h2v-1l6-1v-1h3v-1h3v-1h3v-1h3v-1l7-1v-1l8-1v-1l10-1v-1l21-2v-1h13c6.09-1.712,16.27-1,24-1h246ZM178,435h84c12.49,0,31.6-1.946,42,1h15v1h10v1h8v1h6v1h6v1h5v1h5v1h5v1h4v1h4v1h4l36,12v1l4,1v1h3v1l4,1v1h3v1l6,2v1h2v1h2v1h2v1h2v1h2v1h2v1h2v1h2l1,2,6,2,1,2,4,1,1,2,4,1v1l3,1,1,2h2v1l3,1,1,2h2l2,3h2l1,2h2l1,2,3,1,2,3h2l2,3,3,1,5,6h2l6,7h2l12,13,7,6v2l8,7v2l5,4v2l4,3v2l3,2v2l3,2v2l3,2v2l2,1q0.5,1.5,1,3h1v2l2,1v2l2,1v2l2,1v2l2,1q0.5,2,1,4l2,1q1,3,2,6l2,1v2h1v2h1v2h1v2h1v2l2,1v2h1v2h1v3h1v2h1v2h1q1,3,2,6h1v3h1q0.5,2,1,4h1v3h1v2h1q0.5,3,1,6c13.646,31.4,20.537,69.507,21,114-69.117.52-105.489-40.68-132-83v-2h-1v-2h-1v-2h-1v-2h-1l-1-4h-1l-1-4h-1v-2h-1v-2h-1v-2h-1v-2h-1l-2-6-2-1-1-4-2-1-1-4h-1l-1-3-2-1v-2l-2-1v-2l-3-2v-2l-2-1v-2l-2-1v-1l-2-1v-2l-5-4v-2l-11-10-10-11h-2l-4-5h-2l-2-3h-2l-2-3h-2l-1-2-3-1v-1h-2l-1-2-3-1v-1l-4-1-1-2h-2v-1h-2v-1h-2v-1h-2l-1-2h-2v-1h-2v-1h-3v-1h-2v-1l-6-2v-1h-3v-1h-2v-1h-3v-1h-2v-1l-6-1v-1h-3v-1h-3v-1l-7-1v-1h-4v-1l-8-1v-1h-5v-1h-6v-1h-6v-1h-7v-1l-37-1v-1h-9v-1h-6v-1l-7-1v-1h-3v-1l-5-1v-1l-4-1v-1l-4-1q-0.5-1-1-2h-2v-1l-3-1q-0.5-1-1-2h-2l-4-5h-2q-0.5-1-1-2l-4-3v-2l-5-4v-2l-2-1v-2l-2-1q-0.5-2-1-4l-2-1v-2h-1v-2h-1v-3h-1v-2h-1q-0.5-3-1-6h-1v-3h-1v-3h-1q-1-5-2-10h-1v-3h-1v-4h-1Zm1241,0-6,21h-1v4h-1l-3,13h-1v3h-1v3h-1v3h-1c-0.33,2-.67,4-1,6h-1c-0.67,2-1.33,4-2,6h-1c-0.33,1.333-.67,2.667-1,4-0.67.333-1.33,0.667-2,1v2c-0.67.333-1.33,0.667-2,1v2l-3,2v2l-9,8c-1.33,1.667-2.67,3.333-4,5h-2c-0.67,1-1.33,2-2,3h-2c-0.33.667-.67,1.333-1,2l-6,2c-0.33.667-.67,1.333-1,2h-2v1h-3v1h-2v1h-3v1h-3v1h-3v1h-4v1l-14,1v1h-18l-33,3v1h-5v1h-5v1h-4v1h-4v1h-4v1h-4v1l-18,5v1h-2v1h-3v1h-2v1c-1.67.333-3.33,0.667-5,1v1l-6,2v1h-2v1l-6,2c-0.33.667-.67,1.333-1,2l-6,2c-0.33.667-.67,1.333-1,2l-4,1v1l-3,1c-0.33.667-.67,1.333-1,2h-2c-0.33.667-.67,1.333-1,2h-2c-0.67,1-1.33,2-2,3h-2c-0.67,1-1.33,2-2,3h-2l-3,4h-2q-3.495,4-7,8h-2l-6,7-3,2v2q-4.005,3.5-8,7v2c-1.33,1-2.67,2-4,3-0.33,1-.67,2-1,3-0.67.333-1.33,0.667-2,1v2l-3,2v2c-0.67.333-1.33,0.667-2,1-0.33,1-.67,2-1,3h-1v2c-0.67.333-1.33,0.667-2,1-0.33,1-.67,2-1,3h-1q-13.005,25-26,50h-1c-0.33,1-.67,2-1,3-0.67.333-1.33,0.667-2,1v2c-0.67.333-1.33,0.667-2,1v2l-3,2c-23.55,33.41-59.19,60.869-116,61-0.83-33.794,4.138-66.462,13-91v-4h1v-3h1v-3h1v-3h1v-3h1q0.5-3,1-6h1v-2h1v-3h1v-2h1v-3h1v-2h1v-3h1c0.33-1.333.67-2.667,1-4h1v-3h1c0.67-2,1.33-4,2-6h1v-2h1v-2h1v-2h1v-2h1v-2h1v-2h1v-2h1v-2h1v-2c0.67-.333,1.33-0.667,2-1,0.67-2,1.33-4,2-6h1c0.33-1,.67-2,1-3,0.67-.333,1.33-0.667,2-1,0.33-1.333.67-2.667,1-4,0.67-.333,1.33-0.667,2-1v-2h1c0.33-1,.67-2,1-3,0.67-.333,1.33-0.667,2-1v-2h1c0.33-1,.67-2,1-3,0.67-.333,1.33-0.667,2-1v-2l3-2v-2c0.67-.333,1.33-0.667,2-1v-2c1.33-1,2.67-2,4-3v-2l3-2v-2c1.67-1.333,3.33-2.667,5-4v-2l6-5v-2q4.995-4.5,10-9,7.995-8.5,16-17h2c1.67-2,3.33-4,5-6h2c1.33-1.666,2.67-3.334,4-5h2l3-4h2c0.67-1,1.33-2,2-3h2c0.67-1,1.33-2,2-3h2c0.33-.667.67-1.333,1-2h2c0.67-1,1.33-2,2-3h2c0.33-.667.67-1.333,1-2l3-1v-1l4-1v-1l3-1c0.33-.667.67-1.333,1-2l4-1c0.33-.667.67-1.333,1-2l4-1c0.33-.667.67-1.333,1-2h2v-1h2v-1h2v-1h2v-1l4-1c0.33-.667.67-1.333,1-2l5-1v-1h2v-1h2v-1h2v-1l6-2v-1h3v-1h2v-1h3v-1h2v-1l5-1v-1l6-1v-1h2v-1l10-2v-1h3v-1h3v-1l7-1v-1l8-1v-1l9-1v-1h4v-1h6v-1h5v-1h7v-1h8v-1h9v-1h16c10.17-2.875,28.77-1,41-1h85ZM624,841q-0.5,16.5-1,33h-1v9h-1v7c-1.476,4.917-2.49,12.22-4,17v5h-1v4h-1v4h-1v4h-1q-0.5,3.5-1,7h-1v4h-1v3h-1v3h-1v3h-1v3h-1v3h-1q-0.5,3-1,6h-1v2h-1q-0.5,3-1,6h-1q-0.5,2-1,4h-1v3h-1q-0.5,2-1,4h-1v3h-1q-1,3-2,6h-1v2h-1v2h-1v2h-1v2h-1v2h-1v2h-1v2l-2,1q-1,3-2,6c-0.667.33-1.333,0.67-2,1-0.333,1.33-.667,2.67-1,4-0.667.33-1.333,0.67-2,1-0.333,1.33-.667,2.67-1,4-0.667.33-1.333,0.67-2,1v2c-0.667.33-1.333,0.67-2,1v2h-1q-0.5,1.5-1,3c-0.667.33-1.333,0.67-2,1v2c-0.667.33-1.333,0.67-2,1v2c-1,.67-2,1.33-3,2v2c-0.667.33-1.333,0.67-2,1v2l-4,3q-0.5,1.5-1,3c-0.667.33-1.333,0.67-2,1v2c-1.667,1.33-3.333,2.67-5,4v2c-2,1.67-4,3.33-6,5v2q-7,6.495-14,13-6.5,7.005-13,14h-2l-5,6h-2c-1.333,1.67-2.667,3.33-4,5h-2l-2,3h-2c-1,1.33-2,2.67-3,4h-2c-0.333.67-.667,1.33-1,2h-2l-2,3h-2c-0.333.67-.667,1.33-1,2h-2c-0.333.67-.667,1.33-1,2h-2c-0.333.67-.667,1.33-1,2h-2c-0.333.67-.667,1.33-1,2h-2c-0.333.67-.667,1.33-1,2-1.333.33-2.667,0.67-4,1-0.333.67-.667,1.33-1,2-1.333.33-2.667,0.67-4,1-0.333.67-.667,1.33-1,2-2,.67-4,1.33-6,2-0.333.67-.667,1.33-1,2h-2v1h-2v1h-2v1h-2v1h-2v1h-2v1h-2v1c-2,.67-4,1.33-6,2v1c-1.666.33-3.334,0.67-5,1v1c-1.333.33-2.667,0.67-4,1v1q-24,7.995-48,16h-5v1h-4v1h-5v1h-5v1h-5v1q-7,.495-14,1c-13.629,3.91-32.8,3-50,3H185q3.5-12.495,7-25h1v-4h1v-3h1v-3h1v-3h1v-3h1l1-7c6.572-15.34,15.128-27.87,28-37l2-3h2c0.333-.67.667-1.33,1-2,1-.33,2-0.67,3-1v-1c1.333-.33,2.667-0.67,4-1v-1c2-.67,4-1.33,6-2v-1h3v-1h3v-1h3v-1h3v-1h5v-1h6v-1h14q16-1.005,32-2l31-6q16-5.505,32-11v-1c2-.67,4-1.33,6-2v-1h2v-1h2v-1h2v-1h2v-1h2v-1h2v-1h2v-1h2c0.333-.67.667-1.33,1-2,1.333-.33,2.667-0.67,4-1v-1c1-.33,2-0.67,3-1,0.333-.67.667-1.33,1-2h2c0.333-.67.667-1.33,1-2h2v-1c1-.33,2-0.67,3-1,0.333-.67.667-1.33,1-2h2c0.333-.67.667-1.33,1-2,1-.33,2-0.67,3-1,1-1.33,2-2.67,3-4h2q3-3.5,6-7h2l8-9,4-3v-2l7-6v-2l4-3v-2l3-2v-2l3-2v-2l2-1v-2l2-1,1-3h1l1-4,2-1,1-4,2-1v-2h1v-2h1v-2h1v-2l2-1,3-9h1l1-4h1l1-4,2-1v-2h1v-2h1v-2h1v-2l2-1,1-4C521.676,877.279,560.944,841.226,624,841Zm363,0c19.66-.144,37.38,4.024,51,10h3v1h2v1h3v1l4,1v1l4,1c0.33,0.667.67,1.333,1,2l6,2v1l3,1c0.33,0.667.67,1.333,1,2h2c0.67,1,1.33,2,2,3h2c0.67,1,1.33,2,2,3h2c1.67,2,3.33,4,5,6h2q3.495,4,7,8l3,2v2l6,5v2c1.33,1,2.67,2,4,3,0.33,1,.67,2,1,3,0.67,0.333,1.33.667,2,1v2c0.67,0.333,1.33.667,2,1,0.33,1,.67,2,1,3h1v2c0.67,0.333,1.33.667,2,1,0.33,1,.67,2,1,3h1q13.005,25,26,50h1c0.33,1,.67,2,1,3,0.67,0.333,1.33.667,2,1v2c0.67,0.333,1.33.667,2,1v2l3,2v2l3,2v2l3,2v2l6,5v2l9,8q4.5,5,9,10h2c1.33,1.67,2.67,3.33,4,5h2c1,1.33,2,2.67,3,4,1,0.33,2,.67,3,1,0.33,0.67.67,1.33,1,2h2c0.33,0.67.67,1.33,1,2h2c0.33,0.67.67,1.33,1,2h2c0.33,0.67.67,1.33,1,2h2c0.33,0.67.67,1.33,1,2,1.33,0.33,2.67.67,4,1,0.33,0.67.67,1.33,1,2,2,0.67,4,1.33,6,2,0.33,0.67.67,1.33,1,2,1.33,0.33,2.67.67,4,1v1h2v1c2,0.67,4,1.33,6,2v1h3v1c1.33,0.33,2.67.67,4,1v1h3v1h2v1c2,0.33,4,.67,6,1v1h2v1c2,0.33,4,.67,6,1v1q17.505,4.005,35,8l35,3h18v1h6v1c2.67,0.33,5.33.67,8,1v1c2,0.33,4,.67,6,1v1c1.67,0.33,3.33.67,5,1v1h2v1c1.33,0.33,2.67.67,4,1,0.33,0.67.67,1.33,1,2h2c0.33,0.67.67,1.33,1,2h2c0.33,0.67.67,1.33,1,2h2c1,1.33,2,2.67,3,4h2q3,3.495,6,7c0.67,0.33,1.33.67,2,1v2c1.33,1,2.67,2,4,3v2c0.67,0.33,1.33.67,2,1,0.33,1,.67,2,1,3h1c0.33,1.33.67,2.67,1,4,0.67,0.33,1.33.67,2,1v2h1l18,57H1292c-2.68-2.18-8,.16-12-1v-1h-9v-1h-7v-1h-6v-1h-6v-1h-5v-1h-4v-1h-5v-1h-4v-1h-4v-1c-2.33-.33-4.67-0.67-7-1v-1c-2.33-.33-4.67-0.67-7-1v-1h-3v-1h-3v-1h-3v-1c-2-.33-4-0.67-6-1v-1h-2v-1h-3v-1c-1.67-.33-3.33-0.67-5-1v-1h-2v-1h-3v-1h-2v-1h-3v-1c-2-.67-4-1.33-6-2v-1h-2v-1h-2v-1h-2v-1h-2v-1h-2v-1h-2v-1h-2v-1h-2v-1h-2v-1h-2v-1h-2c-0.33-.67-0.67-1.33-1-2-1.33-.33-2.67-0.67-4-1-0.33-.67-0.67-1.33-1-2-1.33-.33-2.67-0.67-4-1-0.33-.67-0.67-1.33-1-2h-2v-1h-2c-0.33-.67-0.67-1.33-1-2h-2v-1c-1-.33-2-0.67-3-1-0.33-.67-0.67-1.33-1-2h-2c-0.33-.67-0.67-1.33-1-2h-2c-0.67-1-1.33-2-2-3h-2c-0.33-.67-0.67-1.33-1-2h-2c-0.67-1-1.33-2-2-3h-2c-1-1.33-2-2.67-3-4h-2c-1-1.33-2-2.67-3-4h-2c-1.33-1.67-2.67-3.33-4-5-1-.33-2-0.67-3-1q-4.005-4.5-8-9h-2c-1-1.33-2-2.67-3-4q-4.5-4.005-9-8v-2q-4.995-4.5-10-9v-2c-1.67-1.33-3.33-2.67-5-4v-2c-0.67-.33-1.33-0.67-2-1v-1c-0.67-.33-1.33-0.67-2-1v-2c-1.33-1-2.67-2-4-3v-2c-1-.67-2-1.33-3-2v-2c-1-.67-2-1.33-3-2v-2c-0.67-.33-1.33-0.67-2-1-0.33-1-.67-2-1-3h-1v-2c-0.67-.33-1.33-0.67-2-1v-2c-0.67-.33-1.33-0.67-2-1v-2c-0.67-.33-1.33-0.67-2-1-0.33-1-.67-2-1-3h-1c-0.33-1.33-.67-2.67-1-4-0.67-.33-1.33-0.67-2-1-0.67-2-1.33-4-2-6-0.67-.33-1.33-0.67-2-1v-2h-1v-2h-1v-2h-1v-2c-0.67-.333-1.33-0.667-2-1-0.33-1.333-.67-2.667-1-4h-1c-0.67-2-1.33-4-2-6h-1v-3h-1v-2h-1c-0.67-2-1.33-4-2-6h-1v-3h-1v-2h-1c-0.33-1.667-.67-3.333-1-5h-1v-3C994.51,926.175,987.35,888.076,987,841ZM623,1060c1.931,2.13,1,9.15,1,13v36c0,33.13-6.863,62.69-17,86q-0.5,3-1,6h-1c-0.333,1.33-.667,2.67-1,4h-1v3h-1q-1,3-2,6h-1v2h-1v2h-1v2h-1v2h-1v2h-1v2h-1v2h-1v2c-0.667.33-1.333,0.67-2,1-0.333,1.33-.667,2.67-1,4-0.667.33-1.333,0.67-2,1v2h-1v2h-1q-0.5,1.5-1,3c-0.667.33-1.333,0.67-2,1v2h-1q-0.5,1.5-1,3c-0.667.33-1.333,0.67-2,1v2c-1,.67-2,1.33-3,2v2c-1,.67-2,1.33-3,2v2l-4,3v2c-1.667,1.33-3.333,2.67-5,4v2c-2,1.67-4,3.33-6,5l-10,12h-2q-4.5,4.995-9,10h-2c-1,1.33-2,2.67-3,4h-2c-1,1.33-2,2.67-3,4h-2l-2,3h-2l-2,3h-2c-0.333.67-.667,1.33-1,2h-2c-0.333.67-.667,1.33-1,2h-2c-0.333.67-.667,1.33-1,2h-2c-0.333.67-.667,1.33-1,2h-2v1h-2c-0.333.67-.667,1.33-1,2-1.333.33-2.667,0.67-4,1-0.333.67-.667,1.33-1,2h-2v1h-2v1h-2v1h-2v1h-2v1h-2v1h-2v1h-2v1h-2v1c-2,.67-4,1.33-6,2v1h-3v1h-2v1h-3v1h-2v1c-2,.33-4,0.67-6,1v1h-3v1h-3v1h-3v1h-3v1h-3v1q-6,1.005-12,2c-28.7,9.65-71.064,7-109,7H113v-1c2.544-2.31,1.524-3.73,3-7h1v-2h1c0.333-1.33.667-2.67,1-4h1v-3h1v-2h1v-2h1v-2h1v-3h1v-2h1c0.333-1.33.667-2.67,1-4h1v-3h1v-2h1v-2h1v-2h1c0.333-1.67.667-3.33,1-5h1c0.333-1.33.667-2.67,1-4h1v-3h1c0.333-1.33.667-2.67,1-4h1v-3h1c0.333-1.33.667-2.67,1-4h1v-2h1v-3h1v-2c0.667-.33,1.333-0.67,2-1,0.333-1.33.667-2.67,1-4,0.667-.33,1.333-0.67,2-1v-2l4-3v-2c0.667-.33,1.333-0.67,2-1,1-1.33,2-2.67,3-4h2c1-1.33,2-2.67,3-4h2c0.333-.67.667-1.33,1-2,1.333-.33,2.667-0.67,4-1,0.333-.67.667-1.33,1-2,15.73-8.37,43.344-6.45,67-7l84-3q24-.495,48-1v-1h9v-1h8v-1h6v-1h6v-1h5v-1h5v-1h4v-1h4v-1h4v-1h4v-1h3v-1h3v-1h3v-1h3v-1c3-.67,6-1.33,9-2v-1h2v-1h3v-1h2v-1h3v-1c1.333-.33,2.667-0.67,4-1v-1h3v-1c2-.67,4-1.33,6-2v-1h2v-1h2v-1h2v-1h2v-1h2v-1h2v-1h2c0.333-.67.667-1.33,1-2,2-.67,4-1.33,6-2,0.333-.67.667-1.33,1-2,1.333-.33,2.667-0.67,4-1v-1c1-.33,2-0.67,3-1,0.333-.67.667-1.33,1-2,1.333-.33,2.667-0.67,4-1,0.333-.67.667-1.33,1-2h2l2-3h2c0.333-.67.667-1.33,1-2h2c0.333-.67.667-1.33,1-2,1-.33,2-0.67,3-1l2-3h2l2-3h2c1-1.33,2-2.67,3-4h2l5-6h2c0.333-.67.667-1.33,1-2l4-3,5-6h2l5-6c0.667-.33,1.333-0.67,2-1v-2q6-5.505,12-11v-2c2-1.67,4-3.33,6-5v-2l4-3v-2l4-3v-2c1-.67,2-1.33,3-2v-2c1-.67,2-1.33,3-2q0.5-1.5,1-3c0.667-.33,1.333-0.67,2-1v-2c0.667-.33,1.333-0.67,2-1v-2c0.667-.33,1.333-0.67,2-1v-2c0.667-.33,1.333-0.67,2-1v-2c0.667-.33,1.333-0.67,2-1v-2c0.667-.33,1.333-0.67,2-1v-2c0.667-.33,1.333-0.67,2-1,0.333-1.33.667-2.67,1-4,0.667-.33,1.333-0.67,2-1,0.333-1.33.667-2.67,1-4,0.667-.33,1.333-0.67,2-1,0.333-1.33.667-2.67,1-4,0.667-.33,1.333-0.67,2-1v-2h1v-2h1v-2h1v-2C617.562,1071.2,621.685,1065.9,623,1060Zm874,298H1292c-33.9,0-74.27,3.28-101-5-3.33-.33-6.67-0.67-10-1v-1h-4v-1c-2.33-.33-4.67-0.67-7-1v-1h-3v-1l-13-3v-1h-2v-1c-2-.33-4-0.67-6-1v-1c-1.33-.33-2.67-0.67-4-1v-1h-3v-1c-1.33-.33-2.67-0.67-4-1v-1h-3v-1c-2-.67-4-1.33-6-2v-1h-2v-1c-1.33-.33-2.67-0.67-4-1-0.33-.67-0.67-1.33-1-2-2-.67-4-1.33-6-2-0.33-.67-0.67-1.33-1-2-1.33-.33-2.67-0.67-4-1-0.33-.67-0.67-1.33-1-2-1.33-.33-2.67-0.67-4-1-0.33-.67-0.67-1.33-1-2h-2v-1c-1-.33-2-0.67-3-1-0.33-.67-0.67-1.33-1-2h-2c-0.33-.67-0.67-1.33-1-2-1-.33-2-0.67-3-1-0.67-1-1.33-2-2-3h-2c-0.33-.67-0.67-1.33-1-2-1-.33-2-0.67-3-1-1.33-1.67-2.67-3.33-4-5h-2c-1.67-2-3.33-4-5-6h-2q-3-3.495-6-7-5.505-4.995-11-10c-0.33-1-.67-2-1-3-2-1.67-4-3.33-6-5v-2c-1.33-1-2.67-2-4-3v-2c-1-.67-2-1.33-3-2v-2c-1-.67-2-1.33-3-2-0.33-1-.67-2-1-3-0.67-.33-1.33-0.67-2-1v-2c-0.67-.33-1.33-0.67-2-1-0.33-1-.67-2-1-3h-1v-2c-0.67-.33-1.33-0.67-2-1-0.33-1-.67-2-1-3h-1c-0.33-1.33-.67-2.67-1-4-0.67-.33-1.33-0.67-2-1-0.67-2-1.33-4-2-6-0.67-.33-1.33-0.67-2-1-0.67-2-1.33-4-2-6h-1v-2h-1v-2h-1c-0.67-2-1.33-4-2-6h-1v-3h-1c-0.33-1.33-.67-2.67-1-4h-1v-3h-1v-2h-1v-3h-1v-2h-1c-0.33-2-.67-4-1-6h-1v-3h-1v-3h-1v-3h-1v-3h-1v-4h-1v-4h-1v-4h-1v-4h-1v-5h-1v-5h-1q-0.5-6.495-1-13h-1v-10c-1.64-5.8-1-15.57-1-23v-43h1v2c1.779,1.59.875,1.94,2,4h1v2h1v2h1v2h1v2h1v2h1c0.333,1.33.667,2.67,1,4,0.667,0.33,1.333.67,2,1q1,3,2,6c0.67,0.33,1.33.67,2,1,0.33,1.33.67,2.67,1,4,0.67,0.33,1.33.67,2,1v2h1v2c0.67,0.33,1.33.67,2,1v2c0.67,0.33,1.33.67,2,1v2c0.67,0.33,1.33.67,2,1v2c0.67,0.33,1.33.67,2,1v2c0.67,0.33,1.33.67,2,1v2c0.67,0.33,1.33.67,2,1v2c1,0.67,2,1.33,3,2v2c1,0.67,2,1.33,3,2v2c1,0.67,2,1.33,3,2v2c1,0.67,2,1.33,3,2v2c1.33,1,2.67,2,4,3v2c2,1.67,4,3.33,6,5v2q4.005,3.495,8,7v2q3.495,3,7,6,5.505,6,11,12c1,0.33,2,.67,3,1q3,3.495,6,7h2c1.33,1.67,2.67,3.33,4,5h2c1,1.33,2,2.67,3,4h2c0.67,1,1.33,2,2,3h2c0.67,1,1.33,2,2,3h2c0.67,1,1.33,2,2,3h2c0.33,0.67.67,1.33,1,2h2c0.33,0.67.67,1.33,1,2h2c0.33,0.67.67,1.33,1,2h2c0.33,0.67.67,1.33,1,2h2c0.33,0.67.67,1.33,1,2,1.33,0.33,2.67.67,4,1,0.33,0.67.67,1.33,1,2,1.33,0.33,2.67.67,4,1,0.33,0.67.67,1.33,1,2h2v1h2v1h2v1h2v1h2v1h2v1h2v1h2v1h2v1h2v1c1.33,0.33,2.67.67,4,1v1h2v1h3v1c1.33,0.33,2.67.67,4,1v1h3v1h2v1c2,0.33,4,.67,6,1v1h2v1q18,4.995,36,10h6v1h5v1h7v1h7v1h10v1h18v1h19q15,0.495,30,1c8.03,0,18.63-.79,25,1h35c1.36,0.38-.4.77,1,1,10.92,1.81,24.57-1.64,34,1h18v1h4v1h4v1h3v1h3v1h2v1c2,0.67,4,1.33,6,2,0.33,0.67.67,1.33,1,2h2c0.33,0.67.67,1.33,1,2h2q4.005,4.5,8,9c1.33,1,2.67,2,4,3v2c0.67,0.33,1.33.67,2,1v2c0.67,0.33,1.33.67,2,1,0.33,1.33.67,2.67,1,4h1c0.33,1.33.67,2.67,1,4h1v3h1v2h1c0.33,1.33.67,2.67,1,4h1v3h1c0.33,1.33.67,2.67,1,4h1v3h1v2h1c0.33,1.33.67,2.67,1,4h1v3h1v2h1c0.33,1.33.67,2.67,1,4h1v3h1v2h1v2h1v2h1c0.33,1.67.67,3.33,1,5h1c0.33,1.33.67,2.67,1,4h1v3h1Q1495,1352.505,1497,1358Zm-830-56c1,0.33,2,.67,3,1q3,18.495,6,37v16c0,15.48-1.686,28.98-6,40v3q-4,9.495-8,19c-0.667.33-1.333,0.67-2,1-0.333,1.33-.667,2.67-1,4h-1q-0.5,1.5-1,3c-0.667.33-1.333,0.67-2,1v2c-1,.67-2,1.33-3,2v2c-2,1.67-4,3.33-6,5v2l-4,3c-0.333.67-.667,1.33-1,2h-2l-5,6h-2l-2,3h-2l-2,3h-2c-0.333.67-.667,1.33-1,2-1.333.33-2.667,0.67-4,1-0.333.67-.667,1.33-1,2-2,.67-4,1.33-6,2v1h-2v1h-2v1h-2v1c-2,.67-4,1.33-6,2v1h-3v1h-2v1h-3v1h-2v1h-3q-6,2.505-12,5l-2-23h-1v-12c0-9.2-1.121-21.51,1-29v-8h1v-6h1v-5h1v-5c7.851-23.45,17.83-43.89,36-57,1.333-1.67,2.667-3.33,4-5h2l2-3c1-.33,2-0.67,3-1,0.333-.67.667-1.33,1-2h2c0.333-.67.667-1.33,1-2,1.333-.33,2.667-0.67,4-1,0.333-.67.667-1.33,1-2,1.333-.33,2.667-0.67,4-1,0.333-.67.667-1.33,1-2,1.333-.33,2.667-0.67,4-1v-1h2v-1h2v-1h2v-1h2v-1l9-3v-1c1.333-.33,2.667-0.67,4-1v-1C664.776,1302.74,664.971,1304.27,667,1302Zm274,0q6,1.995,12,4v1h2v1h3v1c2,0.67,4,1.33,6,2v1h2v1c2,0.67,4,1.33,6,2,0.333,0.67.667,1.33,1,2,1.333,0.33,2.667.67,4,1,0.333,0.67.667,1.33,1,2,1.333,0.33,2.667.67,4,1,0.333,0.67.667,1.33,1,2h2c0.333,0.67.667,1.33,1,2h2l2,3h2l2,3h2q4,4.5,8,9,4.5,4.005,9,8v2c1,0.67,2,1.33,3,2,0.33,1,.67,2,1,3,0.67,0.33,1.33.67,2,1,0.33,1.33.67,2.67,1,4,0.67,0.33,1.33.67,2,1,0.67,2,1.33,4,2,6h1v2h1c0.67,2,1.33,4,2,6h1v3h1v2h1v3h1v3h1v4h1v4h1v4h1v5h1q0.495,8.505,1,17h1v16q-0.495,13.995-1,28h-1q-0.495,7.5-1,15-9-2.505-18-5v-1h-2v-1h-3v-1c-1.33-.33-2.67-0.67-4-1v-1h-3v-1c-2-.67-4-1.33-6-2v-1c-1.333-.33-2.667-0.67-4-1-0.333-.67-0.667-1.33-1-2-1.333-.33-2.667-0.67-4-1-0.333-.67-0.667-1.33-1-2h-2c-0.333-.67-0.667-1.33-1-2h-2c-0.333-.67-0.667-1.33-1-2h-2l-2-3h-2c-1-1.33-2-2.67-3-4h-2q-3.5-4.005-7-8l-4-3v-2l-4-3v-2c-1-.67-2-1.33-3-2v-2c-0.667-.33-1.333-0.67-2-1q-0.5-1.5-1-3h-1q-1-3-2-6c-0.667-.33-1.333-0.67-2-1v-2h-1v-3h-1c-0.333-1.33-.667-2.67-1-4h-1v-3h-1v-3h-1v-3h-1v-3h-1v-4h-1v-4h-1v-5h-1v-7h-1v-15h-1l1-10c0.468-10.54.606-18.89,3-27v-6C939.228,1311.91,940.719,1307.19,941,1302Z" />
                    </svg>
                    {{-- <img src="assets/img/formosa.svg" class="img-fluid" alt=""> --}}
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Who We Are</h3>
                            <h2>PT. Formosa Ingredient Factory Tbk</h2>
                            <p>
                                PT. Formosa Ingredient Factory Tbk is a food company that produces beverage ingredients such
                                as tapioca pearls (bubble), jelly, jam, syrup that has been certified ISO 22000 – 2018
                                located in Tangerang and is developing new products and factories in the Teluk Naga
                                industrial area, Tangerang. The Company
                                cooperates and collaborates with Texture Maker Enterprise, which is a market leader in the
                                food and beverage industry in Taiwan. The Company has a large distribution network, both directly and
                                through distribution and marketing synergies with KMDS which have various customer profiles
                                and the business scale of the culinary industry with a very wide coverage throughout
                                Indonesia, namely through restaurants, local coffee shops and international chains stores,
                                premium modern market and retail.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>

                </div>
            </div>
        </section>

        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Our Values</h2>
                    <p>More than just Food and Beverage production</p>
                </header>

                <div class="row">

                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <img src="assets/img/values-1.png" class="img-fluid" alt="">
                            <h3>Our Vision</h3>
                            <p>To become a major business in the food and beverage industry on an international scale.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <img src="assets/img/values-2.png" class="img-fluid" alt="">
                            <h3>Our Plan</h3>
                            <p>Produces various of high quality ingredient beverage products.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <img src="assets/img/values-3.png" class="img-fluid" alt="">
                            <h3>Our Mission</h3>
                            <p>To produce a wide range of high quality and safe products for consumption.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <img src="assets/img/values-4.png" class="img-fluid" alt="">
                            <h3>Our Care</h3>
                            <p>provide quality products to all over the world.</p>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <section id="features" class="features">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Products</h2>
                    <p>Has many product variants to complement your food and drinks</p>
                </header>

                <div class="row">

                    <div class="col-lg-6">
                        <img src="assets/img/features.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Tapioca Pearls</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Sauce</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Syrup</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Jelly</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Drinking Powders</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="row feature-icons" data-aos="fade-up">
                    <h3>Why should choose us?</h3>

                    <div class="row">
                        <div class="col-xl-8 d-flex content">
                            <div class="row align-self-center gy-4">

                                <div class="col-md-6 icon-box" data-aos="fade-up">
                                    <i class="ri-award-line"></i>
                                    <div>
                                        <h4>Premium Ingredients</h4>
                                        <p>We use premium imported raw materials, and guaranteed quality</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="ri-thumb-up-line"></i>
                                    <div>
                                        <h4>Best Quality</h4>
                                        <p>Our products always pass through the quality control stage before being marketed
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i><svg xmlns="http://www.w3.org/2000/svg" style="width: 44px; height: 44px;"
                                            data-name="Layer 1" viewBox="0 0 36 36" id="halal">
                                            <path fill="#fff"
                                                d="M18 4a14 14 0 1 0 14 14A14 14 0 0 0 18 4ZM9.42 23.24a4 4 0 0 1-4-4 1 1 0 0 1 2 0 2 2 0 0 0 4 0v-8a1 1 0 0 1 2 0v8a4 4 0 0 1-4 4ZM30.51 23a1 1 0 0 1-.88.54h-5.37a5 5 0 0 1-1.68-.31 5.49 5.49 0 0 1-2.65-2.28 5.4 5.4 0 0 1-2.65 2.28 4.93 4.93 0 0 1-1.8.32 5.89 5.89 0 0 1-1.87-.31 1 1 0 0 1 .63-1.9 3.53 3.53 0 0 0 2.33 0 3.87 3.87 0 0 0 2.2-2.81L15.22 15a1 1 0 0 1 0-1.41 1 1 0 0 1 1.41 0l2.3 2.29v-4.6a1 1 0 1 1 2 0v5.63a4.37 4.37 0 0 0 2.36 4.44 3 3 0 0 0 1 .18h3.41l-2.37-3.36-.76.9A1 1 0 0 1 23 17.75l1.6-1.89a1 1 0 0 1 1.59.07l4.21 6a1 1 0 0 1 .11 1.07Z">
                                            </path>
                                            <path fill="#0757a1"
                                                d="M18 2a16 16 0 1 0 16 16A16 16 0 0 0 18 2Zm0 30a14 14 0 1 1 14-14 14 14 0 0 1-14 14Z">
                                            </path>
                                            <path fill="#0757a1"
                                                d="M13.42 11.24a1 1 0 0 0-2 0v8a2 2 0 0 1-4 0 1 1 0 0 0-2 0 4 4 0 0 0 8 0Z">
                                            </path>
                                            <path fill="#0757a1"
                                                d="m30.44 21.92-4.21-6a1 1 0 0 0-1.59-.07L23 17.75A1 1 0 0 0 24.57 19l.76-.9 2.37 3.4h-3.41a3 3 0 0 1-1-.18 4.37 4.37 0 0 1-2.36-4.44v-5.64a1 1 0 1 0-2 0v4.6l-2.3-2.29a1 1 0 0 0-1.41 0 1 1 0 0 0 0 1.41l3.55 3.55a3.87 3.87 0 0 1-2.2 2.81 3.53 3.53 0 0 1-2.33 0 1 1 0 0 0-.63 1.9 5.89 5.89 0 0 0 1.87.31 4.93 4.93 0 0 0 1.8-.32 5.4 5.4 0 0 0 2.65-2.28 5.49 5.49 0 0 0 2.65 2.28 5 5 0 0 0 1.68.31h5.37a1 1 0 0 0 .88-.54 1 1 0 0 0-.07-1.06Z">
                                            </path>
                                        </svg></i>
                                    <div>
                                        <h4>100% Halal</h4>
                                        <p>Our products already have official halal certificates and can be checked</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="ri-check-line"></i>
                                    <div>
                                        <h4>Apporved by BPOM</h4>
                                        <p>The safety of our products is our top priority, our products have also passed
                                            BPOM</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="ri-bubble-chart-line"></i>
                                    <div>
                                        <h4>Unique Texture</h4>
                                        <p>With premium raw materials, we guarantee that our products have a unique texture
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                    <i class="ri-star-line"></i>
                                    <div>
                                        <h4>More Flavours</h4>
                                        <p>We continue to improve the latest innovations in the taste of each of our
                                            products</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                            <img src="assets/img/features-3.png" class="img-fluid p-4" alt="">
                        </div>
                    </div>

                </div>

            </div>

        </section>


        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Company Management</h2>
                    <p>A warm welcome and lots of good wishes on becoming part of our growing team.</p>
                </header>

                <div class="row">

                    <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/team-1.webp" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Paporn Mahattanobol</h4>
                                <span>President Commissioner</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mt-4 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.webp" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Hengky Wijaya</h4>
                                <span>Commissioner</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mt-4 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/team-3.webp" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>David Alusinsing</h4>
                                <span>Independent Commissioner</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mt-4 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/team-4.webp" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Yunita Sugiarto</h4>
                                <span>President Director</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mt-4 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="500">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/team-5.webp" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Dewi Irianty Wijaya</h4>
                                <span>Vice Director</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mt-4 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="600">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/team-6.webp" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Ge, Ieyanto Yamin</h4>
                                <span>Director</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <section id="clients" class="clients">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Our Clients</h2>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-9.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-10.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-11.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-12.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-13.png" class="img-fluid"
                                alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section>

        <section id="faq" class="faq">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </header>
                <div class="col-lg-12">
                    <!-- F.A.Q List 1-->
                    <div class="accordion accordion-flush" id="faqlist1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-1">
                                    Can I ask for a sample of boba king products?
                                </button>
                            </h2>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    For product sample requests, please contact our CS number at <a
                                        href="callto:628118133788">+62 811 8133 788.</a>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-2">
                                    Who do I contact when I want to order a product?
                                </button>
                            </h2>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    You can order products by calling the number in <a href="#contact"
                                        class="scrollto">Contact</a>, or you can go through our official E-Commerce
                                    Platform.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-3">
                                    How heavy is the product sauce? and for how many servings of drinks?
                                </button>
                            </h2>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    <p>
                                        <b>Strawberry Sauce, Mango Sauce, Passion Fruit Sauce</b><br>
                                        The product weight is 2.3 kg. In one carton consists of 6 pcs. Generally it can be
                                        used for 46 servings of drinks with a dose of 50 grams for each portion. The measure
                                        can be adjusted to the needs of each drink that you make.
                                    </p>
                                    <p>
                                        <b>Caramel Sauce & Chocolate Sauce</b><br>
                                        The weight of this product is 1.35kg. In one carton contains 6 pcs of products. Can
                                        be for 33 servings with a measure of 30 ml in each portion. The measure can be
                                        adjusted according to your needs in making drinks
                                    </p>
                                    <p>
                                        All Boba King Sauce products can be used as dessert toppings, and can be created
                                        with your favorite drink or dessert!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-4">
                                    How long is the shelf life of sauce products? can it be stored at room temperature?
                                </button>
                            </h2>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    <p>
                                        <b>Strawberry Sauce, Mango Sauce, Passion Fruit Sauce</b><br>
                                        Shelf life before opening 12 months at room temperature 25°C - 28°C. Keep away from
                                        direct sunlight and strong smelling objects. If the packaging has been opened, it
                                        can be stored at room temperature which is not humid or stored in the refrigerator
                                        in the chiller section. It is recommended to close the sauce jar tightly, make sure
                                        there is no excess sauce on the edge of the jar/cover to avoid contamination
                                    </p>
                                    <p>
                                        <b>Caramel Sauce & Chocolate Sauce</b><br>
                                        The shelf life before opening is 12 months in a room temperature of 25°C - 28°C.
                                        Keep away from direct sunlight and strong smelling objects. Once the packaging has
                                        been opened, it must be stored in the refrigerator. Can last for 2 weeks - 1 month.
                                        It is recommended to shake the Caramel Sauce product before use, for Chocolate Sauce
                                        it is not necessary. Before storing in the refrigerator, make sure the product
                                        bottle cap is clean.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p><a href="https://goo.gl/maps/gvuTKty2fc9Gwnga7" target="_blank">Bojong Nangka,
                                            Tangerang<br>Banten 15810</a></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p><a href="callto:628118133788">+62 811 8133 788</a><br><a
                                            href="callto:6282123668884">+62 821 2366 8884</a></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p><a href="mailto:info@eformosa.id">info@eformosa.id</a><br><a
                                            href="mailto:sales@formosa.id">sales@formosa.id</a></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday<br>08:00 - 17:00 (UTC +7)</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
