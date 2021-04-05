
@extends('layout')


@section('content')
    
<h1>CLients</h1>

<ul>

    {{-- FORMAT PHP --}}
    
    <?php foreach($clients as $client): ?>
        <li><?php echo $client['name']?></li>
    <?php endforeach; ?>


    <br><br>
    {{-- FORMAT BLADE  --}}


    {{-- Boucle sur les clients pour les afficher --}}
    @foreach($clients as $client)

        {{-- Ici il affiche juste le client avec le champ de la bdd ici name --}}
        <li>{{ $client->name }}</li>

    @endforeach

</ul>


<form action="/clients" method="POST">

    {{-- Crée un token pour la sécurité crée un input hidden --}}
    @csrf

    <div class="form-group">
        <input type="text" name="pseudo" class="form-control @error('pseudo') is-invalid @enderror">
        
        {{-- @error est actif seulement si la request->validate est actif --}}
        @error('pseudo')
            <div class="invalid-feedback">
                {{-- affiche le premier message d'erreur par rapport a pseudo --}}
                {{$errors->first('pseudo')}}
            </div>
        @enderror
   
    </div>

    <button type="submit" class="btn btn-primary">Ajouter le client</button>

</form>
@endsection
