@if (\Auth::guest())

    <div class="headerstrip">
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">

                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <!-- Be sure to leave the brand out there if you want it shown -->
                    <a class="brand" href="#"></a>
                    <ul class="nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Euro
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>Us Doller</li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                French
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="">English</a></li>
                            </ul>
                        </li>

                    </ul>
                    <!-- Everything you want hidden at 940px or less, place within here -->
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="active">
                                <a class="home" href="{{url('/')}}">Accueil</a>
                            </li>
                            <li><a class="myaccount" href="{{url('auth/register')}}">Mon Compte</a></li>
                            <li><a class="shoppingcart" href="{{url('auth/login')}}">Panier</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        {{--<div class="container">--}}
        {{--<div class="row">--}}
        {{--<div class="span12">--}}






        {{--<div class="pull-left">--}}
        {{--<div class="navbar">--}}

        {{--<ul class="nav language pull-left">--}}
        {{--<li class="dropdown hover">--}}
        {{--<a href="#" class="dropdown-toggle" data-toggle="">Euro <b class="caret"></b></a>--}}
        {{--<ul class="dropdown-menu currency">--}}
        {{--<li><a href="#">US Doller</a>--}}
        {{--</li>--}}


        {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="dropdown hover">--}}
        {{--<a href="#" class="dropdown-toggle" data-toggle="">French <b class="caret"></b></a>--}}
        {{--<ul class="dropdown-menu language">--}}
        {{--<li><a href="#">English</a>--}}
        {{--</li>--}}

        {{--</ul>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</div>--}}



        {{--</div>--}}






        {{--<!-- Top Nav Start -->--}}
        {{--<div class="pull-right">--}}
        {{--<div class="navbar" id="topnav">--}}
        {{--<div class="navbar-inner">--}}
        {{--<ul class="nav" >--}}
        {{--<li><a class="home active" href="{{url('/')}}">Accueil</a>--}}
        {{--</li>--}}
        {{--<li><a class="myaccount" href="{{url('auth/register')}}">Mon Compte</a>--}}
        {{--</li>--}}
        {{--<li><a class="shoppingcart" href="{{url('auth/login')}}">Panier</a>--}}
        {{--</li>--}}

        {{--</ul>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<!-- Top Nav End -->--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>


@elseif(!\Auth::guest())


    <div class="headerstrip">
        <div class="container">
            <div class="row">
                <div class="span12">

                    <div class="pull-left">
                        <div class="navbar">

                            <ul class="nav language pull-left">
                                <li class="dropdown hover">
                                    <a href="#" class="dropdown-toggle" data-toggle="">Euro <b class="caret"></b></a>
                                    <ul class="dropdown-menu currency">
                                        <li><a href="#">US Doller</a>
                                        </li>


                                    </ul>
                                </li>
                                <li class="dropdown hover">
                                    <a href="#" class="dropdown-toggle" data-toggle="">French <b class="caret"></b></a>
                                    <ul class="dropdown-menu language">
                                        <li><a href="#">English</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>



                    </div>



                    <!-- Top Nav Start -->
                    <div class="pull-right">
                        <div class="navbar" id="topnav">
                            <div class="navbar-inner">
                                <ul class="nav" >
                                    <li><a class="home active" href="{{url('/')}}">Accueil</a>
                                    </li>
                                    <li><a class="shoppingcart" href="cart">Panier</a>
                                    </li>
                                    <li><a class="{{url('auth/logout')}}" href="{{url('auth/logout')}}">Se D�connecter</a>
                                    </li>

                                    <li class="dropdown hover">
                                        <a href="#" class="dropdown-toggle" data-toggle="">{{Auth::user()->name}} <b class="caret"></b></a>
                                        <ul class="dropdown-menu ">
                                            <li><a class="myaccount" href="#">Se D�connecter</a>
                                            </li>


                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Nav End -->

                </div>
            </div>
        </div>
    </div>

@endif

















{{--@if (\Auth::guest())--}}

{{--<div class="headerstrip">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="span12">--}}


                    {{--<div class="pull-left">--}}
                        {{--<div class="navbar">--}}

                            {{--<ul class="nav language pull-left">--}}
                                {{--<li class="dropdown hover">--}}
                                    {{--<a href="#" class="dropdown-toggle" data-toggle="">Euro <b class="caret"></b></a>--}}
                                    {{--<ul class="dropdown-menu currency">--}}
                                        {{--<li><a href="#">US Doller</a>--}}
                                        {{--</li>--}}


                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li class="dropdown hover">--}}
                                    {{--<a href="#" class="dropdown-toggle" data-toggle="">French <b class="caret"></b></a>--}}
                                    {{--<ul class="dropdown-menu language">--}}
                                        {{--<li><a href="#">English</a>--}}
                                        {{--</li>--}}

                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                    {{--</div>--}}



                    {{--<!-- Top Nav Start -->--}}
                {{--<div class="pull-right">--}}
                    {{--<div class="navbar" id="topnav">--}}
                        {{--<div class="navbar-inner">--}}
                            {{--<ul class="nav" >--}}
                                {{--<li><a class="home active" href="{{url('/')}}">Accueil</a>--}}
                                {{--</li>--}}
                                {{--<li><a class="myaccount" href="{{url('auth/register')}}">Mon Compte</a>--}}
                                {{--</li>--}}
                                {{--<li><a class="shoppingcart" href="{{url('auth/login')}}">Panier</a>--}}
                                {{--</li>--}}

                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Top Nav End -->--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


{{--@elseif(!\Auth::guest())--}}


{{--<div class="headerstrip">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="span12">--}}


                {{--<div class="pull-left">--}}
                    {{--<div class="navbar">--}}

                        {{--<ul class="nav language pull-left">--}}
                            {{--<li class="dropdown hover">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="">Euro <b class="caret"></b></a>--}}
                                {{--<ul class="dropdown-menu currency">--}}
                                    {{--<li><a href="#">US Doller</a>--}}
                                    {{--</li>--}}


                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="dropdown hover">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="">French <b class="caret"></b></a>--}}
                                {{--<ul class="dropdown-menu language">--}}
                                    {{--<li><a href="#">English</a>--}}
                                    {{--</li>--}}

                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}



                {{--</div>--}}



                {{--<!-- Top Nav Start -->--}}
                {{--<div class="pull-right">--}}
                    {{--<div class="navbar" id="topnav">--}}
                        {{--<div class="navbar-inner">--}}
                            {{--<ul class="nav" >--}}
                                {{--<li><a class="home active" href="{{url('/')}}">Accueil</a>--}}
                                {{--</li>--}}
                                {{--<li><a class="shoppingcart" href="cart">Panier</a>--}}
                                {{--</li>--}}
                                {{--<li><a class="{{url('auth/logout')}}" href="{{url('auth/logout')}}">Se D�connecter</a>--}}
                                {{--</li>--}}

                                {{--<li class="dropdown hover">--}}
                                    {{--<a href="#" class="dropdown-toggle" data-toggle="">{{Auth::user()->name}} <b class="caret"></b></a>--}}
                                    {{--<ul class="dropdown-menu ">--}}
                                        {{--<li><a class="myaccount" href="#">Se D�connecter</a>--}}
                                        {{--</li>--}}


                                    {{--</ul>--}}
                                {{--</li>--}}

                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Top Nav End -->--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

    {{--@endif--}}
