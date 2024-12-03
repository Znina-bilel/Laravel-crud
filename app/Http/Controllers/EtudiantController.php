<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
class EtudiantController extends Controller
{
    public function liste_etudiant(){
        return view('etudiant.liste');
    }

    public function ajouter_etudiant(){
        return view('etudiant.ajouter');
    }
    public function ajouter_etudiant_traitement(Request $request){
$request->validate([
'Nom'=>'required',
'Prenom'=>'required',
'Classe'=>'required',



]);
$etudiant = new Etudiant();
$etudiant->Nom = $request->Nom;
$etudiant->Prenom = $request->Prenom;
$etudiant->Classe = $request->Classe;
$etudiant->save();

return redirect('/ajouter')->with('status', 'l etudiant est ajouter avec succes');
}
}
