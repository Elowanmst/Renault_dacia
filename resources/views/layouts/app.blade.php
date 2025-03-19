<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Garage Renault - Dacia Rond-Point de l'Europe">
    <meta name="keywords" content="garage, réparations, vente de véhicule, véhicule, dacia, renault">
    <meta name="author" content="Renault">
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

    <header>
        <div class="hero">
            <div class="petit-carre">
                <h1 class="titre">
                    <img src="img/renault-dacia.png" alt="Dacia Logo" class="logo">
                </h1>
                <p class="textsous">📍 Saint Gilles Croix de Vie</p>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>