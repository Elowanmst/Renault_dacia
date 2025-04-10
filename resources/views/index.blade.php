@extends('layouts.app')

@section('content')



{{-- <div id="navbar-container"></div>
    <script>
        fetch("navbar.php")
            .then(response => response.text())
            .then(data => document.getElementById("navbar-container").innerHTML = data);
    </script> --}}

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



    <section id="top">
        <div class="container">
            <h2>Bienvenue au garage du Centre</h2>
            <p>Réparations, maintenance, achat, revente</p>
        </div>
    </section>


    <section id="service">
        <h2>Nos Véhicules</h2>
        
       
        <h3>Nos véhicules d'occasion</h3>
        <div class="solution-cards">
            @foreach ($vehicles->where('type', 'used') as $vehicle)
                <div class="card-vehicle">
                    <h4>{{ $vehicle->brand }} {{ $vehicle->model }}</h4>
                    <img src="{{ asset('storage/' . $vehicle->picture) }}" alt="{{ $vehicle->brand }} {{ $vehicle->model }}" class="vehicle-image">
                    <p class="description">{{ $vehicle->description }}</p>
                    <div class="vehicle-details">
                        <p>Année : {{ $vehicle->year }}</p>
                        <p>Kilométrage : {{ $vehicle->mileage }} km</p>
                        <p>Transmission : {{ $vehicle->transmission }}</p>
                        <p>Puissance : {{ $vehicle->puissance }} CV</p>
                        <p>Carburant : {{ $vehicle->fuel }}</p>
                        <p>Type : {{ $vehicle->type }}</p>
                        <p>Prix : {{ $vehicle->price }} €</p>
                    </div>
                </div>
            @endforeach
        </div>

        <h3>Nos véhicules neuf</h3>

        <div class="solution-cards">
            @foreach ($vehicles->where('type', 'new') as $vehicle)
                <div class="card-vehicle">
                    <h4>{{ $vehicle->brand }} {{ $vehicle->model }}</h4>
                    <img src="{{ asset('storage/' . $vehicle->picture) }}" alt="{{ $vehicle->brand }} {{ $vehicle->model }}" class="vehicle-image">
                    <p class="description">{{ $vehicle->description }}</p>
                    <div class="vehicle-details">
                        <p>Année : {{ $vehicle->year }}</p>
                        <p>Kilométrage : {{ $vehicle->mileage }} km</p>
                        <p>Transmission : {{ $vehicle->transmission }}</p>
                        <p>Puissance : {{ $vehicle->puissance }} CV</p>
                        <p>Carburant : {{ $vehicle->fuel }}</p>
                        <p>Type : {{ $vehicle->type }}</p>
                        <p>Prix : {{ $vehicle->price }} €</p>
                    </div>
                </div>
            @endforeach
        </div>

        <h3>Expert ZE</h3>




    </section>


    <section id="garage">
    <h2>Votre garage</h2>

    <h3>Notre équipe</h3>


    <div class="solution-content">
            <div class="solution-text">
                <h3 class="wh">NOS SERVICES</h3>
            </div>

            <div class="solution-cards">
                @foreach ($services as $services)
                    <div class="card" style="background-image: url('{{ asset('storage/' . $services->picture) }}'); background-size: cover; background-position: center;">
                        <h4>{{ $services->name }}</h4>
                        <p>{{ $services->description }}</p>  
                    </div>
                @endforeach
            </div>
        </div>
 
               

        <h3>evenements à ne pas manquer</h3>

    </section>


    <section id="recrutement">
        <h2>Recrutement</h2>

    </section>

    <section id="loc">
        <h2>Nous trouver</h2>
        <h3>84 Boulevard Georges Pompidou - 85800 Saint Gilles Croix de Vie</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2736.1941415317524!2d-1.9522203236170579!3d46.7019038711212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4804f88345397091%3A0x17682f4bf879b4b5!2sGarage%20Du%20Centre!5e0!3m2!1sfr!2sfr!4v1742403150729!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h3>Horaires d'ouverture</h3>
        <table class="table-horaires">
            <thead>
                <tr>
                    <th>Jour</th>
                    <th>Matin</th>
                    <th>Après-midi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $jours = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
                @endphp
        
                @foreach ($jours as $jour)
                    <tr>
                        <td>{{ $jour }}</td>
                        <td>
                            @if (isset($horaires[$jour]))
                                {{ $horaires[$jour]->morningO ?? 'Fermé' }} - {{ $horaires[$jour]->morningC ?? 'Fermé' }}
                            @else
                                Fermé
                            @endif
                        </td>
                        <td>
                            @if (isset($horaires[$jour]))
                                {{ $horaires[$jour]->afternoonO ?? 'Fermé' }} - {{ $horaires[$jour]->afternoonC ?? 'Fermé' }}
                            @else
                                Fermé
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3>Fermeture exceptionelle</h3>

            <!-- horaire connecté a la base de données  -->


    </section>


    <section id="contact">
        <h2>Contact</h2>
        

    </section>

    <footer>
        <p>© 2025 - Garage du Centre RENAULT | DACIA  </p>
        <br>
        <p>created by ec-craft.fr  </p>

    </footer>


@endsection
