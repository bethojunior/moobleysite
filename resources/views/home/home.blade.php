@extends('layouts.page')
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
    <a class="carousel-item" href="#one!"><img src=" {{ asset('assets/images/carousel/slide-1') }} "></a>
    <a class="carousel-item" href="#two!"><img src=" {{ asset('assets/images/carousel/slide-2') }} "></a>
</div>


<script src="{{ asset('js/modules/home/home.js') }}"></script>
