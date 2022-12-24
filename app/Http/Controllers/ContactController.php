<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Muestra todo los contactos
    public function index() {
        return view('pages/index', ['contacts' => Contact::all()]);
    }
    // Crea un nuevo contacto
    public function createOne(Request $request) {
        $contact = new Contact;
        $contact->name = $request->name_contact;
        $contact->surname = $request->surname_contact;
        $contact->phone = $request->phone_contact;
        $contact->email = $request->email_contact;
        $contact->save();
        return redirect('/');
    }
    // Borra un registro
    public function deleteOne($id) {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/');
    }
    // Actualizar un registro
    public function updateOne(Request $request, $id) {
        $contact = Contact::find($id);
        $contact->name = $request->name_contact;
        $contact->surname = $request->surname_contact;
        $contact->phone = $request->phone_contact;
        $contact->email = $request->email_contact;
        $contact->save();
        return redirect('/');
    }
}
