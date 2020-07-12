<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Raleway" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="theme-color" content="#2AB34B"/>
<link href="{{ asset('assets/images/logo/icon.png') }}" rel="icon">
<link rel="stylesheet" href="{{ asset('css/default/config.css') }}">
<link rel="stylesheet" href="{{ asset('config/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/nav/nav.css') }}">
<link rel="stylesheet" href="{{ asset('css/default/materialize.min.css') }}">


<script src="{{ asset('config/main.js') }}"></script>
<script src="{{ asset('js/libs/jquery.js') }}"></script>
<script src="{{ asset('js/libs/materialize.min.js') }}"></script>
<script src="{{ asset('js/modules/nav/nav.js') }}"></script>
<script src="{{ asset('js/utils/ElementProperty.js') }}"></script>
<script src="{{ asset('js/service/Session.js') }}"></script>
<script src="{{ asset('js/libs/sweetalertmin.js') }}"></script>
<script src="{{ asset('js/utils/SwalCustom.js') }}"></script>
<script src="{{ asset('js/service/ConnectionServer.js') }}"></script>
<script src="{{ asset('js/service/Init.js') }}"></script>
<script src="{{ asset('js/utils/Mask.js') }}"></script>
<script src="{{ asset('js/service/MainServices.js') }}"></script>

@yield('content')
