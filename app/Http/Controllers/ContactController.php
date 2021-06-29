<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    
    public function store(Request $request){

    	$contact = new Contact;

    	$contact->firstname = $request->firstname;
    	$contact->lastname = $request->lastname;
    	$contact->email = $request->email;
    	$contact->number = $request->number;

    	$contact->save();


    	return response(json_encode($contact),200);
    }

    public function getContacts(){

    	return response(json_encode(Contact::get()),200);
    }

    public function getContact($id){

    	return response(json_encode(Contact::findOrFail($id)),200);
    	
    }
}
