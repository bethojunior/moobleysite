<nav class="nav-header col  s12">
    <div class="nav-wrapper row col s12">

        <img class="responsive-img" src="{{ asset('assets/images/logo/logo_branca.png') }}">

        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/">Inicio</a></li>
            <li><a href="">Empresa</a></li>
            <li><a href="/how">Como funciona</a></li>
            <li><a href="/business">Para seu negócio</a></li>
        </ul>
    </div>
</nav>


{{--MOBILE--}}
<ul id="slide-out" class="side-nav">
    <li><div class="user-view">
            <div class="background">
{{--                <img src="{{ asset('assets/images/logo/logo.png') }}">--}}
            </div>
            <div class="center">
                <img width="100vw" class="responsive-img" src="{{ asset('assets/images/logo/logo.png') }}">
            </div>
        </div></li>
    <li><div class="divider"></div></li>
    <li><a href="/">Inicio</a></li>
    <li><a href="/business">Empresa</a></li>
    <li><a href="/how" class="waves-effect">Como funciona</a></li>
    <li><a class="waves-effect" href="#!">Para seu negócio</a></li>
</ul>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

