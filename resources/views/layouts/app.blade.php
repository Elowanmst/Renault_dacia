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
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" type="image/gif" href="img/favicon-renault.svg"/>
</head>


<body>
    <nav class="nav mask">
        <div class="nav-title">Garage RENAULT - DACIA</div>
        <ul class="nav-links list">
            <li><a href="#top">Accueil</a></li>
            <li><a href="#service">Nos services</a></li>
            <li><a href="#garage">Votre garage</a></li>
            <li><a href="#recrutement">Recrutement</a></li>
            <li><a href="#loc">Nous trouvez</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

</body>

</html>