<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function registerContact(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name'          => 'required|max:255',
            'enterprise'    => 'nullable|max:255',
            'email'         => 'required|email|max:150',
            'phone'         => 'required|max:15',
            'subject'       => 'required|max:255',
            'message'       => 'required|max:5000',
        ]);
        if ($validator->fails()) {
            return $validator->errors()->first();
        }
        
        Mail::to([ $request->get('name')=> $request->get('email')])
            ->send(new ContactEmail($request->get('name')));

        return "OK";
    }
}
