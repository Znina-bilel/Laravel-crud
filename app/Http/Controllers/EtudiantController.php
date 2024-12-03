<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
class EtudiantController extends Controller
{
    public function liste_etudiant(){
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
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

public function  update_etudiant($id) {
    $etudiants = Etudiant::find($id);
    return view('etudiant.update', compact('etudiants'));

}

public function update_etudiant_traitement(Request $request){

    $request->validate([
        'Nom'=>'required',
        'Prenom'=>'required',
        'Classe'=>'required',
        ]);
        $etudiant =  Etudiant::find($request->id);
$etudiant->Nom = $request->Nom;
$etudiant->Prenom = $request->Prenom;
$etudiant->Classe = $request->Classe;
$etudiant->update();

return redirect('/etudiant')->with('status', 'l etudiant est modifié avec succes');

}


}
