@extends('layouts.page')

@section('content')
    <title>Moobley - Como funciona</title>
    <link rel="stylesheet" href="{{ asset('css/home/how.css') }}">
    @extends('nav.header')

    <div class="row general col l12 s12">
        <header class="row col l12 s12">
            <div class="col l4 s12"></div>
            <div class="col l8 s12">
                <header>
                    <p class="center">
                        <b class="title">
                            Sua conta digital
                        </b>
                    </p>
                    <div class="row about">
                        <div class="col l6 col s12 first">
                            <div class="center">
                                <img class="responsive-img" src="{{ asset('assets/images/icons/lock.svg') }}">
                            </div>
                            <div class="center">
                                <p>
                                    <b class="color-main">Sem taxas</b>
                                </p>
                                <p>
                                    <label>
                                        Sem anuidade, sem mensalidade, <br>
                                        sua conta e 100% segura.
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="col l6 col s12">
                            <div class="center">
                                <img class="responsive-img" src="{{ asset('assets/images/icons/MONEY.svg') }}">
                            </div>
                            <div class="center">
                                <p>
                                    <b class="color-main">Sua conta 100% seguro</b>
                                </p>
                                <p>
                                    <label>
                                        Seus dados são todos criptografados e com todos <br>
                                        aparatos de sistema antifraudes
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </header>
    </div>

    <script src="{{ asset('js/modules/home/how.js') }}"></script>
@stop
