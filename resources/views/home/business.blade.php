@extends('layouts.page')

@section('content')
    <title>Moobley - Negócios</title>
    <link rel="stylesheet" href="{{ asset('css/home/business.css') }}">
    @extends('nav.header')

    <div class="row general col l12 s12">
        <header class="col l12 s12 center">
            <span>Qual seu <b>negocio</b>?</span>
        </header>
        <div class="row col l12">
            <div class="col l6 s12 first">
                <div class="center">
                    <img src="{{ asset('assets/images/icons/persona.png') }}">
                </div>
                <div class="center title">
                    <b class="title">Profissional <br> liberal</b>
                </div>
                <div class="center subtitle">
                    <label class="subtitle">
                        Vendedor de produtos <br>
                        e serviços e sem pontos fisicos
                    </label>
                </div>
                <div class="center buttons">
                    <button class="btn btn-main latter">Saiba mais</button>
                </div>
            </div>
            <div class="col l6 s12 second">
                <div class="center">
                    <img src="{{ asset('assets/images/icons/business.png') }}">
                </div>
                <div class="center title">
                    <b class="title">Empresas ou <br> estabelecimentos <br> com ponto fisico</b>
                </div>
                <div class="center subtitle">
                    <label class="subtitle">
                        Postos de gasolina <br>
                        supermercados, salão de beleza,<br>
                        panificadoras entre outros.
                    </label>
                </div>
                <div class="center buttons">
                    <button class="btn btn-main latter">Saiba mais</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/modules/home/business.js') }}"></script>
@stop
