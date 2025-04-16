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
            <div class="carousel-container">
                <button class="prev">❮</button>
                <div class="carousel">
                    @foreach ($vehicles->where('type', 'used') as $vehicle)
                        <div class="card-vehicle">
                            <h4>{{ $vehicle->brand }} {{ $vehicle->model }}</h4>
                            {{-- <img src="{{ asset('storage/' . $vehicle->picture) }}" alt="{{ $vehicle->brand }} {{ $vehicle->model }}" class="vehicle-image"> --}}
                            <p class="description">{{ $vehicle->description }}</p>
                            <div class="vehicle-details">
                                <p>{{ __('year') }} : {{ $vehicle->year }}</p>
                                <p>{{ __('mileage') }} : {{ $vehicle->mileage }} km</p>
                                <p>{{ __('Transmission') }} : {{ $vehicle->transmission }}</p>
                                <p>{{ __('horsepower') }} : {{ $vehicle->puissance }} CV</p>
                                <p>{{ __('fuel') }} : {{ $vehicle->fuel }}</p>
                                <p>{{ __('price') }} : {{ $vehicle->price }} €</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="next">❯</button>
            </div>

        <h3>Nos véhicules neuf</h3>
            <div class="carousel-container">
                <button class="prev">❮</button>
                <div class="carousel">
                    @foreach ($vehicles->where('type', 'new') as $vehicle)
                        <div class="card-vehicle">
                            <h4>{{ $vehicle->brand }} {{ $vehicle->model }}</h4>
                            {{-- <img src="{{ $vehicle->getFirstMediaUrl('vehicles', 'large') }}" alt="{{ $vehicle->brand }} {{ $vehicle->model }}"> --}}
                            <p class="description">{{ $vehicle->description }}</p>
                            <div class="vehicle-details">
                                <p>{{ __('year') }} : {{ $vehicle->year }}</p>
                                <p>{{ __('mileage') }} : {{ $vehicle->mileage }} km</p>
                                <p>{{ __('Transmission') }} : {{ $vehicle->transmission }}</p>
                                <p>{{ __('horsepower') }} : {{ $vehicle->puissance }} CV</p>
                                <p>{{ __('fuel') }} : {{ $vehicle->fuel }}</p>
                                <p>{{ __('price') }} : {{ $vehicle->price }} €</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="next">❯</button>
            </div>

        <h3>Expert ZE</h3>



        

    </section>


    <section id="garage">
    <h2>Votre garage</h2>

    <div class="">
        <h3>Notre équipe</h3>

        
    </div>

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
 
            

        @if ($exceptionalEvents->isNotEmpty())
            <h3>Événements à ne pas manquer</h3>
            <div class="exceptionalEvents-container">
                @foreach ($exceptionalEvents as $exceptionalEvent)
                    <div class="exceptionalEvent-card">
                        <h4>{{ $exceptionalEvent->name }}</h4>
                        <p>{{ $exceptionalEvent->description }}</p>
                        <p>{{ __('Date') }} : du {{ $exceptionalEvent->start_date->format('d/m/Y') }} au {{ $exceptionalEvent->end_date->format('d/m/Y') }}</p>
                    </div>
                @endforeach
            </div>
        @endif

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

        @if ($exceptionalClosures->isNotEmpty())
            <h3>Fermeture exceptionelle</h3>
            <div class="exceptionalClosures-container">
                @foreach ($exceptionalClosures as $exceptionalClosure)
                    <div class="exceptionalClosure-card">
                        <p>Du : {{ $exceptionalClosure->start_date->format('d/m/Y') }} au {{ $exceptionalClosure->end_date->format('d/m/Y') }}</p>
                    </div>
                @endforeach
            </div>
        @endif

        


    </section>
    
    <footer>
        <p>© 2025 - Garage du Centre RENAULT | DACIA  </p>
        <br>
        <p>created by ec-craft.fr  </p>

    </footer>

    <button id="openModal" class="btn-primary">Contactez-nous</button>
    {{-- fenetre modal --}}
    <div id="contactModal" class="modal">
        <div class="modal-overlay">
            <div class="container">
                <div class="screen">
                    <div class="screen-header">
                        <div class="screen-header-left">
                            <div class="screen-header-button close"></div>
                            <div class="screen-header-button maximize"></div>
                            <div class="screen-header-button minimize"></div>
                        </div>
                        <div class="screen-header-right">
                            <span class="close">&times;</span>
                        </div>
                    </div>
                    <div class="screen-body">
                        <div class="screen-body-item left">
                            <div class="app-title">
                                <span>CONTACTEZ-NOUS</span>
                                <p class="telContact">Tel : +33 2 51 55 83 26<br>Adresse : 84 Bd Georges Pompidou<br>85800 Saint-Gilles-Croix-de-Vie</p>
                            </div>
                            <div class="app-contact">* infos requis</div>
                        </div>
                        <div class="screen-body-item">
                                    <div class="app-form-group">
                                        <input class="app-form-control" name="nom" placeholder="NOM*" required>
                                    </div>
                                    <div class="app-form-group">
                                        <input class="app-form-control" name="prenom" placeholder="PRENOM*" required>
                                    </div>
                                    <div class="app-form-group">
                                        <input class="app-form-control" name="entreprise" placeholder="ENTREPRISE">
                                    </div>
                                    <div class="app-form-group">
                                        <input class="app-form-control" name="email" type="email" placeholder="EMAIL*" required>
                                    </div>
                                    <div class="app-form-group message">
                                        <textarea class="app-form-control" name="message" placeholder="MESSAGE*" required></textarea>
                                    </div>
                                    <div class="app-form-group buttons">
                                        <button type="submit" class="app-form-button">Envoyer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    




@endsection
