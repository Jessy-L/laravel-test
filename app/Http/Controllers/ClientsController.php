<?php

namespace App\Http\Controllers;


use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function list(){

        // recupère les client de la base de donnée
        $clients = Client::all();
    
        return view('clients.index', [
            "clients" => $clients 
        ]);
    }

    public function store(){

        // Le champ pseudo est required
        request()->validate([
            'pseudo' => 'required'
        ]);

        // recup la valeur de l'input pseudo 
        $pseudo = request('pseudo');

        // add le pseudo dans la bdd 
        $client = new Client(); 
        $client->name = $pseudo;
        $client->save();

        // retourne sur la page d'avant
        return back();
    }
}
