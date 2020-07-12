@extends('layouts.page')

@section('content')
    <title>Moobley</title>
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
    @extends('nav.header')
    <div class="carousel carousel-slider">
        <a class="carousel-item" href="#one!"><img src=" {{ asset('assets/images/carousel/slide-1.jpg') }} "></a>
        <a class="carousel-item" href="#two!"><img src=" {{ asset('assets/images/carousel/slide-2.jpg') }} "></a>
    </div>
    <div class="parallax-container mid-site about-we">
        <div class="parallax">
            <img src=" {{ asset('assets/images/assets/about-we.jpg') }} ">
            {{--            <img src=" {{ asset('assets/images/assets/hands.png') }} " width="10" height="10" style="left: 0;top: 0;display: block;">--}}
            <div class="row col l12 about">
                <div class="col l12 ">
                    <b class="title">Sobre <span class="sublinhado">Nós</span></b>
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
    <div class="parallax-container mid-site with-logo">
        <div class="parallax">
            <img src=" {{ asset('assets/images/assets/midsite.jpg') }} ">
            <img width="10" class="icon" src=" {{ asset('assets/images/logo/icon.png') }} ">
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

    <footer class="flex-div footer-copyright">
        <div class="logo">
            <img class="responsive-img" src="{{ asset('assets/images/logo/logo_branca.png') }}">
        </div>
    </footer>
    <script src="{{ asset('js/modules/home/home.js') }}"></script>
@stop


