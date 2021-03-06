
{{-- Le layout sert de template de page --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body class="container">

        {{-- NAVBAR  --}}
        
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" href="/">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="a-propos">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact">Contactez-nous</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="clients">Voir nos clients</a>
            </li>
        </ul>


        {{-- Permet de recuperer le contenue des pages --}}
        @yield('content')

    </body>
</html>
