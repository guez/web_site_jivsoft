<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactEmailSus;
use App\Mail\ContactUserEmailSus;
use Illuminate\Support\Facades\Mail;

class ContactControllerSus extends Controller
{
    public function registerContactSus(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email'         => 'required|email|max:150',
        ]);
        if ($validator->fails()) {
            return $validator->errors()->first();
        }

        Mail::to([$request->get('email') => $request->get('email')])
            ->send(new ContactEmailSus($request->get('email')));

        $request->merge(['user' => "Ing. Jessica Villacís"]);
        Mail::to(["Ing. Jessica Villacis" => 'jessicavillacis85@hotmail.com'])
            ->send(new ContactUserEmailSus($request->all()));
            
        $request->merge(['user' => "Ing. Jorge Iñiguez"]);
        Mail::to(["Ing. Jorge Iñiguez" => "jivsoft@hotmail.com"])
            ->send(new ContactUserEmailSus($request->all()));

        $request->merge(['user' => "Ing. Jorge Iñiguez"]);
        Mail::to(["Ing. Jorge Iñiguez" => "guezii63@gmail.com"])
            ->send(new ContactUserEmailSus($request->all()));
    
        return "OK";
    }
}
