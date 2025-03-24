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
        <h2>Nos services</h2>
        <h3>Nos véhicules d'occasion</h3>

        <h3>Nos véhicules neuf</h3>

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
                <div class="card">
                    <h4>Vidange</h4>
                    <p>sous service</p>

                    <p>vous faite quoi a la vidange ?</p>
                    <ul class="custom-list">
                        <li>?</li>
                        <li>?</li>
                        <li>?</li>
                    </ul>
                </div>
                <div class="card">
                    <h4>Entretiens</h4>
                    <p>sous service</p>
                    <p>c'est quoi un entretiens ?</p>
                    <ul class="custom-list">
                        <li>?</li>
                        <li>?</li>
                        <li>?</li>
                    </ul>
                </div>
                <div class="card">
                    <h4>reparations en tout genre</h4>
                    <p>sous service</p>
                    <p>cest quoi une reparation</p>
                    <ul class="custom-list">
                        <li>?</li>
                        <li>?</li>
                        <li>?</li>
                    </ul>
                </div>
                <div class="card">
                    <h4>?</h4>
                    <p>?</p>
                    <p>?</p>
                    <ul class="custom-list">
                        <li>?</li>
                        <li>A?</li>
                        <li>?</li>
                    </ul>
                </div>
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
            {{-- <caption>Horaires d'ouverture</caption> --}}
            <thread>
                <tr>
                    <th>Jour</th>
                    <th>Matin</th>
                    <th>Après-midi</th>
                </tr>
            </thread>
            <tbody>

            <tr>
                <td>Lundi</td>
                <td>09:00 - 12:00</td>
                <td>14:00 - 18:00</td>
            </tr>
            <tr>
                <td>Mardi</td>
                <td>08:00 - 12:00</td>
                <td>14:00 - 18:00</td>
            </tr>
            <tr>
                <td>Mercredi</td>
                <td>08:00 - 12:00</td>
                <td>14:00 - 18:00</td>
            </tr>
            <tr>
                <td>Jeudi</td>
                <td>08:00 - 12:00</td>
                <td>14:00 - 18:00</td>
            </tr>
            <tr>
                <td>Vendredi</td>
                <td>08:00 - 12:00</td>
                <td>14:00 - 18:00</td>
            </tr>
            <tr>
                <td>Samedi</td>
                <td>fermé</td>
                <td></td>
            </tr>
            <tr>
                <td>Dimanche</td>
                <td>Fermé</td>
                <td></td>
            </tr>

            </tbody>

        </table>

        <h3>Fermeture exceptionelle</h3>

            <!-- horaire connecté a la base de données  -->


    </section>


    <section id="contact">
        <h2>Contact</h2>
        

    </section>

    <footer>
        <p>© 2021 - Garage du Centre RENAULT | DACIA  </p>
        <br>
        <p>create by ec-craft.fr  </p>

    </footer>




@endsection
