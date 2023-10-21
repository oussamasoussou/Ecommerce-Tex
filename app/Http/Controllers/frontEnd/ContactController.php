<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\Information;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        return view('admin.contact.index', compact('contact'));
    }

    public function indexfront()
    {
        $listeCateg = Categorie::all();
        $information = Information::all();
        $categorie = [];
        foreach ($listeCateg as $ca) {
            $ca['sous_categorie'] = $ca->sous_categorie;
            $categorie[] = $ca;
        }
        $contact = Contact::all();
        return view('frontEnd.contact', compact('listeCateg','contact','information'));
    }

    public function create()
    {
        $information = Information::all();
        return view('frontEnd.contact', compact('information'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'desc' => 'required',
        ]);
        $contact = new Contact();
        $contact->nom = $request->input('nom');
        $contact->prenom = $request->input('prenom');
        $contact->tel = $request->input('tel');
        $contact->email = $request->input('email');
        $contact->desc = $request->input('desc');
        $contact->save();
        return redirect('/')->with('status', 'Nous avons bien reçu votre message.');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        $contact = Contact::all();
        return view('admin.contact.index', compact( 'contact' ));
    }
}
