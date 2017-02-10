<?php

namespace App\Http\Controllers;
use App\Product;
use App\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function index()
  {
    $contacts = Contact::all();
    return view('contact');
  }
  public function insertOne(Request $request)
  {
    $contact = new Contact;
    $contact->name = $request->name;
    $contact->content = $request->content;
    $contact->save();

    return redirect('/product');
  }
}
