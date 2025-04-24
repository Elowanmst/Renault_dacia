<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Garage Renault - Dacia Rond-Point de l'Europe">
    <meta name="keywords" content="garage, réparations, vente de véhicule, véhicule, dacia, renault">
    <meta name="author" content="Renault">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');
    </style>        
    <title>Garage Renault</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    @yield('styles')

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/gif" href="img/favicon-renault.svg"/>

</head>


<body>

    <div class="sidebar">
        <h2>Admin Panel</h2>
        
        <a href="{{ route('index') }}">🏠</a>

        <ul>
            <li><a href="{{ route('admin') }}">Dashboard</a></li>
            <li><a href="{{ route('users.index') }}">{{ __('Users') }}</a></li>
            <li><a href="{{ route('vehicles.index') }}">{{ __('Vehicles') }}</a></li>
            <li><a href="{{ route('services.index') }}">{{ __('Services') }}</a></li>
            <li><a href="{{ route('horaires.index') }}">{{ __('Opening hours') }}</a></li>
            <li><a href="{{ route('exceptional-closures.index') }}">{{ __('Exceptional closures') }}</a></li>
            <li><a href="{{ route('exceptional-events.index') }}">{{ __('Exceptional events') }}</a></li>
            <li><a href="{{ route('team_members.index') }}">{{ __('Our team') }}</a></li>
            <li><a href="{{ route('job_offers.index') }}">{{ __('Recruitment') }}</a></li>
        </ul>
    
        <form method="POST" action="{{ route('logout') }}" >
            @csrf
            <button type="submit" class="btn">Logout</button>
        </form>
    </div>

    @yield('content')
        
</body>

</html>