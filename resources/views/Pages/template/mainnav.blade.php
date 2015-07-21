<div id="categorymenu">
    <nav class="subnav hidden-phone">
        <ul class="nav-pills categorymenu">
            <li><a class="active"  href="{{url('/')}}">Accueil</a>

            </li>
            <li><a href="{{url('category')}}">Produits</a>

            </li>

            <li><a href="{{url('category')}}">Galerie</a>
            </li>

            <li><a href="{{url('contact')}}">Nous Contactez</a>
            </li>
        </ul>
    </nav>
    <ul class="nav nav-tabs nav-stacked visible-phone phonetab" >

        <li >
            <a class="active"  href="{{url('/')}}">Accueil</a>
        </li>
        <li><a href="{{url('category')}}">Produits</a></li>
        <li><a href="{{url('category')}}">Galerie</a></li>
        <li><a href="{{url('contact')}}">Nous Contactez</a></li>
    </ul>

</div>
<style>
    .phonetab a{
        text-align: center;
        font-weight: bold;
        /*background-color:#6eb402 ;*/
        color:white;
        background: linear-gradient(90deg, #77bc02 ,#60a901); /* Standard syntax */
    }
    .phonetab a:hover{
        /*background-color:#fd9b02 ;*/
        background: linear-gradient(90deg, #fd9b02 ,#fd8202);
        color:white;
    }
    .phonetab p{
        background-color:#fd9002 ;
    }
</style>
<script>

</script>

{{--<div id="categorymenu">--}}
    {{--<nav class="subnav">--}}
        {{--<ul class="nav-pills categorymenu">--}}
            {{--<li><a class="active"  href="{{url('/')}}">Accueil</a>--}}

            {{--</li>--}}
            {{--<li><a href="{{url('category')}}">Produits</a>--}}

            {{--</li>--}}

            {{--<li><a href="{{url('category')}}">Galerie</a>--}}
            {{--</li>--}}

            {{--<li><a href="{{url('contact')}}">Nous Contactez</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</nav>--}}
{{--</div>--}}