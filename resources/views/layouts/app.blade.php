<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Garage Renault - Dacia Rond-Point de l'Europe">
    <meta name="keywords" content="garage, réparations, vente de véhicule, véhicule, dacia, renault">
    <meta name="author" content="Renault">
    <title>@yield('title', 'Garage Renault')</title>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');
    </style>        

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/jobOffers.js'])
    @yield('styles')

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/gif" href="img/favicon-renault.svg"/>

    {!! $jsonLdScript !!}

</head>


<body>
    <nav class="nav mask">
        <div class="nav-title"><a href="{{ route('index') }}"> Garage du Centre</a></div>
        <ul class="nav-links list">

            @auth
                <li><a href="{{route('index')}}#vehicles">Nos véhicules</a></li>
                <li><a href="{{route('index')}}#garage">Votre garage</a></li>
                <li><a href="{{ route('recrutement') }}">Recrutement</a></li>
                <li><a href="{{route('index')}}#loc">Nous trouver</a></li>
                <li><a href="{{ route('admin') }}">Admin</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>

            @else
                <li><a href="{{ route('index') }}">Accueil</a></li>
                <li><a href="{{route('index')}}#vehicles">Nos véhicules</a></li>
                <li><a href="{{route('index')}}#garage">Votre garage</a></li>
                <li><a href="{{route('index')}}#services">Nos services</a></li>
                <li><a href="{{ route('recrutement') }}">Recrutement</a></li>
                <li><a href="{{route('index')}}#loc">Nous trouver</a></li>
            @endauth
        </ul>
    </nav>

    <main>
        <div class="">
            @yield('content')
        </div>
        
    </main>


</body>

</html>