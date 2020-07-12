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
                        Nascemos em 2019 com missão de revolucionar <br> os meios de pagamentos digitais<br> entre pessoas e empresas. <br>
                        Com um novo conceito, fazendo com que você ganhe dinheiro com gente indicando amigos.<br>
                        Somos uma Fintech e criamos uma plataforma de negócios mobile com dupla atuação, <br>
                        Mobilidade urbana e pagamentos digitais,<br>
                        criada para ser essencial na vida das pessoas!<br>
                        Esse propósito nos guia todos os dias.
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
                        O Moobley Cash nasceu com a Missão de desburocratizar <br>
                        o seu acesso a serviços financeiros e facilitar seu deslocamento no dia a dia,<br>
                        contribuindo com a qualidade de vida, <br>
                        proporcionando renda e oportunidade de negócios. <br>
                        Nossa visão e ser uma das melhores empresa de tecnologia em serviços <br>
                        de pagamentos digitais e mobilidade. <br>
                        E é por isso que nosso aplicativo foi criado para refletir tudo que acreditamos. <br>
                        Com ele, você tem uma experiência transparente, <br>
                        simples e justa. <br>
                        Como sempre deveria ter. <br>
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


