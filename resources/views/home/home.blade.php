@extends('layouts.page')

@section('content')
    <title>Moobley</title>
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
    <nav class="nav-header col  s12">
        <div class="nav-wrapper row col s12">
            <a class="brand-logo col s2">
                <img class="responsive-img col s12" src="{{ asset('assets/images/logo/logo_branca.png') }}">
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="">Inicio</a></li>
                <li><a href="">Empresa</a></li>
                <li><a href="">Como funciona</a></li>
                <li><a href="">Para seu negócio</a></li>
            </ul>
        </div>
    </nav>

    <div class="carousel carousel-slider">
        <a class="carousel-item" href="#one!"><img src=" {{ asset('assets/images/carousel/slide-1.jpg') }} "></a>
        <a class="carousel-item" href="#two!"><img src=" {{ asset('assets/images/carousel/slide-2.jpg') }} "></a>
    </div>

    <div class="parallax-container mid-site">
        <div class="parallax">
            <img src=" {{ asset('assets/images/assets/midsite.jpg') }} ">
            <img class="icon" src=" {{ asset('assets/images/logo/icon.png') }} ">
            <div class="row col l12 about">
                <div class="col l12 ">
                    <b class="title">Missão e <span class="sublinhado">visão</span></b>
                    <p class="body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                        Nulla ut dui quis diam posuere pharetra. Nunc varius massa a scelerisque mollis. <br>
                        Duis vel mi at orci placerat interdum vitae ac arcu. Ut suscipit arcu a nisi faucibus, <br> in convallis odio placerat.<br>
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra,<br> per inceptos himenaeos.<br>
                        Quisque fermentum ultricies maximus. Fusce viverra molestie consectetur.<br>
                        Quisque mattis augue arcu, at blandit sem commodo eu.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/modules/home/home.js') }}"></script>
@stop


